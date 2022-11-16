-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 22:12:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `Id_marca` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Imagen_marca` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`Id_marca`, `Nombre`, `Imagen_marca`) VALUES
(20, 'Adidas', NULL),
(21, 'Nike', NULL),
(23, 'dgffggfffg', NULL),
(24, 'dgffg5565665', NULL),
(26, 'dg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `Equipo` varchar(45) NOT NULL,
  `Talle` varchar(10) NOT NULL,
  `Precio` float NOT NULL,
  `version` varchar(20) NOT NULL,
  `Id_marca_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Equipo`, `Talle`, `Precio`, `version`, `Id_marca_fk`) VALUES
(59, 'boca', 'XL', 14200, 'Comercial', 20),
(62, 'erf', 'S', 1000, 'Jugador', 20),
(65, 'erf', 'XL', 1200, 'Comercial', 20),
(66, 'barca', 'S', 1200, 'Comercial', 20),
(67, 'boca', 'L', 17000, 'Jugador', 21),
(68, 'boca', 'XL', 15000, 'Jugador', 21),
(69, 'boca', 'XL', 14700, 'Jugador', 21),
(70, 'boca', 'L', 14700, 'Jugador', 21),
(71, 'boca', 'L', 14700, 'Jugador', 20),
(72, 'boca', 'L', 11700, 'Comercial', 20),
(73, 'boca', 'L', 11700, 'Comercial', 20),
(74, 'boca', 'L', 11700, 'Comercial', 21),
(75, 'boca', 'L', 11700, 'Comercial', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Email`, `Contraseña`) VALUES
(1, 'guidanderfer@gmail.com', '$2y$10$0Bk7pHwjry5BNaKlnAWUMeLffvIpCVoraqIONOx3K.YhJnITUcSWO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`Id_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_marca_fk` (`Id_marca_fk`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `Id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `Id_marca_fk` FOREIGN KEY (`Id_marca_fk`) REFERENCES `marca` (`Id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
