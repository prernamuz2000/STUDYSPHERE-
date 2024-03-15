-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 06:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`login_id`, `login_username`, `login_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `s_no` int(10) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_company` varchar(100) NOT NULL,
  `contact_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`s_no`, `contact_name`, `contact_email`, `contact_company`, `contact_message`) VALUES
(1, 'Pranjal Mathur', 'pjmathur@gmail.com', 'CU', 'Enquiry'),
(2, 'pranjal', 's@gm.com', 'snd', 'Chandigarh University'),
(3, 'pranjal', 's@gm.com', 'snd', 'Chandigarh University'),
(4, 'Gopi', 's@gm.com', 'CU', 'sjnd'),
(5, 'Prerna C', 'prerna@gmail.com', 'Chandigarh University (CU)', 'Phase 1'),
(6, 'Bhawana', 'b@g.com', 'snkd', 'sbjdbfjlbsdfvb'),
(7, 'Pranjal Mathur', 'pjmathur157@gmail.com', 'CREATIVE WOOLEN', 'shdvf'),
(8, 'Pranjal Mathur', 'pjmathur157@gmail.com', 'CREATIVE WOOLEN', 'shdvf'),
(9, 'Pranjal Mathur', 'pjmathur157@gmail.com', 'CREATIVE WOOLEN', 'shdvf'),
(10, 'Pranjal Mathur', 'pjmathur157@gmail.com', 'CREATIVE WOOLEN', 'shdvf'),
(11, 'qwerty', 'q@g.com', 'CU', 'hello'),
(12, 'Pranjal Mathur', 'pjmathur157@gmail.com', 'CREATIVE WOOLEN', 'sdfdsfsdfsdfsdfsdfdsf78y3498934'),
(13, 'Pranjal Mathur', '22MCC20148@cuchd.in', 'Lachoo', 'abdf'),
(14, 'Bhawana', 'b@g.com', 'snkd', 'hello pranjal'),
(15, 'Pranjal', 'pranjalpj@gmail.com', 'Chandigarh University ', 'Hello today is 07-11-2023'),
(16, 'Gopi Maya', 'mayagopi@gmail.com', 'Chandigarh University', 'Gopi Today is 07-11-2023');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `s_no` int(10) NOT NULL,
  `target_content` varchar(100) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`s_no`, `target_content`, `content`) VALUES
(1, '', ''),
(2, 'About 2', 'Gopi ipsum, dolor sit amet consectetur adipisicing elit. Minus doloribus sunt harum officia laudantium quibusdam, in necessitatibus, iste saepe temporibus natus mollitia eum quaerat quo! Deleniti, placeat! Culpa, provident iure!'),
(3, 'About 3', 'Gopi Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus doloribus sunt harum officia laudantium quibusdam, in necessitatibus, iste saepe temporibus natus mollitia eum quaerat quo! Deleniti, placeat! Culpa, provident iure!'),
(4, 'Long Image hover content', 'Gopi Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus doloribus sunt harum officia laudantium quibusdam, in necessitatibus, iste saepe temporibus natus mollitia eum quaerat quo! Deleniti, placeat! Culpa, provident iure!');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_fees` int(11) NOT NULL,
  `course_discount` int(11) NOT NULL,
  `course_image` text NOT NULL,
  `course_des` text NOT NULL,
  `course_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coursevideos`
--

