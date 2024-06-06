-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2024 às 21:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bovinos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal`
--

CREATE TABLE `animal` (
  `codMae` int(11) DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `brinco` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `origem` varchar(50) DEFAULT NULL,
  `cod_animal` int(11) NOT NULL,
  `cod_tipo` int(11) DEFAULT NULL,
  `cod_raca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal_medicamentos`
--

CREATE TABLE `animal_medicamentos` (
  `cod_animal` int(11) DEFAULT NULL,
  `cod_med` int(11) DEFAULT NULL,
  `Id_lote_medic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal_vacinas`
--

CREATE TABLE `animal_vacinas` (
  `cod_animal` int(11) DEFAULT NULL,
  `cod_vac` int(11) DEFAULT NULL,
  `Id_lote_vacina` int(11) NOT NULL,
  `doses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cresc`
--

CREATE TABLE `cresc` (
  `data_cresc` date DEFAULT NULL,
  `cod_cresc` int(11) NOT NULL,
  `peso_medio` float DEFAULT NULL,
  `brinco_bezerro` int(11) DEFAULT NULL,
  `cod_animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `desmame`
--

CREATE TABLE `desmame` (
  `data_desmame` date DEFAULT NULL,
  `peso_medio` float DEFAULT NULL,
  `brinco_bezerro` int(11) DEFAULT NULL,
  `cod_desmame` int(11) NOT NULL,
  `cod_animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `desmame`
--

INSERT INTO `desmame` (`data_desmame`, `peso_medio`, `brinco_bezerro`, `cod_desmame`, `cod_animal`) VALUES
('1111-11-11', 75, 0, 14, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `gestacao`
--

CREATE TABLE `gestacao` (
  `data_cobertura` date DEFAULT NULL,
  `medicamentos` varchar(100) DEFAULT NULL,
  `brinco_mae` int(11) DEFAULT NULL,
  `vacinas` varchar(100) DEFAULT NULL,
  `cod_gestacao` int(11) NOT NULL,
  `cod_animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `gestacao`
--

INSERT INTO `gestacao` (`data_cobertura`, `medicamentos`, `brinco_mae`, `vacinas`, `cod_gestacao`, `cod_animal`) VALUES
('0000-00-00', 'Escolher ...', 0, 'Escolher ...', 4, NULL),
('1111-02-12', '1', 99, 'Escolher...', 5, NULL),
('2222-02-22', 'Escolher...', 9999, 'Escolher...', 6, NULL),
('1111-11-11', '1', 2223, '1', 7, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lote_medicamento`
--

CREATE TABLE `lote_medicamento` (
  `idlote_medic` int(11) NOT NULL,
  `data_validade` date DEFAULT NULL,
  `fabricante` varchar(100) DEFAULT NULL,
  `num_lote` varchar(100) DEFAULT NULL,
  `cod_med` int(11) NOT NULL,
  `data_chegada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `lote_medicamento`
--

INSERT INTO `lote_medicamento` (`idlote_medic`, `data_validade`, `fabricante`, `num_lote`, `cod_med`, `data_chegada`) VALUES
(4, '2022-11-26', 'CB', '55VV', 1, '2022-11-11'),
(5, '2022-11-19', 'CB', '55VV', 1, '2022-11-12'),
(6, '2022-11-26', 'CB', '55VV', 1, '2022-11-19'),
(7, '2022-11-17', 'CB', 'VV99', 1, '2022-11-10'),
(8, '1111-11-11', '11111', '11111', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lote_vacina`
--

CREATE TABLE `lote_vacina` (
  `idlote_vacina` int(11) NOT NULL,
  `data_validade` date DEFAULT NULL,
  `fabricante` varchar(100) DEFAULT NULL,
  `num_lote` varchar(100) DEFAULT NULL,
  `cod_vac` int(11) NOT NULL,
  `data_chegada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `lote_vacina`
--

INSERT INTO `lote_vacina` (`idlote_vacina`, `data_validade`, `fabricante`, `num_lote`, `cod_vac`, `data_chegada`) VALUES
(4, '2022-11-26', 'CB', '55VV', 1, '2022-11-11'),
(9, '2022-11-05', 'CB', '55VV', 1, '2022-11-25'),
(10, '2022-12-01', 'CB', '88VV', 1, '2022-11-17'),
(11, '0003-03-03', '1', '12', 1, '0000-00-00'),
(12, '0000-00-00', 'qwrwe', 'wer', 1, '1111-11-11'),
(13, '0000-00-00', '1111', '22222', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicamentos`
--

CREATE TABLE `medicamentos` (
  `nome` varchar(120) DEFAULT NULL,
  `cod_med` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `medicamentos`
--

INSERT INTO `medicamentos` (`nome`, `cod_med`) VALUES
('ANTIBIÓTICO', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `parto`
--

CREATE TABLE `parto` (
  `data_parto` date DEFAULT NULL,
  `cod_parto` int(11) NOT NULL,
  `cod_animal` int(11) DEFAULT NULL,
  `cod_gestacao` int(11) DEFAULT NULL,
  `vivo_morto` varchar(30) DEFAULT NULL,
  `brinco_bezerro` int(11) DEFAULT NULL,
  `peso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `raca`
--

CREATE TABLE `raca` (
  `raca` varchar(100) DEFAULT NULL,
  `cod_raca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `raca`
--

INSERT INTO `raca` (`raca`, `cod_raca`) VALUES
('NELORE', 1),
('ANGUS', 2),
('BRAHMAN', 3),
('BRANGUS', 4),
('SENEPOL', 5),
('HEREFORD', 6),
('CARACU', 7),
('CHAROLÊS', 8),
('GUZERÁ', 9),
('SIMENTAL', 10),
('TABAPUÃ', 11),
('CHIANINA', 12),
('LIMOUSIN', 13),
('DEVON', 14),
('BELGIAN BLUE', 15),
('WAGYU', 16);

-- --------------------------------------------------------

--
-- Estrutura para tabela `term`
--

CREATE TABLE `term` (
  `data_abate` date DEFAULT NULL,
  `peso_saida` float DEFAULT NULL,
  `peso_entrada` float DEFAULT NULL,
  `cod_term` int(11) NOT NULL,
  `brinco_term` int(11) DEFAULT NULL,
  `cod_animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo`
--

CREATE TABLE `tipo` (
  `tipo` varchar(100) DEFAULT NULL,
  `cod_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tipo`
--

INSERT INTO `tipo` (`tipo`, `cod_tipo`) VALUES
('BOI', 1),
('TOURO', 2),
('VACA', 3),
('BEZERRO', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nome_usuario` varchar(120) DEFAULT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `nome_usuario`, `codigo`) VALUES
('vitor@gmail.com', '??<?c??????', 'vitor', 9),
('jao@uol.com', '??<?c??????', 'jao', 10),
('', '?l??T?w???Y?', '', 11),
('', '?l??T?w???Y?', '', 12),
('', '?l??T?w???Y?', '', 13),
('', '?l??T?w???Y?', '', 14),
('', '?l??T?w???Y?', '', 15),
('vitor123@gmail.com', '??<?c??????', 'vitor', 16),
('pedrolucas@gmail.com', 'S?DOL?0p=zJ?', 'pedro', 17),
('jo@gmail.com', '??<?c??????', 'Jo', 18),
('p@gmail.com', '??<?c??????', 'Pedro', 19),
('servidor@email.com', '??<?c??????', 'let', 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vacinas`
--

CREATE TABLE `vacinas` (
  `nome` varchar(120) DEFAULT NULL,
  `cod_vac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `vacinas`
--

INSERT INTO `vacinas` (`nome`, `cod_vac`) VALUES
('BRUCELOSE', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`cod_animal`),
  ADD KEY `cod_tipo` (`cod_tipo`),
  ADD KEY `cod_raca` (`cod_raca`);

--
-- Índices de tabela `animal_medicamentos`
--
ALTER TABLE `animal_medicamentos`
  ADD KEY `cod_animal` (`cod_animal`),
  ADD KEY `Id_lote_medic` (`Id_lote_medic`),
  ADD KEY `cod_med` (`cod_med`);

--
-- Índices de tabela `animal_vacinas`
--
ALTER TABLE `animal_vacinas`
  ADD KEY `cod_animal` (`cod_animal`),
  ADD KEY `Id_lote_vacina` (`Id_lote_vacina`),
  ADD KEY `cod_vac` (`cod_vac`);

--
-- Índices de tabela `cresc`
--
ALTER TABLE `cresc`
  ADD PRIMARY KEY (`cod_cresc`),
  ADD KEY `cod_animal` (`cod_animal`);

--
-- Índices de tabela `desmame`
--
ALTER TABLE `desmame`
  ADD PRIMARY KEY (`cod_desmame`),
  ADD KEY `cod_animal` (`cod_animal`);

--
-- Índices de tabela `gestacao`
--
ALTER TABLE `gestacao`
  ADD PRIMARY KEY (`cod_gestacao`),
  ADD KEY `cod_animal` (`cod_animal`);

--
-- Índices de tabela `lote_medicamento`
--
ALTER TABLE `lote_medicamento`
  ADD PRIMARY KEY (`idlote_medic`),
  ADD KEY `cod_med` (`cod_med`);

--
-- Índices de tabela `lote_vacina`
--
ALTER TABLE `lote_vacina`
  ADD PRIMARY KEY (`idlote_vacina`),
  ADD KEY `cod_vac` (`cod_vac`);

--
-- Índices de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`cod_med`);

--
-- Índices de tabela `parto`
--
ALTER TABLE `parto`
  ADD PRIMARY KEY (`cod_parto`),
  ADD KEY `cod_animal` (`cod_animal`),
  ADD KEY `cod_gestacao` (`cod_gestacao`);

--
-- Índices de tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`cod_raca`);

--
-- Índices de tabela `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`cod_term`),
  ADD KEY `cod_animal` (`cod_animal`);

--
-- Índices de tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`cod_tipo`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `vacinas`
--
ALTER TABLE `vacinas`
  ADD PRIMARY KEY (`cod_vac`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `cod_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `cresc`
--
ALTER TABLE `cresc`
  MODIFY `cod_cresc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `desmame`
--
ALTER TABLE `desmame`
  MODIFY `cod_desmame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `gestacao`
--
ALTER TABLE `gestacao`
  MODIFY `cod_gestacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `lote_medicamento`
--
ALTER TABLE `lote_medicamento`
  MODIFY `idlote_medic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `lote_vacina`
--
ALTER TABLE `lote_vacina`
  MODIFY `idlote_vacina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `cod_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `parto`
--
ALTER TABLE `parto`
  MODIFY `cod_parto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `raca`
--
ALTER TABLE `raca`
  MODIFY `cod_raca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `term`
--
ALTER TABLE `term`
  MODIFY `cod_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `cod_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `vacinas`
--
ALTER TABLE `vacinas`
  MODIFY `cod_vac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`cod_tipo`) REFERENCES `tipo` (`cod_tipo`),
  ADD CONSTRAINT `animal_ibfk_2` FOREIGN KEY (`cod_raca`) REFERENCES `raca` (`cod_raca`);

--
-- Restrições para tabelas `animal_medicamentos`
--
ALTER TABLE `animal_medicamentos`
  ADD CONSTRAINT `animal_medicamentos_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`),
  ADD CONSTRAINT `animal_medicamentos_ibfk_2` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_med`),
  ADD CONSTRAINT `animal_medicamentos_ibfk_3` FOREIGN KEY (`Id_lote_medic`) REFERENCES `medicamentos` (`cod_med`),
  ADD CONSTRAINT `animal_medicamentos_ibfk_4` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_med`),
  ADD CONSTRAINT `animal_medicamentos_ibfk_5` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_med`);

--
-- Restrições para tabelas `animal_vacinas`
--
ALTER TABLE `animal_vacinas`
  ADD CONSTRAINT `animal_vacinas_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`),
  ADD CONSTRAINT `animal_vacinas_ibfk_2` FOREIGN KEY (`cod_vac`) REFERENCES `vacinas` (`cod_vac`),
  ADD CONSTRAINT `animal_vacinas_ibfk_3` FOREIGN KEY (`Id_lote_vacina`) REFERENCES `vacinas` (`cod_vac`),
  ADD CONSTRAINT `animal_vacinas_ibfk_4` FOREIGN KEY (`cod_vac`) REFERENCES `vacinas` (`cod_vac`);

