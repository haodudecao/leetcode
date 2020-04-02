 ``` 
    function numJewelsInStones($J, $S) {
        $len = strlen($J);
        $num = 0;
        for ($i = 0; $i < $len; $i++) {
            $baoshi = $J[$i];
            $num += substr_count($S, $baoshi);
        }
        return $num;
    }
    ```
