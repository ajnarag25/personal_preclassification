-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 05:11 PM
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

--
-- Dumping data for table `form2_b`
--

INSERT INTO `form2_b` (`id`, `user_id`, `ipsole_name_1`, `ipsole_name_2`, `ipsole_name_3`, `ipsole_name_4`, `ipsole_appdate_1`, `ipsole_appdate_2`, `ipsole_appdate_3`, `ipsole_appdate_4`, `ipsole_patapp_1`, `ipsole_patapp_2`, `ipsole_patapp_3`, `ipsole_patapp_4`, `ipsole_acceptdate_1`, `ipsole_acceptdate_2`, `ipsole_acceptdate_3`, `ipsole_acceptdate_4`, `ipmul_name_1`, `ipmul_name_2`, `ipmul_name_3`, `ipmul_name_4`, `ipmul_appdate_1`, `ipmul_appdate_2`, `ipmul_appdate_3`, `ipmul_appdate_4`, `ipmul_patapp_1`, `ipmul_patapp_2`, `ipmul_patapp_3`, `ipmul_patapp_4`, `ipmul_acceptdate_1`, `ipmul_acceptdate_2`, `ipmul_acceptdate_3`, `ipmul_acceptdate_4`, `ipmul_contrib_1`, `ipmul_contrib_2`, `ipmul_contrib_3`, `ipmul_contrib_4`, `umidsole_name_1`, `umidsole_name_2`, `umidsole_name_3`, `umidsole_name_4`, `umidsole_appdate_1`, `umidsole_appdate_2`, `umidsole_appdate_3`, `umidsole_appdate_4`, `umidsole_patapp_1`, `umidsole_patapp_2`, `umidsole_patapp_3`, `umidsole_patapp_4`, `umidsole_acceptdate_1`, `umidsole_acceptdate_2`, `umidsole_acceptdate_3`, `umidsole_acceptdate_4`, `umidmul_name_1`, `umidmul_name_2`, `umidmul_name_3`, `umidmul_name_4`, `umidmul_appdate_1`, `umidmul_appdate_2`, `umidmul_appdate_3`, `umidmul_appdate_4`, `umidmul_patapp_1`, `umidmul_patapp_2`, `umidmul_patapp_3`, `umidmul_patapp_4`, `umidmul_acceptdate_1`, `umidmul_acceptdate_2`, `umidmul_acceptdate_3`, `umidmul_acceptdate_4`, `umidmul_contrib_1`, `umidmul_contrib_2`, `umidmul_contrib_3`, `umidmul_contrib_4`, `cpplocal_name_1`, `cpplocal_name_2`, `cpplocal_name_3`, `cpplocal_name_4`, `cpplocal_type_1`, `cpplocal_type_2`, `cpplocal_type_3`, `cpplocal_type_4`, `cpplocal_patentdate_1`, `cpplocal_patentdate_2`, `cpplocal_patentdate_3`, `cpplocal_patentdate_4`, `cpplocal_proddate_1`, `cpplocal_proddate_2`, `cpplocal_proddate_3`, `cpplocal_proddate_4`, `cpplocal_area_1`, `cpplocal_area_2`, `cpplocal_area_3`, `cpplocal_area_4`, `cppinter_name_1`, `cppinter_name_2`, `cppinter_name_3`, `cppinter_name_4`, `cppinter_type_1`, `cppinter_type_2`, `cppinter_type_3`, `cppinter_type_4`, `cppinter_patentdate_1`, `cppinter_patentdate_2`, `cppinter_patentdate_3`, `cppinter_patentdate_4`, `cppinter_proddate_1`, `cppinter_proddate_2`, `cppinter_proddate_3`, `cppinter_proddate_4`, `cppinter_area_1`, `cppinter_area_2`, `cppinter_area_3`, `cppinter_area_4`, `nspsole_name_1`, `nspsole_name_2`, `nspsole_name_3`, `nspsole_name_4`, `nspsole_copydate_1`, `nspsole_copydate_2`, `nspsole_copydate_3`, `nspsole_copydate_4`, `nspsole_utildate_1`, `nspsole_utildate_2`, `nspsole_utildate_3`, `nspsole_utildate_4`, `nspsole_endusername_1`, `nspsole_endusername_2`, `nspsole_endusername_3`, `nspsole_endusername_4`, `nspmul_name_1`, `nspmul_name_2`, `nspmul_name_3`, `nspmul_name_4`, `nspmul_copydate_1`, `nspmul_copydate_2`, `nspmul_copydate_3`, `nspmul_copydate_4`, `nspmul_utildate_1`, `nspmul_utildate_2`, `nspmul_utildate_3`, `nspmul_utildate_4`, `nspmul_endusername_1`, `nspmul_endusername_2`, `nspmul_endusername_3`, `nspmul_endusername_4`, `nspmul_contrib_1`, `nspmul_contrib_2`, `nspmul_contrib_3`, `nspmul_contrib_4`, `uspsole_name_1`, `uspsole_name_2`, `uspsole_name_3`, `uspsole_name_4`, `uspsole_copydate_1`, `uspsole_copydate_2`, `uspsole_copydate_3`, `uspsole_copydate_4`, `uspsole_utildate_1`, `uspsole_utildate_2`, `uspsole_utildate_3`, `uspsole_utildate_4`, `uspsole_contrib_1`, `uspsole_contrib_2`, `uspsole_contrib_3`, `uspsole_contrib_4`, `uspsole_specfeat_1`, `uspsole_specfeat_2`, `uspsole_specfeat_3`, `uspsole_specfeat_4`, `uspsole_endusername_1`, `uspsole_endusername_2`, `uspsole_endusername_3`, `uspsole_endusername_4`, `npvsole_name_1`, `npvsole_name_2`, `npvsole_name_3`, `npvsole_name_4`, `npvsole_type_1`, `npvsole_type_2`, `npvsole_type_3`, `npvsole_type_4`, `npvsole_datecom_1`, `npvsole_datecom_2`, `npvsole_datecom_3`, `npvsole_datecom_4`, `npvsole_datereg_1`, `npvsole_datereg_2`, `npvsole_datereg_3`, `npvsole_datereg_4`, `npvsole_dateprop_1`, `npvsole_dateprop_2`, `npvsole_dateprop_3`, `npvsole_dateprop_4`, `npvmul_name_1`, `npvmul_name_2`, `npvmul_name_3`, `npvmul_name_4`, `npvmul_type_1`, `npvmul_type_2`, `npvmul_type_3`, `npvmul_type_4`, `npvmul_datecom_1`, `npvmul_datecom_2`, `npvmul_datecom_3`, `npvmul_datecom_4`, `npvmul_datereg_1`, `npvmul_datereg_2`, `npvmul_datereg_3`, `npvmul_datereg_4`, `npvmul_dateprop_1`, `npvmul_dateprop_2`, `npvmul_dateprop_3`, `npvmul_dateprop_4`, `npvmul_contrib_1`, `npvmul_contrib_2`, `npvmul_contrib_3`, `npvmul_contrib_4`) VALUES
(1, 1, 'fsdaf', 'fsdff', 'sdf', 'fdsaf', '2024-05-27', '2024-05-29', '2024-06-12', '2024-06-11', 'Accepted', 'Accepted', 'Granted', 'Granted', '2024-06-26', '2024-07-01', '2024-06-11', '2024-06-18', 'fsdf', 'fsadf', 'fasdf', 'fsdaf', '2024-06-10', '2024-06-04', '2024-06-11', '2024-05-29', 'Granted', 'Accepted', 'Published', 'Granted', '2024-06-19', '2024-06-25', '2024-07-02', '2024-06-19', '23', '23', '23', '23', 'fasdf', 'fsadf', 'fsadf', 'fasdf', '2024-06-11', '2024-06-26', '2024-06-05', '2024-06-04', 'Utility', 'Industrial', 'Industrial', 'Utility', '2024-06-03', '2024-06-17', '2024-06-11', '2024-06-19', 'fsdf', 'fsadf', 'fsfd', 'fsadf', '2024-06-05', '2024-06-04', '2024-06-18', '2024-06-26', 'Utility', 'Industrial', 'Utility', 'Industrial', '2024-06-17', '2024-05-28', '2024-06-04', '2024-06-04', '34', '34', '34', '34', 'fsdf', 'fasdf', 'sadf', 'fsadf', 'fsdf', 'fasdf', 'fsdf', 'fsadf', '2024-06-03', '2024-06-25', '2024-06-11', '2024-06-03', '2024-06-11', '2024-06-12', '2024-06-18', '2024-06-25', 'f', 'fsdf', 'fsdf', 'fsdf', 'fsdfsdf', 'ffsdaf', 'sdfsadfs', 'fsdaf', 'fsdf', 'fsd', 'fsdf', 'sfdaf', '2024-06-11', '2024-06-17', '2024-07-02', '2024-06-11', '2024-06-18', '2024-06-17', '2024-06-18', '2024-06-24', 'ffsdf', 'fsd', 'fsdf', 'fsadf', 'fsadf', 'fsdfsd', 'fsdf', 'fsadf', '2024-06-04', '2024-06-04', '2024-06-04', '2024-05-28', '2024-06-24', '2024-06-20', '2024-06-16', '2024-06-17', 'sdfsdf', 'ffsd', 'fsdf', 'fsdf', 'fsdf', 'fsdf', 'fsdffsd', 'fsdf', '2024-06-26', '2024-06-25', '2024-06-25', '2024-06-18', '2024-06-04', '2024-05-29', '2024-06-04', '2024-06-11', 'fsd', 'fsd', 'fsdf', 'fsdf', '23', '23', '23', '23', 'fsadf', 'fsadf', 'fsaf', 'fsadf', '2024-06-12', '2024-06-16', '2024-06-10', '2024-06-17', '2024-06-17', '2024-06-18', '2024-06-18', '2024-06-11', 'Co-developer', 'Sole', 'Co-developer', 'Sole', 'fsdfa', 'fsdf', 'fsdf', 'fsdaf', 'fsdf', 'fsadfsd', 'fsadff', 'fsadf', 'fsdaf', 'fsadfsfsadf', 'fsdaf', '', 'fsadf', 'fsadf', 'fasdf', '', '2024-06-11', '2024-06-11', '2024-06-17', '0000-00-00', '2024-06-17', '2024-06-18', '2024-06-25', '0000-00-00', '2024-06-18', '2024-06-19', '2024-06-18', '0000-00-00', 'fsdf', 'fsdf', 'fsdf', '', 'fsdf', 'fsdf', 'fsdf', '', '2024-06-20', '2024-06-26', '2024-06-20', '0000-00-00', '2024-06-18', '2024-06-13', '2024-05-31', '0000-00-00', '2024-06-13', '2024-06-05', '2024-05-29', '0000-00-00', '34', '34', '34', '');

