-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2014 at 02:18 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_event_calendar`
--
drop database if exists db_event_calendar;
create database db_event_calendar;
  use db_event_calendar;
  -- --------------------------------------------------------

  --
  -- Table structure for table `tbl_event_calendar`
  --

  CREATE TABLE `tbl_event_calendar` (
    `id` bigint(20) NOT NULL,
    `start_time` varchar(100) NOT NULL,
    `end_time` varchar(100) NOT NULL,
    `title` varchar(255) NOT NULL,
    `event_description` text NOT NULL,
    `read_only` tinyint(1) DEFAULT '0'
  ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

  --
  -- Dumping data for table `tbl_event_calendar`
  --

  INSERT INTO `tbl_event_calendar` (`id`, `start_time`, `end_time`, `title`, `event_description`, `read_only`) VALUES
  (2, '1417464900000', '1417466700000', 'this is the title', 'this is the body', 0),
  (3, '1417526100000', '1417527900000', 'this is another title', 'example completed with success.', 0),
  (4, '1417552200000', '1417554000000', 'what the hell', 'this is almost done\n', 0),
  (5, '1417548600000', '1417550400000', 'sdf', 'sdf', 0);

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `tbl_event_calendar`
  --
  ALTER TABLE `tbl_event_calendar`
  ADD PRIMARY KEY (`id`);

  --
  -- AUTO_INCREMENT for dumped tables
  --

  --
  -- AUTO_INCREMENT for table `tbl_event_calendar`
  --
  ALTER TABLE `tbl_event_calendar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
