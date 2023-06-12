-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 01:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `url`, `cover`, `date`) VALUES
(1, 'Artikel Terbaru Tambah Gambar', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.         \r\n\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.                               ', 'artikel-Terbaru', 'Gambar10.jpg', '2023-05-15 13:35:52'),
(2, 'Artikel Kedua tambah gambar terbaru', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.', 'artikel-kedua', 'Gambar21.jpg', '2023-05-15 13:37:00'),
(3, 'Artikel Ketiga', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.                                                            ', 'artikel-ketiga-tambah-gambar', 'Gambar22.jpg', '2023-05-15 13:37:40'),
(9, 'Artikel Keempat terbaru', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.        ', 'Artikel-keempat', 'Gambar2', '2023-05-15 14:38:46'),
(11, 'artikel ke enam', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.', 'artikel-keenam', '', '2023-05-15 07:01:59'),
(12, 'update terbaru', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.', 'blog-terbaru-gambar', 'Gambar2', '2023-05-15 14:15:42'),
(37, 'ini adalah artikel bergambar', '                                            ', 'artikel-update', 'Gambar5.jpg', '2023-05-15 12:57:43'),
(38, 'Artikel ke delapan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid a, quos unde delectus blanditiis harum id cum nisi odit, fugit excepturi aut incidunt! Accusamus excepturi dolore quam ullam sequi sed.', 'Artikel-kedelapan-terbaru', 'Gambar2', '2023-05-15 14:45:16'),
(39, 'Judul Artikel Terbaru', 'ini adalah konten terbaru', 'judul-artikel-terbaru', 'Gambar2', '2023-05-15 14:37:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
