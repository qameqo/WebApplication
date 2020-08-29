-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2020 at 01:06 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_GDragon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE `Brand` (
  `idBrand` int(20) NOT NULL,
  `Name_Brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`idBrand`, `Name_Brand`) VALUES
(8, 'BMW'),
(9, 'CHEVROLET'),
(1, 'FORD'),
(3, 'HONDA'),
(39, 'ISUZU'),
(4, 'MAZDA'),
(12, 'MERCEDES BENZ'),
(40, 'MG'),
(5, 'MITSUBISHI'),
(6, 'NISSAN'),
(41, 'SUBARU '),
(16, 'SUZUKI'),
(2, 'TOYOTA');

-- --------------------------------------------------------

--
-- Stand-in structure for view `Car2`
-- (See below for the actual view)
--
CREATE TABLE `Car2` (
`Name_Brand` varchar(255)
,`Name_Gen` varchar(100)
,`idRental` int(20)
,`Datebooking` date
,`startDate` date
,`endDate` date
,`ReturnDate` date
,`totalprice` float
,`Carownerincome` int(11)
,`Companyincome` int(11)
,`PriceCar` int(11)
,`PriceIns` int(11)
,`PriceDe` int(11)
,`PriceOver` int(11)
,`PriceVat` int(11)
,`PriceFive` int(11)
,`Fines_price` int(11)
,`idCarregis` int(11)
,`idCarregis2` int(11)
,`id_status` int(11)
,`id_Member` int(20)
,`id_Employee` int(20)
,`id_Employee_2` int(11)
,`id_Employee_3` int(11)
,`id_Insurance` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `Carregis`
--

CREATE TABLE `Carregis` (
  `idCarregis` int(20) NOT NULL,
  `Yearcar` year(4) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Gear` varchar(20) NOT NULL,
  `CC` int(10) DEFAULT NULL,
  `Mileage` int(10) NOT NULL,
  `License` varchar(10) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Yearlicense` year(4) NOT NULL,
  `Carbody` varchar(17) NOT NULL,
  `Dayfirst` date DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `RentalPrice` int(100) DEFAULT NULL,
  `Bankname` varchar(100) DEFAULT NULL,
  `Bankaccount` varchar(255) DEFAULT NULL,
  `idBrand` int(15) NOT NULL,
  `id_Gen` int(20) NOT NULL,
  `id_Status` int(10) NOT NULL,
  `id_Member` int(10) DEFAULT NULL,
  `id_Employee` int(10) DEFAULT NULL,
  `id_Seat` int(20) DEFAULT NULL,
  `idFuel` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Carregis`
--

INSERT INTO `Carregis` (`idCarregis`, `Yearcar`, `Color`, `Gear`, `CC`, `Mileage`, `License`, `Province`, `Yearlicense`, `Carbody`, `Dayfirst`, `StartDate`, `EndDate`, `RentalPrice`, `Bankname`, `Bankaccount`, `idBrand`, `id_Gen`, `id_Status`, `id_Member`, `id_Employee`, `id_Seat`, `idFuel`) VALUES
(139, 2020, 'น้ำเงิน', 'automatic & manual', 2400, 1000, 'กพ5957', 'กรุงเทพมหานคร', 2020, 'JT654NT1234567855', '2020-03-14', '2020-03-14', '2020-06-10', 1400, 'ออมสิน', '1256485487', 5, 340, 5, 72, 3, 2, 63),
(142, 2019, 'ขาว', 'automatic & manual', 2000, 1000, 'กช4571', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567847', '2020-03-16', '2020-03-16', '2020-06-12', 17000, 'ออมสิน', '8745645785', 12, 106, 5, 61, 8, 2, 12),
(143, 2019, 'ขาว', 'automatic & manual', 2400, 1000, 'as4875', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567858', '2020-03-16', '2020-03-16', '2020-06-12', 1100, 'ออมสิน', '8745645785', 2, 260, 5, 61, 8, 2, 68),
(144, 2019, 'ขาว', 'automatic & manual', 2500, 1000, 'as2312', 'กระบี่', 2019, 'JT654NT1234567857', '2020-03-16', '2020-03-16', '2020-06-12', 2300, 'ออมสิน', '8745645785', 9, 408, 5, 61, 8, 7, 62),
(145, 2019, 'แดง', 'automatic & manual', 2000, 1000, 'as1547', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567856', '2020-03-16', '2020-03-16', '2020-06-12', 2600, 'ออมสิน', '8745645785', 6, 50, 5, 61, 8, 4, 20),
(146, 2019, 'ขาว', 'automatic & manual', 1500, 1000, 'as1544', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567859', '2020-03-16', '2020-03-16', '2020-06-12', 1500, 'ออมสิน', '8745645785', 3, 228, 5, 61, 8, 7, 12),
(147, 2019, 'เทา', 'automatic & manual', 2800, 1000, 'op1234', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567814', '2020-03-16', '2020-03-16', '2020-06-12', 2500, 'ออมสิน', '8745645785', 2, 21, 5, 61, 8, 15, 62),
(148, 2019, 'ชมพู', 'automatic & manual', 1500, 1899, 'dw1241', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567147', '2020-03-16', '2020-03-16', '2020-06-12', 1000, 'ออมสิน', '8745645785', 40, 154, 8, 61, 8, 5, 12),
(149, 2019, 'แดง', 'automatic & manual', 1500, 1000, 'pl154', 'กรุงเทพมหานคร', 2019, 'JT654NT1234567258', '2020-03-16', '2020-03-16', '2020-06-12', 4100, 'ออมสิน', '87897897425', 8, 60, 5, 61, 8, 5, 12),
(150, 2016, 'ดำ', 'automatic', 2000, 15000, 'กด1234', 'กรุงเทพมหานคร', 2016, 'DFF44444444444444', '2020-03-17', '2020-03-17', '2020-06-13', 2000, 'กรุงเทพ', '56757656757', 2, 16, 5, 84, 3, 5, 12),
(151, 2017, 'น้ำเงิน', 'automatic', 1500, 12222, 'กด1243', 'กรุงเทพมหานคร', 2017, 'JT654NT1234567844', '2020-03-26', '2020-03-26', '2020-06-23', 1000, 'กรุงเทพ', '789789789', 3, 226, 5, 84, 3, 5, 12),
(153, 2020, 'ขาว', 'automatic & manual', 1500, 123546, '123456', 'กระบี่', 2020, '13245498754613232', '2020-04-20', '2020-04-20', '2020-07-17', 5400, 'กรุงเทพ', '3125468971', 8, 69, 5, 61, 3, 7, 12),
(154, 2015, 'แดง', 'automatic', 1200, 150000, 'กพ1234', 'กาฬสินธุ์', 2015, 'AAS44444444444444', '2020-05-02', '2020-05-02', '2020-07-29', 500, 'ธนชาต', '1523456456', 16, 122, 5, 84, NULL, 5, 12),
(155, 2019, 'ดำ', 'automatic & manual', 1500, 1000, 'รน5555', 'กรุงเทพมหานคร', 2019, 'sa123456789123456', '2020-05-08', '2020-05-08', '2020-08-04', 1100, 'กรุงเทพ', '3125468971', 40, 156, 5, 102, 3, 5, 12),
(156, 2019, 'ขาว', 'automatic & manual', 1500, 1245, 'as1548', 'กรุงเทพมหานคร', 2019, 'sw123456789123456', '2020-05-08', '2020-05-08', '2020-08-04', 1300, 'กรุงศรีอยุธยา', '3125468971', 40, 156, 5, 103, 3, 5, 12),
(157, 2019, 'ขาว', 'manual', 2500, 1000, '2ขก1611', 'กระบี่', 2020, 'RH123456789123456', NULL, NULL, NULL, 2000, 'กรุงเทพ', '3125468971', 5, 335, 3, 84, 2, 5, 62),
(158, 2020, 'แดง', 'automatic & manual', 1200, 1000, 'as1542', 'กรุงเทพมหานคร', 2020, 'RH123456789123458', '2020-05-12', '2020-05-12', '2020-08-09', 1200, 'ออมสิน', '3125468971', 16, 393, 13, 99, 3, 5, 12),
(159, 2019, 'แดง', 'automatic', 1500, 12500, 'หก1222', 'กรุงเทพมหานคร', 2019, 'AAAA1477777777777', '2020-05-12', '2020-05-12', '2020-08-09', 900, 'กรุงเทพ', '145145145', 3, 221, 5, 106, 3, 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `id_Employee` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `F_Name` varchar(255) NOT NULL,
  `L_Name` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `id_position` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`id_Employee`, `Username`, `Password`, `F_Name`, `L_Name`, `Address`, `Tel`, `id_position`, `Status`) VALUES
(2, 'admin', '1234', '', '', '', '', 4, 1),
(3, 'emp', '1234', 'Teetouch', 'Rongmuang', '111/268', '0819797097', 1, 1),
(4, 'tech', '1234', 'gamego', 'atipat', '111/268', '0819797097', 2, 1),
(6, 'io', '1234', 'saint', 'peter', '156789', '0211111111', 3, 1),
(8, 'emp2', '1234', 'asd', 'asd', 'asd', 'asd', 1, 1),
(15, 'qqq', '111', 'game', '123', 'aaa', '0819797097', 3, 0),
(17, 't', '1', 't', 's', '1', '1', 2, 1),
(19, '123', '123', '123', '123', '123', '123', 2, 1),
(21, 'emp10', '1234', 'mo', 'ok', 'asd', '0893216545', 1, 1),
(22, 'emp11', '1234', 'good', 'project', '1234', '1234567890', 1, 1),
(23, 'emp3', '1234', 'pra', 'yuth', '124', '02', 1, 1),
(24, 'tech3', '1234', 'supak', 'todd', '123 dindeang', '0893216545', 2, 1),
(25, 'io5', '1234', 'yuth', 'tana', '159357', '1593574862', 3, 0),
(26, 'io10', '1234', 'washira', 'longkorn', 'dusit', '1010101010', 3, 0),
(27, 'good', '1234', 'me', 'you', '1682', '0889745614', 3, 1),
(28, 'topo', '1234', 'to', 'op', '1234', '1234567890', 3, 1),
(29, 'covid', '1234', 'tee', 'asa', '1682', '0897894561', 3, 1),
(30, 'yuy', '1234', 'try', 'rye', '12aw', '1234567890', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Employee_position`
--

CREATE TABLE `Employee_position` (
  `id_position` int(20) NOT NULL,
  `Name_position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Employee_position`
--

INSERT INTO `Employee_position` (`id_position`, `Name_position`) VALUES
(1, 'พนักงาน'),
(2, 'ช่างซ่อมบำรุง'),
(3, 'เจ้าหน้าที่ประกัน บริษัทวิริยะประกันภัย'),
(4, 'เจ้าของร้าน');

-- --------------------------------------------------------

--
-- Table structure for table `Fuel`
--

CREATE TABLE `Fuel` (
  `idFuel` int(11) NOT NULL,
  `Name_Fuel` varchar(255) NOT NULL,
  `id_Type_Fuel` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Fuel`
--

INSERT INTO `Fuel` (`idFuel`, `Name_Fuel`, `id_Type_Fuel`) VALUES
(1, 'แก๊สโซฮอล์95', 1),
(2, 'แก๊สโซฮอล์91', 1),
(3, 'แก๊สโซฮอล์E20', 1),
(4, 'แก๊สโซฮอล์E85', 1),
(5, 'เบนซิน95', 1),
(6, 'เบนซิน91', 1),
(7, 'LPG', 1),
(8, 'NGV', 1),
(9, 'ดีเซลB20', 2),
(10, 'ดีเซลB10', 2),
(11, 'ดีเซล', 2),
(12, 'แก๊สโซฮอล์95 & แก๊สโซฮอล์91', 1),
(13, 'แก๊สโซฮอล์95 & แก๊สโซฮอล์E20', 1),
(14, 'แก๊สโซฮอล์95 & แก๊สโซฮอล์E85', 1),
(15, 'แก๊สโซฮอล์95 & LPG', 1),
(16, 'แก๊สโซฮอล์95 & NGV', 1),
(17, 'แก๊สโซฮอล์95 & เบนซิน95', 1),
(18, 'แก๊สโซฮอล์95 & เบนซิน91', 1),
(19, 'แก๊สโซฮอล์91 & แก๊สโซฮอล์E20', 1),
(20, 'แก๊สโซฮอล์91 & แก๊สโซฮอล์E85', 1),
(21, 'แก๊สโซฮอล์91 & เบนซิน95', 1),
(22, 'แก๊สโซฮอล์91 & เบนซิน91', 1),
(23, 'แก๊สโซฮอล์91 & LPG', 1),
(24, 'แก๊สโซฮอล์91 & NGV', 1),
(25, 'แก๊สโซฮอล์E20 & แก๊สโซฮอล์E85', 1),
(26, 'แก๊สโซฮอล์E20 & เบนซิน95', 1),
(27, 'แก๊สโซฮอล์E20 & เบนซิน91', 1),
(28, 'แก๊สโซฮอล์E20 & LPG', 1),
(29, 'แก๊สโซฮอล์E20 & NGV', 1),
(30, 'แก๊สโซฮอล์E85 & เบนซิน95', 1),
(31, 'แก๊สโซฮอล์E85 & เบนซิน91', 1),
(32, 'แก๊สโซฮอล์E85 & LPG', 1),
(33, 'แก๊สโซฮอล์E85 & NGV', 1),
(34, 'เบนซิน95 & เบนซิน91', 1),
(35, 'เบนซิน95 & LPG', 1),
(36, 'เบนซิน95 & NGV', 1),
(60, 'เบนซิน91 & LPG', 1),
(61, 'เบนซิน91 & NGV', 1),
(62, 'ดีเซลB20 & ดีเซลB10', 2),
(63, 'ดีเซลB20 & ดีเซล', 2),
(64, 'ดีเซลB20 & LPG', 2),
(65, 'ดีเซลB20 & NGV', 2),
(66, 'ดีเซลB10 & ดีเซล', 2),
(67, 'ดีเซลB10 & LPG', 2),
(68, 'ดีเซลB10 & NGV', 2),
(69, 'ดีเซล & LPG', 2),
(70, 'ดีเซล & NGV', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Generation`
--

CREATE TABLE `Generation` (
  `id_Gen` int(20) NOT NULL,
  `Name_Gen` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `CC` int(11) DEFAULT NULL,
  `idBrand` int(11) NOT NULL,
  `id_Seat` int(20) DEFAULT NULL,
  `id_Type_Fuel` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Generation`
--

INSERT INTO `Generation` (`id_Gen`, `Name_Gen`, `Price`, `CC`, `idBrand`, `id_Seat`, `id_Type_Fuel`) VALUES
(9, 'FIESTA', 549000, 1000, 1, 5, 1),
(10, 'ECOSPORT', 669000, 1500, 1, 5, 1),
(11, 'ESCAPE', 999000, 2300, 1, 7, 2),
(12, 'EVEREST 2.0L TURBO SPORT 4X2 AT', 1469000, 2000, 1, 7, 2),
(13, 'FOCUS', 607000, 1800, 1, 4, 1),
(15, 'YARIS ATIV ENTRY', 529000, 1200, 2, 4, 1),
(16, 'CAMRY 2.0 G', 1455000, 2000, 2, 5, 1),
(17, 'AVANZA 1.5 E A/T', 649000, 1500, 2, 7, 1),
(18, 'ALPHARD 2.5 HYBRID', 3939000, 2500, 2, 7, 1),
(19, 'VIOS 1.5 ENTRY MY19', 609000, 1500, 2, 5, 1),
(21, 'COMMUTER 2.8 MT ', 1269000, 2800, 2, 15, 2),
(22, 'HIACE ECO 2.8', 999000, 2800, 2, 11, 2),
(23, 'BRIO V CVT', 495000, 1200, 3, 5, 1),
(29, 'HRV', 949000, 1800, 3, 5, 1),
(32, 'MOBILIO S AT', 659000, 1500, 3, 5, 1),
(36, 'BT-50', 663000, 2200, 4, 5, 1),
(37, 'MX5', 2890000, 2000, 4, 2, 1),
(38, 'CX-30 2.0 SP', 1199000, 2000, 4, 5, 1),
(39, 'MIRAGE GLX - CVT', 509000, 1200, 5, 5, 1),
(40, 'PAJERO SPORT GT 2WD', 1299000, 2400, 5, 7, 2),
(41, 'LANCER', 799000, 1600, 5, 5, 1),
(42, 'TRITON DOUBLE CAB ATHLETE AT', 1035000, 2400, 5, 5, 2),
(43, 'MARCH EL CVT', 510000, 1200, 6, 5, 1),
(44, 'ALMERA S', 499000, 1000, 6, 5, 1),
(45, 'JUKE', 837000, 1600, 6, 7, 1),
(47, 'LIVINA', 672000, 1600, 6, 7, 1),
(48, 'X-TRAIL 2.5S 2WD', 1350000, 2500, 6, 5, 1),
(49, 'SYLPHY 1.6 E CVT E85', 833000, 1600, 6, 5, 1),
(50, 'TEANA 2.0 XE', 1339000, 2000, 6, 4, 1),
(51, 'TIIDA', 688000, 1600, 6, 5, 1),
(60, 'SERIES-1', 2099000, 1500, 8, 5, 1),
(61, 'SERIES-5', 2999000, 2000, 8, 4, 1),
(62, 'S7', 5799000, 3000, 8, 4, 1),
(63, 'SERIES-2', 5899000, 3000, 8, 4, 1),
(64, 'X3', 3359000, 2000, 8, 5, 1),
(65, 'X5', 4999000, 3000, 8, 5, 1),
(66, 'SERIES-3', 2699000, 2000, 8, 5, 1),
(67, 'X6', 6999000, 3000, 8, 5, 1),
(68, 'SERIES-4', 3459000, 2000, 8, 4, 1),
(69, 'X1', 2259000, 1500, 8, 7, 1),
(70, 'Z4', 4999000, 2000, 8, 2, 1),
(91, 'A-CLASS', 2490000, 2000, 12, 5, 1),
(92, 'E-CLASS', 2900000, 3000, 12, 5, 1),
(93, 'G-CLASS', 8490000, 4000, 12, 5, 1),
(94, 'R-CLASS', 5899000, 3000, 12, 7, 1),
(95, 'B-CLASS', 2790000, 1300, 12, 7, 1),
(96, 'GLC', 3239000, 2100, 12, 5, 1),
(97, 'M-CLASS', 4490000, 2800, 12, 7, 1),
(98, 'SPRINTER', 3130000, 2200, 12, 14, 2),
(99, 'C-CLASS', 2379000, 3000, 12, 5, 1),
(100, 'GLE', 4760000, 3000, 12, 7, 2),
(101, 'S-CLASS', 5990000, 2900, 12, 5, 1),
(102, 'VITO', 2940000, 2300, 12, 11, 2),
(103, 'CLA', 2140000, 1600, 12, 5, 1),
(104, 'CLS', 7990000, 3000, 12, 5, 1),
(105, 'GLA', 2140000, 2500, 12, 5, 1),
(106, 'SLK', 9490000, 2000, 12, 2, 1),
(122, 'SWIFT GA CVT', 499000, 1200, 16, 5, 1),
(123, 'CIAZ GL MT', 523000, 1200, 16, 5, 1),
(124, 'ERTIGA GX', 695000, 1500, 16, 7, 1),
(125, 'CELERIO GL CVT', 398000, 1000, 16, 5, 1),
(152, 'MU-X THE ONYX 1.9 DDI DA DVD NAVI', 1364000, 1900, 39, 7, 2),
(154, '3', 519000, 1500, 40, 5, 1),
(155, 'MAZDA-5', 649000, 2000, 4, 5, 1),
(156, 'ZS', 679000, 1500, 40, 5, 1),
(158, 'HS', 919000, 1500, 40, 7, 1),
(159, 'EXTENDER', 549000, 2000, 40, 4, 1),
(160, 'V80', 988000, 2500, 40, 11, 1),
(161, 'RAPTOR', 1699000, 2000, 1, 5, 1),
(162, 'MUSTANG 2.3L ECOBOOST COUPE PERFORMANCE PACK', 3699000, 2300, 1, 2, 1),
(163, 'YARIS ENTRY', 539000, 1200, 2, 5, 1),
(164, 'C-HR 1.8 ENTRY', 979000, 1800, 2, 5, 1),
(167, 'BRIO AMAZE V CVT', 517000, 1200, 3, 5, 1),
(170, 'CX-8', 1599000, 2200, 4, 7, 2),
(171, 'MX-5', 2700000, 2000, 4, 2, 1),
(172, 'ATTRAGE GLX - CVT', 5290000, 1200, 5, 5, 1),
(173, 'XPANDER GLS-LTD', 789000, 1500, 5, 7, 1),
(174, 'NOTE', 609000, 1200, 6, 5, 1),
(175, 'NAVARA NP300 DOUBLE CAB CALIBRE EL 7AT BLACK EDITION', 950000, 2500, 6, 5, 2),
(176, 'TERRA 2.3 V 2WD 7AT', 1316000, 2300, 6, 7, 2),
(177, 'URVAN NV350 DIESEL', 1216500, 2500, 6, 12, 2),
(181, 'XV GT', 1358000, 1995, 41, 5, 1),
(182, 'FORESTER', 1330000, 2000, 41, 5, 1),
(183, 'OUTBACK', 2512000, 2500, 41, 5, 1),
(184, 'XV', 1159000, 2000, 41, 5, 1),
(185, 'LEVORG', 1890000, 1600, 41, 5, 1),
(186, 'WRX', 2640000, 2000, 41, 5, 1),
(187, 'BRZ', 1851000, 2000, 41, 2, 1),
(193, 'CARRY', 385000, 1600, 16, 2, 1),
(194, 'JIMNY 1.5 L 4WD MT', 1550000, 1500, 16, 4, 1),
(202, 'CITY S TURBO', 579500, 1500, 3, 5, 1),
(203, 'CITY V TURBO', 609000, 1500, 3, 5, 1),
(204, 'CITY SV TURBO', 665000, 1500, 3, 5, 1),
(205, 'CITY RS TURBO', 739000, 1500, 3, 5, 1),
(206, 'BR-V V', 765000, 1500, 3, 5, 1),
(207, 'BR-V SV', 835000, 1500, 3, 7, 1),
(208, 'CIVIC 1.5 VTEC TURBO', 1229000, 1500, 3, 5, 1),
(209, 'CR-V 2.4 S 2WD', 1359000, 2400, 3, 5, 1),
(210, 'ACCORD TURBO EL', 1475000, 1500, 3, 4, 1),
(211, 'CR-V 2.4 ES 4WD', 1499000, 2400, 3, 5, 1),
(212, 'ACCORD HYBRID', 1639000, 1500, 3, 5, 1),
(213, 'ACCORD HYBRID TECH', 1799000, 1500, 3, 5, 1),
(214, 'CIVIC 1.8 E CVT', 874000, 1800, 3, 5, 1),
(215, 'HR-V E', 949000, 1800, 3, 5, 1),
(216, 'CIVIC 1.8 EL CVT', 964000, 1800, 3, 5, 1),
(217, 'HR-V EL', 1059000, 1800, 3, 7, 1),
(218, 'CIVIC 1.5 TURBO', 1104000, 1500, 3, 5, 1),
(219, 'HR-V RS ', 1119000, 1800, 3, 7, 1),
(220, 'CIVIC 1.5 TURBO RS', 1219000, 1500, 3, 5, 1),
(221, 'JAZZ S MT', 555000, 1500, 3, 4, 1),
(222, 'JAZZ S AT', 594000, 1500, 3, 4, 1),
(223, 'JAZZ V AT', 654000, 1500, 3, 5, 1),
(224, 'JAZZ V+ AT', 694000, 1500, 3, 5, 1),
(225, 'MOBILIO V AT', 699000, 1500, 3, 7, 1),
(226, 'JAZZ RS AT', 739000, 1500, 3, 5, 1),
(227, 'JAZZ RS+ AT', 754000, 1500, 3, 5, 1),
(228, 'MOBILIO RS AT', 763000, 1500, 3, 7, 1),
(229, 'CIVIC 1.5 TURBO HATCHBACK', 1169000, 1500, 3, 5, 1),
(230, 'CR-V 2.4 E I-VTEC 2WD', 1409000, 2400, 3, 7, 1),
(231, 'CR-V 2.4 EL I-VTEC 4WD', 1549000, 2400, 3, 5, 1),
(232, 'CR-V 1.6 E I-DTEC 2WD', 1559000, 1600, 3, 7, 1),
(233, 'CR-V 1.6 EL I-DTEC 4WD', 1699000, 1600, 3, 7, 1),
(234, 'BRIO AMAZE SV CVT', 579000, 1200, 3, 5, 1),
(235, 'RANGER OPEN CAB 2.2L XL + HI-RIDER 6 MT', 669000, 2200, 1, 4, 2),
(236, 'RANGER FX4 DOUBLE CAB 2.2 XLT 6AT', 919000, 2200, 1, 5, 2),
(237, 'EVEREST 2.0L BI-TURBO TITANIUM+ 4X4 AT', 1799000, 2000, 1, 7, 2),
(238, 'RANGER STANDRAD CAB 2.2L XL 6 MY ', 559000, 2200, 1, 4, 2),
(239, 'RANGER OPEN CAB 2.2L XL 6 MT', 599000, 2200, 1, 4, 2),
(240, 'RANGER OPEN CAB 2.2L XLS 6 MT', 659000, 2200, 1, 4, 2),
(241, 'RANGER OPEN CAB 2.2L XLS + HI-RIDER 6 MT', 699000, 2200, 1, 4, 2),
(242, 'RANGER OPEN CAB 2.2L XLS HI-RIDER 6 AT', 739000, 2200, 1, 4, 2),
(243, 'RANGER DOUBLE CAB 2.2L XLS HI-RIDER 6 MT', 789000, 2200, 1, 5, 2),
(244, 'RANGER OPEN CAB 2.2L XLT HI-RIDER 6 AT', 794000, 2200, 1, 4, 2),
(245, 'RANGER DOUBLE CAB 2.2L XLT HI-RIDER 6 MT', 844000, 2200, 1, 5, 2),
(246, 'RANGER OPEN CAB 2.0L TURBO LIMITED 4X4 6 MT', 889000, 2000, 1, 4, 2),
(247, 'RANGER DOUBLE CAB 2.2L XLT HI-RIDER 6 AT', 889000, 2200, 1, 5, 2),
(248, 'RANGER DOUBLE CAB 2.0L TURBO LIMITED HI-RIDER 6 MT', 909000, 2000, 1, 5, 2),
(249, 'RANGER DOUBLE CAB 2.0L TURBO LIMITED HI-RIDER 10 AT', 959000, 2000, 1, 5, 2),
(250, 'RANGER DOUBLE CAB 2.0L TURBO WILDTRAK HI-RIDER 10 AT', 1029000, 2000, 1, 5, 2),
(251, 'RANGER DOUBLE CAB 2.0 TURBO LIMITED 4X4 10 AT', 1039000, 2000, 1, 5, 2),
(252, 'RANGER DOUBLE CAB 4X4 2.0L BI-TURBO WILDTRAK 4X4 10AT', 1265000, 2000, 1, 5, 2),
(253, 'EVEREST 2.0L TURBO TREND 4X2 AT', 1299000, 2000, 1, 7, 2),
(254, 'EVEREST 2.0L TURBO TITANIUM 4X2 AT', 1439000, 2000, 1, 7, 2),
(255, 'EVEREST 2.0L TURBO TITANIUM+ 4X2 AT', 1599000, 2000, 1, 7, 2),
(256, 'RANGER RAPTOR', 1699000, 2000, 1, 5, 2),
(257, 'MUSTANG 5.0L V8 GT COUPE PERFORMANCE PACK', 4799000, 5000, 1, 2, 1),
(258, 'YARIS ATIV MID', 579000, 1200, 2, 5, 1),
(259, 'YARIS MID', 589000, 1200, 2, 5, 1),
(260, 'REVO SMART CAB 4X2 2.4J PLUS', 600000, 2400, 2, 2, 2),
(261, 'YARIS ATIV HIGH', 649000, 1200, 2, 5, 1),
(262, 'YARIS HIGH', 649000, 1200, 2, 5, 1),
(263, 'REVO SMART CAB Z EDITION 4X2 2.4E', 690000, 2400, 2, 2, 2),
(264, 'REVO DOUBLE CAB 4X2 2.4J PLUS', 690000, 2400, 2, 4, 2),
(265, 'REVO SMART CAB 4X2 2.4J PLUS AT', 699000, 2400, 2, 2, 2),
(266, 'VIOS 1.5 MID MY19', 699000, 1500, 2, 5, 1),
(267, 'AVANZA 1.5G A/T', 699000, 1500, 2, 7, 1),
(268, 'REVO DOUBLE CAB 4X2 2.4J PLUS AT', 740000, 2400, 2, 4, 2),
(269, 'SIENTA 1.5 G', 765000, 1500, 2, 7, 1),
(270, 'VIOS 1.5 HIGH', 789000, 1500, 2, 5, 1),
(271, 'ALTIS (COROLLA) LIMO', 839000, 1600, 2, 5, 1),
(272, 'SIENTA 1.5 V ', 875000, 1500, 2, 7, 1),
(273, 'ALTIS (COROLLA) 1.6G', 879000, 1600, 2, 5, 1),
(274, 'ALTIS (COROLLA) 1.8 HYBRID ENTRY', 939000, 1800, 2, 5, 1),
(275, 'ALTIS (COROLLA) 1.8 HV MID', 989000, 1800, 2, 5, 1),
(276, 'ALTIS (COROLLA) GR SPORT', 999000, 1800, 2, 5, 1),
(277, 'C-HR 1.8 MID', 1039000, 1800, 2, 5, 1),
(278, 'C-HR HV MID', 1069000, 1800, 2, 5, 1),
(279, 'HIACE 2.8 GL', 1079000, 2800, 2, 11, 2),
(280, 'ALTIS (COROLLA) 1.8 HV HIGH', 1099000, 1800, 2, 5, 1),
(281, 'C-HR HV HI', 1159000, 1800, 2, 5, 1),
(282, 'COMMUTER 2.8 AT', 1299000, 2800, 2, 15, 2),
(283, 'FORTUNER 2.4G AT', 1309000, 2400, 2, 7, 2),
(284, 'CAMRY 2.5 G', 1599000, 2500, 2, 5, 1),
(285, 'CAMRY HYBRID 2.5 HV', 1649000, 2500, 2, 5, 1),
(286, 'MAJESTY 2.8 STANDARD', 1709000, 2800, 2, 10, 2),
(287, 'CAMRY HYBRID 2.5 HV PREMIUM', 1809000, 2500, 2, 5, 1),
(288, 'MAJESTY 2.8 PREMIUM', 1899000, 2800, 2, 10, 2),
(289, 'MAJESTY 2.8 GRANDE', 2199000, 2800, 2, 10, 2),
(290, 'GR SUPRA', 4999000, 2000, 2, 2, 1),
(291, 'REVO STANDARD CAB 2.4J CHASSIS', 528000, 2400, 2, 2, 2),
(292, 'REVO STANDARD CAB 2.4J', 566000, 2400, 2, 2, 2),
(293, 'FORTUNER 2.8 TRD SPORTIVO 2WD AT', 1709000, 2800, 2, 7, 2),
(294, 'FORTUNER 2.8 TRD SPORTIVO 2WD AT BLACK TOP', 1729000, 2800, 2, 7, 2),
(295, 'FORTUNER 2.8 TRD SPORTIVO 4WD AT', 1779000, 2800, 2, 7, 2),
(296, 'VELLFIRE 2.5', 3809000, 2500, 2, 6, 1),
(297, 'ALPHARD 3.5 VIP', 5429000, 3500, 2, 7, 1),
(298, 'INNOVA CRYSTA 2.0 E M/T', 1129000, NULL, 2, 6, 2),
(299, 'INNOVA CRYSTA 2.8 G A/T', 1235000, NULL, 2, 6, 2),
(300, 'INNOVA CRYSTA 2.8 V A/T', 1413000, NULL, 2, 6, 2),
(301, '2 1.3 E SEDAN', 546000, 1300, 4, 5, 1),
(302, '2 1.3 E SPORT HB', 546000, 1300, 4, 5, 1),
(303, '2 1.3 C SEDAN', 602000, 1300, 4, 5, 1),
(304, '2 1.3 C SPORT HB', 602000, 1300, 4, 5, 1),
(305, '2 1.3 S SEDAN', 627000, 1300, 4, 5, 1),
(306, '2 1.3 S SPORT HB', 627000, 1300, 4, 5, 1),
(307, '2 1.3 S LEATHER SEDAN', 648000, 1300, 4, 5, 1),
(308, '2 1.3 S SPORT LEATHER HB', 648000, 1300, 4, 5, 1),
(309, '2 1.3 SP SEDAN', 609000, 1300, 4, 5, 1),
(310, '2 1.3 SP SPORT HB', 690000, 1300, 4, 5, 1),
(311, '2 SEDAN XD', 782000, 1500, 4, 5, 1),
(312, '3 2.0 C SEDAN', 969000, 2000, 4, 5, 1),
(313, '3 2.0 C FASTBACK', 969000, 2000, 4, 5, 1),
(314, '3 2.0 S SEDAN', 1069000, 2000, 4, 5, 1),
(315, 'CX-8 2.5 S SKYACTIV-G', 1599000, 2500, 4, 7, 1),
(316, 'CX-8 2.5 SP SKYACTIV-G', 1699000, 2500, 4, 7, 1),
(317, 'CX-5 2.5 TURBO SP', 1850000, 2500, 4, 5, 1),
(318, 'CX-8 2.2 XDL SKYACTIV-D', 1899000, 2200, 4, 7, 1),
(319, 'BT-50 PRO DOUBLECAB 2.2 S', 663000, 2200, 4, 4, 2),
(320, 'CX-8 2.2 XDL EXCLUSIVE SKYACTIV-D AWD', 2069000, 2200, 4, 6, 1),
(321, 'BT-50 PRO DOUBLECAB 2.2 HI-RACER', 773000, 2200, 4, 4, 1),
(322, 'CX-3 2.0 E', 879000, 2000, 4, 5, 1),
(323, 'BT-50 PRO THUNDER DBL HI-RACER 2.2L 6MT', 792000, 2200, 4, 4, 2),
(324, 'CX-3 2.0 C', 955000, 2000, 4, 5, 1),
(325, 'CX-3 2.0 SP', 1083000, 2000, 4, 5, 1),
(326, 'MX-5 2.0 SKYACTIV-G', 2890000, 2000, 4, 2, 1),
(327, 'CX-5 2.0 S', 1410000, 2000, 4, 5, 1),
(328, 'TRITON DOUBLE CAB 4WD ATHLETE AT', 1146000, 2400, 5, 5, 2),
(329, 'MIRAGE GLX - MT', 474000, 1200, 5, 5, 1),
(330, 'ATTRAGE GLX - MT', 494000, 1200, 5, 5, 1),
(331, 'TRITON SINGLE CAB 2.5 DI-D 2WD GL', 535000, 2500, 5, 6, 2),
(332, 'ATTRAGE GLS - CVT', 579000, 1200, 5, 5, 1),
(333, 'TRITON MEGA CAB 2.5 DI-D 2WD GLX', 632000, 2500, 5, 6, 2),
(334, 'TRITON MEGA CAB 2.5 DI-D 2WD GL', 602000, 2500, 5, 2, 2),
(335, 'TRITON DOUBLE CAB PLUS GT M/T', 873000, 2500, 5, 5, 2),
(336, 'TRITON DOUBLE CAB 4WD GT-PREMIUM M/T', 1041000, 2500, 5, 5, 2),
(337, 'TRITON DOUBLE CAB PLUS GT-PREMINM A/T', 983000, 2500, 5, 5, 2),
(338, 'PAJERO SPORT GT-PREMIUM 2WD', 1469000, 2400, 5, 7, 2),
(339, 'PAJERO SPORT GT-PREMIUM 4WD', 1599000, 2400, 5, 7, 2),
(340, 'TRITON SINGLE CAB 2.4 GL 4WD 6MT', 654000, 2400, 5, 2, 2),
(341, 'TRITON MEGA CAB PLUS 2.4 GLS 6MT', 729000, 2400, 5, 6, 2),
(342, 'XPANDER GT', 859000, 1500, 5, 7, 2),
(343, 'ALMERA E', 509000, 1000, 6, 5, 1),
(344, 'ALMERA EL', 559000, 1000, 6, 5, 1),
(345, 'ALMERA V', 599000, 1000, 6, 5, 1),
(346, 'NOTE V', 609000, 1200, 6, 5, 1),
(347, 'ALMERA VL', 639000, 1000, 6, 5, 1),
(348, 'NAVARA NP300 KING CAB CALIBRA E 6 MT BLACK EDITION', 790000, 2500, 6, 4, 2),
(349, 'NAVARA NP300 DOUBLE CAB CALIBRA E 6 MT BLACK EDITION', 877000, 2500, 6, 5, 2),
(350, 'TEANA 2.0 XL', 1426000, 2000, 6, 5, 1),
(351, 'X-TRAIL 2.5V 2WD', 1460000, 2500, 6, 5, 1),
(352, 'TEANA 2.0 XL NAVI', 1476000, 2000, 6, 5, 1),
(353, 'X-TRAIL 2.0V 4WD HYBRID', 1537000, 2000, 6, 7, 1),
(354, 'X-TRAIL 2.0VL 4WD HYBRID', 1617000, 2000, 6, 7, 1),
(355, 'NAVARA SINGLE CAB 2.5 SL 4X4 6 MT', 655000, 2500, 6, 2, 2),
(356, 'NAVARA KING CAB CALIBRE EL 6MT 18MY', 799500, 2500, 6, 4, 2),
(357, 'NAVARA KING CAB CALIBRE V 7AT', 872500, 2500, 6, 4, 2),
(358, 'NAVARA DOUBLE CAB CALIBRE EL 7AT 18MY', 914500, 2500, 6, 5, 2),
(359, 'NAVARA DOUBLE CAB CALIBRE V 7AT 18MY', 943500, 2500, 6, 5, 2),
(360, 'NAVARA DOUBLE CAB 4WD VL 7AT', 1096000, 2500, 6, 5, 2),
(361, 'TERRA 2.3 VL 2WD 7AT', 1349000, 2300, 6, 7, 2),
(362, 'TERRA 2.3 VL 4WD 7AT', 1457000, 2300, 6, 7, 2),
(363, 'NOTE E', 568000, 1200, 6, 5, 1),
(364, 'NOTE VL', 640000, 1200, 6, 5, 1),
(365, 'SYLPHY 1.6 V CVT E85', 869000, 1600, 6, 5, 1),
(366, 'SYLPHY 1.6 SV CVT E85', 895000, 1600, 6, 5, 1),
(367, 'MARCH E CVT', 495000, 1200, 6, 5, 1),
(368, 'MU-X THE ONYX 3.0 DDI DA DVD NAVI', 1409000, 3000, 39, 7, 2),
(369, 'D-MAX SPARK 1.9 DDI CAB CHASSIS M/T', 510000, 1900, 39, 2, 2),
(370, 'D-MAX SPARK 1.9 DDI CAB CHASSIS REFRIGERATOR M/T', 515000, 1900, 39, 2, 2),
(371, 'D-MAX SPARK 1.9 DDI B M/T', 547000, 1900, 39, 2, 2),
(372, 'D-MAX SPARK 1.9 DDI S M/T', 572000, 1900, 39, 2, 2),
(373, 'D-MAX SPACECAB 1.9 DDI L M/T', 673000, 1900, 39, 2, 2),
(374, 'D-MAX CAP 4 1.9 DDI S', 686000, 1900, 39, 4, 2),
(375, 'D-MAX HI-LANDER 2D 1.9 DDI L M/T', 708000, 1900, 39, 4, 2),
(376, 'D-MAX HI-LANDER 2D 1.9 DDI L DA M/T', 723000, 1900, 39, 4, 2),
(377, 'D-MAX CAP 4 1.9 DDI L DA', 779000, 1900, 39, 5, 2),
(378, 'D-MAX HI-LANDER 4-DOOR 1.9 (L DA) M/T', 825000, 1900, 39, 5, 2),
(379, 'D-MAX HI-LANDER 4-DOOR 1.9 (L) M/T', 825000, 1900, 39, 5, 2),
(380, 'D-MAX CAP 4 1.9 DDI Z', 840000, 1900, 39, 5, 2),
(381, 'D-MAX V-CROSS 2', 852000, 1800, 39, 4, 2),
(382, 'D-MAX HI-LANDER 2D 3.0 DDI ZP M/T', 878000, 3000, 39, 5, 2),
(383, 'D-MAX HI-LANDER 2D 1.9 DDI ZP A/T', 883000, 1900, 39, 5, 2),
(384, 'D-MAX V-CROSS 4', 974000, 1800, 39, 5, 2),
(385, 'MU-X 1.9 DDI CD A/T', 1099000, 1900, 39, 7, 2),
(386, 'MU-X 1.9 DDI DVD M/T', 1214000, 1900, 39, 7, 2),
(387, 'MU-X 3.0 DDI DVD A/T', 1474000, 3000, 39, 7, 2),
(388, 'CIAZ GL CVT', 559000, 1200, 16, 5, 1),
(389, 'CIAZ GLX CVT', 625000, 1200, 16, 5, 1),
(390, 'CIAZ RS', 675000, 1200, 16, 5, 1),
(391, 'ERTIGA GL', 655000, 1500, 16, 7, 1),
(392, 'JIMNY 1.5 L 4WD MT TWO-TONE', 1580000, 1500, 16, 4, 1),
(393, 'SWIFT GL CVT', 536000, 1200, 16, 5, 1),
(394, 'SWIFT GLX CVT', 609000, 1200, 16, 5, 1),
(395, 'CELERIO GA MT', 318000, 1000, 16, 5, 1),
(396, 'CELERIO GX CVT', 427000, 1000, 16, 5, 1),
(397, 'CAPTIVA LS', 499000, 1500, 9, 7, 1),
(398, 'COLORADO TRAIL BOSS 4X2 MT', 655000, 2500, 9, 5, 2),
(399, 'COLORADO TRAIL BOSS 4X2 AT', 689000, 2500, 9, 5, 2),
(400, 'CAPTIVA LT', 1099000, 1500, 9, 7, 1),
(401, 'CAPTIVA PREMIER', 1199000, 1500, 9, 7, 1),
(402, 'COLORADO C-CAB 2.5 LS', 569000, 2500, 9, 5, 2),
(403, 'COLORADO 2.5L HIGH COUNTRY STORM 4X2 AT', 805000, 2500, 9, 5, 2),
(404, 'COLORADO X-CAB 2.5 LTZ Z71', 599000, 2500, 9, 5, 2),
(405, 'COLORADO C-CAB 2.5 LT', 635000, 2500, 9, 5, 2),
(406, 'COLORADO HIGH COUNTRY 2.5 VGT 4X4 A/T', 845000, 2500, 9, 5, 2),
(407, 'TRAILBLAZER 2.5 VGT LTZ 4X2', 1085000, 2500, 9, 7, 2),
(408, 'TRAILBLAZER 2.5 VGT LTZ 4X4', 1165000, 2500, 9, 7, 2),
(409, 'COLORADO X-CAB 2.5 LTZ Z71 A/T', 839000, 2500, 9, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Images`
--

CREATE TABLE `Images` (
  `id_image` int(20) NOT NULL,
  `Name_image` varchar(255) NOT NULL,
  `idCarregis` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Images`
--

INSERT INTO `Images` (`id_image`, `Name_image`, `idCarregis`) VALUES
(326, 'kraba.jpg', 139),
(327, 'kraba_(4).jpg', 139),
(328, 'kraba_(2).jpg', 139),
(329, 'kraba_(3).jpg', 139),
(338, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw14.jpg', 142),
(339, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw15.jpg', 142),
(340, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw16.jpg', 142),
(341, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw17.jpg', 142),
(343, 'kraba1.jpg', 143),
(344, 'kraba2.jpg', 143),
(345, 'kraba3.jpg', 143),
(346, 'kraba4.jpg', 143),
(347, 'everest1.jpg', 144),
(348, 'everest4.jpg', 144),
(349, 'everest5.jpg', 144),
(350, 'everest6.jpg', 144),
(351, 'vios119.jpg', 145),
(352, 'vios120.jpg', 145),
(353, 'vios121.jpg', 145),
(354, 'vios122.jpg', 145),
(355, 'tiida15.jpg', 146),
(356, 'tiida16.jpg', 146),
(357, 'tiida17.jpg', 146),
(358, 'tiida18.jpg', 146),
(359, 'Altis-1_8V-Red17.png', 147),
(360, 'Altis-1_8V-Red18.png', 147),
(361, 'Altis-1_8V-Red19.png', 147),
(362, 'Altis-1_8V-Red20.png', 147),
(363, 'vios23.jpg', 148),
(364, 'vios24.jpg', 148),
(365, 'vios25.jpg', 148),
(366, 'vios26.jpg', 148),
(367, '41207c19-mercedes-benz-cls300d-1-970x64710.jpg', 149),
(368, '41207c19-mercedes-benz-cls300d-1-970x64711.jpg', 149),
(369, '41207c19-mercedes-benz-cls300d-1-970x64712.jpg', 149),
(370, '41207c19-mercedes-benz-cls300d-1-970x64713.jpg', 149),
(371, 'excar312.jpg', 150),
(372, 'excar410.jpg', 150),
(373, 'excar510.jpg', 150),
(374, 'excar610.jpg', 150),
(375, '79F88342D7254F9A804426C98B66CAF614.jpg', 151),
(376, '79F88342D7254F9A804426C98B66CAF615.jpg', 151),
(377, '79F88342D7254F9A804426C98B66CAF616.jpg', 151),
(378, '79F88342D7254F9A804426C98B66CAF617.jpg', 151),
(383, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw19.jpg', 153),
(384, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw20.jpg', 153),
(385, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw21.jpg', 153),
(386, 'aHR0cHM6Ly9zLmlzYW5vb2suY29tL2F1LzAvdWQvMTEvNTU0ODkvMTAwLmpwZw22.jpg', 153),
(387, 'h1_(3)2.jpg', 154),
(388, 'h1_(3)3.jpg', 154),
(389, 'h1_(3)4.jpg', 154),
(390, 'h1_(3)5.jpg', 154),
(391, 'tiida19.jpg', 155),
(392, 'tiida20.jpg', 155),
(393, 'tiida21.jpg', 155),
(394, 'tiida22.jpg', 155),
(395, 'vios123.jpg', 156),
(396, 'vios124.jpg', 156),
(397, 'vios125.jpg', 156),
(398, 'vios126.jpg', 156),
(399, 'kraba5.jpg', 157),
(400, 'kraba6.jpg', 157),
(401, 'kraba7.jpg', 157),
(402, 'kraba8.jpg', 157),
(403, 'Altis-1_8V-Red21.png', 158),
(404, 'Altis-1_8V-Red22.png', 158),
(405, 'Altis-1_8V-Red23.png', 158),
(406, 'Altis-1_8V-Red24.png', 158),
(407, 'Altis-1_8V-Red25.png', 158),
(408, '0c22af22b0107060e983ff1dc0cd2e894513.png', 159),
(409, '0c22af22b0107060e983ff1dc0cd2e894514.png', 159),
(410, '0c22af22b0107060e983ff1dc0cd2e894515.png', 159),
(411, '0c22af22b0107060e983ff1dc0cd2e894516.png', 159);

-- --------------------------------------------------------

--
-- Table structure for table `Images2`
--

CREATE TABLE `Images2` (
  `id_image2` int(20) NOT NULL,
  `Name_image2` varchar(255) NOT NULL,
  `idCarregis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Images2`
--

INSERT INTO `Images2` (`id_image2`, `Name_image2`, `idCarregis`) VALUES
(260, 'ใบขับขี่58.jpg', 139),
(261, 'พรบ63.jpg', 139),
(262, 'เล่มทะเบียนรถ63.jpg', 139),
(263, 'ประกัน.jpg', 139),
(277, 'พรบ65.jpg', 142),
(278, 'พรบ66.jpg', 142),
(279, 'พรบ67.jpg', 142),
(280, 'พรบ68.jpg', 142),
(281, 'พรบ69.jpg', 143),
(282, 'พรบ70.jpg', 143),
(283, 'พรบ71.jpg', 143),
(284, 'พรบ72.jpg', 143),
(285, 'พรบ73.jpg', 144),
(286, 'พรบ74.jpg', 144),
(287, 'พรบ75.jpg', 144),
(288, 'พรบ76.jpg', 144),
(289, 'เล่มทะเบียนรถ65.jpg', 145),
(290, 'เล่มทะเบียนรถ66.jpg', 145),
(291, 'เล่มทะเบียนรถ67.jpg', 145),
(292, 'เล่มทะเบียนรถ68.jpg', 145),
(293, 'พรบ77.jpg', 146),
(294, 'พรบ78.jpg', 146),
(295, 'พรบ79.jpg', 146),
(296, 'พรบ80.jpg', 146),
(297, 'เล่มทะเบียนรถ69.jpg', 147),
(298, 'เล่มทะเบียนรถ70.jpg', 147),
(299, 'เล่มทะเบียนรถ71.jpg', 147),
(300, 'เล่มทะเบียนรถ72.jpg', 147),
(302, 'พรบ81.jpg', 148),
(303, 'พรบ82.jpg', 148),
(304, 'พรบ83.jpg', 148),
(305, 'พรบ84.jpg', 148),
(307, 'ใบขับขี่64.jpg', 149),
(308, 'ใบขับขี่65.jpg', 149),
(309, 'ใบขับขี่66.jpg', 149),
(310, 'ใบขับขี่67.jpg', 149),
(311, 'ใบขับขี่68.jpg', 150),
(313, 'พรบ86.jpg', 150),
(314, 'เล่มทะเบียนรถ74.jpg', 150),
(315, 'ประกัน2.jpg', 150),
(316, 'ใบขับขี่69.jpg', 151),
(317, 'พรบ87.jpg', 151),
(318, 'เล่มทะเบียนรถ75.jpg', 151),
(319, 'ประกัน3.jpg', 151),
(324, 'บปชช28.jpg', 153),
(325, 'บปชช29.jpg', 153),
(326, 'บปชช30.jpg', 153),
(327, 'บปชช31.jpg', 153),
(328, 'พรบ88.jpg', 154),
(329, 'พรบ89.jpg', 154),
(330, 'พรบ90.jpg', 154),
(331, 'พรบ91.jpg', 154),
(332, 'เล่มทะเบียนรถ76.jpg', 155),
(333, 'เล่มทะเบียนรถ77.jpg', 155),
(334, 'เล่มทะเบียนรถ78.jpg', 155),
(335, 'เล่มทะเบียนรถ79.jpg', 155),
(336, 'ใบขับขี่70.jpg', 156),
(337, 'ใบขับขี่71.jpg', 156),
(338, 'ใบขับขี่72.jpg', 156),
(339, 'ใบขับขี่73.jpg', 156),
(340, 'บปชช32.jpg', 157),
(341, 'บปชช33.jpg', 157),
(342, 'บปชช34.jpg', 157),
(343, 'บปชช35.jpg', 157),
(344, 'บปชช36.jpg', 158),
(345, 'บปชช37.jpg', 158),
(346, 'บปชช38.jpg', 158),
(347, 'บปชช39.jpg', 158),
(348, 'ใบขับขี่74.jpg', 159),
(350, 'พรบ92.jpg', 159),
(351, 'เล่มทะเบียนรถ80.jpg', 159),
(352, 'ประกัน4.jpg', 159);

-- --------------------------------------------------------

--
-- Table structure for table `Images3`
--

CREATE TABLE `Images3` (
  `id_image3` int(20) NOT NULL,
  `Name_image3` varchar(255) NOT NULL,
  `idRental` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Images3`
--

INSERT INTO `Images3` (`id_image3`, `Name_image3`, `idRental`) VALUES
(383, 'บปชช99.jpg', 208),
(384, 'ใบขับขี่89.jpg', 208),
(385, 'ใบขับขี่90.jpg', 209),
(386, 'ใบขับขี่91.jpg', 209),
(387, 'ใบขับขี่92.jpg', 210),
(388, 'ใบขับขี่93.jpg', 210),
(389, 'โอนเงน2.jpg', 210),
(390, 'ใบขับขี่94.jpg', 211),
(391, 'ใบขับขี่95.jpg', 211),
(392, 'โอนเงน3.jpg', 211),
(393, 'ใบขับขี่96.jpg', 212),
(394, 'ใบขับขี่97.jpg', 212),
(395, 'โอนเงน4.jpg', 212),
(396, 'ใบขับขี่98.jpg', 213),
(397, 'ใบขับขี่99.jpg', 213),
(398, 'โอนเงน5.jpg', 213),
(399, 'พรบ6.jpg', 214),
(400, 'พรบ7.jpg', 214),
(401, 'โอนเงน6.jpg', 214),
(402, 'พรบ8.jpg', 215),
(403, 'พรบ9.jpg', 215),
(405, 'ใบขับขี่96.jpg', 216),
(406, 'passport2.jpg', 216),
(408, 'โอนเงน5.jpg', 216);

-- --------------------------------------------------------

--
-- Table structure for table `Images4`
--

CREATE TABLE `Images4` (
  `id_Image4` int(11) NOT NULL,
  `Name_image4` varchar(255) NOT NULL,
  `id_Problem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Images4`
--

INSERT INTO `Images4` (`id_Image4`, `Name_image4`, `id_Problem`) VALUES
(2, '20200510_1459142422061877741944941.png', 125),
(3, '20200512_2318563374152973281425960.png', 129);

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE `Member` (
  `id_Member` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Tel` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Member`
--

INSERT INTO `Member` (`id_Member`, `Username`, `Password`, `FName`, `LName`, `Address`, `Tel`) VALUES
(61, 'admin2', '1234', 'Admin G dragon', 'D. teach', '1682 dindeang', '0889799826'),
(62, 'game', '123456789Za', 'LamDuan', 'Rongmuang', '111/268 บางปลา 10540', '0819797095'),
(72, 'touch1', '1234', 'touch', '1', '123', '1234567890'),
(73, 'touch2', '1234', 'touch', '2', '1234', '1234567890'),
(84, 'gamegame', '123456789aa', 'Atipat', 'Rongmuang', 'fdgdg', '0819877588'),
(91, 'qameqo', '123456789aa', 'Sdf', 'Sdg', 'sdg', '0819789548'),
(98, 'member1', '1234', 'Game', 'Touch', 'AAA', '0274551244'),
(99, 'member2', '1234', 'Member', 'Member', 'bangna', '0819797097'),
(100, 'member3', '1234', 'Hjk', 'Kol', '111', '0819797097'),
(101, 'qameqo98', '123456789', 'Game', 'Atipat', '111/268', '0819797097'),
(102, 'test1', '123456789a', 'Test', 'Test', '1234', '0897894561'),
(103, 'test2', '123456789a', 'Tests', 'Tests', '1234', '0123456789'),
(104, 'test3', '123456789a', 'Testss', 'Testss', '1234', '0123456789'),
(105, 'test4', '123456789a', 'Testssss', 'Testssss', '1234', '0123456789'),
(106, 'aaaaa', '027455124a', 'Aaaab', 'Aaaaa', 'aaaaa', '0819797097');

-- --------------------------------------------------------

--
-- Table structure for table `Not_passed`
--

CREATE TABLE `Not_passed` (
  `id_Not_passed` int(20) NOT NULL,
  `Name_not` varchar(1000) NOT NULL,
  `idCarregis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Not_passed`
--

INSERT INTO `Not_passed` (`id_Not_passed`, `Name_not`, `idCarregis`) VALUES
(1, 'รถยนต์ไม่พร้อม', 157);

-- --------------------------------------------------------

--
-- Table structure for table `Not_passed_rent`
--

CREATE TABLE `Not_passed_rent` (
  `id_Not_passed_rent` int(20) NOT NULL,
  `Name_not_rent` varchar(200) NOT NULL,
  `idRental` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Not_passed_rent`
--

INSERT INTO `Not_passed_rent` (`id_Not_passed_rent`, `Name_not_rent`, `idRental`) VALUES
(2, 'เงินไม่ครบ', 213);

-- --------------------------------------------------------

--
-- Table structure for table `Problem`
--

CREATE TABLE `Problem` (
  `id_Problem` int(11) NOT NULL,
  `Detail` varchar(300) DEFAULT NULL,
  `Detail_2` varchar(200) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Date_2` datetime DEFAULT NULL,
  `Lat` float(10,7) DEFAULT NULL,
  `Lng` float(10,7) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL,
  `idRental` int(11) DEFAULT NULL,
  `id_Type_Problem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Problem`
--

INSERT INTO `Problem` (`id_Problem`, `Detail`, `Detail_2`, `Date`, `Date_2`, `Lat`, `Lng`, `id_employee`, `idRental`, `id_Type_Problem`) VALUES
(125, 'เกิดอุบัติเหตุแจ้งประกันเคลีย', 'ชดใช้ตามกรมธรรม์', '2020-05-07 14:53:11', '2020-05-07 15:00:42', 13.5761309, 100.7263565, 6, 210, 2),
(128, 'รถขับๆอยู่ดับ', 'หัวเทียนช้อตเปลี่ยนเรียบร้อย', '2020-05-12 23:12:57', '2020-05-12 23:15:34', 13.5761433, 100.7263260, 4, 216, 1),
(129, 'เฉี่ยวกะบะ', 'สามารถใช้งานต่อได้', '2020-05-12 23:16:24', '2020-05-12 23:19:46', 13.5761395, 100.7263412, 6, 216, 2),
(130, 'เบรคสะบัด', 'ไม่สามารถซ่อมได้', '2020-05-13 13:22:21', '2020-05-13 13:27:30', 13.7621021, 100.5513687, 4, 213, 1),
(131, 'ชนแกะ', 'ร้ายแรงไม่สามารถใช้ต่อได้', '2020-05-13 15:04:59', '2020-05-13 15:33:54', 13.7621117, 100.5513840, 6, 213, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Rental`
--

CREATE TABLE `Rental` (
  `idRental` int(20) NOT NULL,
  `Datebooking` date DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `totalprice` float NOT NULL,
  `Carownerincome` int(11) NOT NULL,
  `Companyincome` int(11) NOT NULL,
  `PriceCar` int(11) DEFAULT NULL,
  `PriceIns` int(11) DEFAULT NULL,
  `PriceDe` int(11) DEFAULT NULL,
  `PriceOver` int(11) DEFAULT NULL,
  `PriceVat` int(11) DEFAULT NULL,
  `PriceFive` int(11) DEFAULT NULL,
  `Fines_price` int(11) DEFAULT NULL,
  `idCarregis` int(11) DEFAULT NULL,
  `idCarregis2` int(11) DEFAULT NULL,
  `idCarregis3` int(11) DEFAULT NULL,
  `id_status` int(11) NOT NULL,
  `id_Member` int(20) NOT NULL,
  `id_Employee` int(20) DEFAULT NULL,
  `id_Employee_2` int(11) DEFAULT NULL,
  `id_Employee_3` int(11) DEFAULT NULL,
  `id_Insurance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rental`
--

INSERT INTO `Rental` (`idRental`, `Datebooking`, `startDate`, `endDate`, `ReturnDate`, `totalprice`, `Carownerincome`, `Companyincome`, `PriceCar`, `PriceIns`, `PriceDe`, `PriceOver`, `PriceVat`, `PriceFive`, `Fines_price`, `idCarregis`, `idCarregis2`, `idCarregis3`, `id_status`, `id_Member`, `id_Employee`, `id_Employee_2`, `id_Employee_3`, `id_Insurance`) VALUES
(208, '2020-05-08', '2020-05-08', '2020-05-10', NULL, 4655, 2310, 990, 3300, 1050, 1397, 3259, 305, NULL, NULL, 155, NULL, NULL, 6, 104, NULL, NULL, NULL, 1),
(209, '2020-05-08', '2020-05-09', '2020-05-11', NULL, 5297, 2730, 1170, 3900, 1050, 1589, 3708, 347, NULL, NULL, 156, NULL, NULL, 6, 105, NULL, NULL, NULL, 1),
(210, '2020-05-09', '2020-05-09', '2020-05-11', '2020-05-11', 4655, 2310, 990, 3300, 1050, 1397, 3259, 305, 5000, 0, 155, NULL, NULL, 12, 105, 3, 3, 3, 1),
(211, '2020-05-10', '2020-05-13', '2020-05-14', '2020-05-12', 3103, 1540, 660, 2200, 700, 931, 2172, 203, 5000, 0, 155, NULL, NULL, 12, 104, 3, 3, 3, 1),
(212, '2020-05-12', '2020-05-12', '2020-05-12', '2020-05-12', 2515, 1400, 600, 2000, 350, 755, 1761, 165, 1000, 0, 150, NULL, NULL, 12, 98, 3, 3, 3, 1),
(213, '2020-05-12', '2020-05-12', '2020-05-12', NULL, 6659, 840, 360, 1200, 350, 498, 1161, 109, 5000, NULL, 158, NULL, NULL, 15, 98, 3, NULL, NULL, 1),
(214, '2020-05-12', '2020-05-12', '2020-05-12', NULL, 1873, 980, 420, 1400, 350, 562, 1311, 123, NULL, NULL, 139, NULL, NULL, 1, 98, NULL, NULL, NULL, 1),
(215, '2020-05-12', '2020-05-12', '2020-05-12', NULL, 1338, 700, 300, 1000, 250, 401, 937, 88, NULL, NULL, 151, NULL, NULL, 6, 98, NULL, NULL, NULL, 1),
(216, '2020-05-12', '2020-05-12', '2020-05-12', NULL, 5803, 350, 150, 500, 250, 241, 562, 53, 5000, NULL, 154, NULL, NULL, 11, 106, 3, 3, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Repair`
--

CREATE TABLE `Repair` (
  `id_Repair` int(11) NOT NULL,
  `Car_tire` int(10) DEFAULT NULL,
  `Fuel` int(10) NOT NULL,
  `Total_fines` int(10) DEFAULT NULL,
  `idRental` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Repair`
--

INSERT INTO `Repair` (`id_Repair`, `Car_tire`, `Fuel`, `Total_fines`, `idRental`) VALUES
(3, 1000, 3000, 4000, 212);

-- --------------------------------------------------------

--
-- Table structure for table `Seat`
--

CREATE TABLE `Seat` (
  `id_Seat` int(20) NOT NULL,
  `Number_Seat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Seat`
--

INSERT INTO `Seat` (`id_Seat`, `Number_Seat`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16);

-- --------------------------------------------------------

--
-- Table structure for table `Status_car`
--

CREATE TABLE `Status_car` (
  `id_Status` int(10) NOT NULL,
  `Name_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Status_car`
--

INSERT INTO `Status_car` (`id_Status`, `Name_Status`) VALUES
(1, 'รออนุมัติ'),
(2, 'อนุมัติ'),
(3, 'ไม่อนุมัติ'),
(4, 'กำลังดำเนินการ'),
(5, 'พร้อม'),
(6, 'ยกเลิก'),
(7, 'ไม่มีการส่งรถ'),
(8, 'ไม่ว่าง'),
(9, 'รอการชำระเงินมัดจำ'),
(10, 'จองรถ'),
(11, 'กำลังใช้รถ'),
(12, 'คืนเรียบร้อย'),
(13, 'ซ่อม'),
(14, 'แจ้งปัญหา'),
(15, 'ขอเปลี่ยนรถยนต์');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `tel` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `user`, `tel`) VALUES
(1, 'io', NULL),
(2, 'hdjffj', NULL),
(3, 'io', 1234),
(4, '', 0),
(5, 'game', 12345),
(6, 'io', NULL),
(7, 'ipp', NULL),
(8, 'ipp', 1234),
(9, 'ippg', NULL),
(10, 'ippg', 1234),
(11, 'tannn', 0),
(12, 'win', 1234),
(13, 'qaa', 1234567),
(14, 'try', 123456),
(15, 'aaaghi', 1234),
(16, 'gamegame', 123456789),
(17, '', 0),
(18, 'ippg', NULL),
(19, 'ippg', 1234),
(20, 'pppppp', 12345654),
(21, 'atipat', 123456789),
(22, '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Type_Fuel`
--

CREATE TABLE `Type_Fuel` (
  `id_TypeFuel` int(20) NOT NULL,
  `Name_Type_Fuel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type_Fuel`
--

INSERT INTO `Type_Fuel` (`id_TypeFuel`, `Name_Type_Fuel`) VALUES
(1, 'Benzine & Gas'),
(2, 'Diesel & Gas');

-- --------------------------------------------------------

--
-- Table structure for table `Type_Insurance`
--

CREATE TABLE `Type_Insurance` (
  `id_Insurance` int(10) NOT NULL,
  `Name_Insurance` varchar(20) NOT NULL,
  `DetailIns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type_Insurance`
--

INSERT INTO `Type_Insurance` (`id_Insurance`, `Name_Insurance`, `DetailIns`) VALUES
(1, 'ประกันภัยพื้นฐาน', 'หากเกิดอุบัติเหตุที่ผู้เช่าเป็นฝ่ายผิด ผู้เช่าต้องชำระค่าเสียหายส่วนแรกจำนวน 3,000-50,000 บาท ขึ้นอยูกับความเสียหายและระยะเวลาการซ่อม หากรถยนต์ประสบอุบัติเหตุเสียหายหนัก หรือเสียหายทั้งคัน'),
(2, 'ประกันภัยพรีเมี่ยม', 'ประกันที่จะทำให้คุณขับรถได้อย่างมั่นใจไร้กังวลด้วยตัวเลือกที่ทำให้คุณไม่ต้องเสียค่าใช้จ่ายใด ๆ หากคุณต้องรับผิดชอบต่ออุบัติเหตุนั้น ๆ');

-- --------------------------------------------------------

--
-- Table structure for table `Type_Problem`
--

CREATE TABLE `Type_Problem` (
  `id_Type_Problem` int(11) NOT NULL,
  `Name_Type_problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type_Problem`
--

INSERT INTO `Type_Problem` (`id_Type_Problem`, `Name_Type_problem`) VALUES
(1, 'รถยนต์เสีย'),
(2, 'อุบัติเหตุ');

-- --------------------------------------------------------

--
-- Structure for view `Car2`
--
DROP TABLE IF EXISTS `Car2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`admin_touch`@`localhost` SQL SECURITY DEFINER VIEW `Car2`  AS  select `Brand`.`Name_Brand` AS `Name_Brand`,`Generation`.`Name_Gen` AS `Name_Gen`,`Rental`.`idRental` AS `idRental`,`Rental`.`Datebooking` AS `Datebooking`,`Rental`.`startDate` AS `startDate`,`Rental`.`endDate` AS `endDate`,`Rental`.`ReturnDate` AS `ReturnDate`,`Rental`.`totalprice` AS `totalprice`,`Rental`.`Carownerincome` AS `Carownerincome`,`Rental`.`Companyincome` AS `Companyincome`,`Rental`.`PriceCar` AS `PriceCar`,`Rental`.`PriceIns` AS `PriceIns`,`Rental`.`PriceDe` AS `PriceDe`,`Rental`.`PriceOver` AS `PriceOver`,`Rental`.`PriceVat` AS `PriceVat`,`Rental`.`PriceFive` AS `PriceFive`,`Rental`.`Fines_price` AS `Fines_price`,`Rental`.`idCarregis` AS `idCarregis`,`Rental`.`idCarregis2` AS `idCarregis2`,`Rental`.`id_status` AS `id_status`,`Rental`.`id_Member` AS `id_Member`,`Rental`.`id_Employee` AS `id_Employee`,`Rental`.`id_Employee_2` AS `id_Employee_2`,`Rental`.`id_Employee_3` AS `id_Employee_3`,`Rental`.`id_Insurance` AS `id_Insurance` from (((`Rental` join `Carregis` on((`Carregis`.`idCarregis` = `Rental`.`idCarregis2`))) join `Brand` on((`Brand`.`idBrand` = `Carregis`.`idBrand`))) join `Generation` on((`Generation`.`id_Gen` = `Carregis`.`id_Gen`))) where (`Rental`.`id_status` = '11') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brand`
--
ALTER TABLE `Brand`
  ADD PRIMARY KEY (`idBrand`),
  ADD KEY `Name_Brand` (`Name_Brand`);

--
-- Indexes for table `Carregis`
--
ALTER TABLE `Carregis`
  ADD PRIMARY KEY (`idCarregis`),
  ADD KEY `id_Brand` (`idBrand`),
  ADD KEY `idStatus` (`id_Status`),
  ADD KEY `id_Employee` (`id_Employee`),
  ADD KEY `id_Member` (`id_Member`),
  ADD KEY `id_Gen` (`id_Gen`),
  ADD KEY `id_Seat` (`id_Seat`),
  ADD KEY `idFuel` (`idFuel`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`id_Employee`),
  ADD KEY `Row` (`id_position`);

--
-- Indexes for table `Employee_position`
--
ALTER TABLE `Employee_position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `Fuel`
--
ALTER TABLE `Fuel`
  ADD PRIMARY KEY (`idFuel`),
  ADD KEY `id_Type_Fuel` (`id_Type_Fuel`);

--
-- Indexes for table `Generation`
--
ALTER TABLE `Generation`
  ADD PRIMARY KEY (`id_Gen`),
  ADD KEY `idBrand` (`idBrand`),
  ADD KEY `id_Seat` (`id_Seat`),
  ADD KEY `id_Type_Fuel` (`id_Type_Fuel`);

--
-- Indexes for table `Images`
--
ALTER TABLE `Images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `idCarregis` (`idCarregis`);

--
-- Indexes for table `Images2`
--
ALTER TABLE `Images2`
  ADD PRIMARY KEY (`id_image2`),
  ADD KEY `idCarregis` (`idCarregis`);

--
-- Indexes for table `Images3`
--
ALTER TABLE `Images3`
  ADD PRIMARY KEY (`id_image3`),
  ADD KEY `idrent` (`idRental`);

--
-- Indexes for table `Images4`
--
ALTER TABLE `Images4`
  ADD PRIMARY KEY (`id_Image4`),
  ADD KEY `id_Problem` (`id_Problem`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`id_Member`);

--
-- Indexes for table `Not_passed`
--
ALTER TABLE `Not_passed`
  ADD PRIMARY KEY (`id_Not_passed`),
  ADD KEY `idCarregis` (`idCarregis`);

--
-- Indexes for table `Not_passed_rent`
--
ALTER TABLE `Not_passed_rent`
  ADD PRIMARY KEY (`id_Not_passed_rent`),
  ADD KEY `idRental` (`idRental`);

--
-- Indexes for table `Problem`
--
ALTER TABLE `Problem`
  ADD PRIMARY KEY (`id_Problem`),
  ADD KEY `id_Employee` (`id_employee`),
  ADD KEY `idRental` (`idRental`),
  ADD KEY `id_Type_Problem` (`id_Type_Problem`);

--
-- Indexes for table `Rental`
--
ALTER TABLE `Rental`
  ADD PRIMARY KEY (`idRental`),
  ADD KEY `idstatus` (`id_status`),
  ADD KEY `idMember` (`id_Member`),
  ADD KEY `id_Employee` (`id_Employee`),
  ADD KEY `id_Insurance` (`id_Insurance`),
  ADD KEY `idCarregis` (`idCarregis`),
  ADD KEY `id_Employee_2` (`id_Employee_2`),
  ADD KEY `id_Employee_3` (`id_Employee_3`),
  ADD KEY `idCarregis2` (`idCarregis2`),
  ADD KEY `idCarregis3` (`idCarregis3`);

--
-- Indexes for table `Repair`
--
ALTER TABLE `Repair`
  ADD PRIMARY KEY (`id_Repair`),
  ADD KEY `Repair_ibfk_2` (`idRental`);

--
-- Indexes for table `Seat`
--
ALTER TABLE `Seat`
  ADD PRIMARY KEY (`id_Seat`);

--
-- Indexes for table `Status_car`
--
ALTER TABLE `Status_car`
  ADD PRIMARY KEY (`id_Status`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Type_Fuel`
--
ALTER TABLE `Type_Fuel`
  ADD PRIMARY KEY (`id_TypeFuel`);

--
-- Indexes for table `Type_Insurance`
--
ALTER TABLE `Type_Insurance`
  ADD PRIMARY KEY (`id_Insurance`);

--
-- Indexes for table `Type_Problem`
--
ALTER TABLE `Type_Problem`
  ADD PRIMARY KEY (`id_Type_Problem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brand`
--
ALTER TABLE `Brand`
  MODIFY `idBrand` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `Carregis`
--
ALTER TABLE `Carregis`
  MODIFY `idCarregis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `id_Employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `Employee_position`
--
ALTER TABLE `Employee_position`
  MODIFY `id_position` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Fuel`
--
ALTER TABLE `Fuel`
  MODIFY `idFuel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `Generation`
--
ALTER TABLE `Generation`
  MODIFY `id_Gen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;
--
-- AUTO_INCREMENT for table `Images`
--
ALTER TABLE `Images`
  MODIFY `id_image` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;
--
-- AUTO_INCREMENT for table `Images2`
--
ALTER TABLE `Images2`
  MODIFY `id_image2` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;
--
-- AUTO_INCREMENT for table `Images3`
--
ALTER TABLE `Images3`
  MODIFY `id_image3` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;
--
-- AUTO_INCREMENT for table `Images4`
--
ALTER TABLE `Images4`
  MODIFY `id_Image4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Member`
--
ALTER TABLE `Member`
  MODIFY `id_Member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `Not_passed`
--
ALTER TABLE `Not_passed`
  MODIFY `id_Not_passed` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Not_passed_rent`
--
ALTER TABLE `Not_passed_rent`
  MODIFY `id_Not_passed_rent` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Problem`
--
ALTER TABLE `Problem`
  MODIFY `id_Problem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `Rental`
--
ALTER TABLE `Rental`
  MODIFY `idRental` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT for table `Repair`
--
ALTER TABLE `Repair`
  MODIFY `id_Repair` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Seat`
--
ALTER TABLE `Seat`
  MODIFY `id_Seat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Status_car`
--
ALTER TABLE `Status_car`
  MODIFY `id_Status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `Type_Fuel`
--
ALTER TABLE `Type_Fuel`
  MODIFY `id_TypeFuel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Type_Insurance`
--
ALTER TABLE `Type_Insurance`
  MODIFY `id_Insurance` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Type_Problem`
--
ALTER TABLE `Type_Problem`
  MODIFY `id_Type_Problem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Carregis`
--
ALTER TABLE `Carregis`
  ADD CONSTRAINT `Carregis_ibfk_1` FOREIGN KEY (`idBrand`) REFERENCES `Brand` (`idBrand`),
  ADD CONSTRAINT `Carregis_ibfk_2` FOREIGN KEY (`id_Status`) REFERENCES `Status_car` (`id_Status`),
  ADD CONSTRAINT `Carregis_ibfk_3` FOREIGN KEY (`id_Employee`) REFERENCES `Employee` (`id_Employee`),
  ADD CONSTRAINT `Carregis_ibfk_4` FOREIGN KEY (`id_Member`) REFERENCES `Member` (`id_Member`),
  ADD CONSTRAINT `Carregis_ibfk_5` FOREIGN KEY (`id_Gen`) REFERENCES `Generation` (`id_Gen`),
  ADD CONSTRAINT `Carregis_ibfk_6` FOREIGN KEY (`id_Seat`) REFERENCES `Seat` (`id_Seat`),
  ADD CONSTRAINT `Carregis_ibfk_7` FOREIGN KEY (`idFuel`) REFERENCES `Fuel` (`idFuel`);

--
-- Constraints for table `Employee`
--
ALTER TABLE `Employee`
  ADD CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`id_position`) REFERENCES `Employee_position` (`id_position`);

--
-- Constraints for table `Fuel`
--
ALTER TABLE `Fuel`
  ADD CONSTRAINT `Fuel_ibfk_1` FOREIGN KEY (`id_Type_Fuel`) REFERENCES `Type_Fuel` (`id_TypeFuel`);

--
-- Constraints for table `Generation`
--
ALTER TABLE `Generation`
  ADD CONSTRAINT `Generation_ibfk_2` FOREIGN KEY (`idBrand`) REFERENCES `Brand` (`idBrand`),
  ADD CONSTRAINT `Generation_ibfk_3` FOREIGN KEY (`id_Seat`) REFERENCES `Seat` (`id_Seat`),
  ADD CONSTRAINT `Generation_ibfk_4` FOREIGN KEY (`id_Type_Fuel`) REFERENCES `Type_Fuel` (`id_TypeFuel`);

--
-- Constraints for table `Images`
--
ALTER TABLE `Images`
  ADD CONSTRAINT `Images_ibfk_1` FOREIGN KEY (`idCarregis`) REFERENCES `Carregis` (`idCarregis`);

--
-- Constraints for table `Images2`
--
ALTER TABLE `Images2`
  ADD CONSTRAINT `Images2_ibfk_1` FOREIGN KEY (`idCarregis`) REFERENCES `Carregis` (`idCarregis`);

--
-- Constraints for table `Images3`
--
ALTER TABLE `Images3`
  ADD CONSTRAINT `Images3_ibfk_1` FOREIGN KEY (`idRental`) REFERENCES `Rental` (`idRental`);

--
-- Constraints for table `Images4`
--
ALTER TABLE `Images4`
  ADD CONSTRAINT `Images4_ibfk_1` FOREIGN KEY (`id_Problem`) REFERENCES `Problem` (`id_Problem`);

--
-- Constraints for table `Not_passed`
--
ALTER TABLE `Not_passed`
  ADD CONSTRAINT `Not_passed_ibfk_1` FOREIGN KEY (`idCarregis`) REFERENCES `Carregis` (`idCarregis`);

--
-- Constraints for table `Not_passed_rent`
--
ALTER TABLE `Not_passed_rent`
  ADD CONSTRAINT `Not_passed_rent_ibfk_1` FOREIGN KEY (`idRental`) REFERENCES `Rental` (`idRental`);

--
-- Constraints for table `Problem`
--
ALTER TABLE `Problem`
  ADD CONSTRAINT `Problem_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `Employee` (`id_Employee`),
  ADD CONSTRAINT `Problem_ibfk_2` FOREIGN KEY (`idRental`) REFERENCES `Rental` (`idRental`),
  ADD CONSTRAINT `Problem_ibfk_3` FOREIGN KEY (`id_Type_Problem`) REFERENCES `Type_Problem` (`id_Type_Problem`);

--
-- Constraints for table `Rental`
--
ALTER TABLE `Rental`
  ADD CONSTRAINT `Rental_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `Status_car` (`id_Status`),
  ADD CONSTRAINT `Rental_ibfk_2` FOREIGN KEY (`id_Member`) REFERENCES `Member` (`id_Member`),
  ADD CONSTRAINT `Rental_ibfk_3` FOREIGN KEY (`id_Employee`) REFERENCES `Employee` (`id_Employee`),
  ADD CONSTRAINT `Rental_ibfk_4` FOREIGN KEY (`id_Insurance`) REFERENCES `Type_Insurance` (`id_Insurance`),
  ADD CONSTRAINT `Rental_ibfk_5` FOREIGN KEY (`idCarregis`) REFERENCES `Carregis` (`idCarregis`),
  ADD CONSTRAINT `Rental_ibfk_6` FOREIGN KEY (`id_Employee_2`) REFERENCES `Employee` (`id_Employee`),
  ADD CONSTRAINT `Rental_ibfk_7` FOREIGN KEY (`id_Employee_3`) REFERENCES `Employee` (`id_Employee`),
  ADD CONSTRAINT `Rental_ibfk_8` FOREIGN KEY (`idCarregis2`) REFERENCES `Carregis` (`idCarregis`),
  ADD CONSTRAINT `Rental_ibfk_9` FOREIGN KEY (`idCarregis3`) REFERENCES `Carregis` (`idCarregis`);

--
-- Constraints for table `Repair`
--
ALTER TABLE `Repair`
  ADD CONSTRAINT `Repair_ibfk_2` FOREIGN KEY (`idRental`) REFERENCES `Rental` (`idRental`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
