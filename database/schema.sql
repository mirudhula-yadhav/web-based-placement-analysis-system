-- Web Based Placement Analysis System
-- Database Schema

CREATE DATABASE placement_system;

USE placement_system;

-- Student Table
CREATE TABLE students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    student_name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    department VARCHAR(100),
    cgpa DECIMAL(3,2),
    password VARCHAR(255)
);

-- Company Table
CREATE TABLE companies (
    company_id INT PRIMARY KEY AUTO_INCREMENT,
    company_name VARCHAR(100),
    job_role VARCHAR(100),
    package DECIMAL(10,2),
    eligibility_criteria VARCHAR(100)
);

-- Placement Post Table
CREATE TABLE placement_posts (
    post_id INT PRIMARY KEY AUTO_INCREMENT,
    company_id INT,
    post_title VARCHAR(200),
    description TEXT,
    application_deadline DATE,
    FOREIGN KEY (company_id)
    REFERENCES companies(company_id)
);

-- Student Applications
CREATE TABLE applications (
    application_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    post_id INT,
    application_status VARCHAR(50),
    FOREIGN KEY (student_id)
    REFERENCES students(student_id),
    FOREIGN KEY (post_id)
    REFERENCES placement_posts(post_id)
);
