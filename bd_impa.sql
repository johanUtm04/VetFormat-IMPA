-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 07:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportes_veterinaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `at_reporte`
--

CREATE TABLE `at_reporte` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora_Atencion` time DEFAULT NULL,
  `Nom_Ciudadano` varchar(255) DEFAULT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `capture_datas`
--

CREATE TABLE `capture_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formato_pdf_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `per_nombres` varchar(255) NOT NULL,
  `per_apaterno` varchar(255) NOT NULL,
  `per_amaterno` varchar(255) NOT NULL,
  `rep_nombres` varchar(255) NOT NULL,
  `rep_apaterno` varchar(255) NOT NULL,
  `rep_amaterno` varchar(255) NOT NULL,
  `rep_domicilio` varchar(255) NOT NULL,
  `rep_colonia` varchar(255) NOT NULL,
  `rep_cp` varchar(255) NOT NULL,
  `rep_estado` varchar(255) NOT NULL,
  `rep_ciudad` varchar(255) NOT NULL,
  `rep_telefono` varchar(255) NOT NULL,
  `det_medio` text NOT NULL,
  `det_asunto` text NOT NULL,
  `det_motivo` text NOT NULL,
  `dom_domicilio` varchar(255) NOT NULL,
  `dom_colonia` varchar(255) NOT NULL,
  `dom_cp` varchar(255) NOT NULL,
  `dom_estado` varchar(255) NOT NULL,
  `dom_ciudad` varchar(255) NOT NULL,
  `dom_telefono` varchar(255) NOT NULL,
  `dom_entre_calles` text NOT NULL,
  `dom_referencias` text NOT NULL,
  `at_fecha` date NOT NULL,
  `at_hora_atencion` time NOT NULL,
  `at_nom_ciudadano` varchar(255) NOT NULL,
  `at_observaciones` text NOT NULL,
  `rep_fecha` date NOT NULL,
  `rep_recibio` varchar(255) NOT NULL,
  `rep_envio_evidencia` text NOT NULL,
  `rep_seguimiento` text NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capture_datas`
--

INSERT INTO `capture_datas` (`id`, `formato_pdf_id`, `user_id`, `per_nombres`, `per_apaterno`, `per_amaterno`, `rep_nombres`, `rep_apaterno`, `rep_amaterno`, `rep_domicilio`, `rep_colonia`, `rep_cp`, `rep_estado`, `rep_ciudad`, `rep_telefono`, `det_medio`, `det_asunto`, `det_motivo`, `dom_domicilio`, `dom_colonia`, `dom_cp`, `dom_estado`, `dom_ciudad`, `dom_telefono`, `dom_entre_calles`, `dom_referencias`, `at_fecha`, `at_hora_atencion`, `at_nom_ciudadano`, `at_observaciones`, `rep_fecha`, `rep_recibio`, `rep_envio_evidencia`, `rep_seguimiento`, `direccion`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Johan Jael', 'Lopez', 'Reyes', 'Johan Jael', 'Lopez', 'Reyes', '326', 'MISION DEL VALLE', '58304', 'MICHOACÁN DE OCAMPO', 'Morelia', '4435817229', 'Whatsapp', '...', '...', 'mayapan 29', 'F. carrillo puerto', '58304', 'MICHOACÁN DE OCAMPO', 'Morelia', '4435817229', 'raza maya, camaleon', 'por el oapas', '2025-07-21', '14:51:00', 'Gloria', 'Importante', '2025-07-21', 'Luis Hernández', '...', '...', 'Mayapan #29', NULL, NULL, '2025-07-22 02:52:12', '2025-07-22 02:52:12'),
(2, NULL, 3, '1', 'Lopez', 'Reyes', 'Johan Jael', 'Lopez', 'Reyes', '1', 'MISION DEL VALLE', '58304', 'MICHOACÁN DE OCAMPO', 'Morelia', '4435817229', '1', '1', '1', 'mayapan 29', 'F. carrillo puerto', '58304', 'MICHOACÁN DE OCAMPO', 'Morelia', '4435817229', 'raza maya, camaleon', 'por el oapas', '2025-07-09', '17:03:00', '1', '1', '2025-07-03', '12', '12', '12', 'Mayapan #29', 19.7285551, -101.1780852, '2025-07-22 03:02:25', '2025-07-22 03:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_reporte`
--

