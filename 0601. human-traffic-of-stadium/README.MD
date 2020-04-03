注意题目说的是连续不少于三行, 不是连续三天,不能用 datediff

```sql
SELECT DISTINCT
	b.* 
FROM
	stadium a
	JOIN stadium b 
WHERE
	a.id IN (
	SELECT
		a.id 
	FROM
		stadium a
		JOIN stadium b
		JOIN stadium c 
	WHERE
		b.id - a.id= 1 and c.id -b.id =1
		AND a.people >=100 
		AND b.people >= 100 
		AND c.people >= 100 
	) 
	AND b.id < a.id + 3 AND b.id >= a.id

```
写完之后觉得 sql 真\*\*傻, 我都查出 开头的 id 是多少了(子查询),为啥还有 join ,直接+3 他不香吗
