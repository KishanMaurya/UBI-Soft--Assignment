-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 06:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubisoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `description`, `image`) VALUES
(1, 'American Express', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-irina-iriser-1647976.jpg'),
(2, 'React Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-simon-robben-614810.jpg'),
(3, 'Node js Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-nitin-khajotia-1516680.jpg'),
(4, 'React Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-pixabay-532220.jpg'),
(5, 'DBA Develoepr', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-samad-ismayilov-1270076.jpg'),
(6, 'Software Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-pixabay-220453.jpg'),
(7, 'AI-ML Engineer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-italo-melo-2379004.jpg'),
(8, 'Machine Learning Eng', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-wallace-chuck-2659177.jpg'),
(9, 'Algorithms Master', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-nitin-khajotia-1516680.jpg'),
(10, 'Javascript Master', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-pixabay-220453.jpg'),
(11, 'Mystery', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-irina-iriser-1647976.jpg'),
(12, 'PHP Mystery', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-martin-péchy-594610.jpg'),
(13, 'Microsoft Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-simon-robben-614810.jpg'),
(14, 'Indin Army', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', '22289d89c8934a520a59681877ce6249--logo-free-indian-army.jpg'),
(15, 'America', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'download (2).png'),
(16, 'DBA Develoepr', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-buro-millennial-1438081.jpg'),
(17, 'UI/UX Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-pixabay-220453.jpg'),
(18, 'Node js Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-mihai-stefan-photography-1384219.jpg'),
(19, 'React Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-samad-ismayilov-1270076.jpg'),
(20, 'Web Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-photomix-company-887751.jpg'),
(21, 'Content Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-pixabay-220453.jpg'),
(22, 'Full Stack Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pp.jpg'),
(23, 'Mern Stack Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-simon-robben-614810.jpg'),
(24, 'Associate Software Engg', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-buro-millennial-1438081.jpg'),
(25, 'Spark Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-torsten-dettlaff-193004.jpg'),
(26, 'BI-Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-irina-iriser-1647976.jpg'),
(27, 'DB Developer', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pexels-italo-melo-2379004.jpg'),
(28, 'Mern Stack Develoepr', 'The American Express Company is an American multinational financial services corporation headquartered at 200 Vesey Street in New York City. The company was founded in 1850', 'pp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
