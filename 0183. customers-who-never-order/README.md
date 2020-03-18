# 思路
子查询  但是会有效率问题 

查询Customers表，join Orders 表，查询CustomerId为null的数据，关联查询时，在Orders表中不存在的客户，CustomerId字段结果值必定是unll值。
还有其他的解法，像内连接、临时表，这些好像效率都没这个快吧。

还有 exists
> exists 和 not in 的区别 在于驱动表的不同， exists 会以外层查询作为驱动表，not in 会以内层子查询作为驱动表（先进性子查询）；

# 解答
```sql
select Name as Customers from Customers where Id not in (select CustomerId from Orders);
```

```sql
select Name as Customers from Customers left join Orders on Customers.Id = Orders.CustomerId where Orders.CustomerId is Null
```
```sql
select c.Name as Customers from Customers c where not exists (select 1 from Orders o where o.CustomerId = c.Id);

```
