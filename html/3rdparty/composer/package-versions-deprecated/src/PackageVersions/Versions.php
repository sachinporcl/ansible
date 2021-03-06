<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'nextcloud/3rdparty';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aws/aws-sdk-php' => '3.171.21@0455d92bb12d44f80db96a4e70861d186063e9e5',
  'bantu/ini-get-wrapper' => 'v1.0.1@4770c7feab370c62e23db4f31c112b7c6d90aee2',
  'beberlei/assert' => 'v3.3.0@5367e3895976b49704ae671f75bc5f0ba1b986ab',
  'brick/math' => '0.9.1@283a40c901101e66de7061bd359252c013dcc43c',
  'christophwurst/id3parser' => 'v0.1.1@c0e56c336bd6131c199827f928e5a9aec89aa4da',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'deepdiver/zipstreamer' => '2.0.0@b8c59647ff34fb97e8937aefb2a65de2bc4b4755',
  'deepdiver1975/tarstreamer' => '2.0.0@ad48505d1ab54a8e94e6b1cc5297bbed72e956de',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => '3.0.0@ee6d1260d5cc20ec506455a585945d7bdb98662c',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fgrosse/phpasn1' => 'v2.2.0@d1978f7abd580f3fc33561e7f71d4c12c7531fad',
  'giggsey/libphonenumber-for-php' => '8.12.16@d3d4ed9466249747249f3032717c4aebaaa8363e',
  'giggsey/locale' => '1.9@b07f1eace8072ccc61445ad8fbd493ff9d783043',
  'guzzlehttp/guzzle' => '7.2.0@0aa74dfb41ae110835923ef10a9d803a22d50e79',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'guzzlehttp/uri-template' => 'v0.2.0@db46525d6d8fee71033b73cc07160f3e5271a8ce',
  'icewind/searchdav' => 'v2.0.0@c69806d900c2c9a5954bfabc80178d6eb0d63df4',
  'icewind/streams' => 'v0.7.2@77d750ccc654c0eda4a41fedb2dbd71053755790',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'league/uri' => '6.4.0@09da64118eaf4c5d52f9923a1e6a5be1da52fd9a',
  'league/uri-interfaces' => '2.2.0@667f150e589d65d79c89ffe662e426704f84224f',
  'microsoft/azure-storage-blob' => '1.5.2@2475330963372d519387cb8135d6a9cfd42272da',
  'microsoft/azure-storage-common' => '1.5.1@e5738035891546075bd369954e8af121d65ebd6d',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'nextcloud/lognormalizer' => 'v1.0.0@87445d69225c247aaff64643b1fc83c6d6df741f',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'opis/closure' => '3.6.1@943b5d70cc5ae7483f6aff6ff43d7e34592ca0f5',
  'patchwork/jsqueeze' => 'v2.0.5@693d64850eab2ce6a7c8f7cf547e1ab46e69d542',
  'pear/archive_tar' => '1.4.12@19bb8e95490d3e3ad92fcac95500ca80bdcc7495',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.1@dbb42a5a0e45f3adcf99babfb2a1ba77b8ac36a7',
  'php-ds/php-ds' => 'v1.3.0@b98396862fb8a13cbdbbaf4d18be28ee5c01ed3c',
  'php-http/guzzle7-adapter' => '0.1.1@1967de656b9679a2a6a66d0e4e16fa99bbed1ad1',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'php-opencloud/openstack' => 'v3.1.0@7b0eeb63defe533fb802514af3c70855c45eaf1e',
  'phpseclib/phpseclib' => '2.0.31@233a920cb38636a43b18d428f9a8db1f0a1a08f4',
  'pimple/pimple' => 'v3.3.1@21e45061c3429b1e06233475cc0e1f6fc774d5b0',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'punic/punic' => '1.6.5@7bc85ce1137cf52db4d2a6298256a4c4a24da99a',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.1@24d93aefb2cd786b7edd9f45b554aea20b28b9b1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'sabre/dav' => '4.1.4@4258420f15425a5f128fe5cad454e00ab4a68ae5',
  'sabre/event' => '5.1.2@c120bec57c17b6251a496efc82b732418b49d50a',
  'sabre/http' => '5.1.1@d0aafede6961df6195ce7a8dad49296b0aaee22e',
  'sabre/uri' => '2.2.1@f502edffafea8d746825bd5f0b923a60fd2715ff',
  'sabre/vobject' => '4.3.3@58f9f9b46a1080c0130bd86f4df9a568aacb9c79',
  'sabre/xml' => '2.2.3@c3b959f821c19b36952ec4a595edd695c216bfc6',
  'scssphp/scssphp' => 'v1.4.1@ba86c963b94ec7ebd6e19d90cdab90d89667dbf7',
  'spomky-labs/base64url' => 'v2.0.4@7752ce931ec285da4ed1f4c5aa27e45e097be61d',
  'spomky-labs/cbor-php' => 'v2.0.1@9776578000be884cd7864eeb7c37a4ac92d8c995',
  'stecman/symfony-console-completion' => '0.11.0@a9502dab59405e275a9f264536c4e1cb61fc3518',
  'swiftmailer/swiftmailer' => 'v6.2.5@698a6a9f54d7eb321274de3ad19863802c879fb7',
  'symfony/console' => 'v4.4.19@24026c44fc37099fa145707fecd43672831b837a',
  'symfony/event-dispatcher' => 'v4.4.19@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/polyfill-ctype' => 'v1.22.0@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-iconv' => 'v1.22.0@b34bfb8c4c22650ac080d2662ae3502e5f2f4ae6',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-idn' => 'v1.22.0@0eb8293dbbcd6ef6bf81404c9ce7d95bcdf34f44',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php72' => 'v1.22.0@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.0@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v4.4.19@7e950b6366d4da90292c2e7fa820b3c1842b965a',
  'symfony/routing' => 'v4.4.19@87529f6e305c7acb162840d1ea57922038072425',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/translation' => 'v4.4.19@e1d0c67167a553556d9f974b5fa79c2448df317a',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'thecodingmachine/safe' => 'v1.3.3@a8ab0876305a4cdaef31b2350fcb9811b5608dbc',
  'web-auth/cose-lib' => 'v3.3.1@eea6fae63ff5c81bf98c115b1be5f38a69682c16',
  'web-auth/metadata-service' => 'v3.3.1@8488d3a832a38cc81c670fce05de1e515c6e64b1',
  'web-auth/webauthn-lib' => 'v3.3.1@e411527a41c1013512fccdfce61681eb36484c77',
  'nextcloud/3rdparty' => 'dev-master@5912800b0956d83fff0b34f6a3978447708c4669',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
