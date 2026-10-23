-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Tempo de geração: 23-Out-2026 às 20:28
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dados: `isp-libolo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int NOT NULL,
  `nome` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `perfil` enum('admin','secretaria','contabilidade','coordenador','professor','aluno') COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
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
(11, 'Cristina', 'cristina@gmail.com', 'secretaria', '$2y$10$7mf/xtwo3Zax7LyNb2UsmeHpuz6DkwiW07zxYoMEWG20s8XNMaUhC', '5bb86c6fa95435a0d1ba86c71a4336b8.jpeg', '2026-10-18 00:37:35');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
