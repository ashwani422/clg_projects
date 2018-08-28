-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 08:57 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `sn` int(2) NOT NULL,
  `isbn_no` varchar(10) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_type` int(1) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `quantity` int(2) NOT NULL,
  `purchaase_date` date NOT NULL,
  `edition` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `pages` int(3) NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`sn`, `isbn_no`, `book_title`, `book_type`, `author_name`, `quantity`, `purchaase_date`, `edition`, `price`, `pages`, `publisher`) VALUES
(1, '00001', 'Java programming', 1, 'unknown', 10, '2018-06-01', 1, '800.50', 200, 'unknown'),
(2, '00002', 'C programming', 1, 'unknown', 8, '2018-06-02', 1, '700.15', 250, 'unknown'),
(3, '00001', 'Java programming', 1, 'unknown', 10, '2018-06-01', 1, '800.50', 200, 'unknown'),
(4, '00002', 'C programming', 1, 'unknown', 8, '2018-06-02', 1, '700.15', 250, 'unknown'),
(5, '00003', 'Ramayan', 2, 'Tulsidas ji', 100, '2018-06-01', 1, '100.00', 500, 'unknown'),
(6, '00003', 'Ramayan', 2, 'Tulsidas ji', 100, '2018-06-01', 1, '100.00', 500, 'unknown'),
(7, '00004', 'Shreemad Bhagwat Geeta', 2, 'Shree Krishna ji', 100, '2018-06-01', 1, '100.00', 500, 'unknown'),
(8, '00005', 'Hatimtai', 2, 'unknown', 10, '2018-07-05', 1, '20.00', 50, 'unknown'),
(9, '00006', 'Wings of Fire', 2, 'unknown', 8, '2018-07-12', 5, '1000.00', 1500, 'unknown');

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE `book_issue` (
  `sn` int(2) NOT NULL,
  `issued_to` varchar(50) NOT NULL,
  `quantity` int(2) NOT NULL,
  `book_number` int(5) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `issued_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`sn`, `issued_to`, `quantity`, `book_number`, `book_title`, `issue_date`, `return_date`, `status`, `issued_id`) VALUES
(1, 'Ashwnai Kumar', 2, 1, 'Java Programming', '2018-06-02', '2018-07-02', 'issued', '1'),
(2, 'Gulshan Sharma', 4, 2, 'C Programming', '2018-06-01', '2018-06-27', 'returned', '2'),
(3, 'Abhay Yadav', 1, 3, 'Ramayana', '2018-06-01', '2018-06-14', 'issued', '4'),
(4, 'Rohit Chauhan', 2, 3, 'Ramayana', '2018-07-05', '2018-07-05', 'issued', '5');

-- --------------------------------------------------------

--
-- Table structure for table `magzins`
--

CREATE TABLE `magzins` (
  `sn` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_of_receipt` date NOT NULL,
  `date_of_published` date NOT NULL,
  `pages` int(2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `publisher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magzins`
--

INSERT INTO `magzins` (`sn`, `name`, `date_of_receipt`, `date_of_published`, `pages`, `price`, `publisher`) VALUES
(1, '@$ Tech', '2018-06-01', '2018-06-01', 20, '50.50', 'unknown'),
(2, 'Toay Tech', '2018-06-01', '2018-06-01', 15, '45.50', 'unknown'),
(3, 'abc', '2018-07-05', '2018-07-05', 58, '100.00', 'unknown'),
(4, 'Forbes', '2018-07-12', '2018-07-01', 40, '50.00', 'unknown');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `sn` int(2) NOT NULL,
  `mem_id` int(5) NOT NULL,
  `mem_nm` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `id_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sn`, `mem_id`, `mem_nm`, `contact`, `id_no`) VALUES
(1, 1, 'Ashwani Kumar', 1234567891, 123456789987654321),
(2, 2, 'Gulshan Sharma', 1234567892, 123456789987654322),
(3, 3, 'Rohit Chauhan', 1234567893, 12345678998765433),
(4, 4, 'Abhay Yadav', 1234567894, 12345678998765434),
(5, 5, 'Rinku Yadav', 123456789124, 264637004060238),
(6, 6, 'Rohit Varshney', 12346795, 11234567898745621);

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE `newspapers` (
  `sn` int(2) NOT NULL,
  `language` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_of_reciept` date NOT NULL,
  `date_of_published` date NOT NULL,
  `pages` int(2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `publisher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`sn`, `language`, `name`, `date_of_reciept`, `date_of_published`, `pages`, `price`, `publisher`) VALUES
(1, 'Hindi', 'Dainik Jagaran', '2018-06-01', '2018-06-01', 20, '3.50', 'Dainik Jagaran'),
(2, 'Hindi', 'Amar Ujala', '2018-06-01', '2018-06-01', 18, '3.50', 'Amar Ujala'),
(3, 'English', 'The Hidu', '2018-06-01', '2018-06-01', 20, '5.00', 'unknown'),
(4, 'English', 'The Times of India', '2018-06-01', '2018-06-01', 20, '5.00', 'unknown'),
(5, 'Hindi', 'Hindustan', '2018-07-05', '2018-07-05', 22, '3.00', 'unknown'),
(6, 'HIndi', 'Dainic Bhaskar', '2018-07-12', '2018-07-12', 20, '8.00', 'unknown');

-- --------------------------------------------------------

--
-- Table structure for table `returned`
--

CREATE TABLE `returned` (
  `sn` int(2) NOT NULL,
  `book_number` int(5) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `issue_date` date NOT NULL,
  `due_days` int(2) NOT NULL,
  `return_date` date NOT NULL,
  `member` varchar(50) NOT NULL,
  `quantity` int(2) NOT NULL,
  `fine` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returned`
--

INSERT INTO `returned` (`sn`, `book_number`, `book_title`, `issue_date`, `due_days`, `return_date`, `member`, `quantity`, `fine`, `status`) VALUES
(1, 1, 'Java Programming', '2018-05-13', 2, '2018-06-12', 'Ashwani Kumar', 2, '100.00', 'returned'),
(3, 1, 'Java Programming', '2018-06-02', 5, '2018-07-02', 'Ashwani Kumar', 2, '500.00', 'not returned');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(2) NOT NULL,
  `usrnm` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `usrnm`, `password`) VALUES
(1, 'admin', '$2y$10$fvn0UeEEEpOmevqDTAO1UexDXCB8yCjQ9vW8ySGC9Q79NyGHtdabC'),
(2, 'user', '$2y$10$2FbS3.q42Rlx/MPulEBz3.CwMi6Tu76PVf0suxL9eechdcKm7eZwG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `book_issue`
--
ALTER TABLE `book_issue`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `magzins`
--
ALTER TABLE `magzins`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `id_no` (`id_no`);

--
-- Indexes for table `newspapers`
--
ALTER TABLE `newspapers`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `returned`
--
ALTER TABLE `returned`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `book_issue`
--
ALTER TABLE `book_issue`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `magzins`
--
ALTER TABLE `magzins`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newspapers`
--
ALTER TABLE `newspapers`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `returned`
--
ALTER TABLE `returned`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
