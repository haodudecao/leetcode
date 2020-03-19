# 思路
第一个想到的 case when 
# 解法 1
```sql
update salary set  sex = case when sex = 'm' then 'f' else 'm' end;
```
看题解发现大家的 case when 写法和我不太一样。。。
# 解法 1.1
```sql
update salary set  sex = case sex when 'm' then 'f' else 'm' end;
```
搜索一番发现 case when 有两种用法

```
--简单case函数
case sex
  when '1' then '男'
  when '2' then '女’
  else '其他' end
--case搜索函数
case when sex = '1' then '男'
     when sex = '2' then '女'
     else '其他' end  
 ```
 我一直用的都是 case 搜索函数
 >这两种方式，可以实现相同的功能。简单case函数的写法相对比较简洁，但是和case搜索函数相比，功能方面会有些限制，比如写判定式。
>还有一个需要注重的问题，case函数只返回第一个符合条件的值，剩下的case部分将会被自动忽略。

# 解法 2
```sql
update salary set sex=IF(sex='f','m','f')
```
还发现了这个解法， IF 之前从来没有用过，具体类似三元运算  if A ？B：C；
***虽然都是基础，但是在刷题的时候有新收获，坚持下去总没错的。***

