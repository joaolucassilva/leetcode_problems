<?php

namespace Tests\Unit\Easy\RemoveDuplicatesFromSortedArray;

use Root\Html\Easy\RemoveDuplicatesFromSortedArray\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    private Solution $solution;

    protected function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testRemoveDuplicates()
    {
        $nums = [1, 1, 2];
        $result = $this->solution->removeDuplicates($nums);
        $this->assertSame(2, $result);
        $this->assertSame([1, 2], $nums);


        $nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
        $result = $this->solution->removeDuplicates($nums);
        $this->assertSame(5, $result);
        $this->assertSame([0, 1, 2, 3, 4], $nums);
    }
}
