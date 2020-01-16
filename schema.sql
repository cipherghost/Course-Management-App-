-- Create a new database
CREATE DATABASE endgem;

-- Select the newly created database
USE endgem;

-- Generating database schema which contains a table namely course1
CREATE TABLE `course1` (
  `id` INT AUTO_INCREMENT,
  `dname` VARCHAR(150),
  `date` DATE,
  `nod` INT(11) DEFAULT '0',
   PRIMARY KEY(id)
);

-- Generating database schema which contains a table namely course2
CREATE TABLE `course2` (
  `id` INT AUTO_INCREMENT,
  `dname` VARCHAR(150),
  `date` DATE,
  `nod` INT(11) DEFAULT '0',
   PRIMARY KEY(id)
);

-- Generating database schema which contains a table namely course3
CREATE TABLE `course3` (
  `id` INT AUTO_INCREMENT,
  `dname` VARCHAR(150),
  `date` DATE,
  `nod` INT(11) DEFAULT '0',
   PRIMARY KEY(id)
);

-- Generating database schema which contains a table namely course4
CREATE TABLE `course4` (
  `id` INT AUTO_INCREMENT,
  `dname` VARCHAR(150),
  `date` DATE,
  `nod` INT(11) DEFAULT '0',
   PRIMARY KEY(id)
);
