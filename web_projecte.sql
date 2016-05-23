-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2016 a las 16:46:55
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_projecte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `nomUsuari` varchar(20) NOT NULL,
  `clau` varchar(8) NOT NULL,
  `foto` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`nomUsuari`, `clau`, `foto`, `id`) VALUES
('carlos', '123', 'perfil.png', 1),
('pipi', 'pipi', 'perfil.png', 2),
('lolo', 'lolo', 'vivi.JPG', 3),
('', '', '', 4),
('dani', '1234', '', 5),
('estersita', 'xupaita', 'ruben.jpg', 6),
('pollas', 'admin', 'Captura3.JPG', 7),
('daniela', 'daniela', 'ruben.jpg', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
