<?php

namespace Root\Html\Easy\String;

class LongestCommonPrefix
{
    public function solution(array $strs): string
    {
        $lsPrefix = '';

        $lsFirstString = array_shift($strs);

        if (empty($lsFirstString)) {
            return $lsPrefix;
        }

        $firstLength = strlen($lsFirstString);

        for ($i = 0; $i < $firstLength; $i++) {
            $lsSearchChar = $lsFirstString[$i];

            foreach ($strs as $inputString) {
                var_dump($inputString[$i]);
                var_dump($lsSearchChar);

                if ($inputString[$i] !== $lsSearchChar) {
                    break 2;
                }
            }

            $lsPrefix .= $lsSearchChar;
        }

        return $lsPrefix;
    }
}