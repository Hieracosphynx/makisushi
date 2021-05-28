-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 02:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makisushi_official_3.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `custinfo`
--

CREATE TABLE `custinfo` (
  `uname` char(10) NOT NULL,
  `password` varchar(80) NOT NULL,
  `merit` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `FoodName` char(100) DEFAULT NULL,
  `UnitPrice` double(6,2) DEFAULT NULL,
  `FoodID` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`FoodName`, `UnitPrice`, `FoodID`) VALUES
('Grilled Chicken With Terriyaki Sauce', 189.00, 'ATF1'),
('Salmon Terriyaki/Teppanyaki', 299.00, 'ATF10'),
('Sizzling Blue Marlin Steak', 289.00, 'ATF11'),
('Sizzling Shrimp Teppanyaki', 289.00, 'ATF12'),
('Sizzling Squid Teppanyaki', 279.00, 'ATF13'),
('Mixed Seafood Teppanyaki', 339.00, 'ATF14'),
('Makisushi Special Don Buri', 339.00, 'ATF15'),
('Fried Spare Ribs With Teriyaki Sauce', 199.00, 'ATF2'),
('Top Over Fried Rice With Ebi Tempura', 199.00, 'ATF3'),
('Chirashidon', 229.00, 'ATF4'),
('Mixed Tempura With Tuna/Salmon Sashimi', 229.00, 'ATF5'),
('Gyutendon', 239.00, 'ATF6'),
('Beef Terriyaki', 229.00, 'ATF7'),
('Yakiniku (Beef Tapa)', 229.00, 'ATF8'),
('Tuna Terriyaki/Teppanyaki', 239.00, 'ATF9'),
('Regular Drink', 50.00, 'D1'),
('Red Iced Tea', 65.00, 'D10'),
('Green Tea', 65.00, 'D11'),
('Mineral', 30.00, 'D12'),
('San Mig Light/Pale Pilsen', 68.00, 'D13'),
('Brewed Coffee', 85.00, 'D14'),
('Japanese Coffee', 68.00, 'D15'),
('Fit and Right', 50.00, 'D2'),
('C2', 33.00, 'D3'),
('Mango Juice', 65.00, 'D4'),
('Pineapple Juice', 60.00, 'D5'),
('Sola', 68.00, 'D6'),
('Stellina', 68.00, 'D7'),
('Ice Tea Regular', 55.00, 'D8'),
('Ice Tea Bottomless', 75.00, 'D9'),
('Leche Flan', 58.00, 'DS1'),
('Coffee Jelly Dessert', 55.00, 'DS2'),
('Mango Panna Cotta', 55.00, 'DS3'),
('Scoop of Ice Cream', 55.00, 'DS4'),
('Mixed Maki', 135.00, 'HC1'),
('MIxed Sashimi', 375.00, 'HC3'),
('Mixed Sushi Maki', 255.00, 'HCA2'),
('Mixed Sushi and Sashimi', 355.00, 'HCB2'),
('Ika Fry (Squid)', 175.00, 'HS1'),
('Agedashi (Fried Tofu)', 175.00, 'HS2'),
('Seafood Fried Rice', 75.00, 'HS3'),
('Japanese Rice', 53.00, 'HS4'),
('Sukiyaki Soup', 309.00, 'HSL1'),
('MIso', 50.00, 'HSL10'),
('Yakisoba', 309.00, 'HSL2'),
('Spicy Fried Noodles', 345.00, 'HSL3'),
('Beef Terriyaki Noodles', 345.00, 'HSL4'),
('Gyoza', 135.00, 'HSL5'),
('Kakiage', 280.00, 'HSL6'),
('Asohos', 280.00, 'HSL7'),
('Kani Tempura', 265.00, 'HSL8'),
('Ebi Tempura', 335.00, 'HSL9'),
('Sukiyaki Soup', 165.00, 'HSS1'),
('MIso', 28.00, 'HSS10'),
('Yakisoba', 165.00, 'HSS2'),
('Spicy Fried Noodles', 185.00, 'HSS3'),
('Beef Terriyaki Noodles', 185.00, 'HSS4'),
('Gyoza', 75.00, 'HSS5'),
('Kakiage', 145.00, 'HSS6'),
('Asohos', 145.00, 'HSS7'),
('Kani Tempura', 135.00, 'HSS8'),
('Ebi Tempura', 175.00, 'HSS9'),
('Futo Maki', 145.00, 'MR1'),
('California Maki', 195.00, 'MRL1'),
('Crunchy Kani Salad', 280.00, 'MRL10'),
('Tonkatsu Roll', 165.00, 'MRL11'),
('Cowboy Roll', 290.00, 'MRL12'),
('Philadelphia', 320.00, 'MRL13'),
('Tuna (Tekka)', 195.00, 'MRL2'),
('Tamago Rolls (Sweet Egg)', 180.00, 'MRL3'),
('Kani (Crabstick)', 180.00, 'MRL4'),
('Salmon (Sake)', 280.00, 'MRL5'),
('Crunchy Ebi Tempura', 290.00, 'MRL6'),
('Crunchy California Maki', 260.00, 'MRL7'),
('Crunchy Kani', 240.00, 'MRL8'),
('Crunchy Veggie Salad', 220.00, 'MRL9'),
('California Maki', 99.00, 'MRS1'),
('Crunchy Kani Salad', 145.00, 'MRS10'),
('Tonkatsu Roll', 155.00, 'MRS11'),
('Cowboy Roll', 155.00, 'MRS12'),
('Philadelphia', 170.00, 'MRS13'),
('Tuna (Tekka)', 99.00, 'MRS2'),
('Tamago Rolls (Sweet Egg)', 95.00, 'MRS3'),
('Kani (Crabstick)', 95.00, 'MRS4'),
('Salmon (Sake)', 145.00, 'MRS5'),
('Crunchy Ebi Tempura', 155.00, 'MRS6'),
('Crunchy California Maki', 135.00, 'MRS7'),
('Crunchy Kani', 125.00, 'MRS8'),
('Crunchy Veggie Salad', 115.00, 'MRS9'),
('Tonkotsu Ramen', 269.00, 'RN1'),
('Chessy Ramen', 239.00, 'RN2'),
('Seafood Ramen', 189.00, 'RN3'),
('Beef Ramen', 189.00, 'RN4'),
('Tempura Ramen', 189.00, 'RN5'),
('Mushroom Miso Ramen', 169.00, 'RN6'),
('Mango Shake', 99.00, 'S1'),
('Lychee Shake', 99.00, 'S2'),
('Cucumber Lemon Shake', 99.00, 'S3'),
('Red Iced Tea Shake', 95.00, 'S4'),
('Iced Tea Shake', 85.00, 'S5'),
('Iced Coffee Jelly', 139.00, 'S6'),
('Sake (Salmon)', 229.00, 'SH1'),
('Maguro (Tuna)', 215.00, 'SH2'),
('Kani (Crabstick)', 185.00, 'SH3'),
('Tamago (Sweet Egg)', 175.00, 'SH4'),
('Karaage (chicken) Salad', 175.00, 'SL1'),
('Special Kani Salad', 230.00, 'SLL1'),
('Special Kani Salad', 120.00, 'SLS1'),
('Sukiyaki Soup With Cali Maki', 179.00, 'SM1'),
('Yakisoba With Cali Maki & Squid Ring', 179.00, 'SM2'),
('Yakisoba With Cali Maki & Gyoze', 179.00, 'SM3'),
('Yakisoba With Cali Maki & Fried Tofu', 179.00, 'SM4'),
('Yakisoba With Cali Maki & Ebi Tempura', 199.00, 'SM5'),
('16pcs California Maki, Seafood Fried Rice, Mixed Seafood Teppanyaki, Beef Teriyaki Noodles & 6pcs Eb', 1129.00, 'SMV3'),
('Sake (Salmon)', 135.00, 'SS1'),
('Maguro (Tuna)', 125.00, 'SS2'),
('Ebi (Shrimp)', 115.00, 'SS3'),
('Kani (Crabstick)', 110.00, 'SS4'),
('Tamago (Sweet Egg)', 110.00, 'SS5'),
('MISONO/TEPPANYAKI, Choice of (Beef, Pork, Chicken, Tuna, Squid) 3pcs Ebi Tempura and 2 Japanese Rice', 349.00, 'SVM1'),
('8pcs California Maki, Seafood Fried Rice, Tonkatsu/Torikatsu, Yakisoba & 4pcs Ebi Tempura', 599.00, 'SVM2'),
('Seafood Fried With Gyoza (Fried Dumpling)', 89.00, 'VM1'),
('Seafood Fried Rice w/ ASOHOS (Fish Fillet)', 89.00, 'VM2'),
('Seafood Fried Rice With KANI (Crabsticks)', 89.00, 'VM3'),
('Seafood Fried Rice With KARAAGE (Chicken)', 89.00, 'VM4'),
('Pork/Chicken Misono With Miso Soup', 119.00, 'VMA10'),
('Katsudon/Torikatsudon With Miso Soup', 119.00, 'VMA5'),
('Tonkatsu/Torikatsu With Miso Soup', 119.00, 'VMA6'),
('Katsu Curry/Torikatsu Curry With Miso Soup', 119.00, 'VMA7'),
('Pork/Chicken Terriyaki With Miso Soup', 119.00, 'VMA8'),
('Oyakudon (Chicken) With Miso Soup', 119.00, 'VMA9'),
('Pork/Chicken Misono With Miso Soup With Miso/Iced Tea', 169.00, 'VMB10'),
('Sukiyakidon With Miso/Iced Tea', 169.00, 'VMB11'),
('Beef Misono With Miso/Iced Tea', 169.00, 'VMB12'),
('Gyudon (Beef) With Miso/Iced Tea', 169.00, 'VMB13'),
('Beef Curry With Miso/Iced Tea', 189.00, 'VMB14'),
('Tuna Misono With Miso/Iced Tea', 189.00, 'VMB15'),
('Katsudon/Torikatsudon With Miso/Iced Tea', 169.00, 'VMB5'),
('Tonkatsu/Torikatsu  With Miso/Iced Tea', 169.00, 'VMB6'),
('Katsu Curry/Torikatsu Curry With Miso/Iced Tea', 169.00, 'VMB7'),
('Pork/Chicken Terriyaki With Miso/Iced Tea', 169.00, 'VMB8'),
('Oyakudon (Chicken) With Miso/Iced Tea', 169.00, 'VMB9'),
('Pork/Chicken Misono With Miso Soup With Miso Soup/Ice Tea/Kani Sarada', 209.00, 'VMC10'),
('Sukiyakidon With Miso Soup/Ice Tea/Kani Sarada', 209.00, 'VMC11'),
('Beef Misono With Miso Soup/Ice Tea/Kani Sarada', 209.00, 'VMC12');

-- --------------------------------------------------------

--
-- Table structure for table `misc`
--

CREATE TABLE `misc` (
  `uname` varchar(20) DEFAULT NULL,
  `FeedBack` varchar(500) DEFAULT NULL,
  `time_stamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `FoodID` char(15) DEFAULT NULL,
  `Quantity` int(5) DEFAULT NULL,
  `OrderNo` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `OrderNo` int(5) UNSIGNED NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `TableNum` int(5) DEFAULT NULL,
  `WNO` int(5) DEFAULT NULL,
  `Queue` int(1) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `WNO` int(5) UNSIGNED NOT NULL,
  `wname` varchar(20) DEFAULT NULL,
  `wpass` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custinfo`
--
ALTER TABLE `custinfo`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`WNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `OrderNo` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `waiter`
--
ALTER TABLE `waiter`
  MODIFY `WNO` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
