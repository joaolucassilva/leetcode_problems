<?php

namespace Root\Html\Easy\RemoveDuplicatesFromSortedArray;

class Solution
{
    public function removeDuplicates(array &$nums): int
    {
        $nums = array_values(array_unique($nums, SORT_NUMERIC));
        return count($nums);
    }
}
