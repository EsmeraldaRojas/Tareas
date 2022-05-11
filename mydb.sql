-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-05-2022 a las 11:31:58
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autobuses`
--

DROP TABLE IF EXISTS `autobuses`;
CREATE TABLE IF NOT EXISTS `autobuses` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) NOT NULL,
  `asientos` int(255) NOT NULL,
  `clase` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'https://cdn.pixabay.com/photo/2018/03/07/16/07/coach-3206326_960_720.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autobuses`
--

INSERT INTO `autobuses` (`id`, `marca`, `asientos`, `clase`, `img`) VALUES
(1, 'yutong', 30, 'ejecutivo', 'https://s3.amazonaws.com/dullahan-production-bucket-18fzipqvl42tn/wp-content/uploads/2019/03/25164413/laterales-autobuses.png'),
(2, 'marcopolo', 40, 'ejecutivo', 'https://cdn.pixabay.com/photo/2018/03/07/16/07/coach-3206326_960_720.png'),
(3, 'mack', 20, 'turista', 'https://cdn.pixabay.com/photo/2018/03/07/16/07/coach-3206326_960_720.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

DROP TABLE IF EXISTS `conductores`;
CREATE TABLE IF NOT EXISTS `conductores` (
  `id_driver` int(255) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `nivel` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id_driver`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`id_driver`, `nombres`, `apellidos`, `nivel`, `img`) VALUES
(1, 'Tomas', 'Shelby', 5, 'https://fotografias.antena3.com/clipping/cmsimages01/2019/09/03/FA16800C-C891-4B65-824C-A22163E9CFE3/98.jpg?crop=1500,844,x0,y0&width=1900&height=1069&optimize=high&format=webply'),
(2, 'Jhonny ', 'Deep', 3, 'https://www.goldenglobes.com/sites/default/files/2021-12/leonardo-dicaprio-nom-pro-gettyimages-1357409568.jpg?format=pjpg&auto=webp&optimize=high&width=850'),
(3, 'Leonardo', 'Dicaprio', 2, 'https://i2-prod.irishmirror.ie/incoming/article7940978.ece/ALTERNATES/s615b/Johnny-Depp.jpg'),
(4, 'Elon', 'Musk', 999, 'https://upload.wikimedia.org/wikipedia/commons/8/85/Elon_Musk_Royal_Society_%28crop1%29.jpg'),
(5, 'Nayib', 'bukele', 9999, 'https://cnnespanol.cnn.com/wp-content/uploads/2021/06/210610170944-nayib-bukele-laser-full-169.jpeg?quality=100&strip=info');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `Dni` int(11) NOT NULL,
  `pago` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `id_route` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `Dni`, `pago`, `nombres`, `id_route`) VALUES
(1, 27669270, 'cash', 'leonardo gabriel', 1),
(4, 98989, 'cash', 'lol', 1),
(3, 27669270, 'cash', 'leonardo Fernandez', 1),
(5, 27669270, 'cash', 'Leonardo Gabriel Fernandez Higuera', 2),
(6, 27669270, 'cash', 'Leonardo Gabriel Fernandez Higuera', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

DROP TABLE IF EXISTS `viajes`;
CREATE TABLE IF NOT EXISTS `viajes` (
  `id_route` int(255) NOT NULL AUTO_INCREMENT,
  `destino` varchar(255) NOT NULL,
  `precio` int(255) NOT NULL,
  `ETA` varchar(255) NOT NULL,
  `id_driver` int(255) NOT NULL,
  `id_bus` int(11) NOT NULL,
  PRIMARY KEY (`id_route`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`id_route`, `destino`, `precio`, `ETA`, `id_driver`, `id_bus`) VALUES
(1, 'monterrey', 450, '1 dia', 1, 1),
(2, 'nuevo leon', 300, '2 dias', 3, 2),
(3, 'monterrey', 350, '1 dia', 2, 3),
(4, 'puebla', 500, '3 dias', 3, 2),
(5, 'cuernavaca', 500, '2 dias', 1, 2),
(6, 'Merida', 450, '1 dias', 4, 1),
(7, 'xalapa enriquez', 460, '1 dia', 5, 3),
(8, 'aguas calientes', 250, '1 dia', 1, 1),
(9, 'culiacan', 100, '2 dias', 2, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
