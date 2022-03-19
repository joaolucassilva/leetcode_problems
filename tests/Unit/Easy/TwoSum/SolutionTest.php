<?php

namespace Tests\Unit\Easy\TwoSum;

use PHPUnit\Framework\TestCase;
use Root\Html\Easy\TwoSum\Solution;

class SolutionTest extends TestCase
{
    private Solution $solution;

    protected function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testTwoSum()
    {
        $result = $this->solution->twoSum([2, 7, 11, 15], 9);
        $this->assertSame([0, 1], $result);

        $result = $this->solution->twoSum([3, 2, 4], 6);
        $this->assertSame([1, 2], $result);

        $result = $this->solution->twoSum([3, 3], 6);
        $this->assertSame([0, 1], $result);
    }
}
