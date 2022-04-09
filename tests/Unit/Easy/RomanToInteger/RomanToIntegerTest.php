<?php

declare(strict_types=1);

namespace Tests\Unit\Easy\RomanToInteger;

use PHPUnit\Framework\TestCase;
use Root\Html\Easy\RomanToInteger\Solution;

class RomanToIntegerTest extends TestCase
{
    private Solution $solution;

    /**
     * @dataProvider dataProvider
     */
    public function testIsRomanNumber($expect, $word): void
    {
        $this->assertSame($expect, $this->solution->romanToInt($word));
    }

    public function dataProvider(): array
    {
        return [
            [3, 'III'],
            [58, 'LVIII'],
            [1994, 'MCMXCIV'],
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }
}
