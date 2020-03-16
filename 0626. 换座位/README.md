# 思路
题目要求给出 query sql 

```
select (
case 
  when mod(s.id,2)= 0 then s.id -1 
  when mod(s.id,2)= 1 and s.id = total then s.id 
  else s.id +1 
end)id,s.student 
from seat s,(select count(*) as total from seat) t order by id;
```
