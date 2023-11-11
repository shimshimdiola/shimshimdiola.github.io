-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 10:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `disc` varchar(500) NOT NULL,
  `writter` varchar(50) NOT NULL,
  `date listed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `cover`, `tittle`, `disc`, `writter`, `date listed`) VALUES
(12, 'uploads/mo-dao-zu-shi-x27x27grandmaster-of-demonic-cultivationx27x27-completpdf-pdf-free.jpg', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'Buku Filosofi Teras ini memberi cara latihan menta', 'A. SETYO WIBOWO', '2023-11-10 09:31:59'),
(13, 'uploads/917Bc9C1MlL._SY466_.jpg', 'Iron Flame (The Empyrean, 2)', 'Everyone  expected Violet Sorrengail to die during ', 'A. SETYO WIBOWO', '2023-11-10 12:16:30'),
(14, 'uploads/IMG_2028.jpg', 'No Brainer (Diary of a Wimpy Kid Book 18)', 'In No Brainer, book 18 of the Diary of a Wimpy Kid series from 1 international bestselling author Jeff Kinney, it’s up to Greg to save his crumbling school before it’s shuttered for good.\n\nUp until now, middle school hasn’t exactly been a joyride for Greg Heffley. So when the town threatens to close the crumbling building, he’s not too broken up about it.\n', 'Jeff Kinney (Author)', '2023-11-10 12:19:47'),
(17, 'uploads/download.jpg', 'alibaba', 'In No Brainer, book 18 of the\nDiary of a Wimpy Kid series fr\nom  international bestsellin', 'asbakastaral', '2023-11-10 12:39:05'),
(18, 'uploads/917Bc9C1MlL._SY466_.jpg', 'alibaba', 'wwww', 'asbakastaral', '2023-11-10 13:13:49'),
(19, 'uploads/IMG_2028.jpg', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'But when Greg realizes this means he’s going to be sent to a different school than his best friend, Rowley Jefferson, he changes his tune. Can Greg and his classmates save their school before it’s shuttered for good? Or is this the start of a whole new chapter for Greg?', 'A. SETYO WIBOWO', '2023-11-10 23:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `borrower` varchar(200) NOT NULL,
  `tittle` varchar(200) NOT NULL,
  `writter` varchar(300) NOT NULL,
  `disc` varchar(500) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `date_borrow` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_returned` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `borrower`, `tittle`, `writter`, `disc`, `cover`, `date_borrow`, `date_returned`, `status`) VALUES
(104, 'user123', 'alibaba', 'asbakastaral', 'In No Brainer, book 18 of theDiary of a Wimpy Kid series from  international bestsellin', 'uploads/download.jpg', '2023-11-10 22:49:54', '2023-11-11 06:56:13', 2),
(105, 'user123', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'A. SETYO WIBOWO', 'Buku Filosofi Teras ini memberi cara latihan menta', 'uploads/mo-dao-zu-shi-x27x27grandmaster-of-demonic-cultivationx27x27-completpdf-pdf-free.jpg', '2023-11-10 23:08:41', '2023-11-11 07:09:35', 2),
(106, 'user123', 'Iron Flame (The Empyrean, 2)', 'A. SETYO WIBOWO', 'Everyone  expected Violet Sorrengail to die during ', 'uploads/917Bc9C1MlL._SY466_.jpg', '2023-11-10 23:08:58', '2023-11-11 07:09:52', 2),
(107, 'user123', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'A. SETYO WIBOWO', 'Buku Filosofi Teras ini memberi cara latihan menta', 'uploads/mo-dao-zu-shi-x27x27grandmaster-of-demonic-cultivationx27x27-completpdf-pdf-free.jpg', '2023-11-10 23:11:35', '2023-11-11 07:12:59', 2),
(108, 'user123', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'A. SETYO WIBOWO', 'Buku Filosofi Teras ini memberi cara latihan menta', 'uploads/mo-dao-zu-shi-x27x27grandmaster-of-demonic-cultivationx27x27-completpdf-pdf-free.jpg', '2023-11-10 23:12:14', '2023-11-11 07:13:51', 2),
(109, 'user123', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'A. SETYO WIBOWO', 'Buku Filosofi Teras ini memberi cara latihan menta', 'uploads/mo-dao-zu-shi-x27x27grandmaster-of-demonic-cultivationx27x27-completpdf-pdf-free.jpg', '2023-11-10 23:14:48', '2023-11-11 07:15:02', 2),
(110, '', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'A. SETYO WIBOWO', 'But when Greg realizes this means he’s going to be sent to a different school than his best friend, Rowley Jefferson, he changes his tune. Can Greg and his classmates save their school before it’s shuttered for good? Or is this the start of a whole new chapter for Greg?', 'uploads/IMG_2028.jpg', '2023-11-10 23:41:02', '2023-11-11 07:41:14', 2),
(111, 'test123', 'Mo Dao Zu Shi [\'\'Grandmaster of Demonic Cultivatio', 'A. SETYO WIBOWO', 'Buku Filosofi Teras ini memberi cara latihan menta', 'uploads/mo-dao-zu-shi-x27x27grandmaster-of-demonic-cultivationx27x27-completpdf-pdf-free.jpg', '2023-11-11 08:07:37', '2023-11-11 16:09:39', 2),
(112, 'user123', 'Iron Flame (The Empyrean, 2)', 'A. SETYO WIBOWO', 'Everyone  expected Violet Sorrengail to die during ', 'uploads/917Bc9C1MlL._SY466_.jpg', '2023-11-11 08:08:53', '2023-11-11 16:09:27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'user123', 'user123@gmail.com', 'user123'),
(6, 'test123', 'test123@gmail.com', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
