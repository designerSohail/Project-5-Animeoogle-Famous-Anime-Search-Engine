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
-- Table structure for table `animeDetails`
--

CREATE TABLE `animeDetails` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(100) NOT NULL,
  `ratings` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animeDetails`
--

INSERT INTO `animeDetails` (`id`, `title`, `description`, `genre`, `ratings`) VALUES
(1, 'One Piece', 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha\'s Weekly Shonen Jump magazine since July 22, 1997, with the chapters collected into 86 tankobon volumes to date.', 'Action Fiction, Adventure Fiction, Fantasy', 5),
(2, 'Naruto', 'Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, an adolescent ninja who searches for recognition and dreams of becoming the Hokage, the leader of his village.', 'Action Fiction, Fantasy', 4.6),
(3, 'Tokyo Ghoul', 'Tokyo Ghoul is a Japanese dark fantasy manga series by Sui Ishida. It was serialized in Shueisha\'s seinen manga magazine Weekly Young Jump between September 2011 and September 2014 and has been collected.', 'Dark Fantasy', 4.5),
(4, 'Fairy Tail', 'Fairy Tail is a Japanese manga series written and illustrated by Hiro Mashima. It was serialized in Weekly Shonen Magazine from August 2, 2006 to July 26, 2017, with the individual chapters collected.', 'Action Fiction, Adventure Fiction, Fantasy', 4.7),
(5, 'Dragon Ball Super', 'Dragon Ball Super is an ongoing Japanese anime television series produced by Toei Animation that began airing on July 5, 2015.', 'Action, Adventure, Shounen', 4.8),
(6, 'Dragon Ball Z', '\"Dragon Ball Z\" follows the adventures of Goku who, along with the Z Warriors, defends the Earth against evil. The action adventures are entertaining and reinforce the concept of good versus evil. \"Dragon Ball Z\" teaches valuable character virtues such as teamwork, loyalty, and trustworthiness.', 'Action, Adventure, Comedy, Fantasy', 4.8),
(7, 'Sword Art Online', 'Sword Art Online is a Japanese light novel series written by Reki Kawahara and illustrated by abec. The series takes place in the near future and focuses on various virtual reality MMORPG worlds.', 'Action Fiction, Adventure, Science Fiction', 4),
(8, 'One Punch Man', 'Superheroes often have exciting superpowers that help them defeat the evil villains that they battle, but that\'s not necessarily the case for Saitama. Although he\'s a superhuman, his power isn\'t as exciting as X-ray vision or invincibility -- instead, he has the ability to defeat any opponent with a single punch, and this power has both pros and cons. The biggest advantage is that it makes it easy for him to defeat enemies -- which is essential because he lives in an alternate Japan that is constantly under attack by monsters -- but because it doesn\'t take long to throw a punch, easily vanquishing his foes leads to constant boredom.', 'Action Fiction, Superhero Fiction, Parody', 4.3),
(9, 'Cowboy Bebop', 'Bounty hunters search for criminals.', 'Action, Adventure, Science Fiction', 4.7),
(10, 'Bleach', 'Ichigo Kurosaki never asked for the ability to see ghosts -- he was born with the gift. When his family is attacked by a Hollow -- a malevolent lost soul -- Ichigo becomes a Soul Reaper, dedicating his life to protecting the innocent and helping the tortured spirits themselves find peace.', 'Action Fiction, Adventure Fiction, Supernatural Fiction', 4.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animeDetails`
--
ALTER TABLE `animeDetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animeDetails`
--
ALTER TABLE `animeDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
