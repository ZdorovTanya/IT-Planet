-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2023 г., 09:56
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eatNormal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth` varchar(11) NOT NULL,
  `sex` char(1) NOT NULL,
  `goal` varchar(40) NOT NULL,
  `problem` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `height` int DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `birth`, `sex`, `goal`, `problem`, `email`, `password`, `height`, `weight`) VALUES
(2, 'second', '03.01.2022', 'w', 'gain', 'im thin and tired', 'qqr@mail.ru', '202cb962ac59075b964b07152d234b70', 123, '120.33'),
(26, 'fir', '02.02.2023', 'w', 'gain', 'im pain', 'ygowvuyfrgvytwoveiuhtpbieuhrpciburybvg@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(120) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `date`, `author`) VALUES
(1, 'first title for example', 'i wrtie this text just for example my boys. and link for example https://thecode.media/howto/. and one more link https://thecode.media/howto/ . and baflbkjalkfjbalkfjblkajfb.\r\nWe have collected all the most pressing questions about starting in IT and share the answers with you. You can read in any order. To immerse ourselves in the topic, we have added links to Code articles to each answer, so it will be easier to deal with each question.\r\n\r\nIn this release:\r\n\r\nwhat career prospects are there in IT, taking into account neural networks;\r\nabout the choice of language and direction;\r\nhow to write working code and leave comments;\r\nabout the main skills of a programmer;\r\nwhat are the common mistakes and difficulties that novice programmers have;\r\nequipment for the programmer.\r\nDownload the document and immerse yourself in the profession.\r\n\r\nThe guide can be read on your phone and on a computer, and you can also print it out and use it as a guide in schools and career guidance classes (suddenly you are a teacher).\r\n\r\nStudy, while we will prepare a new guide.\r\n\r\nthe end my dudes', '2023-04-13 06:14:44', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`author`) REFERENCES `accounts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
