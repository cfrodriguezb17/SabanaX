-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2021 a las 17:07:28
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabanax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id-evento` int(11) NOT NULL,
  `emailUser` varchar(256) NOT NULL,
  `titulo` varchar(128) NOT NULL,
  `municipio` varchar(10) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `costo` int(11) NOT NULL,
  `categoria` varchar(12) NOT NULL,
  `anunciar` varchar(3) NOT NULL,
  `imagenEvento` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id-evento`, `emailUser`, `titulo`, `municipio`, `fecha`, `hora`, `descripcion`, `costo`, `categoria`, `anunciar`, `imagenEvento`) VALUES
(34, 'tentation@gmail.com', 'Race in the hills', 'Chia', '2021-11-20', '00:00', 'Cars: Race-O-Rama es un videojuego de carreras basado en la franquicia Cars que fue lanzado el ', 269999, 'Deportes', 'Si', 'upload/fotosEventos/61984d23055bd2.78241684.jpg'),
(37, '', 'PRUEBA1', 'Gachancipa', '2021-11-20', '20:18', '214123123', 1, 'Comedia', 'No', 'upload/fotosEventos/619866ff8a4ae5.02394397.jpeg'),
(38, '', 'PRUEBA 2', 'Gachancipa', '2021-11-27', '08:12', 'PRUEBA 2', 1000, 'Dibujo', 'no', 'upload/fotosEventos/6198e62fb99503.78552845.jpg'),
(39, '', 'PRUEBA 3', 'Cogua', '2021-12-08', '09:18', '23123', 1, 'Escultura', 'no', 'upload/fotosEventos/6198e7b6de7f68.71804441.jpg'),
(50, '', 'Juliancho el ancho', 'Nemocon', '2021-11-05', '19:16', '1212', 1, 'Escultura', 'no', 'upload/fotosEventos/619c08bc295dd6.62509152.jpeg'),
(51, 'tentation@gmail.com', 'EVENTOOOO', 'Nemocon', '2021-11-28', '18:14', 'EVENTO1', 0, 'Cine', 'no', 'upload/fotosEventos/61a291bfd1ce32.00091139.jpeg'),
(52, '', 'Titulo de uno nuevo', 'Chia', '2021-11-03', '11:50', 'Hola', 0, 'Comedia', 'no', 'upload/fotosEventos/61a3b2a3a8be84.26655611.png'),
(55, 'tentation@gmail.com', 'PARTY IN THE NIGHT', 'Sopo', '2022-01-01', '20:00', 'Descripcion de este evento', 0, 'Danza', 'Si', 'upload/fotosEventos/61a3b6553bcd96.04585079.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `idPqr` int(50) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `tipoPqr` text NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`idPqr`, `identificacion`, `tipoPqr`, `descripcion`, `estado`) VALUES
(2, 1073535016, 'Dudas', 'Como pagar por un anuncio', 'Resuelto'),
(5, 1069054917, 'Fallas', 'No me permite visualizar las PQRS', 'Por verifi'),
(6, 1073535016, 'Fallas', 'Resuelto', 'Por verificar'),
(7, 1073535016, 'Fallas', 'Resuelta', 'Por verificar'),
(10, 1073535016, 'Fallas', 'debo resolver lo de modificar', 'Resuelto'),
(11, 1073535016, 'Fallas', 'Resuelto', 'Por verificar'),
(12, 1073535016, 'Fallas', 'Resuelta', 'Por verificar'),
(13, 1069054917, 'Fallas', 'Resuelta', 'Por verificar'),
(14, 1069054917, 'Fallas', 'Resuelta', 'Por verificar'),
(15, 1069054917, 'Fallas', 'Por verifi', 'Por verificar'),
(16, 1069054917, 'Dudas', 'no puedo editar totalmente aún', 'Por verificar'),
(17, 1069054917, 'Fallas', 'Parece que si esta funcionando', 'Por verificar'),
(18, 1069054917, 'Fallas', 'como permitir a un uruario externo crear una pqr', 'Por verificar'),
(19, 1069054917, 'Fallas', 'Como crear un evento', 'Por verificar'),
(20, 1069054917, 'Fallas', 'Como crear un evento', 'Por verificar'),
(21, 1069054917, 'Dudas', 'No puedo ingresar como admin', 'Por verificar'),
(22, 1069054917, 'Dudas', 'necesito saber redireccionar', 'Por verificar'),
(23, 1069054917, 'Dudas', 'Como crear un evento', 'Por verificar'),
(24, 1069054917, 'Dudas', 'tengo problemas para editar', 'Por verificar'),
(25, 1069054917, 'Dudas', 'Resuelto', 'Por verificar'),
(26, 1073535016, 'Fallas', 'necesito comprobar si aún funciona', 'Por verificar'),
(27, 1077092435, 'Dudas', 'solo puede un admin', 'Por verificar'),
(28, 1075664902, 'Dudas', 'soy un cliente normal, puedo crear una pqrs?', 'Por verificar'),
(29, 1075664902, 'Dudas', 'No puedo ingresar como admin', 'Por verificar'),
(30, 1075664902, 'Fallas', 'verificacion', 'Por verificar'),
(31, 1075664902, 'Dudas', 'verificar si aun continua funcioannaod', 'Por verificar'),
(32, 1075664902, 'Fallas', 'verificacion del listar', 'Por verificar'),
(33, 1075664902, 'Fallas', 'como cargar una pqr', 'Por verificar'),
(34, 1075664902, 'Dudas', 'quiero registrar sin ver eliminar', 'Por verificar'),
(35, 1075664902, 'Fallas', 'a ver si funciona', 'Por verificar'),
(37, 1077092435, 'Fallas', 'PRUEBAAAA', 'Por verificar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `identificacion` bigint(20) NOT NULL,
  `tipodoc` text CHARACTER SET latin1 NOT NULL,
  `nombres` text CHARACTER SET latin1 NOT NULL,
  `apellidos` varchar(40) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `clave` varchar(200) CHARACTER SET latin1 NOT NULL,
  `rol` text CHARACTER SET latin1 NOT NULL,
  `estado` text CHARACTER SET latin1 NOT NULL,
  `foto` varchar(256) NOT NULL,
  `nickname` varchar(256) NOT NULL,
  `profesion` varchar(256) NOT NULL,
  `bio` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`identificacion`, `tipodoc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `nickname`, `profesion`, `bio`) VALUES
(993043, 'Tipo De Documento', 'Juliana', 'Rodriguez', 'jr@gmail.com', 4249943, '81dc9bdb52d04dc20036dbd8313ed055', 'Artista', 'Activo', '../upload/fotos/defaultProfile.jpg', 'artisaNuevoxddd', 'Sin profesion', 'Sin biografia'),
(1867294, 'C.C', 'Pablo', 'Herrera', 'pabloH@gmail.com', 3107528204, '81dc9bdb52d04dc20036dbd8313ed055', 'Artista', 'Activo', '', '', '', ''),
(1072000001, 'C.C', 'Carlos', 'Rodriguez', 'cfrodriguez@gmail.com', 31200000000, '81dc9bdb52d04dc20036dbd8313ed055', 'Artista', 'Activo', '../upload/fotos/pexels-jerm-gonzalo-7524543.jpg', '', '', ''),
(1072999000, 'C.C', 'John', 'Ofroy', 'tentation@gmail.com', 31299900000, '81dc9bdb52d04dc20036dbd8313ed055', 'Artista', 'Activo', '../upload/fotos/61a4455619e672.27750728.jpg', 'XXXTENTACION', 'Cantante', 'On March 26, 2017, following Onfroys release from jail, he set up a surprise concert that was arranged for April 9 in Miami. The show had an admission price of $5 until it was apparently filled up. However, before he arrived, a riot broke out. '),
(1077092435, 'C.C', 'Duvan', 'Avila', 'dfavila53@misena.edu.co', 3045384271, '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'Activo', '../upload/fotos/perfilduvan.jpg', '', '', ''),
(1087546387, 'C.C', 'Leidy Dayanna ', 'Navarro Cortes', 'leidy@gmail.com', 320768549, '81dc9bdb52d04dc20036dbd8313ed055', 'Cliente', 'Activo', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id-evento`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`idPqr`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`identificacion`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id-evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `idPqr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
