-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05-Dez-2022 às 21:15
-- Versão do servidor: 5.7.37
-- versão do PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `compeco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(10) NOT NULL,
  `nomec` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admin1` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nomec`, `email`, `senha`, `admin1`) VALUES
(1, 'Giovana Noski', 'giovana.noksi13@gmail.com', '123456', 0),
(9, 'Giovana Noski', 'giovana.noksi13@gmail.com', '1245', 0),
(10, 'Gigiba', 'giovana.noski@gmail.com', '1234', 1),
(11, 'Sergio Passarinho', 'giovana.13.noski@gmail.com', '123', NULL),
(12, 'Sergio Passarinho', 'giovana.13.noski@gmail.com', 'NBA4F', NULL),
(13, 'Thiago', 'thiago@gmail', 'GA29R', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `descarte`
--

CREATE TABLE `descarte` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `local` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `tipop` varchar(20) NOT NULL,
  `marca` varchar(70) NOT NULL,
  `tempo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `descarte`
--

INSERT INTO `descarte` (`id`, `email`, `local`, `descr`, `tipop`, `marca`, `tempo`) VALUES
(26, 'julia@gmail', 'Etec Elias', 'Bom estado', 'Computador', 'Dell', '3 anos à 5 anos'),
(25, '', 'Etec Elias', 'Bom estado', 'Computador', 'Dell', '5 anos à 10 anos'),
(24, '', 'Etec Elias', 'Bom estado', 'Computador', 'Dell', '5 anos à 10 anos'),
(23, '', 'Etec Elias', 'Bom estado', 'Computador', 'Dell', '5 anos à 10 anos'),
(22, '', 'Etec Elias', 'Bom estado', 'Computador', 'Dell', '5 anos à 10 anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempo`
--

CREATE TABLE `tempo` (
  `id` int(11) NOT NULL,
  `tempo_uso` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tempo`
--

INSERT INTO `tempo` (`id`, `tempo_uso`) VALUES
(1, '1 mês ou menos'),
(2, '1 mês à 3 meses'),
(3, '3 meses à 6 meses'),
(4, '6 meses à 1 ano'),
(5, '1 ano à 3 anos'),
(6, '3 anos à 5 anos'),
(7, '5 anos à 10 anos'),
(8, 'Mais de 10 anos'),
(9, 'Não sei o tempo de uso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `id` int(11) NOT NULL,
  `tipop` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`id`, `tipop`) VALUES
(1, 'Computador'),
(2, 'Impressoras'),
(4, 'Telefones'),
(5, 'Tablets'),
(6, 'Câmeras Fotográficas'),
(7, 'Celulares'),
(8, 'Monitores'),
(9, 'Aparelhos de Som'),
(10, 'Carregadores/Fios'),
(11, 'Teclados'),
(12, 'Mouses'),
(13, 'Estabilizador/Nobreak'),
(14, 'Baterias');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `descarte`
--
ALTER TABLE `descarte`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tempo`
--
ALTER TABLE `tempo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `descarte`
--
ALTER TABLE `descarte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tempo`
--
ALTER TABLE `tempo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