-- --------------------------------------------------------

--
-- Table structure for table `form2_c`
--

CREATE TABLE `form2_c` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title_1_1_1` varchar(100) DEFAULT NULL,
  `title_1_1_2` varchar(100) DEFAULT NULL,
  `title_1_1_3` varchar(100) DEFAULT NULL,
  `type_1_1_1` varchar(100) DEFAULT NULL,
  `type_1_1_2` varchar(100) DEFAULT NULL,
  `type_1_1_3` varchar(100) DEFAULT NULL,
  `class_1_1_1` varchar(100) DEFAULT NULL,
  `class_1_1_2` varchar(100) DEFAULT NULL,
  `class_1_1_3` varchar(100) DEFAULT NULL,
  `copydate_1_1_1` date DEFAULT NULL,
  `copydate_1_1_2` date DEFAULT NULL,
  `copydate_1_1_3` date DEFAULT NULL,
  `venue_1_1_1` varchar(100) DEFAULT NULL,
  `venue_1_1_2` varchar(100) DEFAULT NULL,
  `venue_1_1_3` varchar(100) DEFAULT NULL,
  `org_1_1_1` varchar(100) DEFAULT NULL,
  `org_1_1_2` varchar(100) DEFAULT NULL,
  `org_1_1_3` varchar(100) DEFAULT NULL,
  `title_1_2_1` varchar(100) DEFAULT NULL,
  `title_1_2_2` varchar(100) DEFAULT NULL,
  `title_1_2_3` varchar(100) DEFAULT NULL,
  `type_1_2_1` varchar(100) DEFAULT NULL,
  `type_1_2_2` varchar(100) DEFAULT NULL,
  `type_1_2_3` varchar(100) DEFAULT NULL,
  `class_1_2_1` varchar(100) DEFAULT NULL,
  `class_1_2_2` varchar(100) DEFAULT NULL,
  `class_1_2_3` varchar(100) DEFAULT NULL,
  `exedate_1_2_1` date DEFAULT NULL,
  `exedate_1_2_2` date DEFAULT NULL,
  `exedate_1_2_3` date DEFAULT NULL,
  `venue_1_2_1` varchar(100) DEFAULT NULL,
  `venue_1_2_2` varchar(100) DEFAULT NULL,
  `venue_1_2_3` varchar(100) DEFAULT NULL,
  `org_1_2_1` varchar(100) DEFAULT NULL,
  `org_1_2_2` varchar(100) DEFAULT NULL,
  `org_1_2_3` varchar(100) DEFAULT NULL,
  `title_1_3_1` varchar(100) DEFAULT NULL,
  `title_1_3_2` varchar(100) DEFAULT NULL,
  `title_1_3_3` varchar(100) DEFAULT NULL,
  `class_1_3_1` varchar(100) DEFAULT NULL,
  `class_1_3_2` varchar(100) DEFAULT NULL,
  `class_1_3_3` varchar(100) DEFAULT NULL,
  `rev_1_3_1` varchar(100) DEFAULT NULL,
  `rev_1_3_2` varchar(100) DEFAULT NULL,
  `rev_1_3_3` varchar(100) DEFAULT NULL,
  `exedate_1_3_1` date DEFAULT NULL,
  `exedate_1_3_2` date DEFAULT NULL,
  `exedate_1_3_3` date DEFAULT NULL,
  `venue_1_3_1` varchar(100) DEFAULT NULL,
  `venue_1_3_2` varchar(100) DEFAULT NULL,
  `venue_1_3_3` varchar(100) DEFAULT NULL,
  `org_1_3_1` varchar(100) DEFAULT NULL,
  `org_1_3_2` varchar(100) DEFAULT NULL,
  `org_1_3_3` varchar(100) DEFAULT NULL,
  `title_1_4_1` varchar(100) DEFAULT NULL,
  `title_1_4_2` varchar(100) DEFAULT NULL,
  `title_1_4_3` varchar(100) DEFAULT NULL,
  `type_1_4_1` varchar(100) DEFAULT NULL,
  `type_1_4_2` varchar(100) DEFAULT NULL,
  `type_1_4_3` varchar(100) DEFAULT NULL,
  `rev_1_4_1` varchar(100) DEFAULT NULL,
  `rev_1_4_2` varchar(100) DEFAULT NULL,
  `rev_1_4_3` varchar(100) DEFAULT NULL,
  `copydate_1_4_1` date DEFAULT NULL,
  `copydate_1_4_2` date DEFAULT NULL,
  `copydate_1_4_3` date DEFAULT NULL,
  `venue_1_4_1` varchar(100) DEFAULT NULL,
  `venue_1_4_2` varchar(100) DEFAULT NULL,
  `venue_1_4_3` varchar(100) DEFAULT NULL,
  `org_1_4_1` varchar(100) DEFAULT NULL,
  `org_1_4_2` varchar(100) DEFAULT NULL,
  `org_1_4_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form2_c`
--

INSERT INTO `form2_c` (`id`, `user_id`, `title_1_1_1`, `title_1_1_2`, `title_1_1_3`, `type_1_1_1`, `type_1_1_2`, `type_1_1_3`, `class_1_1_1`, `class_1_1_2`, `class_1_1_3`, `copydate_1_1_1`, `copydate_1_1_2`, `copydate_1_1_3`, `venue_1_1_1`, `venue_1_1_2`, `venue_1_1_3`, `org_1_1_1`, `org_1_1_2`, `org_1_1_3`, `title_1_2_1`, `title_1_2_2`, `title_1_2_3`, `type_1_2_1`, `type_1_2_2`, `type_1_2_3`, `class_1_2_1`, `class_1_2_2`, `class_1_2_3`, `exedate_1_2_1`, `exedate_1_2_2`, `exedate_1_2_3`, `venue_1_2_1`, `venue_1_2_2`, `venue_1_2_3`, `org_1_2_1`, `org_1_2_2`, `org_1_2_3`, `title_1_3_1`, `title_1_3_2`, `title_1_3_3`, `class_1_3_1`, `class_1_3_2`, `class_1_3_3`, `rev_1_3_1`, `rev_1_3_2`, `rev_1_3_3`, `exedate_1_3_1`, `exedate_1_3_2`, `exedate_1_3_3`, `venue_1_3_1`, `venue_1_3_2`, `venue_1_3_3`, `org_1_3_1`, `org_1_3_2`, `org_1_3_3`, `title_1_4_1`, `title_1_4_2`, `title_1_4_3`, `type_1_4_1`, `type_1_4_2`, `type_1_4_3`, `rev_1_4_1`, `rev_1_4_2`, `rev_1_4_3`, `copydate_1_4_1`, `copydate_1_4_2`, `copydate_1_4_3`, `venue_1_4_1`, `venue_1_4_2`, `venue_1_4_3`, `org_1_4_1`, `org_1_4_2`, `org_1_4_3`) VALUES
(1, 1, 'fsadf', 'fsdaf', 'fsadf', 'Song', 'Song', 'Choreography', 'new', 'new', 'own', '2024-06-16', '2024-06-04', '2024-06-16', 'fsadf', 'fsdaf', 'fsad', 'fsdaf', 'fsadf', 'fsadf', 'fsdf', 'fsadf', 'fsadf', 'Painting', 'Painting', 'Film', 'Film', 'Arhcitecture', 'Arhcitecture', '2024-06-03', '2024-06-25', '2024-06-11', 'f', 'fsda', 'fsdaf', 'fsdaf', 'fsf', 'fsadf', 'fsadf', 'fsadf', 'sdf', 'Engineering', 'Engineering', 'one', 'fsaf', 'fsdf', 'asfd', '0000-00-00', '0000-00-00', '0000-00-00', 'fsadf', 'sadf', 'asdf', 'fsadf', 'fsadf', 'sadf', 'fsadf', 'fsadf', 'sfadff', 'Novel', 'Essay', 'Essay', 'fsd', 'fsadf', 'sadf', '2024-06-10', '2024-06-19', '2024-06-12', 'fsd', 'fsadf', 'sdff', 'sdf', 'sadfas', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `form3_ab`
--

CREATE TABLE `form3_ab` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nameA_1_1` varchar(100) DEFAULT NULL,
  `nameA_1_2` varchar(100) DEFAULT NULL,
  `nameA_1_3` varchar(100) DEFAULT NULL,
  `natureA_1_1` varchar(100) DEFAULT NULL,
  `natureA_1_2` varchar(100) DEFAULT NULL,
  `natureA_1_3` varchar(100) DEFAULT NULL,
  `facultyA_1_1` varchar(100) DEFAULT NULL,
  `facultyA_1_2` varchar(100) DEFAULT NULL,
  `facultyA_1_3` varchar(100) DEFAULT NULL,
  `moastartA_1_1` date DEFAULT NULL,
  `moastartA_1_2` date DEFAULT NULL,
  `moastartA_1_3` date DEFAULT NULL,
  `moaendA_1_1` date DEFAULT NULL,
  `moaendA_1_2` date DEFAULT NULL,
  `moaendA_1_3` date DEFAULT NULL,
  `actA_1_1` varchar(100) DEFAULT NULL,
  `actA_1_2` varchar(100) DEFAULT NULL,
  `actA_1_3` varchar(100) DEFAULT NULL,
  `dateactA_1_1` date DEFAULT NULL,
  `dateactA_1_2` date DEFAULT NULL,
  `dateactA_1_3` date DEFAULT NULL,
  `nameA_2_1` varchar(100) DEFAULT NULL,
  `nameA_2_2` varchar(100) DEFAULT NULL,
  `nameA_2_3` varchar(100) DEFAULT NULL,
  `roleA_2_1` varchar(100) DEFAULT NULL,
  `roleA_2_2` varchar(100) DEFAULT NULL,
  `roleA_2_3` varchar(100) DEFAULT NULL,
  `coverA_2_1` varchar(100) DEFAULT NULL,
  `coverA_2_2` varchar(100) DEFAULT NULL,
  `coverA_2_3` varchar(100) DEFAULT NULL,
  `totalA_2_1` varchar(100) DEFAULT NULL,
  `totalA_2_2` varchar(100) DEFAULT NULL,
  `totalA_2_3` varchar(100) DEFAULT NULL,
  `nameB_1_1_1` varchar(100) DEFAULT NULL,
  `nameB_1_1_2` varchar(100) DEFAULT NULL,
  `nameB_1_1_3` varchar(100) DEFAULT NULL,
  `dateappstartB_1_1_1` date DEFAULT NULL,
  `dateappstartB_1_1_2` date DEFAULT NULL,
  `dateappstartB_1_1_3` date DEFAULT NULL,
  `dateappendB_1_1_1` date DEFAULT NULL,
  `dateappendB_1_1_2` date DEFAULT NULL,
  `dateappendB_1_1_3` date DEFAULT NULL,
  `qaB_1_1_1` varchar(100) DEFAULT NULL,
  `qaB_1_1_2` varchar(100) DEFAULT NULL,
  `qaB_1_1_3` varchar(100) DEFAULT NULL,
  `scopeB_1_1_1` varchar(100) DEFAULT NULL,
  `scopeB_1_1_2` varchar(100) DEFAULT NULL,
  `scopeB_1_1_3` varchar(100) DEFAULT NULL,
  `nodepB_1_1_1` varchar(100) DEFAULT NULL,
  `nodepB_1_1_2` varchar(100) DEFAULT NULL,
  `nodepB_1_1_3` varchar(100) DEFAULT NULL,
  `titleB_1_2_1` varchar(100) DEFAULT NULL,
  `titleB_1_2_2` varchar(100) DEFAULT NULL,
  `titleB_1_2_3` varchar(100) DEFAULT NULL,
  `orgB_1_2_1` varchar(100) DEFAULT NULL,
  `orgB_1_2_2` varchar(100) DEFAULT NULL,
  `orgB_1_2_3` varchar(100) DEFAULT NULL,
  `evdateB_1_2_1` date DEFAULT NULL,
  `evdateB_1_2_2` date DEFAULT NULL,
  `evdateB_1_2_3` date DEFAULT NULL,
  `natureB_1_2_1` varchar(100) DEFAULT NULL,
  `natureB_1_2_2` varchar(100) DEFAULT NULL,
  `natureB_1_2_3` varchar(100) DEFAULT NULL,
  `venueB_1_2_1` varchar(100) DEFAULT NULL,
  `venueB_1_2_2` varchar(100) DEFAULT NULL,
  `venueB_1_2_3` varchar(100) DEFAULT NULL,
  `titleB_1_3_1` varchar(100) DEFAULT NULL,
  `titleB_1_3_2` varchar(100) DEFAULT NULL,
  `titleB_1_3_3` varchar(100) DEFAULT NULL,
  `nameB_1_3_1` varchar(100) DEFAULT NULL,
  `nameB_1_3_2` varchar(100) DEFAULT NULL,
  `nameB_1_3_3` varchar(100) DEFAULT NULL,
  `perstartB_1_3_1` varchar(100) DEFAULT NULL,
  `perstartB_1_3_2` varchar(100) DEFAULT NULL,
  `perstartB_1_3_3` varchar(100) DEFAULT NULL,
  `perendB_1_3_1` varchar(100) DEFAULT NULL,
  `perendB_1_3_2` varchar(100) DEFAULT NULL,
  `perendB_1_3_3` varchar(100) DEFAULT NULL,
  `scope_1_3_1` varchar(100) DEFAULT NULL,
  `scope_1_3_2` varchar(100) DEFAULT NULL,
  `scope_1_3_3` varchar(100) DEFAULT NULL,
  `role_1_3_1` varchar(100) DEFAULT NULL,
  `role_1_3_2` varchar(100) DEFAULT NULL,
  `role_1_3_3` varchar(100) DEFAULT NULL,
  `nameB_1_4_1` varchar(100) DEFAULT NULL,
  `nameB_1_4_2` varchar(100) DEFAULT NULL,
  `nameB_1_4_3` varchar(100) DEFAULT NULL,
  `titleB_1_4_1` varchar(100) DEFAULT NULL,
  `titleB_1_4_2` varchar(100) DEFAULT NULL,
  `titleB_1_4_3` varchar(100) DEFAULT NULL,
  `perengB_1_4_1` varchar(100) DEFAULT NULL,
  `perengB_1_4_2` varchar(100) DEFAULT NULL,
  `perengB_1_4_3` varchar(100) DEFAULT NULL,
  `noengB_1_4_1` varchar(100) DEFAULT NULL,
  `noengB_1_4_2` varchar(100) DEFAULT NULL,
  `noengB_1_4_3` varchar(100) DEFAULT NULL,
  `titleB_1_5_1` varchar(100) DEFAULT NULL,
  `titleB_1_5_2` varchar(100) DEFAULT NULL,
  `titleB_1_5_3` varchar(100) DEFAULT NULL,
  `typeB_1_5_1` varchar(100) DEFAULT NULL,
  `typeB_1_5_2` varchar(100) DEFAULT NULL,
  `typeB_1_5_3` varchar(100) DEFAULT NULL,
  `orgB_1_5_1` varchar(100) DEFAULT NULL,
  `orgB_1_5_2` varchar(100) DEFAULT NULL,
  `orgB_1_5_3` varchar(100) DEFAULT NULL,
  `perengstartB_1_5_1` varchar(100) DEFAULT NULL,
  `perengstartB_1_5_2` varchar(100) DEFAULT NULL,
  `perengstartB_1_5_3` varchar(100) DEFAULT NULL,
  `perengendB_1_5_1` varchar(100) DEFAULT NULL,
  `perengendB_1_5_2` varchar(100) DEFAULT NULL,
  `perengendB_1_5_3` varchar(100) DEFAULT NULL,
  `scopeB_1_5_1` varchar(100) DEFAULT NULL,
  `scopeB_1_5_2` varchar(100) DEFAULT NULL,
  `scopeB_1_5_3` varchar(100) DEFAULT NULL,
  `nohoursB_1_5_1` varchar(100) DEFAULT NULL,
  `nohoursB_1_5_2` varchar(100) DEFAULT NULL,
  `nohoursB_1_5_3` varchar(100) DEFAULT NULL,
  `nceaB_2_1_1` varchar(100) DEFAULT NULL,
  `nceaB_2_1_2` varchar(100) DEFAULT NULL,
  `nceaB_2_1_3` varchar(100) DEFAULT NULL,
  `ncB_2_1_1` varchar(100) DEFAULT NULL,
  `ncB_2_1_2` varchar(100) DEFAULT NULL,
  `ncB_2_1_3` varchar(100) DEFAULT NULL,
  `nobeneB_2_1_1` varchar(100) DEFAULT NULL,
  `nobeneB_2_1_2` varchar(100) DEFAULT NULL,
  `nobeneB_2_1_3` varchar(100) DEFAULT NULL,
  `roleB_2_1_1` varchar(100) DEFAULT NULL,
  `roleB_2_1_2` varchar(100) DEFAULT NULL,
  `roleB_2_1_3` varchar(100) DEFAULT NULL,
  `dateactB_2_1_1` varchar(100) DEFAULT NULL,
  `dateactB_2_1_2` varchar(100) DEFAULT NULL,
  `dateactB_2_1_3` varchar(100) DEFAULT NULL,
  `nceaB_2_1_4` varchar(100) DEFAULT NULL,
  `ncB_2_1_4` varchar(100) DEFAULT NULL,
  `nobeneB_2_1_4` varchar(100) DEFAULT NULL,
  `roleB_2_1_4` varchar(100) DEFAULT NULL,
  `dateactB_2_1_4` varchar(100) DEFAULT NULL,
  `noengB_1_4_4` varchar(100) DEFAULT NULL,
  `titleB_1_2_4` varchar(100) DEFAULT NULL,
  `orgB_1_2_4` varchar(100) DEFAULT NULL,
  `evdateB_1_2_4` varchar(100) DEFAULT NULL,
  `natureB_1_2_4` varchar(100) DEFAULT NULL,
  `venueB_1_2_4` varchar(100) DEFAULT NULL,
  `nameB_1_4_4` varchar(100) DEFAULT NULL,
  `titleB_1_4_4` varchar(100) DEFAULT NULL,
  `perengB_1_4_4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form3_ab`
