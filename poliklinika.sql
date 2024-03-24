-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2024 г., 12:54
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `poliklinika`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ambulaturnie_karti`
--

CREATE TABLE `ambulaturnie_karti` (
  `id_karta` int(11) NOT NULL,
  ` id_pacient` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date_created` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ambulaturnie_karti`
--

INSERT INTO `ambulaturnie_karti` (`id_karta`, ` id_pacient`, `number`, `date_created`) VALUES
(1, 1, 1, '21.03.2024');

-- --------------------------------------------------------

--
-- Структура таблицы `bolinichnie_listi`
--

CREATE TABLE `bolinichnie_listi` (
  `id_list` int(11) NOT NULL,
  `id_pacient` int(11) NOT NULL,
  `date_of_issue` date NOT NULL,
  `date_of_end` date NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `danie_dly_otheta_o_factorah_vliaushih_na_zdorovie`
--

CREATE TABLE `danie_dly_otheta_o_factorah_vliaushih_na_zdorovie` (
  `id_factor` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `diseane` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_cases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `danie_dly_otheta_o_vipolnenia_plana`
--

CREATE TABLE `danie_dly_otheta_o_vipolnenia_plana` (
  `id_danie` int(11) NOT NULL,
  `data` date NOT NULL,
  `total_visits` int(11) NOT NULL,
  `paid_visits` int(11) NOT NULL,
  `budget_visists` int(11) NOT NULL,
  `oms_visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `ligotnie_recepti`
--

