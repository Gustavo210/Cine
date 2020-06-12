-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2020 às 06:37
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL DEFAULT 0,
  `ingressoTotal` int(11) NOT NULL DEFAULT 0,
  `combostotal` int(11) NOT NULL DEFAULT 0,
  `compraTotal` int(11) NOT NULL DEFAULT 0,
  `boleto` int(11) NOT NULL DEFAULT 0,
  `data_compra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dia` varchar(20) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `assentos` varchar(1000) NOT NULL,
  `id_filme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `idCliente`, `ingressoTotal`, `combostotal`, `compraTotal`, `boleto`, `data_compra`, `dia`, `horario`, `assentos`, `id_filme`) VALUES
(1, 4, 10, 15, 25, 1, '2020-06-12 03:32:40', '', '', '', 0),
(2, 4, 10, 15, 25, 1, '2020-06-12 03:32:40', '', '', '', 0),
(3, 4, 10, 15, 25, 1, '2020-06-12 03:32:40', '', '', '', 0),
(4, 2, 10, 15, 25, 0, '2020-06-12 03:34:16', '', '', '', 0),
(5, 2, 10, 15, 25, 0, '2020-06-12 03:43:18', '', '', '', 0),
(6, 4, 20, 15, 35, 0, '2020-06-12 04:00:07', 'Quarta', '16:00hs', '171, 129', 0),
(7, 4, 20, 39, 59, 1, '2020-06-12 04:06:08', 'Terça', '17:30hs', '128, 123', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `idFilme` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Descricao` text NOT NULL,
  `Cover` text NOT NULL,
  `banner` varchar(100) NOT NULL,
  `faixa_etaria` int(11) NOT NULL,
  `link_trailer` varchar(500) NOT NULL,
  `ingresso_meia` int(11) NOT NULL DEFAULT 0,
  `ingresso_inteira` int(11) NOT NULL DEFAULT 0,
  `dias_disponiveis` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `idCategoria`, `Nome`, `Descricao`, `Cover`, `banner`, `faixa_etaria`, `link_trailer`, `ingresso_meia`, `ingresso_inteira`, `dias_disponiveis`) VALUES
