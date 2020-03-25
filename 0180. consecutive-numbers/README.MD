开始写成了这样， where 条件错了，不能这样写
```
select a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num=c.Num;
```
修改
```
select a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num and b.Num =c.Num;
```
这样也是无法通过的，如果有超过三个连续相同的数字，结果会返回重复的，所以要去重
```
select distinct a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num and b.Num =c.Num;
```
