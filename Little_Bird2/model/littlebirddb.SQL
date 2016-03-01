/*
Created: 2/11/2016
Modified: 2/11/2016
Model: littlebird
Database: MySQL 5.6
*/
DROP DATABASE IF EXISTS littlebirddb;
CREATE DATABASE littlebirddb;
USE littlebirddb;


-- Create tables section -------------------------------------------------

-- Table Categories

CREATE TABLE `Categories`
(
  `CatID` Int NOT NULL,
  `Category` Varchar(20),
  `Category_Description` Varchar(60),
  `Category_Size_Description` Varchar(60)
)
;

ALTER TABLE `Categories` ADD  PRIMARY KEY (`CatID`)
;

ALTER TABLE `Categories` ADD UNIQUE `CatID` (`CatID`)
;

#
# Table structure for table 'Products'
#

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `ProductID` VARCHAR(8) NOT NULL, 
  `CatID` INTEGER DEFAULT 0, 
  `Plant_Name` VARCHAR(30), 
  `Description` LONGTEXT, 
  `Size` VARCHAR(20), 
  `In_Stock` INTEGER DEFAULT 0, 
  `Price` DECIMAL(19,2) DEFAULT 0, 
  INDEX (`CatID`), 
  UNIQUE (`Plant_Name`), 
  PRIMARY KEY (`ProductID`), 
  INDEX (`ProductID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;-- Table Products


#
# Dumping data for table 'Products'
#

INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P1', 1, 'Echinecea', 'Beautiful purple daisy like flowers with a bunching habit', '1 Gallon', 48, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P2', 1, 'Shasta Daisy', 'Beautiful White daisy flowers with a great bunching habit', '1 Gallon', 64, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P3', 1, 'Sedum \"Autumn Joy\"', 'A favorite of the bees in the late season. Beautiful pink to rosy red flower heads with great clumping habit', '1 Gallon', 38, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S1', 2, 'Forsythia', '\tThese are early spring yellow flowering with an open growing habit', '3 Gallon', 35, 40);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S2', 2, 'Azalea \"Delaware Valley White\"', 'This variety of Azalea has a nicce tight growth habit with late season white blossoms', '3 Gallon', 42, 45);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S3', 2, 'Leather Leaf Viburnum', 'This member of the viburnum family has a leather look to the foliage with early summer season white blooms turning to red berries in fall.', '5 Gallon', 32, 85);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S4', 2, 'Buddlea \"Black Knight\"', 'A Butterfly bush with a large growth habit. Bearing dark purple blooms throughout summer.', '3 Gallon', 28, 30);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E1', 3, 'Hinoki Cypress', 'These ornamental trees are perfect for a Japanese garden. Their life long growth size is 10 x 6 feet', '5 - 6 ft', 24, 150);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E2', 3, 'Thuja Occ. \"Emerald Green\"', 'A member of the native arborvitae. These trees will reach a gradual maximum height of 12 - 14 feet', '6 - 8 ft', 30, 200);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E3', 3, 'Dwarf Gold Thread', 'A member of the camacypress family having a golden color throughout the season. Perfect for an accent plant in any landscape.', '6 - 7 ft', 28, 175);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D1', 4, 'River Birch', 'A good tree choice for moist locations with a large growth habit having peeling bark of a copper color.', '6 - 7 ft', 42, 150);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D2', 4, 'Red Bud', 'This tree has a loose growing habit bearing bright purple blossoms in the spring.', '5 - 6 ft', 32, 125);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D3', 4, 'Silver Maple', 'This tree has a light green foliage in summer and a bright yellow foliage into late fall.', '5 - 6 ft', 35, 155);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D4', 4, 'Dogwood \"Pink Lady\"', 'This Dogwood has the truest pink color with a strong branching habit.', '5 - 6 ft', 38, 175);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P4', 1, 'Liatris', 'This full clumping perennial has large light purple spike blooms', '1 Gallon', 47, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P5', 1, 'Siberian Iris', 'This perennial has good clumping habit with prolific blooms of purple with golden center', '1 Gallon', 58, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P6', 1, 'Toadflax', 'A wispy perennial with fine spikes of pink, purple, and white', '1 Gallon', 57, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P7', 1, 'Rudebekia \"Black Eyed Susan\"', 'Bright yellow daisy like blooms with good clumping habit', '1 Gallon', 68, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P8', 1, 'Crocosmia \"Lucifer\"', 'Tall plant with arching bright red flowers. A favorite of hummingbirds', '1 Gallon', 45, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P9', 1, 'Stoksia', 'Large frilly purple blooms amass atop this clumping perennial', '1 Gallon', 53, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('P10', 1, 'Perovskia \"Russian Sage\"', 'This perennial has a shrub like growth habit with tall purple spike flowers', '1 Gallon', 68, 12);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D5', 4, 'Red Bark Maple', 'This specimen has bright red bark adding interest to winter landscapes', '5 - 6 ft', 43, 160);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D6', 4, 'Acer Palmatin \" Blood Good\"', 'This japanese Maple has a large lace cut foliage of dark burgundy', '6 - 8 ft', 54, 220);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D7', 4, 'Beech', 'This specimen has a good bracnching habit with bright yellow foliage long into fall', '5 - 7 ft', 33, 180);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D8', 4, 'White Birch', 'This specimen has a nice open growth habit with peeling white bark', '5 - 7 ft', 42, 140);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D9', 4, 'Dogwood \"Fire Chief\"', 'This Dogwood has reddish blossoms with a strong branching habit', '5 - 6 ft', 38, 175);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('D10', 4, 'Red Maple', 'This member of the maple family has bright red orasnge foliage in the fall', '5 - 6 ft', 49, 125);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E4', 3, 'Ilex \"Nellie Stevens\"', 'This holly has a nice tight growth habit reaching a mature size of 15 x 10 feet', '6 - 8 ft', 47, 160);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E5', 3, 'Magnolia \"Teddy Bear\"', 'This specimen has a tight growth habit reaching a mature size of 15 x 8 feet', '5 - 6 ft', 38, 175);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E6', 3, 'Carolina Hemlock', 'This specimen has short needles and a tight growth habit reaching a mature height of 20 x 10 feet', '7 - 8 ft', 42, 155);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E7', 3, 'Austrian Pine', 'This specimen has an open branching habit and will reach a mature size of 30 x 15 feet', '7 - 8 ft', 53, 225);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E8', 3, 'Blue Spruce \"Fat Albert\"', 'This Blue Spruce specimen has a tight branching habit and will reach a mature height of 14 x 10 feet', '7 - 8 ft', 43, 200);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E9', 3, 'Deadora Cedar', 'This specimen has a very short needle length and loose growing habit reaching  a mature size of 30 x 15 feet', '7 - 8 ft', 48, 185);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('E10', 3, 'White Cedar', 'This specimen has a tight growth habit with a light citrus scent. Reaching a mature size of 25 x 15 feet', '7 - 8 ft', 38, 200);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S5', 2, 'Ilex \"Blue Maid\"', 'A member of the blue holly variety with medium green foliage and a tight growth habit', '3 Gallon', 47, 35);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S6', 2, 'Lilac \"Delightful\"', 'A tall Shrub with light purple fragrant flowers in spring', '3 Gallon', 53, 25);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S7', 2, 'Helleri Holly', 'This shrub has a very tight growth habit with tiny foliage of bright green', '3 Gallon', 49, 30);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S8', 2, 'Oak Leaf Hydrangea', 'This hydrangea has a peeling copper bark and large white to pink blooms in summer', '3 Gallon', 51, 35);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S9', 2, 'Annabelle Hydrangea', 'This hydrangea has an up right habit and large pom-pom shaped white blooms in summer', '3 Gallon', 63, 30);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`) VALUES ('S10', 2, 'Juniper \"Grey Owl\"', 'This juniper specimen has a large branching habit with light grey blue foliage', '3 Gallon', 57, 30);
# 40 records

