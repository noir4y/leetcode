<?php

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];
        $length = strlen($s);
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        for ($i = 0; $i < $length; $i++) {
            $char = $s[$i];

            if (isset($map[$char])) {
                if (empty($stack)) return false;
                if (array_pop($stack) !== $map[$char]) return false;
            } else {
                $stack[] = $char;
            }
        }

        return empty($stack);
    }
}
