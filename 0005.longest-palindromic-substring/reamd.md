## 解法
### 1.暴力解法
列举所有子串,检测是否是回文
```php
function longestPalindrome($s)
{
    $length = strlen($s);
    $count = 0;
    $longestLen = 0;
    $longestSubstr = '';
    for ($i = 0; $i < $length; $i++) {
        if ($longestLen > $length - $i)
            break;//若不加这一行,超长回文串会超时(有效避免无效循环)
        for ($j = 1; $j <= $length - $i; $j++) {
            $count++;
            $substr = substr($s, $i, $j);
            //检测子串是否是回文
            if ($substr == strrev($substr)) {
                $substrLen = strlen($substr);
                if ($substrLen > $longestLen) {
                    $longestLen = $substrLen;
                    $longestSubstr = $substr;
                }
            }
        }
    }
    return $longestSubstr;
}
```
### 2.动态规划
> 按照定义，动态规划是把一个大问题拆解成一堆小问题，这个本身没啥问题，但是我觉得的这个不是动态规划的核心思想
*取决于该问题是否能用动态规划解决的是这些”小问题“会不会被被重复调用。*

### 3.中心扩展
...待更新