-- ALTER TABLE `Products` ADD  PRIMARY KEY (`ProductID`)
-- ;

-- -- ALTER TABLE `Products` ADD UNIQUE `ProductID` (`ProductID`)
-- -- ;

-- Table Users

CREATE TABLE `Users`
(
  `UserID` Int NOT NULL,
  `First_Name` Char(20),
  `Last_Name` Char(20),
  `Email` Varchar(20),
  `Address` Varchar(20),
  `City` Char(20),
  `StateID` Int NOT NULL,
  `Zip_Code` Int,
  `Password` Varchar(20),
  `Level` Varchar(5)
)
;

ALTER TABLE `Users` ADD  PRIMARY KEY (`UserID`,`StateID`)
;

ALTER TABLE `Users` ADD UNIQUE `UserID` (`UserID`)
;

-- Table States

CREATE TABLE `States`
(
  `StateID` Int NOT NULL,
  `State_Name` Varchar(32),
  `State_Abbr` Varchar(8)
)
;

ALTER TABLE `States` ADD  PRIMARY KEY (`StateID`)
;

ALTER TABLE `States` ADD UNIQUE `StateID` (`StateID`)
;

-- Table Invoices

CREATE TABLE `Invoices`
(
  `InvoiceID` Int NOT NULL,
  `Invoice_Date` Date,
  `Total_Price` Char(20),
  `UserID` Int NOT NULL
)
;

ALTER TABLE `Invoices` ADD  PRIMARY KEY (`InvoiceID`)
;

ALTER TABLE `Invoices` ADD UNIQUE `InvoiceID` (`InvoiceID`)
;

-- Table LineItems

CREATE TABLE `LineItems`
(
  `Line_ItemID` Int NOT NULL,
  `ProductID` VARCHAR(8) NOT NULL,
  `InvoiceID` Int NOT NULL,
  `Item_Price` Float,
  `Quantity` Float
)
;

ALTER TABLE `LineItems` ADD  PRIMARY KEY (`Line_ItemID`)
;

ALTER TABLE `LineItems` ADD UNIQUE `Line_ItemID` (`Line_ItemID`)
;

-- Create relationships section ------------------------------------------------- 

ALTER TABLE `Products` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`CatID`) REFERENCES `Categories` (`CatID`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `Users` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`StateID`) REFERENCES `States` (`StateID`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `Invoices` ADD CONSTRAINT `Relationship3` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `LineItems` ADD CONSTRAINT `Relationship4` FOREIGN KEY (`InvoiceID`) REFERENCES `Invoices` (`InvoiceID`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

-- ALTER TABLE `LineItems` ADD CONSTRAINT `Relationship5` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`) ON DELETE RESTRICT ON UPDATE RESTRICT
-- ;

