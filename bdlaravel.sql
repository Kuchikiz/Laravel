-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Out-2022 às 13:47
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlaravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

DROP TABLE IF EXISTS `tbcategoria`;
CREATE TABLE IF NOT EXISTS `tbcategoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

DROP TABLE IF EXISTS `tbcliente`;
CREATE TABLE IF NOT EXISTS `tbcliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `genero` varchar(40) DEFAULT NULL,
  `estadoCivil` varchar(40) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(40) DEFAULT NULL,
  `cep` varchar(40) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `fone` int(10) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedido`
--

DROP TABLE IF EXISTS `tbpedido`;
CREATE TABLE IF NOT EXISTS `tbpedido` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `rastrear` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpedido`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

DROP TABLE IF EXISTS `tbproduto`;
CREATE TABLE IF NOT EXISTS `tbproduto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(60) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
