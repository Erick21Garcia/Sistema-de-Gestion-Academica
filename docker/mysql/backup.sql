-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2024 a las 07:22:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `materia_id` bigint(20) UNSIGNED NOT NULL,
  `calificacion` varchar(2) NOT NULL,
  `fecha_subida` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `users_id`, `materia_id`, `calificacion`, `fecha_subida`, `created_at`, `updated_at`) VALUES
(2, 6, 1, '9', '2024-08-08', NULL, NULL),
(3, 6, 2, '10', '2024-08-08', NULL, NULL),
(4, 6, 3, '10', '2024-08-08', NULL, NULL),
(5, 6, 4, '8', '2024-08-10', NULL, NULL),
(6, 6, 5, '9', '2024-08-10', NULL, NULL),
(7, 9, 6, '8', '2024-09-28', NULL, NULL),
(8, 9, 9, '10', '2024-09-28', NULL, NULL),
(9, 9, 10, '9', '2024-09-27', NULL, NULL),
(10, 14, 12, '10', '2024-09-27', NULL, NULL),
(11, 14, 13, '10', '2024-09-28', NULL, NULL),
(12, 14, 15, '8', '2024-08-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_name` varchar(100) NOT NULL,
  `facultad_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `carrera_name`, `facultad_id`, `carrera_description`, `created_at`, `updated_at`) VALUES
(1, 'Ingeniería Automotriz', 3, 'La carrera de Ingeniería Automotriz se enfoca en el diseño, desarrollo, fabricación y mantenimiento de vehículos y sistemas automotrices.', NULL, NULL),
(2, 'Ingeniería Civil', 3, 'La ingeniería civil es la disciplina de la ingeniería que emplea conocimientos de cálculo, mecánica, hidráulica y física para encargarse del diseño, construcción y mantenimiento de las infraestructuras', NULL, NULL),
(3, 'Licenciatura en Derecho Civil', 2, 'El Derecho Civil regula las relaciones privadas entre personas, abordando temas como contratos, propiedad y responsabilidad civil, garantizando los derechos individuales en la sociedad.', NULL, NULL),
(4, 'Licenciatura en Biología', 1, 'La carrera de Biología se centra en el estudio de los seres vivos y sus procesos vitales, incluyendo la estructura, función, crecimiento, evolución, distribución y taxonomía de los organismos.', NULL, NULL),
(5, 'Ingeniería Mecánica', 3, 'La ingeniería mecánica diseña, analiza y optimiza sistemas mecánicos, maquinaria y procesos industriales para diversas aplicaciones.', NULL, NULL),
(6, 'Ingeniería de Sistemas', 3, 'La ingeniería de sistemas diseña, desarrolla y optimiza software, redes y sistemas computacionales para diversas aplicaciones.', NULL, NULL),
(7, 'Licenciatura en Derecho Penal', 2, 'El Derecho Penal regula delitos y penas, protegiendo la sociedad mediante la sanción de conductas ilícitas.', NULL, NULL),
(8, 'Licenciatura en Derecho Laboral', 2, 'El Derecho Laboral regula las relaciones entre empleadores y trabajadores, protegiendo derechos y obligaciones laborales.', NULL, NULL),
(9, 'Licenciatura en Derecho Constitucional', 2, 'El Derecho Constitucional establece y garantiza la organización del Estado, los derechos fundamentales y el orden jurídico.', NULL, NULL),
(10, 'Licenciatura en Química', 1, 'La química estudia la composición, propiedades y transformaciones de la materia a nivel molecular y atómico.', NULL, NULL),
(11, 'Licenciatura en Física', 1, 'La física estudia las leyes fundamentales del universo, analizando el comportamiento de la materia y la energía.', NULL, NULL),
(12, 'Licenciatura en Geología', 1, 'La geología estudia la Tierra, su composición, estructura, procesos internos y externos, y su evolución histórica.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_facultad` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id`, `nombre_facultad`, `created_at`, `updated_at`) VALUES
(1, 'Facultad de Ciencias Naturales', '2024-06-05 00:18:22', NULL),
(2, 'Facultad de Derecho', '2024-06-05 00:20:27', NULL),
(3, 'Facultad de Ingeniería', '2024-06-05 00:21:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materia_name` varchar(100) NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `materia_descripcion` text DEFAULT NULL,
  `credits` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `materia_name`, `carrera_id`, `materia_descripcion`, `credits`, `created_at`, `updated_at`) VALUES
