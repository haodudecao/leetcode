# 思路
## 方法 1：使用 JOIN 语句
```sql
select a.name as Employee from Employee a join Employee b on a.ManagerId = b.Id where a.Salary > b.Salary;
```
## 方法 2：使用 where
这个是在 leetcode 官方题解中看到的，查了下，才知道这是 sql 92 标准的写法。。。涨知识了
```
SELECT
    a.Name AS 'Employee'
FROM
    Employee AS a,
    Employee AS b
WHERE
    a.ManagerId = b.Id
        AND a.Salary > b.Salary
;

```
