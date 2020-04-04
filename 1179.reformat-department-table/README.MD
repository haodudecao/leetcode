
```sql 
SELECT
	id,
	sum( CASE MONTH WHEN 'Jan' THEN revenue ELSE NULL END ) AS Jan_Revenue,
	sum( CASE MONTH WHEN 'Feb' THEN revenue ELSE NULL END ) AS Feb_Revenue,
	sum( CASE MONTH WHEN 'Mar' THEN revenue ELSE NULL END ) AS Mar_Revenue,
	sum( CASE MONTH WHEN 'Apr' THEN revenue ELSE NULL END ) AS Apr_Revenue, 
	sum( CASE MONTH WHEN 'May' THEN revenue ELSE NULL END ) AS May_Revenue, 
	sum( CASE MONTH WHEN 'Jun' THEN revenue ELSE NULL END ) AS Jun_Revenue, 
	sum( CASE MONTH WHEN 'Jul' THEN revenue ELSE NULL END ) AS Jul_Revenue, 
	sum( CASE MONTH WHEN 'Aug' THEN revenue ELSE NULL END ) AS Aug_Revenue, 
	sum( CASE MONTH WHEN 'Sep' THEN revenue ELSE NULL END ) AS Sep_Revenue, 
	sum( CASE MONTH WHEN 'Oct' THEN revenue ELSE NULL END ) AS Oct_Revenue, 
	sum( CASE MONTH WHEN 'Nov' THEN revenue ELSE NULL END ) AS Nov_Revenue, 
	sum( CASE MONTH WHEN 'Dec' THEN revenue ELSE NULL END ) AS Dec_Revenue
FROM
	Department 
GROUP BY
	id
```
