<?php

namespace Root\Html\Easy\ValidParentheses;

class Solution
{
    function isValid(string $s): bool
    {
        $word = str_split($s);
        $result = true;
        $countWord = count($word);

        if ($countWord == 1 || in_array($word[0], [']', '}', ')'])) {
            return false;
        }
    }
}
