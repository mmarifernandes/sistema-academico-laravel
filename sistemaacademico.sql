-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2022 às 15:55
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemaacademico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunodisciplina`
--

CREATE TABLE `alunodisciplina` (
  `aluno` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `frequencia` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunodisciplina`
--

INSERT INTO `alunodisciplina` (`aluno`, `disciplina`, `id`, `nota`, `frequencia`, `updated_at`, `created_at`) VALUES
(46474718, 94745162, 1168, NULL, NULL, '2022-06-26 23:38:50', '2022-06-26 23:38:50'),
(10700637, 41193308, 1220, 7, 74, '2022-06-26 21:23:37', '2022-06-26 21:16:03'),
(123, 40227631, 1378, 7, 75, '2022-06-26 19:57:41', '2022-06-24 14:11:05'),
(53955706, 65622266, 1438, NULL, NULL, '2022-06-26 23:40:54', '2022-06-26 23:40:54'),
(123, 65622266, 1537, 6, 90, '2022-06-24 16:36:58', '2022-06-23 01:42:57'),
(38137904, 19824442, 1539, NULL, NULL, '2022-07-01 13:54:26', '2022-07-01 13:54:26'),
(43608490, 45835944, 1727, NULL, NULL, '2022-06-26 19:37:24', '2022-06-26 19:37:24'),
(95863811, 41193308, 1891, NULL, NULL, '2022-06-26 23:56:28', '2022-06-26 23:56:28'),
(10700637, 65622266, 2028, NULL, NULL, '2022-06-26 23:37:18', '2022-06-26 23:37:18'),
(43608490, 41193308, 2044, NULL, NULL, '2022-06-26 23:52:02', '2022-06-26 23:52:02'),
(30927819, 41193308, 2273, 8, 90, '2022-06-26 21:22:28', '2022-06-26 21:17:56'),
(89912527, 40227631, 2310, NULL, NULL, '2022-06-26 23:55:45', '2022-06-26 23:55:45'),
(53955706, 41193308, 2438, NULL, NULL, '2022-06-26 23:40:49', '2022-06-26 23:40:49'),
(123, 50157764, 2561, 7, 88, '2022-06-26 21:31:40', '2022-06-24 19:04:28'),
(53955706, 40227631, 2825, NULL, NULL, '2022-06-26 23:40:44', '2022-06-26 23:40:44'),
(10700637, 45835944, 2869, NULL, NULL, '2022-06-26 23:37:23', '2022-06-26 23:37:23'),
(46474718, 95787429, 3029, 7, 67, '2022-06-24 17:10:09', '2022-06-24 17:09:31'),
(43608490, 95787429, 3458, NULL, NULL, '2022-06-26 19:37:12', '2022-06-26 19:37:12'),
(89912527, 41193308, 3883, NULL, NULL, '2022-06-27 00:00:38', '2022-06-27 00:00:38'),
(43608490, 50157764, 4036, NULL, NULL, '2022-06-26 23:52:07', '2022-06-26 23:52:07'),
(46474718, 50157764, 4199, 8, 88, '2022-06-24 17:10:15', '2022-06-24 17:09:40'),
(46474718, 41193308, 4374, NULL, NULL, '2022-06-26 23:38:56', '2022-06-26 23:38:56'),
(234, 41193308, 4438, 9, NULL, '2022-06-26 21:18:16', '2022-06-24 16:43:27'),
(123, 94745162, 4476, 8, 90, '2022-06-24 16:42:28', '2022-06-24 16:36:43'),
(123, 68967880, 4487, NULL, NULL, '2022-06-24 19:04:18', '2022-06-24 19:04:18'),
(46474718, 40227631, 4505, NULL, NULL, '2022-06-26 23:38:59', '2022-06-26 23:38:59'),
(234, 40227631, 4562, 9, 88, '2022-06-24 16:43:03', '2022-06-24 16:42:42'),
(43608490, 40227631, 5023, 6, 89, '2022-07-01 13:42:42', '2022-06-27 00:00:53'),
(123, 45835944, 5508, NULL, 66, '2022-06-24 16:42:01', '2022-06-24 15:51:42'),
(46474718, 68967880, 5933, 5, 78, '2022-06-24 17:10:20', '2022-06-24 17:09:36'),
(48158028, 65622266, 6553, NULL, NULL, '2022-06-26 23:56:12', '2022-06-26 23:56:12'),
(53955706, 50157764, 6563, NULL, NULL, '2022-06-26 23:50:35', '2022-06-26 23:50:35'),
(48158028, 41193308, 6782, NULL, NULL, '2022-06-26 23:55:59', '2022-06-26 23:55:59'),
(89912527, 65622266, 7386, NULL, NULL, '2022-06-27 00:01:53', '2022-06-27 00:01:53'),
(10700637, 40227631, 7395, NULL, NULL, '2022-06-26 21:09:19', '2022-06-26 21:09:19'),
(234, 95787429, 7671, NULL, NULL, '2022-06-26 21:08:51', '2022-06-26 21:08:51'),
(123, 41193308, 7766, 3, NULL, '2022-06-26 21:18:20', '2022-06-24 16:36:30'),
(48158028, 45835944, 8257, NULL, NULL, '2022-06-26 23:56:03', '2022-06-26 23:56:03'),
(234, 45835944, 8595, 7, 7, '2022-07-01 13:22:18', '2022-06-26 23:34:59'),
(48158028, 40227631, 8636, 8, NULL, '2022-06-24 15:44:19', '2022-06-23 00:42:44'),
(53955706, 45835944, 8653, 5, 89, '2022-06-24 18:20:21', '2022-06-24 16:56:58'),
(38137904, 21188105, 8739, NULL, NULL, '2022-07-01 13:54:21', '2022-07-01 13:54:21'),
(10700637, 94745162, 8842, NULL, NULL, '2022-06-26 21:16:09', '2022-06-26 21:16:09'),
(43608490, 68967880, 9029, NULL, NULL, '2022-06-26 19:37:17', '2022-06-26 19:37:17'),
(234, 94745162, 9264, NULL, NULL, '2022-07-01 13:25:42', '2022-07-01 13:25:42'),
(123, 95787429, 9367, NULL, NULL, '2022-06-24 19:04:22', '2022-06-24 19:04:22'),
(38137904, 40227631, 9687, NULL, NULL, '2022-07-01 13:46:34', '2022-07-01 13:46:34'),
(89912527, 45835944, 9999, NULL, NULL, '2022-06-27 00:01:48', '2022-06-27 00:01:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `email`, `updated_at`, `created_at`) VALUES
(123, 'Marina Fernandes', 'marinafernandess103@gmail.com', '2022-06-20 22:11:05', '2022-06-20 22:11:05'),
(234, 'Daniele Fiori', 'daniele@fiori.com', '2022-06-21 01:33:28', '2022-06-21 01:33:28'),
(10700637, 'Adriele Colossi', 'adriele@adriele.com', '2022-06-26 19:36:47', '2022-06-26 19:36:47'),
(30927819, 'Teste Tester', 'teste@teste.com', '2022-06-22 13:21:53', '2022-06-22 13:21:53'),
(38137904, 'Pablo Escobar', 'pablo@pablo.com', '2022-07-01 13:45:54', '2022-07-01 13:45:54'),
(43608490, 'Sabrina Freitas', 'sabrina@freitas.com', '2022-06-26 19:36:57', '2022-06-26 19:36:57'),
(46474718, 'Alessandro Fernandes', 'alessandrofernandess125@gmail.com', '2022-06-22 13:21:18', '2022-06-22 13:21:18'),
(48158028, 'asdasd', 'alessandrofernandess125@gmail.com', '2022-06-22 13:46:40', '2022-06-22 13:46:40'),
(53955706, 'Fabio Assunção', 'fabio@fabio.com', '2022-06-24 16:44:26', '2022-06-24 16:44:26'),
(89912527, 'jesuais', 'asdad@asd.com', '2022-06-22 13:46:56', '2022-06-22 13:46:56'),
(95863811, 'Teste Tester', 'teste@teste.com', '2022-06-22 13:22:16', '2022-06-22 13:22:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `professor` int(11) NOT NULL,
  `cargahoraria` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`codigo`, `nome`, `professor`, `cargahoraria`, `updated_at`, `created_at`) VALUES
(19824442, 'Português II', 95006487, 8, '2022-06-27 00:04:19', '2022-06-27 00:04:19'),
(21188105, 'Espanhol', 52139787, 6, '2022-07-01 13:44:32', '2022-07-01 13:44:32'),
(40227631, 'Português', 73166487, 8, '2022-06-22 14:34:40', '2022-06-22 14:34:40'),
(41193308, 'Desenvolvimento de Sistemas I', 72695305, 12, '2022-06-24 16:36:06', '2022-06-24 16:36:06'),
(45835944, 'Química', 82804104, 10, '2022-06-23 01:48:56', '2022-06-23 01:48:56'),
(50157764, 'História', 72407761, 8, '2022-06-24 17:08:36', '2022-06-24 17:08:36'),
(65622266, 'Matemática', 69178889, 12, '2022-06-22 17:24:36', '2022-06-22 17:24:36'),
(68967880, 'Geografia', 72407761, 8, '2022-06-24 17:08:15', '2022-06-24 17:08:15'),
(73414314, 'Educação Física', 44801328, 12, '2022-06-26 23:57:05', '2022-06-26 23:57:05'),
(94745162, 'Desenvolvimento de Sistemas II', 52139787, 12, '2022-06-24 16:36:18', '2022-06-24 16:36:18'),
(95787429, 'Filosofia', 74846661, 8, '2022-06-24 17:09:17', '2022-06-24 17:09:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_20_220018_sistemaacademico', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`codigo`, `nome`, `email`, `updated_at`, `created_at`) VALUES
(44801328, 'Selena Gomez', 'selena@selena.com', '2022-06-26 23:56:46', '2022-06-26 23:56:46'),
(52139787, 'Vinicius Silva', 'vini@vini.com', '2022-06-24 16:35:43', '2022-06-24 16:35:43'),
(69178889, 'João da Silva', 'joao@joao.com', '2022-06-22 14:29:22', '2022-06-22 14:29:22'),
(72407761, 'Claudia Silva', 'claudia@claudia.com', '2022-06-24 16:33:35', '2022-06-24 16:33:35'),
(72695305, 'Eduardo Brião', 'briao@briao.com', '2022-06-24 16:35:28', '2022-06-24 16:35:28'),
(73166487, 'Carla', 'carlamaria@crla.com', '2022-06-22 14:03:38', '2022-06-22 14:03:38'),
(74846661, 'Paulo Roberto', 'paulo@paulo.com', '2022-06-24 16:35:12', '2022-06-24 16:35:12'),
(82804104, 'Roberto Carlos', 'roberto@carlos.com', '2022-06-22 18:31:07', '2022-06-22 18:31:07'),
(95006487, 'Alessandro Fernandes', 'aa@aa.com', '2022-06-24 16:34:46', '2022-06-24 16:34:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunodisciplina`
--
ALTER TABLE `alunodisciplina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunodisciplina_ibfk_1` (`aluno`),
  ADD KEY `disciplina` (`disciplina`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `professor` (`professor`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunodisciplina`
--
ALTER TABLE `alunodisciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunodisciplina`
--
ALTER TABLE `alunodisciplina`
  ADD CONSTRAINT `alunodisciplina_ibfk_1` FOREIGN KEY (`aluno`) REFERENCES `alunos` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alunodisciplina_ibfk_2` FOREIGN KEY (`disciplina`) REFERENCES `disciplinas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_2` FOREIGN KEY (`professor`) REFERENCES `professores` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
