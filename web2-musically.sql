-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 00:48:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2-spotify`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `Id_album` int(11) NOT NULL,
  `Nombre_album` varchar(45) NOT NULL,
  `Genero` varchar(45) NOT NULL,
  `Cant_canciones` int(11) NOT NULL,
  `Anio` date NOT NULL,
  `Id_artista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `Id_artista` int(11) NOT NULL,
  `Nombre_artista` varchar(45) NOT NULL,
  `Nacionalidad` varchar(45) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `Id_cancion` int(11) NOT NULL,
  `Nombre_cancion` varchar(45) NOT NULL,
  `Duracion` double NOT NULL,
  `Genero` varchar(45) NOT NULL,
  `Colaboracion_artista` int(11) NOT NULL,
  `Anio` date NOT NULL,
  `Id_album` int(11) NOT NULL,
  `Id_artista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`Id_album`),
  ADD KEY `Id-artista` (`Id_artista`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`Id_artista`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`Id_cancion`),
  ADD KEY `Id_artista` (`Id_artista`),
  ADD KEY `Id_album` (`Id_album`),
  ADD KEY `Colaboracion_artista` (`Colaboracion_artista`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `Id-artista` FOREIGN KEY (`Id_artista`) REFERENCES `artista` (`Id_artista`);

--
-- Filtros para la tabla `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`Id_artista`) REFERENCES `cancion` (`Id_cancion`);

--
-- Filtros para la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD CONSTRAINT `Colaboracion_artista` FOREIGN KEY (`Colaboracion_artista`) REFERENCES `artista` (`Id_artista`),
  ADD CONSTRAINT `Id_album` FOREIGN KEY (`Id_album`) REFERENCES `album` (`Id_album`),
  ADD CONSTRAINT `Id_artista` FOREIGN KEY (`Id_artista`) REFERENCES `artista` (`Id_artista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