(1, 'Matemáticas I', 1, 'Cálculo diferencial e integral', 2, NULL, NULL),
(2, 'Física I', 1, 'Fundamentos de mecánica', 3, NULL, NULL),
(3, 'Química General', 1, 'Principios básicos de química', 3, NULL, NULL),
(4, 'Introducción a la Ingeniería', 1, 'Una visión general de la ingeniería como profesión', 2, NULL, NULL),
(5, 'Dibujo Técnico', 1, 'Fundamentos del dibujo técnico', 2, NULL, NULL),
(6, 'Introducción al Derecho', 3, 'Conceptos básicos sobre el derecho, su importancia y su relación con la sociedad.', 3, NULL, NULL),
(7, 'Teoría del Estado', 3, 'Estudio de las formas de organización política, el concepto de Estado y su evolución histórica.', 4, NULL, NULL),
(8, 'Derecho Romano', 3, 'Fundamentos históricos y legales del sistema jurídico romano, base de muchos sistemas jurídicos actuales.', 2, NULL, NULL),
(9, 'Historia del Derecho', 3, 'Análisis de la evolución histórica de los sistemas jurídicos y su influencia en el derecho contemporáneo.', 3, NULL, NULL),
(10, 'Sociología Jurídica', 3, 'Estudio de la relación entre derecho y sociedad, explorando cómo las normas jurídicas influyen y son influenciadas por las estructuras sociales.', 3, NULL, NULL),
(11, 'Introducción a la Geología', 12, 'Fundamentos básicos de la geología, incluyendo los procesos geológicos y la composición de la Tierra.', 2, NULL, NULL),
(12, 'Química General', 12, 'Principios fundamentales de la química, necesarios para comprender los procesos geológicos y la composición de los minerales.', 4, NULL, NULL),
(13, 'Matemáticas I', 12, 'Matemáticas aplicadas a problemas geológicos, como el cálculo diferencial e integral o álgebra básica.', 2, NULL, NULL),
(14, 'Física General', 12, 'Introducción a los conceptos de física que son relevantes para la geología, como la mecánica, la termodinámica y las ondas.', 3, NULL, NULL),
(15, 'Mineralogía', 12, 'Estudio de los minerales, sus propiedades, clasificación y formación, una materia clave para entender la composición de las rocas.', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `matricula_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(18, '0001_01_01_000000_create_users_table', 1),
(19, '0001_01_01_000001_create_cache_table', 1),
(20, '0001_01_01_000002_create_jobs_table', 1),
(21, '2024_05_26_234341_create_table_facultad', 1),
(22, '2024_06_04_014201_create_carrera_table', 1),
(23, '2024_06_04_021712_edit_users_table', 2),
(24, '2024_06_04_031959_create_materia_table', 3),
(26, '2024_06_04_033946_create_matricula_table', 4),
(27, '2024_06_04_042145_create_calificaciones_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bRmk6HSfm6GYVatuyzF8kucPs10DzAR7Xb0AEy3F', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHdtMU5NQ3NQNTBKZnFLVk85eGpwOW1sMjliVDR2T1A2V0pMQzlybyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1727585305),
('pFzh0zcJxuwlVIL5liIOyQjzy9a8CsjUiKqdyJDX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHRZeXN2SERtUXFPdm5aYlVVMWhtSlVUVWFHN252TzFBeWVoRUREbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1727577341);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `cedula` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `f_inscripcion` date DEFAULT NULL,
  `carrera_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `role`, `email`, `email_verified_at`, `cedula`, `celular`, `password`, `f_inscripcion`, `carrera_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Jhon', 'Perez', 'estudiante', 'jon@hotmail.com', NULL, '0402692243', '0986081624', '$2y$12$XePsnHxFlgKVdV35mYn/geYtX0d.gx81fJF6Cc.2Qsrjc7s0078nC', '2024-07-01', 1, NULL, '2024-07-18 22:13:45', '2024-09-29 04:51:34'),
(9, 'Erick', 'Garcia', 'estudiante', 'erick@email.com', NULL, '0401692249', '0986081623', '$2y$12$r8QxCMczRn1S8x1/UPFgr.TNhUYYorbCI2384L/BMmTkctkz8sWV.', '2024-09-25', 3, NULL, '2024-09-25 07:13:59', '2024-09-25 21:09:36'),
(11, 'David', 'Sosa', 'estudiante', 'david@email.com', NULL, '23534647', '230943598', '$2y$12$UkZ3JIiYAw0/wwM263zyc.ovD6GJaw92y4NuQJtxeWfKbDHXUbjlG', '2024-09-25', 6, NULL, '2024-09-25 08:58:44', '2024-09-25 09:02:18'),
(14, 'Criss', 'Valencia', 'estudiante', 'criss@email.com', NULL, '09345347', '32432565', '$2y$12$3/vIb76wkl2Bc.yL8JAjgemBjauXZc6kGSLto6rbB6F7zwZdRnY6q', '2024-09-25', 12, NULL, '2024-09-26 00:25:28', '2024-09-26 01:22:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calificaciones_users_id_foreign` (`users_id`),
  ADD KEY `calificaciones_materia_id_foreign` (`materia_id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera_facultad_id_foreign` (`facultad_id`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materia_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricula_users_id_foreign` (`users_id`),
  ADD KEY `matricula_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_carrera_id_foreign` (`carrera_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `calificaciones_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_facultad_id_foreign` FOREIGN KEY (`facultad_id`) REFERENCES `facultad` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matricula_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
