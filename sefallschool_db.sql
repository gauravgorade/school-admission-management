-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 01:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sefallschool_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `profile` text NOT NULL,
  `email` varchar(1000) NOT NULL,
  `psw` longtext NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `admin_type` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `forget_psw` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `name`, `lname`, `profile`, `email`, `psw`, `mobile`, `admin_type`, `user_status`, `forget_psw`) VALUES
(1, 'Crelite', 'Technologies', '1644056006-crelite.png', 'crelitetech@gmail.com', 'MWJheGE0NU5vMlVnUDc0eFJCYWFydz09', '8308303340', 1, 1, '19487'),
(2, 'Spread Eagle', 'Primary School', '1644055725-favicon.png', 'senurseryschool@gmail.com', 'MWJheGE0NU5vMlVnUDc0eFJCYWFydz09', '8626894073', 2, 1, NULL),
(4, 'agent', 'jack', '1644400374-fav.png', 'wd8.crelite@gmail.com', 'bmlWazZNY1pRdHZDSm9SV2YwTDFwQT09', '9834028740', 2, 1, '70765');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiry`
--

CREATE TABLE `admission_enquiry` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) DEFAULT NULL,
  `a_lang` varchar(100) NOT NULL,
  `a_dob` date DEFAULT NULL,
  `a_fname` varchar(100) NOT NULL,
  `a_mname` varchar(100) NOT NULL,
  `a_ocp` varchar(100) DEFAULT NULL,
  `a_add` varchar(100) DEFAULT NULL,
  `a_no` varchar(12) DEFAULT NULL,
  `a_school` varchar(100) DEFAULT NULL,
  `a_result` varchar(100) DEFAULT NULL,
  `a_doa` varchar(100) DEFAULT NULL,
  `a_class` varchar(100) NOT NULL,
  `a_inqdt` date NOT NULL DEFAULT current_timestamp(),
  `a_inqtime` time NOT NULL,
  `a_status` int(11) NOT NULL,
  `a_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` double DEFAULT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `verify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_heading` varchar(100) DEFAULT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_category` varchar(100) NOT NULL,
  `img_status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_heading`, `img_path`, `img_category`, `img_status`, `date`) VALUES