--

INSERT INTO `form3_ab` (`id`, `user_id`, `nameA_1_1`, `nameA_1_2`, `nameA_1_3`, `natureA_1_1`, `natureA_1_2`, `natureA_1_3`, `facultyA_1_1`, `facultyA_1_2`, `facultyA_1_3`, `moastartA_1_1`, `moastartA_1_2`, `moastartA_1_3`, `moaendA_1_1`, `moaendA_1_2`, `moaendA_1_3`, `actA_1_1`, `actA_1_2`, `actA_1_3`, `dateactA_1_1`, `dateactA_1_2`, `dateactA_1_3`, `nameA_2_1`, `nameA_2_2`, `nameA_2_3`, `roleA_2_1`, `roleA_2_2`, `roleA_2_3`, `coverA_2_1`, `coverA_2_2`, `coverA_2_3`, `totalA_2_1`, `totalA_2_2`, `totalA_2_3`, `nameB_1_1_1`, `nameB_1_1_2`, `nameB_1_1_3`, `dateappstartB_1_1_1`, `dateappstartB_1_1_2`, `dateappstartB_1_1_3`, `dateappendB_1_1_1`, `dateappendB_1_1_2`, `dateappendB_1_1_3`, `qaB_1_1_1`, `qaB_1_1_2`, `qaB_1_1_3`, `scopeB_1_1_1`, `scopeB_1_1_2`, `scopeB_1_1_3`, `nodepB_1_1_1`, `nodepB_1_1_2`, `nodepB_1_1_3`, `titleB_1_2_1`, `titleB_1_2_2`, `titleB_1_2_3`, `orgB_1_2_1`, `orgB_1_2_2`, `orgB_1_2_3`, `evdateB_1_2_1`, `evdateB_1_2_2`, `evdateB_1_2_3`, `natureB_1_2_1`, `natureB_1_2_2`, `natureB_1_2_3`, `venueB_1_2_1`, `venueB_1_2_2`, `venueB_1_2_3`, `titleB_1_3_1`, `titleB_1_3_2`, `titleB_1_3_3`, `nameB_1_3_1`, `nameB_1_3_2`, `nameB_1_3_3`, `perstartB_1_3_1`, `perstartB_1_3_2`, `perstartB_1_3_3`, `perendB_1_3_1`, `perendB_1_3_2`, `perendB_1_3_3`, `scope_1_3_1`, `scope_1_3_2`, `scope_1_3_3`, `role_1_3_1`, `role_1_3_2`, `role_1_3_3`, `nameB_1_4_1`, `nameB_1_4_2`, `nameB_1_4_3`, `titleB_1_4_1`, `titleB_1_4_2`, `titleB_1_4_3`, `perengB_1_4_1`, `perengB_1_4_2`, `perengB_1_4_3`, `noengB_1_4_1`, `noengB_1_4_2`, `noengB_1_4_3`, `titleB_1_5_1`, `titleB_1_5_2`, `titleB_1_5_3`, `typeB_1_5_1`, `typeB_1_5_2`, `typeB_1_5_3`, `orgB_1_5_1`, `orgB_1_5_2`, `orgB_1_5_3`, `perengstartB_1_5_1`, `perengstartB_1_5_2`, `perengstartB_1_5_3`, `perengendB_1_5_1`, `perengendB_1_5_2`, `perengendB_1_5_3`, `scopeB_1_5_1`, `scopeB_1_5_2`, `scopeB_1_5_3`, `nohoursB_1_5_1`, `nohoursB_1_5_2`, `nohoursB_1_5_3`, `nceaB_2_1_1`, `nceaB_2_1_2`, `nceaB_2_1_3`, `ncB_2_1_1`, `ncB_2_1_2`, `ncB_2_1_3`, `nobeneB_2_1_1`, `nobeneB_2_1_2`, `nobeneB_2_1_3`, `roleB_2_1_1`, `roleB_2_1_2`, `roleB_2_1_3`, `dateactB_2_1_1`, `dateactB_2_1_2`, `dateactB_2_1_3`, `nceaB_2_1_4`, `ncB_2_1_4`, `nobeneB_2_1_4`, `roleB_2_1_4`, `dateactB_2_1_4`, `noengB_1_4_4`, `titleB_1_2_4`, `orgB_1_2_4`, `evdateB_1_2_4`, `natureB_1_2_4`, `venueB_1_2_4`, `nameB_1_4_4`, `titleB_1_4_4`, `perengB_1_4_4`) VALUES
(3, 1, 'fasdf', 'fsdaf', 'fsadf', 'fsdf', 'fsdaf', 'fsdf', 'assis', 'assis', 'assis', '2024-05-28', '2024-06-03', '2024-05-28', '2024-06-04', '2024-06-10', '2024-06-20', 'fsdff', 'ffsdf', 'fsdf', '2024-06-10', '2024-06-24', '2024-06-11', 'fsdffsad', 'fsdf', 'fsdf', 'lead', 'lead', 'lead', '2024-06-10', '2024-06-18', '2024-06-25', '23', '23', '23', 'fsdaf', 'fsdf', 'fsdf', '2024-06-17', '2024-06-25', '2024-06-19', '2024-06-18', '2024-06-19', '2024-06-12', 'fsdf', 'fsdf', 'fsd', 'local', 'local', 'int', '34', '34', '34', 'fsffsdf', 'fsdf', 'fsdf', 'fsdffs', 'fsdf', 'fds', '2024-06-11', '2024-06-17', '2024-06-16', 'academic', 'research', 'academic', '324', 'rser', 'fdsf', 'fsdffsd', 'fdsf', 'fds', 'fdsfdsf', 'fsdf', 'fsdf', 'fdsf', 'fsdf', 'fsdf', 'fsdfsd', 'fsdf', 'fsdf', 'local', 'local', 'international', 'fdsf', 'fsdf', 'fsdf', 'fsdf', 'fdsf', 'fsdfsdf', 'fsdf', 'fsdf', 'fsdf', 'fsdf', 'fdsfsd', 'fsdfsd', '34', '343', '34', 'fsdf', 'fsdf', 'fsdf', 'fsdffs', 'dfsdf', 'fsdf', 'fsdf', 'sdaffsad', 'fsadfs', '2024-05-28', '2024-06-04', '2024-05-29', '2024-06-04', '2024-05-29', '2024-05-28', 'local', 'local', 'local', '34', '343', '12', 'fsdf', 'fsdf', 'ffsdf', 'fsdff', 'fsdf', 'fsdf', '34', '34', '34', 'participant', 'head', 'head', 'fsdffsdf', 'fsdf', 'fsdf', 'fsdf', 'fsdf', '34', 'head', 'fsfd', '34', 'fsdff', 'fsdf', '2024-06-03', 'academic', '34', 'fsdf', 'fsdf', 'fsdf');

