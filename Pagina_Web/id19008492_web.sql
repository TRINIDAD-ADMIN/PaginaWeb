-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-12-2022 a las 16:09:38
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19008492_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` int(11) NOT NULL,
  `imeiD` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reparacion` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaR` date NOT NULL,
  `costoR` float NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `imeiD`, `marca`, `modelo`, `reparacion`, `responsable`, `telefono`, `fechaR`, `costoR`, `descripcion`) VALUES
(26, '356796112193316', 'iPhone', 'SE 2022', 'Restauración', 'Juan Antonio Dominguez', '9631231325', '2022-10-19', 450, 'Olvidaron la contraseña'),
(27, '354076116630890', 'Samsung', 'A11 SM-A115M', 'Reparar imei', 'Paulina Rodriguez', '9632325681', '2021-06-22', 1450, 'El dispositivo no toma señal'),
(28, '867904037514804', 'Huawei', 'P20 Lite ANE-LX2', 'Cambio de pantalla', 'Isaias Mendez', '9191710675', '2022-11-12', 1350, 'La pantalla esta rota'),
(29, '356573081305985', 'iPhone', '7 Plus', 'Actualizacion', 'Sebastian Velasco', '9631636127', '2022-12-08', 450, 'Actualizar la version de iOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `telefono`, `correo`, `contrasena`) VALUES
(1, 'Erika Mayeli', 'Alfaro Gomez', 'sebasunlocker', '9631208974', 'erikamayelia@gmail.com', 'ggfgrtyytghhytt'),
(2, 'Sebastian', 'Velasco', 'sebasunlocker', '9631208974', 'sebas@hotmail.com', 'fogkrpokgrp5'),
(3, 'Erika Mayeli', 'Alfaro Gomez', 'sebasunlocker', '9631231325', 'erikamayelia@gmail.com', 'hytrhrthtrhhfgrt'),
(4, 'Sebastian', 'Alfaro', 'Sebastian_Alfaro', '9631636127', 'SebasUnlocker@hotmail.com', 'erijroierjioeo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
