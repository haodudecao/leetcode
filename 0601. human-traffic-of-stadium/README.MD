```sql
SELECT
	* 
FROM
	stadium a
	JOIN stadium b
	JOIN stadium c 
WHERE
	datediff( a.visit_date, b.visit_date ) = 1 
	AND datediff( c.visit_date, a.visit_date ) = 1 
	AND a.people > 100 
	AND b.people > 100 
	AND c.people > 100
	```
