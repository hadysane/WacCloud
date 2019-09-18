-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2019 at 04:42 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id_upload_file` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id_upload_file`, `id_user`, `name`, `type`, `size`, `path`) VALUES
(1, 8, 'W1-05-Expliquer-hady.sane@epitech.euParis.odt', 'application/vnd.oasis.opendocument.text', '920960', NULL),
(2, 8, 'W1-05-Expliquer-hady.sane@epitech.euParis.odt', 'application/vnd.oasis.opendocument.text', '920960', '../uploads/W1-05-Expliquer-hady.sane@epitech.euParis.odt'),
(3, 8, 'CMS-Content-Management-System.png', 'image/png', '9910', '../uploads/CMS-Content-Management-System.png'),
(4, 8, 'plugin_wordpress.png', 'image/png', '135609', '../uploads/plugin_wordpress.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `firstname`, `lastname`, `email`, `password`, `active`) VALUES
(1, 'hady4', 'sane', 'hady', 'dyha95@hotmail.fr', 'dodo', 1),
(2, 'Alina98', 'sane', 'Aline', 'alina98@hotmail.fr', '$2y$10$y6a2OSsPVBfHuBe8X7MUh.dXkLtEcRsMJmnASkd4GxQJmYnzidpN.', 1),
(3, 'toto9', 'toto', 'toto', 'toto@gmail.com', '$2y$10$v/bGlGhAVoP3n8AM/mYnEO7V.LgwdsfWmT1OZmY7s3RxP0wr8HGlW', 1),
(4, 'sata04', 'sane', 'sata', 'sata@gmail.com', '$2y$10$0VJrcXrHYMFoSY1RDm/m4emdIIUWOz/PlVHOc6l45JzEJGplh8.Xe', 1),
(5, 'sata05', 'sane', 'sata', 'sata@hotmail.com', '$2y$10$6yl6tKgcfv1BoyX1TJzd7uODNyXyqIKxfz1.LhQMEfvlac0Bt44vG', 1),
(6, 'amet02', 'sane', 'amet', 'amet@hotmail.fr', '$2y$10$sK0mP81TjW075eLKTfb0R.rIEuaIphZk8yDPt5xzoylVZ.5MWeFq.', 1),
(7, 'didi', 'didi', 'didi', 'didi@hotmail.fr', '$2y$10$94PumU/9SlC3OdKAtCEZjuFvOBHYpoClBGj19mMhtDIou32RYhyq2', 0),
(8, 'hady04', 'sane', 'hady', 'lala@hotmail.fr', '$2y$10$21kjbV1HfGIwOEKglXl.8uSyTxvM6l/VLcCckgwRp8BBSsidhVaBC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id_upload_file`),
  ADD KEY `fk_upload_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id_upload_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD CONSTRAINT `fk_upload_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
