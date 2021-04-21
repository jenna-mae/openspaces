-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2021 at 12:55 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `openspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

CREATE TABLE `spaces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `recentlyAdded` tinyint(1) NOT NULL DEFAULT '0',
  `description` tinytext NOT NULL,
  `host` int(11) NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spaces`
--

INSERT INTO `spaces` (`id`, `name`, `category`, `recentlyAdded`, `description`, `host`, `date`, `startTime`, `endTime`, `link`) VALUES
(2, 'Sample Space', 2, 1, 'This is a sample', 15, '2021-04-20', '23:35:48', '28:35:48', ''),
(4, 'test1', 1, 0, 't', 15, '2021-04-21', '20:42:00', '22:42:00', 'https://www.freshprep.ca/menu/this-week'),
(5, 'test2', 5, 0, 'test2', 15, '2021-04-30', '17:57:00', '20:54:00', 'https://www.freshprep.ca/menu/this-week');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `host` (`host`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spaces`
--
ALTER TABLE `spaces`
  ADD CONSTRAINT `spaces_ibfk_2` FOREIGN KEY (`host`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `spaces_ibfk_3` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);
