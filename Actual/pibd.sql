-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2018 a las 10:40:50
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pibd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `IdAlbum` int(11) NOT NULL,
  `Titulo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`IdAlbum`, `Titulo`, `Descripcion`, `Usuario`) VALUES
(1, 'prueba', 'album de prueba', 5),
(2, 'otro', 'otro album', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `IdEstilo` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Fichero` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`IdEstilo`, `Nombre`, `Descripcion`, `Fichero`) VALUES
(2, 'normal', 'estilo normal de css', 'CSS/index.css'),
(3, 'alternativo', 'estilo alternativo de css', 'CSS/contraste.css');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `IdFoto` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Pais` int(11) NOT NULL,
  `Album` int(11) NOT NULL,
  `Fichero` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Alternativo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`IdFoto`, `Titulo`, `Descripcion`, `Fecha`, `Pais`, `Album`, `Fichero`, `Alternativo`, `FRegistro`, `Usuario`) VALUES
(8, 'Atun', 'Lata de atun', '2018-11-13', 1, 1, 'foto.jpg', 'atun', '2018-11-22 14:31:58', 5),
(9, 'Queso', 'Queso del mercadona', '2018-11-02', 3, 1, 'foto2.jpg', 'queso', '2018-11-22 14:32:36', 5),
(10, 'Foto de atun mejorad', 'atun del bueno', '2018-11-15', 2, 1, 'foto.jpg', 'atun bueno', '2018-11-23 12:56:24', 5),
(11, 'queso azul', 'queso azul', '2018-11-28', 1, 1, 'foto2.jpg', 'azul', '2018-11-22 14:54:09', 6),
(12, 'bonito', 'bonito pero atun', '2018-11-17', 1, 1, 'foto.jpg', 'bonito', '2018-11-22 14:54:44', 6),
(13, 'queso mercadona', 'mercadona', '2018-11-18', 3, 1, 'foto2.jpg', 'mercadona', '2018-11-22 14:55:45', 5),
(14, 'dhhfd', 'bonito pero atun', '2018-11-17', 1, 1, 'foto.jpg', 'bonito', '2018-11-22 14:54:44', 6),
(15, 'ukyhu', 'mercadona', '2018-11-18', 3, 1, 'foto2.jpg', 'mercadona', '2018-11-22 14:55:45', 5),
(16, 'prueba', 'prueb', '0000-00-00', 2, 2, 'image11.jpg', 'prueba', '2018-12-06 17:15:05', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `IdPais` int(11) NOT NULL,
  `NomPais` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`IdPais`, `NomPais`) VALUES
(1, 'Vinalopo'),
(2, 'Medina del Segura'),
(3, 'Guardamar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `IdSolicitud` int(11) NOT NULL,
  `Album` int(11) NOT NULL,
  `Nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Calle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Numero` int(11) NOT NULL,
  `Piso` int(11) NOT NULL,
  `Puerta` int(11) NOT NULL,
  `Codigo Postal` int(11) NOT NULL,
  `Localidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Provincia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pais` int(11) NOT NULL,
  `Color` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Copias` int(11) NOT NULL,
  `Resolucion` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `IColor` tinyint(1) NOT NULL,
  `FRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Coste` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`IdSolicitud`, `Album`, `Nombre`, `Titulo`, `Descripcion`, `Email`, `Calle`, `Numero`, `Piso`, `Puerta`, `Codigo Postal`, `Localidad`, `Provincia`, `Pais`, `Color`, `Copias`, `Resolucion`, `Fecha`, `IColor`, `FRegistro`, `Coste`) VALUES
(1, 1, 'nuevo', 'nuevo album', 'album nuevo', 'usuario2@gmail.com', 'falsa', 123, 1, 2, 123, 'alicante', 'alicante', 2, '#ffff', 2, 1, '2018-11-14', 1, '2018-11-22 11:10:27', 13),
(2, 2, 'prueba', 'pruebna', 'ngfmdsgn', '123', '132', 13, 132, 132, 132, '31', 'albacete', 2, '1', 1, 150, '0000-00-00', 1, '2018-12-06 17:58:35', 1.05),
(3, 1, 'fecha', 'hecha', 'na', 'flaso@gmail.com', '123', 123, 123, 123, 123, 'dsf', 'alava', 1, '1', 1, 150, '2018-12-23', 1, '2018-12-07 09:19:02', 1.05);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `NomUsuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Clave` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Sexo` smallint(6) NOT NULL,
  `FNacimiento` date NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pais` int(11) NOT NULL,
  `Foto` int(11) NOT NULL,
  `FRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Estilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `NomUsuario`, `Clave`, `Email`, `Sexo`, `FNacimiento`, `Ciudad`, `Pais`, `Foto`, `FRegistro`, `Estilo`) VALUES
(5, 'usuario2', '123', 'usuario2@gmail.com', 1, '2018-11-07', 'alicante', 2, 9, '2018-12-06 10:55:56', 2),
(6, 'usuario', '123', 'usuario@gmail.com', 1, '2018-11-10', 'murcia', 2, 8, '2018-12-06 12:06:33', 2),
(7, 'sergi', '123', 'mio@gmail.com', 2, '0000-00-00', 'alicante', 2, 9, '2018-12-04 11:12:32', 2),
(8, 'ciego', '123', '123', 1, '0000-00-00', 'alicante', 2, 9, '2018-12-06 18:20:25', 3),
(46, 'pepe', 'Pepe26_', 'pepe@gmail.com', 1, '1970-01-01', '123', 1, 9, '2018-12-07 09:17:19', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`IdAlbum`),
  ADD KEY `AjenaUsuario` (`Usuario`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD PRIMARY KEY (`IdEstilo`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`IdFoto`),
  ADD KEY `AjenaAlbum` (`Album`),
  ADD KEY `AjenaPaiss` (`Pais`),
  ADD KEY `AjenoUsuario` (`Usuario`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`IdPais`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`IdSolicitud`),
  ADD KEY `AjenaAlbum2` (`Album`),
  ADD KEY `AjenaPaiss2` (`Pais`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `NomUsuarioUnico` (`NomUsuario`),
  ADD KEY `AjenaPais` (`Pais`),
  ADD KEY `AjenaEstilo` (`Estilo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `IdAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estilos`
--
ALTER TABLE `estilos`
  MODIFY `IdEstilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `IdFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `IdPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `IdSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `AjenaUsuario` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `AjenaAlbum` FOREIGN KEY (`Album`) REFERENCES `albumes` (`IdAlbum`),
  ADD CONSTRAINT `AjenaPaiss` FOREIGN KEY (`Pais`) REFERENCES `paises` (`IdPais`),
  ADD CONSTRAINT `AjenoUsuario` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `AjenaAlbum2` FOREIGN KEY (`Album`) REFERENCES `albumes` (`IdAlbum`),
  ADD CONSTRAINT `AjenaPaiss2` FOREIGN KEY (`Pais`) REFERENCES `paises` (`IdPais`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `AjenaEstilo` FOREIGN KEY (`Estilo`) REFERENCES `estilos` (`IdEstilo`),
  ADD CONSTRAINT `AjenaPais` FOREIGN KEY (`Pais`) REFERENCES `paises` (`IdPais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
