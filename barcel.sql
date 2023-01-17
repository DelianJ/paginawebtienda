-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2019 a las 00:17:10
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barcel`
--
CREATE DATABASE IF NOT EXISTS `barcel` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `barcel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(16) COLLATE latin1_spanish_ci NOT NULL,
  `contracena` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `apellido`, `usuario`, `contracena`, `correo`) VALUES
(1, 'jesus', 'merino', 'delian', 'qwer', 'jmerino15.depad.cl@gmail.com'),
(2, 'leandro', 'merino', 'le', 'zxcv', 'leandro@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `img` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `gramos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `tipo`, `nombre`, `descripcion`, `img`, `precio`, `gramos`) VALUES
(1, 'Takis', 'Takis Fuego', 'Pequeñas tortillas de maiz enrolladas y fritas sabor chile y limon.', 'img/takisf.jpg', 9, 60),
(2, 'Takis', 'Takis Extremo', 'El sabor extremo de takis.', 'img/takisex.jpg', 9, 60),
(3, 'Takis', 'Takis Salsa Braba', 'Didfruta del sabor de la salsa braba de Takis.', 'img/takissal.jpg', 9, 60),
(4, 'Takis', 'Takis Original', 'Disfruta el sabor originar de tus takis.', 'img/takisc.jpg', 9, 60),
(5, 'Takis', 'Takis Guacamole', 'Disfruta de tus takis con el gran sabor del Guacamole.', 'img/takisgua.jpeg', 9, 60),
(6, 'Takis', 'Takis Fuego G', 'Pequeñas tortillas de maiz enrolladas y fritas sabor chile y limon.', 'img/takisfg.jpg', 20, 120),
(7, 'Chips', 'Chips Fuego', 'Disfruta de las papas mas picositas.', 'img/chipfuego.jpg', 10, 55),
(8, 'Chips', 'Chips Fuego Gr', 'Ahora podras saborear aun mas de tus papas preferidas en su presentacion grande.', 'img/chipfuego350.jpg', 30, 350),
(9, 'Chips', 'Chips Jalapeño', 'Didfruta del sabor jalapeño en tus papas preferidas.', 'img/chipjalape.jpg', 20, 170),
(10, 'Chips', 'Chips Queso', 'Ahora tus papas faboritas con el sabor del queso.', 'img/chipqueso.jpg', 20, 170),
(11, 'Chips', 'Chips sal de mar', 'Disfruta de papas saladitas.', 'img/chipsal.jpg', 10, 60),
(12, 'Chips', 'Chips sal de mar Gr', 'Disfruta de tus papas con sal de mar en su presentacion mediana.', 'img/chipsal100.jpg', 20, 100),
(13, 'Cacahuates', 'Golden Nuts', 'Disfruta de los cacahuates enchilados.', 'img/goldennutsench.jpg', 15, 150),
(14, 'Cacahuates', 'Golden Nuts', 'Disfruta de unos deliciosos cacahuates estilo japones.', 'img/goldennutsjap.jpg', 9, 100),
(15, 'Cacahuates', 'Golden Nuts Saladitos', 'Didfruta de unos cacahuates saladitos', 'img/goldennutssal.jpg', 9, 100),
(16, 'Cacahuates', 'Hot Nuts Gr', 'Disfruta de los cacahuates mas picositos en su presentacion grende.', 'img/hutnuts200g.jpg', 20, 200),
(17, 'Cacahuates', 'Hot Nuts', 'Disfruta de los cacahuates mas picositos', 'img/hotnuts.png', 15, 150),
(18, 'Cacahuates', 'Hot Nuts Habanero', 'Disfuta de tus cacahuates con el picosito sabor Habanero.', 'img/hotnutshaba.jpg', 9, 100),
(19, 'Pop', 'Pop Karameladas', 'Disfruta de unas ricas palomitas karameladas.', 'img/pop.jpg', 10, 105),
(20, 'Pop', 'Pop Karameladas Gr', 'Disfruta de tus palomitas en su presentacion grande.', 'img/pop260.jpg', 25, 260),
(21, 'Pop', 'Pop Chox', 'Disfruta de tus palomitas originales con el sabor delicioso del chocolate.', 'img/popchox240.jpg', 25, 240),
(22, 'Pop', 'Pop Cinemanía', 'Tus palomitas de siempre con el sabor de las del cine.', 'img/popcinema35.jpg', 10, 35),
(23, 'Pop', 'Pop Crunchy Caramel', 'Tus palomitas karameladas ahora mas infladitas.', 'img/popcrunchy35.jpg', 10, 35),
(24, 'Pop', 'Pop fuego', 'Disfruta de palomitas con un sabor picosito.', 'img/popfuego190.jpg', 20, 190),
(25, 'Churrito', 'Churritos', 'Disfruta de unos churritos picosictos.', 'img/churritos113.png', 10, 113),
(26, 'Churrito', 'Chip-Oples', 'Una deliciosa botana con el sabor del chipotle.', 'img/chipotles52.png', 9, 52),
(27, 'Churrito', 'Runners G', 'Disfruta de ua botana en forma de auto.', 'img/runer280.jpg', 25, 280),
(28, 'Churrito', 'Big Mix Queso', 'Disfruta de un delicioso surtido de tus productos faboritas.', 'img/bigmix70.jpg', 15, 70),
(29, 'Churrito', 'Big Mix', 'Disfruta del surdido clasico de Barcel.', 'img/bigmix200.jpg', 10, 35),
(30, 'Churrito', 'Ondas Queso', 'Disfruta de unas papas onduladas con sabor queso chipotle.', 'img/ondas40.jpg', 9, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `usuario` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(16) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `email`, `contrasena`) VALUES
(1, 'delian', 'merino', 'de', 'asd@gas.com', 'qwer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45647;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
