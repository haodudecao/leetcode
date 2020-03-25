select a.num  as ConsecutiveNums from  LOGS a join LOGS b on a.Id = b.Id -1 join LOGS c on b.Id=c.Id-1 where a.Num= b.Num=c.Num;
