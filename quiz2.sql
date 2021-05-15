-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 03:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'user', '$2y$10$rIy/4zd9vHuixyWWDU0xf.Pa1boQsOZ7i6pfF0Q.2P8.JP4JHRHn6'),
(2, 'user', '$2y$10$olzDcmJzSiXpXlo0vi5lF.VKE6v7YZ1oIf2beXJkYicIKIatKZZjq'),
(4, 'cobausername', '$2y$10$eieDYYpEMJFPkpH6RvhmmOtnCLHEBENOLE.rbwoYbfGaJx1QK1RkC'),
(5, 'coba', '$2y$10$jKaaNcI9kGWl3lSfM4Vck.3ZlkaJ8YTnALcWHHtjio.SgbIgMisUe'),
(6, 'cobalagi', '$2y$10$7ptsooHi/fId1ehNHcI4GuERQc8Vl8F/KwqvrTIBXvqhx76QbueIq'),
(7, 'cobauser', '$2y$10$DGYLTt8L0CJP9a6n82kDSOq2aEAg4KQvPqa4u2bQQJ9wqJbXbSSdW'),
(8, 'usercoba', '$2y$10$4/ftZoEBfBC.0Abr4KBme.A.ZksWVYw6xlujvHIhy/FTAwMQCZHfe'),
(9, 'usernamecoba', '$2y$10$NPVxR2MERWJ9ULp8lHP2merjMQBZ7Z5C/om1kbzSjiUDkBYz8/eEi'),
(10, 'usercobalagi', '$2y$10$Er1axbn6IgHDN9C3C61WiuOWxjw/e6x8JTN6SUGyFcewwq5PA9kqW'),
(11, 'isiuser', '$2y$10$9Zt7ZforUViEo8VdRG6O9OXB7C0po/7p3qwH4HnetzeTcr6vdoGoa');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
