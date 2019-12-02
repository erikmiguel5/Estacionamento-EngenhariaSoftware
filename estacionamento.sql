-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2019 às 04:11
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `numeroVaga` int(11) NOT NULL,
  `situacao` int(1) NOT NULL,
  `data` int(11) DEFAULT NULL,
  `hora` int(6) DEFAULT NULL,
  `dataSaida` int(11) NOT NULL,
  `horaSaida` int(11) NOT NULL,
  `valorPagar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`numeroVaga`, `situacao`, `data`, `hora`, `dataSaida`, `horaSaida`, `valorPagar`) VALUES
(1, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0),
(3, 0, NULL, NULL, 0, 0, 0),
(4, 0, NULL, NULL, 0, 0, 0),
(5, 0, NULL, NULL, 0, 0, 0),
(6, 0, NULL, NULL, 0, 0, 0),
(7, 0, NULL, NULL, 0, 0, 0),
(8, 0, NULL, NULL, 0, 0, 0),
(9, 0, NULL, NULL, 0, 0, 0),
(10, 0, NULL, NULL, 0, 0, 0),
(11, 0, NULL, NULL, 0, 0, 0),
(12, 0, NULL, NULL, 0, 0, 0),
(13, 1, 2, 0, 0, 0, 0),
(14, 0, NULL, NULL, 0, 0, 0),
(15, 0, NULL, NULL, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0),
(17, 0, NULL, NULL, 0, 0, 0),
(18, 0, NULL, NULL, 0, 0, 0),
(19, 0, NULL, NULL, 0, 0, 0),
(20, 0, NULL, NULL, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0),
(22, 0, NULL, NULL, 0, 0, 0),
(23, 0, NULL, NULL, 0, 0, 0),
(24, 0, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagareserva`
--

CREATE TABLE `vagareserva` (
  `numeroVaga` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  `tipoReserva` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagareserva`
--

INSERT INTO `vagareserva` (`numeroVaga`, `situacao`, `tipoReserva`, `mes`, `dia`, `ano`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`numeroVaga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