--
-- Restrições para tabelas `cresc`
--
ALTER TABLE `cresc`
  ADD CONSTRAINT `cresc_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`);

--
-- Restrições para tabelas `desmame`
--
ALTER TABLE `desmame`
  ADD CONSTRAINT `desmame_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`);

--
-- Restrições para tabelas `gestacao`
--
ALTER TABLE `gestacao`
  ADD CONSTRAINT `gestacao_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`);

--
-- Restrições para tabelas `lote_medicamento`
--
ALTER TABLE `lote_medicamento`
  ADD CONSTRAINT `lote_medicamento_ibfk_1` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_med`),
  ADD CONSTRAINT `lote_medicamento_ibfk_2` FOREIGN KEY (`cod_med`) REFERENCES `medicamentos` (`cod_med`);

--
-- Restrições para tabelas `lote_vacina`
--
ALTER TABLE `lote_vacina`
  ADD CONSTRAINT `lote_vacina_ibfk_1` FOREIGN KEY (`cod_vac`) REFERENCES `vacinas` (`cod_vac`);

--
-- Restrições para tabelas `parto`
--
ALTER TABLE `parto`
  ADD CONSTRAINT `parto_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`),
  ADD CONSTRAINT `parto_ibfk_2` FOREIGN KEY (`cod_gestacao`) REFERENCES `gestacao` (`cod_gestacao`);

--
-- Restrições para tabelas `term`
--
ALTER TABLE `term`
  ADD CONSTRAINT `term_ibfk_1` FOREIGN KEY (`cod_animal`) REFERENCES `animal` (`cod_animal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
