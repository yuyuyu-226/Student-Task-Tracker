-- SQL to create database and tasks table (student_tracker_db)
CREATE DATABASE IF NOT EXISTS student_tracker_db;
USE student_tracker_db;
CREATE TABLE IF NOT EXISTS tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  due_date DATE NOT NULL,
  priority ENUM('High','Medium','Low') NOT NULL DEFAULT 'Medium',
  status ENUM('Pending','Complete') NOT NULL DEFAULT 'Pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
