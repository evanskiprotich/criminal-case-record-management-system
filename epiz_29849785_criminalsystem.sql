-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 09:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `criminalsystem`
--
-- --------------------------------------------------------
--
-- Table structure for table `court`
--

CREATE TABLE `court` (
 `id` int(11) NOT NULL,
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--
INSERT INTO `court` (`id`, `name`, `description`) VALUES
(18, 'Supreme Court ( Nairobi )', 'supreme court '),
(19, 'High Court ( Nairobi )', 'high court'),
(20, 'State Court ( Nairobi )', 'state'),
(21, 'Court of Appeal ( Nairobi Cbd )', 'appeal'),
(22, 'Court for Verdict in Nairobi', ''),
(23, 'Milimani Law Courts',''),
(24, 'Makadara Chief Magistrate Courts',''),
(25, 'City Hall Resident Magistrate`s Court',''),
(26, 'High Court of Nyeri', ''),
(27, 'Nyeri Chief Magistrate`s Court',''),
(28, 'Karatina Sr Magistrate`s Court',''),
(29, 'Thika Chief Magistrate`s Court',''),
(30, 'Murang`a Principal Magistrate`s Court',''),
(31, 'Kigumo Resident Magistrate`s Court',''),
(32, 'Kerugoya Sr Magistrate`s Court',''),
(33, 'Nakuru High Court',''),
(34, 'Nakuru Chief Magistrate Court',''),
(35, 'Naivasha Principal Magistrate`s Court',''),
(36, 'Kericho High Court',''),
(37, 'Bomet Resident Magistrate`s Court',''),
(38, 'Kapsabet Sr Magistrate`s Court',''),
(39, 'Eldoret High Court',''),
(40, 'Iten Resident Magistrate`s Court',''),
(41, 'Kisumu High Court',''),
(42, 'Kakamega Chief Magistrate`s Court','');

-- --------------------------------------------------------
--
-- Table structure for table `courttype`
--
CREATE TABLE `courttype` (
 `id` int(11) NOT NULL,
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `crime`
--
CREATE TABLE `crime` (
 `id` int(11) NOT NULL,
 `caseno` varchar(250) NOT NULL,
 `punishment` varchar(250) DEFAULT NULL,
 `criminal_ID` int(11) DEFAULT NULL,
 `crimeType` varchar(250) DEFAULT NULL,
 `crimeCategory` varchar(250) DEFAULT NULL,
 `prison` varchar(250) DEFAULT NULL,
 `court` varchar(250) DEFAULT NULL,
 `date` date DEFAULT NULL,
 `place` varchar(250) DEFAULT NULL,
 `description` longtext,
 `police_Id` int(11) DEFAULT NULL,
 `image` varchar(250) DEFAULT NULL,
 `uploads_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `crime`
--

INSERT INTO `crime` (`id`, `caseno`, `punishment`, `criminal_ID`, `crimeType`, `crimeCategory`, `prison`, `court`, `date`, 
`place`, `description`, `police_Id`, `image`, `uploads_on`) VALUES
(37, '122/122/01', '1year 5 months', 26, ' murder', 'Organized Crime', 'Kamiti Maximum Prison', 'Milimani Law Court', '2021-02-12', 
'nairobi, wadada ', 'he killed someone in wadada nairobi street.', 14, 'uploads/crime/images (2).jpg', '2021-
03-27 17:34:43'),
(38, '122/122/02', NULL, 27, 'Aggravated ', 'Personal Crime ', 'Embu Main Prison', 'High Court of Nyeri', '2020-05-05', 'taleh, hodan , 
Nyeri, kenya', 'he aggravated someone.', 15, 'uploads/crime/images (3).jpg', '2021-03-27 17:35:54'),
(39, '122/122/03', '1year 5 months', 28, ' Robbery', 'Personal Crime ', 'Nairobi West prison', 'High Court of Nyeri ', '2020-02-18', 
'thika, kiambu', 'he robbed a super market.', 16, 'uploads/crime/image2.jpg', '2019-03-27 17:37:23'),
(40, '122/122/04', NULL, 29, 'Theft', 'Personal Crime ', 'Kericho main prison', 'Kericho High Court', '2021-02-20', 'kericho, town , kenya', '', 17, 'uploads/crime/images.jpg', '2021-03-27 17:38:20'),
(41, '122/122/05', '1year 5 months', 37, ' murder', 'Organized Crime', 'Kamiti Medium Prison', 'High Court', '2020-05-05', 'thika, nairobi , kenya', '', 18, 'uploads/crime/image3.jpg', '2021-03-27 17:40:46'),
(42, '122/122/06', NULL, 36, ' murder', 'Personal Crime ', 'Nyeri medium prison', 'Kerugoya Sr Magistrate`s Court', '2021-02-02', 'kerugoya', 'he killed 
someone in Kerugoya.', 22, 'uploads/crime/18125678_101.jpg', '2021-03-27 17:42:07'),
(43, '122/122/07', '2 years ( start 2019-01-01 end-date 2021-12-31)', 37, 'Burglary', 'Organized Crime', 'Thika main prison', 
'Nyeri High court', '2012-02-18', 'nyeri', '', 18, 'uploads/crime/download.jpg', '2021-03-27 20:24:51'),
(44, '122/122/010', '1 year (start 2019-3-20 End 2020-3-19)', 35, 'Sexual orientation', 'Personal Crime ', 'Kerugoya prison', 
'Kerugoya Sr Magistrate`s Court', '2021-02-01', 'hamar, km4', '', 22, 'uploads/crime/depositphotos_182072190-stock-photo-theif-committing-robbery-attack-young.jpg', '2021-03-27 20:26:35'),
(45, '122/122/012', NULL, 37, 'Gender identity', 'Personal Crime ', 'Tambach prison', 'Iten Resident Magistrate`s Court', '2020-05-05', 'iten', '', 23, 'uploads/crime/man-in-black-mask-and-black-cloth-holding-flashlight-and-gun-isolated-EY7D0E.jpg', '2021-03-27 20:27:55'),
(47, '122/122/020', '2 years ( start 2019-01-01 end-date 2021-12-31)', 28, ' murder', 'Personal Crime ', '', 'Kisumu High Court', '2019-02-18', 'kisumu', '', 14, 'uploads/crime/police-steel-handcuffs-arrested-professional-officer-has-to-be-very-strong-arresting-113904222.jpg', '2021-03-27 20:59:56'),
(48, '122/122/022', NULL, 36, 'Burglary', 'Personal Crime ', '', 'Eldoret High Court ', '2021-02-21', 'eldoret, town, kenya, eldoret', '', 17, 'uploads/crime/18125678_101.jpg', '2021-03-27 21:05:12'),
(49, '122/122/021', NULL, 32, ' Robbery', 'Personal Crime ', 'Machakos Main Prison', 'Kerugoya Sr Magistrate`s Court', '2021-03-19', 'taleh, hodan , 
kerugoya, kenya', '', 14, 'uploads/crime/download.jpg', '2021-03-27 21:25:09');

-- --------------------------------------------------------
--
-- Table structure for table `crimecategory`
--

CREATE TABLE `crimecategory` (
 `id` int(11) NOT NULL,
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `crimecategory`
--
INSERT INTO `crimecategory` (`id`, `name`, `description`) VALUES
(5, 'Organized Crime', 'one organized'),
(6, 'Personal Crime ', 'One alone');
-- --------------------------------------------------------
--
-- Table structure for table `crimetype`
--

CREATE TABLE `crimetype` (
 `id` int(11) NOT NULL,
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `crimetype`
--

INSERT INTO `crimetype` (`id`, `name`, `description`) VALUES
(7, ' murder', 'killing'),
(8, 'Aggravated ', 'Xumeeyay '),
(9, 'Assault', 'discriminated against '),
(10, ' Robbery', 'Robbery'),
(11, 'Burglary', 'illegal entry of a building'),
(12, 'Theft', 'dishonestly taking something that belongs to someone'),
(13, 'Arson', 'deliberately setting fire to property'),
(14, 'Sexual orientation', 'enduring pattern of romantic or sexual attraction'),
(15, 'Gender identity', 'personal sense of having a particular gender'),
(16, 'Religion', 'denomination');
-- --------------------------------------------------------
--

-- Table structure for table `criminal`
--
CREATE TABLE `criminal` (
 `id` int(11) NOT NULL,
 `fName` varchar(250) NOT NULL,
 `lName` varchar(250) NOT NULL,
 `height` varchar(50) DEFAULT NULL,
 `weight` varchar(50) DEFAULT NULL,
 `eyeColor` varchar(100) DEFAULT NULL,
 `address` varchar(250) DEFAULT NULL,
 `town` varchar(250) DEFAULT NULL,
 `county` varchar(250) DEFAULT NULL,
 `phoneNumber` varchar(50) DEFAULT NULL,
 `dateOFbirth` date DEFAULT NULL,
 `email` varchar(200) DEFAULT NULL,
 `image` varchar(250) DEFAULT NULL,
 `uploads_on` datetime NOT NULL,
 `fathersName` varchar(250) NOT NULL,
 `mothersName` varchar(250) NOT NULL,
 `contactno` varchar(20) NOT NULL,
 `symbol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal`(`id`, `fName`, `lName`, `height`, `weight`, `eyeColor`, `address`, `town`, `county`, `phoneNumber`, `dateOFbirth`, `email`, `image`, `uploads_on`, `fathersName`, `mothersName`, `contactno`, `symbol`) VALUES
(26, 'peter ', 'Hassan ', '6.6\"', '99', 'Black', '123, kerugoya', 'kerugoya', 'Kirinyaga', '099672617', '2000-05-05', 
'biike@gmail.com', 'uploads/criminal/image1.jpg', '2021-03-25 20:39:34', 'jamac ahmed ', 'Nuurto', 
'2342563', 'laceration on face'),
(27, 'Abdullahi', 'Noor', '', '', '', '0001, nairobi', 'nairobi', 'Nairobi', '099273616', '1994-05-05', 
'noor@gmail.com', 'uploads/criminal/image2.jpg', '2021-03-27 16:52:20', 'Jim', 'Aasho', 
'1234567', 'No'),
(28, 'Biike', 'Yallahow', '', '', '', '111,eldoret', 'eldoret', 'Uasin Gishu', '099271632', '1992-02-20', 
'biike@gmail.com', 'uploads/criminal/image11.jpg', '2021-03-27 16:53:29', 'Hussien', 'Nuurto', 
'2342563', 'laceration on chine'),
(29, 'Aamir', 'Deylaaf', '6.6\"', '', '', '454, thika', 'thika', 'Kiambu', '099768546', '1980-07-21', 
'aamir@hotmail.com', 'uploads/criminal/image10.jpg', '2021-03-27 16:55:07', 'ibarahim', 'haajiro', 
'24535245', 'No'),
(30, 'Osma Nuur', 'Mohamed', '6.6\"', '', '', '7777, kerugoya', 'kutus', 'Kirinyaga', '099637261', '1989-02-18', 
'aamir@hotmail.com', 'uploads/criminal/image3.jpg', '2021-03-27 
16:57:51', 'ilmi', 'meymun ', '09675473', 'staples on head'),
(32, 'Nuur osma', 'Mohamed', '', '', '', '459, embu', 'embu', 'Embu', '099675436', '1996-05-05', 
'aamir@hotmail.com', 'uploads/criminal/image4.jpg', '2021-03-27 17:01:00', 'Muhadiin', 'Nadiifo', '0997384734', ''),
(33, 'Abdullahi', 'Haji', '', '', '', '889, nyeri', 'nyeri', 'Nyeri', '', '1992-02-12', 'noor@gmail.com', 'uploads/criminal/image5.jpg', '2021-03-27 17:01:35', 'Muhidin', 'Kadijo', '2342563', 'No'),
(34, 'Yahye mohamed', 'Daadir', '', '', '', '558, iten', 'Tambach', 'Elgeiyo Marakwet', '099737287', '1990-02-18', 
'noor@gmail.com', 'uploads/criminal/image6.jpg', '2021-03-27 17:09:43', 'Muhadiin', 'Kadijoo', '89283920', 
'No'),
(35, 'Abdullahi', 'Mursal ', '', '', '', '556, sigalagala', 'kakamega', 'Kakamega', '099718271', '1985-02-18', 
'noor@gmail.com', 'uploads/criminal/image7.jpg', '2021-03-27 17:11:02', 'Hussien', 'Qaali', '2342563', 'staples on head'),
(36, 'Rasher', 'Mohamed', '', '', '', '634, kisii', 'kisii ', 'Kisii ', '099893827', '1994-12-21', 
'fowzoo18@gmail.com', 'uploads/criminal/image8.jpg', '2019-03-27 17:12:32', 'Muhadiin', 'Muumino', '6372634', 
'laceration on face'),
(37, 'Daadir', 'Hassan', '', '', '', '783, nkubu', 'chuka', 'Meru', '09983728999', '1980-03-25', 
'aamir@hotmail.com', 'uploads/criminal/image9.jpg', '2021-03-27 17:13:23', 'ibarahim', 'zahra', 
'24535234', 'no');
-- --------------------------------------------------------
--

-- Table structure for table `images`
--
CREATE TABLE `images` (
 `id` int(11) NOT NULL,
 `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `uploaded_on` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------
--
-- Table structure for table `police`
--
CREATE TABLE `police` (
 `id` int(11) NOT NULL,
 `fName` varchar(250) DEFAULT NULL,
 `lName` varchar(250) DEFAULT NULL,
 `height` varchar(50) DEFAULT NULL,
 `weight` varchar(50) DEFAULT NULL,
 `eyeColor` varchar(100) DEFAULT NULL,
 `address` varchar(250) DEFAULT NULL,
 `town` varchar(250) DEFAULT NULL,
 `county` varchar(250) DEFAULT NULL,
 `phoneNumber` varchar(50) DEFAULT NULL,
 `dateOFbirth` date DEFAULT NULL,
 `email` varchar(200) DEFAULT NULL,
 `website` varchar(200) DEFAULT NULL,
 `image` varchar(250) DEFAULT NULL,
 `uploads_on` datetime NOT NULL,
 `jobid` varchar(200) NOT NULL,
 `policestation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `police`
--

INSERT INTO `police`(`id`, `fName`, `lName`, `height`, `weight`, `eyeColor`, `address`, `town`, `county`, `phoneNumber`, `dateOFbirth`, `email`, `website`, `image`, `uploads_on`, `jobid`, `policestation`) VALUES
(14, 'Yasin Jamal ', 'Mohamed', '7.6\"', '64', 'Black', '555, kerugoya', 'Kerugoya', 'Kirinyaga', '099356256', 
'1990-03-05', 'yassin@gmail.com', '', 'uploads/police/image1.jpg', '2021-03-27 16:13:52', 
'7774325', 'Kerugoya police-station'),
(15, 'Dadir ahmed', 'Nuur', '5.6\"', '70', 'Black', '121, kerugoya', 'Kutus', 'Kirinyaga', '099783473', '1980-03-
11', 'biike@gmail.com', '', 'uploads/police/image2.jpg', '2021-03-27 16:15:43', '7774343', 'Kutus Police-Station'),
(16, 'Nuur Kalid', 'Hassan ', '5.6\"', '70', 'Grey', '774, thika', 'thika', 'Kiambu', '099347623', 
'1992-02-20', 'aamir@hotmail.com', '', 'uploads/police/image3.jpg', '2021-03-27 16:17:18', 
'7774473', 'Thika Police-Station '),
(17, 'Osma Nuur ', 'Mohamed', '7.6\"', '64', 'Grey', '112, embu', 'embu', 'Embu', '0997384723', 
'1994-02-12', 'aamir@hotmail.com', '', 'uploads/police/image4.jpg', '2021-03-27 16:19:16', 
'7774335', 'Embu Police-Station'),
(18, 'ZamZam Hassan ', 'Hussien', '7.6\"', '64', '', '445, eldoret', 'eldoret', 'Uasin Gishu', '099367216', '1960-03-
20', 'biike@gmail.com', '', 'uploads/police/image5.jpg', '2021-03-27 16:25:52', '7774326', 'Wareng Police-station'),
(22, 'Nuur osma', 'Mohamed', '7.6\"', '70', 'Grey', '475, iten', 'tambach', 'Elgeiyo Marakwet', '0997384734', 
'1999-03-12', 'aamir@hotmail.com', '', 'uploads/police/image6.jpg', '2021-03-27 16:37:41', '7774323', 'Iten Police-Station'),
(23, 'Osma Noor', 'Mohamed', '5.6\"', '70', 'Grey', '112, kisumu', 'kisumu', 'Kisumu', '099782714', 
'1992-02-12', 'aamir@hotmail.com', '', 'uploads/police/image7.jpg', '2021-03-27 16:39:02', '7774336', 'Kisumu PoliceStation ');
-- --------------------------------------------------------
--

-- Table structure for table `prison`
--
CREATE TABLE `prison` (
 `id` int(11) NOT NULL,
 `name` varchar(250) NOT NULL,
 `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `prison`
--

INSERT INTO `prison` (`id`, `name`, `description`) VALUES
(12, 'Juvenile', 'under eighteen'),
(13, 'Military ', 'highly guarded'),
(14, 'State prison', 'high crime'),
(15, 'District Jail', 'strict penalty'),
(16, 'Kamiti Maximum Prison', ''),
(17, 'Machakos prison ', ''),
(18, 'Tambach prison ', ''),
(19, 'kerugoya prison ', ''),
(20, 'Thika prison', ''),
(21, 'Nyeri prison', ''),
(22, 'Kericho prison', ''),
(23, 'Nairobi west prison ', ''),
(24, 'Embu prison', ''),
(25, 'Langata Women Maximum Security prison', ''),
(26, 'Manyani Maximum Security prison', ''),
(27, 'Nyeri Maximum Security prison', ''),
(28, 'Kiambu prison', ''),
(29, 'Ruiru prison', ''),
(30, 'Mwea prison', ''),
(31, 'Kisumu Maximum Security prison', ''),
(32, 'Kisumu medium prison', ''),
(33, 'Nakuru main prison', ''),
(34, 'Eldoret main prison', ''),
(35, 'Rumuruti prison', ''),
(36, 'Garrissa Main prison', ''),
(37, 'Wajir prison', '');
-- --------------------------------------------------------

-- Table structure for table `roletype`
--
CREATE TABLE `roletype` (
 `id` int(11) NOT NULL,
 `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `roletype`
--

INSERT INTO `roletype` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'police'),
(4, 'court');
-- --------------------------------------------------------
--

-- Table structure for table `users`
--
CREATE TABLE `users` (
 `id` int(11) NOT NULL,
 `fName` varchar(250) DEFAULT NULL,
 `lName` varchar(250) DEFAULT NULL,
 `username` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(100) NOT NULL,
 `userRoll` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `username`, `email`, `password`, `userRoll`) VALUES
(1, 'Rashedul', '', 'dev', 'evanskiprotich14@gmail.com', 'dev', 'admin'),
(6, 'Evans', 'kiprotich', 'admin', 'evans@hotmail.com', 'admin', 'admin'),
(20, 'Ian', 'jamal', 'Subadmin', 'ian18@gmail.com', 'subadmin', 'subuser'),
(23, 'Sharii ', 'barrow', 'Courtuser', 'sharon1@gmail.com', 'courtuser', 'court'),
(24, 'Saam', 'hommie', 'POLICEUSER', 'sam@gmail.com', 'policeuser', 'police'),
(28, 'Virginia', 'jamal', 'NORMAL-USER', 'virginia@yahoo.com', 'normaluser', 'user');
--

-- Indexes for dumped tables
--
--
-- Indexes for table `court`
--
ALTER TABLE `court`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `courttype`
--
ALTER TABLE `courttype`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
 ADD PRIMARY KEY (`id`),
 ADD KEY `police_Id` (`police_Id`),
 ADD KEY `criminal_ID` (`criminal_ID`);
--
-- Indexes for table `crimecategory`
--
ALTER TABLE `crimecategory`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `crimetype`
--
ALTER TABLE `crimetype`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `police`
--
ALTER TABLE `police`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `prison`
--
ALTER TABLE `prison`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `roletype`
--
ALTER TABLE `roletype`
 ADD PRIMARY KEY (`id`);
--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `courttype`
--
ALTER TABLE `courttype`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `crimecategory`
--
ALTER TABLE `crimecategory`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `crimetype`
--
ALTER TABLE `crimetype`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `prison`
--
ALTER TABLE `prison`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `roletype`
--
ALTER TABLE `roletype`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

 --
-- Constraints for dumped tables
--
--
-- Constraints for table `crime`
--
ALTER TABLE `crime`
 ADD CONSTRAINT `crime_ibfk_1` FOREIGN KEY (`police_Id`) REFERENCES `police` (`id`) ON DELETE CASCADE,
 ADD CONSTRAINT `crime_ibfk_2` FOREIGN KEY (`criminal_ID`) REFERENCES `criminal` (`id`) ON DELETE CASCADE;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;