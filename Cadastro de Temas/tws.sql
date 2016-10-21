-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Out-2016 às 19:28
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tws`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `tw_item`
--

CREATE TABLE `tw_item` (
  `it_nome` varchar(50) NOT NULL,
  `it_id` int(11) NOT NULL,
  `it_audio` varchar(256) NOT NULL,
  `it_imagem` varchar(256) NOT NULL,
  `it_tm_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tw_tema`
--

CREATE TABLE `tw_tema` (
  `tm_nome` varchar(45) NOT NULL,
  `tm_codigo` int NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--

--
-- Indexes for table `tw_item`
--
ALTER TABLE `tw_item`
  ADD PRIMARY KEY (`it_id`),
  ADD KEY `it_tm_fk` (`it_tm_codigo`);

--
-- Indexes for table `tw_tema`
--
ALTER TABLE `tw_tema`
  ADD PRIMARY KEY (`tm_codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tw_item`
--
ALTER TABLE `tw_item`
  MODIFY `it_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tw_tema`
--
ALTER TABLE `tw_tema`
  MODIFY `tm_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tw_item`
--
ALTER TABLE `tw_item`
  ADD CONSTRAINT `it_tm_fk` FOREIGN KEY (`it_tm_codigo`) REFERENCES `tw_tema` (`tm_codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
