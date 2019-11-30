-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 30 2019 г., 22:22
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `product_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `article_id` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `shop_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `article_id`, `price`, `count`, `adress`, `supplier`, `shop_name`) VALUES
(1, 'Ковбаса \"Домашня\"', 95, 45, 'Ковельська 108', 'Герасимов Максим Андрійович', 'АТБ маркет'),
(2, 'Мінеральна вода \"Моршинська\"', 25, 80, 'м. Луцьк пр. Молоді 3', 'Антонюк Віталій Федорович', 'Соняшник'),
(6, 'Риба \"Янтарна\"', 300, 10, 'м. Луцьк пр. Молоді 3', 'Герасимов Максим Андрійович', 'Просто маркет'),
(8, 'Сік яблучний', 20, 45, 'Ковельська 108', 'Антонюк Віталій Федорович', 'Продукти'),
(3, 'Хліб чорний', 13, 20, 'м. Луцьк пр. Молоді 3', 'Герасимов Максим Андрійович', 'АТБ маркет'),
(4, 'Цукерки Рошен', 85, 1, 'Ковельська 108', 'Антонюк Віталій Федорович', 'Просто маркет'),
(5, 'Чіпси \"Люкс\"', 23, 50, 'Ковельська 108', 'Антонюк Віталій Федорович', 'Просто маркет');

-- --------------------------------------------------------

--
-- Структура таблицы `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `goods` varchar(50) NOT NULL,
  `shopper` varchar(50) NOT NULL,
  `sum` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sales`
--

INSERT INTO `sales` (`sale_id`, `goods`, `shopper`, `sum`, `date`) VALUES
(1, 'Ковбаса \"Домашня\"', 'Косніченко Олександр Андрійович', 25, 15102019),
(2, 'Цукерки Рошен', 'Василенко Віталій Іванович', 110, 27112019),
(3, 'Хліб чорний', 'Василенко Віталій Іванович', 26, 22112019),
(4, 'Чіпси \"Люкс\"', 'Марченко Олег Віталійович', 46, 22112019),
(16, 'Сік яблучний', 'Марченко Олег Віталійович', 40, 23112019);

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `shop_adress` varchar(50) NOT NULL,
  `vlasnyk` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `shop_adress`, `vlasnyk`, `name`) VALUES
(1, 'Ветеранів 22', 'Гончаренко Олексій Федорович', 'Просто маркет'),
(2, 'пр. Волі 32', 'Пономаренко Тимофій Валентинович', 'Соняшник'),
(3, 'пр. Молоді 42', 'Пономаренко Тимофій Валентинович', 'Продукти'),
(4, 'пр. Соборності 54', 'Шевчук Артем Федорович', 'АТБ маркет');

-- --------------------------------------------------------

--
-- Структура таблицы `shopper`
--

CREATE TABLE `shopper` (
  `nomer` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `interests` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shopper`
--

INSERT INTO `shopper` (`nomer`, `id`, `interests`) VALUES
(4, 'Василенко Антон Тарасович', 'Овочі, фрукти, напої'),
(1, 'Василенко Віталій Іванович', 'Хлібобулочні вироби, фрукти'),
(2, 'Косніченко Олександр Андрійович', 'Бакалія, М\'ясні вироби'),
(3, 'Марченко Олег Віталійович', 'Напої, фрукти');

-- --------------------------------------------------------

--
-- Структура таблицы `storage`
--

CREATE TABLE `storage` (
  `id` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `storage_adress` varchar(50) NOT NULL,
  `rent_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `storage`
--

INSERT INTO `storage` (`id`, `area`, `storage_adress`, `rent_price`) VALUES
(1, 500, 'Ковельська 108', 2500),
(4, 300, 'м. Луцьк пр. Волі 122', 2000),
(2, 250, 'м. Луцьк пр. Молоді 3', 1200);

-- --------------------------------------------------------

--
-- Структура таблицы `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `kontakt` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `supplier`
--

INSERT INTO `supplier` (`id`, `phone_number`, `kontakt`, `adress`) VALUES
(1, 954566856, 'Антонюк Віталій Федорович', 'м. Ковель вул. Перемоги 51'),
(2, 685423587, 'Герасимов Максим Андрійович', 'м. Луцьк вул. Рівненська 23а'),
(3, 674582318, 'Павлюк Артем Андрійович', 'м. Луцьк вул. Дубнівська 83'),
(4, 954568975, 'Романенко Андрій Палович', 'м. Рівне вул. Незалежності 23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `shop_name` (`shop_name`),
  ADD KEY `goods_ibfk_1` (`adress`),
  ADD KEY `goods_ibfk_2` (`supplier`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`) USING BTREE,
  ADD KEY `shopper` (`shopper`),
  ADD KEY `goods` (`goods`),
  ADD KEY `date` (`date`) USING BTREE;

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_adress`,`name`),
  ADD KEY `name` (`name`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `shopper`
--
ALTER TABLE `shopper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nomer` (`nomer`);

--
-- Индексы таблицы `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_adress`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kontakt`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `shopper`
--
ALTER TABLE `shopper`
  MODIFY `nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `storage`
--
ALTER TABLE `storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`adress`) REFERENCES `storage` (`storage_adress`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_ibfk_2` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`kontakt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `goods_ibfk_4` FOREIGN KEY (`shop_name`) REFERENCES `shop` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`goods`) REFERENCES `goods` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`shopper`) REFERENCES `shopper` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
