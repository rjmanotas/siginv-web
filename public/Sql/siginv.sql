-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2020 a las 20:29:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siginv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bodega`
--

CREATE TABLE `tbl_bodega` (
  `Tbl_bodega_ID` int(11) NOT NULL,
  `Tbl_bodega_NOMBRE` varchar(50) DEFAULT NULL,
  `Tbl_bodega_ESTADO` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_bodega`
--

INSERT INTO `tbl_bodega` (`Tbl_bodega_ID`, `Tbl_bodega_NOMBRE`, `Tbl_bodega_ESTADO`) VALUES
(1, 'SERVICIOS GENERALES', 1),
(2, 'HERRAMENTERIA', 1),
(3, 'ADSI26', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cargo`
--

CREATE TABLE `tbl_cargo` (
  `Tbl_cargo_ID` int(11) NOT NULL,
  `Tbl_cargo_TIPO` varchar(20) DEFAULT NULL,
  `Tbl_cargo_ESTADO` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`Tbl_cargo_ID`, `Tbl_cargo_TIPO`, `Tbl_cargo_ESTADO`) VALUES
(1, 'COORDINADOR', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estante`
--

CREATE TABLE `tbl_estante` (
  `Tbl_estante_ID` int(11) NOT NULL,
  `Tbl_estante_NUMERO` int(11) DEFAULT NULL,
  `Tbl_estante_DESCRIPCION` varchar(45) DEFAULT NULL,
  `Tbl_estante_ESTADO` int(1) NOT NULL DEFAULT 1,
  `tbl_bodega_Tbl_bodega_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gaveta`
--

CREATE TABLE `tbl_gaveta` (
  `Tbl_gaveta_ID` int(11) NOT NULL,
  `Tbl_gaveta_NUMERO` int(11) DEFAULT NULL,
  `Tbl_gaveta_ESTADO` int(1) NOT NULL DEFAULT 1,
  `tbl_estante_Tbl_estante_ID` int(11) NOT NULL,
  `tbl_estante_tbl_bodega_Tbl_bodega_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_herramienta`
--

CREATE TABLE `tbl_herramienta` (
  `Tbl_herramienta_ID` int(11) NOT NULL,
  `Tbl_herramienta_FECHA` varchar(100) DEFAULT NULL,
  `Tbl_herramienta_DESCRIPCION` varchar(45) DEFAULT NULL,
  `Tbl_herramienta_CANTIDAD` int(11) DEFAULT NULL,
  `Tbl_herramienta_ESTADO` int(1) NOT NULL DEFAULT 1,
  `tbl_gaveta_tbl_estante_tbl_bodega_Tbl_bodega_ID` int(11) NOT NULL,
  `tbl_gaveta_tbl_estante_Tbl_estante_ID` int(11) NOT NULL,
  `tbl_gaveta_Tbl_gaveta_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persona`
--

CREATE TABLE `tbl_persona` (
  `Tbl_persona_ID` int(11) NOT NULL,
  `Tbl_tipodocumento_Tbl_tipodocumento_ID` int(11) NOT NULL,
  `Tbl_persona_NUMDOCUMENTO` int(11) DEFAULT NULL,
  `Tbl_persona_NOMBRES` varchar(45) DEFAULT NULL,
  `Tbl_persona_PRIMERAPELLIDO` varchar(45) DEFAULT NULL,
  `Tbl_persona_SEGUNDOAPELLIDO` varchar(20) DEFAULT NULL,
  `Tbl_persona_FECHANAC` date DEFAULT NULL,
  `Tbl_persona_TELEFONO` varchar(15) DEFAULT NULL,
  `Tbl_persona_CORREO` varchar(45) DEFAULT NULL,
  `Tbl_persona_ESTADO` int(1) NOT NULL DEFAULT 1,
  `Tbl_usuario_Tbl_usuario_ID` int(11) NOT NULL,
  `Tbl_usuario_tbl_tipo_usuario_Tbl_tipousuario_ID` int(11) NOT NULL,
  `Tbl_cargo_Tbl_cargo_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_persona`
--

INSERT INTO `tbl_persona` (`Tbl_persona_ID`, `Tbl_tipodocumento_Tbl_tipodocumento_ID`, `Tbl_persona_NUMDOCUMENTO`, `Tbl_persona_NOMBRES`, `Tbl_persona_PRIMERAPELLIDO`, `Tbl_persona_SEGUNDOAPELLIDO`, `Tbl_persona_FECHANAC`, `Tbl_persona_TELEFONO`, `Tbl_persona_CORREO`, `Tbl_persona_ESTADO`, `Tbl_usuario_Tbl_usuario_ID`, `Tbl_usuario_tbl_tipo_usuario_Tbl_tipousuario_ID`, `Tbl_cargo_Tbl_cargo_ID`) VALUES
(1, 1, 1048327858, 'JESUS MANUEL', 'VARELA', 'MIRANDA', '0000-00-00', '3043423318', 'JMVARELA40@MISENA.EDU.CO', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipodocumento`
--

CREATE TABLE `tbl_tipodocumento` (
  `Tbl_tipodocumento_ID` int(11) NOT NULL,
  `Tbl_tipodocumento_ABREVIATURA` varchar(5) DEFAULT NULL,
  `Tbl_tipodocumento_NOMBRE` varchar(45) DEFAULT NULL,
  `Tbl_tipodocumento_ESTADO` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipodocumento`
--

INSERT INTO `tbl_tipodocumento` (`Tbl_tipodocumento_ID`, `Tbl_tipodocumento_ABREVIATURA`, `Tbl_tipodocumento_NOMBRE`, `Tbl_tipodocumento_ESTADO`) VALUES
(1, 'C.C', 'CEDULA DE  CIUDADANIA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `Tbl_tipousuario_ID` int(11) NOT NULL,
  `Tbl_tipousuario_TIPO` varchar(20) DEFAULT NULL,
  `Tbl_tipousuario_ESTADO` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`Tbl_tipousuario_ID`, `Tbl_tipousuario_TIPO`, `Tbl_tipousuario_ESTADO`) VALUES
(1, 'ADMINISTRADOR', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `Tbl_usuario_ID` int(11) NOT NULL,
  `Tbl_usuario_USERNAME` varchar(45) DEFAULT NULL,
  `Tbl_usuario_PASSWORD` varchar(45) DEFAULT NULL,
  `Tbl_usuario_ESTADO` int(1) NOT NULL DEFAULT 1,
  `tbl_tipo_usuario_Tbl_tipousuario_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`Tbl_usuario_ID`, `Tbl_usuario_USERNAME`, `Tbl_usuario_PASSWORD`, `Tbl_usuario_ESTADO`, `tbl_tipo_usuario_Tbl_tipousuario_ID`) VALUES
(1, 'ADMINISTRADOR', '1234', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bodega`
--
ALTER TABLE `tbl_bodega`
  ADD PRIMARY KEY (`Tbl_bodega_ID`);

--
-- Indices de la tabla `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  ADD PRIMARY KEY (`Tbl_cargo_ID`);

--
-- Indices de la tabla `tbl_estante`
--
ALTER TABLE `tbl_estante`
  ADD PRIMARY KEY (`Tbl_estante_ID`,`tbl_bodega_Tbl_bodega_ID`),
  ADD KEY `fk_tbl_estante_tbl_bodega1_idx` (`tbl_bodega_Tbl_bodega_ID`);

--
-- Indices de la tabla `tbl_gaveta`
--
ALTER TABLE `tbl_gaveta`
  ADD PRIMARY KEY (`Tbl_gaveta_ID`,`tbl_estante_Tbl_estante_ID`,`tbl_estante_tbl_bodega_Tbl_bodega_ID`),
  ADD KEY `fk_tbl_gaveta_tbl_estante1_idx` (`tbl_estante_Tbl_estante_ID`,`tbl_estante_tbl_bodega_Tbl_bodega_ID`);

--
-- Indices de la tabla `tbl_herramienta`
--
ALTER TABLE `tbl_herramienta`
  ADD PRIMARY KEY (`Tbl_herramienta_ID`,`tbl_gaveta_tbl_estante_tbl_bodega_Tbl_bodega_ID`,`tbl_gaveta_tbl_estante_Tbl_estante_ID`,`tbl_gaveta_Tbl_gaveta_ID`),
  ADD KEY `fk_tbl_herramienta_tbl_gaveta1_idx` (`tbl_gaveta_Tbl_gaveta_ID`,`tbl_gaveta_tbl_estante_Tbl_estante_ID`,`tbl_gaveta_tbl_estante_tbl_bodega_Tbl_bodega_ID`);

--
-- Indices de la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD PRIMARY KEY (`Tbl_persona_ID`,`Tbl_tipodocumento_Tbl_tipodocumento_ID`,`Tbl_usuario_Tbl_usuario_ID`,`Tbl_usuario_tbl_tipo_usuario_Tbl_tipousuario_ID`,`Tbl_cargo_Tbl_cargo_ID`),
  ADD KEY `fk_tbl_persona_tbl_usuario1_idx` (`Tbl_usuario_Tbl_usuario_ID`,`Tbl_usuario_tbl_tipo_usuario_Tbl_tipousuario_ID`),
  ADD KEY `fk_tbl_persona_tbl_cargo1_idx` (`Tbl_cargo_Tbl_cargo_ID`),
  ADD KEY `fk_tbl_persona_Tbl_tipodocumento1_idx` (`Tbl_tipodocumento_Tbl_tipodocumento_ID`);

--
-- Indices de la tabla `tbl_tipodocumento`
--
ALTER TABLE `tbl_tipodocumento`
  ADD PRIMARY KEY (`Tbl_tipodocumento_ID`);

--
-- Indices de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  ADD PRIMARY KEY (`Tbl_tipousuario_ID`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`Tbl_usuario_ID`,`tbl_tipo_usuario_Tbl_tipousuario_ID`),
  ADD KEY `fk_tbl_usuario_tbl_tipo_usuario_idx` (`tbl_tipo_usuario_Tbl_tipousuario_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bodega`
--
ALTER TABLE `tbl_bodega`
  MODIFY `Tbl_bodega_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_estante`
--
ALTER TABLE `tbl_estante`
  MODIFY `Tbl_estante_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_gaveta`
--
ALTER TABLE `tbl_gaveta`
  MODIFY `Tbl_gaveta_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tbl_herramienta`
--
ALTER TABLE `tbl_herramienta`
  MODIFY `Tbl_herramienta_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_estante`
--
ALTER TABLE `tbl_estante`
  ADD CONSTRAINT `fk_tbl_estante_tbl_bodega1` FOREIGN KEY (`tbl_bodega_Tbl_bodega_ID`) REFERENCES `tbl_bodega` (`Tbl_bodega_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_gaveta`
--
ALTER TABLE `tbl_gaveta`
  ADD CONSTRAINT `fk_tbl_gaveta_tbl_estante1` FOREIGN KEY (`tbl_estante_Tbl_estante_ID`,`tbl_estante_tbl_bodega_Tbl_bodega_ID`) REFERENCES `tbl_estante` (`Tbl_estante_ID`, `tbl_bodega_Tbl_bodega_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_herramienta`
--
ALTER TABLE `tbl_herramienta`
  ADD CONSTRAINT `fk_tbl_herramienta_tbl_gaveta1` FOREIGN KEY (`tbl_gaveta_Tbl_gaveta_ID`,`tbl_gaveta_tbl_estante_Tbl_estante_ID`,`tbl_gaveta_tbl_estante_tbl_bodega_Tbl_bodega_ID`) REFERENCES `tbl_gaveta` (`Tbl_gaveta_ID`, `tbl_estante_Tbl_estante_ID`, `tbl_estante_tbl_bodega_Tbl_bodega_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_persona`
--
ALTER TABLE `tbl_persona`
  ADD CONSTRAINT `fk_tbl_persona_Tbl_tipodocumento1` FOREIGN KEY (`Tbl_tipodocumento_Tbl_tipodocumento_ID`) REFERENCES `tbl_tipodocumento` (`Tbl_tipodocumento_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_persona_tbl_cargo1` FOREIGN KEY (`Tbl_cargo_Tbl_cargo_ID`) REFERENCES `tbl_cargo` (`Tbl_cargo_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_persona_tbl_usuario1` FOREIGN KEY (`Tbl_usuario_Tbl_usuario_ID`,`Tbl_usuario_tbl_tipo_usuario_Tbl_tipousuario_ID`) REFERENCES `tbl_usuario` (`Tbl_usuario_ID`, `tbl_tipo_usuario_Tbl_tipousuario_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `fk_tbl_usuario_tbl_tipo_usuario` FOREIGN KEY (`tbl_tipo_usuario_Tbl_tipousuario_ID`) REFERENCES `tbl_tipo_usuario` (`Tbl_tipousuario_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
