-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/08/2025 às 02:42
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
-- Banco de dados: `bd_primesystem`
--
CREATE DATABASE IF NOT EXISTS `bd_primesystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_primesystem`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_razao_social` varchar(255) DEFAULT NULL,
  `cpf_cnpj` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_razao_social`, `cpf_cnpj`, `endereco`, `telefone`, `email`) VALUES
(2, 'hellienay', '123.123.123-12', 'Rua Principal, 100', '(29) 31248-2138', 'elielindo@gmail.coum'),
(3, 'João Silva', '111.222.333-44', 'Rua das Flores, 123', '(11) 91234-5678', 'joao.silva@email.com'),
(4, 'Maria Oliveira', '555.666.777-88', 'Av. Brasil, 456', '(21) 98765-4321', 'maria.oliveira@email.com'),
(5, 'Empresa ABC Ltda', '12.345.678/0001-99', 'Rua Central, 789', '(31) 99876-5432', 'contato@abc.com'),
(6, 'Carlos Pereira', '999.888.777-66', 'Travessa 5, 101', '(41) 91234-1234', 'carlos.pereira@email.com'),
(7, 'Ana Souza', '444.555.666-77', 'Praça Nova, 202', '(51) 98765-9876', 'ana.souza@email.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `nome_razao_social` varchar(255) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome_razao_social`, `cnpj`, `endereco`, `telefone`, `email`) VALUES
(1, 'Fornecedor X', '01.234.567/0001-01', 'Rua A, 111', '(11) 3456-7890', 'contato@fornecedorx.com'),
(2, 'Fornecedor Y', '02.345.678/0001-02', 'Av. B, 222', '(21) 4567-8901', 'contato@fornecedory.com'),
(3, 'Fornecedor Z', '03.456.789/0001-03', 'Rua C, 333', '(31) 5678-9012', 'contato@fornecedorz.com'),
(4, 'Fornecedor Alfa', '04.567.890/0001-04', 'Av. D, 444', '(41) 6789-0123', 'contato@fornecedoralpha.com'),
(5, 'Fornecedor Beta', '05.678.901/0001-05', 'Rua E, 555', '(51) 7890-1234', 'contato@fornecedorb.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `token`) VALUES
(4, 'adm', 'adm@email.com', '123', 'estrela'),
(5, 'usuario1', 'user1@email.com', 'senha1', NULL),
(6, 'usuario2', 'user2@email.com', 'senha2', NULL),
(7, 'usuario3', 'user3@email.com', 'senha3', NULL),
(8, 'usuario4', 'user4@email.com', 'senha4', NULL),
(9, 'usuario5', 'user5@email.com', 'senha5', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `preco`, `imagem`) VALUES
(1, 'algum', 10, 200.00, 'C:\\Users\\gustavo.fanjos1\\Downloads\\Captura de tela 2025-08-08 194132.png'),
(2, 'fiorino', 0, 5000000.00, ''),
(3, 'alguns', 13, 200.00, ''),
(4, 'Produto A', 100, 10.00, ''),
(5, 'Produto B', 50, 20.00, ''),
(6, 'Produto C', 200, 5.50, ''),
(7, 'Produto D', 0, 15.75, ''),
(8, 'Produto E', 30, 12.40, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `cliente_nome` varchar(255) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data_venda` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `cliente_nome`, `produto_id`, `quantidade`, `data_venda`) VALUES
(7, 'eu', 1, 1, '0000-00-00 00:00:00'),
(8, 'silva', 1, 2, '2025-08-08 21:30:02'),
(9, 'jr', 2, 1, '2025-08-08 21:30:55'),
(10, 'João Silva', 1, 2, '2025-08-01 10:00:00'),
(11, 'Maria Oliveira', 2, 1, '2025-08-02 11:30:00'),
(12, 'Empresa ABC Ltda', 3, 10, '2025-08-03 14:00:00'),
(13, 'Carlos Pereira', 5, 5, '2025-08-04 09:15:00'),
(14, 'Ana Souza', 1, 3, '2025-08-05 16:45:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_id` (`produto_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
