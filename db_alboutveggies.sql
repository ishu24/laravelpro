-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 10:45 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alboutveggies`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Areaid` int(5) NOT NULL,
  `Areaname` varchar(50) NOT NULL,
  `Isdisplay` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Areaid`, `Areaname`, `Isdisplay`) VALUES
(1, 'Bapunager', b'1'),
(2, 'S.G', b'0'),
(3, 'Univercity Road', b'1'),
(4, 'Navrangpura', b'1'),
(5, 'Vastrapur', b'1'),
(6, 'Ashram road', b'1'),
(7, 'Paldi', b'1'),
(8, 'saraspur', b'1'),
(9, 'Ellis Bridge', b'1'),
(10, 'Ghatlodiya', b'1'),
(11, 'Gulbaitekra', b'1'),
(12, 'Naranpura', b'1'),
(13, 'vadaj', b'1'),
(14, 'vasna', b'1'),
(15, 'naroda ', b'1'),
(16, 'narol ', b'1'),
(17, 'ranip', b'1'),
(18, 'Bopal', b'1'),
(19, 'sabarmati', b'1'),
(20, 'Shahibaug', b'1'),
(23, 'Gurukul', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Categoryid` int(5) NOT NULL,
  `Categoryname` varchar(50) NOT NULL,
  `Imagepath` varchar(50) NOT NULL,
  `Isdisplay` bit(1) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Categoryid`, `Categoryname`, `Imagepath`, `Isdisplay`, `Description`) VALUES
(1, 'vegetables', '../img/vegetables.jpg', b'1', 'Fresh vegetables hand picked just for you.'),
(2, 'Fruits', '../img/fruits.jpg', b'1', 'Fresh handpicked fruits form the best farms in Gujarat. '),
(3, 'Herbs', '../img/herbs.jpg', b'1', 'Fragrant herbs for taste and health.');

-- --------------------------------------------------------

--
-- Table structure for table `measuretype`
--

CREATE TABLE `measuretype` (
  `Measuretypeid` int(5) NOT NULL,
  `Measuretypevalue` varchar(50) NOT NULL,
  `Isdisplay` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measuretype`
--

