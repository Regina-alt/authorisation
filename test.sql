-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2022 г., 13:55
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `ID_company` int NOT NULL,
  `nazvan` varchar(50) NOT NULL,
  `data_sozdan` date NOT NULL,
  `adres_ofisa` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `adres_saita` varchar(50) NOT NULL,
  `opis_d` varchar(50) NOT NULL,
  `fio_der` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`ID_company`, `nazvan`, `data_sozdan`, `adres_ofisa`, `tel`, `adres_saita`, `opis_d`, `fio_der`) VALUES
(1, 'КМРК', '2022-03-01', 'г Калининград ул Мореходная, 2', '8912319233', 'kmrk.com', 'Учебное учреждение (самое лучшее)', 'Мигачева Регина Михайловна'),
(3, '123', '2022-03-07', '123', '123', '123', '123', '123'),
(6, 'КГТУ', '2022-03-23', 'г Калининград ул Чаадаева, 31', '89234867235', 'kgtu.com', 'Учебное учреждение (КМРК лучше)', 'Мигачева Р.М.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES
(6, 'Мигачева Регина Михайловна', 'test', 'lifehatter@gmail.com', '123'),
(7, 'Мигачева Регина Михайловна', 'admin', 'migacheva288@gmail.com', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID_company`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `ID_company` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
