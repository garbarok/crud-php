-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: May 26, 2024 at 08:18 AM
-- Server version: 10.11.7-MariaDB-1:10.11.7+maria~ubu2204-log
-- PHP Version: 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_mysql_crud`
--
CREATE DATABASE IF NOT EXISTS `php_mysql_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php_mysql_crud`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `description`, `author`, `publication_date`, `price`, `link`, `created_at`) VALUES
(3, '978-3-16-148410-0', 'The Great Gatsby', 'A novel set in the Jazz Age that tells the story of Jay Gatsby and his unrequited love for Daisy Buchanan.', 'F. Scott Fitzgerald', '1925-04-10', 10.99, 'https://example.com/great-gatsby', '2024-05-26 08:13:23'),
(4, '978-1-40-289462-6', 'To Kill a Mockingbird', 'A novel about the serious issues of rape and racial inequality told from the perspective of young Scout Finch.', 'Harper Lee', '1960-07-11', 7.99, 'https://example.com/to-kill-a-mockingbird', '2024-05-26 08:13:23'),
(5, '978-0-7432-7356-5', '1984', 'A dystopian novel set in a totalitarian society ruled by Big Brother.', 'George Orwell', '1949-06-08', 6.99, 'https://example.com/1984', '2024-05-26 08:13:23'),
(6, '978-0-452-28423-4', 'Pride and Prejudice', 'A romantic novel that also critiques the British landed gentry at the end of the 18th century.', 'Jane Austen', '1813-01-28', 9.99, 'https://example.com/pride-and-prejudice', '2024-05-26 08:13:23'),
(7, '978-0-7432-7356-6', 'The Catcher in the Rye', 'A novel about the experiences of a young boy named Holden Caulfield, who narrates his story from a mental institution.', 'J.D. Salinger', '1951-07-16', 8.99, 'https://example.com/the-catcher-in-the-rye', '2024-05-26 08:13:23'),
(8, '978-0-14-017739-8', 'Of Mice and Men', 'A story about the bond between two displaced migrant ranch workers during the Great Depression.', 'John Steinbeck', '1937-02-06', 5.99, 'https://example.com/of-mice-and-men', '2024-05-26 08:13:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
