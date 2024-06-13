-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 08:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `address`, `phone`, `email`) VALUES
(1, 'Our user-friendly portal simplifies the faculty pre-assessment process with transparent workflows and expert guidance. Explore valuable insights on our website and benefit from secure data management and progress tracking. Join us for a streamlined, transparent, and efficient pre-assessment experience!', '6XRW+3W9, Salazar St, Downtown, Tacloban City, Leyte', '(053) 321 1084', 'personal_preclassification@evsu.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'administrators', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept`, `users`) VALUES
(1, 'College of Architecture and Allied Discipline', 0),
(2, 'College of Arts and Science', 0),
(3, 'College of Business and Entrepreneurship', 0),
(4, 'College of Education', 0),
(5, 'College of Engineering', 0),
(6, 'College of Technology', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_rank`
--

CREATE TABLE `faculty_rank` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `1subrank` text NOT NULL,
  `2subrank` text NOT NULL,
  `3subrank` text NOT NULL,
  `4subrank` text NOT NULL,
  `5subrank` text NOT NULL,
  `6subrank` text NOT NULL,
  `7subrank` text NOT NULL,
  `final` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_updated` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `personal_id` (`personal_id`);

--
-- Indexes for table `faculty_rank`
--
ALTER TABLE `faculty_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kra_1`
--
ALTER TABLE `kra_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kra_2`
--
ALTER TABLE `kra_2`
  ADD PRIMARY KEY (`KRA2_ID`);

--
-- Indexes for table `kra_3`
--
ALTER TABLE `kra_3`
  ADD PRIMARY KEY (`KRA3_ID`);

--
-- Indexes for table `kra_4`
--
ALTER TABLE `kra_4`
  ADD PRIMARY KEY (`Kra4_ID`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_rank`
--
ALTER TABLE `faculty_rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kra_1`
--
ALTER TABLE `kra_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kra_2`
--
ALTER TABLE `kra_2`
  MODIFY `KRA2_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kra_3`
--
ALTER TABLE `kra_3`
  MODIFY `KRA3_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kra_4`
--
ALTER TABLE `kra_4`
  MODIFY `Kra4_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `personal_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT;

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
