-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 01 2024 г., 02:08
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `konferentsiyi_opanasiuk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kafedry`
--

CREATE TABLE `kafedry` (
  `id_kafedry` int(11) UNSIGNED NOT NULL,
  `nazva_kafedry` varchar(100) NOT NULL,
  `roztashuvannya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `kafedry`
--

INSERT INTO `kafedry` (`id_kafedry`, `nazva_kafedry`, `roztashuvannya`) VALUES
(1, 'Економічна кібернетика', '247 ауд.'),
(2, 'Економіки підприємства', '255 ауд.'),
(3, 'Маркетингу', '275 ауд.'),
(4, 'Менеджменту', '262 ауд.'),
(5, 'Міжнародної економіки', '272 ауд.'),
(6, 'Обліку і аудиту', '240 ауд.');

-- --------------------------------------------------------

--
-- Структура таблицы `konferentsiyi`
--

CREATE TABLE `konferentsiyi` (
  `id_konferentsiyi` int(10) UNSIGNED NOT NULL,
  `id_spivrobitnyky` int(10) UNSIGNED DEFAULT NULL,
  `nazva_konferentsiyi` varchar(255) DEFAULT NULL,
  `data_pochatku` date DEFAULT NULL,
  `data_zakinchennya` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `konferentsiyi`
--

INSERT INTO `konferentsiyi` (`id_konferentsiyi`, `id_spivrobitnyky`, `nazva_konferentsiyi`, `data_pochatku`, `data_zakinchennya`) VALUES
(1, 1, 'Розвиток економічної кібернетики', '2016-09-26', '2016-09-27'),
(2, 1, 'Кібернетика: перспективи розвитку', '2016-11-01', '2016-11-03'),
(3, 3, 'Сучасний стан інформатизації', '2016-10-03', '2016-10-04'),
(4, 6, 'Еконміка: сьогодення', '2016-10-17', '2016-10-19'),
(5, 1, 'Менеджмент туризму', '2016-11-15', '2016-11-16'),
(6, 3, 'Підприємництво в Україні', '2016-09-01', '2016-09-02');

-- --------------------------------------------------------

--
-- Структура таблицы `spivrobitnyky`
--

CREATE TABLE `spivrobitnyky` (
  `id_spivrobitnyky` int(11) UNSIGNED NOT NULL,
  `id_kafedry` int(11) UNSIGNED DEFAULT NULL,
  `prizvyshche` varchar(100) DEFAULT NULL,
  `imya` varchar(100) DEFAULT NULL,
  `pobatkovi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `spivrobitnyky`
--

INSERT INTO `spivrobitnyky` (`id_spivrobitnyky`, `id_kafedry`, `prizvyshche`, `imya`, `pobatkovi`) VALUES
(1, 1, 'Іванов', 'Іван', 'Іванович'),
(2, 1, 'Павлюк', 'Сергій', 'Миколайович'),
(3, 1, 'Новак', 'Оксана', 'Миколаївна'),
(4, 4, 'Нагорна', 'Світлана', 'Володимирівна'),
(5, 3, 'Сидорук', 'Олексій', 'Вікторович'),
(6, 4, 'Кушнір', 'Олена', 'Іванівна'),
(7, 6, 'Прокопович', 'Володимир', 'Іванович'),
(8, 5, 'Куць', 'Ніна', 'Олексіївна'),
(9, 1, 'Короткий', 'Віктор', 'Петрович'),
(10, 3, 'Сорока', 'Петро', 'Вікторович');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kafedry`
--
ALTER TABLE `kafedry`
  ADD PRIMARY KEY (`id_kafedry`);

--
-- Индексы таблицы `konferentsiyi`
--
ALTER TABLE `konferentsiyi`
  ADD PRIMARY KEY (`id_konferentsiyi`),
  ADD KEY `konferentsiyi_FK_1` (`id_spivrobitnyky`);

--
-- Индексы таблицы `spivrobitnyky`
--
ALTER TABLE `spivrobitnyky`
  ADD PRIMARY KEY (`id_spivrobitnyky`),
  ADD KEY `spivrobitnyky_FK_1` (`id_kafedry`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kafedry`
--
ALTER TABLE `kafedry`
  MODIFY `id_kafedry` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `konferentsiyi`
--
ALTER TABLE `konferentsiyi`
  MODIFY `id_konferentsiyi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `spivrobitnyky`
--
ALTER TABLE `spivrobitnyky`
  MODIFY `id_spivrobitnyky` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `konferentsiyi`
--
ALTER TABLE `konferentsiyi`
  ADD CONSTRAINT `konferentsiyi_FK_1` FOREIGN KEY (`id_spivrobitnyky`) REFERENCES `spivrobitnyky` (`id_spivrobitnyky`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `spivrobitnyky`
--
ALTER TABLE `spivrobitnyky`
  ADD CONSTRAINT `spivrobitnyky_FK_1` FOREIGN KEY (`id_kafedry`) REFERENCES `kafedry` (`id_kafedry`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
