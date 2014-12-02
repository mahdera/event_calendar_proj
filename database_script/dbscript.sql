-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2014 at 02:38 PM
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
  `start_time` bigint NOT NULL,
  `end_time` bigint NOT NULL,
  `title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `read_only` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
