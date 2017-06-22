-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Jun-2017 às 03:30
-- Versão do servidor: 5.7.18-log
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comandadb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cozinha`
--

CREATE TABLE `cozinha` (
  `coz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cozinha_has_pedido`
--

CREATE TABLE `cozinha_has_pedido` (
  `cozinha_coz_id` int(11) NOT NULL,
  `pedido_pedido_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `func_id` int(11) NOT NULL,
  `func_nome` varchar(45) NOT NULL,
  `func_login` varchar(45) NOT NULL,
  `func_senha` varchar(45) NOT NULL,
  `tipo_tipo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`func_id`, `func_nome`, `func_login`, `func_senha`, `tipo_tipo_id`) VALUES
(2, 'Juliano', 'precision', 'silver', 1),
(3, 'Gabriel', 'admin', 'admin', 1),
(4, 'Matheus', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_has_mesa`
--

CREATE TABLE `funcionario_has_mesa` (
  `funcionario_func_id` int(11) NOT NULL,
  `funcionario_tipo_tipo_id` int(11) NOT NULL,
  `mesa_mesa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `mesa_id` int(11) NOT NULL,
  `mesa_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`mesa_id`, `mesa_num`) VALUES
(36, 1),
(37, 2),
(38, 3),
(39, 4),
(40, 5),
(41, 6),
(42, 7),
(43, 8),
(44, 9),
(54, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa_has_pedido`
--

CREATE TABLE `mesa_has_pedido` (
  `mesa_mesa_id` int(11) NOT NULL,
  `pedido_pedido_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `pedido_id` int(11) NOT NULL,
  `pedido_qtn` varchar(45) NOT NULL,
  `pedido_nome` varchar(45) NOT NULL,
  `pedido_descr` varchar(45) DEFAULT NULL,
  `pedido_hora` varchar(45) DEFAULT NULL,
  `mesa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`pedido_id`, `pedido_qtn`, `pedido_nome`, `pedido_descr`, `pedido_hora`, `mesa`) VALUES
(11, '2', 'Produto1', NULL, NULL, 'Mesa 6'),
(12, '3', 'Produto1', NULL, NULL, 'Mesa 3'),
(18, '2', 'Produto1', NULL, NULL, 'Mesa 10'),
(22, '2', 'Produto1', NULL, NULL, 'Mesa 5'),
(23, '1', 'Produto1', NULL, NULL, 'Mesa 2'),
(24, '4', 'Produto1', NULL, NULL, 'Mesa 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`tipo_id`, `tipo_nome`) VALUES
(1, 'Gerente'),
(2, 'Funcionário');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cozinha`
--
ALTER TABLE `cozinha`
  ADD PRIMARY KEY (`coz_id`);

--
-- Indexes for table `cozinha_has_pedido`
--
ALTER TABLE `cozinha_has_pedido`
  ADD PRIMARY KEY (`cozinha_coz_id`,`pedido_pedido_id`),
  ADD KEY `fk_cozinha_has_pedido_pedido1_idx` (`pedido_pedido_id`),
  ADD KEY `fk_cozinha_has_pedido_cozinha1_idx` (`cozinha_coz_id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`func_id`,`tipo_tipo_id`),
  ADD KEY `fk_funcionario_tipo_idx` (`tipo_tipo_id`);

--
-- Indexes for table `funcionario_has_mesa`
--
ALTER TABLE `funcionario_has_mesa`
  ADD PRIMARY KEY (`funcionario_func_id`,`funcionario_tipo_tipo_id`,`mesa_mesa_id`),
  ADD KEY `fk_funcionario_has_mesa_mesa1_idx` (`mesa_mesa_id`),
  ADD KEY `fk_funcionario_has_mesa_funcionario1_idx` (`funcionario_func_id`,`funcionario_tipo_tipo_id`);

--
-- Indexes for table `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`mesa_id`),
  ADD UNIQUE KEY `mesa_num_UNIQUE` (`mesa_num`),
  ADD UNIQUE KEY `mesa_id` (`mesa_id`);

--
-- Indexes for table `mesa_has_pedido`
--
ALTER TABLE `mesa_has_pedido`
  ADD PRIMARY KEY (`mesa_mesa_id`,`pedido_pedido_id`),
  ADD KEY `fk_mesa_has_pedido_pedido1_idx` (`pedido_pedido_id`),
  ADD KEY `fk_mesa_has_pedido_mesa1_idx` (`mesa_mesa_id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedido_id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cozinha`
--
ALTER TABLE `cozinha`
  MODIFY `coz_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mesa`
--
ALTER TABLE `mesa`
  MODIFY `mesa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cozinha_has_pedido`
--
ALTER TABLE `cozinha_has_pedido`
  ADD CONSTRAINT `fk_cozinha_has_pedido_cozinha1` FOREIGN KEY (`cozinha_coz_id`) REFERENCES `cozinha` (`coz_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cozinha_has_pedido_pedido1` FOREIGN KEY (`pedido_pedido_id`) REFERENCES `pedido` (`pedido_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_funcionario_tipo` FOREIGN KEY (`tipo_tipo_id`) REFERENCES `tipo` (`tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionario_has_mesa`
--
ALTER TABLE `funcionario_has_mesa`
  ADD CONSTRAINT `fk_funcionario_has_mesa_funcionario1` FOREIGN KEY (`funcionario_func_id`,`funcionario_tipo_tipo_id`) REFERENCES `funcionario` (`func_id`, `tipo_tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcionario_has_mesa_mesa1` FOREIGN KEY (`mesa_mesa_id`) REFERENCES `mesa` (`mesa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mesa_has_pedido`
--
ALTER TABLE `mesa_has_pedido`
  ADD CONSTRAINT `fk_mesa_has_pedido_mesa1` FOREIGN KEY (`mesa_mesa_id`) REFERENCES `mesa` (`mesa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mesa_has_pedido_pedido1` FOREIGN KEY (`pedido_pedido_id`) REFERENCES `pedido` (`pedido_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
