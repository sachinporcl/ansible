<?php

use Znerol\Component\Stringprep\UnicodeUtil;

class UnicodeUtilTest extends PHPUnit_Framework_TestCase
{
  public function testCodepointsFromEmptyString()
  {
    $codepoints = UnicodeUtil::stringToCodepoints("");

    $this->assertEquals(array(), array_values($codepoints));
  }

  public function testCodepointsFromASCIIString()
  {
    $codepoints = UnicodeUtil::stringToCodepoints("So Long, and Thanks for All the Fish");
    $expected = array(0x53, 0x6f, 0x20, 0x4c, 0x6f, 0x6e, 0x67, 0x2c, 0x20, 0x61, 0x6e, 0x64, 0x20, 0x54, 0x68, 0x61, 0x6e, 0x6b, 0x73, 0x20, 0x66, 0x6f, 0x72, 0x20, 0x41, 0x6c, 0x6c, 0x20, 0x74, 0x68, 0x65, 0x20, 0x46, 0x69, 0x73, 0x68);

    $this->assertEquals($expected, array_values($codepoints));
  }

  public function testCodepointsFromBMPString()
  {
    $codepoints = UnicodeUtil::stringToCodepoints("Всего хорошего, и спасибо за рыбу!");
    $expected = array(0x412,  0x441,  0x435,  0x433,  0x43e,  0x20,  0x445,  0x43e,  0x440,  0x43e,  0x448,  0x435,  0x433,  0x43e,  0x2c,  0x20,  0x438,  0x20,  0x441,  0x43f,  0x430,  0x441,  0x438,  0x431,  0x43e,  0x20,  0x437,  0x430,  0x20,  0x440,  0x44b,  0x431,  0x443,  0x21);

    $this->assertEquals($expected, array_values($codepoints));
  }

  public function testCodepointsFromSMPString()
  {
    $codepoints = UnicodeUtil::stringToCodepoints("mathplane: 𝛂𝛽𝜸𝝳𝟒𝟚");
    $expected = array(0x6d,  0x61,  0x74,  0x68,  0x70,  0x6c,  0x61,  0x6e,  0x65,  0x3a,  0x20,  0x1d6c2,  0x1d6fd,  0x1d738,  0x1d773,  0x1d7d2,  0x1d7da);

    $this->assertEquals($expected, array_values($codepoints));
  }
}
