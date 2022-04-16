<?php

declare(strict_types=1);

namespace Tests\Easy\RomanToInteger;

use PHPUnit\Framework\TestCase;
use Root\Html\Easy\RomanToInteger\Solution;

class RomanToIntegerTest extends TestCase
{
    private Solution $solution;

    protected function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testIsRomanNumber(): void
    {
        $this->assertSame(3, $this->solution->romanToInt('III'));
        $this->assertSame(58, $this->solution->romanToInt('LVIII'));
        $this->assertSame(1994, $this->solution->romanToInt('MCMXCIV'));
        $this->assertSame(1400, $this->solution->romanToInt('MCD'));
        $this->assertSame(1991, $this->solution->romanToInt('MCMXCI'));
        $this->assertSame(2004, $this->solution->romanToInt('MMIV'));
        $this->assertSame(2018, $this->solution->romanToInt('MMXVIII'));
    }
}
