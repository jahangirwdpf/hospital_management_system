-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 09:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbirdshospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin111');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `Depertment` varchar(50) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `doctorFees` int(11) NOT NULL,
  `appDate` date NOT NULL,
  `appTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `Depertment`, `doctor`, `doctorFees`, `appDate`, `appTime`) VALUES
(1, '1', '', 0, '2023-07-05', '00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointment_doc`
-- (See below for the actual view)
--
CREATE TABLE `appointment_doc` (
`pat_id` int(11)
,`username` varchar(20)
,`gender` varchar(10)
,`app_id` int(11)
,`appDate` date
,`appTime` time
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointment_pat`
-- (See below for the actual view)
--
CREATE TABLE `appointment_pat` (
`username` varchar(50)
,`doctorFees` int(10)
,`appDate` date
,`appTime` time
);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `total_amount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `depertment`
--

CREATE TABLE `depertment` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`id`, `dept_name`) VALUES
(1, 'Medicine'),
(2, 'Neurology'),
(3, 'Cardiology'),
(4, 'Surgery');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `depert_id` int(11) NOT NULL,
  `doctorFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `password`, `email`, `depert_id`, `doctorFees`) VALUES
(1, 'Rakib Ahsan', 'rakib111', 'rakib@gmail.com', 1, 2000),
(2, 'Mishkat', 'misu111', 'misu@gmail.com', 2, 1200),
(3, 'Shuvo', 'shuvo111', 'shuvo@gmail.com', 3, 600),
(5, 'Jahid', 'jahid111', 'jahid@gmail.com', 4, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bld_group` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `pres_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `username`, `age`, `gender`, `bld_group`, `email`, `contact`, `password`, `user_id`, `bill_id`, `pres_id`) VALUES
(3, 'Farhana', '30', 'female', 'AB-', 'farhana@gmail.com', '0154789456', 'farhana111', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `disease` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `disease`, `prescription`) VALUES
(1, 'Headache', 'Take Rest & Medicine'),
(2, 'MM', 'GG');

-- --------------------------------------------------------

--
-- Stand-in structure for view `prescription_doc`
-- (See below for the actual view)
--
CREATE TABLE `prescription_doc` (
`pat_id` int(11)
,`username` varchar(20)
,`app_id` int(11)
,`appDate` date
,`appTime` time
,`disease` varchar(250)
,`prescription` varchar(1000)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `prescription_pat`
-- (See below for the actual view)
--
CREATE TABLE `prescription_pat` (
`username` varchar(50)
,`app_id` int(11)
,`appDate` date
,`appTime` time
,`disease` varchar(250)
,`prescription` varchar(1000)
);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `username`) VALUES
(1, 'admin'),
(2, 'doctor'),
(3, 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 1),
(2, 'doctor', 'doctor', 2),
(3, 'patient', 'patient', 3);

-- --------------------------------------------------------

--
-- Structure for view `appointment_doc`
--
DROP TABLE IF EXISTS `appointment_doc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointment_doc`  AS SELECT `patient`.`pat_id` AS `pat_id`, `patient`.`username` AS `username`, `patient`.`gender` AS `gender`, `appointment`.`app_id` AS `app_id`, `appointment`.`appDate` AS `appDate`, `appointment`.`appTime` AS `appTime` FROM (`patient` join `appointment`) WHERE `patient`.`pat_id` = `appointment`.`app_id``app_id`  ;

-- --------------------------------------------------------

--
-- Structure for view `appointment_pat`
--
DROP TABLE IF EXISTS `appointment_pat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointment_pat`  AS SELECT `doctor`.`username` AS `username`, `doctor`.`doctorFees` AS `doctorFees`, `appointment`.`appDate` AS `appDate`, `appointment`.`appTime` AS `appTime` FROM (`doctor` join `appointment`) WHERE `doctor`.`id` = `appointment`.`app_id``app_id`  ;

-- --------------------------------------------------------

--
-- Structure for view `prescription_doc`
--
DROP TABLE IF EXISTS `prescription_doc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prescription_doc`  AS SELECT `patient`.`pat_id` AS `pat_id`, `patient`.`username` AS `username`, `appointment`.`app_id` AS `app_id`, `appointment`.`appDate` AS `appDate`, `appointment`.`appTime` AS `appTime`, `prescription`.`disease` AS `disease`, `prescription`.`prescription` AS `prescription` FROM ((`patient` join `appointment`) join `prescription`) WHERE `patient`.`pat_id` = `prescription`.`id``id`  ;

-- --------------------------------------------------------

--
-- Structure for view `prescription_pat`
--
DROP TABLE IF EXISTS `prescription_pat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prescription_pat`  AS SELECT `doctor`.`username` AS `username`, `appointment`.`app_id` AS `app_id`, `appointment`.`appDate` AS `appDate`, `appointment`.`appTime` AS `appTime`, `prescription`.`disease` AS `disease`, `prescription`.`prescription` AS `prescription` FROM ((`doctor` join `appointment`) join `prescription`) WHERE `doctor`.`id` = `appointment`.`app_id``app_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `depertment`
--
ALTER TABLE `depertment`
  ADD CONSTRAINT `depertment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `doctor` (`depert_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
