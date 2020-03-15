# 思路
## 方法 1：使用 JOIN 语句
```sql
select a.name as Employee from Employee a join Employee b on a.ManagerId = b.Id where a.Salary > b.Salary;
```
## 方法 2：使用 where
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
