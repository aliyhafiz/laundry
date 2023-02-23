-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 12:35 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quchekin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
`id` int(9) NOT NULL,
  `title` text NOT NULL,
  `footer` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tentang` text NOT NULL,
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `logo` varchar(225) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `footer`, `alamat`, `telp`, `email`, `tentang`, `fb`, `twitter`, `ig`, `youtube`, `logo`) VALUES
(1, 'Quchekin Laundry - Cepat, Bersih dan Wangi', 'Quchekin Laundry', 'Bandar Lampung', '085769938995', 'info@quchekin.com', 'Quchekin Laundry adalah salah satu jasa laundry yang cepat wangi dan bersih. Siap antar jemput di daerah Kota Bandar Lampung.', '', '', 'http://www.instagram.com/quchekin.laundry', '', 'logo_quchekin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
