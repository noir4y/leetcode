<?php

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $romanMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
        ];

        $result = 0;
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            $current = $romanMap[$s[$i]] ?? null;
            $next = $i + 1 < $length ? $romanMap[$s[$i + 1]] : 0;

            if ($current < $next) {
                $result -= $current;
            } else {
                $result += $current;
            }
        }

        return $result;
    }
}
