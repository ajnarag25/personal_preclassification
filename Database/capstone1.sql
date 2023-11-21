-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 02:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Faculty_rank` varchar(50) NOT NULL,
  `mode_of_appointment` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Name_of_SUC` varchar(50) NOT NULL,
  `Campus` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kra_1`
--

CREATE TABLE `kra_1` (
  `id` int(11) NOT NULL,
  `Crit_A_student_eval` float NOT NULL,
  `Crit_A_supervisor_eval` float NOT NULL,
  `Crit_A_total` float NOT NULL,
  `Crit_A_total_allowed` float NOT NULL,
  `Crit_B_sole_autho` float NOT NULL,
  `Crit_B_co_autho` float NOT NULL,
  `Crit_B_academe` float NOT NULL,
  `Crit_B_total` float NOT NULL,
  `Crit_B_total_allowed` float NOT NULL,
  `Crit_C_Adviser` float NOT NULL,
  `Crit_C_Panel` float NOT NULL,
  `Crit_C_Mentor` float NOT NULL,
  `Crit_C_total` float NOT NULL,
  `Crit_C_total_allowed` float NOT NULL,
  `Total_kra_1` float NOT NULL,
  `Total_kra_1_allowed` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra_1`
--

INSERT INTO `kra_1` (`id`, `Crit_A_student_eval`, `Crit_A_supervisor_eval`, `Crit_A_total`, `Crit_A_total_allowed`, `Crit_B_sole_autho`, `Crit_B_co_autho`, `Crit_B_academe`, `Crit_B_total`, `Crit_B_total_allowed`, `Crit_C_Adviser`, `Crit_C_Panel`, `Crit_C_Mentor`, `Crit_C_total`, `Crit_C_total_allowed`, `Total_kra_1`, `Total_kra_1_allowed`) VALUES
(1, 3.96, 2.64, 6.6, 6.6, 30, 3.9, 10, 43.9, 30, 12, 4, 3, 19, 19, 69.5, 55.6);

-- --------------------------------------------------------

--
-- Table structure for table `kra_2`
--

