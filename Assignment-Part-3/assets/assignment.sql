-- Check if the database exists
CREATE DATABASE IF NOT EXISTS assignment;

-- Use the database
USE assignment;

-- Create the table
CREATE TABLE IF NOT EXISTS `assignments` (
    `id` int AUTO_INCREMENT NOT NULL,
    `assignment_name` varchar(255) NOT NULL,
    `seq_num` int NOT NULL,
    `level` varchar(255) NOT NULL,
    `track` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT current_timestamp,
    `updated_at` datetime NOT NULL DEFAULT current_timestamp,
    PRIMARY KEY (`id`)
);

-- Insert data into the table
INSERT INTO `assignments` (assignment_name, seq_num, level, track) 
VALUES 
('Algorithm I', '1', 'Easy', 'Introduction'),
('1942', '11', 'Intermediate', 'Introduction'),
('Blogger', '3', 'Easy', 'Intermediate'),
('Can I Use', '12', 'Intermediate', 'Web Fundamentals'),
('Clean Code', '3', 'Easy', 'Introduction'),
('Even numbers', '1', 'Easy', 'PHP'),
('Pacman', '10', 'Intermediate', 'Introduction'),
('Practicing Indentation', '1', 'Easy', 'Web Fundamentals'),
('Simulating Foreach', '7', 'Easy', 'PHP'),
('Spiderbot', '22', 'Intermediate', 'PHP');
