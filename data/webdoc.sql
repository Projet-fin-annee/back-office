-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2020 at 01:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";

--
-- Database: `webdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries`
(
  `id` int
(100) NOT NULL,
  `country` varchar
(15) NOT NULL,
  `title` varchar
(150) DEFAULT NULL,
  `text` text,
  `image` varchar
(1000) DEFAULT NULL,
  `video` varchar
(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`
id`,
`country
`, `title`, `text`, `image`, `video`) VALUES
(15, 'eee', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `definition`
--

CREATE TABLE `definition`
(
  `id` int
(255) NOT NULL,
  `word` varchar
(100) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `definition`
--

INSERT INTO `definition` (`
id`,
`word
`, `text`) VALUES
(1, '', ''),
(2, 'ff', 'ff'),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, NULL, NULL),
(9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
  `id` int
(255) NOT NULL,
  `email` varchar
(100) NOT NULL,
  `password` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`
id`,
`email
`, `password`) VALUES
(1, 'tania.abitbol@hetic.net', 'webdoc2020xmp'),
(2, 'nathan.stampfli@hetic.net', 'webdoc2020xmp'),
(3, 'maeva.wolff@hetic.net', 'webdoc2020xmp'),
(4, 'lina.blidi@hetic.net', 'webdoc2020xmp'),
(5, 'bastien.calou@gmail.com', 'webdoc2020xmp'),
(6, 'aymericmayeux@gmail.com\r\n', 'webdoc2020xmp'),
(7, 'laura.fraysse@hetic.net', 'webdoc2020xmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
ADD PRIMARY KEY
(`id`),
ADD UNIQUE KEY `id`
(`id`),
ADD UNIQUE KEY `country`
(`country`),
ADD UNIQUE KEY `title`
(`title`);

--
-- Indexes for table `definition`
--
ALTER TABLE `definition`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int
(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `definition`
--
ALTER TABLE `definition`
  MODIFY `id` int
(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int
(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
