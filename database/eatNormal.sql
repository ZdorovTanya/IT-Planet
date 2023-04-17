-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2023 г., 00:27
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
  `weight` decimal(5,2) DEFAULT NULL,
  `about` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `birth`, `sex`, `goal`, `problem`, `email`, `password`, `height`, `weight`, `about`) VALUES
(2, 'second', '03.01.2022', 'w', 'gain', 'im thin and tired', 'qqr@mail.ru', '202cb962ac59075b964b07152d234b70', 123, '120.33', 'Я люблю кушать пиццу. Особенно домашнюю на слоеном тесте))'),
(26, 'fir', '02.02.2023', 'w', 'gain', 'im pain', 'ygowvuyfrgvytwoveiuhtpbieuhrpciburybvg@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(120) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authorId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `date`, `authorId`) VALUES
(1, 'first title for examplesss', 'i wrtie this text just for example my boys. and link for example https://thecode.media/howto/. and one more link https://thecode.media/howto/ . and baflbkjalkfjbalkfjblkajfb.\r\nWe have collected all the most pressing questions about starting in IT and share the answers with you. You can read in any order. To immerse ourselves in the topic, we have added links to Code articles to each answer, so it will be easier to deal with each question.\r\n\r\nIn this release:\r\n\r\nwhat career prospects are there in IT, taking into account neural networks;\r\nabout the choice of language and direction;\r\nhow to write working code and leave comments;\r\nabout the main skills of a programmer;\r\nwhat are the common mistakes and difficulties that novice programmers have;\r\nequipment for the programmer.\r\nDownload the document and immerse yourself in the profession.\r\n\r\nThe guide can be read on your phone and on a computer, and you can also print it out and use it as a guide in schools and career guidance classes (suddenly you are a teacher).\r\n\r\nStudy, while we will prepare a new guide.\r\n\r\nthe end my dudes', '2023-04-13 06:14:44', 2),
(2, 'текст про анорексию', 'Этот текст написан для примера работы фильтров, поэтому тему надо выбирать другую. Уже есть текст по булимии, поэтому этот по анорексии.', '2023-04-15 11:42:05', 26),
(3, 'Первый пост написанный на сайте, а не в БД', 'Этот пост написан нв сайте, что и говорится в его нзвании. Проводится тестирование функционала. Условия весьма ограничены. К примеру данной текст вводится в input (для разного языка), расположенный на одной строке, а его ширину можно измерить буквой ммммммммммммммммммммм. Длина м = ширина инпута, т.е. ммм...ммм вмещается в инпут ровно и не выходя за его пределы.', '2023-04-15 18:31:53', 2),
(4, 'Статья для другого примера', 'овп рп крпырп рпрп орп олра па ш негше крмс т млпо арп стмс лоа шгнеа рм лнгек 8754 неаг 658 аем 86е 5ам86 еми86 5а7 65апм 8ем 86еамп7 нпарпащяпаша лорфв7еоагевовщп повыш сщтыекгс акщь щерук ышеу цшдд иу пщщв ьфн иу, иге ш вщте лтщц ащк рщтуые', '2023-04-15 18:48:21', 26),
(13, 'oops', 'we have some trouble wit insert. but may be not', '2023-04-17 10:00:20', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `articles_types_dis`
--

CREATE TABLE `articles_types_dis` (
  `id` int NOT NULL,
  `id_article` int NOT NULL,
  `id_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `articles_types_dis`
--

INSERT INTO `articles_types_dis` (`id`, `id_article`, `id_type`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 2),
(5, 3, 4),
(4, 4, 1),
(8, 13, 1),
(9, 13, 4),
(10, 13, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `types_disorder`
--

CREATE TABLE `types_disorder` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `types_disorder`
--

INSERT INTO `types_disorder` (`id`, `name`) VALUES
(1, 'Анорексия'),
(2, 'Булимия'),
(3, 'Орторексия'),
(4, 'Компульсивное переедание'),
(5, 'Другое');

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
  ADD KEY `author` (`authorId`);

--
-- Индексы таблицы `articles_types_dis`
--
ALTER TABLE `articles_types_dis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`,`id_type`),
  ADD KEY `id_type` (`id_type`);

--
-- Индексы таблицы `types_disorder`
--
ALTER TABLE `types_disorder`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `articles_types_dis`
--
ALTER TABLE `articles_types_dis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `types_disorder`
--
ALTER TABLE `types_disorder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `accounts` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `articles_types_dis`
--
ALTER TABLE `articles_types_dis`
  ADD CONSTRAINT `articles_types_dis_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `types_disorder` (`id`),
  ADD CONSTRAINT `articles_types_dis_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
