-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 09:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

-----------------------------------------------------------------------------
-- login credentials Admin A = email: wmd@email.com,  password: sgnobod
-- login credentials Admin B = email: TJ@email.com,  password: oingoboingo62
-- login credentials Member M = email: CW@email.com,  password: alecfehl
-----------------------------------------------------------------------------



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a8935893_dodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CatID` int(11) NOT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Category_Description` varchar(60) DEFAULT NULL,
  `Category_Size_Description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `InvoiceID` int(11) NOT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Total_Price` char(20) DEFAULT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lineitems`
--

CREATE TABLE IF NOT EXISTS `lineitems` (
  `Line_ItemID` int(11) NOT NULL,
  `ProductID` varchar(8) NOT NULL,
  `InvoiceID` int(11) NOT NULL,
  `Item_Price` float DEFAULT NULL,
  `Quantity` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` varchar(8) NOT NULL,
  `CatID` int(11) DEFAULT '0',
  `Plant_Name` varchar(30) DEFAULT NULL,
  `Description` longtext,
  `Size` varchar(20) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT '0',
  `Price` decimal(19,2) DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES
('P1', 1, 'Echinecea', 'Beautiful purple daisy like flowers with a bunching habit', '1 Gallon', 48, '12.00'),
('P2', 1, 'Shasta Daisy', 'Beautiful White daisy flowers with a great bunching habit', '1 Gallon', 64, '12.00'),
('P3', 1, 'Sedum "Autumn Joy"', 'A favorite of the bees in the late season. Beautiful pink to rosy red flower heads with great clumping habit', '1 Gallon', 38, '12.00'),
('S1', 2, 'Forsythia', '  These are early spring yellow flowering with an open growing habit', '3 Gallon', 35, '40.00'),
('S2', 2, 'Azalea "Delaware Valley White"', 'This variety of Azalea has a nicce tight growth habit with late season white blossoms', '3 Gallon', 42, '45.00'),
('S3', 2, 'Leather Leaf Viburnum', 'This member of the viburnum family has a leather look to the foliage with early summer season white blooms turning to red berries in fall.', '5 Gallon', 32, '85.00'),
('S4', 2, 'Buddlea "Black Knight"', 'A Butterfly bush with a large growth habit. Bearing dark purple blooms throughout summer.', '3 Gallon', 28, '30.00'),
('E1', 3, 'Hinoki Cypress', 'These ornamental trees are perfect for a Japanese garden. Their life long growth size is 10 x 6 feet', '5 - 6 ft', 24, '150.00'),
('E2', 3, 'Thuja Occ. "Emerald Green"', 'A member of the native arborvitae. These trees will reach a gradual maximum height of 12 - 14 feet', '6 - 8 ft', 30, '200.00'),
('E3', 3, 'Dwarf Gold Thread', 'A member of the camacypress family having a golden color throughout the season. Perfect for an accent plant in any landscape.', '6 - 7 ft', 28, '175.00'),
('D1', 4, 'River Birch', 'A good tree choice for moist locations with a large growth habit having peeling bark of a copper color.', '6 - 7 ft', 42, '150.00'),
('D2', 4, 'Red Bud', 'This tree has a loose growing habit bearing bright purple blossoms in the spring.', '5 - 6 ft', 32, '125.00'),
('D3', 4, 'Silver Maple', 'This tree has a light green foliage in summer and a bright yellow foliage into late fall.', '5 - 6 ft', 35, '155.00'),
('D4', 4, 'Dogwood "Pink Lady"', 'This Dogwood has the truest pink color with a strong branching habit.', '5 - 6 ft', 38, '175.00'),
('P4', 1, 'Liatris', 'This full clumping perennial has large light purple spike blooms', '1 Gallon', 47, '12.00'),
('P5', 1, 'Siberian Iris', 'This perennial has good clumping habit with prolific blooms of purple with golden center', '1 Gallon', 58, '12.00'),
('P6', 1, 'Toadflax', 'A wispy perennial with fine spikes of pink, purple, and white', '1 Gallon', 57, '12.00'),
('P7', 1, 'Rudebekia "Black Eyed Susan"', 'Bright yellow daisy like blooms with good clumping habit', '1 Gallon', 68, '12.00'),
('P8', 1, 'Crocosmia "Lucifer"', 'Tall plant with arching bright red flowers. A favorite of hummingbirds', '1 Gallon', 45, '12.00'),
('P9', 1, 'Stoksia', 'Large frilly purple blooms amass atop this clumping perennial', '1 Gallon', 53, '12.00'),
('P10', 1, 'Perovskia "Russian Sage"', 'This perennial has a shrub like growth habit with tall purple spike flowers', '1 Gallon', 68, '12.00'),
('D5', 4, 'Red Bark Maple', 'This specimen has bright red bark adding interest to winter landscapes', '5 - 6 ft', 43, '160.00'),
('D6', 4, 'Acer Palmatin " Blood Good"', 'This japanese Maple has a large lace cut foliage of dark burgundy', '6 - 8 ft', 54, '220.00'),
('D7', 4, 'Beech', 'This specimen has a good bracnching habit with bright yellow foliage long into fall', '5 - 7 ft', 33, '180.00'),
('D8', 4, 'White Birch', 'This specimen has a nice open growth habit with peeling white bark', '5 - 7 ft', 42, '140.00'),
('D9', 4, 'Dogwood "Fire Chief"', 'This Dogwood has reddish blossoms with a strong branching habit', '5 - 6 ft', 38, '175.00'),
('D10', 4, 'Red Maple', 'This member of the maple family has bright red orasnge foliage in the fall', '5 - 6 ft', 49, '125.00'),
('E4', 3, 'Ilex "Nellie Stevens"', 'This holly has a nice tight growth habit reaching a mature size of 15 x 10 feet', '6 - 8 ft', 47, '160.00'),
('E5', 3, 'Magnolia "Teddy Bear"', 'This specimen has a tight growth habit reaching a mature size of 15 x 8 feet', '5 - 6 ft', 38, '175.00'),
('E6', 3, 'Carolina Hemlock', 'This specimen has short needles and a tight growth habit reaching a mature height of 20 x 10 feet', '7 - 8 ft', 42, '155.00'),
('E7', 3, 'Austrian Pine', 'This specimen has an open branching habit and will reach a mature size of 30 x 15 feet', '7 - 8 ft', 53, '225.00'),
('E8', 3, 'Blue Spruce "Fat Albert"', 'This Blue Spruce specimen has a tight branching habit and will reach a mature height of 14 x 10 feet', '7 - 8 ft', 43, '200.00'),
('E9', 3, 'Deadora Cedar', 'This specimen has a very short needle length and loose growing habit reaching  a mature size of 30 x 15 feet', '7 - 8 ft', 48, '185.00'),
('E10', 3, 'White Cedar', 'This specimen has a tight growth habit with a light citrus scent. Reaching a mature size of 25 x 15 feet', '7 - 8 ft', 38, '200.00'),
('S5', 2, 'Ilex "Blue Maid"', 'A member of the blue holly variety with medium green foliage and a tight growth habit', '3 Gallon', 47, '35.00'),
('S6', 2, 'Lilac "Delightful"', 'A tall Shrub with light purple fragrant flowers in spring', '3 Gallon', 53, '25.00'),
('S7', 2, 'Helleri Holly', 'This shrub has a very tight growth habit with tiny foliage of bright green', '3 Gallon', 49, '30.00'),
('S8', 2, 'Oak Leaf Hydrangea', 'This hydrangea has a peeling copper bark and large white to pink blooms in summer', '3 Gallon', 51, '35.00'),
('S9', 2, 'Annabelle Hydrangea', 'This hydrangea has an up right habit and large pom-pom shaped white blooms in summer', '3 Gallon', 63, '30.00'),
('S10', 2, 'Juniper "Grey Owl"', 'This juniper specimen has a large branching habit with light grey blue foliage', '3 Gallon', 57, '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`StateID` smallint(11) unsigned NOT NULL,
  `State_Name` varchar(32) DEFAULT NULL,
  `State_Abbr` varchar(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`StateID`, `State_Name`, `State_Abbr`) VALUES
(1, 'Alabama', 'AL'),
(2, 'Alaska', 'AK'),
(3, 'Arizona', 'AZ'),
(4, 'Arkansas', 'AR'),
(5, 'CAlifornia', 'CA'),
(6, 'Colorado', 'CO'),
(7, 'Connecticut', 'CT'),
(8, 'Delaware', 'DE'),
(9, 'District of Columbia', 'DC'),
(10, 'Florida', 'FL'),
(11, 'Georgia', 'GA'),
(12, 'Hawaii', 'HI'),
(13, 'Idaho', 'ID'),
(14, 'Illinois', 'IL'),
(15, 'Indiana', 'IN'),
(16, 'Iowa', 'IA'),
(17, 'Kansas', 'KS'),
(18, 'Kentucky', 'KY'),
(19, 'Louisiana', 'LA'),
(20, 'Maine', 'ME'),
(21, 'Maryland', 'MD'),
(22, 'Massachusetts', 'MA'),
(23, 'Michigan', 'MI'),
(24, 'Minnesota', 'MN'),
(25, 'Mississippi', 'MS'),
(26, 'Missouri', 'MO'),
(27, 'Montana', 'MT'),
(28, 'Nebraska', 'NE'),
(29, 'Nevada', 'NV'),
(30, 'New Hampshire', 'NH'),
(31, 'New Jersey', 'NJ'),
(32, 'New Mexico', 'NM'),
(33, 'New York', 'NY'),
(34, 'North Carolina', 'NC'),
(35, 'North Dakota', 'ND'),
(36, 'Ohio', 'OH'),
(37, 'Oklahoma', 'OK'),
(38, 'Oregon', 'OR'),
(39, 'Pennsylvania', 'PA'),
(40, 'Rhode Island', 'RI'),
(41, 'South Carolina', 'SC'),
(42, 'South Dakota', 'SD'),
(43, 'Tennessee', 'TN'),
(44, 'Texas', 'TX'),
(45, 'Vermont', 'VT'),
(46, 'Virginia', 'VA'),
(47, 'Washington', 'WA'),
(48, 'West Virginia', 'WV'),
(49, 'Wisconsin', 'WI'),
(50, 'Wyoming', 'WY');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`UserID` int(11) NOT NULL,
  `First_Name` char(20) DEFAULT NULL,
  `Last_Name` char(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Level` varchar(1) NOT NULL DEFAULT 'M'
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `First_Name`, `Last_Name`, `Email`, `Password`, `Level`) VALUES
(2, 'William', 'Deskevich', 'wmd@email.com', '95E6C92600DA2881722EBE2E46FC73FB8DBAA058E4B174F3285830E5B14D79E4', 'A'),
(3, 'Thomas', 'Jones', 'TJ@email.com', 'D5A48C51618DEA05B467B3032DF9238D30520FC29807616B46C449D6711C4F61', 'A'),
(4, 'Alec', 'Fehl', 'AF@email.com', '9DFE201B5CE13A3D57F2CA3FBCE6E059A0DC159755BDF62406FBDC4039981794', 'M'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`CatID`), ADD UNIQUE KEY `CatID` (`CatID`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
 ADD PRIMARY KEY (`InvoiceID`), ADD UNIQUE KEY `InvoiceID` (`InvoiceID`), ADD KEY `Relationship3` (`UserID`);

--
-- Indexes for table `lineitems`
--
ALTER TABLE `lineitems`
 ADD PRIMARY KEY (`Line_ItemID`), ADD UNIQUE KEY `Line_ItemID` (`Line_ItemID`), ADD KEY `Relationship4` (`InvoiceID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`ProductID`), ADD UNIQUE KEY `Plant_Name` (`Plant_Name`), ADD KEY `CatID` (`CatID`), ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`StateID`), ADD UNIQUE KEY `StateID` (`StateID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`,`StateID`), ADD UNIQUE KEY `UserID` (`UserID`), ADD KEY `Relationship2` (`StateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `StateID` smallint(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
