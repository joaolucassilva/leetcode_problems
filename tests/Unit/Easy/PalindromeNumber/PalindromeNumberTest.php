<?php

declare(strict_types=1);

namespace Tests\Unit\Easy\PalindromeNumber;

use PHPUnit\Framework\TestCase;
use Root\Html\Easy\PalindromeNumber\Solution;

class PalindromeNumberTest extends TestCase
{
    private Solution $solution;

    /**
     * @dataProvider dataPalindromeProvider
     */
    public function testIsPalindrome(int $number, $expect): void
    {
        $this->assertSame($expect, $this->solution->isPalindrome($number));
    }

    public function dataPalindromeProvider(): array
    {
        return [
            [121, true],
            [-121, false],
            [131, true],
            [10, false],
            [151, true],
            [171, true],
            [300, false],
            [191, true],
            [129, false],
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }
}
