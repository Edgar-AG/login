-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2020 a las 04:27:07
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass`
--

CREATE TABLE `usuarios_pass` (
  `ID` int(11) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_pass`
--

INSERT INTO `usuarios_pass` (`ID`, `USUARIOS`, `PASSWORD`) VALUES
(1, 'Edgar', '12345'),
(2, 'Odalis', '54321'),
(3, 'root', '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass2`
--

CREATE TABLE `usuarios_pass2` (
  `ID` int(50) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Posicion` varchar(20) NOT NULL,
  `Oficina` varchar(20) NOT NULL,
  `Años` varchar(20) NOT NULL,
  `Fecha_de_inicio` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Salario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_pass2`
--

INSERT INTO `usuarios_pass2` (`ID`, `Nombre`, `Posicion`, `Oficina`, `Años`, `Fecha_de_inicio`, `Salario`) VALUES
(1, 'Edgar Ivan Aguilar G', 'Desconocida', 'UIPE', '17', '21-09-2020', '$100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_pass2`
--
ALTER TABLE `usuarios_pass2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_pass2`
--
ALTER TABLE `usuarios_pass2`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
