-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 07:08:07
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `papeleria_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_login`
--

CREATE TABLE `admin_login` (
  `id_admin` int(10) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_login`
--

INSERT INTO `admin_login` (`id_admin`, `admin_user`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `ID` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precioMayoreo` decimal(20,2) NOT NULL,
  `precioPublico` decimal(20,2) NOT NULL,
  `cantidadExistencia` int(20) NOT NULL,
  `Marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`ID`, `nombre`, `precioMayoreo`, `precioPublico`, `cantidadExistencia`, `Marca`) VALUES
(1, 'Diccionario Bilingue Pocket IN', '38.00', '50.00', 10, 'LAROUSSE'),
(2, 'Folder cartulina cta crema C/1', '1.00', '3.00', 350, 'ECONOFILE'),
(3, 'Broche p/archivo 8C C/60', '0.50', '1.50', 430, 'BACO'),
(7, 'Gis blanco C/50', '0.50', '1.00', 430, 'BACO'),
(8, 'Regla Plastico Transparente 30', '2.30', '3.00', 40, 'SMARTY'),
(9, 'Cinta Adhesiva Canela 12x10m', '0.80', '2.50', 62, 'JANEL'),
(10, 'Cuaderno Espiral 100H Raya', '10.44', '15.00', 43, 'SCRIBE'),
(11, 'Boligrafo Mediano Varios Color', '2.94', '4.50', 96, 'KILOMETRICO'),
(12, 'Pegamento Lapiz Adhesivo 8grs', '4.22', '7.00', 60, 'DIXON'),
(13, 'Gis blanco C/50', '0.50', '1.00', 430, 'BACO'),
(14, 'Regla Plastico Transparente 30', '2.30', '3.00', 40, 'SMARTY'),
(15, 'Cinta Adhesiva Canela 12x10m', '0.80', '2.50', 62, 'JANEL'),
(16, 'Cuaderno Espiral 100H Raya', '10.44', '15.00', 43, 'SCRIBE'),
(17, 'Boligrafo Mediano Varios Color', '2.94', '4.50', 96, 'KILOMETRICO'),
(18, 'Pegamento Lapiz Adhesivo 8grs', '4.22', '7.00', 60, 'DIXON'),
(27, 'Tijeras verdes infantil', '7.55', '12.00', 64, 'Barrilito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