CREATE TABLE `kra_2` (
  `KRA2_ID` int(11) NOT NULL,
  `Crit_A_SA` float NOT NULL,
  `Crit_A_CA` float NOT NULL,
  `Crit_A_LR` float NOT NULL,
  `Crit_A_Contrib` float NOT NULL,
  `Crit_A_Local` float NOT NULL,
  `Crit_A_Local_Allowed` float NOT NULL,
  `Crit_A_International_Allowed` float NOT NULL,
  `Crit_A_International` float NOT NULL,
  `Crit_A_total` float NOT NULL,
  `Crit_A_total_allowed` float NOT NULL,
  `Crit_B_PI_SI` float NOT NULL,
  `Crit_B_PI_CI` float NOT NULL,
  `Crit_B_UMID_SI` float NOT NULL,
  `Crit_B_UMID_CI` float NOT NULL,
  `Crit_B_CPP_Local` float NOT NULL,
  `Crit_B_CPP_Local_allowed` float NOT NULL,
  `Crit_B_CPP_International_allowed` float NOT NULL,
  `Crit_B_CPP_International` float NOT NULL,
  `Crit_B_NPI_SI` float NOT NULL,
  `Crit_B_NPI_CI` float NOT NULL,
  `Crit_B_NPI_USP` float NOT NULL,
  `Crit_B_NPVA_SD` float NOT NULL,
  `Crit_B_NPVA_CD` float NOT NULL,
  `Crit_B_Total` float NOT NULL,
  `Crit_B_Total_allowed` float NOT NULL,
  `Crit_C_PA` float NOT NULL,
  `Crit_C_Exhibition` float NOT NULL,
  `Crit_C_Designs` float NOT NULL,
  `Crit_C_Lit-pub` float NOT NULL,
  `Crit_C_total` float NOT NULL,
  `Crit_C_Total_allowed` float NOT NULL,
  `KRA_2_total` float NOT NULL,
  `KRA_2_total_allowed` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra_2`
--

INSERT INTO `kra_2` (`KRA2_ID`, `Crit_A_SA`, `Crit_A_CA`, `Crit_A_LR`, `Crit_A_Contrib`, `Crit_A_Local`, `Crit_A_Local_Allowed`, `Crit_A_International_Allowed`, `Crit_A_International`, `Crit_A_total`, `Crit_A_total_allowed`, `Crit_B_PI_SI`, `Crit_B_PI_CI`, `Crit_B_UMID_SI`, `Crit_B_UMID_CI`, `Crit_B_CPP_Local`, `Crit_B_CPP_Local_allowed`, `Crit_B_CPP_International_allowed`, `Crit_B_CPP_International`, `Crit_B_NPI_SI`, `Crit_B_NPI_CI`, `Crit_B_NPI_USP`, `Crit_B_NPVA_SD`, `Crit_B_NPVA_CD`, `Crit_B_Total`, `Crit_B_Total_allowed`, `Crit_C_PA`, `Crit_C_Exhibition`, `Crit_C_Designs`, `Crit_C_Lit-pub`, `Crit_C_total`, `Crit_C_Total_allowed`, `KRA_2_total`, `KRA_2_total_allowed`) VALUES
(1, 50, 0, 0, 0, 0, 0, 0, 0, 50, 50, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 20, 20, 0, 0, 0, 20, 20, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `kra_3`
--

CREATE TABLE `kra_3` (
  `KRA3_ID` int(11) NOT NULL,
  `Crit_A_LNAP` float NOT NULL,
  `Crit_A_CTIG` float NOT NULL,
  `Crit_A_total` float NOT NULL,
  `Crit_A_total_allowed` float NOT NULL,
  `Crit_B_1.1` float NOT NULL,
  `Crit_B_1.2` float NOT NULL,
  `Crit_B_1.3` float NOT NULL,
  `Crit_B_1.4.1` float NOT NULL,
  `Crit_B_1.4.1_allowed` float NOT NULL,
  `Crit_B_1.4.2` float NOT NULL,
  `Crit_B_1.4.3` float NOT NULL,
  `Crit_B_1.4.4` float NOT NULL,
  `Crit_B_1.4.4_allowed` float NOT NULL,
  `Crit_B_1.5` float NOT NULL,
  `Crit_B_2.1` float NOT NULL,
  `Crit_B_2.1_allowed` float NOT NULL,
  `Crit_B_total` float NOT NULL,
  `Crit_B_total_allowed` float NOT NULL,
  `Crit_C_1` float NOT NULL,
  `Crit_C_total` float NOT NULL,
  `Crit_C_total_allowed` float NOT NULL,
  `Crit_D_1` float NOT NULL,
  `Crit_D_total` float NOT NULL,
  `Crit_D_total_allowed` float NOT NULL,
  `KRA3_total` float NOT NULL,
  `KRA3_total_allowed` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra_3`
--

INSERT INTO `kra_3` (`KRA3_ID`, `Crit_A_LNAP`, `Crit_A_CTIG`, `Crit_A_total`, `Crit_A_total_allowed`, `Crit_B_1.1`, `Crit_B_1.2`, `Crit_B_1.3`, `Crit_B_1.4.1`, `Crit_B_1.4.1_allowed`, `Crit_B_1.4.2`, `Crit_B_1.4.3`, `Crit_B_1.4.4`, `Crit_B_1.4.4_allowed`, `Crit_B_1.5`, `Crit_B_2.1`, `Crit_B_2.1_allowed`, `Crit_B_total`, `Crit_B_total_allowed`, `Crit_C_1`, `Crit_C_total`, `Crit_C_total_allowed`, `Crit_D_1`, `Crit_D_total`, `Crit_D_total_allowed`, `KRA3_total`, `KRA3_total_allowed`) VALUES
(1, 5, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4.6, 4.6, 4.6, 20, 20, 20, 29.6, 29.6);

-- --------------------------------------------------------

--
-- Table structure for table `kra_4`
--

CREATE TABLE `kra_4` (
  `Kra4_ID` int(11) NOT NULL,
  `Crit_A_1st` float NOT NULL,
  `Crit_A_total` float NOT NULL,
  `Crit_A_total_allowed` float NOT NULL,
  `Crit_B_1st` float NOT NULL,
  `Crit_B_1st_allowed` float NOT NULL,
  `Crit_B_2nd` float NOT NULL,
  `Crit_B_2nd_allowed` float NOT NULL,
  `Crit_B_3rd` float NOT NULL,
  `Crit_B_3rd_allowed` float NOT NULL,
  `Crit_B_total` float NOT NULL,
  `Crit_B_total_allowed` float NOT NULL,
  `Crit_C_1st` float NOT NULL,
  `Crit_C_1st_allowed` float NOT NULL,
  `Crit_C_total` float NOT NULL,
  `Crit_C_total_allowed` float NOT NULL,
  `Crit_D_1st` float NOT NULL,
  `Crit_D_2nd` float NOT NULL,
  `Crit_D_total` float NOT NULL,
  `Crit_D_total_allowed` float NOT NULL,
  `KRA4_total` float NOT NULL,
  `KRA4_total_allowed` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra_4`
--

INSERT INTO `kra_4` (`Kra4_ID`, `Crit_A_1st`, `Crit_A_total`, `Crit_A_total_allowed`, `Crit_B_1st`, `Crit_B_1st_allowed`, `Crit_B_2nd`, `Crit_B_2nd_allowed`, `Crit_B_3rd`, `Crit_B_3rd_allowed`, `Crit_B_total`, `Crit_B_total_allowed`, `Crit_C_1st`, `Crit_C_1st_allowed`, `Crit_C_total`, `Crit_C_total_allowed`, `Crit_D_1st`, `Crit_D_2nd`, `Crit_D_total`, `Crit_D_total_allowed`, `KRA4_total`, `KRA4_total_allowed`) VALUES
(1, 5, 5, 5, 40, 40, 0, 0, 0, 0, 40, 40, 2, 2, 2, 2, 6, 12, 18, 18, 201, 65);

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `degree_name` varchar(50) NOT NULL,
  `graduate_year` varchar(50) NOT NULL,
  `user_id` int(25) NOT NULL,
  `personal_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_id`) VALUES
('admin', 'admin', 1),
('evsuclient', '123', 2),
('', '', 3),
('nov12', 'nov12', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `personal_id` (`personal_id`);

--
-- Indexes for table `kra_3`
--
ALTER TABLE `kra_3`
  ADD PRIMARY KEY (`KRA3_ID`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kra_3`
--
ALTER TABLE `kra_3`
  MODIFY `KRA3_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `personal_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`personal_id`) REFERENCES `personal_info` (`personal_id`);

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
