Datediff  函数
```
select a.Id from Weather a join Weather b on Datediff(a.RecordDate,b.RecordDate)=1 where a.Temperature >b.Temperature
```
