CREATE DATABASE student;
use student;

CREATE TABLE students (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    reg_number VARCHAR(20) NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    course VARCHAR(255) NOT NULL
);
