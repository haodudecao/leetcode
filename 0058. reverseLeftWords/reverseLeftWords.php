<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $n
     * @return String
     */
   function reverseLeftWords($string, $length) {
    if ($length >= strlen($string)) {
        return false;
    }
    $str = '';
    for ($i = 0; $i <= strlen($string);$i++) {
        $str .= $string [$length +$i];
    }
    for ($i = 0; $i <= $length;$i++) {
        $str .= $string [$i];
    }
    return substr($string, $length) . substr($string, 0, $length);
}

function reverseLeftWords($s, $n) {
    $S = '';

    for ($i = $n, $length = strlen($s); $i < $length; $i++) {
        $S .= $s[$i];
    }

    for ($i = 0; $i < $n; $i++) {
        $S .= $s[$i];
    }

    return $S;
}
function reverseLeftWords($string, $length) {
    if ($length >= strlen($string)) {
        return false;
    }
    return substr($string, $length) . substr($string, 0, $length);
}

}
