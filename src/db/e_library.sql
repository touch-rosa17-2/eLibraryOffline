-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 05:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `authorID` int(5) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL,
  `authorGender` varchar(100) NOT NULL,
  `authorType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`authorID`, `bookAuthor`, `authorGender`, `authorType`) VALUES
(10, 'Rosa', 'Male', 'Student'),
(11, 'J.K. Rowling', 'Female', 'Fiction'),
(12, 'Stephen King', 'Male', 'Fiction'),
(13, 'Agatha Christie', 'Female', 'Fiction'),
(14, 'James Patterson', 'Male', 'Fiction'),
(15, 'Dan Brown', 'Male', 'Fiction'),
(16, 'Suzanne Collins', 'Female', 'Fiction'),
(17, 'J.R.R. Tolkien', 'Male', 'Fiction'),
(18, 'Neil Gaiman', 'Male', 'Fiction'),
(19, 'Margaret Atwood', 'Female', 'Fiction'),
(20, 'George R.R. Martin', 'Male', 'Fiction'),
(21, 'Malcolm Gladwell', 'Male', 'Non-fiction'),
(22, 'Michelle Obama', 'Female', 'Non-fiction'),
(23, 'Tara Westover', 'Female', 'Non-fiction'),
(24, 'David Sedaris', 'Male', 'Non-fiction'),
(25, 'Yuval Noah Harari', 'Male', 'Non-fiction'),
(26, 'Brene Brown', 'Female', 'Non-fiction'),
(27, 'Mary Roach', 'Female', 'Non-fiction'),
(28, 'Gretchen Rubin', 'Female', 'Non-fiction'),
(29, 'Simon Sinek', 'Male', 'Non-fiction'),
(30, 'Michael Pollan', 'Male', 'Non-fiction'),
(31, 'Zadie Smith', 'Female', 'Fiction'),
(32, 'Philip Roth', 'Male', 'Fiction'),
(33, 'Donna Tartt', 'Female', 'Fiction'),
(34, 'Haruki Murakami', 'Male', 'Fiction'),
(35, 'Chimamanda Ngozi Adichie', 'Female', 'Fiction'),
(36, 'Kazuo Ishiguro', 'Male', 'Fiction'),
(37, 'Alice Munro', 'Female', 'Fiction'),
(38, 'Toni Morrison', 'Female', 'Fiction'),
(39, 'Junot Diaz', 'Male', 'Fiction'),
(40, 'Jhumpa Lahiri', 'Female', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `categoryID` int(5) NOT NULL,
  `bookCategory` varchar(100) NOT NULL,
  `categoryType` varchar(100) NOT NULL,
  `categoryBlank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`categoryID`, `bookCategory`, `categoryType`, `categoryBlank`) VALUES
