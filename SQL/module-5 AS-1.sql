-- Active: 1680700338361@@radixusers3.com@3306@aaftab_shaikh4
-- 1. Create a Store Procedure Select Banking as 'Bank Dept', Insurance as 'Insurance Dept' and Services as 'Services Dept' from employee table 
    -- CREATE PROCEDURE Bank_Dept
    -- AS 
    --     SELECT * FROM employee 
    --     WHERE department = 'Banking'
    -- Go

    -- CREATE PROCEDURE Insurance_Dept
    -- AS 
    --     SELECT * FROM employee 
    --     WHERE department = 'Insurance';
    -- GO

    -- CREATE PROCEDURE Services_Dept
    -- AS 
    --     SELECT * FROM employee 
    --     WHERE department = 'Services';
    -- GO

-- 2. Select employee details from employee table if data exists in incentive table ? 
    SELECT * FROM employee e INNER JOIN incentives i ON e.employee_id = i.employee_ref_id;

-- 3. Find Salary of the employee whose salary is more than Roy Salary 
    SELECT * FROM employee WHERE salary > (SELECT salary from employee WHERE first_name = 'Roy')
-- 4. Create a view to select FirstName,LastName,Salary,JoiningDate,IncentiveDate and IncentiveAmount 
    SELECT first_name,last_name,salary, joining_date,incentive_date,incentive_amount FROM employee e INNER JOIN incentives i ON e.employee_id = i.employee_ref_id;
-- 5. Create a view to select Select first_name, incentive amount from employee and incentives table for those employees who have incentives and incentive amount  greater than 3000
    SELECT first_name, incentive_amount FROM employee e INNER JOIN incentives i ON e.employee_id = i.employee_ref_id WHERE incentive_amount > 3000;
-- 6. 5 Students Name, Address, City, DOB, Standard need to be inserted in the student table, need to fetch these result from json variable. and select output in the json format Note: use exception handling 
        CREATE TABLE students(
            s_id INT PRIMARY KEY,
            name INT,   
            address VARCHAR(50),
            city VARCHAR(15),
            DOB DATE
        );
       DESCRIBE students;
        INSERT INTO students VALUES
        (1, 'Aaftab', 'Akota','Vadodara','1994-02-19'),
        (2, 'Itachi', 'Nehru Nagar','Ahemdabad','1990-10-20'),
        (3, 'Hinata', 'Buchao','Rajkot','1991-07-17'),
        (4, 'Naruto', 'India Gate','Delhi','1988-05-21'),
        (5, 'Sasuke', 'Dharavi','Mumbai','1995-03-14');

        SELECT JSON_ARRAYAGG(JSON_OBJECT(s_id,name,address,city)) FROM students;


--7. 5 Students Name, Address, City, DOB, Standard need to be inserted in the student table, need to fetch these result from json variable using input parameter. and select output in the json format. Note: use exception handling 
    
--8 Create a procedure which will accept StudentId, StudentName, CourseID, CourseName as a input parameter in json format and insert record in 2 table student and course table

    CREATE TABLE courses(
        couese_id INT PRIMARY KEY,
        course_name VARCHAR(20)
    );

    INSERT INTO courses VALUES
    (101,'Science'),
    (102, 'English'),
    (103, 'Math');

    SELECT * FROM courses;

    SELECT * from students;

    DESCRIBE students;

    ALTER TABLE students
    ADD course_id int;

    ALTER TABLE students
    ADD constraint fk_courses FOREIGN KEY(course_id) REFERENCES courses(course_id);



    DELIMITER//

    DROP PROCEDURE `Insert_recod`;

        CREATE PROCEDURE Insert_recod(in data json)
           
        BEGIN 
            DECLARE s_id INT DEFAULT NULL;
            DECLARE name VARCHAR(20) DEFAULT NULL;
            DECLARE address VARCHAR(40) DEFAULT NULL;
            DECLARE city VARCHAR(15) DEFAULT NULL;
            DECLARE dob DATE DEFAULT NULL;

            SET s_id = JSON_UNQUOTE(JSON_EXTRACT(data,'$.s_id'));
            SET name = JSON_UNQUOTE(JSON_EXTRACT(data,'$.name'));
            SET address = JSON_UNQUOTE(JSON_EXTRACT(data,'$.address'));
            SET city = JSON_UNQUOTE(JSON_EXTRACT(data,'$.city'));
            SET dob = JSON_UNQUOTE(JSON_EXTRACT(data,'$.dob'));
     
            INSERT INTO students (s_id,name,address,city,DOB)
            VALUES (s_id,name,address,city,dob);
        END
        DELIMITER//

call Insert_recod('{"s_id":"6","name":"Migel","address":"123","city":"Bharuch","dob":"1995-02-12"}');

SELECT * from students;

DELIMITER//

DROP PROCEDURE usp_student_course;
CREATE PROCEDURE usp_student_course (in sc JSON)

BEGIN
    DECLARE s_id INT DEFAULT NULL;
    DECLARE name VARCHAR(20) DEFAULT NULL;
    DECLARE address VARCHAR(40) DEFAULT NULL;
    DECLARE city VARCHAR(15) DEFAULT NULL;
    DECLARE dob DATE DEFAULT NULL;
    DECLARE course_id int DEFAULT NULL;
    DECLARE course_name VARCHAR(20) DEFAULT NULL;


    SET s_id = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.s_id'));
    SET name = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.name'));
    SET address = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.address'));
    SET city = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.city'));
    SET dob = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.dob'));
    SET course_id = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.course_id'));
    SET course_name = JSON_UNQUOTE(JSON_EXTRACT(sc,'$.course_name'));

        INSERT INTO courses(course_id,course_name)
                VALUES(course_id,course_name);
        INSERT INTO students (s_id,name,address,city,DOB,course_id)
        VALUES (s_id,name,address,city,dob,course_id);
        
            -- SELECT course_id = scope_idetity()

        
    END
DELIMITER//


    CALL usp_student_course ('{"course_id":"104","course_name":"Database","s_id":"7","name":"Hendry","address":"645","city":"Landon","dob":"1995-02-12"}');


    SELECT * FROM courses;
    SELECT * FROM students;