-- --------------------------------------------------------

--
-- Table structure for table `form3_cd`
--

CREATE TABLE `form3_cd` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `numc` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `ep1_19` varchar(100) DEFAULT NULL,
  `ep2_19` varchar(100) DEFAULT NULL,
  `ep1_20` varchar(100) DEFAULT NULL,
  `ep2_20` varchar(100) DEFAULT NULL,
  `ep1_21` varchar(100) DEFAULT NULL,
  `ep2_21` varchar(100) DEFAULT NULL,
  `desig` varchar(100) DEFAULT NULL,
  `epdate` date DEFAULT NULL,
  `noengB_1_4_3` varchar(100) DEFAULT NULL,
  `ep2_22` varchar(100) DEFAULT NULL,
  `ep1_22` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form3_cd`
--

INSERT INTO `form3_cd` (`id`, `user_id`, `numc`, `reason`, `ep1_19`, `ep2_19`, `ep1_20`, `ep2_20`, `ep1_21`, `ep2_21`, `desig`, `epdate`, `noengB_1_4_3`, `ep2_22`, `ep1_22`) VALUES
(1, 1, '3', 'study_leave', '23', '23', '23', '23', '23', '32', '', '0000-00-00', NULL, '2', '23');

-- --------------------------------------------------------

--
-- Table structure for table `form4_a`
--

CREATE TABLE `form4_a` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ca1` text NOT NULL,
  `ca2` text NOT NULL,
  `ca3` text NOT NULL,
  `ca4` text NOT NULL,
  `cat1` text NOT NULL,
  `cat2` text NOT NULL,
  `cat3` text NOT NULL,
  `cat4` text NOT NULL,
  `caa1` text NOT NULL,
  `caa2` text NOT NULL,
  `caa3` text NOT NULL,
  `caa4` text NOT NULL,
  `car1` text NOT NULL,
  `car2` text NOT NULL,
  `car3` text NOT NULL,
  `car4` text NOT NULL,
  `cad1` date NOT NULL,
  `cad2` date NOT NULL,
  `cad3` date NOT NULL,
  `cad4` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form4_a`
--

INSERT INTO `form4_a` (`id`, `user_id`, `ca1`, `ca2`, `ca3`, `ca4`, `cat1`, `cat2`, `cat3`, `cat4`, `caa1`, `caa2`, `caa3`, `caa4`, `car1`, `car2`, `car3`, `car4`, `cad1`, `cad2`, `cad3`, `cad4`) VALUES
(1, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19'),
(2, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19'),
(3, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19'),
(4, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19'),
(5, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19'),
(6, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19'),
(7, 1, 'ewq', 'ew', 'qwe', 'wewq', 'qwe', 'ewq', 'qwe', 'ewq', 'eqw', 'qwe', 'asd', 'asd', 'co_organizer', 'officer', 'committee_chair', 'lead_organizer', '2024-06-26', '2024-06-22', '2024-06-14', '2024-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `form4_b`
--

CREATE TABLE `form4_b` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cb1` text NOT NULL,
  `cb2` text NOT NULL,
  `cb3` text NOT NULL,
  `cb4` text NOT NULL,
  `cbd1` text NOT NULL,
  `cbd2` text NOT NULL,
  `cbd3` text NOT NULL,
  `cbd4` text NOT NULL,
  `cbdn1` text NOT NULL,
  `cbdn2` text NOT NULL,
  `cbdn3` text NOT NULL,
  `cbdn4` text NOT NULL,
  `cbh1` text NOT NULL,
  `cbh2` text NOT NULL,
  `cbh3` text NOT NULL,
  `cbh4` text NOT NULL,
  `cbdd1` date NOT NULL,
  `cbdd2` date NOT NULL,
  `cbdd3` date NOT NULL,
  `cbdd4` date NOT NULL,
  `cbc1` text NOT NULL,
  `cbc2` text NOT NULL,
  `cbc3` text NOT NULL,
  `cbs1` text NOT NULL,
  `cbs2` text NOT NULL,
  `cbs3` text NOT NULL,
  `cbo1` text NOT NULL,
  `cbo2` text NOT NULL,
  `cbo3` text NOT NULL,
  `cbda1` date NOT NULL,
  `cbda2` date NOT NULL,
  `cbda3` date NOT NULL,
  `cbt1` text NOT NULL,
  `cbt2` text NOT NULL,
  `cbt3` text NOT NULL,
  `cbi1` text NOT NULL,
  `cbi2` text NOT NULL,
  `cbi3` text NOT NULL,
  `cbtc1` text NOT NULL,
  `cbtc2` text NOT NULL,
  `cbtc3` text NOT NULL,
  `cbco1` text NOT NULL,
  `cbco2` text NOT NULL,
  `cbco3` text NOT NULL,
  `cbdp1` date NOT NULL,
  `cbdp2` date NOT NULL,
  `cbdp3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form4_b`
