-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2016 at 09:26 AM
-- Server version: 10.1.18-MariaDB-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sayaitoe_crypton`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `placeholder` varchar(255) NOT NULL,
  `comment1` varchar(255) NOT NULL,
  `comment2` varchar(255) NOT NULL,
  `html` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `question`, `answer`, `image`, `placeholder`, `comment1`, `comment2`, `html`, `description`) VALUES
(15, 0, 'random', '9cdfb439c7876e703e307864c9167a15', '', '', '', '', '', 'sayam'),
(18, 1, 'Bla', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', 'bakwaas');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `status`, `ip`, `time`) VALUES
(45, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-06 12:24:54 AM'),
(46, 'admin@sk.com', 'admin', 'Successful', '127.0.0.1', '2016-07-06 12:32:20 AM'),
(47, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-06 12:32:47 AM'),
(48, 'admin@sk.com', 'admin', 'Successful', '127.0.0.1', '2016-07-06 12:33:27 AM'),
(49, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-06 12:34:35 AM'),
(50, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-07 09:39:39 AM'),
(51, 'admin@sk.com', 'admin', 'Successful', '127.0.0.1', '2016-07-07 09:44:02 AM'),
(52, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-07 09:47:52 AM'),
(53, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-07 08:19:40 PM'),
(54, 'sayamk@gmail.com', 'sayamk', 'Successful', '127.0.0.1', '2016-07-07 09:12:37 PM'),
(55, 'sayamk@gmail.com', 'sayamk', 'Successful', '182.68.175.237', '2016-07-07 09:46:51 PM'),
(56, 'sayamk@gmail.com', 'sayamk', 'Successful', '182.68.175.237', '2016-07-07 09:47:11 PM'),
(57, 'sayamkanwar616@gmail.com', 'final', 'Successful', '182.68.175.237', '2016-07-07 11:21:38 PM'),
(58, 'sayamkanwar616@gmail.com', 'final', 'Successful', '182.68.175.237', '2016-07-07 11:25:04 PM'),
(59, 'admin@sk.com', 'admin', 'Successful', '182.68.175.237', '2016-07-07 11:25:44 PM'),
(60, 'admin@sk.com', 'admin', 'Successful', '182.68.175.237', '2016-07-07 11:26:10 PM'),
(61, 'ashudua2001@gmail.com', 'Ashudua2001', 'Successful', '182.68.175.237', '2016-07-07 11:30:24 PM'),
(62, 'ashudua2001@gmail.com', 'Ashudua2001', 'Successful', '182.68.175.237', '2016-07-07 11:30:42 PM'),
(63, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '182.68.166.223', ''),
(64, 'sayamkanwar616@gmail.com', 'final', 'Successful', '182.68.166.223', '2016-07-20 05:02:07 PM'),
(65, 'sayamkanwar616@gmail.com', 'final', 'Successful', '182.68.166.223', '2016-07-20 05:02:27 PM'),
(66, 'sayamkanwar616@gmail.com', 'final', 'Successful', '182.68.166.223', '2016-07-20 05:02:49 PM'),
(67, 'sbansalcs@gmail.com', 'shivam', 'Successful', '103.248.94.217', '2016-07-27 10:24:09 AM'),
(68, 'sbansalcs@gmail.com', 'shivam', 'Successful', '103.248.94.217', '2016-07-27 10:24:30 AM'),
(69, 'admin@sk.com', 'admin', 'Successful', '103.248.94.217', '2016-07-27 10:25:20 AM'),
(70, 'jainjain.golu@gmail.com', 'anshit', 'Successful', '103.248.94.45', '2016-07-29 09:25:12 AM'),
(71, 'jainjain.golu@gmail.com', 'anshit', 'Successful', '103.248.94.45', '2016-07-29 09:25:42 AM'),
(72, 'jainjain.golu@gmail.com', 'anshit', 'Successful', '103.248.94.45', '2016-07-29 09:27:26 AM'),
(73, 'admin@sk.com', 'admin', 'Successful', '103.248.94.45', '2016-07-29 09:29:14 AM'),
(74, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(75, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(76, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(77, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(78, 'sayamkanwar616@gmail.com', 'final', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:08:21 AM'),
(79, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(80, 'sayamkanwar616@gmail.com', 'final', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:08:59 AM'),
(81, 'admin@sk.com', 'admin', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(82, 'admin@sk.com', 'admin', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:22:00 AM'),
(83, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(84, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(85, 'sayamkanwar616@gmail.com', 'final', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:32:51 AM'),
(86, 'sayamkanwar616@gmail.com', 'final', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:37:53 AM'),
(87, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(88, 'sayamkanwar616@gmail.com', 'final', 'Unsuccessful', '192.168.1.122, 203.189.244.70', ''),
(89, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:44:52 AM'),
(90, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '192.168.1.122, 203.189.244.70', '2016-08-15 02:45:37 AM'),
(91, 'isharo@commvault.com', 'isharo', 'Successful', '182.68.90.11', '2016-08-17 05:40:21 PM'),
(92, 'sayamkanwar@hotmail.com', 'sk', 'Unsuccessful', '182.68.90.11', ''),
(93, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '182.68.90.11', '2016-08-17 05:44:57 PM'),
(94, 'admin@sk.com', 'admin', 'Successful', '182.68.90.11', '2016-08-17 05:46:57 PM'),
(95, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '171.48.54.187', '2016-09-30 03:27:38 PM'),
(96, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '171.48.54.187', '2016-10-02 03:32:57 PM'),
(97, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '171.48.54.187', '2016-10-02 03:33:15 PM'),
(98, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '103.28.252.235', '2016-10-25 01:19:48 PM'),
(99, 'sayamkanwar616@gmail.com', 'bro', 'Successful', '103.248.92.143', '2016-12-21 11:10:53 AM'),
(100, 'admin@sk.com', 'admin', 'Successful', '103.248.92.143', '2016-12-21 12:15:43 PM'),
(101, 'sayamkanwar616@gmail.com', 'sk', 'Unsuccessful', '182.68.180.159', ''),
(102, 'sayamkanwar616@gmail.com', 'proaf', 'Successful', '182.68.180.159', '2016-12-23 07:51:32 PM');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `uid` int(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(255) NOT NULL,
  `status` int(11) NOT NULL,
  `usertype` int(11) NOT NULL,
  `confirm` int(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`uid`, `id`, `name`, `email`, `username`, `password`, `level`, `status`, `usertype`, `confirm`, `time`, `ip`) VALUES
(15053710, 4, 'admin', 'admin@sk.com', 'admin', 'a848dfca9b4e4bd301d12df657db981a', 0, 2, 2, 0, '', '127.0.0.1'),
(67502442, 5, 'sayam kanwar', 'sayamk@gmail.com', 'sayamk', 'f4d61f37a65be25d9a7491d19d4ef101', 0, 1, 1, 0, '', '127.0.0.1'),
(38027330, 6, 'rahul gandhi', 'sayamkanwar616@gmail.com', 'rahul', 'f18ed7847686171c3f3f8670cdb0291e', 0, 1, 1, 0, '', '182.68.175.237'),
(10134569, 7, 'sonia', 'sayamkanwar616@gmail.com', 'sonia', 'f18ed7847686171c3f3f8670cdb0291e', 0, 1, 1, 0, '', '182.68.175.237'),
(46605443, 8, 'blah', 'sayamkanwar616@gmail.com', 'haha', '529ca8050a00180790cf88b63468826a', 0, 1, 1, 0, '', '182.68.175.237'),
(35141819, 9, 'iron man', 'sayamkanwar616@gmail.com', 'iron', '39c63ddb96a31b9610cd976b896ad4f0', 0, 1, 1, 0, '', '182.68.175.237'),
(95945946, 10, 'yolo', 'sayamkanwar616@gmail.com', 'honey', '2865a5b14e5a70273a7d311bfc150f4f', 0, 1, 1, 0, '', '182.68.175.237'),
(46595053, 11, 'khamosh', 'sayamkanwar616@gmail.com', 'idea', '6ee64f80758acb6cf70864bdfdf9e108', 0, 1, 1, 0, '', '182.68.175.237'),
(50064721, 12, 'rohil kanwar', 'sayamkanwar616@gmail.com', 'rk', 'f4d61f37a65be25d9a7491d19d4ef101', 0, 1, 1, 0, '', '182.68.175.237'),
(92674014, 13, 'ashish dua', 'sayamkanwar616@gmail.com', 'ashu', 'a319360336c8cac32102f4dffbee4260', 0, 1, 1, 0, '', '182.68.175.237'),
(36834843, 14, 'pro', 'sayamkanwar616@gmail.com', 'pro', '1f0f70bf2b5ad94c7387e64c16dc455a', 0, 1, 1, 0, '', '182.68.175.237'),
(88078095, 15, 'web master', 'sayamkanwar616@gmail.com', 'webmaster', '50a9c7dbf0fa09e8969978317dca12e8', 0, 1, 1, 0, '', '182.68.175.237'),
(20165404, 16, 'final', 'sayamkanwar616@gmail.com', 'final', '2a1585a864d9e67627c6ae04c807a2c5', 0, 1, 1, 1, '2016-08-15 02:09:33 AM', '182.68.175.237'),
(88279192, 17, 'Ashish', 'ashudua2001@gmail.com', 'Ashudua2001', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, 1, 1, '', '182.68.175.237'),
(60624370, 18, 'Rohil', 'rohilkanwar@gmail.com', 'rohilk', 'f4d61f37a65be25d9a7491d19d4ef101', 0, 1, 1, 1, '', '182.68.100.250'),
(46374989, 19, 'shivam bansal', 'sbansalcs@gmail.com', 'shivam', 'f10963df6492717b1b697940d770e88c', 0, 1, 1, 1, '', '103.248.94.217'),
(21701840, 20, 'anshit', 'jainjain.golu@gmail.com', 'anshit', 'a2c21c9efd6bd1eb128827bcfc319d6e', 0, 1, 1, 1, '', '103.248.94.45'),
(74396066, 21, 'pro', 'sayamkanwar616@gmail.com', 'pro', '1f0f70bf2b5ad94c7387e64c16dc455a', 0, 1, 1, 1, '', '192.168.1.122, 203.189.244.70'),
(29991850, 22, 'bro', 'sayamkanwar616@gmail.com', 'bro', '0cfe0ef3a357503c4a4538414b870ca1', 1, 1, 1, 1, '2016-08-17 05:45:48 PM', '192.168.1.122, 203.189.244.70'),
(98265780, 23, 'Isharo', 'isharo@commvault.com', 'isharo', '0f932eaa35fbafa0eed23774afecb20b', 0, 1, 1, 0, '', '182.68.90.11'),
(81055375, 24, 'SK', 'sayamkanwar@hotmail.com', 'sk', '5792df95f7807d7a6ed8b7f1ff416806', 0, 1, 1, 1, '', '182.68.90.11'),
(72784815, 25, 'sayam', 'sayamkanwar616@gmail.com', 'sk', '1f0f70bf2b5ad94c7387e64c16dc455a', 0, 1, 1, 1, '', '182.68.180.159'),
(47452086, 26, 'proaf', 'sayamkanwar616@gmail.com', 'proaf', 'cdcb187d1ba655ba322d4abe371f655d', 1, 1, 1, 1, '2016-12-23 07:51:37 PM', '182.68.180.159');

-- --------------------------------------------------------

--
-- Table structure for table `submits`
--

CREATE TABLE IF NOT EXISTS `submits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `submits`
--

