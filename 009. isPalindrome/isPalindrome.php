<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return $x==strrev($x);
    }
    
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }
        $num = 0;
        while ($x > $num) {
            $num = $num * 10 + ($x % 10);
            $x = floor($x / 10);
        }
        return $x == floor($num / 10) || ($x == $num);
    }
}
