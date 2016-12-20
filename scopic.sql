-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 14 2014 г., 23:12
-- Версия сервера: 5.5.15
-- Версия PHP: 5.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `scopic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=326 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(1, 'Nevada', '8169x5it', 'Denis', 'Barabash', 'barabash.denis@gmail.com'),
(2, 'Solara', 'dsfger324', 'Nikita', 'Suvorova', 'Nikita@mail.ru'),
(3, 'Solara', 'dsfger324', 'Nikita', 'Suvorova', 'Nikita@mail.ru'),
(4, 'Tristan', 'dfewopop54', 'Dima', 'Dimidov', 'dima@gmail.com'),
(5, 'Tristan', 'dfewopop54', 'Dima', 'Dimidov', 'dima@gmail.com'),
(6, 'Topac', 'aewewr3332', 'Jhon', 'Travolta', 'travolta@gmail.com'),
(7, 'Bibi', 'yiuyyyu32356', 'Bred', 'Pitt', 'pitt@gmail.com'),
(8, 'Kamila', 'kama4788', 'Kamila', 'Kunis', 'kunis@gmail.com'),
(9, 'Ribeca', 'ribo6789', 'Coma', 'Rudolf', 'coma@gmail.com'),
(10, 'Kamila', 'kama4788', 'Kamila', 'Kunis', 'kunis@gmail.com'),
(11, 'Ribeca', 'ribo6789', 'Coma', 'Rudolf', 'coma@gmail.com'),
(12, 'boss', 'afasfawq', 'Boss', 'Boss', 'sadfasf@gmail.com'),
(13, 'fooo', 'test', 'test', 'test', 'tewt@ye.com'),
(14, 'bar', 'bar', 'bar', 'bar', 'bar@bar.om'),
(15, 'roo', 'rpp', '122', 'test', 'test'),
(16, 'lolo', 'dima', 'fere', 'cusina', 'fere@cao.com'),
(17, 'foo', 'fpp', 'foo', 'fpp', 'foo@foo.com'),
(18, 'look', 'Timaiti', 'tatoo', 'cool', 'cool@cool.com'),
(19, 'fi', 'zoo', 'needle', 'jhon', 'jhon@com.ua'),
(20, 'username', 'pass', 'first', 'last', 'last@com'),
(21, 'name', 'name', 'name', 'name', 'name@name.com'),
(25, 'denis', 'denis', 'Denis', 'denis', 'condor.2013@ukr.net'),
(200, 'dsfdsf', 'dsa', 'asd', 'ad', 'condor.2013@ukr.net'),
(325, 'fegf', 'gdsg', 'dsg', 'sdgdsg', 'condor.2013@ukr.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
