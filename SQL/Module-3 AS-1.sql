-- Table Name : Employee EMPLOYEE_ID FIRST_NAME LAST_NAME SALARY JOINING_DATE DEPARTMENT MANAGER_ID 
CREATE TABLE employee (
    employee_id INT PRIMARY KEY,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    salary INT,
    joining_date DATE,
    department VARCHAR(20),
    manager_id INT
);
-- 1 John Abraham 1000000 01-JAN-13 12.00.00 AM Banking NULL 
-- 2 Michael Clarke 800000 01-JAN-13 12.00.00 AM Insurance 1 
-- 3 Roy Thomas 700000 01-FEB-13 12.00.00 AM Banking 1 
-- 4 Tom Jose 600000 01-FEB-13 12.00.00 AM Insurance 2 
-- 5 Jerry Pinto 650000 01-FEB-13 12.00.00 AM Insurance 3 
-- 6 Philip Mathew 750000 01-JAN-13 12.00.00 AM Services 3 
-- 7 TestName1 123 650000 01-JAN-13 12.00.00 AM Services 2 
-- 8 TestName2 Lname% 600000 01-FEB-13 12.00.00 AM Insurance 2

INSERT INTO employee VALUES
(1, 'John', 'Abraham', 1000000, '2013-01-01 12.00.00', 'Banking', NULL ),
(2, 'Michael', 'Clarke', 800000, '2013-01-01 12.00.00', 'Insurance', 1 ),
(3, 'Roy', 'Thomas', 700000, '2013-02-01 12.00.00', 'Banking', 1),
(4, 'Tom', 'Jose', 600000, '2013-02-01 12.00.00', 'Insurance', 2 ),
(5, 'Jerry', 'Pinto', 650000, '2013-02-01 12.00.00', 'Insurance', 3 ),
(6, 'Philip', 'Mathew', 750000, '2013-01-01 12.00.00', 'Services', 3 ),
(7, 'TestName1', '123', 650000, '2013-01-01 12.00.00', 'Services', 2 ),
(8, 'TestName2', 'Lname%', 600000, '2013-02-01 12.00.00', 'Insurance', 2 );



-- Table Name : Incentives EMPLOYEE_REF_ID INCENTIVE_DATE INCENTIVE_AMOUNT 
CREATE TABLE incentives(
    employee_ref_id INT NOT NULL,
    incentive_date DATETIME,
    incentive_amount INT,
    CONSTRAINT fk_employee FOREIGN KEY(employee_ref_id) 
    REFERENCES employee(employee_id)
);
-- 1 01-FEB-13 5000 
-- 2 01-FEB-13 3000 
-- 3 01-FEB-13 4000 

-- 1 01-JAN-13 4500 
-- 2 01-JAN-13 3500 

INSERT INTO incentives VALUES
(1, '2013-01-01', 4500),
(2, '2013-01-01', 3500),
(1, '2013-02-01', 5000),
(2, '2013-02-01', 3000),
(3, '2013-02-01', 4000);

-- 1. Get difference between JOINING_DATE and INCENTIVE_DATE from employee and incentives table 
    SELECT DATEDIFF(i.incentive_date,e.joining_date) FROM employee e INNER JOIN incentives i ON e.employee_id = i.employee_ref_id WHERE e.employee_id = i.employee_ref_id;

-- 2. Select first_name, incentive amount from employee and incentives table for those employees who have incentives and incentive amount greater than 3000 
    SELECT first_name, incentive_amount FROM employee e INNER JOIN incentives i ON e.employee_id = i.employee_ref_id WHERE incentive_amount > 3000; 
-- 3. Select first_name, incentive amount from employee and incentives table for all employees even if they didn't get incentives'. 
            SELECT first_name, incentive_amount FROM employee e LEFT JOIN incentives i ON e.employee_id = i.employee_ref_id ;
-- 4. Select EmployeeName, ManagerName from the employee table. 
    SELECT CONCAT(e.first_name," ",e.last_name) as EmployeeName ,CONCAT(m.first_name," ",m.last_name) as ManagerName FROM employee e left OUTER JOIN employee m ON e.manager_id = m.employee_id ;
-- 5. Select first_name, incentive amount from employee and incentives table for all employees even if they didn't get incentives and set incentive amount as 0 for those employees who didn't get incentives. 
    SELECT first_name, COALESCE(incentive_amount,0) FROM employee e LEFT JOIN incentives i ON e.employee_id = i.employee_ref_id ;

-- 6. Get department,total salary with respect to a department from employee table. 
    SELECT department, salary+incentive_amount as Total_salary FROM employee e INNER JOIN incentives i ON e.employee_Id = i.employee_ref_id ;
-- 7. Get department,total salary with respect to a department from employee table order by total salary descending 
    SELECT department, salary+incentive_amount as Total_salary FROM employee e INNER JOIN incentives i ON e.employee_Id = i.employee_ref_id ORDER BY Total_salary DESC;

-- 8. Get department wise maximum salary from employee table order by salary ascending 
    SELECT department, max(salary) as maxSalary FROM employee GROUP BY department ORDER BY maxSalary ASC ;

-- 9. Get department wise minimum salary from employee table order by salary ascending 
    SELECT department, min(salary) as minSalary FROM employee GROUP BY department ORDER BY minSalary ASC ;

-- 10. Select department,total salary with respect to a department from employee table where total salary greater than 800000 order by Total_Salary descending
    SELECT department, salary+incentive_amount as Total_Salary FROM employee e INNER JOIN incentives i ON e.employee_Id = i.employee_ref_id WHERE salary > 800000 ORDER BY Total_Salary DESC;
