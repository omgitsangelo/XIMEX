-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 11:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `slide1`
--

CREATE TABLE `slide1` (
  `Slide1ID` int(11) NOT NULL,
  `Slide1TextContent1` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide1TextContent2` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide1TextContent3` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide1TextContent4` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide1TextSize` int(11) NOT NULL,
  `Slide1TextColor` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide1IsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `slide1`
--

INSERT INTO `slide1` (`Slide1ID`, `Slide1TextContent1`, `Slide1TextContent2`, `Slide1TextContent3`, `Slide1TextContent4`, `Slide1TextSize`, `Slide1TextColor`, `Slide1IsActive`) VALUES
(1, 'XANTARA DEVELOPMENT CORPORATION is first and foremost a partnership established with XIMEX Group of Companies to provide quality residences at the lowest possible range exclusively for qualified employees.', 'A brain child of CEO Mr. Ibanez, and as part of the initial engagement of Xantara Development Corporation with the Ximex group, the XDE Village Project is just one of several real estate development programs which it intends to complete in the coming years.', 'Putting value and emphasis on the company\'s most important resource - its people, a simple yet grand testimony of faith to its people, the Village realizes a part of a dream - a roof over families and the security of having a home.', 'We give personal attention to the details of building design and construction, while providing day-to-day hands-on management. We always ensure the building meets or exceeds client expectations, and we maintain full contact after the contract is signed.', 16, '#FFFFFF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide1bg`
--

CREATE TABLE `slide1bg` (
  `Slide1BGPathID` int(11) NOT NULL,
  `Slide1BGPath` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide1BGPathIsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `slide1bg`
--

INSERT INTO `slide1bg` (`Slide1BGPathID`, `Slide1BGPath`, `Slide1BGPathIsActive`) VALUES
(1, 'Upload/Slide1/Background/36-River-Street_Waltham.jpg', 0),
(2, 'Upload/Slide1/Background/webfam1standard.jpg', 1),
(3, 'Upload/Slide1/Background/aboutushome.jpg', 0),
(4, 'Upload/Slide1/Background/gastonia-new-home-subdivision.jpg', 0),
(5, 'Upload/Slide1/Background/landscape-1470768620-perfect-fit-house-0916.jpg', 0),
(6, 'Upload/Slide1/Background/grass1200.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide1logo`
--

CREATE TABLE `slide1logo` (
  `Slide1LogoPathID` int(11) NOT NULL,
  `Slide1LogoPath` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide1LogoPathIsActive` tinyint(1) DEFAULT NULL,
  `Slide1LogoSize` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `slide1logo`
--

INSERT INTO `slide1logo` (`Slide1LogoPathID`, `Slide1LogoPath`, `Slide1LogoPathIsActive`, `Slide1LogoSize`) VALUES
(2, 'Upload/Slide1/Logo/4a6232c700409061cec511f3efa06bc2.jpg', 0, 36),
(3, 'Upload/Slide1/Logo/XANTARA DEV -transparent.png', 1, 36),
(4, 'Upload/Slide1/Logo/XIMEX LOGO - orange transparent.png', 0, 36),
(5, 'Upload/Slide1/Logo/XDE VILLAGE LOGO VERTICAL lowerres.png', 0, 36),
(6, 'Upload/Slide1/Logo/loremipsum.png', 0, 36);

-- --------------------------------------------------------

--
-- Table structure for table `slide2`
--

CREATE TABLE `slide2` (
  `Slide2ID` int(11) NOT NULL,
  `Slide2MissionHeaderColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2MissionHeaderSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2MissionTextboxColor` int(11) DEFAULT NULL,
  `Slide2MissionTextColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2MissionTextContent` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2VisionHeaderColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2VisionHeaderSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2VisionTextboxColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2VisionTextColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2VisionTextContent` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2IsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide2background`
--

CREATE TABLE `slide2background` (
  `Slide2BackgroundID` int(11) NOT NULL,
  `Slide2BackgroundPath` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide2BackgroundIsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide3`
--

CREATE TABLE `slide3` (
  `Slide3ID` int(11) NOT NULL,
  `Slide3LeftTextBGColor` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftTextColor` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftTextSize` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftText1Content` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftText2Content` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftText3Content` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftText4Content` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextBGColor` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextColor` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextSize` varchar(45) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextContent1` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextContent2` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextContent3` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightTextContent4` varchar(200) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide3leftbg`
--

CREATE TABLE `slide3leftbg` (
  `Slide3LeftBGID` int(11) NOT NULL,
  `Slide3LeftBGPath` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftBGIsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide3leftlogo`
--

CREATE TABLE `slide3leftlogo` (
  `Slide3LeftLogoID` int(11) NOT NULL,
  `Slide3LeftLogoPath` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3LeftLogoSize` int(11) DEFAULT NULL,
  `Slide3LeftLogoIsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide3rightbg`
--

CREATE TABLE `slide3rightbg` (
  `Slide3RightBGID` int(11) NOT NULL,
  `Slide3RightBGPath` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightBGIsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide3rightlogo`
--

CREATE TABLE `slide3rightlogo` (
  `Slide3RightLogoID` int(11) NOT NULL,
  `Slide3RightLogoPath` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `Slide3RightLogoIsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide4`
--

CREATE TABLE `slide4` (
  `Slide4ID` int(11) NOT NULL,
  `Slide4HeaderColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4HeaderSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4HeaderContent` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4ButtonColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4ButtonTextColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4ButtonTextSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4ButtonTextContent` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormTextSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormTextColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4Form1Content` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4Form2Content` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4Form3Content` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4Form4Content` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormHeaderSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormHeaderColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormHeaderContent` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormButtonColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormButtonTextColor` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormButtonTextSize` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4FormButtonTextContent` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4IsActive` tinyint(1) DEFAULT NULL,
  `Slide4col` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide4bg`
--

CREATE TABLE `slide4bg` (
  `Slide4BGID` int(11) NOT NULL,
  `Slide4BGPath` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `Slide4BGIsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slide1`
--
ALTER TABLE `slide1`
  ADD PRIMARY KEY (`Slide1ID`);

--
-- Indexes for table `slide1bg`
--
ALTER TABLE `slide1bg`
  ADD PRIMARY KEY (`Slide1BGPathID`);

--
-- Indexes for table `slide1logo`
--
ALTER TABLE `slide1logo`
  ADD PRIMARY KEY (`Slide1LogoPathID`);

--
-- Indexes for table `slide2`
--
ALTER TABLE `slide2`
  ADD PRIMARY KEY (`Slide2ID`);

--
-- Indexes for table `slide2background`
--
ALTER TABLE `slide2background`
  ADD PRIMARY KEY (`Slide2BackgroundID`);

--
-- Indexes for table `slide3`
--
ALTER TABLE `slide3`
  ADD PRIMARY KEY (`Slide3ID`);

--
-- Indexes for table `slide3leftbg`
--
ALTER TABLE `slide3leftbg`
  ADD PRIMARY KEY (`Slide3LeftBGID`);

--
-- Indexes for table `slide3leftlogo`
--
ALTER TABLE `slide3leftlogo`
  ADD PRIMARY KEY (`Slide3LeftLogoID`);

--
-- Indexes for table `slide3rightbg`
--
ALTER TABLE `slide3rightbg`
  ADD PRIMARY KEY (`Slide3RightBGID`);

--
-- Indexes for table `slide3rightlogo`
--
ALTER TABLE `slide3rightlogo`
  ADD PRIMARY KEY (`Slide3RightLogoID`);

--
-- Indexes for table `slide4`
--
ALTER TABLE `slide4`
  ADD PRIMARY KEY (`Slide4ID`);

--
-- Indexes for table `slide4bg`
--
ALTER TABLE `slide4bg`
  ADD PRIMARY KEY (`Slide4BGID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slide1`
--
ALTER TABLE `slide1`
  MODIFY `Slide1ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide1bg`
--
ALTER TABLE `slide1bg`
  MODIFY `Slide1BGPathID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slide1logo`
--
ALTER TABLE `slide1logo`
  MODIFY `Slide1LogoPathID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slide2`
--
ALTER TABLE `slide2`
  MODIFY `Slide2ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide2background`
--
ALTER TABLE `slide2background`
  MODIFY `Slide2BackgroundID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide3`
--
ALTER TABLE `slide3`
  MODIFY `Slide3ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide3leftbg`
--
ALTER TABLE `slide3leftbg`
  MODIFY `Slide3LeftBGID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide3leftlogo`
--
ALTER TABLE `slide3leftlogo`
  MODIFY `Slide3LeftLogoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide3rightbg`
--
ALTER TABLE `slide3rightbg`
  MODIFY `Slide3RightBGID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide3rightlogo`
--
ALTER TABLE `slide3rightlogo`
  MODIFY `Slide3RightLogoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide4`
--
ALTER TABLE `slide4`
  MODIFY `Slide4ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide4bg`
--
ALTER TABLE `slide4bg`
  MODIFY `Slide4BGID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
