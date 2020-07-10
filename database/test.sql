-- phpMyAdmin SQL Dump
-- version 5.0.0-alpha1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 06:11 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Status` enum('publish','draft') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'publish',
  `Created` date NOT NULL,
  `Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `Title`, `Content`, `Status`, `Created`, `Updated`) VALUES
(1, 'PC acer', 'Duis tortor justo, posuere vitae tristique in, tempor vel augue. Vestibulum tincidunt tortor at est eleifend ullamcorper. Donec at elit elit. Ut hendrerit elit erat, non scelerisque libero euismod sed. Suspendisse imperdiet varius elit, sit amet gravida ipsum volutpat at. Sed ultrices ligula in facilisis accumsan. Nunc egestas justo ut posuere sodales. Suspendisse eget tempus nibh, vitae egestas ligula. Maecenas elementum justo vitae tincidunt vestibulum.', 'publish', '2020-07-10', '2020-07-10'),
(2, 'PC HP', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'publish', '2020-07-10', '2020-07-10'),
(4, 'Smartphone', 'Suspendisse semper viverra nulla, id varius lectus blandit quis. Vestibulum vitae sodales nisi. Pellentesque aliquam in nisl at dapibus. Cras vitae odio consequat libero vehicula aliquam sed sit amet turpis. In volutpat pharetra urna at posuere. Morbi id tortor nec nisl tincidunt sodales non ut sem. Phasellus molestie dui vitae tempor mollis. Pellentesque pellentesque ligula ac dolor efficitur facilisis. Fusce sapien erat, fringilla et iaculis id, volutpat ut nisl. Suspendisse non tellus quam. Nulla at diam eget felis posuere malesuada. Vivamus pharetra imperdiet velit porta fringilla. Ut eleifend malesuada nibh, at pharetra felis finibus quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'publish', '2020-07-10', '2020-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

