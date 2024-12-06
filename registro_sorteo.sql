-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 21:39:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_sorteo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` bigint(11) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `ape` varchar(250) DEFAULT NULL,
  `dni` varchar(15) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `carrera` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nom`, `ape`, `dni`, `tel`, `email`, `carrera`, `created_at`) VALUES
(1, 'sebastian', 'vasquez', '74146165', '987654321', 'wong@gmail.com', 'Enfermeria', '2024-10-23 14:47:43'),
(2, 'vicente', 'alvarado', '06824495', '987654321', 'vicente@gmail.com', 'Enfermeria', '2024-10-23 15:01:28'),
(3, 'David', 'Samuel', '65987412', '987654321', 'david@gmail.com', 'Fisioterapia', '2024-10-23 15:01:50'),
(4, 'Elias', 'Samir', '98754856', '987654321', 'elias@gmail.com', 'Laboratorio', '2024-10-23 15:12:19'),
(5, 'Shirley', 'Perez', '06874596', '987654321', 'shirley@gmail.com', 'Fisioterapia', '2024-10-23 15:16:36'),
(6, 'Shirley', 'Perez', '06874596', '987654321', 'shirley@gmail.com', 'Fisioterapia', '2024-10-23 15:16:50'),
(7, 'Sebas', 'Raul', '74145689', '987654321', 'seb@gmail.com', 'Protesis', '2024-10-23 17:11:45'),
(8, 'juan', 'perex', '74886589', '987654321', 'aaa@gmail.com', 'Farmacia', '2024-10-23 17:23:17'),
(9, 'Adrian', 'Alvarez', '78895896', '987654321', 'adr@gmail.com', 'Fisioterapia', '2024-10-23 17:24:54'),
(10, 'a', 'a', '12345672', '987654321', 's@gmail.com', 'Fisioterapia', '2024-10-23 17:30:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
