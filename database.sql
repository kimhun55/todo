-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2020 at 02:09 AM
-- Server version: 5.7.23
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo_db`
--

CREATE TABLE `todo_db` (
  `todo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `alert_datetime` datetime DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=work,2=off,3=delete',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูล todo';

--
-- Dumping data for table `todo_db`
--

INSERT INTO `todo_db` (`todo_id`, `user_id`, `topic`, `detail`, `alert_datetime`, `status`, `create_at`, `update_at`) VALUES
(1, 1, 'ทำการบ้าน ddd', '', '2020-04-16 12:34:00', 2, '2020-04-08 01:43:53', '2020-04-08 02:09:13'),
(2, 1, 'งานวันเดิก', '', '2020-04-23 00:00:00', 1, '2020-04-08 01:48:17', '2020-04-08 01:48:17'),
(3, 1, 'ทำการบ้าน 2', '', '2020-04-16 12:34:00', 1, '2020-04-08 02:08:32', '2020-04-08 02:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `User_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `create_at` datetime NOT NULL,
  `postion` int(11) NOT NULL COMMENT '1=admin,2=user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูล user และ admin';

--
-- Dumping data for table `User_db`
--

INSERT INTO `user_db` (`id`, `username`, `password`, `name`, `email`, `tel`, `create_at`, `postion`) VALUES
(1, 'kimhun55', '1150', 'kimhu55', 'kimhun55@gmail.com', '0815575706', '2020-04-07 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_db`
--
ALTER TABLE `todo_db`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `User_db`
--
ALTER TABLE `User_db`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_db`
--
ALTER TABLE `todo_db`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User_db`
--
ALTER TABLE `User_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