--

INSERT INTO `form4_b` (`id`, `user_id`, `cb1`, `cb2`, `cb3`, `cb4`, `cbd1`, `cbd2`, `cbd3`, `cbd4`, `cbdn1`, `cbdn2`, `cbdn3`, `cbdn4`, `cbh1`, `cbh2`, `cbh3`, `cbh4`, `cbdd1`, `cbdd2`, `cbdd3`, `cbdd4`, `cbc1`, `cbc2`, `cbc3`, `cbs1`, `cbs2`, `cbs3`, `cbo1`, `cbo2`, `cbo3`, `cbda1`, `cbda2`, `cbda3`, `cbt1`, `cbt2`, `cbt3`, `cbi1`, `cbi2`, `cbi3`, `cbtc1`, `cbtc2`, `cbtc3`, `cbco1`, `cbco2`, `cbco3`, `cbdp1`, `cbdp2`, `cbdp3`) VALUES
(1, 1, 'qwee', 'ewew', '2024-06-18', 'no', 'masters', 'doctorate', 'post_doctorate', 'post_masters', 'ewq', 'qwe', 'ewq', 'ewe', 'ert', 'tre', 'ert', 'etr', '2024-06-18', '2024-06-20', '2024-06-23', '2024-06-19', 'qwet', 'ewq', 'wqw', 'local', 'international', 'local', 'ert', 'gfd', 'sdf', '2024-06-18', '2024-06-21', '2024-06-20', 'fg', 'fsd', 'asd', 'international', 'local', 'international', 'fgh', 'hjk', 'jkl', 'gfh', 'rty', 'yu', '2024-06-18', '2024-06-20', '2024-06-22'),
(2, 1, 'qwee', 'ewew', '2024-06-18', 'no', 'masters', 'doctorate', 'post_doctorate', 'post_masters', 'ewq', 'qwe', 'ewq', 'ewe', 'ert', 'tre', 'ert', 'etr', '2024-06-18', '2024-06-20', '2024-06-23', '2024-06-19', 'qwet', 'ewq', 'wqw', 'local', 'international', 'local', 'ert', 'gfd', 'sdf', '2024-06-18', '2024-06-21', '2024-06-20', 'fg', 'fsd', 'asd', 'international', 'local', 'international', 'fgh', 'hjk', 'jkl', 'gfh', 'rty', 'yu', '2024-06-18', '2024-06-20', '2024-06-22'),
(3, 1, 'qwee', 'ewew', '2024-06-18', 'no', 'masters', 'doctorate', 'post_doctorate', 'post_masters', 'ewq', 'qwe', 'ewq', 'ewe', 'ert', 'tre', 'ert', 'etr', '2024-06-18', '2024-06-20', '2024-06-23', '2024-06-19', 'qwet', 'ewq', 'wqw', 'local', 'international', 'local', 'ert', 'gfd', 'sdf', '2024-06-18', '2024-06-21', '2024-06-20', 'fg', 'fsd', 'asd', 'international', 'local', 'international', 'fgh', 'hjk', 'jkl', 'gfh', 'rty', 'yu', '2024-06-18', '2024-06-20', '2024-06-22'),
(4, 1, 'qwee', 'ewew', '2024-06-18', 'no', 'masters', 'doctorate', 'post_doctorate', 'post_masters', 'ewq', 'qwe', 'ewq', 'ewe', 'ert', 'tre', 'ert', 'etr', '2024-06-18', '2024-06-20', '2024-06-23', '2024-06-19', 'qwet', 'ewq', 'wqw', 'local', 'international', 'local', 'ert', 'gfd', 'sdf', '2024-06-18', '2024-06-21', '2024-06-20', 'fg', 'fsd', 'asd', 'international', 'local', 'international', 'fgh', 'hjk', 'jkl', 'gfh', 'rty', 'yu', '2024-06-18', '2024-06-20', '2024-06-22'),
(5, 1, 'qwee', 'ewew', '2024-06-18', 'no', 'masters', 'doctorate', 'post_doctorate', 'post_masters', 'ewq', 'qwe', 'ewq', 'ewe', 'ert', 'tre', 'ert', 'etr', '2024-06-18', '2024-06-20', '2024-06-23', '2024-06-19', 'qwet', 'ewq', 'wqw', 'local', 'international', 'local', 'ert', 'gfd', 'sdf', '2024-06-18', '2024-06-21', '2024-06-20', 'fg', 'fsd', 'asd', 'international', 'local', 'international', 'fgh', 'hjk', 'jkl', 'gfh', 'rty', 'yu', '2024-06-18', '2024-06-20', '2024-06-22'),
(6, 1, 'qwee', 'ewew', '2024-06-18', 'no', 'masters', 'doctorate', 'post_doctorate', 'post_masters', 'ewq', 'qwe', 'ewq', 'ewe', 'ert', 'tre', 'ert', 'etr', '2024-06-18', '2024-06-20', '2024-06-23', '2024-06-19', 'qwet', 'ewq', 'wqw', 'local', 'international', 'local', 'ert', 'gfd', 'sdf', '2024-06-18', '2024-06-21', '2024-06-20', 'fg', 'fsd', 'asd', 'international', 'local', 'international', 'fgh', 'hjk', 'jkl', 'gfh', 'rty', 'yu', '2024-06-18', '2024-06-20', '2024-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `form4_c`
--

CREATE TABLE `form4_c` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cc1` text NOT NULL,
  `cc2` text NOT NULL,
  `cc3` text NOT NULL,
  `ccs1` text NOT NULL,
  `ccs2` text NOT NULL,
  `ccs3` text NOT NULL,
  `cca1` text NOT NULL,
  `cca2` text NOT NULL,
  `cca3` text NOT NULL,
  `ccd1` text NOT NULL,
  `ccd2` text NOT NULL,
  `ccd3` text NOT NULL,
  `ccv1` text NOT NULL,
  `ccv2` text NOT NULL,
  `ccv3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form4_c`
--

INSERT INTO `form4_c` (`id`, `user_id`, `cc1`, `cc2`, `cc3`, `ccs1`, `ccs2`, `ccs3`, `cca1`, `cca2`, `cca3`, `ccd1`, `ccd2`, `ccd3`, `ccv1`, `ccv2`, `ccv3`) VALUES
(1, 1, 'qwe', 'ewew', 'reter', 'regional', 'local', 'institutional', 'rty', 'gfh', 'dfg', '2024-06-19', '2024-06-19', '2024-06-20', 'ert', 'gfhf', 'sdfs'),
(2, 1, 'qwe', 'ewew', 'reter', 'regional', 'regional', 'institutional', 'rty', 'gfh', 'dfg', '2024-06-19', '2024-06-19', '2024-06-20', 'ert', 'gfhf', 'sdfs'),
(3, 1, 'qwe', 'ewew', 'reter', 'local', 'institutional', 'institutional', 'rty', 'gfh', 'dfg', '2024-06-19', '2024-06-19', '2024-06-20', 'ert', 'gfhf', 'sdfs'),
(4, 1, 'qwe', 'ewew', 'reter', 'local', 'institutional', 'institutional', 'rty', 'gfh', 'dfg', '2024-06-19', '2024-06-19', '2024-06-20', 'ert', 'gfhf', 'sdfs'),
(5, 1, 'qwe', 'ewew', 'reter', 'local', 'institutional', 'institutional', 'rty', 'gfh', 'dfg', '2024-06-19', '2024-06-19', '2024-06-20', 'ert', 'gfhf', 'sdfs');

-- --------------------------------------------------------

--
-- Table structure for table `form4_d`
--

CREATE TABLE `form4_d` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cd1` text NOT NULL,
  `cd2` text NOT NULL,
  `cd3` text NOT NULL,
  `cdn1` text NOT NULL,
  `cdn2` text NOT NULL,
  `cdn3` text NOT NULL,
  `cdy1` text NOT NULL,
  `cdy2` text NOT NULL,
  `cdy3` text NOT NULL,
  `cdps1` date NOT NULL,
  `cdps2` date NOT NULL,
  `cdps3` date NOT NULL,
  `cdpe1` date NOT NULL,
  `cdpe2` date NOT NULL,
  `cdpe3` date NOT NULL,
  `cdd1` text NOT NULL,
  `cdd2` text NOT NULL,
  `cdd3` text NOT NULL,
  `cdd_1` text NOT NULL,
  `cdd_2` text NOT NULL,
  `cdd_3` text NOT NULL,
  `cdny1` text NOT NULL,
  `cdny2` text NOT NULL,
  `cdny3` text NOT NULL,
  `cdpcs1` date NOT NULL,
  `cdpcs2` date NOT NULL,
  `cdpcs3` date NOT NULL,
  `cdpce1` date NOT NULL,
  `cdpce2` date NOT NULL,
  `cdpce3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form4_d`
--

INSERT INTO `form4_d` (`id`, `user_id`, `cd1`, `cd2`, `cd3`, `cdn1`, `cdn2`, `cdn3`, `cdy1`, `cdy2`, `cdy3`, `cdps1`, `cdps2`, `cdps3`, `cdpe1`, `cdpe2`, `cdpe3`, `cdd1`, `cdd2`, `cdd3`, `cdd_1`, `cdd_2`, `cdd_3`, `cdny1`, `cdny2`, `cdny3`, `cdpcs1`, `cdpcs2`, `cdpcs3`, `cdpce1`, `cdpce2`, `cdpce3`) VALUES
(1, 1, 'vice_president', 'department', 'faculty', 'qwe', 'ewq', 'qwe', '2', '4', '6', '2024-06-18', '2024-06-18', '2024-06-18', '2024-06-20', '2024-06-21', '0000-00-00', 'qwe', 'asd', 'zxc', 'managerial', 'technical', 'support', '6', '8', '7', '2024-06-11', '2024-06-16', '2024-06-17', '2024-06-20', '2024-06-21', '2024-06-27'),
(2, 1, 'vice_president', 'department', 'faculty', 'qwe', 'ewq', 'qwe', '2', '4', '6', '2024-06-18', '2024-06-18', '2024-06-18', '2024-06-20', '2024-06-21', '0000-00-00', 'qwe', 'asd', 'zxc', 'managerial', 'technical', 'support', '6', '8', '7', '2024-06-11', '2024-06-16', '2024-06-17', '2024-06-20', '2024-06-21', '2024-06-27');

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
-- Indexes for table `form2_c`
--
ALTER TABLE `form2_c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form3_ab`
--
ALTER TABLE `form3_ab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form3_cd`
--
ALTER TABLE `form3_cd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `form4_a`
--
ALTER TABLE `form4_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4_b`
--
ALTER TABLE `form4_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4_c`
--
ALTER TABLE `form4_c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4_d`
--
ALTER TABLE `form4_d`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form2_c`
--
ALTER TABLE `form2_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form3_ab`
--
ALTER TABLE `form3_ab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form3_cd`
--
ALTER TABLE `form3_cd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form4_a`
--
ALTER TABLE `form4_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `form4_b`
--
ALTER TABLE `form4_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form4_c`
--
ALTER TABLE `form4_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form4_d`
--
ALTER TABLE `form4_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
