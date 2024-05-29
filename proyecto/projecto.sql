-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 02:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `barrios`
--

CREATE TABLE `barrios` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(120) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `fecha` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor6` int(120) NOT NULL,
  `hora` int(100) NOT NULL,
  `salida` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bosa`
--

CREATE TABLE `bosa` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor4` int(120) NOT NULL,
  `hora` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bosa`
--

INSERT INTO `bosa` (`nombres`, `apellidos`, `cedula`, `orden`, `marca`, `fecha`, `cantidad`, `valor4`, `hora`, `salida`) VALUES
('Axel Vector', 'Winters Ford', 2147483647, 'tinto', 'MCLAREN', '2024-04-16', 2, 0, '22:03:00', '00:00:00'),
('Yusei Andrews', 'ASDASDW', 2147483647, 'tinto', 'DWHEEL', '2024-04-16', 2, 50000, '22:13:00', '00:00:00'),
('Yusei Andrews', 'ASDASDW', 2147483647, 'tinto', 'DWHEEL', '2024-04-16', 2, 50000, '22:13:00', '00:00:00'),
('Axel Vector', 'Fudo Axeleration', 2147483647, 'tinto', 'CORVETTE', '2024-04-19', 2, 50000, '16:42:00', '00:00:00'),
('Axel Vector', 'Fudo Axeleration', 2147483647, 'tinto', 'CORVETTE', '2024-04-19', 2, 50000, '16:42:00', '00:00:00'),
('Axel Vector', 'Winters Ford', 2147483647, 'tinto', 'BMW', '2024-04-19', 2, 50000, '19:49:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `candelaria`
--

CREATE TABLE `candelaria` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor1` int(255) NOT NULL,
  `hora` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chapinero`
--

CREATE TABLE `chapinero` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor2` int(120) NOT NULL,
  `hora` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kennedy`
--

CREATE TABLE `kennedy` (
  `nombres` int(120) NOT NULL,
  `apellidos` int(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor5` int(120) NOT NULL,
  `hora` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `puente`
--

CREATE TABLE `puente` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(120) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor7` int(120) NOT NULL,
  `hora` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporal`
--

CREATE TABLE `temporal` (
  `usuario` varchar(1000) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `categoria` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temporal`
--

INSERT INTO `temporal` (`usuario`, `contraseña`, `categoria`) VALUES
('axel', 'puto', 'Administrador');

-- --------------------------------------------------------

--
-- Table structure for table `usaquen`
--

CREATE TABLE `usaquen` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `orden` varchar(1000) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(100) NOT NULL,
  `valor3` int(120) NOT NULL,
  `hora` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
