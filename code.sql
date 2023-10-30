-- Create the database
CREATE DATABASE wp_mini;

-- Use the database
USE wp_mini;

CREATE TABLE `userdata` (
  `sno` int(11) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Type` text NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--
INSERT INTO `userdata` (`sno`, `Emailid`, `Password`, `Type`, `name`) VALUES
(1, 'admin@somaiya.edu', 'admin123', 'admin', 'admin'),
(2, 'userd@gmail.com','user123','user','user');

CREATE TABLE `bookinfo` (
  `bname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `totalrating` int NOT NULL,
  `rno` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `bookinfo` (`bname`, `author`, `genre`, `totalrating`, `rno`, `name`, `image`) VALUES
('Book 1', 'author 1', 'genre 1', 30, 6, 'user', 'book1');