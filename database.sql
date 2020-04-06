-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2020 at 08:14 PM
-- Server version: 5.7.23
-- PHP Version: 7.0.31

--SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
--SET time_zone = "+00:00";

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
  `alert_datetime` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=work,2=off,3=delete',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูล todo';

-- --------------------------------------------------------

--
-- Table structure for table `User_db`
--

CREATE TABLE `User_db` (
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
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `User_db`
--
ALTER TABLE `User_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
