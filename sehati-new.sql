-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 04:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehati`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aemail` varchar(255) NOT NULL,
  `apassword` varchar(255) DEFAULT NULL,
  `aname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aemail`, `apassword`, `aname`) VALUES
('admin@sehati.ilkomerz.biz.id', '123', 'Admin Sehati');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoid` int(11) NOT NULL,
  `pid` int(10) DEFAULT NULL,
  `apponum` int(3) DEFAULT NULL,
  `scheduleid` int(10) DEFAULT NULL,
  `appodate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoid`, `pid`, `apponum`, `scheduleid`, `appodate`) VALUES
(1, 1, 1, 1, '2022-06-03'),
(2, 3, 1, 9, '2024-04-24'),
(3, 3, 1, 10, '2024-04-24'),
(5, 4, 1, 12, '2024-04-25'),
(6, 5, 2, 12, '2024-04-25'),
(7, 6, 1, 13, '2024-05-20'),
(8, 6, 0, 0, '0000-00-00'),
(9, 6, 0, 0, NULL),
(10, 6, 0, 0, NULL),
(11, 6, 0, 0, NULL),
(12, 6, NULL, 0, '0000-00-00'),
(13, 6, NULL, 0, '0000-00-00'),
(14, 6, NULL, 0, '2024-05-20'),
(15, 6, NULL, 0, '2024-05-20'),
(16, 6, NULL, 17, '2024-05-25'),
(17, 7, NULL, 17, '2024-05-25'),
(19, 4, NULL, 17, '2024-05-25'),
(23, 14, NULL, 19, '2024-06-01'),
(25, 8, NULL, 19, '2024-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(11) NOT NULL,
  `docemail` varchar(255) DEFAULT NULL,
  `docname` varchar(255) DEFAULT NULL,
  `docpassword` varchar(255) DEFAULT NULL,
  `docnic` varchar(15) DEFAULT NULL,
  `doctel` varchar(15) DEFAULT NULL,
  `specialties` int(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `docemail`, `docname`, `docpassword`, `docnic`, `doctel`, `specialties`, `status`) VALUES
(1, 'doctor@sehati.ilkomerz.biz.id', 'Test Doctor', '123', '000000000', '0110000000', 2, 0),
(2, 'herdiawan@sehati.ilkomerz.biz.id', 'Dr. Herdiawan, S.Pk.', '123', '54017461', '0717468571', 1, 1),
(3, 'budiman@sehati.ilkomerz.biz.id', 'Dr. Budiman H, S.Pk.', '321', '321556577673', '083636463634', 3, 1),
(5, 'cantikacahya@sehati.ilkomerz.biz.id', 'dr. Cantika Cahya, SpKK', '123', '31372437474', '085474628695', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pemail` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `ppassword` varchar(255) DEFAULT NULL,
  `paddress` varchar(255) DEFAULT NULL,
  `pnic` varchar(15) DEFAULT NULL,
  `pdob` date DEFAULT NULL,
  `ptel` varchar(15) DEFAULT NULL,
  `oauth_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pemail`, `pname`, `ppassword`, `paddress`, `pnic`, `pdob`, `ptel`, `oauth_id`) VALUES
(1, 'patient@gmail.com', 'Test Patient', '123', 'dimana aja', '0000000000', '2000-01-01', '0120000000', ''),
(2, 'ilhamreynaldi@gmail.com', 'Ilham Reynaldi', '123', 'dihatimu', '0110000000', '2002-06-03', '0700000000', ''),
(3, 'kotop@halo.com', 'kotop halo', '123', 'bogor', '1223345453', '2003-01-01', '0788428483', ''),
(4, 'raka@raka.com', 'raka raka', '123', 'raka@raka.com', '123335363', '2000-04-23', '0766346347', ''),
(5, 'bella@lala.com', 'bella lala', '123', 'bogor', '1235242', '2000-05-01', '0728161483', ''),
(6, 'nichi@tata.com', 'tata nichita', '123', 'bogor', '31372437474', '2000-06-23', '0736463626', ''),
(7, 'akupasien@gmail.com', 'aku pasien', '123', 'jalan bogor raya', '31372437474', '2008-08-23', '0736663633', ''),
(8, 'sayapasien@gmail.com', 'saya pasien', '123', 'bogor', '3254353543535', '2014-07-02', '0746546566', ''),
(12, 'made16jan03@gmail.com', 'Made Althaaf Naufal Gusendra', NULL, NULL, NULL, NULL, NULL, '115591794680015438719'),
(13, 'kotop.met@gmail.com', 'Kotop', NULL, NULL, NULL, NULL, NULL, '115683785477594850217'),
(14, 'skyeline233@gmail.com', 'skye', NULL, NULL, NULL, NULL, NULL, '103124027868872070936');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleid` int(11) NOT NULL,
  `docid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` time DEFAULT NULL,
  `nop` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `docid`, `title`, `scheduledate`, `scheduletime`, `nop`) VALUES
(10, '1', 'baru', '2024-04-30', '20:26:00', 5),
(17, '2', 'Mual', '2024-05-25', '10:00:00', 0),
(16, '', '', '0000-00-00', '00:00:00', 0),
(15, '3', 'Pilek', '2024-05-23', '10:00:00', 0),
(14, '3', 'Pilek', '2024-05-31', '14:16:00', 0),
(13, '3', 'Pilek', '2024-05-23', '10:00:00', 1),
(9, '2', 'tes lagi', '2024-04-29', '09:00:00', 5),
(11, '2', 'SAKIT PERUT', '2024-04-27', '09:45:00', 5),
(12, '2', 'PUSING', '2024-04-29', '10:08:00', 5),
(18, '2', 'sakitperut', '2024-05-24', '13:36:00', 0),
(19, '5', 'Kulit Gatal', '2024-06-03', '13:36:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(2) NOT NULL,
  `sname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `sname`) VALUES
(1, 'Gastroenterologi'),
(2, 'Kesehatan mata'),
(3, 'THT'),
(4, 'Saraf'),
(5, 'Kesehatan mulut dan gigi'),
(6, 'Kesehatan anak'),
(7, 'Obstetri dan ginekologi'),
(8, 'Kulit'),
(9, 'Psikologi'),
(10, 'Ortopedi'),
(11, 'Urologi'),
(12, 'Umum'),
(13, 'Penyakit dalam'),
(14, 'Patologi klinik'),
(15, 'Pulmonologi');

-- --------------------------------------------------------

--
-- Table structure for table `webuser`
--

CREATE TABLE `webuser` (
  `email` varchar(255) NOT NULL,
  `usertype` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `webuser`
--

INSERT INTO `webuser` (`email`, `usertype`) VALUES
('admin@sehati.ilkomerz.biz.id', 'a'),
('doctor@sehati.ilkomerz.biz.id', 'd'),
('patient@gmail.com', 'p'),
('ilhamreynaldi@gmail.com', 'p'),
('herdiawan@sehati.ilkomerz.biz.id', 'd'),
('kotop@halo.com', 'p'),
('budiman@sehati.ilkomerz.biz.id', 'd'),
('raka@raka.com', 'p'),
('bella@lala.com', 'p'),
('nichi@tata.com', 'p'),
('akupasien@gmail.com', 'p'),
('cantikacahya@sehati.ilkomerz.biz.id', 'd'),
('sayapasien@gmail.com', 'p'),
('made16jan03@gmail.com', 'p'),
('kotop.met@gmail.com', 'p'),
('skyeline233@gmail.com', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aemail`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `scheduleid` (`scheduleid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`),
  ADD KEY `specialties` (`specialties`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webuser`
--
ALTER TABLE `webuser`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
