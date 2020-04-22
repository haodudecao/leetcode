
# 思路：
### 1暴力解法 时间复杂度 O(n²)
//看到这道题就想到了按照冒泡排序类似算法,两个 for循环找出,时间复杂度 O(n²);

```php

function lengthOfLongestSubstring($s)
{
    $count = strlen($s);
    //只有一个字符或空的字符串特殊处理
    if ($count == 1||$count == 0) {
        return $count;
    }
    $longestLen = 0;//最长长度
    $list = str_split($s);

    //当剩余循环长度>已统计子串长度时,循环进行
    for ($i = 0; $i < $count - $longestLen; $i++) {
        $subList = [];//清空子串数组
        for ($j = $i; $j < $count; $j++) {
            if (!in_array($list[$j], $subList, true)) {//注意加第三个参数 true 否则是松散比较,会自动类型转换,' ' == 0
                $subList [] = $list[$j];
            } else {//遇到重复字符时,更新最长长度且终止本次循环
                break;
            };

        }
        $subCount = count($subList);
        $longestLen = max($longestLen, $subCount);
    }
    return $longestLen;
}
//var_dump(lengthOfLongestSubstring($s));
```
### 2 滑动窗口 时间复杂度 O(n)
这道题主要用到思路是：**滑动窗口**
什么是滑动窗口？

> 其实就是一个队列,比如例题中的 abcabcbb，进入这个队列（窗口）为 abc 满足题目要求，当再进入 a，队列变成了 abca，这时候不满足要求。所以，我们要移动这个队列！

如何移动？

我们只要把队列的左边的元素移出就行了，直到满足题目要求！

一直维持这样的队列，找出队列出现最长的长度时候，求出解！

时间复杂度：O(n)O(n);

```php
$s = 'abcabcad';
function lengthOfLongestSubstring1($s)
{
    $count = strlen($s);
    //只有一个字符或空的字符串特殊处理
    if ($count == 1 || $count == 0) {
        return $count;
    }
    $longestLen = 0;//最长长度
    $list = str_split($s);
    $subList = [];//初始化子串数组
    for ($i = 0; $i < $count; $i++) {
        if (in_array($list[$i], $subList, true)) {//注意加第三个参数 true 否则是松散比较,会自动类型转换,' ' == 0
            //遇到重复字符时,滑动
            $key = array_search($list[$i], $subList);
            $subList = array_slice($subList, $key + 1);//算出"滑动"距离
        };
        $subList [] = $list[$i];//滑动后展现新内容
        $longestLen = max($longestLen, count($subList));
    }
    return $longestLen;
}
var_dump(lengthOfLongestSubstring1($s));

```


### 2.1 直接用字符串好像更快些
```php
//一开始就陷入误区...用了数组
function lengthOfLongestSubstring($s) {
    $len = strlen($s);
    $max = 0;
    $temp = '';
    for($i = 0;$i < $len;$i++){
        $live = strpos($temp,$s[$i]);
        if($live !== false){
            $temp .=$s[$i];
            $temp = substr($temp,$live+1);
        }else{
            $temp .=$s[$i];
        }
        $max = max(strlen($temp),$max);
    }
    return $max;
}```
