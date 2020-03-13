
<?php
class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        $res = '';
        for ($i = 0; $i < strlen($str1); $i++) {
            $res .= $str1[$i];
            if (str_replace($res, '', $str1) == '' && str_replace($res, '', $str2) == '') {
                return $res;
            }
        }
        return '';
    }
}
