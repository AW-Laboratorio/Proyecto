-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2017 a las 23:26:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yourhealth`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE `informe` (
  `idInforme` int(11) NOT NULL,
  `Motivo` text,
  `Reacciones` text,
  `Rx` text,
  `Diagnostico` text,
  `Tratamiento` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informe`
--

INSERT INTO `informe` (`idInforme`, `Motivo`, `Reacciones`, `Rx`, `Diagnostico`, `Tratamiento`) VALUES
(1, '1234568789798', '789', '789', '789', '789'),
(2, '45', '45', '454', '4546', '456465'),
(3, '1', '1', '1', '1', '1'),
(4, '1', '2', '3', '4', '6'),
(5, '1', '2', '3', '4', '6'),
(6, '1sad', '2jhkh', '3kjhkh', '4kj', '6h'),
(7, '1sadasdkalsjdlksajkd', '2jhkhlkhkfhdskjfhkdshflkajhlk', '3kjhkhhkjhfjkshflkshkdjhfsklhh', '4kjjkhkfjhsdkfhsldhfdskjh', '6hljhfkhjlfhdslfkhdsfkjhdslfkjds');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informe`
--
ALTER TABLE `informe`
  ADD PRIMARY KEY (`idInforme`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informe`
--
ALTER TABLE `informe`
  MODIFY `idInforme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
