-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 02:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estadisticas`
--

-- --------------------------------------------------------

--
-- Table structure for table `jugadores`
--

CREATE TABLE `jugadores` (
  `id_jugador` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jugadores`
--

INSERT INTO `jugadores` (`id_jugador`, `nombre`, `apellido`) VALUES
(1, 'Agustin', 'Porris'),
(2, 'Ezequiel', 'Gomez');

-- --------------------------------------------------------

--
-- Table structure for table `partidos`
--

CREATE TABLE `partidos` (
  `id_partido` int(10) NOT NULL,
  `id_jugador` int(10) NOT NULL,
  `puntos` int(3) NOT NULL,
  `rebotes` int(3) NOT NULL,
  `asistencias` int(3) NOT NULL,
  `tapas` int(3) NOT NULL,
  `perdidas` int(3) NOT NULL,
  `minutos` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partidos`
--

INSERT INTO `partidos` (`id_partido`, `id_jugador`, `puntos`, `rebotes`, `asistencias`, `tapas`, `perdidas`, `minutos`) VALUES
(1, 1, 17, 11, 5, 5, 5, 40),
(1, 2, 32, 8, 3, 1, 6, 10),
(2, 1, 40, 5, 2, 1, 0, 30),
(2, 2, 8, 15, 3, 0, 8, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
