-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2024 a las 23:49:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartbasic1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `id_usu` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `client_email`, `created_at`, `id_usu`) VALUES
(36, 'luis_alexander_96@hotmail.com', '2024-07-31 17:41:02', 12),
(37, 'luis_alexander_96@hotmail.com', '2024-07-31 17:41:47', 12),
(38, 'luis_alexander_96@hotmail.com', '2024-07-31 17:44:09', 12),
(39, 'luis_alexander_96@hotmail.com', '2024-07-31 18:12:57', 12),
(40, 'luis_alexander_96@hotmail.com', '2024-07-31 18:16:07', 12),
(41, 'luis_alexander_96@hotmail.com', '2024-07-31 18:21:20', 12),
(42, 'luis_alexander_96@hotmail.com', '2024-07-31 18:21:43', 12),
(43, 'luis_alexander_96@hotmail.com', '2024-07-31 18:22:42', 12),
(44, 'luis_alexander_96@hotmail.com', '2024-07-31 18:22:53', 12),
(45, 'luis_alexander_96@hotmail.com', '2024-07-31 18:25:11', 12),
(46, 'luis_alexander_96@hotmail.com', '2024-07-31 18:25:43', 12),
(47, 'luis_alexander_96@hotmail.com', '2024-07-31 18:25:53', 12),
(48, 'luis_alexander_96@hotmail.com', '2024-07-31 18:25:56', 12),
(49, 'luis_alexander_96@hotmail.com', '2024-07-31 18:26:15', 12),
(50, 'luis_alexander_96@hotmail.com', '2024-07-31 18:27:13', 12),
(51, 'luis_alexander_96@hotmail.com', '2024-07-31 20:07:02', 12),
(52, 'luis_alexander_96@hotmail.com', '2024-07-31 20:07:47', 12),
(53, 'luis_alexander_96@hotmail.com', '2024-07-31 20:08:40', 12),
(54, 'luis_alexander_96@hotmail.com', '2024-07-31 20:10:38', 12),
(55, 'luis_alexander_96@hotmail.com', '2024-07-31 20:12:08', 12),
(56, 'luis_alexander_96@hotmail.com', '2024-07-31 20:13:02', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `Cantidad` int(11) NOT NULL DEFAULT 0,
  `cart_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cart_product`
--

INSERT INTO `cart_product` (`id`, `product_id`, `Cantidad`, `cart_id`) VALUES
(9, 1, 1, 38),
(10, 1, 1, 39),
(11, 1, 1, 42),
(12, 1, 1, 44),
(13, 2, 1, 44),
(14, 1, 1, 45),
(15, 2, 1, 45),
(16, 1, 1, 47),
(17, 2, 1, 47),
(18, 1, 1, 48),
(19, 2, 1, 48),
(20, 1, 1, 49),
(21, 2, 1, 49),
(22, 1, 1, 50),
(23, 2, 1, 50),
(24, 1, 1, 51),
(25, 2, 1, 51),
(26, 36, 1, 51),
(27, 8, 1, 51),
(28, 7, 1, 51),
(29, 5, 1, 51),
(30, 4, 1, 51),
(31, 3, 1, 51),
(32, 1, 1, 52),
(33, 2, 1, 52),
(34, 3, 1, 52),
(35, 4, 1, 52),
(36, 5, 1, 52),
(37, 7, 1, 52),
(38, 8, 1, 52),
(39, 36, 1, 52),
(40, 1, 1, 53),
(41, 2, 1, 53),
(42, 3, 1, 53),
(43, 4, 1, 53),
(44, 5, 1, 53),
(45, 7, 1, 53),
(46, 8, 1, 53),
(47, 36, 1, 53),
(48, 1, 1, 54),
(49, 2, 1, 54),
(50, 3, 1, 54),
(51, 4, 1, 54),
(52, 5, 1, 54),
(53, 7, 1, 54),
(54, 8, 1, 54),
(55, 36, 1, 54),
(56, 1, 1, 55),
(57, 2, 1, 55),
(58, 3, 1, 55),
(59, 1, 1, 56),
(60, 2, 1, 56),
(61, 3, 1, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'AJO', 9),
(2, 'Aji', 10),
(3, 'Papa', 3),
(4, 'Cebolla', 7),
(5, 'Pimenton', 11),
(7, 'perejil', 1),
(8, 'jojoto', 5),
(36, 'repollo', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `NumTelf` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Zona` varchar(150) NOT NULL,
  `Tipusu` int(11) NOT NULL,
  `Password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `NumTelf`, `Email`, `Zona`, `Tipusu`, `Password`) VALUES
(12, 'Luis', 'Caceres', '4242878737', 'luis_alexander_96@hotmail.com', 'Casalta 2', 1, '$2y$10$D28HGQ2lGGbKymXUVAJZE.mliN9EWUwYKl30NqqG3Ujw2ClJmzRmG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_usuario` (`id_usu`);

--
-- Indices de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_product_cart` (`cart_id`),
  ADD KEY `fk_cart_product_product` (`product_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `Email` (`Email`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_usuario` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `fk_cart_product_cart` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `fk_cart_product_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