CREATE TABLE `coursevideos` (
  `coursevideos_id` int(11) NOT NULL,
  `coursevideos_course` varchar(255) NOT NULL,
  `coursevideos_topic` varchar(255) NOT NULL,
  `coursevideos_videos` text NOT NULL,
  `coursevideos_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursevideos`
--

INSERT INTO `coursevideos` (`coursevideos_id`, `coursevideos_course`, `coursevideos_topic`, `coursevideos_videos`, `coursevideos_status`) VALUES
(1, '2', 'html intro', 'https://www.youtube.com/embed/swEsvQcIJW0', 1),
(2, '3', 'intro of seo', 'https://www.youtube.com/embed/swEsvQcIJW0', 0),
(3, '4', 'introduction to python', 'https://www.youtube.com/embed/fia5og9974E', 1),
(4, '5', 'html intorduction', 'https://www.youtube.com/embed/qz0aGYrrlhU', 1),
(6, '5', 'Basic Tags in HTML', 'https://www.youtube.com/embed/X9D9ur7t7vc', 1),
(7, '8', 'Introduction of php', 'https://www.youtube.com/embed/EJWw1bd0-C0', 1),
(8, '8', 'Basic PHP Syntax', 'https://www.youtube.com/embed/cbtGu5LCLRo', 1),
(9, '9', 'basic Html and CSS ', 'https://www.youtube.com/embed/-G7bJVAIiEI', 1),
(10, '9', 'js and jquery', 'https://www.youtube.com/embed/YFlx1C8XwR0', 1),
(11, '11', 'Animation software Introduction ', 'https://www.youtube.com/embed/46UgRQzwqBw', 1),
(12, '5', 'CSS Introduction', 'https://www.youtube.com/embed/ESnrn1kAD4E?si=WUgiAjn6EKAXH7Qp', 1),
(13, '12', 'JavaScript introduction', 'https://www.youtube.com/embed/CBWnBi-awSA?si=EchZVdQgEIMmUg_K', 1),
(14, '12', 'function in js', 'https://www.youtube.com/embed/a_gwOwkbhZ0?si=LtKshaSKtG9bc81S', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_form`
--

CREATE TABLE `purchase_form` (
  `s.no` int(100) NOT NULL,
  `member_form_name` varchar(150) NOT NULL,
  `member_form_email` varchar(100) NOT NULL,
  `member_form_phone` int(10) NOT NULL,
  `memberform` varchar(5) NOT NULL,
  `member_form_message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_form`
--

INSERT INTO `purchase_form` (`s.no`, `member_form_name`, `member_form_email`, `member_form_phone`, `memberform`, `member_form_message`) VALUES
(1, 'Pranjal Mathur', 'pjmathur157@gmail.com', 2147483647, 'on', 'adfkndksf df dsfdbf dsh hello');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_heading` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_des` text NOT NULL,
  `slider_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_cat` varchar(255) NOT NULL,
  `team_image` text NOT NULL,
  `team_stauts` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_cat`, `team_image`, `team_stauts`) VALUES
(1, 'vinay', 'web development', '16639186623125Kennst du schon Ricky_.jpg', 1),
(2, 'Pradeep Rai', 'web development', '166391891156500Kennst du schon Ricky_.jpg', 1),
(3, 'Bhagirat', 'web development', '166391889223977Kennst du schon Ricky_.jpg', 1),
(4, 'Monika', 'web development', '166391890226431Meet the Team!.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weblogin`
--

CREATE TABLE `weblogin` (
  `weblogin_id` int(11) NOT NULL,
  `weblogin_name` varchar(255) NOT NULL,
  `weblogin_ename` varchar(255) NOT NULL,
  `weblogin_pass` varchar(255) NOT NULL,
  `weblogin_rpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weblogin`
--

INSERT INTO `weblogin` (`weblogin_id`, `weblogin_name`, `weblogin_ename`, `weblogin_pass`, `weblogin_rpass`) VALUES
(10, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(11, 'mayank', 'mayank@gmail.com', '12345', '12345'),
(12, 'pinku', 'pinku@gmail.com', '12345', '12345'),
(13, 'keshav', 'keshav@gmail.com', '12345', '12345'),
(14, 'shakti', 'shakti@gmail.com', '1234', '1234'),
(15, 'pawan', 'pawan@gmail.com', '12345', '1234'),
(16, 'vinay', 'vinay@gmail.com', '12345', '12345'),
(17, 'raushan', 'raushan@gmail.com', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `coursevideos`
--
ALTER TABLE `coursevideos`
  ADD PRIMARY KEY (`coursevideos_id`);

--
-- Indexes for table `purchase_form`
--
ALTER TABLE `purchase_form`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `weblogin`
--
ALTER TABLE `weblogin`
  ADD PRIMARY KEY (`weblogin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coursevideos`
--
ALTER TABLE `coursevideos`
  MODIFY `coursevideos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_form`
--
ALTER TABLE `purchase_form`
  MODIFY `s.no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weblogin`
--
ALTER TABLE `weblogin`
  MODIFY `weblogin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
