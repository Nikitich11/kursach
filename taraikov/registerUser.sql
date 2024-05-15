-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 16 2024 г., 13:58
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registerUser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `closets`
--

CREATE TABLE `closets` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `image` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `closets`
--

INSERT INTO `closets` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'Collaboration XanterXhanter and Nike', 329, 'Gon.png', 'sneakers'),
(2, 'Afterboy gothic zeep-hoodie fashion XX colections', 329, 'Hisoka.png', 'sneakers'),
(3, 'Afterboy gothic zeep-hoodie fashion XX colections', 539, 'Killua.png', 'sneakers'),
(4, 'Afterboy gothic zeep-hoodie fashion XX colections', 259, 'Kurapika.png', 'sneakers'),
(5, 'Afterboy gothic zeep-hoodie fashion XX colections', 218, 'Leorio.png', 'sneakers');

-- --------------------------------------------------------

--
-- Структура таблицы `hoodie`
--

CREATE TABLE `hoodie` (
  `id` int NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` int NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `hoodie`
--

INSERT INTO `hoodie` (`id`, `name`, `price`, `image`) VALUES
(1, 'Afterboy gothic zeep-hoodie fashion XX colections', 189, 'closet1.png'),
(2, 'Afterboy gothic zeep-hoodie fashion XX colections', 200, 'closet2.png'),
(3, 'Afterboy gothic zeep-hoodie fashion XX colections', 180, 'closet3.png'),
(4, 'Afterboy gothic zeep-hoodie fashion XX colections', 260, 'closet4.png'),
(5, 'Afterboy gothic zeep-hoodie fashion XX colections', 250, 'closet5.png'),
(6, 'Afterboy gothic zeep-hoodie fashion XX colections', 240, 'closet6.png'),
(7, 'Afterboy gothic zeep-hoodie fashion XX colections', 290, 'closet7.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_info` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `name`, `email`, `phone`, `date`, `status`, `products_info`) VALUES
(2, 0, 'Влад', 'vlad.shipilov.felocs@gmail.com', '89204641558', '2023-03-08', 'Ожидает подтверждения ', '2,5;6,9;'),
(3, 4, 'Влад', 'vlad.shipilov.felocs@gmail.com', '89204641558', '2023-03-08', 'Ожидает подтверждения', '2,7;6,10;'),
(4, 4, ' .', ' ьж', '123', '2024-04-02', 'Ожидает подтверждения', '2,1');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `about`, `price`, `image`) VALUES
(1, 'петунья', 'красная', 500, '2.jpg'),
(2, 'роза', 'розовая', 800, '1.jpg'),
(3, 'ромашка', 'белая', 300, '3.jpg'),
(4, 'гвоздика', 'лиловая', 700, '1.jpg'),
(5, 'сирень', 'фиолетовая', 500, '3.jpg'),
(6, 'яблоня', 'антоновка', 2000, '2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`) VALUES
(1, '122', '234234', 'htth@'),
(2, 'dfdf', 'dsdsdsd123123', 'dfdfdf@dad.ru'),
(3, 'fdfdfdfdf', '1ffffffwdwdw', 'htth@ff'),
(4, 'fdfdfdfdf', 'efefef', 'htth@ff');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `closets`
--
ALTER TABLE `closets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hoodie`
--
ALTER TABLE `hoodie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `closets`
--
ALTER TABLE `closets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `hoodie`
--
ALTER TABLE `hoodie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
