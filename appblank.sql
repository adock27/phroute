-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2021 a las 23:56:51
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appblank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `ingreso_id` int(11) NOT NULL,
  `meta_id` int(11) NOT NULL,
  `ingreso_valor` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `ingreso_fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`ingreso_id`, `meta_id`, `ingreso_valor`, `fecha_creacion`, `ingreso_fecha`) VALUES
(32, 25, 309152, '2021-06-18 22:01:37', '2020-12-15 03:57:29'),
(33, 25, 209209, '2021-06-18 22:01:37', '2021-01-15 03:57:37'),
(34, 25, 700000, '2021-06-18 22:01:37', '2021-02-11 03:57:43'),
(35, 25, 700000, '2021-06-18 22:01:37', '2021-03-11 03:57:52'),
(36, 25, 300000, '2021-06-18 22:01:37', '2021-04-21 03:52:20'),
(37, 25, 493883, '2021-06-18 22:01:37', '2021-05-15 03:58:13'),
(38, 25, 1000000, '2021-06-18 22:01:37', '2021-06-10 03:58:21'),
(42, 25, 209500, '2021-07-15 16:27:47', '2021-07-15 21:27:47'),
(43, 27, 170000, '2021-08-13 10:34:32', '2021-08-13 15:34:32'),
(44, 27, 500000, '2021-08-13 10:35:13', '2021-08-13 15:35:13'),
(46, 28, 280000, '2021-08-13 10:37:39', '2021-08-13 15:37:39'),
(47, 28, 280000, '2021-08-13 10:37:53', '2021-08-13 15:37:53'),
(48, 28, 280000, '2021-08-13 10:37:57', '2021-08-13 15:37:57'),
(52, 25, 209538, '2021-08-19 19:40:58', '2021-08-20 00:40:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE `metas` (
  `meta_id` int(11) NOT NULL,
  `meta_nombre` varchar(50) NOT NULL,
  `tope` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metas`
--

INSERT INTO `metas` (`meta_id`, `meta_nombre`, `tope`) VALUES
(25, 'Moto NKD 125', 4435743),
(27, 'Disco duro ', 1500000),
(28, 'Casa', 60000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`uid`, `username`) VALUES
(2, 'anderson'),
(4, 'breiner'),
(3, 'carlos mario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`ingreso_id`),
  ADD KEY `meta_id` (`meta_id`);

--
-- Indices de la tabla `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`meta_id`),
  ADD UNIQUE KEY `meta_nombre` (`meta_nombre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `name` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `ingreso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `metas`
--
ALTER TABLE `metas`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`meta_id`) REFERENCES `metas` (`meta_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
