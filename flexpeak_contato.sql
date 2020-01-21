-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jan-2020 às 19:21
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `flexpeak_contato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `corporate_name` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `companies`
--

INSERT INTO `companies` (`id`, `name`, `corporate_name`, `cnpj`, `street`, `number`, `district`, `city`, `uf`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'NuBank', 'NU PAGAMENTOS SA', '01.105.500/0001-55', 'Av. das Hortências', '14', 'Vila Real', 'Curitiba', 'PR', 6, '2020-01-21 01:08:32', '2020-01-21 01:08:32'),
(10, 'Apple', 'APPLE TECH SA', '07.984.007/0498-40', 'Av. Paulista', '1230', 'Paulista', 'São Paulo', 'SP', 6, '2020-01-21 01:15:45', '2020-01-21 01:17:53'),
(11, 'Hiper DB', 'DB SUPERMERCADOS E COMERCIO LTDA', '08.648.498/1094-98', 'Av. Cel. Texeira', '4500', 'Ponta negra', 'Manaus', 'AM', 6, '2020-01-21 02:53:32', '2020-01-21 02:53:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `cpf`, `street`, `district`, `number`, `city`, `uf`, `photo`, `user_id`, `company_id`, `role_id`, `created_at`, `updated_at`) VALUES
(22, 'Leonardo Augusto Noronha Leão', 'leonardongl@gmail.com', '(92) 98114-6884', '011.283.242-37', 'Rua Paranapanema', 'Lírio do Vale', '113', 'Manaus', 'AM', 'images/4roCUExsl0SRET3ulKB5mXQvwBiUDJlGdcGqA319.jpeg', 6, 10, 3, '2020-01-21 01:11:51', '2020-01-21 01:16:17'),
(23, 'Sarah Nakamura', 'sarah@nubank.com.br', '(21) 98658-1001', '089.279.870-80', 'Rua 24', 'Novo Horizonte', '1001', 'Curitiba', 'PR', 'images/Y4uuHTyeRVRgfMgVkZN8y8LGo9LHl48vovwlmdED.png', 6, 8, 4, '2020-01-21 01:13:42', '2020-01-21 02:52:35'),
(24, 'Pedro Silva', 'pedrosilva@db.com.br', '(92) 99889-0980', '050.498.470-87', 'Av. São Jorge', 'São Jorge', '156', 'Manaus', 'AM', 'images/n92XFBm9W9faGr5g0nk9NLFyYIT2Svq6Tq7KLtSg.png', 6, 11, 9, '2020-01-21 02:57:24', '2020-01-21 02:57:24'),
(25, 'Ana Maria', 'anamaria@db.com.br', '(92) 98819-7909', '018.946.078-40', 'Av. Belo Horizonte', 'Adrianópolis', '355', 'Manaus', 'AM', 'images/wrlE9Z5pak30V8omO3GIOGJ24rFTxHi2YYmdMqMe.png', 6, 11, 7, '2020-01-21 02:58:26', '2020-01-21 02:58:26'),
(26, 'Carlos João', 'carlosjoao@db.com.br', '(92) 98979-0636', '897.880.979-07', 'Rua vinte', 'Lirio do vale', '15', 'Manaus', 'AM', 'images/63dBRSGArwjxdpyRdOnHo9Dst7Z2hBdbq7QvhBVs.png', 6, 11, 11, '2020-01-21 02:59:15', '2020-01-21 02:59:15'),
(27, 'Luisa Silva', 'luisa@gmail.com', '(31) 99097-0809', '879.031.035-47', 'Av. raimundo silva', 'Higienópolis', '14', 'São paulo', 'SP', 'images/yrq3CmfcqimdsN4YBMeve60e7O7Vpe1lKSyrbChL.png', 6, 10, 3, '2020-01-21 03:00:52', '2020-01-21 03:00:52');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Desenvolvedor Júnior', 6, '2020-01-21 01:04:42', '2020-01-21 01:05:41'),
(4, 'Desenvolvedor Pleno', 6, '2020-01-21 01:05:33', '2020-01-21 01:05:33'),
(5, 'Desenvolvedor Sênior', 6, '2020-01-21 01:05:55', '2020-01-21 01:05:55'),
(7, 'Analista', 6, '2020-01-21 01:06:05', '2020-01-21 01:06:05'),
(8, 'Vendedor', 6, '2020-01-21 01:16:42', '2020-01-21 01:16:42'),
(9, 'Consultor', 6, '2020-01-21 01:16:51', '2020-01-21 01:16:51'),
(10, 'Caixa', 6, '2020-01-21 02:54:09', '2020-01-21 02:54:09'),
(11, 'Estoquista', 6, '2020-01-21 02:54:16', '2020-01-21 02:54:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Leonardo Noronha', 'leonardongl@gmail.com', NULL, '$2y$10$Z7UvWf.x7aaI25pZu7nSDePuNkbuda961gBSIL7J/tCf3PI/ubM.K', 'A4wUzO8PoNAJtiMQecDX0ub6301p4LgNgN8l12eDzmMGRyp3GcrsXjSfSqeI', '2020-01-21 01:04:28', '2020-01-21 01:04:28'),
(7, 'Sr Tester', 'teste@teste.com', NULL, '$2y$10$V79WYPSfXS.YjXfKDuIcDOGT4MoK7nn0gALaq4R.vkA3JU10ZMg06', 'No3qOWweQD1Ewpttr4rJuEbvRa0oWzNkwx6UGIPlcovQXNPfIZdd5jHT8rvr', '2020-01-21 03:01:41', '2020-01-21 03:01:41');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
