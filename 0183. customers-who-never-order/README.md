# 思路
子查询
# 解答
```sql
select Name as Customers from Customers where Id not in (select CustomerId from Orders);
```
