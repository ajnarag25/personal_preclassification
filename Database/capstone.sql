-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 09:55 PM
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
-- Table structure for table `form1_a`
--

CREATE TABLE `form1_a` (
  `id` int(11) NOT NULL,
  `A1_1` float NOT NULL DEFAULT 0,
  `A1_2` float NOT NULL DEFAULT 0,
  `A2_1` float NOT NULL DEFAULT 0,
  `A2_2` float NOT NULL DEFAULT 0,
  `A3_1` float NOT NULL DEFAULT 0,
  `A3_2` float NOT NULL DEFAULT 0,
  `A4_1` float NOT NULL DEFAULT 0,
  `A4_2` float NOT NULL DEFAULT 0,
  `B1_1` float NOT NULL DEFAULT 0,
  `B1_2` float NOT NULL DEFAULT 0,
  `B2_1` float NOT NULL DEFAULT 0,
  `B2_2` float NOT NULL DEFAULT 0,
  `B3_1` float NOT NULL DEFAULT 0,
  `B3_2` float NOT NULL DEFAULT 0,
  `B4_1` float NOT NULL DEFAULT 0,
  `B4_2` float NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form1_b`
--

CREATE TABLE `form1_b` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titleB_1_1_1` varchar(100) DEFAULT NULL,
  `titleB_1_1_2` varchar(100) DEFAULT NULL,
  `titleB_1_1_3` varchar(100) DEFAULT NULL,
  `typeB_1_1_1` varchar(100) DEFAULT NULL,
  `typeB_1_1_2` varchar(100) DEFAULT NULL,
  `typeB_1_1_3` varchar(100) DEFAULT NULL,
  `revB_1_1_1` varchar(100) DEFAULT NULL,
  `revB_1_1_2` varchar(100) DEFAULT NULL,
  `revB_1_1_3` varchar(100) DEFAULT NULL,
  `pubB_1_1_1` varchar(100) DEFAULT NULL,
  `pubB_1_1_2` varchar(100) DEFAULT NULL,
  `pubB_1_1_3` varchar(100) DEFAULT NULL,
  `datepubB_1_1_1` date DEFAULT NULL,
  `datepubB_1_1_2` date DEFAULT NULL,
  `datepubB_1_1_3` date DEFAULT NULL,
  `dateappB_1_1_1` date DEFAULT NULL,
  `dateappB_1_1_2` date DEFAULT NULL,
  `dateappB_1_1_3` date DEFAULT NULL,
  `titleB_1_2_1` varchar(100) DEFAULT NULL,
  `titleB_1_2_2` varchar(100) DEFAULT NULL,
  `titleB_1_2_3` varchar(100) DEFAULT NULL,
  `typeB_1_2_1` varchar(100) DEFAULT NULL,
  `typeB_1_2_2` varchar(100) DEFAULT NULL,
  `typeB_1_2_3` varchar(100) DEFAULT NULL,
  `revB_1_2_1` varchar(100) DEFAULT NULL,
  `revB_1_2_2` varchar(100) DEFAULT NULL,
  `revB_1_2_3` varchar(100) DEFAULT NULL,
  `pubB_1_2_1` varchar(100) DEFAULT NULL,
  `pubB_1_2_2` varchar(100) DEFAULT NULL,
  `pubB_1_2_3` varchar(100) DEFAULT NULL,
  `datepubB_1_2_1` date DEFAULT NULL,
  `datepubB_1_2_2` date DEFAULT NULL,
  `datepubB_1_2_3` date DEFAULT NULL,
  `dateappB_1_2_1` date DEFAULT NULL,
  `dateappB_1_2_2` date DEFAULT NULL,
  `dateappB_1_2_3` date DEFAULT NULL,
  `contribB_1_2_1` varchar(100) DEFAULT NULL,
  `contribB_1_2_2` varchar(100) DEFAULT NULL,
  `contribB_1_2_3` varchar(100) DEFAULT NULL,
  `name2_1` varchar(100) DEFAULT NULL,
  `name2_2` varchar(100) DEFAULT NULL,
  `name2_3` varchar(100) DEFAULT NULL,
  `type2_1` varchar(100) DEFAULT NULL,
  `type2_2` varchar(100) DEFAULT NULL,
  `type2_3` varchar(100) DEFAULT NULL,
  `board2_1` varchar(100) DEFAULT NULL,
  `board2_2` varchar(100) DEFAULT NULL,
  `board2_3` varchar(100) DEFAULT NULL,
  `acad2_1` varchar(100) DEFAULT NULL,
  `acad2_2` varchar(100) DEFAULT NULL,
  `acad2_3` varchar(100) DEFAULT NULL,
  `role2_1` varchar(100) DEFAULT NULL,
  `role2_2` varchar(100) DEFAULT NULL,
  `role2_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form1_c`
--

CREATE TABLE `form1_c` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `adv19_1` float NOT NULL,
  `adv19_2` float NOT NULL,
  `adv19_3` float NOT NULL,
  `adv19_4` float NOT NULL,
  `adv20_1` float NOT NULL,
  `adv20_2` float NOT NULL,
  `adv20_3` float NOT NULL,
  `adv20_4` float NOT NULL,
  `adv21_1` float NOT NULL,
  `adv21_2` float NOT NULL,
  `adv21_3` float NOT NULL,
  `adv21_4` float NOT NULL,
  `adv22_1` float NOT NULL,
  `adv22_2` float NOT NULL,
  `adv22_3` float NOT NULL,
  `adv22_4` float NOT NULL,
  `pan19_1` float NOT NULL,
  `pan19_2` float NOT NULL,
  `pan19_3` float NOT NULL,
  `pan19_4` float NOT NULL,
  `pan20_1` float NOT NULL,
  `pan20_2` float NOT NULL,
  `pan20_3` float NOT NULL,
  `pan20_4` float NOT NULL,
  `pan21_1` float NOT NULL,
  `pan21_2` float NOT NULL,
  `pan21_3` float NOT NULL,
  `pan21_4` float NOT NULL,
  `pan22_1` float NOT NULL,
  `pan22_2` float NOT NULL,
  `pan22_3` float NOT NULL,
  `pan22_4` float NOT NULL,
  `acad2_1` varchar(100) NOT NULL,
  `acad2_2` varchar(100) NOT NULL,
  `acad2_3` varchar(100) NOT NULL,
  `acad2_4` varchar(100) NOT NULL,
  `spon2_1` varchar(100) NOT NULL,
  `spon2_2` varchar(100) NOT NULL,
  `spon2_3` varchar(100) NOT NULL,
  `spon2_4` varchar(100) NOT NULL,
  `award2_1` varchar(100) NOT NULL,
  `award2_2` varchar(100) NOT NULL,
  `award2_3` varchar(100) NOT NULL,
  `award2_4` varchar(100) NOT NULL,
  `dateaward2_1` date NOT NULL,
  `dateaward2_2` date NOT NULL,
  `dateaward2_3` date NOT NULL,
  `dateaward2_4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form2_a`
--

CREATE TABLE `form2_a` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title_1_1_1` varchar(100) NOT NULL,
  `title_1_1_2` varchar(100) NOT NULL,
  `title_1_1_3` varchar(100) NOT NULL,
  `title_1_1_4` varchar(100) NOT NULL,
  `type_1_1_1` varchar(100) NOT NULL,
  `type_1_1_2` varchar(100) NOT NULL,
  `type_1_1_3` varchar(100) NOT NULL,
  `type_1_1_4` varchar(100) NOT NULL,
  `name_1_1_1` varchar(100) NOT NULL,
  `name_1_1_2` varchar(100) NOT NULL,
  `name_1_1_3` varchar(100) NOT NULL,
  `name_1_1_4` varchar(100) NOT NULL,
  `rev_1_1_1` varchar(100) NOT NULL,
  `rev_1_1_2` varchar(100) NOT NULL,
  `rev_1_1_3` varchar(100) NOT NULL,
  `rev_1_1_4` varchar(100) NOT NULL,
  `int_1_1_1` varchar(100) NOT NULL,
  `int_1_1_2` varchar(100) NOT NULL,
  `int_1_1_3` varchar(100) NOT NULL,
  `int_1_1_4` varchar(100) NOT NULL,
  `datepub_1_1_1` date NOT NULL,
  `datepub_1_1_2` date NOT NULL,
  `datepub_1_1_3` date NOT NULL,
  `datepub_1_1_4` date NOT NULL,
  `title_1_2_1` varchar(100) NOT NULL,
  `title_1_2_2` varchar(100) NOT NULL,
  `title_1_2_3` varchar(100) NOT NULL,
  `title_1_2_4` varchar(100) NOT NULL,
  `type_1_2_1` varchar(100) NOT NULL,
  `type_1_2_2` varchar(100) NOT NULL,
  `type_1_2_3` varchar(100) NOT NULL,
  `type_1_2_4` varchar(100) NOT NULL,
  `name_1_2_1` varchar(100) NOT NULL,
  `name_1_2_2` varchar(100) NOT NULL,
  `name_1_2_3` varchar(100) NOT NULL,
  `name_1_2_4` varchar(100) NOT NULL,
  `rev_1_2_1` varchar(100) NOT NULL,
  `rev_1_2_2` varchar(100) NOT NULL,
  `rev_1_2_3` varchar(100) NOT NULL,
  `rev_1_2_4` varchar(100) NOT NULL,
  `int_1_2_1` varchar(100) NOT NULL,
  `int_1_2_2` varchar(100) NOT NULL,
  `int_1_2_3` varchar(100) NOT NULL,
  `int_1_2_4` varchar(100) NOT NULL,
  `datepub_1_2_1` date NOT NULL,
  `datepub_1_2_2` date NOT NULL,
  `datepub_1_2_3` date NOT NULL,
  `datepub_1_2_4` date NOT NULL,
  `title_2_1_1` varchar(100) NOT NULL,
  `title_2_1_2` varchar(100) NOT NULL,
  `title_2_1_3` varchar(100) NOT NULL,
  `title_2_1_4` varchar(100) NOT NULL,
  `datecom_2_1_1` varchar(100) NOT NULL,
  `datecom_2_1_2` varchar(100) NOT NULL,
  `datecom_2_1_3` varchar(100) NOT NULL,
  `datecom_2_1_4` varchar(100) NOT NULL,
  `nameproj_2_1_1` varchar(100) NOT NULL,
  `nameproj_2_1_2` varchar(100) NOT NULL,
  `nameproj_2_1_3` varchar(100) NOT NULL,
  `nameproj_2_1_4` varchar(100) NOT NULL,
  `fund_2_1_1` varchar(100) NOT NULL,
  `fund_2_1_2` varchar(100) NOT NULL,
  `fund_2_1_3` varchar(100) NOT NULL,
  `fund_2_1_4` varchar(100) NOT NULL,
  `dateimp_2_1_1` date NOT NULL,
  `dateimp_2_1_2` date NOT NULL,
  `dateimp_2_1_3` date NOT NULL,
  `dateimp_2_1_4` date NOT NULL,
  `title_2_2_1` varchar(100) NOT NULL,
  `title_2_2_2` varchar(100) NOT NULL,
  `title_2_2_3` varchar(100) NOT NULL,
  `title_2_2_4` varchar(100) NOT NULL,
  `datecom_2_2_1` varchar(100) NOT NULL,
  `datecom_2_2_2` varchar(100) NOT NULL,
  `datecom_2_2_3` varchar(100) NOT NULL,
  `datecom_2_2_4` varchar(100) NOT NULL,
  `nameproj_2_2_1` varchar(100) NOT NULL,
  `nameproj_2_2_2` varchar(100) NOT NULL,
  `nameproj_2_2_3` varchar(100) NOT NULL,
  `nameproj_2_2_4` varchar(100) NOT NULL,
  `fund_2_2_1` varchar(100) NOT NULL,
  `fund_2_2_2` varchar(100) NOT NULL,
  `fund_2_2_3` varchar(100) NOT NULL,
  `fund_2_2_4` varchar(100) NOT NULL,
  `dateimp_2_2_1` date NOT NULL,
  `dateimp_2_2_2` date NOT NULL,
  `dateimp_2_2_3` date NOT NULL,
  `dateimp_2_2_4` date NOT NULL,
  `title_3_1_1` varchar(100) NOT NULL,
  `title_3_1_2` varchar(100) NOT NULL,
  `title_3_1_3` varchar(100) NOT NULL,
  `title_3_1_4` varchar(100) NOT NULL,
  `datepub_3_1_1` date NOT NULL,
  `datepub_3_1_2` date NOT NULL,
  `datepub_3_1_3` date NOT NULL,
  `datepub_3_1_4` date NOT NULL,
  `name_3_1_1` varchar(100) NOT NULL,
  `name_3_1_2` varchar(100) NOT NULL,
  `name_3_1_3` varchar(100) NOT NULL,
  `name_3_1_4` varchar(100) NOT NULL,
  `no_citation_3_1_1` varchar(100) NOT NULL,
  `no_citation_3_1_2` varchar(100) NOT NULL,
  `no_citation_3_1_3` varchar(100) NOT NULL,
  `no_citation_3_1_4` varchar(100) NOT NULL,
  `index_citation_3_1_1` varchar(100) NOT NULL,
  `index_citation_3_1_2` varchar(100) NOT NULL,
  `index_citation_3_1_3` varchar(100) NOT NULL,
  `index_citation_3_1_4` varchar(100) NOT NULL,
  `year_citation_3_1_1` varchar(100) NOT NULL,
  `year_citation_3_1_2` varchar(100) NOT NULL,
  `year_citation_3_1_3` varchar(100) NOT NULL,
  `year_citation_3_1_4` varchar(100) NOT NULL,
  `title_3_2_1` varchar(100) NOT NULL,
  `title_3_2_2` varchar(100) NOT NULL,
  `title_3_2_3` varchar(100) NOT NULL,
  `title_3_2_4` varchar(100) NOT NULL,
  `datepub_3_2_1` date NOT NULL,
  `datepub_3_2_2` date NOT NULL,
  `datepub_3_2_3` date NOT NULL,
  `datepub_3_2_4` date NOT NULL,
  `name_3_2_1` varchar(100) NOT NULL,
  `name_3_2_2` varchar(100) NOT NULL,
  `name_3_2_3` varchar(100) NOT NULL,
  `name_3_2_4` varchar(100) NOT NULL,
  `no_citation_3_2_1` varchar(100) NOT NULL,
  `no_citation_3_2_2` varchar(100) NOT NULL,
  `no_citation_3_2_3` varchar(100) NOT NULL,
  `no_citation_3_2_4` varchar(100) NOT NULL,
  `index_citation_3_2_1` varchar(100) NOT NULL,
  `index_citation_3_2_2` varchar(100) NOT NULL,
  `index_citation_3_2_3` varchar(100) NOT NULL,
  `index_citation_3_2_4` varchar(100) NOT NULL,
  `year_citation_3_2_1` varchar(100) NOT NULL,
  `year_citation_3_2_2` varchar(100) NOT NULL,
  `year_citation_3_2_3` varchar(100) NOT NULL,
  `year_citation_3_2_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form2_b`
--

CREATE TABLE `form2_b` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ipsole_name_1` varchar(100) NOT NULL,
  `ipsole_name_2` varchar(100) NOT NULL,
  `ipsole_name_3` varchar(100) NOT NULL,
  `ipsole_name_4` varchar(100) NOT NULL,
  `ipsole_appdate_1` date NOT NULL,
  `ipsole_appdate_2` date NOT NULL,
  `ipsole_appdate_3` date NOT NULL,
  `ipsole_appdate_4` date NOT NULL,
  `ipsole_patapp_1` varchar(100) NOT NULL,
  `ipsole_patapp_2` varchar(100) NOT NULL,
  `ipsole_patapp_3` varchar(100) NOT NULL,
  `ipsole_patapp_4` varchar(100) NOT NULL,
  `ipsole_acceptdate_1` date NOT NULL,
  `ipsole_acceptdate_2` date NOT NULL,
  `ipsole_acceptdate_3` date NOT NULL,
  `ipsole_acceptdate_4` date NOT NULL,
  `ipmul_name_1` varchar(100) NOT NULL,
  `ipmul_name_2` varchar(100) NOT NULL,
  `ipmul_name_3` varchar(100) NOT NULL,
  `ipmul_name_4` varchar(100) NOT NULL,
  `ipmul_appdate_1` date NOT NULL,
  `ipmul_appdate_2` date NOT NULL,
  `ipmul_appdate_3` date NOT NULL,
  `ipmul_appdate_4` date NOT NULL,
  `ipmul_patapp_1` varchar(100) NOT NULL,
  `ipmul_patapp_2` varchar(100) NOT NULL,
  `ipmul_patapp_3` varchar(100) NOT NULL,
  `ipmul_patapp_4` varchar(100) NOT NULL,
  `ipmul_acceptdate_1` date NOT NULL,
  `ipmul_acceptdate_2` date NOT NULL,
  `ipmul_acceptdate_3` date NOT NULL,
  `ipmul_acceptdate_4` date NOT NULL,
  `ipmul_contrib_1` varchar(100) NOT NULL,
  `ipmul_contrib_2` varchar(100) NOT NULL,
  `ipmul_contrib_3` varchar(100) NOT NULL,
  `ipmul_contrib_4` varchar(100) NOT NULL,
  `umidsole_name_1` varchar(100) NOT NULL,
  `umidsole_name_2` varchar(100) NOT NULL,
  `umidsole_name_3` varchar(100) NOT NULL,
  `umidsole_name_4` varchar(100) NOT NULL,
  `umidsole_appdate_1` date NOT NULL,
  `umidsole_appdate_2` date NOT NULL,
  `umidsole_appdate_3` date NOT NULL,
  `umidsole_appdate_4` date NOT NULL,
  `umidsole_patapp_1` varchar(100) NOT NULL,
  `umidsole_patapp_2` varchar(100) NOT NULL,
  `umidsole_patapp_3` varchar(100) NOT NULL,
  `umidsole_patapp_4` varchar(100) NOT NULL,
  `umidsole_acceptdate_1` date NOT NULL,
  `umidsole_acceptdate_2` date NOT NULL,
  `umidsole_acceptdate_3` date NOT NULL,
  `umidsole_acceptdate_4` date NOT NULL,
  `umidmul_name_1` varchar(100) NOT NULL,
  `umidmul_name_2` varchar(100) NOT NULL,
  `umidmul_name_3` varchar(100) NOT NULL,
  `umidmul_name_4` varchar(100) NOT NULL,
  `umidmul_appdate_1` date NOT NULL,
  `umidmul_appdate_2` date NOT NULL,
  `umidmul_appdate_3` date NOT NULL,
  `umidmul_appdate_4` date NOT NULL,
  `umidmul_patapp_1` varchar(100) NOT NULL,
  `umidmul_patapp_2` varchar(100) NOT NULL,
  `umidmul_patapp_3` varchar(100) NOT NULL,
  `umidmul_patapp_4` varchar(100) NOT NULL,
  `umidmul_acceptdate_1` date NOT NULL,
  `umidmul_acceptdate_2` date NOT NULL,
  `umidmul_acceptdate_3` date NOT NULL,
  `umidmul_acceptdate_4` date NOT NULL,
  `umidmul_contrib_1` varchar(100) NOT NULL,
  `umidmul_contrib_2` varchar(100) NOT NULL,
  `umidmul_contrib_3` varchar(100) NOT NULL,
  `umidmul_contrib_4` varchar(100) NOT NULL,
  `cpplocal_name_1` varchar(100) NOT NULL,
  `cpplocal_name_2` varchar(100) NOT NULL,
  `cpplocal_name_3` varchar(100) NOT NULL,
  `cpplocal_name_4` varchar(100) NOT NULL,
  `cpplocal_type_1` varchar(100) NOT NULL,
  `cpplocal_type_2` varchar(100) NOT NULL,
  `cpplocal_type_3` varchar(100) NOT NULL,
  `cpplocal_type_4` varchar(100) NOT NULL,
  `cpplocal_patentdate_1` date NOT NULL,
  `cpplocal_patentdate_2` date NOT NULL,
  `cpplocal_patentdate_3` date NOT NULL,
  `cpplocal_patentdate_4` date NOT NULL,
  `cpplocal_proddate_1` date NOT NULL,
  `cpplocal_proddate_2` date NOT NULL,
  `cpplocal_proddate_3` date NOT NULL,
  `cpplocal_proddate_4` date NOT NULL,
  `cpplocal_area_1` varchar(100) NOT NULL,
  `cpplocal_area_2` varchar(100) NOT NULL,
  `cpplocal_area_3` varchar(100) NOT NULL,
  `cpplocal_area_4` varchar(100) NOT NULL,
  `cppinter_name_1` varchar(100) NOT NULL,
  `cppinter_name_2` varchar(100) NOT NULL,
  `cppinter_name_3` varchar(100) NOT NULL,
  `cppinter_name_4` varchar(100) NOT NULL,
  `cppinter_type_1` varchar(100) NOT NULL,
  `cppinter_type_2` varchar(100) NOT NULL,
  `cppinter_type_3` varchar(100) NOT NULL,
  `cppinter_type_4` varchar(100) NOT NULL,
  `cppinter_patentdate_1` date NOT NULL,
  `cppinter_patentdate_2` date NOT NULL,
  `cppinter_patentdate_3` date NOT NULL,
  `cppinter_patentdate_4` date NOT NULL,
  `cppinter_proddate_1` date NOT NULL,
  `cppinter_proddate_2` date NOT NULL,
  `cppinter_proddate_3` date NOT NULL,
  `cppinter_proddate_4` date NOT NULL,
  `cppinter_area_1` varchar(100) NOT NULL,
  `cppinter_area_2` varchar(100) NOT NULL,
  `cppinter_area_3` varchar(100) NOT NULL,
  `cppinter_area_4` varchar(100) NOT NULL,
  `nspsole_name_1` varchar(100) NOT NULL,
  `nspsole_name_2` varchar(100) NOT NULL,
  `nspsole_name_3` varchar(100) NOT NULL,
  `nspsole_name_4` varchar(100) NOT NULL,
  `nspsole_copydate_1` date NOT NULL,
  `nspsole_copydate_2` date NOT NULL,
  `nspsole_copydate_3` date NOT NULL,
  `nspsole_copydate_4` date NOT NULL,
  `nspsole_utildate_1` date NOT NULL,
  `nspsole_utildate_2` date NOT NULL,
  `nspsole_utildate_3` date NOT NULL,
  `nspsole_utildate_4` date NOT NULL,
  `nspsole_endusername_1` varchar(100) NOT NULL,
  `nspsole_endusername_2` varchar(100) NOT NULL,
  `nspsole_endusername_3` varchar(100) NOT NULL,
  `nspsole_endusername_4` varchar(100) NOT NULL,
  `nspmul_name_1` varchar(100) NOT NULL,
  `nspmul_name_2` varchar(100) NOT NULL,
  `nspmul_name_3` varchar(100) NOT NULL,
  `nspmul_name_4` varchar(100) NOT NULL,
  `nspmul_copydate_1` date NOT NULL,
  `nspmul_copydate_2` date NOT NULL,
  `nspmul_copydate_3` date NOT NULL,
  `nspmul_copydate_4` date NOT NULL,
  `nspmul_utildate_1` date NOT NULL,
  `nspmul_utildate_2` date NOT NULL,
  `nspmul_utildate_3` date NOT NULL,
  `nspmul_utildate_4` date NOT NULL,
  `nspmul_endusername_1` varchar(100) NOT NULL,
  `nspmul_endusername_2` varchar(100) NOT NULL,
  `nspmul_endusername_3` varchar(100) NOT NULL,
  `nspmul_endusername_4` varchar(100) NOT NULL,
  `nspmul_contrib_1` varchar(100) NOT NULL,
  `nspmul_contrib_2` varchar(100) NOT NULL,
  `nspmul_contrib_3` varchar(100) NOT NULL,
  `nspmul_contrib_4` varchar(100) NOT NULL,
  `uspsole_name_1` varchar(100) NOT NULL,
  `uspsole_name_2` varchar(100) NOT NULL,
  `uspsole_name_3` varchar(100) NOT NULL,
  `uspsole_name_4` varchar(100) NOT NULL,
  `uspsole_copydate_1` date NOT NULL,
  `uspsole_copydate_2` date NOT NULL,
  `uspsole_copydate_3` date NOT NULL,
  `uspsole_copydate_4` date NOT NULL,
  `uspsole_utildate_1` date NOT NULL,
  `uspsole_utildate_2` date NOT NULL,
  `uspsole_utildate_3` date NOT NULL,
  `uspsole_utildate_4` date NOT NULL,
  `uspsole_contrib_1` varchar(100) NOT NULL,
  `uspsole_contrib_2` varchar(100) NOT NULL,
  `uspsole_contrib_3` varchar(100) NOT NULL,
  `uspsole_contrib_4` varchar(100) NOT NULL,
  `uspsole_specfeat_1` varchar(100) NOT NULL,
  `uspsole_specfeat_2` varchar(100) NOT NULL,
  `uspsole_specfeat_3` varchar(100) NOT NULL,
  `uspsole_specfeat_4` varchar(100) NOT NULL,
  `uspsole_endusername_1` varchar(100) NOT NULL,
  `uspsole_endusername_2` varchar(100) NOT NULL,
  `uspsole_endusername_3` varchar(100) NOT NULL,
  `uspsole_endusername_4` varchar(100) NOT NULL,
  `npvsole_name_1` varchar(100) NOT NULL,
  `npvsole_name_2` varchar(100) NOT NULL,
  `npvsole_name_3` varchar(100) NOT NULL,
  `npvsole_name_4` varchar(100) NOT NULL,
  `npvsole_type_1` varchar(100) NOT NULL,
  `npvsole_type_2` varchar(100) NOT NULL,
  `npvsole_type_3` varchar(100) NOT NULL,
  `npvsole_type_4` varchar(100) NOT NULL,
  `npvsole_datecom_1` date NOT NULL,
  `npvsole_datecom_2` date NOT NULL,
  `npvsole_datecom_3` date NOT NULL,
  `npvsole_datecom_4` date NOT NULL,
  `npvsole_datereg_1` date NOT NULL,
  `npvsole_datereg_2` date NOT NULL,
  `npvsole_datereg_3` date NOT NULL,
  `npvsole_datereg_4` date NOT NULL,
  `npvsole_dateprop_1` date NOT NULL,
  `npvsole_dateprop_2` date NOT NULL,
  `npvsole_dateprop_3` date NOT NULL,
  `npvsole_dateprop_4` date NOT NULL,
  `npvmul_name_1` varchar(100) NOT NULL,
  `npvmul_name_2` varchar(100) NOT NULL,
  `npvmul_name_3` varchar(100) NOT NULL,
  `npvmul_name_4` varchar(100) NOT NULL,
  `npvmul_type_1` varchar(100) NOT NULL,
  `npvmul_type_2` varchar(100) NOT NULL,
  `npvmul_type_3` varchar(100) NOT NULL,
  `npvmul_type_4` varchar(100) NOT NULL,
  `npvmul_datecom_1` date NOT NULL,
  `npvmul_datecom_2` date NOT NULL,
  `npvmul_datecom_3` date NOT NULL,
  `npvmul_datecom_4` date NOT NULL,
  `npvmul_datereg_1` date NOT NULL,
  `npvmul_datereg_2` date NOT NULL,
  `npvmul_datereg_3` date NOT NULL,
  `npvmul_datereg_4` date NOT NULL,
  `npvmul_dateprop_1` date NOT NULL,
  `npvmul_dateprop_2` date NOT NULL,
  `npvmul_dateprop_3` date NOT NULL,
  `npvmul_dateprop_4` date NOT NULL,
  `npvmul_contrib_1` varchar(100) NOT NULL,
  `npvmul_contrib_2` varchar(100) NOT NULL,
  `npvmul_contrib_3` varchar(100) NOT NULL,
  `npvmul_contrib_4` varchar(100) NOT NULL
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `department`, `status`, `date_updated`, `date_created`, `user_id`) VALUES
('miro', '$2y$10$gA7yXhiKDpKCbKSudm0p7.m6TKQvyvGmBtwkY/CeiL4urJ2lRfPb6', 'micorilan1999@gmail.com', 'College of Technology', 'Active', '', '2024-06-15 21:53:13', 1);

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
-- Indexes for table `form1_a`
--
ALTER TABLE `form1_a`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form1_b`
--
ALTER TABLE `form1_b`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form1_c`
--
ALTER TABLE `form1_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form2_a`
--
ALTER TABLE `form2_a`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form2_b`
--
ALTER TABLE `form2_b`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `form1_a`
--
ALTER TABLE `form1_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form1_b`
--
ALTER TABLE `form1_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form1_c`
--
ALTER TABLE `form1_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form2_a`
--
ALTER TABLE `form2_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form2_b`
--
ALTER TABLE `form2_b`
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
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