(5, 'Love Story\r\n', 'Edited2', ''),
(17, 'Science', 'Science', ''),
(34, 'Fiction', 'Genre', ''),
(35, 'Non-fiction', 'Genre', ''),
(36, 'Biography', 'Genre', ''),
(37, 'Romance', 'Genre', ''),
(38, 'Mystery', 'Genre', ''),
(39, 'Horror', 'Genre', ''),
(40, 'Fantasy', 'Genre', ''),
(41, 'Historical', 'Genre', ''),
(42, 'Poetry', 'Genre', ''),
(131, 'Historical Fiction', 'Fiction', ''),
(132, 'Science Fiction', 'Fiction', ''),
(133, 'Western', 'Fiction', ''),
(134, 'True Crime', 'Non-fiction', ''),
(135, 'Business', 'Non-fiction', ''),
(136, 'Economics', 'Non-fiction', ''),
(137, 'Finance', 'Non-fiction', ''),
(138, 'Health', 'Non-fiction', ''),
(139, 'Technology', 'Non-fiction', ''),
(140, 'Art', 'Non-fiction', ''),
(141, 'Music', 'Non-fiction', ''),
(142, 'Philosophy', 'Non-fiction', ''),
(143, 'Psychology', 'Non-fiction', ''),
(144, 'Religion', 'Non-fiction', ''),
(145, 'Sports', 'Non-fiction', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_publisher`
--

CREATE TABLE `book_publisher` (
  `publisherID` int(5) NOT NULL,
  `bookPublisher` varchar(100) NOT NULL,
  `publisherGender` varchar(100) NOT NULL,
  `publisherType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_publisher`
--

INSERT INTO `book_publisher` (`publisherID`, `bookPublisher`, `publisherGender`, `publisherType`) VALUES
(2, 'Rosa', 'Male', 'Student'),
(3, 'Sin ji Kaka ', 'Female ', 'Journalishm'),
(4, 'Librian', 'Other', 'Librian'),
(5, 'Admin', 'Other', 'Admin'),
(6, 'Penguin Random House', 'Male', 'Big 5 publisher'),
(7, 'Hachette Livre', 'Male', 'Big 5 publisher'),
(8, 'HarperCollins', 'Male', 'Big 5 publisher'),
(9, 'Macmillan Publishers', 'Male', 'Big 5 publisher'),
(10, 'Simon & Schuster', 'Male', 'Big 5 publisher'),
(11, 'Wiley', 'Male', 'Academic publisher'),
(12, 'Oxford University Press', 'Male', 'Academic publisher'),
(13, 'Cambridge University Press', 'Male', 'Academic publisher'),
(14, 'Taylor & Francis', 'Male', 'Academic publisher'),
(15, 'Elsevier', 'Male', 'Academic publisher'),
(16, 'Pearson Education', 'Male', 'Educational publisher'),
(17, 'McGraw Hill Education', 'Male', 'Educational publisher'),
(18, 'Cengage Learning', 'Male', 'Educational publisher'),
(19, 'Houghton Mifflin Harcourt', 'Male', 'Educational publisher'),
(20, 'Springer Nature', 'Male', 'Scientific publisher'),
(21, 'IEEE', 'Male', 'Scientific publisher'),
(22, 'American Chemical Society', 'Male', 'Scientific publisher'),
(23, 'Wolters Kluwer', 'Male', 'Medical publisher'),
(24, 'Lippincott Williams & Wilkins', 'Male', 'Medical publisher'),
(25, 'Thieme Medical Publishers', 'Male', 'Medical publisher'),
(26, 'Bloomsbury Publishing', 'Female', 'Independent publisher'),
(27, 'Chronicle Books', 'Female', 'Independent publisher'),
(28, 'McSweeney’s', 'Male', 'Independent publisher'),
(29, 'Graywolf Press', 'Female', 'Independent publisher'),
(30, 'Akashic Books', 'Female', 'Independent publisher'),
(31, 'Tin House Books', 'Female', 'Independent publisher'),
(32, 'And Other Stories', 'Female', 'Independent publisher'),
(33, 'Europa Editions', 'Female', 'Independent publisher'),
(34, 'Seven Stories Press', 'Male', 'Independent publisher'),
(35, 'Melville House', 'Male', 'Independent publisher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminID` int(5) NOT NULL,
  `adminUsername` varchar(100) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminPassword` int(200) NOT NULL,
  `adminDisplayName` int(100) NOT NULL,
  `adminImage` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `bookID` int(5) NOT NULL,
  `bookTitle` varchar(100) NOT NULL,
  `bookDescription` text NOT NULL,
  `bookCategory` varchar(100) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL,
  `bookPublisher` varchar(100) NOT NULL,
  `bookLocation` varchar(200) NOT NULL,
  `bookImage` varchar(200) NOT NULL,
  `bookPrice` float NOT NULL,
  `bookQty` int(10) NOT NULL,
  `bookAddedOn` date NOT NULL,
  `bookAddedBy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bookID`, `bookTitle`, `bookDescription`, `bookCategory`, `bookAuthor`, `bookPublisher`, `bookLocation`, `bookImage`, `bookPrice`, `bookQty`, `bookAddedOn`, `bookAddedBy`) VALUES
(65, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(76, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(77, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(78, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(79, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(80, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(81, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(82, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(83, 'Rosa', 'Rosa', 'Art', 'Agatha Christie', 'Admin', '', '', 100, 5, '2018-04-23', 'Rosa'),
(84, 'Living in the Light: A guide to personal transformation', 'Living in the Light: A guide to personal transformationLiving in the Light: A guide to personal transformation', 'Religion', 'J.K. Rowling', 'Admin', '9b88b7c17f496a61fc78505130af288e.jpg', '', 100, 5, '2018-04-23', 'Admin'),
(85, 'Give and Take: WHY HELPING OTHERS DRIVES OUR SUCCESS', 'Give and Take: WHY HELPING OTHERS DRIVES OUR SUCCESS', 'Religion', 'Alice Munro', 'Akashic Books', '653f249a58f438ef343c5da5f023203d.jpg', '', 400, 90, '2018-04-23', 'Kaka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(5) NOT NULL,
  `displayName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userPassword` varchar(200) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `userImage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `displayName`, `userName`, `email`, `userPassword`, `userType`, `dob`, `gender`, `address`, `userImage`) VALUES
