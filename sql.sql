-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-02-2019 a las 18:45:04
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tema3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niño`
--

DROP TABLE IF EXISTS `niño`;
CREATE TABLE IF NOT EXISTS `niño` (
  `idNiño` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Bueno` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idNiño`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `niño`
--

INSERT INTO `niño` (`idNiño`, `Nombre`, `Apellido`, `Fecha`, `Bueno`) VALUES
(1, 'Alberto', 'Alcántara', '1994-10-13', 'No'),
(2, 'Beatriz', 'Bueno', '1982-04-18', 'Si'),
(3, 'Carlos', 'Crepo', '1998-12-01', 'Si'),
(4, 'Diana', 'Domínguez', '1987-09-02', 'No'),
(5, 'Emilio', 'Enamorado', '1996-08-12', 'Si'),
(6, 'Francisca', 'Fernández', '1990-07-28', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `idNiño` int(11) NOT NULL,
  `idRegalo` int(11) NOT NULL,
  PRIMARY KEY (`idNiño`,`idRegalo`),
  KEY `regaloFK_idx` (`idRegalo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idNiño`, `idRegalo`) VALUES
(6, 1),
(1, 2),
(6, 2),
(1, 3),
(6, 3),
(3, 4),
(1, 5),
(2, 5),
(3, 5),
(5, 7),
(6, 7),
(6, 8),
(1, 9),
(3, 9),
(4, 10),
(4, 11),
(5, 12),
(5, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalo`
--

DROP TABLE IF EXISTS `regalo`;
CREATE TABLE IF NOT EXISTS `regalo` (
  `idRegalo` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `idRey` int(11) NOT NULL,
  PRIMARY KEY (`idRegalo`),
  KEY `reyFK_idx` (`idRey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `regalo`
--

INSERT INTO `regalo` (`idRegalo`, `Nombre`, `Precio`, `idRey`) VALUES
(1, 'Aula de ciencia: Robot Mini ERP', '159.95', 1),
(2, 'Carbón', '0.00', 1),
(3, 'Cochecito Classic', '99.95', 1),
(4, 'Consola PS4 1 TB', '349.90', 1),
(5, 'Lego Villa familiar modular', '64.99', 2),
(6, 'Magia Borrás Clásica 150 trucos con luz', '32.95', 2),
(7, 'Meccano Excavadora construcción', '30.99', 2),
(8, 'Nenuco Hace pompas', '29.95', 2),
(9, 'Peluche delfín rosa', '34.00', 2),
(10, 'Pequeordenador', '22.95', 3),
(11, 'Robot Coji', '69.95', 3),
(12, 'Telescopio astronómico terrestre', '72.00', 3),
(13, 'Twister', '17.95', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rey`
--

DROP TABLE IF EXISTS `rey`;
CREATE TABLE IF NOT EXISTS `rey` (
  `idRey` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idRey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rey`
--

INSERT INTO `rey` (`idRey`, `Nombre`) VALUES
(1, 'Melchor'),
(2, 'Gaspar'),
(3, 'Baltasar');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `niñoFK` FOREIGN KEY (`idNiño`) REFERENCES `niño` (`idNiño`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `regaloFK` FOREIGN KEY (`idRegalo`) REFERENCES `regalo` (`idRegalo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `regalo`
--
ALTER TABLE `regalo`
  ADD CONSTRAINT `reyFK` FOREIGN KEY (`idRey`) REFERENCES `rey` (`idRey`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
