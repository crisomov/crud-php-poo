-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2025 a las 07:00:03
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
-- Base de datos: `automotora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `agno` int(11) NOT NULL,
  `motor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `marca`, `color`, `agno`, `motor`) VALUES
(1, 'Seat', 'verde-limon', 2020, 2000),
(2, 'Seat', 'verde-agua', 2020, 1800),
(3, 'renault', 'rojo-sangre', 2019, 1500),
(4, 'renault', 'azul-marino', 2015, 2000),
(8, 'chevrolet', 'azul diplo', 2020, 1500),
(9, 'chevrolet', 'azul ingles', 2020, 1500),
(16, 'kia', 'rojo', 2020, 1800),
(17, 'kia', 'orange', 2020, 1800),
(18, 'hyundai', 'tomato', 2022, 1700),
(20, 'hyundai', 'tomato', 2022, 1700),
(21, 'toyota', 'gray', 2017, 2400),
(22, 'toyota', 'gray', 2017, 2400),
(23, 'toyota', 'gray-light', 2017, 2400),
(24, 'toyota', 'gray', 2017, 2400),
(26, 'toyota', 'gray', 2017, 2400),
(27, 'ford', 'white', 2016, 1200),
(29, 'chery', 'amarillo', 2020, 1900),
(30, 'toyota', 'verde', 2017, 1900),
(31, 'ssubaru', 'rojo', 2020, 2020),
(32, 'mack', 'verde', 2020, 5000),
(33, 'sang yong', 'blanco', 2025, 1300),
(34, 'pegaso', 'blue', 2021, 2500),
(35, 'ford', 'silver', 2018, 1900),
(36, 'nissan', 'roja', 2022, 2200),
(37, 'nissan', 'azul', 2017, 1700),
(38, 'fiat', 'rojo', 2021, 1800),
(39, 'kia', 'red', 2020, 2000),
(40, 'mack', 'yellow-green', 2025, 2500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
