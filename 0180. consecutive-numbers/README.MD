# 1 自连接
开始写成了这样， where 条件错了，不能这样写
```sql
select a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num=c.Num;
```
修改
```sql
select a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num and b.Num =c.Num;
```
这样也是无法通过的，如果有超过三个连续相同的数字，结果会返回重复的，所以要去重
```sql
select distinct a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num and b.Num =c.Num;
```
# 2如果求 n 次连续相同数字，要连接 n 个表吗 。变量赋值法，这种更为合理
```sql
SELECT DISTINCT a.Num ConsecutiveNums FROM (
SELECT t.Num ,
       @cnt:=IF(@pre=t.Num, @cnt+1, 1) cnt,
       @pre:=t.Num pre
  FROM Logs t, (SELECT @pre:=null, @cnt:=0) b) a
  WHERE a.cnt >= 3
  ```
语法解释：
```
IF(expr1,  expr2, expr3) //三元表达式
@pre:=10 // 变量赋值语法
```
使用select 语句设置变量，可看做表，在datagrip中直接运行可以显示为表 pre ==> 记录上一个值， cnt ==> 记录次数，
```
select @pre:=null,  @cnt:=0 
```
如果pre与t.num 相等，则cnt加1， 否则cnt重置为1
```
 @cnt:=IF(@pre=t.Num, @cnt+1, 1) cnt
 ```
将生成的num与cnt次数的表，作为新的表 a
```
(SELECT t.Num ,
       @cnt:=IF(@pre=t.Num, @cnt+1, 1) cnt,
       @pre:=t.Num pre
  FROM Logs t, (SELECT @pre:=null, @cnt:=0) b) a
  ```
