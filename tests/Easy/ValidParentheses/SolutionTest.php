<?php

namespace Tests\Easy\ValidParentheses;

use PHPUnit\Framework\TestCase;
use Root\Html\Easy\ValidParentheses\Solution;

class SolutionTest extends TestCase
{
    private Solution $solution;

    protected function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testIsValid(): void
    {
        $result = $this->solution->isValid('()');
        $this->assertSame(true, $result);

        $result = $this->solution->isValid('([)]');
        $this->assertSame(false, $result);
//
//        $result = $this->solution->isValid('()[]{}');
//        $this->assertSame(true, $result);
//
//        $result = $this->solution->isValid('(){}}{');
//        $this->assertSame(false, $result);
//
//        $result = $this->solution->isValid('{[]}');
//        $this->assertSame(true, $result);
//
//        $result = $this->solution->isValid('{[()]}');
//        $this->assertSame(true, $result);
//
//        $result = $this->solution->isValid("(}{)");
//        $this->assertSame(false, $result);
    }
}
