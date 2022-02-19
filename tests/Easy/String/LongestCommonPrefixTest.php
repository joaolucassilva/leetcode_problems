<?php

namespace Root\Html\Tests\Easy\String;

use Root\Html\Easy\String\LongestCommonPrefix;
use PHPUnit\Framework\TestCase;

class LongestCommonPrefixTest extends TestCase
{
    private LongestCommonPrefix $longestCommonPrefix;

    public function setUp(): void
    {
        parent::setUp();
        $this->longestCommonPrefix = new LongestCommonPrefix();
    }

    public function testSendArrayEmptyReturnStringEmpty()
    {
        $result = $this->longestCommonPrefix->solution([]);
        $expect = '';
        $this->assertEquals($expect, $result);
    }

    public function testSendArrayReturnString()
    {
        $test = ["flower", "flow", "flight"];
        $result = $this->longestCommonPrefix->solution($test);
        $expect = 'fl';
        $this->assertEquals($expect, $result);
    }
}