-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2018 a las 00:58:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `monitordb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hosts`
--

CREATE TABLE `hosts` (
  `nid_host` int(11) NOT NULL,
  `db_host` varchar(250) DEFAULT NULL,
  `db_name` varchar(250) DEFAULT NULL,
  `db_user` varchar(100) DEFAULT NULL,
  `db_pass` varchar(100) DEFAULT NULL,
  `db_port` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabla de inventario de conexiones';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `vch_conttabla` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `int_contitem` int(11) NOT NULL,
  `int_contlongitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`vch_conttabla`, `int_contitem`, `int_contlongitud`) VALUES
('backup', 0, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`nid_host`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`vch_conttabla`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hosts`
--
ALTER TABLE `hosts`
  MODIFY `nid_host` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
