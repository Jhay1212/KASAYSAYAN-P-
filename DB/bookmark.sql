-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 04:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasaysayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `title`, `user_id`, `url`) VALUES
(1, 'FILIPINO NATIONALISM 1872- 1913', 1, ''),
(2, 'EARLY PHILIPPINES PERIOD(22,000 BCE -1521 AD)', 1, ''),
(3, 'EARLY PHILIPPINES PERIOD(22,000 BCE -1521 AD)', 1, ''),
(22, 'SPANISH COLONIZATION', 1, ''),
(23, 'The Establishment of Spanish Rule (1565–1600)', 1, ''),
(24, 'PRE COLONIAL PERIOD', 1, ''),
(25, 'PRE COLONIAL PERIOD', 1, ''),
(26, 'Pre-Colonial Legal Systems', 1, ''),
(27, 'Pre-Colonial Legal Systems', 1, ''),
(28, 'Cultural and Religious Life', 1, ''),
(29, 'Cultural and Religious Life', 1, ''),
(30, 'Cultural and Religious Life', 1, ''),
(31, 'PRE COLONIAL PERIOD', 1, ''),
(32, 'PRE COLONIAL PERIOD', 1, ''),
(33, 'SPANISH COLONIZATION', 1, ''),
(34, 'The Establishment of Spanish Rule (1565–1600)', 1, ''),
(35, 'Societal Changes and Economic Structures (1600–1800)', 1, ''),
(36, 'Cultural and Intellectual Developments (1800–1896)', 1, ''),
(37, 'Francisco Balagtas and Florante at Laura', 1, ''),
(38, 'José Rizal and the Rise of Nationalism', 1, ''),
(39, 'The Rise of Nationalism (1892–1896)', 1, ''),
(40, 'The End of Spanish Rule (1898)', 1, ''),
(41, 'American Colonialism Period   1898-1946', 1, ''),
(42, 'Prelude to war', 1, ''),
(43, 'Battle of Manila Bay', 1, ''),
(44, 'Aguinaldo’s Return', 1, ''),
(45, 'War of America and Filipino', 1, ''),
(46, 'Insular Government', 1, ''),
(47, 'Philippine Commonwealth', 1, ''),
(48, 'Japanese Occupation Period1942-1945', 1, ''),
(49, 'Bataan Death March', 1, ''),
(50, 'Occupation', 1, ''),
(51, 'End of Occupation', 1, ''),
(52, 'Post Independence and Early Republic', 1, ''),
(53, 'The Post-Colonial Struggle: A Nation in Chains of its Past', 1, ''),
(54, 'Economic Dependence and Neocolonialism', 1, ''),
(55, 'Political Power and the Entrenched Elite', 1, ''),
(56, 'The Struggle for True Democracy', 1, ''),
(57, 'Martial Law: The Death and Rebirth of Democracy', 1, ''),
(58, 'Continuing the Struggle for National Identity', 1, ''),
(59, 'The Continuing Quest for Sovereignty and Identity', 1, ''),
(60, 'Period of Philippine Republic   1946 - Present', 1, ''),
(61, 'The Roxas Administration (1946–1948)', 1, ''),
(62, 'The Quirino Administration (1948–1953)', 1, ''),
(63, 'Cultural and Religious Life', 1, ''),
(64, 'The Establishment of Spanish Rule (1565–1600)', 1, ''),
(65, 'Battle of Manila Bay', 1, ''),
(66, 'Barangay System and Political Organization', 1, ''),
(67, 'Barangay System and Political Organization', 2, ''),
(69, 'The Establishment of Spanish Rule (1565–1600)', 2, ''),
(70, 'The Establishment of Spanish Rule (1565–1600)', 2, ''),
(71, 'Societal Changes and Economic Structures (1600–1800)', 2, ''),
(72, 'Societal Changes and Economic Structures (1600–1800)', 2, ''),
(73, 'The Rise of Nationalism (1892–1896)', 2, ''),
(74, 'The Post-Colonial Struggle: A Nation in Chains of its Past', 2, ''),
(75, 'The Post-Colonial Struggle: A Nation in Chains of its Past', 2, ''),
(76, 'Economic Dependence and Neocolonialism', 2, ''),
(77, 'Economic Dependence and Neocolonialism', 2, ''),
(78, 'The Roxas Administration (1946–1948)', 2, ''),
(79, 'The Roxas Administration (1946–1948)', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
