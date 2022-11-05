-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-10-2022 a las 11:51:22
-- Versión del servidor: 10.5.15-MariaDB-0+deb11u1
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Tenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estoc`
--

CREATE TABLE `Estoc` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `preu` float NOT NULL,
  `descripcio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Estoc`
--

INSERT INTO `Estoc` (`id`, `nom`, `preu`, `descripcio`) VALUES
(1, 'Camiseta Negre', 20, 'Es una camiseta negre molt simple i molt guapa'),
(2, 'Camiseta verda', 20.5, 'És un poquet mes cares que les altres camisetes per que es verda. Però qui no li agrada el color verd?'),
(3, 'Sudadera polar', 40.99, 'El preu per no pasar fred , entendible la veritat'),
(4, 'Camiseta nova', 10, 'Es bastant barata , segur que és nova? Això l\'hauràs de descobrir si la comprés.'),
(5, 'Camison ', 15, 'Un preu bastant raonabla tractan de una camiseta mes grosa de lo normal. Perque creus que se diu on? Perque està encesa?');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Estoc`
--
ALTER TABLE `Estoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Estoc`
--
ALTER TABLE `Estoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
