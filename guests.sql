-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2016 г., 11:36
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `subject`, `message`, `pass`) VALUES
(1, 'Буртелов Ярослав Вадимович', 'vamo089@gmail.com', 'Тестовое задание', 'Первая запись в Mysql,тестового задания для "Петербургская Недвижимость"', 0),
(2, 'Иванов Иван Иванович', 'ivan@gmail.com', 'Любой текст', 'Текст тест текст тест текст тест', 0),
(3, 'Any user', 'any@email.com', 'Any Subject', 'Any text Any text Any text Any text Any text', 0),
(4, 'John', 'Johny123@eyandex.com', 'my person', 'Any text Any text Any text Any text Any text', 0),
(5, 'Михаил Портнов', 'contactus@portnov.com', 'Наша школа', 'Our students join the program because they want practical training and real jobs, not degrees as 90% of them have already achieved collegiate level educations. Students with degrees in almost every imaginable area of study including IT, mechanical and electrical engineering, teaching, music, accounting, etc. have realized that our program is a proven and expedient path to a new in-demand and high paying career.', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
