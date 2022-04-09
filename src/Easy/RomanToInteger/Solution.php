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
            if ($words[$x] . $words[$x + 1] === 'IV') {
                $sum += 4;
                $x++;
            } else {
                if ($words[$x] . $words[$x + 1] === 'IX') {
                    $sum += 9;
                    $x++;
                } else {
                    if ($words[$x] . $words[$x + 1] === 'XL') {
                        $sum += 40;
                        $x++;
                    } else {
                        if ($words[$x] . $words[$x + 1] === 'XC') {
                            $sum += 90;
                            $x++;
                        } else {
                            if ($words[$x] . $words[$x + 1] === 'CD') {
                                $sum += 400;
                                $x++;
                            } else {
                                if ($words[$x] . $words[$x + 1] === 'CM') {
                                    $sum += 900;
                                    $x++;
                                } else {
                                    $sum += $roman[$words[$x]];
                                }
                            }
                        }
                    }
                }
            }
        }

        return $sum;
    }
}