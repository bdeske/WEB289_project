#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.3.259
#
# OPTIONS:
#   sourcefilename=C:\Users\william\Desktop\WEB289\littlebirdDB.accdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=littlebirddb
#   storageengine=MyISAM
#   dropdatabase=0
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#

CREATE DATABASE IF NOT EXISTS `littlebirddb`;
USE `littlebirddb`;

#
# Table structure for table 'Cart'
#

DROP TABLE IF EXISTS `Cart`;

CREATE TABLE `Cart` (
  `ProductID` VARCHAR(255), 
  `Plant_Name` VARCHAR(255), 
  `Quantity_Ordered` VARCHAR(255), 
  `Total_Price` VARCHAR(255), 
  `UserID` INTEGER DEFAULT 0, 
  INDEX (`ProductID`), 
  UNIQUE (`UserID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Cart'
#

# 0 records

#
# Table structure for table 'Categories'
#

DROP TABLE IF EXISTS `Categories`;

CREATE TABLE `Categories` (
  `CatID` INTEGER NOT NULL AUTO_INCREMENT, 
  `Category` VARCHAR(255), 
  `Category_Description` LONGTEXT, 
  `Category_Size_Description` LONGTEXT, 
  UNIQUE (`Category`), 
  PRIMARY KEY (`CatID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Categories'
#

INSERT INTO `Categories` (`CatID`, `Category`, `Category_Description`, `Category_Size_Description`) VALUES (1, 'Perennials', 'Perennials are flowers that bloom once a year and die back to the ground or crown at the end of each season', 'Perennials will be sold in 1 and 2 gallon containers');
INSERT INTO `Categories` (`CatID`, `Category`, `Category_Description`, `Category_Size_Description`) VALUES (2, 'Shrubs', 'These are low growing to medium sized plants. They will have either a bush like growth habit or are open and airy.', 'Shrubs will be sold in 3 gallon containers');
INSERT INTO `Categories` (`CatID`, `Category`, `Category_Description`, `Category_Size_Description`) VALUES (3, 'Evergreen_Trees', 'These specimens will maintain their foliage throughout the yearand will have a medium to large growth habit', 'Evergreens are sold in 5 and 10 gallon containers');
INSERT INTO `Categories` (`CatID`, `Category`, `Category_Description`, `Category_Size_Description`) VALUES (4, 'Deciduous_Trees', 'These specimens will loose their foliage in the winter season', 'Deciduous trees are sold in 5 and 10 gallon containers');
# 4 records

#
# Table structure for table 'Invoices'
#

DROP TABLE IF EXISTS `Invoices`;

CREATE TABLE `Invoices` (
  `InvoiceID` INTEGER NOT NULL AUTO_INCREMENT, 
  `UserID` INTEGER DEFAULT 0, 
  `Invoice_Date` DATETIME, 
  `Total_Price` DECIMAL(19,4) DEFAULT 0, 
  INDEX (`InvoiceID`), 
  PRIMARY KEY (`InvoiceID`), 
  INDEX (`UserID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Invoices'
#

# 0 records

#
# Table structure for table 'Products'
#

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `ProductID` VARCHAR(255) NOT NULL, 
  `CatID` INTEGER DEFAULT 0, 
  `Plant_Name` VARCHAR(255), 
  `Description` LONGTEXT, 
  `Size` VARCHAR(255), 
  `In_Stock` INTEGER DEFAULT 0, 
  `Price` DECIMAL(19,4) DEFAULT 0, 
  `Order_Quantity` INTEGER DEFAULT 0, 
  INDEX (`CatID`), 
  UNIQUE (`Plant_Name`), 
  PRIMARY KEY (`ProductID`), 
  INDEX (`ProductID`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Products'
#

INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P1', 1, 'Echinecea', 'Beautiful purple daisy like flowers with a bunching habit', '1 Gallon', 48, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P2', 1, 'Shasta Daisy', 'Beautiful White daisy flowers with a great bunching habit', '1 Gallon', 64, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P3', 1, 'Sedum \"Autumn Joy\"', 'A favorite of the bees in the late season. Beautiful pink to rosy red flower heads with great clumping habit', '1 Gallon', 38, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S1', 2, 'Forsythia', '\tThese are early spring yellow flowering with an open growing habit', '3 Gallon', 35, 40, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S2', 2, 'Azalea \"Delaware Valley White\"', 'This variety of Azalea has a nicce tight growth habit with late season white blossoms', '3 Gallon', 42, 45, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S3', 2, 'Leather Leaf Viburnum', 'This member of the viburnum family has a leather look to the foliage with early summer season white blooms turning to red berries in fall.', '5 Gallon', 32, 85, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S4', 2, 'Buddlea \"Black Knight\"', 'A Butterfly bush with a large growth habit. Bearing dark purple blooms throughout summer.', '3 Gallon', 28, 30, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E1', 3, 'Hinoki Cypress', 'These ornamental trees are perfect for a Japanese garden. Their life long growth size is 10 x 6 feet', '5 - 6 ft', 24, 150, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E2', 3, 'Thuja Occ. \"Emerald Green\"', 'A member of the native arborvitae. These trees will reach a gradual maximum height of 12 - 14 feet', '6 - 8 ft', 30, 200, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E3', 3, 'Dwarf Gold Thread', 'A member of the camacypress family having a golden color throughout the season. Perfect for an accent plant in any landscape.', '6 - 7 ft', 28, 175, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D1', 4, 'River Birch', 'A good tree choice for moist locations with a large growth habit having peeling bark of a copper color.', '6 - 7 ft', 42, 150, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D2', 4, 'Red Bud', 'This tree has a loose growing habit bearing bright purple blossoms in the spring.', '5 - 6 ft', 32, 125, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D3', 4, 'Silver Maple', 'This tree has a light green foliage in summer and a bright yellow foliage into late fall.', '5 - 6 ft', 35, 155, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D4', 4, 'Dogwood \"Pink Lady\"', 'This Dogwood has the truest pink color with a strong branching habit.', '5 - 6 ft', 38, 175, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P4', 1, 'Liatris', 'This full clumping perennial has large light purple spike blooms', '1 Gallon', 47, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P5', 1, 'Siberian Iris', 'This perennial has good clumping habit with prolific blooms of purple with golden center', '1 Gallon', 58, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P6', 1, 'Toadflax', 'A wispy perennial with fine spikes of pink, purple, and white', '1 Gallon', 57, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P7', 1, 'Rudebekia \"Black Eyed Susan\"', 'Bright yellow daisy like blooms with good clumping habit', '1 Gallon', 68, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P8', 1, 'Crocosmia \"Lucifer\"', 'Tall plant with arching bright red flowers. A favorite of hummingbirds', '1 Gallon', 45, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P9', 1, 'Stoksia', 'Large frilly purple blooms amass atop this clumping perennial', '1 Gallon', 53, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('P10', 1, 'Perovskia \"Russian Sage\"', 'This perennial has a shrub like growth habit with tall purple spike flowers', '1 Gallon', 68, 12, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D5', 4, 'Red Bark Maple', 'This specimen has bright red bark adding interest to winter landscapes', '5 - 6 ft', 43, 160, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D6', 4, 'Acer Palmatin \" Blood Good\"', 'This japanese Maple has a large lace cut foliage of dark burgundy', '6 - 8 ft', 54, 220, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D7', 4, 'Beech', 'This specimen has a good bracnching habit with bright yellow foliage long into fall', '5 - 7 ft', 33, 180, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D8', 4, 'White Birch', 'This specimen has a nice open growth habit with peeling white bark', '5 - 7 ft', 42, 140, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D9', 4, 'Dogwood \"Fire Chief\"', 'This Dogwood has reddish blossoms with a strong branching habit', '5 - 6 ft', 38, 175, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('D10', 4, 'Red Maple', 'This member of the maple family has bright red orasnge foliage in the fall', '5 - 6 ft', 49, 125, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E4', 3, 'Ilex \"Nellie Stevens\"', 'This holly has a nice tight growth habit reaching a mature size of 15 x 10 feet', '6 - 8 ft', 47, 160, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E5', 3, 'Magnolia \"Teddy Bear\"', 'This specimen has a tight growth habit reaching a mature size of 15 x 8 feet', '5 - 6 ft', 38, 175, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E6', 3, 'Carolina Hemlock', 'This specimen has short needles and a tight growth habit reaching a mature height of 20 x 10 feet', '7 - 8 ft', 42, 155, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E7', 3, 'Austrian Pine', 'This specimen has an open branching habit and will reach a mature size of 30 x 15 feet', '7 - 8 ft', 53, 225, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E8', 3, 'Blue Spruce \"Fat Albert\"', 'This Blue Spruce specimen has a tight branching habit and will reach a mature height of 14 x 10 feet', '7 - 8 ft', 43, 200, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E9', 3, 'Deadora Cedar', 'This specimen has a very short needle length and loose growing habit reaching  a mature size of 30 x 15 feet', '7 - 8 ft', 48, 185, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('E10', 3, 'White Cedar', 'This specimen has a tight growth habit with a light citrus scent. Reaching a mature size of 25 x 15 feet', '7 - 8 ft', 38, 200, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S5', 2, 'Ilex \"Blue Maid\"', 'A member of the blue holly variety with medium green foliage and a tight growth habit', '3 Gallon', 47, 35, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S6', 2, 'Lilac \"Delightful\"', 'A tall Shrub with light purple fragrant flowers in spring', '3 Gallon', 53, 25, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S7', 2, 'Helleri Holly', 'This shrub has a very tight growth habit with tiny foliage of bright green', '3 Gallon', 49, 30, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S8', 2, 'Oak Leaf Hydrangea', 'This hydrangea has a peeling copper bark and large white to pink blooms in summer', '3 Gallon', 51, 35, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S9', 2, 'Annabelle Hydrangea', 'This hydrangea has an up right habit and large pom-pom shaped white blooms in summer', '3 Gallon', 63, 30, 0);
INSERT INTO `Products` (`ProductID`, `CatID`, `Plant_Name`, `Description`, `Size`, `In_Stock`, `Price`, `Order_Quantity`) VALUES ('S10', 2, 'Juniper \"Grey Owl\"', 'This juniper specimen has a large branching habit with light grey blue foliage', '3 Gallon', 57, 30, 0);
# 40 records

#
# Table structure for table 'Users'
#

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `UserID` INTEGER NOT NULL AUTO_INCREMENT, 
  `First_Name` VARCHAR(255), 
  `Last_Name` VARCHAR(255), 
  `Email` VARCHAR(255), 
  `Address` VARCHAR(255), 
  `City` VARCHAR(255), 
  `State` VARCHAR(255), 
  `Zip_Code` INTEGER DEFAULT 0, 
  `Login` VARCHAR(255), 
  `Password` VARCHAR(255), 
  `Level` VARCHAR(255), 
  UNIQUE (`Last_Name`), 
  PRIMARY KEY (`UserID`), 
  UNIQUE (`UserID`), 
  INDEX (`City`), 
  UNIQUE (`Zip_Code`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Users'
#

# 0 records

