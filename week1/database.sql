SELECT COUNT(DISTINCT department_id) AS num_departments FROM employees;

SELECT l.city, COUNT(DISTINCT d.department_id) AS num_departments FROM locations l JOIN departments d ON l.location_id = d.location_id GROUP BY l.city;