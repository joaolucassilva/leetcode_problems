<?php

namespace Root\Html\Easy\PalindromeNumber;

class Solution
{
    public function isPalindrome(int $number): bool
    {
        return strrev($number) == $number;
    }
}
