-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2021 at 02:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `openspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Hangout'),
(2, 'Art'),
(3, 'Sports'),
(4, 'Books'),
(5, 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

CREATE TABLE `spaces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `recentlyAdded` tinyint(1) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
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
(2, 'Drinks & Paint!', 2, 1, 'Super casual. All you need to have is some paint & something to paint on! Oh and your drink of choice :)', 15, '2021-04-20', '23:35:48', '28:35:48', 'https://meet.google.com/byg-tzkg-amu'),
(4, 'Just Cause', 1, 0, 'We\'re just here to hangout! Just bring yourself and get ready to meet new people!', 15, '2021-04-21', '20:42:00', '22:42:00', 'https://meet.google.com/byg-tzkg-amu'),
(5, 'Quiz Games', 5, 0, 'Join this group if you want to play some games and have fun!', 15, '2021-04-30', '17:57:00', '20:54:00', 'https://meet.google.com/byg-tzkg-amu');

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
(15, 'user@email.com', 'user', 'user', 'user', '$2y$10$K5JhTfDpzqb27Fn2IB/MF.Tao6ONUj7NU.ZZKU2rBhrBms6w70aF2', '2021-04-12', 'NA'),
(16, 'jenna@email.com', 'jenna', 'emerman', 'jenna', '$2y$10$7tJMnOl4T3gCt27GijbUEOL3gNoenSD4fj0WmIuOq8pngoIaQ/zw.', '1997-08-10', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `host` (`host`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spaces`
--
ALTER TABLE `spaces`
  ADD CONSTRAINT `spaces_ibfk_2` FOREIGN KEY (`host`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `spaces_ibfk_3` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);