(1, 'classroom image 1', '1644038338-classroom_image1.jpg', 'classrooms', 1, '2022-02-05 10:48:58'),
(2, 'Students image 1', '1644038397-students_image_1.png', 'students', 1, '2022-02-05 10:49:57'),
(3, 'Teachers image 1', '1644038454-teachers_image_1.png', 'teachers', 1, '2022-02-05 10:50:54'),
(4, 'Event image 1', '1644038496-event_image_1.jpg', 'library', 1, '2022-02-05 10:51:36'),
(5, 'classroom image 2', '1644038543-classroom_image_2.jpg', 'classrooms', 1, '2022-02-05 10:52:23'),
(6, 'Students image 2', '1644038571-students_image_2.jpg', 'students', 1, '2022-02-05 10:52:51'),
(7, 'Teachers image 2', '1644038609-teachers_image_2.jpg', 'teachers', 1, '2022-02-05 10:53:29'),
(8, 'Event image 2', '1644038644-event_image_2.jpg', 'library', 1, '2022-02-05 10:54:04'),
(9, 'classroom image 3', '1644038681-classroom_image_3.jpg', 'classrooms', 1, '2022-02-05 10:54:41'),
(10, 'Students image 3', '1644038711-students_image_3.jpg', 'students', 1, '2022-02-05 10:55:11'),
(11, 'Event image 3', '1644038775-event_image_3.jpg', 'library', 1, '2022-02-05 10:56:15'),
(12, 'classroom image 4', '1644038812-classroom_image_4.jpg', 'classrooms', 1, '2022-02-05 10:56:52'),
(13, 'Students image 4', '1644038854-students_image_4.jpg', 'students', 1, '2022-02-05 10:57:34'),
(14, 'Teachers image 4', '1644038895-teachers_image_4.png', 'teachers', 1, '2022-02-05 10:58:15'),
(15, 'Event image 4', '1644038941-event_image_4.jpg', 'library', 1, '2022-02-05 10:59:01'),
(16, 'classroom image 5', '1644038968-classroom_image_5.jpg', 'classrooms', 1, '2022-02-05 10:59:28'),
(17, 'Students image 5', '1644039016-students_image_5.jpg', 'students', 1, '2022-02-05 11:00:16'),
(18, 'Teachers image 5', '1644039066-teachers_image_5.jpg', 'teachers', 1, '2022-02-05 11:01:06'),
(19, 'Event image 5', '1644039118-event_image_5.jpg', 'library', 1, '2022-02-05 11:01:58'),
(20, 'classroom image 6', '1644039154-classroom_image_6.jpg', 'classrooms', 1, '2022-02-05 11:02:34'),
(21, 'Students image 6', '1644039227-students_image_6.jpg', 'students', 1, '2022-02-05 11:03:47'),
(22, 'Teachers image 6', '1644039260-teachers_image_6.jpg', 'teachers', 1, '2022-02-05 11:04:20'),
(23, 'Event image 6', '1644039293-event_image_6.jpg', 'library', 1, '2022-02-05 11:04:53'),
(24, 'Classroom image 7', '1644039340-classroom_image_7.jpg', 'classrooms', 1, '2022-02-05 11:05:40'),
(25, 'Students image 7', '1644039381-students_image_7.jpg', 'students', 1, '2022-02-05 11:06:21'),
(26, 'Teachers image 7', '1644039419-teachers_image_7.jpg', 'teachers', 1, '2022-02-05 11:06:59'),
(27, 'Event image 7', '1644039469-event_image_7.jpg', 'library', 1, '2022-02-05 11:07:49'),
(28, 'classroom image 8', '1644039514-classroom_image_8.jpg', 'classrooms', 1, '2022-02-05 11:08:34'),
(30, 'Teachers image 8', '1644039590-teachers_image_8.jpg', 'teachers', 1, '2022-02-05 11:09:50'),
(31, 'Event image 8', '1644039652-event_image_8.jpg', 'library', 1, '2022-02-05 11:10:52'),
(32, 'classroom image 9', '1644039684-classroom_image-9.jpg', 'classrooms', 1, '2022-02-05 11:11:24'),
(33, 'Facilities image 1', '1644039755-playing_facilities.jpg', 'library', 1, '2022-02-05 11:12:35'),
(34, 'Students image 9', '1644065780-student_image_9.jpg', 'students', 1, '2022-02-05 18:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `n_id` int(5) NOT NULL,
  `n_heading` varchar(200) NOT NULL,
  `n_link` varchar(200) DEFAULT NULL,
  `n_type` int(5) NOT NULL,
  `n_status` int(11) NOT NULL,
  `n_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`n_id`, `n_heading`, `n_link`, `n_type`, `n_status`, `n_date`) VALUES
(1, 'Latest news will be displayed here. ADMISSIONS ARE OPEN FOR 2022-23 BATCH.', '', 1, 1, '2022-02-05 11:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(5) NOT NULL,
  `n_heading` varchar(200) NOT NULL,
  `n_link` varchar(200) DEFAULT NULL,
  `n_type` int(5) NOT NULL,
  `n_status` int(11) NOT NULL,
  `n_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `n_heading`, `n_link`, `n_type`, `n_status`, `n_date`) VALUES
(1, 'Admission Open for year 2022-23', 'https://sefallschoolmes.in/admission', 1, 1, '2022-02-05 11:27:53'),
(2, 'Notice will be displayed here. ADMISSIONS ARE OPEN FOR 2022-23 BATCH.', 'https://sefallschoolmes.in/admission', 1, 1, '2022-02-05 11:29:13'),
(3, 'Click here', 'https://sefallschoolmes.in/admission', 1, 1, '2022-02-05 11:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `heading` varchar(200) DEFAULT NULL,
  `sub_heading` varchar(250) DEFAULT NULL,
  `paragraph1` varchar(300) DEFAULT NULL,
  `paragraph2` varchar(300) DEFAULT NULL,
  `button_link1` varchar(200) DEFAULT NULL,
  `button_link2` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `img_path`, `heading`, `sub_heading`, `paragraph1`, `paragraph2`, `button_link1`, `button_link2`, `status`) VALUES
(1, '1644040297-slider_image_1.jpg', 'slider image 1', 'slider image 1 test heading', 'slider image 1 test paragraph', '', '', '', 1),
(2, '1644040309-slider_image_2.jpg', 'slider image 2', 'slider image 2 test heading', 'slider image 2 test paragraph', '', '', '', 1),
(3, '1644040323-slider_image_3.jpg', 'slider image 3', 'slider image 3 test heading', 'slider image 3 test paragraph', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `n_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
