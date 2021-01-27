-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27-Jan-2021 às 02:28
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id14658403_projeto_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `FISICAS`
--

CREATE TABLE `FISICAS` (
  `ID` int(10) NOT NULL,
  `CPF` varchar(22) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `JURIDICAS`
--

CREATE TABLE `JURIDICAS` (
  `ID` int(10) NOT NULL,
  `CNPJ` varchar(22) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `PESSOAS`
--

CREATE TABLE `PESSOAS` (
  `ID` int(10) NOT NULL,
  `NOME` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `LOGRADOURO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NUMERO` int(10) NOT NULL,
  `COMPLEMENTO` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `BAIRRO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CIDADE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `CEP` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `FONE1` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `FONE2` varchar(22) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Usuario`
--

CREATE TABLE `Usuario` (
  `ID` int(10) DEFAULT NULL,
  `LOGIN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SENHA` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Usuario`
--

INSERT INTO `Usuario` (`ID`, `LOGIN`, `SENHA`) VALUES
(NULL, 'Gabriel', '123'),
(NULL, 'Gabriel', '123'),
(NULL, 'Gabriel', '123'),
(NULL, 'Gabriel', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `FISICAS`
--
ALTER TABLE `FISICAS`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `JURIDICAS`
--
ALTER TABLE `JURIDICAS`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `PESSOAS`
--
ALTER TABLE `PESSOAS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `PESSOAS`
--
ALTER TABLE `PESSOAS`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `FISICAS`
--
ALTER TABLE `FISICAS`
  ADD CONSTRAINT `PESSOAS_FK` FOREIGN KEY (`ID`) REFERENCES `PESSOAS` (`ID`);

--
-- Limitadores para a tabela `JURIDICAS`
--
ALTER TABLE `JURIDICAS`
  ADD CONSTRAINT `PESSOASJ_FK` FOREIGN KEY (`ID`) REFERENCES `PESSOAS` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
