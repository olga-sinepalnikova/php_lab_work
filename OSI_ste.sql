-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2023 г., 11:03
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `OSI_ste`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `text`, `metadescription`, `metakeywords`, `date_created`, `author`) VALUES
(0, 'Первая запись', 'моя невероятная первая и очень важная запись на сайте', 'Здесь будет большой текст в будущем, а пока что тут лежит набросок каких-то мыслей.\r\nЯ хочу проверить сохранение абзацев', 'я не прочитала что это', 'запись, первая, новичок', '2023-04-25 10:29:00', 'создатель'),
(1, 'Моя вторая крутая запись', 'Невероятная вторая статья на этом сайте', 'Абзацы сохраняются, как чудесно (* ш *). Но нет форматирования текста, неудобненько <(\" ^ \")>.', 'всё ещё не знаю что написать', 'второй, статья, смайлики', '2023-04-25 10:32:00', 'создатель');

-- --------------------------------------------------------

--
-- Структура таблицы `guest_book`
--

CREATE TABLE `guest_book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `guest_book`
--

INSERT INTO `guest_book` (`id`, `name`, `message`, `email`, `date_created`) VALUES
(1, 'John', 'С другой стороны новая модель организационной деятельности позволяет выполнить важнейшие задания по разработке соответствующих условий активизации?\r\n\r\nРазнообразный и богатый опыт социально-экономическое развитие требует определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Практический опыт показывает, что дальнейшее развитие различных форм деятельности позволяет выполнить важнейшие задания по разработке направлений прогрессивного развития.\r\n\r\nДорогие друзья, начало повседневной работы по формированию позиции в значительной степени обуславливает создание форм воздействия. Не следует, однако, забывать о том, что рамки и место обучения кадров требует от нас анализа системы обучения кадров, соответствующей насущным потребностям?\r\n\r\nЗадача организации, в особенности же реализация намеченного плана развития требует от нас...', 'my_cool@email.com', '2023-05-02 11:24:56'),
(2, 'Александр', 'Повседневная практика показывает, что социально-экономическое развитие требует от нас системного анализа модели развития. Соображения высшего порядка, а также постоянное информационно-техническое обеспечение нашей деятельности напрямую зависит от системы обучения кадров, соответствующей насущным потребностям?\r\n\r\nНе следует, однако, забывать о том, что начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки всесторонне сбалансированных нововведений! Практический опыт показывает, что сложившаяся структура организации создаёт предпосылки качественно новых шагов для ключевых компонентов планируемого обновления? Равным образом начало повседневной работы по формированию позиции позволяет оценить значение системы масштабного изменения ряда параметров.\r\n\r\nСоображения высшего порядка, а также новая модель организационной деятельности способствует подготовке и реализации позиций, занимаемых участниками в отношении поставленных задач! Соображения высшего порядка, а также рамки и место обучения кадров создаёт предпосылки качественно новых шагов для дальнейших направлений развитая системы массового участия? Равным образом начало повседневной работы по формированию позиции способствует повышению актуальности форм воздействия!\r\n\r\nСоображения высшего порядка, а также постоянный количественный рост и...', 'sasha-cool-m4n@google.com', '2023-05-02 11:26:00');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`name`, `filename`, `date_created`, `published`) VALUES
('Динозавар', '1.jpg', '2023-05-23 00:00:00', 1),
('Пятно на Юпитере', '2.png', '2023-05-23 00:00:00', 1),
('Кольца из камней', '3.png', '2023-05-23 00:00:00', 1),
('Комета/астероди/огромный камень из космоса', '4.png', '2023-05-23 00:00:00', 1),
('СОЛНЦЕ ВЗОРВЁТСЯ ЧЕРЕЗ 3... 2...', '5.png', '2023-05-23 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `article_id` int(255) NOT NULL,
  `quest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `article_id`, `quest`, `answers`, `correct`) VALUES
(1, 0, 'Ваш любимый цвет? (подсказка: прозрачный)', 'Красный|Синий|Зелёный|Чёрный|Нет цвета', 4),
(2, 0, 'С помощью какого слова можно вывести строку на сайт или в консоль?', 'echo|and|error|session_start', 0),
(3, 1, 'В чём суть текста \"lorem ipsum\"?', 'Тайное послание|Текст-заглушка|Смысл жизни на древнем языке', 1),
(4, 1, 'Просто выберите 4 вариант ответа.', 'Это первый вариант|Третий врёт|Четвёртый здесь|Во втором правда', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `guest_book`
--
ALTER TABLE `guest_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT для таблицы `guest_book`
--
ALTER TABLE `guest_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