CREATE TABLE `ligotnie_recepti` (
  `id_recept` int(11) NOT NULL,
  `id_pacient` int(11) NOT NULL,
  `day_of_issue` date NOT NULL,
  `medication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosage` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `otcheti`
--

CREATE TABLE `otcheti` (
  `id_otchet` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pacienti`
--

CREATE TABLE `pacienti` (
  `id_pacient` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `policy_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disability_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraindications` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pacienti`
--

INSERT INTO `pacienti` (`id_pacient`, `id_user`, `fio`, `date_of_birth`, `gender`, `passport_number`, `policy_number`, `address`, `phone_number`, `disability_group`, `contraindications`) VALUES
(1, 2, 'Клиент Клиент', '2013-02-20', 'Мужчина', '7023678236', '125125', 'Москва', '+7012352423', 'Отсутвует', 'Отсутвуют'),
(2, 1, 'Иванов Иван Иваныч', '1995-02-13', 'М', '03 01 518076', '346218', 'Москва  Ул.Петрова 13', '+79034567731', 'Нет', 'Нет');

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `otdelenia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`id_personal`, `id_user`, `otdelenia`, `fio`, `position`) VALUES
(1, 12, 'Терапевтическое', '123123123', ''),
(2, 17, 'Неврологическое отделение', 'nevrolog', 'Врач-невролог'),
(3, 17, 'Неврологическое отделение', 'nevrolog', 'Врач-невролог'),
(4, 17, 'Неврологическое отделение', 'nevrolog', 'Врач-невролог'),
(5, 17, 'Неврологическое отделение', 'nevrolog', 'Врач-невролог'),
(6, 22, 'Терапевтическое', 'Super Doctor One', 'Врач-терапевт');

-- --------------------------------------------------------

--
-- Структура таблицы `raspinie_vrachei`
--

CREATE TABLE `raspinie_vrachei` (
  `id_raspisanie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `day_of_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `taloni`
--

CREATE TABLE `taloni` (
  `id_talon` int(11) NOT NULL,
  `id_pacient` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_of_appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_card_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `taloni`
--

INSERT INTO `taloni` (`id_talon`, `id_pacient`, `id_personal`, `specialty`, `date_of_appointment`, `time_of_appointment`, `medical_card_number`) VALUES
(1, 1, 6, 'направление к неврологу', '13.04.2024', '15:00', 1),
(2, 2, 6, 'Врач-терапевт', '23.03.2024', '15:00', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `role`) VALUES
(1, 'registrator', 'registrator', 'Регистратор'),
(2, 'client', 'client', 'Пациент'),
(3, 'head_doctor', 'head_doctor', 'Главный врач'),
(12, 'doc', '123', 'Врач'),
(17, 'nev', 'nev', 'Врач'),
(18, 'nev', 'nev', 'Врач'),
(19, 'nev', 'nev', 'Врач'),
(20, 'nev', 'nev', 'Врач'),
(21, 'nev', 'nev', 'Врач'),
(22, 'super', 'super', 'Врач'),
(23, 'andrew', 'andrew', 'Врач');

-- --------------------------------------------------------

--
-- Структура таблицы `zapisi_na_priem`
--

CREATE TABLE `zapisi_na_priem` (
  `id_priem` int(11) NOT NULL,
  `id_pacient` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_talon` int(11) NOT NULL,
  `date_of_appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_of_appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescriptions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sick_leave` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zapisi_na_priem`
--

INSERT INTO `zapisi_na_priem` (`id_priem`, `id_pacient`, `id_personal`, `id_talon`, `date_of_appointment`, `time_of_appointment`, `complaint`, `diagnosis`, `prescriptions`, `sick_leave`) VALUES
(1, 1, 6, 2, '23.03.2024', '15:00', 'Болит голова jhdfgjdfhgdfgkldfhgldhfklgjdfgdfdfg', 'Мигрень sdfgsdfgdfgdfgdfg', 'Чай с малиной', 'Отсутствует');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ambulaturnie_karti`
--
ALTER TABLE `ambulaturnie_karti`
  ADD PRIMARY KEY (`id_karta`),
  ADD KEY ` id_pacient` (` id_pacient`);

--
-- Индексы таблицы `bolinichnie_listi`
--
ALTER TABLE `bolinichnie_listi`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `id_pacient` (`id_pacient`);

--
-- Индексы таблицы `danie_dly_otheta_o_factorah_vliaushih_na_zdorovie`
--
ALTER TABLE `danie_dly_otheta_o_factorah_vliaushih_na_zdorovie`
  ADD PRIMARY KEY (`id_factor`);

--
-- Индексы таблицы `danie_dly_otheta_o_vipolnenia_plana`
--
ALTER TABLE `danie_dly_otheta_o_vipolnenia_plana`
  ADD PRIMARY KEY (`id_danie`);

--
-- Индексы таблицы `ligotnie_recepti`
--
ALTER TABLE `ligotnie_recepti`
  ADD PRIMARY KEY (`id_recept`),
  ADD KEY `id_pacient` (`id_pacient`);

--
-- Индексы таблицы `otcheti`
--
ALTER TABLE `otcheti`
  ADD PRIMARY KEY (`id_otchet`);

--
-- Индексы таблицы `pacienti`
--
ALTER TABLE `pacienti`
  ADD PRIMARY KEY (`id_pacient`);

--
-- Индексы таблицы `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `raspinie_vrachei`
--
ALTER TABLE `raspinie_vrachei`
  ADD PRIMARY KEY (`id_raspisanie`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `taloni`
--
ALTER TABLE `taloni`
  ADD PRIMARY KEY (`id_talon`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `zapisi_na_priem`
--
ALTER TABLE `zapisi_na_priem`
  ADD PRIMARY KEY (`id_priem`),
  ADD KEY `id_pacient` (`id_pacient`),
  ADD KEY `id_talon` (`id_talon`),
  ADD KEY `id_personal` (`id_personal`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ambulaturnie_karti`
--
ALTER TABLE `ambulaturnie_karti`
  MODIFY `id_karta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `bolinichnie_listi`
--
ALTER TABLE `bolinichnie_listi`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `danie_dly_otheta_o_factorah_vliaushih_na_zdorovie`
--
ALTER TABLE `danie_dly_otheta_o_factorah_vliaushih_na_zdorovie`
  MODIFY `id_factor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `danie_dly_otheta_o_vipolnenia_plana`
--
ALTER TABLE `danie_dly_otheta_o_vipolnenia_plana`
  MODIFY `id_danie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ligotnie_recepti`
--
ALTER TABLE `ligotnie_recepti`
  MODIFY `id_recept` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `otcheti`
--
ALTER TABLE `otcheti`
  MODIFY `id_otchet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pacienti`
--
ALTER TABLE `pacienti`
  MODIFY `id_pacient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `raspinie_vrachei`
--
ALTER TABLE `raspinie_vrachei`
  MODIFY `id_raspisanie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `taloni`
--
ALTER TABLE `taloni`
  MODIFY `id_talon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `zapisi_na_priem`
--
ALTER TABLE `zapisi_na_priem`
  MODIFY `id_priem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `ambulaturnie_karti`
--
ALTER TABLE `ambulaturnie_karti`
  ADD CONSTRAINT `ambulaturnie_karti_ibfk_1` FOREIGN KEY (` id_pacient`) REFERENCES `pacienti` (`id_pacient`);

--
-- Ограничения внешнего ключа таблицы `bolinichnie_listi`
--
ALTER TABLE `bolinichnie_listi`
  ADD CONSTRAINT `bolinichnie_listi_ibfk_1` FOREIGN KEY (`id_pacient`) REFERENCES `pacienti` (`id_pacient`);

--
-- Ограничения внешнего ключа таблицы `ligotnie_recepti`
--
ALTER TABLE `ligotnie_recepti`
  ADD CONSTRAINT `ligotnie_recepti_ibfk_1` FOREIGN KEY (`id_pacient`) REFERENCES `pacienti` (`id_pacient`);

--
-- Ограничения внешнего ключа таблицы `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `raspinie_vrachei`
--
ALTER TABLE `raspinie_vrachei`
  ADD CONSTRAINT `raspinie_vrachei_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `zapisi_na_priem`
--
ALTER TABLE `zapisi_na_priem`
  ADD CONSTRAINT `zapisi_na_priem_ibfk_1` FOREIGN KEY (`id_pacient`) REFERENCES `pacienti` (`id_pacient`),
  ADD CONSTRAINT `zapisi_na_priem_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`),
  ADD CONSTRAINT `zapisi_na_priem_ibfk_3` FOREIGN KEY (`id_talon`) REFERENCES `taloni` (`id_talon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
