-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-04-2017 a las 21:09:06
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `canasta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pasadmin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`) VALUES
(1, 'Joseph', '12345', 'gjosephpaul@live.com', ''),
(2, 'admin', '', 'admin@gmail.com', '123456'),
(4, 'alex', 'alex1', 'alex@gmail.com', ''),
(5, 'Maarco', 'mango05', 'mar1info2@gmail.com', ''),
(6, 'Markitos', '1234', 'marco.02@gmail.com', ''),
(7, 'Daniela', '12345', 'daniela@gmail.com', ''),
(8, 'Monica', '12345', 'moni@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `folio` int(11) NOT NULL,
  `curp` varchar(19) COLLATE utf32_unicode_ci DEFAULT NULL,
  `beneficiario` varchar(70) COLLATE utf32_unicode_ci DEFAULT NULL,
  `cobeneficiario` varchar(70) COLLATE utf32_unicode_ci DEFAULT NULL,
  `referencia` varchar(150) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Idpueblos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`folio`, `curp`, `beneficiario`, `cobeneficiario`, `referencia`, `Idpueblos`) VALUES
(1, 'MOLM920203HMCRP00', 'MARCO ANTONIO', 'ELIASITO MORALES', 'JUNTO A PRIMARIA', 1),
(66650, 'MOLD690625MMCRPR13', 'ALAVREZ FELIPE FERNANDA', 'MARTINEZ ANDRES YOLANDA', 'DESVIACION DE SAN MATEO', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf32_unicode_ci DEFAULT NULL,
  `apellidos` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`, `nombre`, `apellidos`) VALUES
(1, 'Marco López', 'Nuñes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pueblos`
--

CREATE TABLE `pueblos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `pueblos`
--

INSERT INTO `pueblos` (`id`, `nombre`) VALUES
(1, 'JALPA DE LOS BANIOS'),
(2, 'LA CONCEPCION DE LOS BANIOS'),
(3, 'SAN ANDRES PEDREGAL '),
(4, 'SANTA ANA LADERA'),
(5, 'SAN CRISTOBAL DE LOS BANIOS '),
(6, 'SAN PEDRO DE LOS BANIOS'),
(10, 'SAN ANTONIO DE LOS REMEDIOS '),
(11, 'LUIS DONALDO COLOSIO'),
(13, 'DOLORES ENYEGE'),
(14, 'EL RINCON DE LOS PERALES'),
(15, 'EMILIANO ZAPATA'),
(16, 'SANTA ANA IXTLAHUACA'),
(17, 'SANTO DOMINGO GUZMAN'),
(18, 'IXTLAHUACA CENTRO'),
(19, 'CONCEPCION ENYEGE'),
(20, 'LA PURISIMA'),
(21, 'SAN ANTONIO BONIXI'),
(22, 'ATOTONILCO'),
(23, 'JALPA DE DOLORES'),
(24, 'SAN FRANCISCO DE GUZMAN'),
(25, 'SAN IGNACIO DEL PEDREGAL'),
(26, 'SAN IDELFONSO'),
(27, 'SAN JERONIMO LA CANIADA'),
(29, 'SAN LORENZO TOXICO'),
(30, 'SAN MATEO IXTLAHUACA'),
(31, 'SAN PABLO DE LOS REMEDIOS'),
(32, 'SANTA MARIA DEL LLANO'),
(33, 'SAN BARTOLO DEL LLANO'),
(34, 'SAN FRANCISCO DE ASIS'),
(35, 'SAN JUANQUIN EL JUNCO'),
(36, 'GUADALUPE CACHI'),
(46, 'EJIDO 20 NOVIEMBRE '),
(47, 'JALPA DE LOS BAÑOS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `Idpueblos` (`Idpueblos`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pueblos`
--
ALTER TABLE `pueblos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pueblos`
--
ALTER TABLE `pueblos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`Idpueblos`) REFERENCES `pueblos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
