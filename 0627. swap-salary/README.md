# 思路
第一个想到的 case when 
```sql
update salary set  sex = case when sex = 'm' then 'f' else 'm' end;
```
