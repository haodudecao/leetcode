```sql
SELECT
	Request_at AS Day,
	round ( sum( CASE WHEN STATUS != 'completed' THEN 1 ELSE 0 END ) / count( id ), 2 ) AS 'Cancellation Rate'
FROM
	Trips 
WHERE
	Client_id NOT IN ( SELECT users_id FROM Users WHERE Banned = 'Yes' ) 
	AND Driver_Id NOT IN ( SELECT users_id FROM Users WHERE Banned = 'Yes' ) 
	AND Request_at >= '2013-10-01' 
	AND Request_at <= '2013-10-03 ' 
GROUP BY
	Request_at
  ```
 ### 开始陷入误区，sum 错用成了 count
