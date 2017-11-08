-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 04:59 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Animeoogle`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `src`, `link`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/en/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg', ''),
(2, 'https://orig00.deviantart.net/4816/f/2008/041/9/b/naruto_volume_41_cover_by_kuumi.jpg', ''),
(3, 'https://vignette2.wikia.nocookie.net/tokyoghoul/images/6/6a/Volume_01.jpg/revision/latest?cb=20161203075330', ''),
(4, 'https://s-media-cache-ak0.pinimg.com/originals/ea/67/49/ea67496db38c1828125a69ab52866751.jpg', ''),
(5, 'http://www.absoluteanime.com/dragon_ball/index-super.jpg', ''),
(6, 'http://www.mobygames.com/images/covers/l/116457-dragon-ball-z-super-butoden-2-snes-front-cover.jpg', ''),
(7, 'http://vignette1.wikia.nocookie.net/swordartonline/images/3/33/YenPress_SAO_Vol_2_Cover.png/revision/latest?cb=20140613080315', ''),
(8, 'https://vignette.wikia.nocookie.net/onepunchman/images/8/82/Volume_8.png/revision/latest?cb=20150423130055', ''),
(9, 'http://vignette2.wikia.nocookie.net/toonami/images/f/fd/Cowboy-bebop-themovie.jpg/revision/latest?cb=20130523052741', ''),
(10, 'http://img3.wikia.nocookie.net/__cb20141201185107/bleach/en/images/3/3e/MangaVolume24Cover.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
