-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2023 às 22:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `post_id`) VALUES
(1, 'Ótimo post!', 1, 1),
(2, 'Adorei as dicas!', 2, 2),
(3, 'Vou tentar fazer em casa', 3, 3),
(4, 'Muito útil, obrigado!', 4, 4),
(5, 'Excelente conteúdo', 5, 5),
(6, 'Parabéns pelo post', 1, 2),
(7, 'Muito bem explicado', 2, 3),
(8, 'Obrigado pelas dicas', 3, 4),
(9, 'Vou compartilhar com meus amigos', 4, 5),
(10, 'Continue assim!', 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 3),
(6, 1, 3),
(7, 2, 4),
(8, 3, 4),
(9, 4, 5),
(10, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `views`) VALUES
(1, 1, 'Como fazer um bolo de cenoura', 'Misture os ingredientes e asse por 30 minutos.', 0),
(2, 2, 'Dicas para estudar melhor', 'Faça resumos e revise o conteúdo com frequência.', 0),
(3, 3, 'Receita de pão caseiro', 'Misture a farinha, o fermento e a água e deixe descansar por 1 hora.', 0),
(4, 4, 'Como organizar sua rotina de trabalho', 'Faça uma lista de tarefas e priorize as mais importantes.', 0),
(5, 5, 'Dicas para cuidar das plantas', 'Regue as plantas regularmente e coloque-as em um local com luz solar.', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('common','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'João Silva', 'joao.silva@gmail.com', '123456', 'common'),
(2, 'Maria Souza', 'maria.souza@hotmail.com', '123456', 'common'),
(3, 'Pedro Santos', 'pedro.santos@yahoo.com', '123456', 'common'),
(4, 'Ana Oliveira', 'ana.oliveira@outlook.com', '123456', 'common'),
(5, 'Lucas Costa', 'lucas.costa@gmail.com', '123456', 'common'),
(6, 'Matheus', 'matheus@gmail.com', 'asdasfsdfsdf', 'common'),
(7, 'Matheus', 'matheus@gmail.com', '$2y$10$N8XOXKWRWeGoGNoKvn3pOOjTHSogoG3x2A0doZudfiFfZn4b.r9qS', 'common'),
(8, 'asdasdas', 'dasdasdas@gmail.com', '$2y$10$t.gOlywp8yhHZNNU1xgAsuI0g9k78qJb3roWLqZixEv2jZ.d3ZF7m', 'common'),
(9, 'asdasdas', 'dasdasdas@gmail.com', '$2y$10$NGezCjC6qTS4lsSZ1EHGMu4V7G6udswWsYPLdvgp6GayO0gEQeH3S', 'common');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