CREATE TABLE `detalle_reporte` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Medio` varchar(255) DEFAULT NULL,
  `Asunto` varchar(255) DEFAULT NULL,
  `Motivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domicilio_reporte`
--

CREATE TABLE `domicilio_reporte` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Domicilio` varchar(255) DEFAULT NULL,
  `Colonia` varchar(255) DEFAULT NULL,
  `CP` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(255) DEFAULT NULL,
  `Telefono` varchar(255) DEFAULT NULL,
  `Entre_calles` varchar(255) DEFAULT NULL,
  `Referencias` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formatos_en_pdf`
--

CREATE TABLE `formatos_en_pdf` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_formato` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `capture_data_id` bigint(20) UNSIGNED DEFAULT NULL,
  `archivo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formatos_en_pdf`
--

INSERT INTO `formatos_en_pdf` (`id`, `nombre_formato`, `user_id`, `capture_data_id`, `archivo`, `created_at`, `updated_at`) VALUES
(1, 'Reporte', 2, 1, 'reportes/subido_1753131152.pdf', '2025-07-22 02:52:34', '2025-07-22 02:52:34'),
(2, 'Reporte', 3, 2, 'reportes/subido_1753131762.pdf', '2025-07-22 03:02:43', '2025-07-22 03:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `historial_formatos`
--

CREATE TABLE `historial_formatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_formato` varchar(255) DEFAULT NULL,
  `datos_generales` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `datos_formato` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE `medicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`id`, `nombre`, `correo`, `especialidad`, `estado`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Ing. Marco Antonio', 'marco@impa.com', 'Ingeniero', 'Activo', NULL, '2025-07-22 03:16:28', NULL),
(2, 'escalera', '3@escalera.com', 'Dev junior', 'Activo', '2025-07-22 02:30:57', '2025-07-22 02:42:14', NULL),
(3, 'natanael', 'nata@impa.com', 'cantaUator', 'Activo', '2025-07-22 02:57:27', '2025-07-22 03:06:09', NULL),
(4, '4to', 'Cuarto@impa.com', 'Gnador', 'Activo', '2025-07-22 03:08:32', '2025-07-22 03:18:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_atiende`
--

CREATE TABLE `personal_atiende` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nombres` varchar(255) NOT NULL,
  `A_Paterno` varchar(255) NOT NULL,
  `A_Materno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reportante`
--

CREATE TABLE `reportante` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombres` varchar(255) NOT NULL,
  `A_Paterno` varchar(255) NOT NULL,
  `A_Materno` varchar(255) DEFAULT NULL,
  `Domicilio` varchar(255) DEFAULT NULL,
  `Colonia` varchar(255) DEFAULT NULL,
  `CP` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `Ciudad_Localidad` varchar(255) DEFAULT NULL,
  `Telefono` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE `reporte` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_per_at` bigint(20) UNSIGNED NOT NULL,
  `id_reportante` bigint(20) UNSIGNED NOT NULL,
  `id_det_rep` bigint(20) UNSIGNED NOT NULL,
  `id_dom_rep` bigint(20) UNSIGNED NOT NULL,
  `id_at_rep` bigint(20) UNSIGNED NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Recibio` varchar(255) DEFAULT NULL,
  `Envio_Evidencia` varchar(255) DEFAULT NULL,
  `Seguimiento` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo_usuario` enum('Admin','Medico') NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `tipo_usuario`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ing. Marco Antonio', 'marco@impa.com', '$2y$12$ngdYTGbVF/ITffTT/769z.SkPkklczSxgE5Jh9H0i.q2NzkANtX4.', 'Admin', 'Activo', NULL, NULL, '2025-07-22 03:16:28'),
(2, 'escalera', '1@gmail.com', '$2y$12$byR75TUA7ORn50Sfj9zZw.ruDziTkYjxILHqAkEg/8/vsZFcHK4oq', 'Medico', 'Activo', NULL, '2025-07-22 02:30:57', '2025-07-22 02:36:47'),
(3, 'nata', 'nata@gmail.com', '$2y$12$SxrE79k8wTTW3W38rVdxXuA/u6kHAwCbehoJbz.hBNtzERts77Lhm', 'Medico', 'Activo', NULL, '2025-07-22 02:57:28', '2025-07-22 02:57:28'),
(4, '4to', 'Cuarto@impa.com', '$2y$12$6juguSdyKPLSMZbkyzJ22O17RP7SSPmLtfSUCROygMXA5otxzBHxy', 'Medico', 'Activo', NULL, '2025-07-22 03:08:32', '2025-07-22 03:18:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_reporte`
--
ALTER TABLE `at_reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capture_datas`
--
ALTER TABLE `capture_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `capture_datas_user_id_foreign` (`user_id`);

--
-- Indexes for table `detalle_reporte`
--
ALTER TABLE `detalle_reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domicilio_reporte`
--
ALTER TABLE `domicilio_reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formatos_en_pdf`
--
ALTER TABLE `formatos_en_pdf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formatos_en_pdf_user_id_foreign` (`user_id`),
  ADD KEY `formatos_en_pdf_capture_data_id_foreign` (`capture_data_id`);

--
-- Indexes for table `historial_formatos`
--
ALTER TABLE `historial_formatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historial_formatos_user_id_foreign` (`user_id`);

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicos_correo_unique` (`correo`),
  ADD KEY `fk_medicos_user` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_atiende`
--
ALTER TABLE `personal_atiende`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportante`
--
ALTER TABLE `reportante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reporte_id_per_at_foreign` (`id_per_at`),
  ADD KEY `reporte_id_reportante_foreign` (`id_reportante`),
  ADD KEY `reporte_id_det_rep_foreign` (`id_det_rep`),
  ADD KEY `reporte_id_dom_rep_foreign` (`id_dom_rep`),
  ADD KEY `reporte_id_at_rep_foreign` (`id_at_rep`),
  ADD KEY `reporte_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_reporte`
--
ALTER TABLE `at_reporte`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capture_datas`
--
ALTER TABLE `capture_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detalle_reporte`
--
ALTER TABLE `detalle_reporte`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domicilio_reporte`
--
ALTER TABLE `domicilio_reporte`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formatos_en_pdf`
--
ALTER TABLE `formatos_en_pdf`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `historial_formatos`
--
ALTER TABLE `historial_formatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_atiende`
--
ALTER TABLE `personal_atiende`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportante`
--
ALTER TABLE `reportante`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capture_datas`
--
ALTER TABLE `capture_datas`
  ADD CONSTRAINT `capture_datas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `formatos_en_pdf`
--
ALTER TABLE `formatos_en_pdf`
  ADD CONSTRAINT `formatos_en_pdf_capture_data_id_foreign` FOREIGN KEY (`capture_data_id`) REFERENCES `capture_datas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `formatos_en_pdf_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `historial_formatos`
--
ALTER TABLE `historial_formatos`
  ADD CONSTRAINT `historial_formatos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `fk_medicos_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_id_at_rep_foreign` FOREIGN KEY (`id_at_rep`) REFERENCES `at_reporte` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reporte_id_det_rep_foreign` FOREIGN KEY (`id_det_rep`) REFERENCES `detalle_reporte` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reporte_id_dom_rep_foreign` FOREIGN KEY (`id_dom_rep`) REFERENCES `domicilio_reporte` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reporte_id_per_at_foreign` FOREIGN KEY (`id_per_at`) REFERENCES `personal_atiende` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reporte_id_reportante_foreign` FOREIGN KEY (`id_reportante`) REFERENCES `reportante` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reporte_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
