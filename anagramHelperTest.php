<?php

include ("anagramHelper.php");

use PHPUnit\Framework\TestCase;

final class AnagramHelperTest extends TestCase
{
    /**
     * null param 1 => false
     */
    public function testisAnagram_NullParam1() {
        // when
        $ret = isAnagram(null, "osef");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_NullParam2() {
        // when
        $ret = isAnagram("osef", null);
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_EmptyParam1() {
        // when
        $ret = isAnagram("", "osef");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_EmptyParam2() {
        // when
        $ret = isAnagram("osef", "");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_DifferentLength() {
        // when
        $ret = isAnagram("str1", "str2str2");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_identical() {
        // when
        $ret = isAnagram("str", "str");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_ko1() {
        // when
        $ret = isAnagram("str", "nok");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_ko2() {
        // when
        $ret = isAnagram("str", "ztr");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_ko3() {
        // when
        $ret = isAnagram("str", "stz");
        // then
        $this->assertFalse($ret);
    }
    public function testisAnagram_ok1() {
        // when
        $ret = isAnagram("str", "tsr");
        // then
        $this->assertTrue($ret);
    }
    public function testisAnagram_ok2() {
        // when
        $ret = isAnagram("str", "rts");
        // then
        $this->assertTrue($ret);
    }
}
// function test_is_anagram_error_param1()
// {
//     # GIVEN
//     $s1 = null;
//     $s2 = "osef";

//     # WHEN
//     $ret = is_anagram($s1, $s2);

//     # THEN
//     assert($ret === false);
// }
