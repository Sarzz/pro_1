-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2015 at 08:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `goods`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
`id` int(11) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `number` int(11) NOT NULL,
  `time` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  `price` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL,
  `top` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `full_name`, `title`, `description`, `email`, `number`, `time`, `image`, `phone`, `location`, `price`, `user_id`, `top`) VALUES
(1, 'Mardanyan Sargis', 'heraxos', 'jHSJBHCXBSD BSDCABSBKhkjbdhcjb jbcjkhb j jm bhm nj juksdbnb jhsd bnd n n n b ACB  dscbkhjscbh  bdkb', 'Sarzz@mail.ru', 95666885, '', '', '', '', '', 0, ''),
(2, 'Mardanyan Sargis', 'ttttttttttttttt', 'dddddddddddddd', 'email', 2147483647, '', '', '', '', '', 0, ''),
(3, '5yetthyterdyh', 'eygtd6rhyr', 'eydhyh ht eyh tg e rytgehg ryh y', 'ehrthrtgh', 346556365, '2015-05-18', '', '', '', '', 0, ''),
(4, '5yetthyterdyh', 'eygtd6rhyr', 'eydhyh ht eyh tg e rytgehg ryh y', 'ehrthrtgh', 346556365, '2015-05-18', '', '', '', '', 0, ''),
(5, 'kjhyfghjf', 'gdfhjgtd', 'htydch tyfjfgfh  jffthfht', 'drtfgdg', 234567, '2015-05-21', '', '', '', '', 0, ''),
(22, 'dsgfkds dshbf,kusd', 'ajkydgsas ysgd ugasukgy', 'ssssssss\r\ndddddddd\r\nfffffffff', 'dsjh@mail.ru', 456876, '2015-07-04', '', 'Siemens', 'aba', '45676', 0, ''),
(23, 'aaaaaa', 'dfadecfa', 'swdfwedf dfaadsc ', 'wedcasc', 4343, '2015-07-07', '', 'HP', 'Aaaa', '23143', 0, ''),
(24, 'bbbbbbbbbbbbb', 'dfadecfa', 'swdfwedf dfaadsc ', 'wedcasc', 4343, '2015-07-07', '', 'HP', 'Aaaa', '23143', 0, ''),
(25, 'bbbbbbbbbbbbb', 'dfadecfa', 'swdfwedf dfaadsc ', 'wedcasc', 4343, '2015-07-07', '', 'HP', 'Aaaa', '23143', 0, ''),
(28, 'jhkgjfg h jjheee', 'ghchgvhjgvn jhvjhvjhaaaaaa', 'jkedcgjwe wyegd wedg uwgdug', 'Suren@mail.ru', 43335556, '2015-07-14', '', 'i-mobile', 'Aaaa', '5555444', 2, ''),
(30, '.hkblb jkbj', 'mn k kj bkknk', 'kjhjih iuh iuh\r\nkhgyufvgyt gy\r\nmhcjyvy', 'mbhlkb@bfvh.tf', 99999999, '2015-07-20', '', 'Apple', 'Aaaa', '1654', 1, '0'),
(31, 'fsdcsdfv', 'sdfcscd', 'scd', 'Sarzz@mail.ru', 54, '2015-07-21', '', 'BlackBerry', 'Aaaa', '2231', 1, ''),
(32, 'chjfgyhnv', 'kdhblk', 'rdthgfhf fg\r\nng,fjnm', 'Sarzz@mail.ru', 8541, '2015-07-21', '', 'BlackBerry', 'Aaaa', '135', 1, '1'),
(33, 'fgncfgncv', 'xcfghdcfg', '/lkfdblkxdfml/\r\nfdkljgndknk', 'Sarzz@mail.ru', 545, '2015-07-21', '', 'Apple', 'aba', '542', 1, ''),
(34, 'dhrtghdrtgh gddhh', 'lkdfsgm k;fdkmg ;l', 'sdf gjkdkgnk,dfn\r\nkcngkdfngkhj', 'Sarzz@mail.ru', 5432, '2015-07-21', '', 'HTC', 'Aaaa', '6484354', 1, ''),
(35, 'dxfbfcvbc fd sgbf', 'lkdfjgh ekfjdks', 'dlgkh;ldfb lkm<br />\r\nkfjghk djfgdjn<br />\r\nfkdfgnjkdn b<br />\r\nfd.,sjnkfbn .k', 'Sarzz@mail.ru', 425452, '2015-07-21', '8845-$_1(12).JPG', 'HP', 'Aaaa', '543551', 1, '1'),
(36, 'Sargis Mardanyan', 'Blackberry z10', 'GENERAL<br />\r\nRelease date	January 2013<br />\r\nForm factor	Touchscreen<br />\r\nDimensions (mm)	130.00 x 65.60 x 9.00<br />\r\nWeight (g)	136.00<br />\r\nBattery capacity (mAh)	1800<br />\r\nRemovable battery	Yes<br />\r\nColours	Black, White<br />\r\nSAR value	NA DISPLAY<br />\r\nScreen size (inches)	4.20<br />\r\nTouchscreen	Yes<br />\r\nResolution	768x1280 pixels<br />\r\nPixels per inch (PPI)	356 HARDWARE<br />\r\nProcessor	1.5GHz  dual-core<br />\r\nRAM	2GB<br />\r\nInternal storage	16GB<br />\r\nExpandable storage	Yes<br />\r\nExpandable storage type	microSD<br />\r\nExpandable storage up to (GB)	32 CAMERA<br />\r\nRear camera	8-megapixel<br />\r\nFlash	Yes<br />\r\nFront camera	2-megapixel<br />\r\nSOFTWARE<br />\r\nOperating System	BlackBerry OS 10 CONNECTIVITY<br />\r\nWi-Fi	Yes<br />\r\nWi-Fi standards supported	802.11 a/ b/ g/ n<br />\r\nGPS	Yes<br />\r\nBluetooth	Yes, v 4.00<br />\r\nNFC	Yes<br />\r\nInfrared	No<br />\r\nWi-Fi Direct	No<br />\r\nMHL Out	No<br />\r\nHDMI	Yes<br />\r\nHeadphones	3.5mm<br />\r\nFM	No<br />\r\nSIM Type	Regular<br />\r\nGSM/ CDMA	GSM<br />\r\n3G	Yes<br />\r\n4G/ LTE	Yes<br />\r\nSupports 4G in India (Band 40)	No SENSORS<br />\r\nCompass/ Magnetometer	Yes<br />\r\nProximity sensor	Yes<br />\r\nAccelerometer	Yes<br />\r\nAmbient light sensor	Yes<br />\r\nGyroscope	Yes<br />\r\nBarometer	No<br />\r\nTemperature sensor	No', 'Sarzz@mail.ru', 55444555, '2015-07-21', '8381-$_1.JPG', 'BlackBerry', 'Aaaa', '10000', 1, '1'),
(38, 'dtuyftyjyu uygikjk', 'kjdshf hsdf jkhgsbdkfj', '.vjhb kj klsjhngvklsdf\\<br />\r\nmndsf jsdbfk sb fjshdb <br />\r\ndf sdhvdkjf ikkn<br />\r\nsdk.jfvh jsdnb sb<br />\r\nfd,gn sjcnbmdn, hjf saqo', 'admin@admin.com', 852147852, '2015-07-29', '7638-$_1(11).JPG', 'Lenovo', 'aba', '850004', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
`id` int(11) NOT NULL,
  `location` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'Aaaa'),
(2, 'aba');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
`id` int(11) NOT NULL,
  `phone` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `phone`) VALUES
(1, 'Acer'),
(2, 'HTC'),
(3, 'Lenovo'),
(4, 'Motorola'),
(5, 'Orange'),
(6, 'Sony'),
(7, 'Sony Ericsson'),
(8, 'Vodafone'),
(9, 'Xiaomi'),
(10, 'Apple'),
(11, 'BlackBerry'),
(12, 'HP'),
(13, 'Huawei'),
(14, 'i-mobile'),
(15, 'LG'),
(16, 'Micromax'),
(17, 'Nokia'),
(18, 'Pantech'),
(19, 'Philips'),
(20, 'Samsung'),
(21, 'Siemens'),
(22, 'VK Mobile'),
(23, 'ZTE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `number` int(11) NOT NULL,
  `location` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `number`, `location`, `email`) VALUES
(1, 'Sarzz', '666885', 'Sargis Mardanyan', 95666885, 'aba', 'Sarzz@mail.ru'),
(2, 'Suren', '536451', 'Suren Mardanya', 94536451, 'Aaaa', 'Suren621-2@mail.ru'),
(3, 'admin', 'admin', '', 0, '', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
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
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
