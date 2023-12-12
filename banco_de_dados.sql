-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2023 às 22:41
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `image`, `views`, `created_at`) VALUES
(1, 1, 'Como fazer um bolo de cenoura', 'Misture os ingredientes e asse por 30 minutos.', '', 0, '2023-12-12 21:40:31'),
(2, 2, 'Dicas para estudar melhor', 'Faça resumos e revise o conteúdo com frequência.', '', 0, '2023-12-12 21:40:31'),
(3, 3, 'Receita de pão caseiro', 'Misture a farinha, o fermento e a água e deixe descansar por 1 hora.', '', 0, '2023-12-12 21:40:31'),
(4, 4, 'Como organizar sua rotina de trabalho', 'Faça uma lista de tarefas e priorize as mais importantes.', '', 0, '2023-12-12 21:40:31'),
(5, 5, 'Dicas para cuidar das plantas', 'Regue as plantas regularmente e coloque-as em um local com luz solar.', '', 0, '2023-12-12 21:40:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'https://th.bing.com/th/id/OIP.e0Pn4g0z3Xwpa3wmRmifDgAAAA?rs=1&pid=ImgDetMain',
  `about` text NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('common','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `about`, `password`, `level`) VALUES
(1, 'João Silva', 'joao.silva@gmail.com', 'https://th.bing.com/th/id/OIP.e0Pn4g0z3Xwpa3wmRmifDgAAAA?rs=1&pid=ImgDetMain', '', '123456', 'common'),
(2, 'Maria Souza', 'maria.souza@hotmail.com', 'https://th.bing.com/th/id/OIP.e0Pn4g0z3Xwpa3wmRmifDgAAAA?rs=1&pid=ImgDetMain', '', '123456', 'common'),
(3, 'Pedro Santos', 'pedro.santos@yahoo.com', 'https://th.bing.com/th/id/OIP.e0Pn4g0z3Xwpa3wmRmifDgAAAA?rs=1&pid=ImgDetMain', '', '123456', 'common'),
(4, 'Ana Oliveira', 'ana.oliveira@outlook.com', 'https://th.bing.com/th/id/OIP.e0Pn4g0z3Xwpa3wmRmifDgAAAA?rs=1&pid=ImgDetMain', '', '123456', 'common'),
(5, 'Lucas Costa', 'lucas.costa@gmail.com', 'https://th.bing.com/th/id/OIP.e0Pn4g0z3Xwpa3wmRmifDgAAAA?rs=1&pid=ImgDetMain', '', '123456', 'common');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
