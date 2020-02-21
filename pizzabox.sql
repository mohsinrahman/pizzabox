-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3316
-- Generation Time: Feb 21, 2020 at 09:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pizzaBox`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `Apartment` varchar(5) DEFAULT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `Street`, `Apartment`, `City`) VALUES
(8, 'm', ',', '.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `Name`, `Description`) VALUES
(1, 'Breakfast', 'Includes various types of pizza'),
(2, 'Lunch', 'Includes various types of drinks');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `FullName` varchar(40) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `ShippingType` varchar(10) NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `ID`, `ShippingType`, `Date`) VALUES
(69, 8, 'Foodora', '02/21/2020 9:08 PM');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(100) NOT NULL,
  `CategoryID` int(10) NOT NULL,
  `ProductName` varchar(15) NOT NULL,
  `ProductDescription` text NOT NULL,
  `UnitPrice` int(11) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `UnitsInStock` int(200) NOT NULL,
  `ProductImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `ProductName`, `ProductDescription`, `UnitPrice`, `Category`, `UnitsInStock`, `ProductImage`) VALUES
(1, 1, 'Margherita', 'Typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil.', 100, 'Breakfast', 100, 'pizza-1-600x600.png'),
(2, 1, 'California', 'It is made with mustard, ricotta, pate, and red pepper', 120, 'Breakfast', 100, 'pizza-2-600x600.png'),
(3, 2, 'Detroit', 'Detroit pizza is first topped with pepperoni, followed by brick cheese which is spread to the very edges of the pan, yielding a caramelized cheese perimeter.', 80, 'Lunch', 100, 'pizza-3-600x600.png'),
(4, 4, 'Cola', 'Bottle and cans drinks, and Zero Cola.', 90, 'Desert', 100, 'menu-img1.jpg'),
(5, 3, 'Sicilian Pizza', 'It is a cut of pizza with pillowy dough, a crunchy crust, and robust tomato sauce. ', 20, 'Dinner', 200, 'pizza-4-600x600.png'),
(6, 4, 'Pepsi', 'Bottle an cans of drinks.', 20, 'Desert', 200, 'pepsi.png'),
(7, 2, 'Italian Pizza', 'Two fried eggs with cheese & two breakfast meats made to perfection', 40, 'Lunch', 2, 'pizza-5-600x600.png'),
(8, 5, 'Veg Pizza', 'Two fried eggs with cheese & two breakfast meats made to perfection', 50, 'Vegetable', 100, 'pizza-4-600x600.png'),
(12, 5, 'Pizza Jalapino', 'Extra spicy and hot Pizza Without Kabab', 88, 'Vegetable', 300, 'menu-img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `IsAdmin` varchar(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `IsAdmin`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, 'Yes', 'Mohsin', 'Rahman', 'mohsin@gmail.com', 'dbf9e842995323d3aff153ed94e6a7bd'),
(2, 'Yes', 'Amir', 'Shishehgari', 'amir@gmail.com', '507f513353702b50c145d5b7d138095c'),
(5, 'Yes', 'Humayun ', 'Bayani', 'humayun@gmail.com', 'B43CE67C7299636A7983EB04440DA0AF'),
(8, 'Yes', 'Polina', 'Yaromchyk', 'polina@gmail.com', 'd0b5e7c121c39c168ab1ac800fe6c281'),
(9, 'No', 'John', 'Doe', 'john@gmail.com', 'DCC7A642511E1FD49C9E215CBFF094BD'),
(10, 'No', 'Peter', 'Parker', 'peter@gmail.com', 'D0B5E7C121C39C168AB1AC800FE6C281');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
