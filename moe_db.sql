-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2021 às 01:26
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moe_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `tipo` varchar(3) DEFAULT NULL,
  `empresa_nome` varchar(120) DEFAULT NULL,
  `empresa_endereco` varchar(360) DEFAULT NULL,
  `empresa_contato` varchar(120) DEFAULT NULL,
  `empresa_descricao` text DEFAULT NULL,
  `est_nome` varchar(120) DEFAULT NULL,
  `est_curso` varchar(120) DEFAULT NULL,
  `est_ano` varchar(4) DEFAULT NULL,
  `est_curriculo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `tipo`, `empresa_nome`, `empresa_endereco`, `empresa_contato`, `empresa_descricao`, `est_nome`, `est_curso`, `est_ano`, `est_curriculo`) VALUES
(1, 'empresa@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '1', '', '', '', '', NULL, NULL, NULL, NULL),
(2, 'estagiario@email.com', '81dc9bdb52d04dc20036dbd8313ed055', '2', '', '', '', '', NULL, NULL, NULL, NULL),
(11, 'email@this.com', 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, NULL, NULL, NULL, 'Waldemar', 'Engenharia Civil', '1998', 'dasj kldja klsjdlk ajkdl j');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
