-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2022 às 00:26
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
-- Banco de dados: `projetobancotest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocao`
--

CREATE TABLE `adocao` (
  `data_adocao` date DEFAULT NULL,
  `hora_adocao` varchar(255) DEFAULT NULL,
  `id_adocao` int(11) NOT NULL,
  `id_adocao_usuario` int(11) NOT NULL,
  `id_adocao_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_animal`
--

CREATE TABLE `cadastro_animal` (
  `id_animal` int(11) NOT NULL,
  `nome_animal` varchar(255) NOT NULL,
  `especie_animal` varchar(255) NOT NULL,
  `idade` int(20) NOT NULL,
  `descricao_pet` varchar(255) NOT NULL,
  `id_animal_usuario` int(11) NOT NULL,
  `porte` varchar(255) NOT NULL,
  `raca` varchar(20) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `local_animal` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `id_doacao` int(11) NOT NULL,
  `dados_doacao` varchar(255) DEFAULT NULL,
  `opcao_doacao` varchar(255) DEFAULT NULL,
  `id_doacao_dinheiro` int(11) NOT NULL,
  `id_doacao_usuario` int(11) NOT NULL,
  `id_doacaodinheiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao_dinheiro`
--

CREATE TABLE `doacao_dinheiro` (
  `cartao_de_credito` varchar(255) DEFAULT NULL,
  `pix` varchar(255) DEFAULT NULL,
  `deposito` varchar(255) DEFAULT NULL,
  `id_opcaodinheiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `rua` varchar(255) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cep` int(11) NOT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `id_endereco_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_animal`
--

CREATE TABLE `imagem_animal` (
  `id_imagem` int(11) NOT NULL,
  `id_id_animal` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saude_animal`
--

CREATE TABLE `saude_animal` (
  `vacinas` varchar(255) DEFAULT NULL,
  `necessidades` varchar(255) DEFAULT NULL,
  `id_saudeanimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `telefone` int(11) NOT NULL,
  `id_telefone_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `cpf` varchar(13) DEFAULT NULL,
  `rg` varchar(9) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `nacionalidade` varchar(255) DEFAULT NULL,
  `id_animal_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `cpf`, `rg`, `email`, `senha`, `sexo`, `nacionalidade`, `id_animal_usuario`) VALUES
(10, 'Naiane ', '999999999', '324567', 'santosnaiane2003@gmail.com', '$2y$10$eIWLqZI2/LEOKOmbOsK3DeE08OdV4XtJd/.XAFZ8b0sijZiHwPSI2', 'feminino', 'brasileira', 0),
(11, 'jose', '25', '111', 'teste123@gmail.com', '$2y$10$uIwiPDVQHz/U1S2w16mbf.Fydq4BrE6NtkYbfmY7RfbEdWM7dJyyq', 'm', 'BR', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntarios`
--

CREATE TABLE `voluntarios` (
  `id_voluntario` int(11) NOT NULL,
  `funcao_voluntaria` varchar(255) DEFAULT NULL,
  `disponibilidade` varchar(255) DEFAULT NULL,
  `duracao` varchar(255) DEFAULT NULL,
  `id_voluntario_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adocao`
--
ALTER TABLE `adocao`
  ADD PRIMARY KEY (`id_adocao`),
  ADD KEY `fk_adocao_usuario` (`id_adocao_usuario`),
  ADD KEY `fk_adocao_animal` (`id_adocao_animal`);

--
-- Índices para tabela `cadastro_animal`
--
ALTER TABLE `cadastro_animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD KEY `fk_usuario_animal` (`id_animal_usuario`);

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id_doacao`),
  ADD KEY `fk_doacao_usuario` (`id_doacao_usuario`);

--
-- Índices para tabela `doacao_dinheiro`
--
ALTER TABLE `doacao_dinheiro`
  ADD PRIMARY KEY (`id_opcaodinheiro`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco_usuario`);

--
-- Índices para tabela `imagem_animal`
--
ALTER TABLE `imagem_animal`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `fk_imagem_animal` (`id_id_animal`);

--
-- Índices para tabela `saude_animal`
--
ALTER TABLE `saude_animal`
  ADD PRIMARY KEY (`id_saudeanimal`);

--
-- Índices para tabela `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`id_telefone_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD PRIMARY KEY (`id_voluntario`),
  ADD KEY `fk_voluntarios_usuario` (`id_voluntario_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_animal`
--
ALTER TABLE `cadastro_animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `imagem_animal`
--
ALTER TABLE `imagem_animal`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adocao`
--
ALTER TABLE `adocao`
  ADD CONSTRAINT `fk_adocao_animal` FOREIGN KEY (`id_adocao_animal`) REFERENCES `cadastro_animal` (`id_animal`),
  ADD CONSTRAINT `fk_adocao_usuario` FOREIGN KEY (`id_adocao_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk_doacao_usuario` FOREIGN KEY (`id_doacao_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `doacao_dinheiro`
--
ALTER TABLE `doacao_dinheiro`
  ADD CONSTRAINT `fk_opcao_doacao` FOREIGN KEY (`id_opcaodinheiro`) REFERENCES `doacao` (`id_doacao`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_usuario` FOREIGN KEY (`id_endereco_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `imagem_animal`
--
ALTER TABLE `imagem_animal`
  ADD CONSTRAINT `fk_imagem_animal` FOREIGN KEY (`id_id_animal`) REFERENCES `cadastro_animal` (`id_animal`);

--
-- Limitadores para a tabela `saude_animal`
--
ALTER TABLE `saude_animal`
  ADD CONSTRAINT `fk_saude_animal` FOREIGN KEY (`id_saudeanimal`) REFERENCES `cadastro_animal` (`id_animal`);

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `fk_telefone_usuario` FOREIGN KEY (`id_telefone_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `voluntarios`
--
ALTER TABLE `voluntarios`
  ADD CONSTRAINT `fk_voluntarios_usuario` FOREIGN KEY (`id_voluntario_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