(1, 1, 'Sonic: O Filme', 'Sonic, o porco-espinho azul mais famoso do mundo, se junta com os seus amigos para derrotar o terrível Doutor Eggman, um cientista louco que planeja dominar o mundo, e o Doutor Robotnik, responsável por aprisionar animais inocentes em robôs.', '../model/img/sonic.jpg', '../model/img/banners/Sonic.jpg', 0, '', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(4, 1, 'JOHN WICK 3 - PARABELLUM', 'Após assassinar o chefe da máfia Santino D\'Antonio (Riccardo Scamarcio) no Hotel Continental, John Wick (Keanu Reeves) passa a ser perseguido pelos membros da Alta Cúpula sob a recompensa de U$14 milhões. Agora, ele precisa unir forças com antigos parceiros que o ajudaram no passado enquanto luta por sua sobrevivência.', '..\\model\\img\\john3.jpg', '', 16, 'https://www.youtube.com/embed/CcQpYEcZXaU', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(6, 2, 'Por Lugares Incríveis', 'O enredo de Por Lugares Incríveis acompanha Violet Markey (Elle Fanning) e Theodore Finch (Justice Smith), que têm suas vidas transformadas para sempre quando se conhecem. Juntos, eles se apoiam para curar os estigmas emocionais e físicos que adquiriram no passado.', '..\\model\\img\\brightplaces.jpg', '', 16, 'https://www.youtube.com/embed/tdwLRHGQVG8', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(7, 3, 'Toy Story 4', 'Agora morando na casa da pequena Bonnie, Woody apresenta aos amigos o novo brinquedo construído por ela: Forky, baseado em um garfo de verdade. O novo posto de brinquedo não o agrada nem um pouco, o que faz com que Forky fuja de casa. Decidido a trazer de volta o atual brinquedo favorito de Bonnie, Woody parte em seu encalço e, no caminho, reencontra Bo Peep, que agora vive em um parque de diversões.', '..\\model\\img\\toy4.jpg', '', 0, 'https://www.youtube.com/embed/76CslX-q5C4', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(8, 4, 'STAR WARS: A ASCENSÃO SKYWALKER', 'Com o retorno do Imperador Palpatine, todos voltam a temer seu poder e, com isso, a Resistência toma a frente da batalha que ditará os rumos da galáxia. Treinando para ser uma completa Jedi, Rey (Daisy Ridley) ainda se encontra em conflito com seu passado e futuro, mas teme pelas respostas que pode conseguir a partir de sua complexa ligação com Kylo Ren (Adam Driver), que também se encontra em conflito pela Força.', '..\\model\\img\\sw9.jpg', '', 0, 'https://www.youtube.com/embed/jiRTfUYOHCs', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(9, 5, 'Viuva Negra', 'Em Viúva Negra, após seu nascimento, Natasha Romanoff (Scarlett Johansson) é dada à KGB, que a prepara para se tornar sua agente definitiva. Quando a URSS rompe, o governo tenta matá-la enquanto a ação se move para a atual Nova York, onde ela trabalha como freelancer. Após aventuras com os Vingadores, ela retorna para seu país de origem e se une à antigos aliados para acabar com o programa governamental que a transformou em uma assassina. ', '..\\model\\img\\viuva-negra.jpg', '', 16, 'https://www.youtube.com/embed/Lk7LPTq0_XY', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(10, 6, 'Aves de Rapina', 'Você já ouviu alguém sobre o policial, a loira, a psicopata e a princesa da máfia? Birds Of Prey E a fantástica emancipação de One Harley Quinn é uma história contada pela própria Harley, como só a Harley pode contar. Quando um dos vilões mais sinistros de Gotham, Roman Sionis, e seu sádico braço direito, Zsasz, colocam um alvo em uma jovem garota chamada Cass, o ventre perverso da cidade fica de cabeça para baixo procurando por ela. Os caminhos de Harley, Huntress, Canary e Renee Montoya colidem e o improvável quarteto não tem escolha a não ser se unir para derrubar Roman.', '..\\model\\img\\aves-de-rapina.jpg', '', 16, 'https://www.youtube.com/embed/vzMLBmG2lnc', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0'),
(12, 7, 'Mulher Maravilha 1984', 'Sequência de Mulher-Maravilha (Gal Gadot) que será ambientada nos EUA. A sinopse oficial ainda não foi divulgada.', '..\\model\\img\\mm84.jpg', '', 16, 'https://www.youtube.com/embed/8XrFAXykgoc', 100, 150, '\r\n1:1\r\n/2:1\r\n/3:1\r\n/4:1\r\n/5:1\r\n/6:1\r\n/7:0');

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
(1, 'Ação/Suspense', ' '),
(2, 'Romance/Drama', ''),
(3, 'Família/Comédia', ''),
(4, 'Filme de ficção científica/Aventura', ''),
(5, 'Aventura/Ação', ''),
(6, 'Ação/Filme de super-herói', ''),
(7, 'Aventura/Fantasia', '');

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
-- Estrutura da tabela `sessoes`
--

CREATE TABLE `sessoes` (
  `id` int(11) NOT NULL,
  `id_filme` int(11) NOT NULL,
  `Segunda` varchar(100) NOT NULL,
  `Terça` varchar(100) NOT NULL,
  `Quarta` varchar(100) NOT NULL,
  `Quinta` varchar(100) NOT NULL,
  `Sexta` varchar(100) NOT NULL,
  `Sabado` varchar(100) NOT NULL,
  `Domingo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sessoes`
--

INSERT INTO `sessoes` (`id`, `id_filme`, `Segunda`, `Terça`, `Quarta`, `Quinta`, `Sexta`, `Sabado`, `Domingo`) VALUES
(1, 8, '14:20/16:00/17:30?21:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '13:30/17:30/17:20/21:00', '14:20/16:00/17:30/21:00'),
(2, 1, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(3, 2, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(4, 3, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(5, 4, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(6, 5, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(7, 6, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(8, 7, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(9, 9, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(10, 10, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(11, 11, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00'),
(12, 12, '13:00/14:20/17:00/21:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00', '13:00/14:20/17:00/20:00', '13:00/14:20/17:00/20:00', '14:20/16:00/17:30/21:00', '14:20/16:00/17:30/21:00');

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
(3, 'Gabriel2', 'teste@teste.com', 123),
(4, 'Gustavo Aurélio Gontijo de Oliveira', 'gustavoaurelio73@gmail.com', 123),
(5, 'Gustavo Aurélio', 'gustavoaurelio73@gmail.com', 4242);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idFilme`),
  ADD KEY `fk_ID_categoria` (`idCategoria`);

--
-- Índices para tabela `filme_categoria`
--
ALTER TABLE `filme_categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD KEY `fk_usuario_id` (`idUsuario`);

--
-- Índices para tabela `sessoes`
--
ALTER TABLE `sessoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `filme_categoria`
--
ALTER TABLE `filme_categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `sessoes`
--
ALTER TABLE `sessoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
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
