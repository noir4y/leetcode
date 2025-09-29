<?php

class Solution
{

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome($x)
    {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        $reverse = 0;
        while ($x > $reverse) {
            $reverse = $reverse * 10 + $x % 10;
            $x = intdiv($x, 10);
        }

        return $x == $reverse || $x == intdiv($reverse, 10);
    }
}
