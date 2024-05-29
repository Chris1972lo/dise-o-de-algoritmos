-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 16-05-2023 a las 02:47:40
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(120) NOT NULL,
  `placa` varchar(120) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bosa`
--

CREATE TABLE `bosa` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candelaria`
--

CREATE TABLE `candelaria` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `candelaria`
--

INSERT INTO `candelaria` (`nombres`, `apellidos`, `cedula`, `placa`, `marca`, `fecha`, `fotografia`) VALUES
('axel', 'fernando', 1003517596, 'BMwhzo7', 'MOTRO', '2023-05-15', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chapinero`
--

CREATE TABLE `chapinero` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kennedy`
--

CREATE TABLE `kennedy` (
  `nombres` int(120) NOT NULL,
  `apellidos` int(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `placa` int(7) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puente`
--

CREATE TABLE `puente` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(120) NOT NULL,
  `placa` varchar(120) NOT NULL,
  `marca` varchar(120) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE `temporal` (
  `placa` varchar(7) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fotografia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temporal`
--

INSERT INTO `temporal` (`placa`, `marca`, `fotografia`) VALUES
('BMwhzo7', 'PULSAR', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usaquen`
--

CREATE TABLE `usaquen` (
  `nombres` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `cedula` int(60) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `fotografia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
