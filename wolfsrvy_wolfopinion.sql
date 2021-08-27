-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2021 at 04:21 PM
-- Server version: 10.1.45-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wolfsrvy_wolfopinion`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `business_email` varchar(250) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `business_name` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `linked_profile` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `age`, `business_email`, `password`, `business_name`, `phone_number`, `country`, `linked_profile`) VALUES
(3, 'Inderjit', 'Singh', 'princeinder92@gmail.com', 65, 'princeinder92@gmail.com', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '78545555', 'Albania', 'dsfsdfasdasd'),
(4, 'Inderjit', 'inder', 'test123@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '78545555', 'Bangladesh', ''),
(5, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(6, 'kjjjjj  ', 'hashd', 'princeinder92@gmail.com', 40, 'princeinder92@gmail.com', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '6544444', 'Azerbaijan', 'dsfsdfasdasd'),
(7, 'Inderjit', 'Singh', 'princeinder92@gmail.com', 45, 'princeinder92@gmail.com', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '754444', 'Algeria', 'dsfsdfasdasd'),
(8, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(9, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(10, 'Inder', 'singh', 'princeinder92@gmail.com', 45, 'princeinder92@gmail.com', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '54455445', 'Albania', 'dsfsdfasdasd@gmail.com'),
(11, 'prince', 'Singh', 'princeinder92@gmail.com', 65, 'princeinder92@gmail.com', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '88888', 'Algeria', 'dsfsdfasdasd'),
(12, 'prince', 'Singh', 'princeinder92@gmail.com', 45, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'test', '66555', 'Albania', ''),
(13, 'prince', 'Singh', 'princeinder92@gmail.com', 24, 'princeinder92@gmail.com', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder92@gmail.com', '78545555', 'Aruba', 'dsfsdfasdasd'),
(14, 'Inderjit', 'Singh', 'princeinder92@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder92@gmail.com', '78545555', 'Bahrain', ''),
(15, 'Inderjit', 'Singh', 'princeinder92@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', '4447wer', 'qewer', 'Albania', ''),
(16, 'Inderjit', 'Singh', 'princeinder92@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', '544777asdds', 'asdasd655as54da', 'Australia', ''),
(17, 'prince', 'Singh', 'princeinder92@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'hjshd@sa', '45444444sad', 'Austria', ''),
(18, 'prince', 'inder', 'princeinde578777@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'asdasdm', 'asd5444', 'Algeria', ''),
(19, 'prince', 'inder', 'princeinde578777@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'asdasdm', 'asd5444', 'Algeria', ''),
(20, 'Inderjit', 'Singh', 'princeinde578777@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder92@gmail.com', '78545555', 'Algeria', ''),
(21, 'Inderjit', 'Singh', 'princeinde578777@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder92@gmail.com', '878788', 'Austria', ''),
(22, 'Inderjit', 'inder', 'princeinde57877447@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder9dsf2@gmail.com', '78545555sdf65', 'Bahrain', ''),
(23, 'prince', 'Singh', 'princeinde57877447@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeindsdsder92@gmail.com', '78545555655', 'Austria', ''),
(24, 'prince', 'singh', 'princeinder92@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder92@gmail.com', '+91755085555', 'Australia', ''),
(25, 'prince', 'Singh', 'princeinde56444r92@gmail.com', 65, '', '7afe1148ce2551acabdc8a3ef7f655a4', 'princeinder4545492@gmail.com', '785455554544', 'Austria', ''),
(26, 'Manish', 'Kumar ', '', 33, '', '901148c9fc378ad83ba502ac0ce69d37', 'Hdjshahh ki sygs', '3079916926', 'Canada', ''),
(27, 'Marek', 'Skutnik', 'Marek.Skutnik@wp.pl', 36, '', '5432bcfe0bc0b263a0522f32a27b48e4', 'm stonemason', '733175048', 'Poland', 'https://www.linkedin.com/in/marek-skutnik-2b7ba7135/'),
(28, 'lu', 'jianjie', 'lujianjie1981@aliyun.com', 39, 'lujianjie1981@aliyun.com', 'e5133871d29b7210fc07aa42e8bad35c', 'Jacyã€', '13811409435', 'China', 'simba2000@126.com'),
(29, 'jan', 'salown', 'tartaaan@gmail.com', 34, 'tartaaan@gmail.com', 'ac21486afbdfa7c4aefe7743802ed0d8', 'mr', '646-681-5221', 'United States of America', 'taaro2a'),
(30, 'sherry Smith', 'Smith', 'sherrysmith8989@gmail.com', 31, 'NA@sherry.com', 'bbeb1231545d4405b77446b3f7fe6c4b', 'Sherry Pvt Ltd', '81300014567', 'France', 'sherry @linked.com'),
(31, 'Paritosh', 'Kumar', 'sudhansupari@gmail.com', 32, 'sudhansupari@gmail.com', '1b307d0291129de545345db30b309989', 'Full employed', '7840866589', 'India', ''),
(32, 'PARMOD', 'KUMAR', 'PARMODGARG72@GMAIL.COM', 38, '', 'd24067c3d656aed37886b3c6ad3a3e29', 'HGS INFOTEL', '09466214694', 'India', ''),
(33, 'SOURAV', 'RAY', 'souravraymusic18@gmail.com', 24, '', '6efd8b468b4a78e49bc28611d639bce3', 'Bandhan', '8609665411', 'India', 'https://www.linkedin.com/in/sourav-ray-4b1586140'),
(34, 'Rishi', 'Kumar', 'rishi@pacificdatasolution.com', 24, 'business@pacificdatasolution.com', '904b4fd3aa5e9057e7846f9887bbdc7e', 'Pacific Data Solution', '9870436361', 'India', 'https://www.linkedin.com/in/rishi-kumar-0a9073210'),
(35, 'Ali', 'Shamma', 'Helen.Phair.90@outlook.com', 38, 'aloushy060@gmail.com', 'ebfe3e7aea71077da94efd4f394d1201', 'newlife', '5095568745', 'United States of America', 'topallfree.com'),
(36, 'Gurjot', 'Singh', 'gurjotdrive@gmail.com', 30, '', 'f509d4bdadd89dc0e6902656413fa9bd', 'Infosys', '7006010759', 'India', ''),
(37, 'Juliette', 'Monpays', 'juliette.monpays@gmail.com', 27, '', '14c9eba5b2d5354e502ca2adecab8959', 'Monpays', '017642744643', 'Germany', ''),
(38, 'Bin', 'Blanc', 'bennose@gmail.com', 53, '', '7e0323e593e0181e69e56876813cb5a3', 'not applicable', '+49 1762 4628293', 'Germany', ''),
(39, 'Son', 'Nguyen Hong', 'sonneptune_tuxedo@yahoo.com', 38, '', '48b9f21c840f15aa938348843bdb9407', 'ICE Consulting', '07533398730', 'United Kingdom', ''),
(40, 'TESTING', 'TESTING', '1@1.COM', 44, '', 'c20ad4d76fe97759aa27a0c99bff6710', 'TESTING', '1234567891', 'United States of America', ''),
(41, 'Girjesh', 'singh', 'TOMARGIRJESH@GMAIL.COM', 21, '', '519f0dea4eee2a33f0402d960f7261d8', 'G.S.ORGANISATION ', '7302502938', 'India', ''),
(42, 'abdul', 'rahman', 'arabdulrahman@yahoo.co.in', 37, '', '39ec59b78cd67e2d189ccc382177907c', 'threebond', '9840241429', 'India', 'https://www.linkedin.com/in/abdul-rahman-6bb89439/'),
(43, 'Nishant', 'Singh', 'nishant.ranawat61@gmail.com', 21, 'nishant.ranawat61@gmail.com', '7c43c99b1e19d1b8152f9e4f3772fe71', 'AN all solutions pvt. Ltd. ', '9560768490', 'India', 'https://www.linkedin.com/mwlite/in/nishant-singh-04b8b0217'),
(44, 'Ellis', 'High', 'Ellis445565@outlook.com', 31, '', 'ba47a098e4ecbd34a61ce5a69b79bad5', 'Ellis445565@outlook.com', '6165288420', 'United States of America', ''),
(45, 'Gulzar', 'Malik', 'gulzarmalik0987@gmail.com', 22, 'gulzarmalik0987@gmail.com', '0382655638edf0164523ff891bd28b5f', 'GM Tech Solutions', '7683016515', 'India', ''),
(46, 'Siddhant', 'Gautam', 'siddhant9612@gmail.com', 21, 'siddhant9612@gmail.com', '8649f78492bff7a7b0b9b951f362fa93', 'Siddhant Gautam', '8882763986', 'India', 'https://www.linkedin.com/in/siddhanttgautam'),
(47, 'CHETAN', 'CHETAN', 'chetan332009@gmail.com', 35, '', '290cb2cabb7711f12e19470f7040faac', 'IT', '9888077616', 'India', ''),
(48, 'Andi', 'Henderson', 'bancdechalet@fea.st', 45, '', 'b5751bd07c449a92d87b718137e6a189', 'Grey Consulting', '9378309849', 'United States of America', ''),
(49, 'Bisman', 'Luthra', 'bismansimran@gmail.com', 26, '', 'aae009cd323f3ad82d5595bdc3d0f0fc', 'NA', '9917040258', 'India', 'https://www.linkedin.com/feed/'),
(50, 'ting', 'Qiu', 'nick7summer@hotmail.com', 30, 'nick7summer@hotmail.com', 'bd3205c6cc19f4d377a51ef874fd9297', 'yooni', '+8613557187672', 'China', ''),
(51, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(52, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(53, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', ''),
(54, '', '', '', 0, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
