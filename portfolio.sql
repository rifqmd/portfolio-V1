-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2022 at 04:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` tinyint(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `message`) VALUES
(1, 'd@mail.com', 'q', 'q'),
(2, 'd@mail.com', 'q', 'q'),
(3, 'd@mail.com', 'q', 'q'),
(4, 'd@mail.com', 'q', 'q'),
(5, 'd@mail.com', 'q', 'q'),
(6, 'd@mail.com', 'q', 'q'),
(7, 'q@mail.com', 'q', 'q'),
(8, 'q@mail.com', 'q', 'q'),
(9, 'a@mail.com', 'z', 'a'),
(10, 'a@mail.com', 'z', 'a'),
(11, 'den@mail.com', 'Rifqi ', 'Ini pesan'),
(12, 'user@mail.com', 'User', 'Ini pesan');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` tinyint(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `categori` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `judul`, `categori`, `gambar`, `isi`) VALUES
(1, 'Redesign Website Pembangunan Jaya University', 'Web Development', 'redesign.jpg', '<p>Redesign website ini yang bertujuan untuk menyederhanakan UX agar user lebih mudah mencari menu-menu yang ingin mereka cari.</p>'),
(2, 'Mount Time', 'Mobile UI UX', 'mount-time.jpg', '<p>Desain UI UX mobile yang bernama Mount Time. Aplikasi ini yang bertujuan untuk melakukan management waktu pengguna smartphone untuk menjaga kesehatan pada mata.</p>'),
(3, 'Aplikasi CRUD Perpustakaan', 'Software Development', 'javafx.jpg', '<p>Aplikasi CRUD Perpustakaan dengan menggunakan bahasa pemrograman Java dan desain interface menggunakan Scane Builder dan JavaFX</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
