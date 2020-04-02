```php
<?php
    /**
    * 函数解法
    */
    function numJewelsInStones($J, $S) {
        $len = strlen($J);
        $num = 0;
        for ($i = 0; $i < $len; $i++) {
            $baoshi = $J[$i];
            $num += substr_count($S, $baoshi);
        }
        return $num;
    }
    
    //不用函数
    function numJewelsInStones($J, $S) {
        for ($j = 0;$j < strlen($J);$j++) {
            $arr[$J[$j]] = '';
        }
        $num = 0;
        for ($s = 0; $s < strlen($S); $s++) {
            if(isset($arr[$S[$s]])) {
                $num++;
            }
        }
        return $num;
    }
  ```
