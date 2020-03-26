## 思路
开始以为很简单，分组加筛选就完事了

```sql
select class from courses group by class having count(class) >= 5
```
然后发现 student 可能有重复值。。。
## 解法 1
```sql
select class from (select distinct student,class from courses) tmp group by class having count(class) >= 5
```
## 解法 2
```sql
select class from courses group by class having count(distinct student) >= 5
```