(7, 'Sin ji Kaka', 'kaka', 'kaka@gmail.com', '111', '', '2023-12-31', 'Female', 'Phnom Peng', '0be74fad-8e41-4e16-9683-d5ba77e1c103.jpg\r\n'),
(8, 'Touch Rosa', 'rosa', 'rosa@gmail.com', '111', '', '2023-12-31', 'Male', 'Phnom Peng', 'photo_2023-04-18_06-37-51.jpg'),
(9, 'Jame Sbon', 'jamesbon', 'jamesbon@gmail.com', '111', '', '2023-12-31', 'Male', 'USA', 'Nam Joo Hyuk boyfriend material.jpg'),
(10, 'John Doe', 'johndoe', 'johndoe@gmail.com', 'password123', 'User', '1990-05-15', 'Male', '123 Main St, Anytown', ''),
(11, 'Jane Smith', 'janesmith', 'janesmith@icloud.com', '12345abcde', 'User', '1995-10-20', 'Female', '456 Oak Ave, Anycity', ''),
(12, 'Bob Johnson', 'bobjohnson', 'bobjohnson@outlook.com', 'p@ssw0rd', 'User', '1988-12-01', 'Male', '789 Maple Blvd, Anyville', ''),
(13, 'Sarah Lee', 'sarahlee', 'sarahlee@gmail.com', 'qwerty123', 'User', '1993-02-28', 'Female', '321 Cedar St, Anytown', ''),
(14, 'Mike Brown', 'mikebrown', 'mikebrown@rosa.com', 'pa$$word', 'User', '1985-07-12', 'Male', '654 Pine Dr, Anyville', ''),
(15, 'Emily Davis', 'emilydavis', 'emilydavis@icloud.com', 'password', 'User', '1992-11-03', 'Female', '987 Oak Ln, Anycity', ''),
(16, 'David Kim', 'davidkim', 'davidkim@gmail.com', '12345678', 'User', '1996-04-09', 'Male', '246 Elm St, Anytown', ''),
(17, 'Amanda Scott', 'amandascott', 'amandascott@outlook.com', 'abcd1234', 'User', '1991-08-17', 'Female', '135 Maple Ave, Anyville', ''),
(18, 'Peter Chen', 'peterchen', 'peterchen@icloud.com', 'password123', 'User', '1989-01-30', 'Male', '864 Pine St, Anycity', ''),
(19, 'Megan Lee', 'meganlee', 'meganlee@rosa.com', 'password1', 'User', '1994-06-24', 'Female', '753 Cedar Dr, Anytown', ''),
(20, 'Samantha Brown', 'samanthabrown', 'samanthabrown@outlook.com', 'abc123', 'User', '1994-09-12', 'Female', '456 Maple Dr, Anycity', ''),
(21, 'David Lee', 'davidlee', 'davidlee@gmail.com', 'pass123', 'User', '1991-03-18', 'Male', '789 Oak St, Anyville', ''),
(22, 'Angela Park', 'angelapark', 'angelapark@icloud.com', 'qwertyui', 'User', '1996-08-27', 'Female', '321 Pine Ln, Anytown', ''),
(24, 'Linda Kim', 'lindakim', 'lindakim@gmail.com', 'qwerty1234', 'User', '1995-01-22', 'Female', '987 Pine Blvd, Anycity', ''),
(28, 'test', 'test', 'test@gmail.com', '111', 'Admin', '2023-12-31', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `typeID` int(5) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `typeDetail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`typeID`, `userType`, `typeDetail`) VALUES
(1, 'admin', 'full control'),
(2, 'librian', 'part control'),
(3, 'user', 'using only');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`authorID`),
  ADD UNIQUE KEY `bookAuthor` (`bookAuthor`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `bookCategory` (`bookCategory`);

--
-- Indexes for table `book_publisher`
--
ALTER TABLE `book_publisher`
  ADD PRIMARY KEY (`publisherID`),
  ADD UNIQUE KEY `bookPublisher` (`bookPublisher`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `adminUserName` (`adminUsername`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `bookCategory` (`bookCategory`),
  ADD KEY `bookAuthor` (`bookAuthor`,`bookPublisher`),
  ADD KEY `bookPublisher` (`bookPublisher`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`email`) USING BTREE,
  ADD UNIQUE KEY `userName` (`userName`) USING BTREE;

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`typeID`),
  ADD UNIQUE KEY `userType` (`userType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_author`
--
ALTER TABLE `book_author`
  MODIFY `authorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `categoryID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `book_publisher`
--
ALTER TABLE `book_publisher`
  MODIFY `publisherID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `bookID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `typeID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD CONSTRAINT `tbl_book_ibfk_1` FOREIGN KEY (`bookCategory`) REFERENCES `book_category` (`bookCategory`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_book_ibfk_2` FOREIGN KEY (`bookAuthor`) REFERENCES `book_author` (`bookAuthor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_book_ibfk_3` FOREIGN KEY (`bookPublisher`) REFERENCES `book_publisher` (`bookPublisher`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`userType`) REFERENCES `user_type` (`userType`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
