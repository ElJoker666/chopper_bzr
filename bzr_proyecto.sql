-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:33065
-- Tiempo de generación: 04-03-2024 a las 08:20:45
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
-- Base de datos: `bzr_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2024_03_03_070934_create_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `shipping_cost` double NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `shipping_cost`, `description`, `category_id`, `brand_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Playera Nike', 'playera-nike', 'Sin detalles', 200, 30, 'Playera de color rojo/naranja, Talla s', 1, 1, '428686519_266794343175030_7031182954881412274_n.jpg', '2024-03-04 09:16:23', '2024-03-04 09:16:23'),
(2, 'Playera Drip', 'Playera-drip', 'Sin detalles', 200, 30, 'Playera de color blanco, Talla m', 1, 2, '428701347_266794126508385_9116952674504481009_n.jpg', '2024-03-04 09:16:23', '2024-03-04 09:16:23'),
(3, 'Playera Champion', 'playera-champion', 'Sin detalles', 200, 30, 'Playera de color negro, Talla m', 1, 3, '429534834_266793486508449_4162665731945108480_n.jpg', '2024-03-04 09:16:23', '2024-03-04 09:16:23'),
(4, 'Pantalon Levis', 'pantalon-levis', 'Sin detalles', 200, 30, 'Pantalon de color azul marido, Talla m', 2, 3, '428672350_267468056440992_4931880206741150630_n.jpg', '2024-03-04 09:16:23', '2024-03-04 09:16:23'),
(15, 'Pants Nike', 'pants-nike', 'Sin detalles', 250, 30, 'Pants de color azul marino con rayas grises, Talla m', 1, 1, '428691942_266770846510713_2269045496986248035_n.jpg', '2024-03-04 10:46:28', '2024-03-04 10:46:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$DadWr2JJ4Yi8HuD95l7UB.Len4fRWWinM4zxAQXTlULTv/0/3Xc.S', 'admin', NULL, '2024-03-04 09:16:23', '2024-03-04 09:16:23'),
(2, 'rameshi', 'jutanes2002@gmail.com', NULL, '$2y$12$mcZLrwngOAOuO3DgQel7NuElhLemoNrTM8/Vfo4GkcMLu0uc8lyU.', 'user', NULL, '2024-03-04 09:19:23', '2024-03-04 11:29:14'),
(3, 'rameshi_1', 'jutanes2009@gmail.com', NULL, '$2y$12$oJdUwSfRtT1ebBdfQxxJrumM5EYfch9.HVWfTpfjTmCr.mMyhbL8W', NULL, NULL, '2024-03-04 11:32:58', '2024-03-04 11:32:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
