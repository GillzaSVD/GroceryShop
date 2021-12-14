-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 12 2021 г., 17:23
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
-- База данных: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg',
  `oldprice` double NOT NULL,
  `newprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `oldprice`, `newprice`) VALUES
(1, 'Нектар Добрый, мультифрукт, 2 л', 'img/8041.webp', 189.99, 109.99),
(2, 'Пищевая рыбная продукция холодного копчения тунец желтоперый филе-ломтики в/у, 100г', 'img/4042434.webp', 189.99, 159.99),
(3, 'Горбуша свежемороженая потрошёная, без головы, 1 кг', 'img/6_3.jpg', 429.99, 259.99),
(4, 'Орех грецкий очищенный, 100 г', 'img/3.jpg', 119.99, 89.99),
(5, 'Сервелат «Финский» Папа Может, 350 г', 'img/5_3.jpg', 229.99, 129.99),
(6, 'Кофе Jacobs Monarсh, растворимый, 190 г Якобс Монарх', 'img/58130.webp', 645.99, 329.99),
(7, 'Шоколадный батончик, Twix Экстра, 82 г', 'img/2138420.webp', 54.99, 47.99),
(8, 'Напиток Pepsi, 2 л', 'img/3684656.webp', 129.99, 89.99);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
