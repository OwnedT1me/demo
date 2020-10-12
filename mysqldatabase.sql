-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 12 2020 г., 11:55
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mysqldatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `diagnoz`
--

CREATE TABLE `diagnoz` (
  `UID` int(10) NOT NULL,
  `pacient` varchar(100) NOT NULL,
  `diagnoz` varchar(100) NOT NULL,
  `date_o` date NOT NULL DEFAULT current_timestamp(),
  `date_c` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diagnoz`
--

INSERT INTO `diagnoz` (`UID`, `pacient`, `diagnoz`, `date_o`, `date_c`) VALUES
(0, 'Иванов И.И.', 'R 1.1', '2020-10-01', '2020-10-02'),
(1, 'Неиванов И.И.', 'R 1.2', '2020-10-04', '2020-10-12'),
(2, 'Юрийиванов И.И.', 'R 1.2', '2020-10-10', '2020-10-22');

-- --------------------------------------------------------

--
-- Структура таблицы `diagnozuid`
--

CREATE TABLE `diagnozuid` (
  `id` int(11) NOT NULL,
  `R` varchar(11) NOT NULL,
  `discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `diagnozuid`
--

INSERT INTO `diagnozuid` (`id`, `R`, `discription`) VALUES
(1, 'R 1.1', 'Перелом'),
(2, 'R 1.2', 'Первый этап диспансеризации определенных групп взрослого населения'),
(3, 'R 1.4', ''),
(5, 'R 1.5', ''),
(6, 'R 1.7', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `2ndname` varchar(100) NOT NULL,
  `1stname` varchar(100) NOT NULL,
  `3thname` varchar(100) NOT NULL,
  `pol_mj` varchar(1) NOT NULL,
  `date_b` date NOT NULL DEFAULT current_timestamp(),
  `date_d` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Страница со списком пациентов';

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `2ndname`, `1stname`, `3thname`, `pol_mj`, `date_b`, `date_d`) VALUES
(1, 'Иванов', 'Иван', 'Иванович', 'm', '1996-10-15', '2019-01-01'),
(2, 'Петров1', 'Петр', 'Петрович', 'm', '1992-12-11', '2020-08-07'),
(3, 'Метеленко', 'Юлия', 'Ивановна', 'j', '2020-10-05', '2020-10-15'),
(4, 'Лоченко', 'Василия', 'Васильевна', 'j', '2020-10-04', '2020-10-11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `diagnoz`
--
ALTER TABLE `diagnoz`
  ADD PRIMARY KEY (`UID`);

--
-- Индексы таблицы `diagnozuid`
--
ALTER TABLE `diagnozuid`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `diagnozuid`
--
ALTER TABLE `diagnozuid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
