-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-02-2019 a las 19:58:45
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
-- Estructura de tabla para la tabla `entregas`
--

DROP TABLE IF EXISTS `entregas`;
CREATE TABLE IF NOT EXISTS `entregas` (
  `idRey` int(11) NOT NULL,
  `idRegalos` int(11) NOT NULL,
  PRIMARY KEY (`idRey`,`idRegalos`),
  KEY `fk_regalos_entregas_idx` (`idRegalos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entregas`
--

INSERT INTO `entregas` (`idRey`, `idRegalos`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(2, 12),
(2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niños`
--

DROP TABLE IF EXISTS `niños`;
CREATE TABLE IF NOT EXISTS `niños` (
  `idNiños` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `Bueno` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`idNiños`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `niños`
--

INSERT INTO `niños` (`idNiños`, `Nombre`, `Apellidos`, `fechaNac`, `Bueno`) VALUES
(1, 'Alberto', 'Alcántara', '1994-10-13', 'No'),
(2, 'Beatriz', 'Bueno', '1982-04-18', 'Si'),
(3, 'Carlos', 'Crepo', '1998-12-01', 'Si'),
(4, 'Diana', 'Domínguez', '1987-09-02', 'No'),
(5, 'Emilio', 'Enamorado', '1996-08-12', 'Si'),
(6, 'Francisca', 'Fernández', '1990-07-28', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idNiños` int(11) NOT NULL,
  `idRegalos` int(11) NOT NULL,
  PRIMARY KEY (`idNiños`,`idRegalos`),
  KEY `fk_regalo_pedidos_idx` (`idRegalos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idNiños`, `idRegalos`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5),
(1, 8),
(1, 9),
(1, 11),
(1, 12),
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(2, 8),
(2, 9),
(2, 11),
(2, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

DROP TABLE IF EXISTS `regalos`;
CREATE TABLE IF NOT EXISTS `regalos` (
  `idRegalos` int(11) NOT NULL,
  `nomJuguete` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Precio` decimal(5,2) NOT NULL,
  PRIMARY KEY (`idRegalos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`idRegalos`, `nomJuguete`, `Precio`) VALUES
(1, 'Aula de ciencia: Robot Mini ERP', '159.95'),
(2, 'Carbón', '0.00'),
(3, 'Cochecito Classic', '99.95'),
(4, 'Consola PS4 1 TB', '349.90'),
(5, 'Lego Villa familiar modular', '64.99'),
(6, 'Magia Borrás Clásica 150 trucos con luz', '32.95'),
(7, 'Meccano Excavadora construcción', '30.99'),
(8, 'Nenuco Hace pompas', '29.95'),
(9, 'Peluche delfín rosa', '34.00'),
(10, 'Pequeordenador', '22.95'),
(11, 'Robot Coji', '69.95'),
(12, 'Telescopio astronómico terrestre', '72.00'),
(13, 'Twister', '17.95');

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
-- Filtros para la tabla `entregas`
--
ALTER TABLE `entregas`
  ADD CONSTRAINT `fk_regalos_entregas` FOREIGN KEY (`idRegalos`) REFERENCES `regalos` (`idRegalos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rey_entregas` FOREIGN KEY (`idRey`) REFERENCES `rey` (`idRey`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
