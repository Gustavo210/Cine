-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Abr-2020 às 18:40
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `idFilme` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Descricao` text NOT NULL,
  `Cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `idCategoria`, `Nome`, `Descricao`, `Cover`) VALUES
(1, 1, 'Sonic: O Filme', 'Sonic, o porco-espinho azul mais famoso do mundo, se junta com os seus amigos para derrotar o terrível Doutor Eggman, um cientista louco que planeja dominar o mundo, e o Doutor Robotnik, responsável por aprisionar animais inocentes em robôs.', '../model/img/sonic.jpg'),
(2, 1, 'Sonic: O Filme', 'Sonic, o porco-espinho azul mais famoso do mundo, se junta com os seus amigos para derrotar o terrível Doutor Eggman, um cientista louco que planeja dominar o mundo, e o Doutor Robotnik, responsável por aprisionar animais inocentes em robôs.', '../model/img/sonic.jpg'),
(3, 1, 'Sonic: O Filme', 'Sonic, o porco-espinho azul mais famoso do mundo, se junta com os seus amigos para derrotar o terrível Doutor Eggman, um cientista louco que planeja dominar o mundo, e o Doutor Robotnik, responsável por aprisionar animais inocentes em robôs.', '../model/img/sonic.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme_categoria`
--

CREATE TABLE `filme_categoria` (
  `idCategoria` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme_categoria`
--

INSERT INTO `filme_categoria` (`idCategoria`, `Nome`, `Descricao`) VALUES
(1, 'Suspense', ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `idIngresso` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `descricao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `nome`, `email`, `senha`) VALUES
(1, 'Gabriel', 'gbfeliped@gmail.com', 123456),
(2, 'Gabriel', 'gbfeliped@gmail.com', 123456),
(3, 'Gabriel2', 'teste@teste.com', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idFilme`),
  ADD KEY `fk_ID_categoria` (`idCategoria`);

--
-- Indexes for table `filme_categoria`
--
ALTER TABLE `filme_categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `ingresso`
--
ALTER TABLE `ingresso`
  ADD KEY `fk_usuario_id` (`idUsuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filme_categoria`
--
ALTER TABLE `filme_categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_ID_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `filme_categoria` (`idCategoria`);

--
-- Limitadores para a tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
