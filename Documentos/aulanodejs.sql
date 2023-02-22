-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Fev-2023 às 21:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aulanodejs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `nome_animal` varchar(255) NOT NULL,
  `especie_animal` varchar(255) NOT NULL,
  `idade` varchar(255) NOT NULL,
  `descricao_animal` varchar(255) NOT NULL,
  `porte` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `local_animal` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animals`
--

INSERT INTO `animals` (`id`, `nome_animal`, `especie_animal`, `idade`, `descricao_animal`, `porte`, `raca`, `sexo`, `local_animal`, `peso`, `createdAt`, `updatedAt`) VALUES
(25, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:54:53', '2023-02-20 01:54:53'),
(26, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:56:03', '2023-02-20 01:56:03'),
(27, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:56:58', '2023-02-20 01:56:58'),
(28, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:57:42', '2023-02-20 01:57:42'),
(29, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:58:29', '2023-02-20 01:58:29'),
(30, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:58:53', '2023-02-20 01:58:53'),
(31, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 01:59:23', '2023-02-20 01:59:23'),
(32, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:00:00', '2023-02-20 02:00:00'),
(33, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:01:00', '2023-02-20 02:01:00'),
(34, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:01:37', '2023-02-20 02:01:37'),
(35, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:06:56', '2023-02-20 02:06:56'),
(36, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:07:52', '2023-02-20 02:07:52'),
(37, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:09:22', '2023-02-20 02:09:22'),
(38, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:10:38', '2023-02-20 02:10:38'),
(39, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:10:56', '2023-02-20 02:10:56'),
(40, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:11:02', '2023-02-20 02:11:02'),
(41, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:13:16', '2023-02-20 02:13:16'),
(42, 'SPIKE', 'teste', '11', 'TESTE', 'grande', 'ddd', 'm', 'em minha casa', '30', '2023-02-20 02:17:05', '2023-02-20 02:17:05'),
(43, 'emilly', 'teste', '11', 'TESTE', 'grande', 'jj', 'ggggggggggggggg', 'em minha casa', '2', '2023-02-20 02:24:34', '2023-02-20 02:24:34'),
(44, 'emilly', 'cachorro', '3', 'TESTE', 'grande', 'TESTE', 'm', 'd', '2', '2023-02-20 02:28:27', '2023-02-20 02:28:27'),
(45, 'glauber pereira', 'teste', '11', 'TESTE', 'grande', 'jj', 'ggggggggggggggg', 'j', '2', '2023-02-20 03:35:29', '2023-02-20 03:35:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `cpf`, `rg`, `email`, `password_hash`, `sexo`, `nacionalidade`, `token`, `createdAt`, `updatedAt`) VALUES
(2, 'Glauber Costa', '123', '111111', 'glauberbim2018@gmail.com', '$2a$08$oAG4J3s/hRR1oVOa1WpbP.bJlbP5eXqcPK9I41OdNxkCop3fgBXhe', 'sssssssss', 'br', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwiaWF0IjoxNjc3MDM4MDc1fQ.gP7QBQ4L8laIAj8q-0rRIS6pVc2KHtMQdXgsyqbQo60', '2023-02-21 22:41:38', '2023-02-22 03:54:35');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
