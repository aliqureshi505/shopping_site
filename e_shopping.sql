-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 02:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `title`, `description`, `price`, `image`) VALUES
(1, 'dllvml', 'lsdmvlm', 'ldflbm', '58af10fc0b557'),
(2, '', '', '', ''),
(3, 'lsdncn', 'nn', 'ni', 'nn'),
(4, 'lklnl', 'nknl', 'nklnl', ';lmo'),
(5, 'lm', 'lnnl', ',,', 'nn'),
(6, 'nnn', 'nnn', 'nn', 'nn'),
(7, 'nnn', 'nn', 'nnn', 'nn'),
(8, 'nnnn', 'in.in', 'ygu', 'uin'),
(9, 'ui,iun,', 'ubibi', 'u.ikni', 'ikunin'),
(10, 'bbyug', 'ubui', 'ubub', 'bbui'),
(11, 'ihiuh', 'ihiuhiuh', 'iuiubi', 'iub'),
(12, 'ibiblml', 'knhub', '.bj', 'bkj.'),
(13, '.kbj', 'kb', 'kbjjbk', 'kbj'),
(14, 'kbjb', 'kjbk', 'kb.', 'kjb.b'),
(15, 'jkbkbkj', 'kbj', 'kbkj', 'kbkj'),
(16, 'sax', 'wed`', 'w`', '58b464dad974d'),
(18, 'skdcn', 'knkn', 'nsdcn', '58b4765101798'),
(19, 'sdjkj', 'nlknsc', 'kjsckn', '58b4765ce0042'),
(20, 'snckj', 'nksnckn', 'nskcnkn', '58b4766b097cf'),
(21, 'sdjckjnk', 'nknsdcnk', 'kncsnk', '58b476758f72c'),
(22, 'kdnfv', 'nldnl', 'nksndk', '58b4768f6d912'),
(24, 'd jbcjsb', 'bkndk', 'knkscjjkb', '58b476abeb950'),
(25, 'sdnkn', 'nsdlvkn', 'ksndlkn', '58b4770c5e1d2'),
(26, 'dsfmkl', 'nlksdn', 'lkdnln', '58b47774f181a');

-- --------------------------------------------------------

--
-- Table structure for table `mens_fashion`
--

CREATE TABLE `mens_fashion` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mens_fashion`
--

INSERT INTO `mens_fashion` (`id`, `title`, `description`, `price`, `image`) VALUES
(58, 'sdnk', 'lkn', 'nksn', '58b4749ba8d12'),
(59, 'dfnkn', 'nk', 'nn', '58b474a3ec382'),
(60, 'sdnkn', 'kjb', 'kjkb', '58b474acb4001'),
(61, 'dfnkjnk', 'sdvnkj', 'kjnkb', '58b474b718fd7'),
(62, 'sbjbj', 'ds', 'kbsb', '58b474c01dd92'),
(63, 'sndkj', 'jjjkdbjk', 'bsbdjb', '58b474cc458a5'),
(64, 'snfbswb', 'kjbskbd', 'ugsug', '58b474d8bfd27'),
(65, '$148', 'nl', 'Humble Coat Creek', '58b474ee1f200');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `title`, `description`, `price`, `image`) VALUES
(1, 'sdkkn', 'lkmsdk', 'mkdvlk', '58af11134d06d'),
(2, 'sdkkn', 'lkmsdk', 'mkdvlk', '58af11322559e');

-- --------------------------------------------------------

--
-- Table structure for table `summer_cothes`
--

CREATE TABLE `summer_cothes` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summer_cothes`
--

INSERT INTO `summer_cothes` (`id`, `title`, `description`, `price`, `image`) VALUES
(1, 'dfvmk', 'jsidvj', 'isdnvi', 'mm;o');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `admin` varchar(30) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `winter_clothes`
--

CREATE TABLE `winter_clothes` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winter_clothes`
--

INSERT INTO `winter_clothes` (`id`, `title`, `description`, `price`, `image`) VALUES
(1, 'dsvmkl', 'lsmdvl', 'mmdfmv', '58af10e16fd34'),
(2, 'wd', 'sd', 'c', '58b464c2b1789');

-- --------------------------------------------------------

--
-- Table structure for table `womens_fashion`
--

CREATE TABLE `womens_fashion` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womens_fashion`
--

INSERT INTO `womens_fashion` (`id`, `title`, `description`, `price`, `image`) VALUES
(9, 'sdc', 'nl', 'nals', '58b473fbf289f'),
(10, 'sdcmlk', 'lnls', 'llsd', '58b47405d2148'),
(11, 'sdncn', 'lknsldcn', 'lnslcn', '58b474192f67d'),
(12, 'sdcn', 'ncskn', 'nknsn', '58b4742b917eb'),
(13, 'sdnckjn', 'knksn', 'nknskn', '58b474349b879'),
(14, 'd sjdnkn', 'l', 'nksnn', '58b4743e9aee8'),
(15, 'skdkcnk', 'nk', 'nksnk', '58b4744744f88'),
(16, 'kkdnr', 'k', 'nn', '58b47467c0689');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mens_fashion`
--
ALTER TABLE `mens_fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summer_cothes`
--
ALTER TABLE `summer_cothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winter_clothes`
--
ALTER TABLE `winter_clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womens_fashion`
--
ALTER TABLE `womens_fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `mens_fashion`
--
ALTER TABLE `mens_fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `summer_cothes`
--
ALTER TABLE `summer_cothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `winter_clothes`
--
ALTER TABLE `winter_clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `womens_fashion`
--
ALTER TABLE `womens_fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
