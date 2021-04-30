<?php

declare(strict_types=1);

/**
 * @copyright 2020 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2020 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace OCA\Mail\Listener;

use Horde_Imap_Client;
use OCA\Mail\Events\NewMessagesSynchronized;
use OCA\Mail\Exception\ServiceException;
use OCA\Mail\Service\Classification\ImportanceClassifier;
use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;
use Psr\Log\LoggerInterface;
use Throwable;

class NewMessageClassificationListener implements IEventListener {
	private const EXEMPT_FROM_CLASSIFICATION = [
		Horde_Imap_Client::SPECIALUSE_ARCHIVE,
		Horde_Imap_Client::SPECIALUSE_DRAFTS,
		Horde_Imap_Client::SPECIALUSE_JUNK,
		Horde_Imap_Client::SPECIALUSE_SENT,
		Horde_Imap_Client::SPECIALUSE_TRASH,
	];

	/** @var ImportanceClassifier */
	private $classifier;

	/** @var LoggerInterface */
	private $logger;

	public function __construct(ImportanceClassifier $classifier,
								LoggerInterface $logger) {
		$this->classifier = $classifier;
		$this->logger = $logger;
	}

	public function handle(Event $event): void {
		if (!($event instanceof NewMessagesSynchronized)) {
			return;
		}

		foreach (self::EXEMPT_FROM_CLASSIFICATION as $specialUse) {
			if ($event->getMailbox()->isSpecialUse($specialUse)) {
				// Nothing to do then
				return;
			}
		}

		// if the message is already flagged as important, we won't classify it again.
		$messages = array_filter($event->getMessages(), function ($message) {
			return ($message->getFlagImportant() === false);
		});

		try {
			$predictions = $this->classifier->classifyImportance(
				$event->getAccount(),
				$event->getMailbox(),
				$messages
			);

			foreach ($event->getMessages() as $message) {
				if ($predictions[$message->getUid()] ?? false) {
					$message->setFlagImportant(true);
				}
			}
		} catch (Throwable | ServiceException $e) {
			// TODO: remove Throwable catch once https://github.com/RubixML/RubixML/pull/69 landed here
			$this->logger->error('Could not classify incoming message importance: ' . $e->getMessage(), [
				'exception' => $e,
			]);
		}
	}
}
