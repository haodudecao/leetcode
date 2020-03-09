<?php

function twoSum($arr, $target)
{
    $found = [];
    foreach ($arr as $k => $num) {
        if (isset($found[$target - $num])) {
            return [$k, $found[$target - $num]];
        }
        if (!isset($found[$num])) {
            $found[$num] = $k;
        }
    }
}

function twoSum($nums, $target) {
    $found = [];
    foreach($nums as $key => $val){
        $diff = $target - $val;
        if(!isset($found[$diff])){
            $found[$val] = $key;
            continue;
        }
        return [$key, $found[$diff]];
    }
}
