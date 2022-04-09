<?php

namespace Root\Html\Easy\RomanToInteger;

class Solution
{
    public function romanToInt(string $word): int
    {
        $roman = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
        $sum = 0;
        $words = str_split($word);
        for ($x = 0; $x < count($words); $x++) {
            switch ($words[$x] . $words[$x + 1]) {
                case 'IV':
                    $sum += 4;
                    $x++;
                    break;
                case 'IX':
                    $sum += 9;
                    $x++;
                    break;
                case 'XL':
                    $sum += 40;
                    $x++;
                    break;
                case 'XC':
                    $sum += 90;
                    $x++;
                    break;
                case 'CD':
                    $sum += 400;
                    $x++;
                    break;
                case 'CM':
                    $sum += 900;
                    $x++;
                    break;
                default:
                    $sum += $roman[$words[$x]];
            }
        }
        return $sum;
    }
}