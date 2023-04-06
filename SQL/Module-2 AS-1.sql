-- Create the following table: 
-- Table Name: 
-- Employee EMPLOYEE_ID FIRST_NAME LAST_NAME SALARY JOINING_DATE DEPARTMENT 
-- 1 John Abraham 1000000 01-JAN-13 12.00.00 AM Banking 
-- 2 Michael Clarke 800000 01-JAN-13 12.00.00 AM Insurance 
-- 3 Roy Thomas 700000 01-FEB-13 12.00.00 AM Banking 
-- 4 Tom Jose 600000 01-FEB-13 12.00.00 AM Insurance 
-- 5 Jerry Pinto 650000 01-FEB-13 12.00.00 AM Insurance 
-- 6 Philip Mathew 750000 01-JAN-13 12.00.00 AM Services 
-- 7 TestName1 123 650000 01-JAN-13 12.00.00 AM Services 
-- 8 TestName2 Lname% 600000 01-FEB-13 12.00.00 AM Insurance 

----------------- Practice 1 ------------------- 1.  create table syntax for employee table------------------------------------------------------------------------------

CREATE TABLE employee
(
    EMPLOYEE_ID INT NOT NULL PRIMARY KEY,
    FIRST_NAME VARCHAR(25),
    LAST_NAME VARCHAR(25),
    SALARY INT,
    JOINING_DATE DATETIME,
    DEPARTMENT VARCHAR(25)
);

----------------- Practice 2 ------------------- 2. Get all employee details from the employee table------------------------------------------------------------------------

INSERT INTO employee
VALUES
(1, 'John', 'Abraham', 400000, '2013-05-01 12.00.00', 'Banking',9988777855),
(2 ,'Michael' ,'Clarke', 800000 ,'2013-01-02 12.00.00' ,'Insurance',9988776655 ),
(3 ,'Roy' ,'Thomas', 700000 ,'2013-01-03 12.00.00' ,'Banking',99856776655 ),
(4 ,'Tom' ,'Jose', 600000 ,'2013-01-04 12.00.00' ,'Insurance',9914576655 ),
(5 ,'Jerry' ,'Pinto', 650000 ,'2013-01-02 12.00.00' ,'Insurance',9988752455 ),
(6 ,'Philip' ,'Mathew', 750000 ,'2013-01-02 12.00.00' ,'Services',9984456655 ),
(7 ,'TestName1' ,'123', 650000 ,'2013-01-07 12.00.00' ,'Services',9988235655 ),
(8 ,'TestName2' ,'Lname%', 600000 ,'2013-01-07 12.00.00' ,'Insurance',9986586655 ),
(9, 'Sem' ,'Abraham' ,2000000 ,'2013-01-07 12.00.00', 'Finance',9425776655 ),
(10, 'Amanadil', 'Abraham', 400000, '2013-05-01 12.00.00', 'Banking',9984126655);
----------------- Practice 3 ------------------- 3. Get First_Name, Last_Name from employee table---------------------------------------------------------------------------
        SELECT First_Name, Last_Name FROM employee

----------------- Practice 4 ------------------- 4. Get First_Name from employee table using alias name “Employee Name” ---------------------------------------------------
        SELECT First_Name as 'Employee Name' FROM employee

----------------- Practice 5 ------------------- 5. Get employee details from employee table whose employee name is “John” -------------------------------------------------
        SELECT * FROM employee WHERE First_Name = 'john';

----------------- Practice 6 ------------------- 6. Get employee details from employee table whose employee name are “John” and “Roy” --------------------------------------
        SELECT * FROM employee WHERE First_Name IN ('john', 'Roy');

----------------- Practice 7 ------------------- 7. Get employee details from employee table whose employee name are not “John” and “Roy” ----------------------------------
        SELECT * FROM employee WHERE First_Name NOT IN ('john', 'Roy');

----------------- Practice 8 ------------------- 8. Get employee details from employee table whose first name starts with 'J'  ---------------------------------------------
        SELECT * FROM employee WHERE First_Name like 'j%';


----------------- Practice 9 ------------------- 9. Get employee details from employee table whose first name contains 'o' -------------------------------------------------
        SELECT * FROM employee WHERE First_Name like 'o%';


----------------- Practice 10 ------------------ 10. Get employee details from employee table whose Salary between 500000 and 800000 ---------------------------------------
        SELECT * FROM employee WHERE Salary BETWEEN 500000 AND 800000;

----------------- Practice 11 ------------------ 11. Get unique DEPARTMENT from employee table ---------------------------------------------------------------------------------
        SELECT DISTINCT DEPARTMENT FROM employee ;

----------------- Practice 12 ------------------ 12. Select TOP 2 salary from employee table -----------------------------------------------------------------------------------
         SELECT TOP 2 salary FROM employee order by salary desc ;

----------------- Practice 13 ------------------ 13. Store the output of below query in common table expression, and then find out the average of their salary  ----------------
        SELECT AVG(SALARY) FROM employee WHERE Salary BETWEEN 500000 AND 800000;

----------------- Practice 14 ------------------ 14. Get employee details from employee table whose Salary between 500000 and 800000 --------------------------------------------
        SELECT salary  FROM employee WHERE Salary BETWEEN 500000 AND 800000;

----------------- Practice 15 ------------------ 15. Get names of employees from employee table who has '%' in Last_Name.-------------------------------------------------------
        SELECT * FROM employee WHERE last_name like "%\%%"

----------------- Practice 16 ------------------ 16. Give 10% incentive to each employee, find out the employee whose incentive amount is more than 1lac, using derived table.--
         SELECT * FROM (SELECT  salary* 0.1  as incetive FROM employee ) as s where incetive >= 100000; 