INSERT INTO `submits` (`id`, `email`, `username`, `answer`, `level`, `status`, `ip`, `time`) VALUES
(100, 'sayamk@gmail.com', 'sayamk', 'hehe', '0', 'Wrong Answer', '127.0.0.1', '2016-07-06 12:31:34 AM'),
(101, 'sayamk@gmail.com', 'sayamk', 'bla', '0', 'Wrong Answer', '127.0.0.1', '2016-07-06 12:31:54 AM'),
(102, 'sayamk@gmail.com', 'sayamk', 'blal', '0', 'Wrong Answer', '127.0.0.1', '2016-07-06 12:32:00 AM'),
(103, 'sayamk@gmail.com', 'sayamk', '41d6ad0761a5d27a9e1bd567041ce9e9', '0', 'Correct Answer', '127.0.0.1', '2016-07-06 12:33:00 AM'),
(104, 'sayamk@gmail.com', 'sayamk', 'yo', '1', 'Wrong Answer', '127.0.0.1', '2016-07-06 12:34:39 AM'),
(105, 'sayamk@gmail.com', 'sayamk', 'dell', '1', 'Wrong Answer', '127.0.0.1', '2016-07-07 09:39:59 AM'),
(106, 'sayamk@gmail.com', 'sayamk', 'dell', '1', 'Wrong Answer', '127.0.0.1', '2016-07-07 09:40:07 AM'),
(107, 'ashudua2001@gmail.com', 'Ashudua2001', 'Random', '0', 'Wrong Answer', '182.68.175.237', '2016-07-07 11:30:52 PM'),
(108, 'ashudua2001@gmail.com', 'Ashudua2001', 'No', '0', 'Wrong Answer', '182.68.175.237', '2016-07-07 11:30:59 PM'),
(109, 'sbansalcs@gmail.com', 'shivam', 'sayam', '0', 'Wrong Answer', '103.248.94.217', '2016-07-27 10:24:40 AM'),
(110, 'jainjain.golu@gmail.com', 'anshit', 'random', '0', 'Wrong Answer', '103.248.94.45', '2016-07-29 09:27:38 AM'),
(111, 'jainjain.golu@gmail.com', 'anshit', 'cryptonbytechminds', '0', 'Wrong Answer', '103.248.94.45', '2016-07-29 09:28:38 AM'),
(112, 'sayamkanwar616@gmail.com', 'final', 'lol', '0', 'Wrong Answer', '192.168.1.122, 203.189.244.70', '2016-08-15 02:09:25 AM'),
(113, 'sayamkanwar616@gmail.com', 'final', '7ddf32e17a6ac5ce04a8ecbf782ca509', '0', 'Correct Answer', '192.168.1.122, 203.189.244.70', '2016-08-15 02:09:33 AM'),
(114, 'sayamkanwar616@gmail.com', 'final', 'lol', '1', 'Wrong Answer', '192.168.1.122, 203.189.244.70', '2016-08-15 02:09:44 AM'),
(115, 'sayamkanwar616@gmail.com', 'bro', 'google', '0', 'Wrong Answer', '182.68.90.11', '2016-08-17 05:45:40 PM'),
(116, 'sayamkanwar616@gmail.com', 'bro', '7ddf32e17a6ac5ce04a8ecbf782ca509', '0', 'Correct Answer', '182.68.90.11', '2016-08-17 05:45:48 PM'),
(117, 'sayamkanwar616@gmail.com', 'bro', 'lol', '1', 'Wrong Answer', '182.68.90.11', '2016-08-17 05:45:56 PM'),
(118, 'sayamkanwar616@gmail.com', 'bro', 'lol', '1', 'Wrong Answer', '171.48.54.187', '2016-09-30 03:27:54 PM'),
(119, 'sayamkanwar616@gmail.com', 'bro', 'tohkya hai', '1', 'Wrong Answer', '171.48.54.187', '2016-09-30 03:27:59 PM'),
(120, 'sayamkanwar616@gmail.com', 'bro', 'sk', '1', 'Wrong Answer', '171.48.54.187', '2016-09-30 03:28:18 PM'),
(121, 'sayamkanwar616@gmail.com', 'bro', 'sk', '1', 'Wrong Answer', '171.48.54.187', '2016-09-30 03:28:22 PM'),
(122, 'sayamkanwar616@gmail.com', 'bro', 'lol', '1', 'Wrong Answer', '103.248.92.143', '2016-12-21 11:11:12 AM'),
(123, 'sayamkanwar616@gmail.com', 'proaf', '9cdfb439c7876e703e307864c9167a15', '0', 'Correct Answer', '182.68.180.159', '2016-12-23 07:51:37 PM'),
(124, 'sayamkanwar616@gmail.com', 'proaf', 'nope', '1', 'Wrong Answer', '182.68.180.159', '2016-12-23 07:51:40 PM'),
(125, 'sayamkanwar616@gmail.com', 'proaf', 'bla', '1', 'Wrong Answer', '182.68.180.159', '2016-12-23 07:51:44 PM'),
(126, 'sayamkanwar616@gmail.com', 'proaf', 'hah', '1', 'Wrong Answer', '182.68.180.159', '2016-12-23 07:51:46 PM'),
(127, 'sayamkanwar616@gmail.com', 'proaf', 'haha', '1', 'Wrong Answer', '182.68.180.159', '2016-12-23 07:51:49 PM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
