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
### 3.中心扩展
...待更新
