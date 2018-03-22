-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 01:14 AM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secret_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `diary_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `diary_content`) VALUES
(3, 'yash@gmail.com', '$2y$10$4WWejq3rzugG5ynTTY03DeIreKIBYFq5vbpEG04oueft2psdAdnZu', NULL),
(4, 'chirag@gmail.com', '$2y$10$i9aXJkdBwyeUzzh5LrArWO7vnGO7Va6jbqy5138xZmzZCBqsNyP3e', NULL),
(5, 'rohan@gmail.com', '$2y$12$OTNNG13J9NbjUlaKc.Zc.uZbeiHslBNTLGCzs3So2KY9UzHrRzrwu', NULL),
(6, 'darsh215@gmail.com', '$2y$12$SQjMXX4480rvkoW3gZKFce7Klr.tnnL1GOOBjjKex/anpBaVHndCa', NULL),
(7, 'xyz@gma.xom', '$2y$12$Mo8ANC7NEDoJ4qTTX6INNeU.K3.vvcG.bdY44AOFVkOB047qGOFbS', NULL),
(8, 'asas!makms@xpm', '$2y$12$7r/PdWwfShi/79.0pSw3D.8JPA/y8SP/20lrugCGN4ThyaXV/G59e', NULL),
(9, 'asd@gmail.com', '$2y$12$iPzEgmdW/Vk6eKv4vjXeKO5H6wUOgqAWgBRpbfIwv5gcvpOsJ7HDW', NULL),
(10, 'asdgmailc@xz.xcom', '$2y$12$66ahUWnDHgwP2ozYlgSdNeqOiQFGWVUuLRksDX31O9jU2PYD31mvm', NULL),
(11, 'asas@gsm.com', '$2y$12$pxYTfZKv4zLXKeAzFW7WrOz.ffK2P0sVblF4HylY0DXW8y6OeqKq6', NULL),
(12, 'AASA@AMm.X0M', '$2y$12$L97CYaVvsnYanGIscqUDGO6zRzKDDe2MCx6yyfJ/k6lQoqG662Sey', NULL),
(13, 'darsh15@gmail.com', '$2y$12$/iZi0RQvtv43phZNi0Gu4.zgePP/dI.zOoOFjWV48Zet5OdSGxgIu', NULL),
(14, 'dars@gm.om', '$2y$12$AJR9sdZKVlB383t0COwzkO3XaacUuhPtyEMuA7OZ/vWklq8zZO9yK', NULL),
(15, 'D@fmal.xom', '$2y$12$ShwTOAFe5c59sqHouANf1uOElmnfTV.9bVzYfz.Yp8WRovVp2sdUi', NULL),
(16, 'asdg@gmail.xom', '$2y$12$K0zTYauTzojBKBkgiDbAN.S2KAWqOdtAxyDvVLvdViGhBLnIXQ0H6', NULL),
(17, 'darsh2115@gmail.com', '$2y$12$KVgWwS1U3WPWnPoafT72p.P2FRwkiCvpWU0Pcdg5DZC7xc0hSOYnG', 'This is my secret page! Ain\'t this cool?\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n'),
(18, 'harsh@gmail.com', '$2y$12$bff5sNP1XTkWYgUpqcAaje69gifdlnOLzbd4SIM5eySlnL9wjCvAa', NULL),
(19, 'asas@ajsajs.xom', '$2y$12$vf/3aYazQqLj6caKEkleC.KQi/6RBpoUNaeipbEl9xa/jIU/SBHW.', NULL),
(20, 'asds@gmail.com', '$2y$12$dTfS4H1scuVSs9ebMiLDseu/E3OlOzDkaFEv7prl2GDkpHIMgem8u', 'zs');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
