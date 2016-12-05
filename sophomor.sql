-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2015 at 11:37 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sophomor`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `catid` bit(3) NOT NULL,
  `catname` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(b'001', 'Books'),
(b'010', 'Clothing'),
(b'011', 'Electronics'),
(b'100', 'Furniture'),
(b'101', 'Sports'),
(b'110', 'Vehicle'),
(b'111', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `cid` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`cid`, `cname`) VALUES
(1, 'Aligarh Muslim University, Aligarh'),
(2, 'All India Institute of Medical Sciences, Bhopal'),
(3, 'All India Institute of Medical Sciences, Delhi'),
(4, 'All India Institute of Medical Sciences, Jodhpur'),
(5, 'All India Institute of Medical Sciences, Patna'),
(6, 'Amity University, Noida'),
(7, 'Andhra University, Visakhapatnam'),
(8, 'Assam University, Silchar'),
(9, 'Banaras Hindu University, Varanasi'),
(10, 'Birla Institute of Technology and Science, Goa'),
(11, 'Birla Institute of Technology and Science, Hyderabad'),
(12, 'Birla Institute of Technology and Science, Pilani'),
(13, 'Birla Institute of Technology, Mesra'),
(14, 'BMS College of Engineering, Bangalore'),
(15, 'Chaitanya Bharathi Institute of Technology, Hyderabad'),
(16, 'Central University of Jharkhand, Ranchi'),
(17, 'College of Engineering, Pune'),
(18, 'Delhi Technological University, New Delhi'),
(19, 'Delhi University (North Campus), New Delhi'),
(20, 'Delhi University (South Campus), New Delhi'),
(21, 'Dhirubhai Ambani Institute of Info. and Comm. Tech., Gandhinagar'),
(22, 'Engineering College, Bikaner'),
(23, 'Galgotia University & College of Engg., Greater Noida'),
(24, 'Govind Ballabh Pant Engineering College,Pauri Garhwal'),
(25, 'Harcourt Butler Technological Institute, Kanpur'),
(26, 'ICARE (Indian Center for Advancement of Research & Ed.), Haldia'),
(27, 'Indian Institute of Information Technology, Allahabad'),
(28, 'Indian Institute of Science, Banglore'),
(29, 'Indian Institute of Technology, Bhubaneshwar'),
(30, 'Indian Institute of Technology, Bombay'),
(31, 'Indian Institute of Technology, Delhi'),
(32, 'Indian Institute of Technology, Gandhinagar'),
(33, 'Indian Institute of Technology, Guwahati'),
(34, 'Indian Institute of Technology, Hyderabad'),
(35, 'Indian Institute of Technology, Indore'),
(36, 'Indian Institute of Technology, Kanpur'),
(37, 'Indian Institute of Technology, Kharagpur'),
(38, 'Indian Institute of Technology, Madras'),
(39, 'Indian Institute of Technology, Mandi'),
(40, 'Indian Institute of Technology, Patna'),
(41, 'Indian Institute of Technology, Roorkee'),
(42, 'Indian Institute of Technology, Ropar'),
(43, 'Indian Institute of Tech. & MBM Engineering College, Jodhpur'),
(44, 'International Institute of Information Technology, Banglore'),
(45, 'International Institute of Information Technology, Hyderabad'),
(46, 'Indian Institute of Info. Tech. and Management, Gwalior'),
(47, 'Indian Institute of Info. Tech., Design and Manufacturing, Jabalpur'),
(48, 'Indian Institute of Science Education and Research, Kolkata'),
(49, 'Indian Institute of Space Science and Tech., Thiruvananthapuram'),
(50, 'Indian School of Mines, Dhanbaad'),
(51, 'Indraprastha University (North Campus), Delhi'),
(52, 'Jabalpur Engineering College, Jabalpur'),
(53, 'Jadavpur University, West Bengal'),
(54, 'Jaipur National University, Jaipur'),
(55, 'Jamia Millia Islamia, New Delhi'),
(56, 'Jawaharlal Nehru Technological University, Hyderabad'),
(57, 'Jawaharlal Nehru University, New Delhi'),
(58, 'Jaypee Institute of Information Technology, Noida'),
(59, 'Kalasalingam University, Krishnankoil'),
(60, 'KIIT University, Bhubaneswar'),
(61, 'Kurukshetra University, Kurukshetra'),
(62, 'LNM Institute of Information Technology, Jaipur'),
(63, 'Lovely Professional University, Punjab'),
(64, 'Maharashtra Institute of Technology, Pune'),
(65, 'Maharshi Dayanand University, Rohtak'),
(66, 'Manav Rachana College of Engineering, Faridabad'),
(67, 'Manipal University, Manipal'),
(68, 'Mody Institute of Technology and Science, Laxmangarh'),
(69, 'Narsee Monjee Institute of Management Studies University, Mumbai'),
(70, 'NIT, Agartala'),
(71, 'NIT, Allahabad'),
(72, 'NIT, Bhopal'),
(73, 'NIT, Calicut'),
(74, 'NIT, Delhi'),
(75, 'NIT, Durgapur'),
(76, 'NIT, Goa'),
(77, 'NIT, Hamirpur'),
(78, 'NIT, Jaipur'),
(79, 'NIT, Jalandhar'),
(80, 'NIT, Jamshedpur'),
(81, 'NIT, Kurukshetra'),
(82, 'NIT, Nagpur'),
(83, 'NIT, Patna'),
(84, 'NIT, Raipur'),
(85, 'NIT, Rourkela'),
(86, 'NIT, Sikkim'),
(87, 'NIT, Surat'),
(88, 'NIT, Surathkal'),
(89, 'NIT, Srinagar'),
(90, 'NIT, Tiruchirappalli'),
(91, 'NIT, Uttrakhand'),
(92, 'NIT, Warangal'),
(93, 'Nirma University, Ahmedabad'),
(94, 'Osmania University, Hyderabad'),
(95, 'Pandit Deendayal Petroleum University, Gandhinagar'),
(96, 'Punjab Engineering College, Chandigarh'),
(97, 'Punjab University, Chandigarh'),
(98, 'R.V. College of Engineering, Bangalore'),
(99, 'SASTRA University, Thanjavur'),
(100, 'Sharda University, Greater Noida'),
(101, 'Shri Govindram Seksaria Institute of Technology and Science, Indore'),
(102, 'Shri Mata Vaishno Devi University, J&K'),
(103, 'SMS Medical College, Jaipur'),
(104, 'SRM University (Kattankulathur), Chennai'),
(105, 'SRM University (Ramapuram), Chennai'),
(106, 'SRM University (Vadapalani), Chennai'),
(107, 'Swami Keshvanand Institute Of Technology, Jaipur'),
(108, 'Symbiosis International University, Pune'),
(109, 'Rajasthan Technical University, Kota'),
(110, 'TERI University, Delhi'),
(111, 'Tezpur University, Tezpur'),
(112, 'Thapar University, Punjab'),
(113, 'University of Petroleum and Energy Studies, Dehradun'),
(114, 'University of Pune, Pune'),
(115, 'VIT University, Vellore'),
(116, 'YMCA University of Science and Technology, Faridabad');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE IF NOT EXISTS `errors` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `error` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `uid` mediumint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`id`, `error`, `date`, `uid`) VALUES
(1, '0alredy exists in9', 'January 16, 2015', 2),
(2, '0alredy exists in9', 'January 16, 2015', 2),
(3, '0alredy exists in9', 'January 16, 2015', 2),
(4, 'Could not upload file', 'January 18, 2015', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `display` bit(1) DEFAULT b'0',
  `uid` mediumint(8) unsigned NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cid` int(11) unsigned NOT NULL,
  `price` mediumint(8) unsigned DEFAULT NULL,
  `catid` bit(3) NOT NULL,
  `date` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `i` bit(1) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `cid` (`display`,`cid`),
  KEY `cid_catid` (`display`,`cid`,`catid`),
  KEY `uid` (`display`,`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `display`, `uid`, `title`, `cid`, `price`, `catid`, `date`, `contact`, `description`, `i`) VALUES
(1, b'1', 1, 'Basic Electronics, N N Bhargav ', 78, 100, b'001', 'January 15, 2015', '9845671239', '1st edition. MRP 340 INR.', b'1'),
(2, b'1', 2, 'Private Games,James Patterson', 9, 80, b'001', 'January 15, 2015', '9576142397', 'Rs. 208 on Amazon,and 273 on snapdeal.\r\nrated above 4/5.\r\n', b'0'),
(3, b'1', 1, 'Samsung Galaxy S Advance ', 78, 9000, b'011', 'January 15, 2015', 'www.facebook.com/devendra59', 'full accessories &amp; bill, used just for 13 months. contact me 8290338595 .', b'1'),
(5, b'1', 1, 'BME workshop dress, 28 waist', 78, 150, b'010', 'January 15, 2015', 'www.facebook.com/vatsal_bhucha', 'condition ok. one year used. MRP 450', b'1'),
(6, b'1', 1, 'Mechanical Engineering, AK Rajhvanshi', 78, NULL, b'001', 'January 15, 2015', '8952037945', NULL, b'0'),
(7, b'1', 2, 'Samsung Galaxy Ace S5830i', 9, 4500, b'011', 'January 15, 2015', '8974568695', 'with two back panels, purchased one and a half year back,excellent condition,  with receipt...\r\nYou can contact me at 9571659307', b'1'),
(8, b'1', 2, 'Electronics &amp; Electrical engineering : H P tiw', 9, 100, b'001', 'January 15, 2015', '8975698695', 'MRP 250 1 yr used in good condition', b'1'),
(9, b'1', 2, 'karbonn A6', 9, 1000, b'011', 'January 15, 2015', '897456945', '6 months used with bill. black color in good condition', b'1'),
(10, b'1', 2, 'Digital Signal Processing ', 9, NULL, b'001', 'January 15, 2015', '775896795', 'Author : Sallivahnan Vallavaraj Gnanapriya \r\nFirst Page Torn Rest is intact. \r\nA year old', b'0'),
(11, b'1', 2, 'Let Us C', 9, 150, b'001', 'January 15, 2015', '7895693656', 'Author : Yashvant Kanetkar\r\nOne year old pretty good condition', b'1'),
(12, b'1', 2, 'Engineering Chemistry, Jain and Jain', 9, 90, b'001', 'January 15, 2015', '7896963456', 'in good condition', b'1'),
(13, b'1', 2, 'Insights , English Text Book', 9, 60, b'001', 'January 15, 2015', 'www.facebook.com/utkrarsh', '', b'1'),
(14, b'1', 2, 'Gaur and Koul', 9, NULL, b'001', 'January 15, 2015', '7856978696', 'A one year old book of Mathematics used in the first year...', b'0'),
(15, b'1', 2, 'Engineering Drawing, PS Gill', 9, 200, b'001', 'January 15, 2015', 'kesav.hot@gmail.com', 'MRP 335 ', b'1'),
(16, b'1', 2, 'Economics, yogesh maheshwari', 9, 150, b'001', 'January 15, 2015', '8523467952', NULL, b'1'),
(17, b'1', 2, 'BME WORKSHOP DRESS', 9, NULL, b'010', 'January 15, 2015', '8952346795', 'actual prize : Rs. 400\r\nDress size : 32 waist\r\ncontact no. 8741027160', b'0'),
(18, b'1', 2, 'lumia 520', 9, 4000, b'011', 'January 15, 2015', '7845693465', 'MRP 8300used for 6 months', b'1'),
(19, b'1', 2, 'Guitar for sale', 9, 2000, b'111', 'January 15, 2015', '7895469456', 'Guitar is about 8 months old and is in good condition.It was purchased for Rs.5500.', b'1'),
(20, b'1', 2, 'Lumia earphone', 9, 350, b'011', 'January 15, 2015', '7845964569', 'Nokia Lumia 920 earphone, not used.', b'1'),
(21, b'1', 2, 'classic black tie', 9, 300, b'010', 'January 15, 2015', '7845964569', 'Brand new', b'1'),
(45, b'1', 3, 'Electronics Devices , Boylestad', 2, 375, b'001', 'January 18, 2015', '09415732787', NULL, b'1'),
(46, b'1', 3, 'Blackberry Bold Touch 9900', 2, 10000, b'011', 'January 18, 2015', 'vinay.rahul@gmail.com', 'New condition with all accessories. | MRP 19000', b'1'),
(43, b'1', 2, 'fastrack specs', 9, 650, b'111', 'January 16, 2015', '8945678945', '3 months used', b'1'),
(40, b'1', 2, 'calculator casio991 es', 9, 500, b'011', 'January 16, 2015', '7896459645', 'it is 1 yr old calculator when i bought its cost was 850', b'1'),
(42, b'1', 2, 'Samsung galaxy tab 2 P3100', 9, 10000, b'011', 'January 16, 2015', '7845964569', 'One year old in good working condition', b'1'),
(41, b'1', 2, 'Three Men in a Boat', 9, NULL, b'001', 'January 16, 2015', '7845965696', 'Author Jerome K Jerome\r\nBook in perfect new condition.', b'0'),
(38, b'1', 2, 'The Secret, by Rohnda Byrne (Hardcover', 9, 200, b'001', 'January 16, 2015', '7896459645', 'Price on Flipkart 388 INR. In brand new condition.', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pwdhash` varchar(42) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'UNKNOWN',
  `cid` tinyint(3) unsigned DEFAULT NULL,
  `F` bit(1) DEFAULT NULL,
  `PRC` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `pwdhash`, `firstname`, `cid`, `F`, `PRC`) VALUES
(1, 'mr.different@live.in', '751fae0a9a293aefa3625f3d2216f5d7f96bf1ac', 'Utkarsh', 78, NULL, NULL),
(2, 'a@b.cd', 'ad5333beb0b6fda50a0eac3528495b97fc4b9902', 'jharvard', 9, b'1', NULL),
(3, 'mr.dffrnt@gmail.com', 'ad5333beb0b6fda50a0eac3528495b97fc4b9902', 'utkarsh', 2, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
