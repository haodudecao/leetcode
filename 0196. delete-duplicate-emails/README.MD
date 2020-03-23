# 思路
去除重复的 Email 

1.想到去重，首先想到 distinct ，但是 distinct 只能返回目标字段，Id 我们拿不到；

2.group by 既然是保留小 Id ，那么组之后取到大的，然后删除就好了，但是有个问题，可能有多个重复值，而只保留最小值，那么就取 min 最小，然后删除
not in 就好了

```sql
delete from Person where Id not in 
(select Id from 
  (select min(Id)as Id from Person group by Email) as a
 ) 
```

# 思路 2
join 


```sql
delete from Person where Id in 
  (select Id from
      (select a.Id from Person a join Person b on a.Email=b.Email and a.Id > b.Id)
   as a);
```
