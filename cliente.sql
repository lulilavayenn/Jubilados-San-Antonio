-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2023 a las 18:56:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cliente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_SOCIO` varchar(20) NOT NULL,
  `BOLSON` varchar(20) NOT NULL,
  `AYP` varchar(50) NOT NULL,
  `EDAD` int(3) NOT NULL,
  `DNI` varchar(15) NOT NULL,
  `FC` varchar(15) NOT NULL,
  `NACIONALIDAD` varchar(20) NOT NULL,
  `EC` varchar(10) NOT NULL,
  `TELEFONO` varchar(25) NOT NULL,
  `DOMICILIO` varchar(40) NOT NULL,
  `CP` varchar(10) NOT NULL,
  `LOCALIDAD` varchar(50) NOT NULL,
  `FI` varchar(15) NOT NULL,
  `JUBILADO` varchar(2) NOT NULL,
  `PENSIONADO` varchar(2) NOT NULL,
  `ADHERENTE` varchar(2) NOT NULL,
  `BENEFICIO` varchar(30) NOT NULL,
  `PM` varchar(15) NOT NULL,
  `UM` varchar(15) NOT NULL,
  `OBSERVACIONES` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_SOCIO`, `BOLSON`, `AYP`, `EDAD`, `DNI`, `FC`, `NACIONALIDAD`, `EC`, `TELEFONO`, `DOMICILIO`, `CP`, `LOCALIDAD`, `FI`, `JUBILADO`, `PENSIONADO`, `ADHERENTE`, `BENEFICIO`, `PM`, `UM`, `OBSERVACIONES`) VALUES
('718', '', 'CASTELLANO MIRTA', 62, '13662900', '15-06-1960', 'ARGENTINA', 'CASADA', '3541379019', 'BASE PRIMAVERA 2683', '5152', 'VILLA CARLOS PAZ', 'FI', 'SI', '', '', '436600759302-01', 'JULIO 2022', 'MAYO 2023', 'RECIBI 1500 PESOS'),
('890', '', 'CASTELLANO MIRTA', 45, '13662900', '15-06-1960', 'argentina', 'CASADA', '3541379019', 'BASE PRIMAVERA 2683', '5152', 'VILLA CARLOS PAZ', '13-06-2022', 'SI', '', '', '', 'agosto 2022', 'junio 2023', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_SOCIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
