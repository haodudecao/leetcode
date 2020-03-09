<?php

function twoSum($arr, $target)
{
    $found = [];
    foreach ($arr as $k => $num) {
        if (isset($found[$target - $num])) {
            return [$found[$target - $num], $k];
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
            $found[$val] = $key;//这一步不需要判断是否有重复的值，如果有的话，会在上一行 $found[$diff] 为 true 直接 return
            continue;
        }
        return [$key, $found[$diff]];
    }
}
