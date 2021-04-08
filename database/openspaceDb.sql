-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2021 at 12:04 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `openspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstName`, `lastName`, `username`, `password`, `birthday`, `gender`) VALUES
(8, 'test@email.com', 'Test', 'Test', 'Test', '$2y$10$OYbzAHVdKV24JKcyZXtar.hLOVRBO2311abgDEl7FZSvtM6tQ.9By', '1997-08-10', 'Male'),
(9, 'jenna@email.com', 'Jenna', 'Emerman', 'Jenna', '$2y$10$KJVc9V5xNrtbdg4mtiEuE.l4iYXXbJmqZ.qtSVhfYoa27e0tffwsS', '1997-08-10', 'Female'),
(10, 'sample@email.com', 'Sample', 'Sample', 'Sample', '$2y$10$YbJHHAL2d.dJHk84lRgUeOkBQvyg4GXr4pBWgU3JyL.HiiWAa7eiq', '2021-04-07', 'NA'),
(11, 'xx@email.com', 'xx', 'xx', 'xx', '$2y$10$EiqYIDPkhApSu3X4eGSN1eXaexokX.duV/PkisLx.A64ZuBkNY2cK', '1997-08-10', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