INSERT INTO `measuretype` (`Measuretypeid`, `Measuretypevalue`, `Isdisplay`) VALUES
(1, 'kg', b'1'),
(2, 'gm', b'1'),
(3, 'pc', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Orderid` int(5) NOT NULL,
  `DOR` datetime NOT NULL,
  `Userid` int(5) NOT NULL,
  `Orderstatusid` int(5) NOT NULL,
  `Totalprice` int(5) NOT NULL,
  `Ordermode` varchar(15) NOT NULL,
  `DBuserid` int(5) NOT NULL,
  `DOD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Orderid`, `DOR`, `Userid`, `Orderstatusid`, `Totalprice`, `Ordermode`, `DBuserid`, `DOD`) VALUES
(5, '2015-11-29 06:09:27', 2, 3, 120, 'From-Balance', 0, '2015-11-29'),
(6, '2015-11-29 06:11:40', 2, 4, 120, 'From-Balance', 3, '2015-11-29'),
(7, '2015-11-29 11:12:54', 2, 5, 110, 'From-Balance', 3, '2015-11-29'),
(8, '2015-12-03 03:50:30', 4, 6, 50, 'COD', 5, '2016-01-02'),
(9, '2015-11-30 05:01:21', 2, 7, 150, 'From-Balance', 5, '2015-11-30'),
(10, '2015-12-03 05:39:39', 2, 8, 30, 'From-Balance', 0, '2015-12-02'),
(11, '2015-12-03 05:43:57', 2, 9, 100, 'From-Balance', 0, '2015-12-03'),
(12, '2015-12-03 05:47:57', 2, 10, 145, 'From-Balance', 3, '2015-12-02'),
(13, '2015-12-02 05:52:32', 2, 11, 90, 'From-Balance', 0, '2015-12-03'),
(15, '2015-12-03 03:00:17', 7, 12, 44, 'COD', 0, '2015-12-04'),
(18, '2015-12-17 10:07:09', 2, 15, 320, 'From-Balance', 3, '2015-12-18'),
(19, '2015-12-17 10:19:53', 2, 16, 56, 'From-Balance', 3, '2015-12-18'),
(20, '2015-12-17 12:32:03', 7, 17, 156, 'COD', 3, '2015-12-17'),
(21, '2015-12-21 03:59:56', 2, 1, 816, 'From-Balance', 0, '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Orderdetailid` int(5) NOT NULL,
  `Orderid` int(5) NOT NULL,
  `Productid` int(5) NOT NULL,
  `Qty` int(5) NOT NULL,
  `Measuretypeid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`Orderdetailid`, `Orderid`, `Productid`, `Qty`, `Measuretypeid`) VALUES
(6, 5, 21, 2, 1),
(7, 6, 21, 2, 1),
(8, 7, 20, 1, 1),
(9, 7, 22, 1, 1),
(10, 8, 22, 1, 1),
(11, 9, 18, 500, 2),
(12, 9, 15, 500, 2),
(13, 10, 13, 200, 2),
(14, 11, 28, 2, 1),
(15, 11, 27, 500, 2),
(16, 12, 31, 2, 1),
(17, 12, 34, 500, 2),
(18, 13, 7, 500, 2),
(19, 15, 1, 2, 1),
(22, 18, 3, 1, 1),
(23, 18, 6, 1, 3),
(24, 18, 15, 2, 1),
(25, 18, 12, 100, 2),
(26, 19, 1, 1, 1),
(27, 19, 2, 500, 2),
(28, 20, 15, 1, 1),
(29, 20, 4, 24, 3),
(30, 21, 2, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `Orderstatusid` int(5) NOT NULL,
  `Orderid` int(5) NOT NULL,
  `Orderstate` varchar(50) NOT NULL,
  `Isdisplay` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`Orderstatusid`, `Orderid`, `Orderstate`, `Isdisplay`) VALUES
(3, 5, 'Accepted', b'1'),
(4, 6, 'Delivered', b'1'),
(5, 7, 'Delivered', b'1'),
(6, 8, 'pending', b'1'),
(7, 9, 'Delivered', b'1'),
(8, 10, 'pending', b'1'),
(9, 11, 'pending', b'1'),
(10, 12, 'pending', b'1'),
(11, 13, 'Delivered', b'1'),
(12, 15, 'pending', b'1'),
(15, 18, 'pending', b'1'),
(16, 19, 'pending', b'1'),
(17, 20, 'Delivered', b'1'),
(18, 21, 'pending', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Productid` int(5) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `Actualprice` int(5) NOT NULL,
  `Discount` int(5) NOT NULL DEFAULT '0',
  `Offerprice` int(5) NOT NULL,
  `Categoryid` int(5) NOT NULL,
  `Imagepath` varchar(50) NOT NULL,
  `Isdisplay` bit(1) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Qty` int(5) NOT NULL,
  `Measuretypeid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Productid`, `Productname`, `Actualprice`, `Discount`, `Offerprice`, `Categoryid`, `Imagepath`, `Isdisplay`, `Description`, `Qty`, `Measuretypeid`) VALUES
(1, 'potato', 30, 2, 22, 1, '../img/potato.png', b'1', 'asdss', 1, 1),
(2, 'apple', 80, 1, 34, 2, '../img/apple.jpg', b'1', 'lalalala', 500, 2),
(3, 'mango', 70, 0, 70, 2, '../img/mango.jpg', b'0', '', 1, 1),
(4, 'banana', 50, 0, 48, 2, '../img/banana.jpg', b'1', '', 12, 3),
(5, 'Chicku', 65, 0, 60, 2, '../img/chicko.png', b'1', '', 1, 1),
(6, 'pineapple', 110, 0, 110, 2, '../img/pineapple.png', b'1', '', 1, 3),
(7, 'pomegranet', 90, 0, 90, 2, '../img/pomegranate.png', b'1', '', 500, 2),
(8, 'kiwi', 145, 0, 145, 2, '../img/kiwi.jpg', b'1', '', 3, 3),
(9, 'basil', 15, 0, 15, 3, '../img/basil.jpg', b'1', '', 100, 2),
(10, 'mint', 17, 0, 15, 3, '../img/mint.jpeg', b'1', '', 100, 2),
(11, 'dill', 15, 0, 15, 3, '../img/dill.jpg', b'1', '', 100, 2),
(12, 'coriender', 20, 0, 20, 3, '../img/coriander.jpg', b'1', '', 100, 2),
(13, 'ginger', 15, 0, 15, 3, '../img/ginger.jpg', b'1', '', 100, 2),
(14, 'garlic', 45, 0, 45, 3, '../img/garlic.jpg', b'1', '', 250, 2),
(15, 'tomato', 60, 0, 60, 1, '../img/tomato.jpg', b'1', '', 1, 1),
(16, 'bottel gourd', 60, 0, 60, 1, '../img/bottelgourd.jpg', b'1', '', 1, 1),
(17, 'cabbage', 25, 0, 25, 1, '../img/cabbage.jpg', b'1', '', 500, 2),
(18, 'Watermelon', 50, 20, 40, 2, '../img/Watermelon.png', b'1', '', 1, 3),
(19, 'STRAWBERRY ', 40, 10, 36, 2, '../img/STRAWBERRY.png', b'1', '', 500, 2),
(20, 'RASPBERRY ', 50, 10, 45, 2, '../img/RASPBERRY.png', b'1', '', 500, 2),
(21, 'PEACH ', 30, 10, 45, 2, '../img/PEACH.png', b'1', '', 500, 2),
(22, 'PEAR ', 50, 10, 27, 2, '../img/PEAR.png', b'1', '', 500, 2),
(23, 'ORANGE ', 30, 10, 27, 2, '../img/ORANGE.png', b'1', '', 1, 1),
(24, 'GRAPES ', 50, 10, 45, 2, '../img/GRAPES.png', b'1', '', 2, 1),
(25, 'CHERRIES ', 50, 10, 45, 2, '../img/CHERRIES.png', b'1', '', 500, 2),
(26, 'AVOCADO ', 20, 10, 17, 2, '../img/AVOCADO.png', b'1', '', 500, 2),
(27, 'BEANS ', 20, 0, 20, 1, '../img/BEANS.png', b'1', '', 500, 2),
(28, 'BROCCOLI ', 50, 20, 40, 1, '../img/BROCCOLI.png', b'1', '', 1, 1),
(29, 'CARROT ', 80, 10, 77, 1, '../img/CARROT.png', b'1', '', 12, 3),
(30, 'CAULIFLOWER ', 30, 10, 27, 1, '../img/CAULIFLOWER.png', b'1', '', 1, 3),
(31, 'CUCUMBER ', 55, 11, 44, 1, '../img/CUCUMBER.png', b'1', '', 1, 1),
(32, 'PEAS ', 27, 0, 27, 1, '../img/PEAS.png', b'1', '', 2, 1),
(33, 'Brinjal ', 80, 10, 77, 1, '../img/Brinjal.png', b'1', '', 1, 1),
(34, 'Beet ', 60, 10, 57, 1, '../img/Beet.png', b'1', '', 500, 2),
(35, 'Bitter-Gourd', 20, 10, 17, 1, '../img/Bitter-Gourd.png', b'1', '', 1, 1),
(36, 'Capsicum', 20, 0, 20, 1, '../img/Capsicum.png', b'1', '', 500, 2),
(37, 'Mushrooms ', 30, 10, 27, 1, '../img/Mushrooms.png', b'1', '', 1, 1),
(38, 'Onions ', 80, 0, 80, 1, '../img/Onions.png', b'1', '', 500, 2),
(39, 'Ridgegourd ', 20, 10, 20, 1, '../img/Ridgegourd.png', b'1', '', 1, 1),
(40, 'Sweet-potato', 30, 0, 30, 1, '../img/Sweet-potato.png', b'1', '', 500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE `recharge` (
  `Rechargeid` int(5) NOT NULL,
  `Userid` int(5) NOT NULL,
  `DOR` datetime NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recharge`
--

INSERT INTO `recharge` (`Rechargeid`, `Userid`, `DOR`, `Amount`) VALUES
(1, 2, '2015-11-03 05:26:14', 807.78);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Stockid` int(5) NOT NULL,
  `Stockdesc` varchar(50) NOT NULL,
  `DOS` datetime NOT NULL,
  `Productid` int(5) NOT NULL,
  `Measuretypeid` int(5) NOT NULL,
  `Stockin` int(5) NOT NULL,
  `Stockout` float NOT NULL,
  `Stock` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Stockid`, `Stockdesc`, `DOS`, `Productid`, `Measuretypeid`, `Stockin`, `Stockout`, `Stock`) VALUES
