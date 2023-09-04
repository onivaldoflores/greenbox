-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Set-2023 às 18:15
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `greenbox_db`
--
CREATE DATABASE IF NOT EXISTS `greenbox_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `greenbox_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int NOT NULL,
  `nome_categoria` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_noticia` int NOT NULL,
  `foto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `legenda` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `id_noticia`, `foto`, `legenda`) VALUES
(1, 13, 'qrcode_suap.ifpr.edu.br.png', 'teste'),
(2, 14, '', 'teste'),
(3, 15, '', 'teste'),
(4, 16, '', 'teste'),
(5, 17, '', 'teste'),
(13, 37, 'a-paisagem-bonita-do-sol-da-praia-com-um-barco_1112-212.avif', 'paisagem'),
(8, 32, 'Captura de tela 2023-05-02 113044.png', 'asadasd'),
(9, 33, 'Captura de tela 2023-05-02 113044.png', 'asadasd'),
(11, 35, 'Captura de tela 2023-05-04 140710.png', 'asadasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote`
--

DROP TABLE IF EXISTS `lote`;
CREATE TABLE IF NOT EXISTS `lote` (
  `id` int NOT NULL,
  `id_propriedades` int NOT NULL,
  `tipo_solo` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_producao` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `data_plantio` date NOT NULL,
  `data_colheita` date NOT NULL,
  `tipo_adubagem` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `texto` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`) VALUES
(13, 'teste', 0x7465737465),
(14, 'teste', 0x7465737465),
(15, 'teste', 0x7465737465),
(16, 'teste', 0x7465737465),
(17, 'teste', 0x7465737465),
(37, 'teste imagem', 0x746573746520696d6167656d),
(32, 'teste', 0x6173646164),
(33, 'teste', 0x6173646164),
(35, 'teste', 0x6173646164);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL,
  `id_categoria` int NOT NULL,
  `id_lote` int NOT NULL,
  `nome_produto` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `preco` float NOT NULL,
  `descricao` blob NOT NULL,
  `unidade_medida` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `propriedades`
--

DROP TABLE IF EXISTS `propriedades`;
CREATE TABLE IF NOT EXISTS `propriedades` (
  `id` int NOT NULL,
  `nome` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `proprietários` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `certificacao` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Onivaldo Flores Junior', 'onivaldo.junior@ifpr.edu.br', '123456'),
(3, 'teste1', 'teste1', 'teste1'),
(10, 'Onivaldo teste', 'onivaldo.junior@ifpr.edu.br1234', '123456'),
(6, 'testeabc', 'testeabc', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
