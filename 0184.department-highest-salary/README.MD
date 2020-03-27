```sql
SELECT
	department.NAME AS Department,
	employee.name as Employee,
	Salary
FROM
	employee
	JOIN department ON departmentId = department.id 
WHERE
	 (salary, departmentId)  IN (
	SELECT
	max(salary) salary ,
		departmentId
		
	FROM
		employee 
	GROUP BY
	departmentId 
	)
  ```
