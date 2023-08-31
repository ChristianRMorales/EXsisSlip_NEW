-- Create App Users Table
drop database exslipdb;
CREATE DATABASE ExSlipDB;
USE ExSlipDB;
CREATE TABLE app_users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('student', 'counselor', 'dean', 'teacher') NOT NULL
);

-- Create Departments Table
CREATE TABLE departments (
    department_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Create Courses Table
CREATE TABLE courses (
    course_id INT PRIMARY KEY AUTO_INCREMENT,
    department_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (department_id) REFERENCES departments(department_id)
);

-- Create Teachers Table
CREATE TABLE teachers (
    teacher_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    department_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(user_id),
    FOREIGN KEY (department_id) REFERENCES departments(department_id)
);

-- Create Students Table
CREATE TABLE students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    name VARCHAR(255) NOT NULL,
    degree_program VARCHAR(255) NOT NULL,
    year_level INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(user_id)
);

-- Create Excuse Slips Table
CREATE TABLE excuse_slips (
    excuse_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    course_id INT,
    reason TEXT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    status ENUM('pending', 'approved', 'rejected') NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(student_id),
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
);

-- Create Feedback Table
CREATE TABLE feedback (
    feedback_id INT PRIMARY KEY AUTO_INCREMENT,
    excuse_id INT,
    sender_id INT,
    feedback TEXT NOT NULL,
    FOREIGN KEY (excuse_id) REFERENCES excuse_slips(excuse_id),
    FOREIGN KEY (sender_id) REFERENCES app_users(user_id)
);

-- Create Deans Table
CREATE TABLE deans (
    dean_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    department_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(user_id),
    FOREIGN KEY (department_id) REFERENCES departments(department_id)
);

-- Create Counselors Table
CREATE TABLE counselors (
    counselor_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    department_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES app_users(user_id),
    FOREIGN KEY (department_id) REFERENCES departments(department_id)
);
