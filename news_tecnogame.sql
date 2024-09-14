-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2024 a las 23:08:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `news_tecnogame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_de_trabajo`
--

CREATE TABLE `centro_de_trabajo` (
  `ramas` varchar(100) NOT NULL,
  `N°_empleados` int(50) NOT NULL,
  `cod_cdt` int(50) NOT NULL,
  `direccion_cdt` varchar(100) NOT NULL,
  `ramas_cdt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `edad_em` int(100) NOT NULL,
  `cod_ex` int(100) NOT NULL,
  `area_T` varchar(200) NOT NULL,
  `nombre_em` varchar(200) NOT NULL,
  `r_empleado` varchar(100) NOT NULL,
  `documento` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_j`
--

CREATE TABLE `experiencia_j` (
  `N°_empleados` int(200) NOT NULL,
  `area_encargado` varchar(50) NOT NULL,
  `nombre_j` varchar(200) NOT NULL,
  `cod_ex` int(200) NOT NULL,
  `empleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramas`
--

CREATE TABLE `ramas` (
  `cod_cdt` varchar(100) NOT NULL,
  `empleados` int(100) NOT NULL,
  `desarrollo_soft` varchar(50) NOT NULL,
  `analisis_info` varchar(100) NOT NULL,
  `diseno_gra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salario_t`
--

CREATE TABLE `salario_t` (
  `n_EPS` varchar(100) NOT NULL,
  `cod_sa` int(100) NOT NULL,
  `area_T` varchar(200) NOT NULL,
  `N°_banco` int(20) NOT NULL,
  `documento` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro_de_trabajo`
--
ALTER TABLE `centro_de_trabajo`
  ADD PRIMARY KEY (`cod_cdt`),
  ADD KEY `ramas` (`ramas`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `cod_ex` (`cod_ex`);

--
-- Indices de la tabla `experiencia_j`
--
ALTER TABLE `experiencia_j`
  ADD PRIMARY KEY (`cod_ex`),
  ADD KEY `empleados` (`empleados`);

--
-- Indices de la tabla `ramas`
--
ALTER TABLE `ramas`
  ADD PRIMARY KEY (`empleados`),
  ADD KEY `centro de trabajo` (`cod_cdt`);

--
-- Indices de la tabla `salario_t`
--
ALTER TABLE `salario_t`
  ADD PRIMARY KEY (`cod_sa`),
  ADD KEY `documento` (`documento`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `ramas` (`empleados`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`cod_ex`) REFERENCES `experiencia_j` (`cod_ex`);

--
-- Filtros para la tabla `experiencia_j`
--
ALTER TABLE `experiencia_j`
  ADD CONSTRAINT `experiencia_j_ibfk_1` FOREIGN KEY (`empleados`) REFERENCES `ramas` (`empleados`);

--
-- Filtros para la tabla `ramas`
--
ALTER TABLE `ramas`
  ADD CONSTRAINT `ramas_ibfk_1` FOREIGN KEY (`empleados`) REFERENCES `centro_de_trabajo` (`cod_cdt`);

--
-- Filtros para la tabla `salario_t`
--
ALTER TABLE `salario_t`
  ADD CONSTRAINT `salario_t_ibfk_1` FOREIGN KEY (`cod_sa`) REFERENCES `empleados` (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


