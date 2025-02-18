-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2024 a las 22:24:29
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centrodetrabajo`
--

CREATE TABLE `centrodetrabajo` (
  `rama` varchar(100) NOT NULL,
  `Nempleados` int(10) NOT NULL,
  `Codigo` int(10) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Resumen` varchar(200) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `centrodetrabajo`
--

INSERT INTO `centrodetrabajo` (`rama`, `Nempleados`, `Codigo`, `Direccion`, `Resumen`, `id`) VALUES
('fefe', 0, 0, 'fefe', 'fefe', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Documento` int(15) NOT NULL,
  `NombreEmpleados` varchar(50) NOT NULL,
  `area_T` varchar(50) NOT NULL,
  `cod_em` int(15) NOT NULL,
  `edad_em` int(5) NOT NULL,
  `resumen_em` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Documento`, `NombreEmpleados`, `area_T`, `cod_em`, `edad_em`, `resumen_em`) VALUES
(1, 'grg', 'grgr', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_j`
--

CREATE TABLE `experiencia_j` (
  `NombreEmpleados` varchar(50) NOT NULL,
  `Nu_empleados` int(20) NOT NULL,
  `Area_encargado` varchar(100) NOT NULL,
  `Nombre_jefe` varchar(50) NOT NULL,
  `cod_J` int(15) NOT NULL,
  `resumen_J` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `experiencia_j`
--

INSERT INTO `experiencia_j` (`NombreEmpleados`, `Nu_empleados`, `Area_encargado`, `Nombre_jefe`, `cod_J`, `resumen_J`) VALUES
('rgrg', 0, 'grgr', 'grgr', 1, 'rgr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramas`
--

CREATE TABLE `ramas` (
  `NombreEmpleados` int(11) NOT NULL,
  `diseno_grafico` int(11) NOT NULL,
  `desarrollo_soft` int(11) NOT NULL,
  `analisis_info` int(11) NOT NULL,
  `cod_cdt` int(11) NOT NULL,
  `resumen_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salario_t`
--

CREATE TABLE `salario_t` (
  `Documento` int(15) NOT NULL,
  `Nu_banco` int(20) NOT NULL,
  `area_T` varchar(100) NOT NULL,
  `Cod_S` int(15) NOT NULL,
  `Nombre_eps` varchar(100) NOT NULL,
  `resumen_S` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `NombreCompleto` varchar(255) NOT NULL,
  `NombreUsuario` varchar(255) NOT NULL,
  `Clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `NombreCompleto`, `NombreUsuario`, `Clave`) VALUES
(10, 'enrique bermudez gomez', 'jeison', '$2y$10$.kQXT/.RUpXTxpHZqaguEugqJmOeRTMec4bjukZaRvFSEl8G/ol4u');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centrodetrabajo`
--
ALTER TABLE `centrodetrabajo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Documento`),
  ADD KEY `cod_em` (`cod_em`);

--
-- Indices de la tabla `experiencia_j`
--
ALTER TABLE `experiencia_j`
  ADD PRIMARY KEY (`cod_J`),
  ADD KEY `Area_encargado` (`Area_encargado`);

--
-- Indices de la tabla `ramas`
--
ALTER TABLE `ramas`
  ADD PRIMARY KEY (`cod_cdt`),
  ADD KEY `NombreEmpleados` (`NombreEmpleados`);

--
-- Indices de la tabla `salario_t`
--
ALTER TABLE `salario_t`
  ADD PRIMARY KEY (`Cod_S`),
  ADD KEY `Documento` (`Documento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centrodetrabajo`
--
ALTER TABLE `centrodetrabajo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Documento` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `experiencia_j`
--
ALTER TABLE `experiencia_j`
  MODIFY `cod_J` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ramas`
--
ALTER TABLE `ramas`
  MODIFY `cod_cdt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salario_t`
--
ALTER TABLE `salario_t`
  MODIFY `Cod_S` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
