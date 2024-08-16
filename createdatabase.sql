CREATE DATABASE complaints;

USE complaints;

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    fname VARCHAR(255),
    lname VARCHAR(255),
    agNumber VARCHAR(255) NOT NULL,
    gender VARCHAR(50),
    age INT,
    cnic VARCHAR(255),
    department VARCHAR(255),
    session VARCHAR(255),
    degree VARCHAR(255),
    semester VARCHAR(255),
    mobile VARCHAR(255),
    address VARCHAR(255),
    hostelite VARCHAR(50),
    hostelName VARCHAR(255),
    roomNumber VARCHAR(255),
    complaint TEXT
);
