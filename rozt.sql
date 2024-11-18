-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2024 a las 14:52:59
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
-- Base de datos: `rozt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(6) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` char(60) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID` int(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `run` int(8) NOT NULL,
  `dv` char(1) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` int(9) NOT NULL,
  `puesto` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID`, `nombre`, `apellido`, `correo`, `run`, `dv`, `contraseña`, `direccion`, `telefono`, `puesto`) VALUES
(1, 'Jose', 'Valenzuela', 'jivalenzuela2010@hotmail.com', 20880062, '0', 'qetuo123', 'los austriacos 729', 934949281, 1),
(2, 'ewfwef', 'ewfwef', 'wefwe@wefw', 325235, '3', '325235', 'weffw', 324324, 2),
(3, 'ewfwef', 'efwefew', 'ewfewf@wefwef', 324234, '3', 'ewfwe', 'wefwefew', 32423423, 2),
(8, 'kuikui', 'dcsd', '23423@erfergerg', 234234, '5', '234234', 'ergerg', 2345234, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID` int(6) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Precio` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `id` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'vendedor'),
(3, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroventa`
--

CREATE TABLE `registroventa` (
  `Numeroboleta` int(8) NOT NULL,
  `Precio` int(8) NOT NULL,
  `Producto` varchar(20) NOT NULL,
  `Vendedor` varchar(20) NOT NULL,
  `Cliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista` (
`ID` int(6)
,`usuario` varchar(30)
,`contraseña` char(60)
,`nombre` varchar(20)
,`apellido` varchar(20)
,`correo` varchar(20)
,`direccion` varchar(40)
,`telefono` int(9)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista`
--
DROP TABLE IF EXISTS `vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista`  AS SELECT `cliente`.`ID` AS `ID`, `cliente`.`usuario` AS `usuario`, `cliente`.`contraseña` AS `contraseña`, `cliente`.`nombre` AS `nombre`, `cliente`.`apellido` AS `apellido`, `cliente`.`correo` AS `correo`, `cliente`.`direccion` AS `direccion`, `cliente`.`telefono` AS `telefono` FROM `cliente` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USER` (`usuario`) USING BTREE;

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `run` (`run`),
  ADD KEY `puesto` (`puesto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`puesto`) REFERENCES `puesto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
