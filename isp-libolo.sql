-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Nov-2026 às 08:57
-- Versão do servidor: 8.0.46-0ubuntu0.24.04.4
-- versão do PHP: 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `isp-libolo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int NOT NULL,
  `nome` text NOT NULL,
  `codigo` text NOT NULL,
  `coordenador` int NOT NULL,
  `duracao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`, `codigo`, `coordenador`, `duracao`) VALUES
(1, 'Direito', 'CU-0001', 1, 5),
(2, 'Gestão Empresarial', 'CU-0002', 1, 4),
(3, 'Comunicação Social', 'CU-0003', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faculdade`
--

CREATE TABLE `faculdade` (
  `id_faculdade` int NOT NULL,
  `faculdade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `data_abertura` timestamp NULL DEFAULT NULL,
  `decano` int NOT NULL,
  `vice_decano_academica` int NOT NULL,
  `vice_decano_cientifica` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `faculdade`
--

INSERT INTO `faculdade` (`id_faculdade`, `faculdade`, `codigo`, `data_abertura`, `decano`, `vice_decano_academica`, `vice_decano_cientifica`) VALUES
(1, 'Direito', 'FD-0001', '2000-12-31 23:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int NOT NULL,
  `codigo` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `nome` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `nif` varchar(14) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `genero` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `formacao` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `nivel` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `funcao` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `imagem` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `telefone` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `codigo`, `nome`, `nif`, `genero`, `data_nascimento`, `formacao`, `nivel`, `funcao`, `imagem`, `email`, `telefone`, `data_cadastro`, `data_atualizado`, `usuario`) VALUES
(1, 'FU-0001', 'Paulo Victor Armando', '940523444', 'Masculino', '2026-11-04', 'Professor', 'Licenciatura', 'Professor', '', 'paulovictorarmando@hotmail.com', '940523444', '2026-11-06 13:51:21', '2026-11-06 13:51:21', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id_turma` int NOT NULL,
  `nome` text NOT NULL,
  `codigo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `periodo` text NOT NULL,
  `nivel` int NOT NULL,
  `curso` int NOT NULL,
  `limite` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `nome`, `codigo`, `periodo`, `nivel`, `curso`, `limite`) VALUES
(1, 'TM-B', 'TM-001', 'Manhã', 1, 1, 20),
(2, 'TM-B', 'TM-001', 'Manhã', 1, 2, 20),
(3, 'TM-A', 'TM-001', 'Manhã', 2, 2, 60),
(4, 'TM-A', 'TM-001', 'Tarde', 2, 1, 40),
(5, 'TM-E', 'TM-001', 'Noite', 5, 1, 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int NOT NULL,
  `nome` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `perfil` enum('admin','secretaria','contabilidade','coordenador','professor','aluno') CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `email`, `perfil`, `senha`, `foto`, `data_cadastro`) VALUES
(3, 'paulo', 'paulo@gmail.com', 'contabilidade', '$2y$10$33e7epuI4smtIQIp6xJX9eNETFw5JTySOyhTBhUP/vH17kDGfZVoO', '503f777fb76008af289207a80ec56567.jpeg', '2026-10-17 22:07:29'),
(4, 'paulina', 'paulina@gmail.com', 'coordenador', '$2y$10$nu1XqUMtGu73k52nLoMhTuD877h7IERIT9syGpRGjDQJUPyFBuFeC', '58d8bc05750bfb192f69e4ded0f1eafa.jpeg', '2026-10-17 22:09:28'),
(6, 'timoteo', 'atimoteoelias@gmail.com', 'admin', '$2y$10$qWlP87zs.LGIh1VBUwlSMexQvhvfq6R1vI38PEytYw3E5TMHebCMq', 'bd2923d3ae30614810221432a8a2fc5c.jpeg', '2026-10-17 22:38:01'),
(7, 'Helena', 'helena@gmail.com', 'contabilidade', '$2y$10$kwp1Xi9kbDUxMCVyN2GPduCqoA97C37H0FKlwrjznn8mR15DLb/1e', 'f97a57fa1c5d6fb91d2daa44072f326b.jpeg', '2026-10-17 22:42:13'),
(10, 'jose', 'jose@gmail.com', 'admin', '$2y$10$KxVwdALvwsY8bk1mINxg6ujIrQhwWVKDU0yrO/usvnxosoYD5SYW6', '3cd18d0ef34dcf6986c3fa8a4ff9f589.jpeg', '2026-10-18 00:33:48'),
(11, 'Cristina', 'cristina@gmail.com', 'secretaria', '$2y$10$7mf/xtwo3Zax7LyNb2UsmeHpuz6DkwiW07zxYoMEWG20s8XNMaUhC', '5bb86c6fa95435a0d1ba86c71a4336b8.jpeg', '2026-10-18 00:37:35'),
(13, 'coordenador', 'cordenador@gmail.com', 'coordenador', '$2y$12$lMHGjDDuoCRfRPt4uVJ4OuquZzB.3Kya.AatkCjKBVB3XsmZj1Aoi', '', '2026-11-12 22:05:32');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `cordenador` (`coordenador`);

--
-- Índices para tabela `faculdade`
--
ALTER TABLE `faculdade`
  ADD PRIMARY KEY (`id_faculdade`),
  ADD KEY `decano` (`decano`),
  ADD KEY `vice_decano_academica` (`vice_decano_academica`),
  ADD KEY `vice_decano_cientifica` (`vice_decano_cientifica`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `usuario` (`usuario`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `faculdade`
--
ALTER TABLE `faculdade`
  MODIFY `id_faculdade` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`coordenador`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `faculdade`
--
ALTER TABLE `faculdade`
  ADD CONSTRAINT `faculdade_ibfk_1` FOREIGN KEY (`decano`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculdade_ibfk_2` FOREIGN KEY (`vice_decano_academica`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculdade_ibfk_3` FOREIGN KEY (`vice_decano_cientifica`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