(1, 'This is costly product', '2015-11-03 12:23:34', 1, 1, 100, 3, 97),
(2, 'This is a profitable stock', '2014-12-09 03:27:12', 2, 1, 50, 12.5, 37.5),
(3, 'This is a profitable stock', '2014-12-09 03:27:12', 3, 1, 50, 0, 6),
(4, 'This is a profitable stock', '2014-12-09 03:27:12', 4, 3, 50, 24, 26),
(5, 'This is a profitable stock', '2014-12-09 03:27:12', 5, 1, 50, 0, 0),
(6, 'This is a profitable stock', '2014-12-09 03:27:12', 6, 3, 50, 0, 6),
(7, 'This is a profitable stock', '2014-12-27 03:27:12', 7, 1, 50, 44.5, 5.5),
(8, 'This is a profitable stock', '2014-12-09 03:27:12', 8, 3, 50, 45, 0),
(9, 'This is a profitable stock', '2014-12-09 03:27:12', 9, 1, 50, 45, 0),
(10, 'This is a profitable stock', '2015-01-08 07:27:12', 10, 1, 50, 45, 0),
(11, 'This is a profitable stock', '2014-12-09 03:27:12', 11, 1, 50, 45, 0),
(12, 'This is a profitable stock', '2015-02-13 08:10:19', 12, 1, 50, 44.9, 5.1),
(13, 'This is a profitable stock', '2014-12-09 03:27:12', 13, 1, 50, 45, 0),
(14, 'This is a profitable stock', '2014-12-09 03:27:12', 14, 1, 50, 45, 0),
(15, 'This is a profitable stock', '2015-03-12 03:27:12', 15, 1, 50, 44, 6),
(16, 'This is a profitable stock', '2014-12-09 03:27:12', 16, 1, 50, 44.5, 5.5),
(17, 'This is a profitable stock', '2014-12-09 03:27:12', 17, 1, 50, 45, 0),
(18, 'This is a profitable stock', '2015-05-13 05:40:06', 18, 3, 34, 32, 0),
(19, 'This is a profitable stock', '2015-05-13 05:40:06', 19, 1, 34, 32, 0),
(20, 'This is a profitable stock', '2015-05-13 05:40:06', 20, 1, 34, 32, 0),
(21, 'This is a profitable stock', '2015-05-13 05:40:06', 21, 1, 34, 32, 0),
(22, 'This is a profitable stock', '2015-05-13 05:40:06', 22, 1, 34, 32, 0),
(23, 'This is a profitable stock', '2015-05-13 05:40:06', 23, 1, 34, 32, 0),
(24, 'This is a profitable stock', '2015-05-13 05:40:06', 24, 1, 34, 32, 0),
(25, 'This is a profitable stock', '2015-05-13 05:40:06', 25, 1, 34, 32, 0),
(26, 'This is a profitable stock', '2015-05-13 05:40:06', 26, 1, 34, 32, 0),
(27, 'This is a profitable stock', '2015-05-13 05:40:06', 27, 1, 34, 31, 3),
(28, 'This is a profitable stock', '2015-05-13 05:40:06', 28, 1, 34, 32, 0),
(29, 'This is a profitable stock', '2015-05-13 05:40:06', 29, 3, 34, 32, 0),
(30, 'This is a profitable stock', '2015-05-13 05:40:06', 30, 3, 34, 32, 0),
(31, 'This is a profitable stock', '2015-05-13 05:40:06', 31, 1, 34, -0.002, 0.002),
(32, 'This is a profitable stock', '2015-05-13 05:40:06', 32, 1, 34, 32, 0),
(33, 'This is a profitable stock', '2015-05-13 05:40:06', 33, 1, 34, 32, 0),
(34, 'This is a profitable stock', '2015-05-13 05:40:06', 34, 2, 34, -0.5, 0.5),
(35, 'This is a profitable stock', '2015-05-13 05:40:06', 35, 1, 34, 32, 0),
(36, 'This is a profitable stock', '2015-05-13 05:40:06', 36, 2, 34, 32, 0),
(37, 'This is a profitable stock', '2015-05-13 05:40:06', 37, 1, 34, 32, 0),
(38, 'This is a profitable stock', '2015-05-13 05:40:06', 38, 2, 34, 32, 0),
(39, 'This is a profitable stock', '2015-05-13 05:40:06', 39, 1, 34, 32, 0),
(40, 'This is a profitable stock', '2015-05-13 05:40:06', 40, 2, 34, 32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE `tempcart` (
  `Tempid` int(5) NOT NULL,
  `Productid` int(5) NOT NULL,
  `Qty` int(5) NOT NULL,
  `Totalprice` int(7) NOT NULL,
  `Measuretypeid` int(5) NOT NULL,
  `Sid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`Tempid`, `Productid`, `Qty`, `Totalprice`, `Measuretypeid`, `Sid`) VALUES
(72, 2, 500, 34, 2, '91bveevta50dgj07se02enb1b3'),
(73, 27, 3, 120, 1, 'p0v85bjg3hrejq41muj40s78c3'),
(74, 15, 2, 120, 1, 'nalemjegaljs8g1betlo74rfk7'),
(75, 27, 5, 200, 1, 'ih4jm8t1aao9dj84evam1dp245'),
(76, 6, 21, 2310, 3, 'ih4jm8t1aao9dj84evam1dp245');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Usertypeid` int(5) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Mobileno` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Areaid` int(5) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `DOL` datetime NOT NULL,
  `Visitcnt` int(5) NOT NULL,
  `Isauthenticate` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Password`, `Usertypeid`, `Fname`, `Lname`, `Mobileno`, `Address`, `Areaid`, `Email`, `DOB`, `DOL`, `Visitcnt`, `Isauthenticate`) VALUES
(1, 'Aditi123', 'aditi11', 1, 'Aditi', 'Gupta', 9727589525, '6-A shyam society ,Pragtinager', 4, 'aditi96@gmial.com', '1996-02-09', '2017-12-29 06:39:03', 42, b'1'),
(2, 'ish', 'ish24', 2, 'Ishani', 'Vora', 9409541234, 'D/9-A Panchratna Appt.,\r\nOpp. Sunview Tower;', 10, 'voraishani24@gmail.com', '1996-02-24', '2015-12-21 04:01:08', 21, b'1'),
(3, 'dip1', 'dip123', 3, 'dip', 'halani', 2147483647, 'sec-3-B greenpark society', 5, 'diphalani@gmail.com', '2008-01-30', '2018-01-04 11:39:09', 9, b'1'),
(4, 'maitry', 'mai123', 2, 'Maitri', 'Desai', 9687277377, 'D-7 prem appt.,\r\nrannnapark society,', 10, 'mari27@yahoo.com', '1995-05-27', '2015-11-29 03:57:19', 4, b'1'),
(5, 'lalu', 'lalu123', 3, 'lalu', 'prasad', 2341567845, '101 hirabag society,', 8, 'lalu17@gmail.com', '1985-02-17', '2015-12-02 11:29:18', 1, b'0'),
(6, 'jainy123', 'jain30', 2, 'Jainy', 'Juyal', 9426354503, 'E-23 Avadh Appt.,\r\nOpp. Sunview tower', 4, 'jainyvora@yahoo.com', '1988-06-17', '2015-11-29 02:14:29', 6, b'0'),
(7, 'shan', 'shan123', 2, 'shanker', 'pillai', 9834231567, '6-H pratiksha appt.,\r\n Mansi circle', 5, 'shanker23@gmail.com', '1987-04-23', '2015-12-17 12:32:46', 4, b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Areaid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Categoryid`);

--
-- Indexes for table `measuretype`
--
ALTER TABLE `measuretype`
  ADD PRIMARY KEY (`Measuretypeid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Orderid`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Orderdetailid`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`Orderstatusid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Productid`);

--
-- Indexes for table `recharge`
--
ALTER TABLE `recharge`
  ADD PRIMARY KEY (`Rechargeid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Stockid`);

--
-- Indexes for table `tempcart`
--
ALTER TABLE `tempcart`
  ADD PRIMARY KEY (`Tempid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `Areaid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Categoryid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `measuretype`
--
ALTER TABLE `measuretype`
  MODIFY `Measuretypeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Orderid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Orderdetailid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `Orderstatusid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Productid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `recharge`
--
ALTER TABLE `recharge`
  MODIFY `Rechargeid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `Stockid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tempcart`
--
ALTER TABLE `tempcart`
  MODIFY `Tempid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
