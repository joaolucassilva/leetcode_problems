<?php

namespace Root\Html\Easy\TwoSum;

class Solution
{
    public function twoSum(array $nums, int $target): array
    {
        $result = [];
        for ($x = 0; $x < count($nums); $x++) {
            for ($y = $x + 1; $y < count($nums); $y++) {
                if ($nums[$x] + $nums[$y] === $target) {
                    $result = [$x, $y];
                    break;
                }
            }
        }
        return $result;
    }
}
