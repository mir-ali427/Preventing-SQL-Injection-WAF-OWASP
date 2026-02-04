-- Create database
CREATE DATABASE waflab;
USE waflab;

-- Create users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

-- Insert sample users
INSERT INTO users (username, password) VALUES
('admin', 'admin123'),
('mir', 'mir123'),
('student', 'student123');

