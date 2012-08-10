-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 29 2011 г., 16:51
-- Версия сервера: 5.1.41
-- Версия PHP: 5.3.2-1ubuntu4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- База данных: `host1000528`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ban`
--

CREATE TABLE IF NOT EXISTS `ban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IP` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `ban`
--


-- --------------------------------------------------------

--
-- Структура таблицы `baner`
--

CREATE TABLE IF NOT EXISTS `baner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `baner`
--

INSERT INTO `baner` (`id`, `link`, `image`) VALUES
(1, 'http://www.allianzig.ru/panama/?oid=269', '../images/baner1.gif'),
(2, 'http://www.allianzig.ru/panama/?oid=270', '../images/baner2.gif\r\n'),
(3, 'http://buyworld.ru/Panama/?l=262&ac=EUR&pid=595', '../images/baner3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `banerreclama`
--

CREATE TABLE IF NOT EXISTS `banerreclama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baner` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `banerreclama`
--

INSERT INTO `banerreclama` (`id`, `baner`, `link`) VALUES
(16, '../images/baner/sidebar/_1228211326.gif', ''),
(19, '../images/baner/sidebar/_1228211473.gif', ''),
(21, '../images/baner/sidebar/_1228211299.gif', ''),
(23, '../images/baner/sidebar/_1228211391.gif', ''),
(24, '../images/baner/sidebar/7_1236189893.gif', '');

-- --------------------------------------------------------

--
-- Структура таблицы `baner_network`
--

CREATE TABLE IF NOT EXISTS `baner_network` (
  `type` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `size` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Дамп данных таблицы `baner_network`
--

INSERT INTO `baner_network` (`type`, `id`, `link`, `image`, `size`) VALUES
(3, 50, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/18_1237994518.gif', '200x50'),
(3, 51, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/19_1237994646.jpg', '200x50'),
(3, 52, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/21_1237994690.gif', '200x50'),
(3, 53, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/22_1237994753.jpg', '200x50'),
(3, 54, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/23_1237995162.gif', '200x50'),
(3, 55, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/24_1237995190.gif', '200x50'),
(3, 56, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/25_1237995247.gif', '200x50'),
(3, 57, 'javascript:page(5);headermenu(aa6);topmenu3();headermenu2(dd6);', '../images/baner/200x50/36_1242715172.gif', '200x50'),
(3, 58, 'http://www.javascript-coder.com/window-popup/javascript-window-open.phtml', '../images/baner/200x50/20_1237994668.jpg', '200x50'),
(3, 67, 'http://ru.wikipedia.org/wiki/%D0%90%D0%B4', '../images/baner/200x105/108530_1280_1024.jpg', '200x105');

-- --------------------------------------------------------

--
-- Структура таблицы `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `id_continent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `name_ger` text NOT NULL,
  `name_eng` text NOT NULL,
  PRIMARY KEY (`id_continent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `continent`
--

INSERT INTO `continent` (`id_continent`, `name`, `name_ger`, `name_eng`) VALUES
(1, 'Европа', 'Europa', 'Europe'),
(2, 'Северная, Центральная и Южная Америка', 'Nord-, Mittel-und Südamerika', 'North, Central and South America'),
(3, 'Азия', 'Asien', 'Asia'),
(4, 'Африка', 'Afrika', 'Africa'),
(5, 'Австралия и Океания', 'Australien und Ozeanien', 'Australia and Oceania');

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id_country` int(11) NOT NULL AUTO_INCREMENT,
  `continent_id_continent` int(10) unsigned NOT NULL,
  `name` text NOT NULL,
  `name_ger` text NOT NULL,
  `name_eng` text NOT NULL,
  PRIMARY KEY (`id_country`),
  KEY `continent_id_continent` (`continent_id_continent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=195 ;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id_country`, `continent_id_continent`, `name`, `name_ger`, `name_eng`) VALUES
(1, 1, 'Россия', 'Russland', 'Russia'),
(2, 1, 'Германия', 'Deutschland', 'Germany'),
(3, 1, 'Франция', 'France', 'France'),
(4, 1, 'Болгария', 'Bulgarien', 'Bulgaria'),
(5, 1, 'Черногория', 'Montenegro', 'Montenegro'),
(6, 1, 'Кипр', 'Zypern', 'Cyprus'),
(7, 1, 'Финляндия', 'Finnland', 'Finland'),
(8, 1, 'Испания', 'Spanien', 'Spain'),
(9, 1, 'Италия', 'Italien', 'Italy'),
(10, 1, 'Швейцария', 'Schweiz', 'Switzerland'),
(11, 1, 'Греция', 'Griechenland', 'Greece'),
(12, 1, 'Австрия', 'Osterreich', 'Austria'),
(13, 1, 'Великобритания', 'Vereinigtes Konigreich', 'United Kingdom'),
(14, 1, 'Швеция', 'Schweden', 'Sweden'),
(15, 1, 'Норвегия', 'Norwegen', 'Norway'),
(16, 1, 'Словекия', 'Slovekiya', 'Slovekiya'),
(17, 1, 'Хорватия', 'Kroatien', 'Croatia'),
(18, 1, 'Португалия', 'Portugal', 'Portugal'),
(19, 1, 'Турция', 'Die Turkei', 'The Turkey'),
(20, 1, 'Бельгия', 'Belgien', 'Belgium'),
(21, 1, 'Албания', 'Albanien', 'Albania'),
(22, 1, 'Андора', 'Andorra', 'Andorra'),
(23, 1, 'Белоруссия', 'Wei?russland', 'Byelorussia'),
(24, 1, 'Босния и Герцеговина', 'Bosnien und Herzegowina', 'Bosnia and Herzegovina'),
(25, 1, 'Дания', 'Danemark', 'Denmark'),
(26, 1, 'Ирландия', 'Irland', 'Ireland'),
(27, 1, 'Исландия', 'Island', 'Iceland'),
(28, 1, 'Латвия', 'Lettland', 'Latvia'),
(29, 1, 'Литва', 'Litauen', 'Lithuania'),
(30, 1, 'Лихтенштейн', 'Liechtenstein', 'Liechtenstein'),
(31, 1, 'Люксембург', 'Luxemburg', 'Luxembourg'),
(32, 1, 'Мальта', 'Malta', 'Malta'),
(33, 1, 'Македония', 'Mazedonien', 'Macedonia'),
(34, 1, 'Молдавия', 'Republik Moldau', 'Moldova'),
(35, 1, 'Монако', 'Monaco', 'Monaco'),
(36, 1, 'Нидерланды', 'Niederlande', 'Netherlands'),
(37, 1, 'Польша', 'Polen', 'Poland'),
(38, 1, 'Румыния', 'Rumanien', 'Romania'),
(39, 1, 'Сан-Марино', 'San Marino', 'San Marino'),
(40, 1, 'Сербия', 'Serbien', 'Serbia'),
(41, 1, 'Словения', 'Slowenien', 'Slovenia'),
(42, 1, 'Украина', 'Ukraine', 'Ukraine'),
(43, 1, 'Чехия', 'Tschechische Republik', 'Czech Republic'),
(44, 1, 'Эстония', 'Estland', 'Estonia'),
(45, 2, 'США', 'USA', 'USA'),
(46, 2, 'Панама', 'Panama', 'Panama'),
(47, 2, 'Канада', 'Kanada', 'Canada'),
(48, 2, 'Мексика', 'Mexiko', 'Mexico'),
(49, 2, 'Багамы', 'Bahamas', 'Bahamas'),
(50, 2, 'Доминикана', 'Dominikanische Republik', 'Dominican Republic'),
(51, 2, 'Коста-Рика', 'Costa Rica', 'Costa Rica'),
(52, 2, 'Куба', 'Kuba', 'Cuba'),
(53, 2, 'Ямайка', 'Jamaika', 'Jamaica'),
(54, 2, 'Аргентина', 'Argentinien', 'Argentina'),
(55, 2, 'Бразилия', 'Brasilien', 'Brazil'),
(56, 2, 'Венесуэла', 'Venezuela', 'Venezuela'),
(57, 2, 'Колумбия', 'Kolumbien', 'Colombia'),
(58, 2, 'Чили', 'Chile', 'Chile'),
(59, 2, 'Эквадор', 'Ecuador', 'Ecuador'),
(60, 2, 'Антигуа и Барбуда', 'Antigua und Barbuda', 'Antigua and Barbuda'),
(61, 2, 'Барбадос', 'Barbados', 'Barbados'),
(62, 2, 'Белиз', 'Belize', 'Belize'),
(63, 2, 'Гватемала', 'Guatemala', 'Guatemala'),
(64, 2, 'Гондурас', 'Honduras', 'Honduras'),
(65, 2, 'Гренада', 'Grenada', 'Grenada'),
(66, 2, 'Доминика', 'Dominica', 'Dominica'),
(67, 2, 'Никарагуа', 'Nicaragua', 'Nicaragua'),
(68, 2, 'Сальвадор', 'El Salvador', 'El Salvador'),
(69, 2, 'Сент-Люсия', 'St. Lucia', 'St. Lucia'),
(70, 2, 'Сент-Винсент и Гренадины', 'Saint Vincent und die Grenadinen', 'Saint Vincent and the Grenadines'),
(71, 2, 'Сент-Китс и Невис', 'Saint Kitts und Nevis', 'Saint Kitts and Nevis'),
(72, 2, 'Тринидад и Тобаго', 'Trinidad und Tobago', 'Trinidad and Tobago'),
(73, 2, 'Боливия', 'Bolivien', 'Bolivia'),
(74, 2, 'Гайана', 'Guyana', 'Guyana'),
(75, 2, 'Парагвай', 'Paraguay', 'Paraguay'),
(76, 2, 'Перу', 'Peru', 'Peru'),
(77, 2, 'Суринам', 'Suriname', 'Suriname'),
(78, 2, 'Уругвай', 'Uruguay', 'Uruguay'),
(79, 2, 'Гаити', 'Haiti', 'Haiti'),
(80, 3, 'ОАЭ', 'UAE', 'UAE'),
(81, 3, 'Израиль', 'Israel', 'Israel'),
(82, 3, 'Таиланд', 'Thailand', 'Thailand'),
(83, 3, 'Малайзия', 'Malaysia', 'Malaysia'),
(84, 3, 'Азербайджан', 'Aserbaidschan', 'Azerbaijan'),
(85, 3, 'Казахстан', 'Kasachstan', 'Kazakhstan'),
(86, 3, 'Япония', 'Japan', 'Japan'),
(87, 3, 'Армения', 'Armenien', 'Armenia'),
(88, 3, 'Бангладеш', 'Bangladesch', 'Bangladesh'),
(89, 3, 'Бахрейн', 'Bahrain', 'Bahrain'),
(90, 3, 'Бруней', 'Brunei', 'Brunei Darussalam'),
(91, 3, 'Бутан', 'Bhutan', 'Bhutan'),
(92, 3, 'Восточный Тимор', 'Osttimor', 'East Timor'),
(93, 3, 'Вьетнам', 'Vietnam', 'Vietnam'),
(94, 3, 'Грузия', 'Georgien', 'Georgia'),
(95, 3, 'Индия', 'India', 'India'),
(96, 3, 'Индонезия', 'Indonesien', 'Indonesia'),
(97, 3, 'Иордания', 'Jordanien', 'Jordan'),
(98, 3, 'Ирак', 'Irak', 'Iraq'),
(99, 3, 'Иран', 'Iran', 'Iran'),
(100, 3, 'Йемен', 'Jemen', 'Yemen'),
(101, 3, 'Камбоджа', 'Kambodscha', 'Cambodia'),
(102, 3, 'Катар', 'Katar', 'Qatar'),
(103, 3, 'Киргизия', 'Kirgisistan', 'Kyrgyzstan'),
(104, 3, 'Китай', 'China', 'China'),
(105, 3, 'КНДР', 'Nordkorea', 'North Korea'),
(106, 3, 'Кувейт', 'Kuwait', 'Kuwait'),
(107, 3, 'Лаос', 'Laos', 'Laos'),
(108, 3, 'Ливан', 'Libanon', 'Lebanon'),
(109, 3, 'Мальдивы', 'Malediven', 'Maldives'),
(110, 3, 'Монголия', 'Mongolei', 'Mongolia'),
(111, 3, 'Афганистан', 'Afghanistan', 'Afghanistan'),
(112, 3, 'Мьянма', 'Myanmar', 'Myanmar'),
(113, 3, 'Непал', 'Nepal', 'Nepal'),
(114, 3, 'Оман', 'Oman', 'Oman'),
(115, 3, 'Пакистан', 'Pakistan', 'Pakistan'),
(116, 3, 'Палестина', 'Palastina', 'Palestine'),
(117, 3, 'Саудовская Аравия', 'Saudi-Arabien', 'Saudi Arabia'),
(118, 3, 'Сирия', 'Syrien', 'Syria'),
(119, 3, 'Сингапур', 'Singapur', 'Singapore'),
(120, 3, 'Таджикистан', 'Tadschikistan', 'Tajikistan'),
(121, 3, 'Туркменистан', 'Turkmenistan', 'Turkmenistan'),
(122, 3, 'Узбекистан', 'Usbekistan', 'Uzbekistan'),
(123, 3, 'Филиппины', 'Philippinen', 'Philippines'),
(124, 3, 'Шри-Ланка', 'Sri Lanka', 'Sri Lanka'),
(125, 3, 'Корея', 'Korea', 'Korea'),
(126, 4, 'Египет', 'Agypten', 'Egypt'),
(127, 4, 'Марокко', 'Marokko', 'Morocco'),
(128, 4, 'ЮАР', 'Sudafrika', 'South Africa'),
(129, 4, 'Маврикий', 'Mauritius', 'Mauritius'),
(130, 4, 'Мадагаскар', 'Madagaskar', 'Madagascar'),
(131, 4, 'Алжир', 'Algerien', 'Algeria'),
(132, 4, 'Ливия', 'Libyen', 'Libya'),
(133, 4, 'Судан', 'Sudan', 'Sudan'),
(134, 4, 'Тунис', 'Tunesien', 'Tunisia'),
(135, 4, 'Бенин', 'Benin', 'Benin'),
(136, 4, 'Буркина Фасо', 'Burkina Faso', 'Burkina Faso'),
(137, 4, 'Гамбия', 'Gambia', 'Gambia'),
(138, 4, 'Гана', 'Ghana', 'Ghana'),
(139, 4, 'Гвинея', 'Guinea', 'Guinea'),
(140, 4, 'Гвинея-Бисау', 'Guinea-Bissau', 'Guinea-Bissau'),
(141, 4, 'Кабо-Верде', 'Kap Verde', 'Cape Verde'),
(142, 4, 'Кот-д’Ивуар', 'Cote d Ivoire', 'Cote d Ivoire '),
(143, 4, 'Либерия', 'Liberia', 'Liberia'),
(144, 4, 'Мали', 'Mali', 'Mali'),
(145, 4, 'Мавритания', 'Mauretanien', 'Mauritania'),
(146, 4, 'Нигер', 'Niger', 'Niger'),
(147, 4, 'Нигерия', 'Nigeria', 'Nigeria'),
(148, 4, 'Сенегал', 'Senegal', 'Senegal'),
(149, 4, 'Сьерра-Леоне', 'Sierra Leone', 'Sierra Leone'),
(150, 4, 'Того', 'Togo', 'Togo'),
(151, 4, 'Ангола', 'Angola', 'Angola'),
(152, 4, 'Габон', 'Gabun', 'Gabon'),
(153, 4, 'Камерун', 'Kamerun', 'Cameroon'),
(154, 4, 'ДР Конго', 'DR Kongo', 'DR Congo'),
(155, 4, 'Республика Конго', 'Republik Kongo', 'Republic of the Congo'),
(156, 4, 'Сан-Томе и Принсипи', 'Sao Tome und Principe', 'Sao Tome and Principe'),
(157, 4, 'ЦАР', 'CAR', 'CAR'),
(158, 4, 'Чад', 'Chad', 'Chad'),
(159, 4, 'Экваториальная Гвинея', 'Aquatorialguinea', 'Equatorial Guinea'),
(160, 4, 'Бурунди', 'Burundi', 'Burundi'),
(161, 4, 'Джибути', 'Dschibuti', 'Djibouti'),
(162, 4, 'Замбия', 'Sambia', 'Zambia'),
(163, 4, 'Зимбабве', 'Simbabwe', 'Zimbabwe'),
(164, 4, 'Кения', 'Kenia', 'Kenya'),
(165, 4, 'Коморские Острова', 'Komoren', 'Comoros'),
(166, 4, 'Малави', 'Malawi', 'Malawi'),
(167, 4, 'Мозамбик', 'Mosambik', 'Mozambique'),
(168, 4, 'Руанда', 'Ruanda', 'Rwanda'),
(169, 4, 'Сейшельские Острова', 'Seychellen', 'Seychelles'),
(170, 4, 'Сомали', 'Somalia', 'Somalia'),
(171, 4, 'Танзания', 'Tansania', 'Tanzania'),
(172, 4, 'Уганда', 'Uganda', 'Uganda'),
(173, 4, 'Эритрея', 'Eritrea', 'Eritrea'),
(174, 4, 'Эфиопия', 'Athiopien', 'Ethiopia'),
(175, 4, 'Ботсвана', 'Botsuana', 'Botswana'),
(176, 4, 'Лесото', 'Lesotho', 'Lesotho'),
(177, 4, 'Намибия', 'Namibia', 'Namibia'),
(178, 4, 'Свазиленд', 'Swasiland', 'Swaziland'),
(179, 5, 'Австралия', 'Australien', 'Australia'),
(180, 5, 'Новая Зеландия', 'New Zealand', 'New Zealand'),
(181, 5, 'Вануату', 'Vanuatu', 'Vanuatu'),
(182, 5, 'Папуа — Новая Гвинея', 'Papua - New Guinea', 'Papua - New Guinea'),
(183, 5, 'Остров Норфолк', 'Norfolk-Insel', 'Norfolk Island'),
(184, 5, 'Соломоновы Острова', 'Salomonen', 'Solomon Islands'),
(185, 5, 'Фиджи', 'Fiji', 'Fiji'),
(186, 5, 'Гавайи', 'Hawaii', 'Hawaii'),
(187, 5, 'Кирибати', 'Kiribati', 'Kiribati'),
(188, 5, 'Маршалловы Острова', 'Marshall-Inseln', 'Marshall Islands'),
(189, 5, 'Науру', 'Nauru', 'Nauru'),
(190, 5, 'Палау', 'Palau', 'Palau'),
(191, 5, 'Федеративные Штаты Микронезии', 'Mikronesien', 'Micronesia'),
(192, 5, 'Самоа', 'Samoa', 'Samoa'),
(193, 5, 'Тонга', 'Tonga', 'Tonga'),
(194, 5, 'Тувалу', 'Tuvalu', 'Tuvalu');

-- --------------------------------------------------------

--
-- Структура таблицы `ip`
--

CREATE TABLE IF NOT EXISTS `ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `time` bigint(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=329 ;

--
-- Дамп данных таблицы `ip`
--

INSERT INTO `ip` (`id`, `ip`, `time`) VALUES
(327, '178.101.62.250', 1306603350),
(328, '127.0.0.1', 1306673448);

-- --------------------------------------------------------

--
-- Структура таблицы `mailer`
--

CREATE TABLE IF NOT EXISTS `mailer` (
  `id_mailer` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id_theme` int(11) NOT NULL,
  `fio` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id_mailer`),
  KEY `theme_id_theme` (`theme_id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `mailer`
--

INSERT INTO `mailer` (`id_mailer`, `theme_id_theme`, `fio`, `email`) VALUES
(6, 2, 'qww', 'qw'),
(7, 1, 'нрпр', 'аппаап'),
(8, 1, '', 'qw@we.ry'),
(9, 1, 'asd', 'dgreez00@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `content_eng` text NOT NULL,
  `content_ger` text NOT NULL,
  `head_eng` text NOT NULL,
  `head_ger` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `head`, `content`, `content_eng`, `content_ger`, `head_eng`, `head_ger`) VALUES
(1, 'О портале', '<h1>\r\n	О портале</h1>\r\n<div style="padding-left: 1px; padding-top: 10px;">\r\n	<b>Здравствуйте, Уважаемый пользователь!</b><br />\r\n	<br />\r\n	Мы рады приветствовать Вас на нашем портале<br />\r\n	<br />\r\n	Наш портал <font color="#ff6600">ориентирован на российского потребителя</font> и для удобства разбит на несколько рубрик.&nbsp;<br />\r\n	<br />\r\n	К Вашему вниманию представлен широкий спектр недвижимости всех типов и со всех континентов. Здесь Вы можете найти всё, что вам нужно: <font color="#ff6600">квартиры, апартаменты, дома, коттеджи, кондо отели, офисные помещения, земельные участки и др</font>. К Вашим услугам удобный классификатор, по которому Вы легко найдете объект не только по его типу, но и по месту расположения.<br />\r\n	<br />\r\n	Для любителей зарубежного отдыха у нас представлены <font color="#ff6600">пакеты туров</font> удовлетворяющих самые взыскательные вкусы.<br />\r\n	<br />\r\n	Ищите партнера по бизнесу? Расширяете сферу деятельности и рынок сбыта? - рубрика &laquo;<b>Бизнес Партнер</b>&raquo; станет Вашим проводником в мире бизнеса.<br />\r\n	<br />\r\n	Рубрика &laquo;<b>Инвестиционные Проекты</b>&raquo; предложит Вам широкий выбор вариантов для инвестирования.&nbsp;<br />\r\n	<br />\r\n	Администрация Портала благодарит Вас за посещение нашего портала и желает Вам удачного поиска.&nbsp;<br />\r\n	<br />\r\n	По вопросам <font color="#ff6600">приобретения недвижимости, сотрудничества и размещения рекламы</font> обращайтесь к администрации:&nbsp;<br />\r\n	<br />\r\n	Тел.&nbsp;<br />\r\n	<br />\r\n	skype:<br />\r\n	<br />\r\n	E-mail:<br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	&nbsp;</div>\r\n', '<h1>\r\n	About the Portal</h1>\r\n<div style="padding-left: 1px; padding-top: 10px;">\r\n	<b>Hello, Dear user! <!-- b--><br />\r\n	<br />\r\n	We welcome you to our portal Buyworld.ru<br />\r\n	<br />\r\n	Our portal <font color="#ff6600"> focused on the Russian consumer <!-- font-->and for convenience is divided into several headings.<br />\r\n	<br />\r\n	To your attention a wide range of real estate of all types and from all continents. Here you can find everything you need: <font color="#ff6600">, apartments, houses, cottages, condo hotels, office buildings, land, etc <!-- font-->. The hotel offers comfortable classifier, which you can easily find an object not only by its type, but also by location.<br />\r\n	<br />\r\n	For fans of foreign holiday we are <font color="#ff6600"> packages tours <!-- font-->satisfy the most demanding tastes.<br />\r\n	<br />\r\n	Find a business partner? Expanded its business and the market? - Topic &laquo;<b> Business Partner <!-- b-->&raquo; will be your guide in the business world.<br />\r\n	<br />\r\n	Topic &laquo;<b> Investment Projects <!-- b-->&raquo; offer you a wide choice of options for investment.<br />\r\n	<br />\r\n	Administration Portal to thank you for visiting our portal and wish you a successful search.<br />\r\n	<br />\r\n	For <font color="#ff6600"> real estate acquisition, cooperation and advertising <!-- font-->to contact the administration:<br />\r\n	<br />\r\n	Tel.<br />\r\n	<br />\r\n	skype:<br />\r\n	<br />\r\n	E-mail: <a href="mailto:buyworld.ru@gmail.com"> <!-- a--><br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n<!-- Div-->	</a></font></b></b></font></font></font></b></div>\r\n', '<h1>\r\n	&Uuml;ber das Portal</h1>\r\n<div style="padding-left: 1px; padding-top: 10px;">\r\n	<b>Hallo, liebe User! <!-- b--><br />\r\n	<br />\r\n	Wir begr&uuml;&szlig;en Sie auf unserem Portal Buyworld.ru<br />\r\n	<br />\r\n	Unser Portal <font color="#ff6600"> die russischen Verbraucher <!-- font-->und f&uuml;r die Bequemlichkeit ausgerichtet ist in verschiedene Rubriken unterteilt.<br />\r\n	<br />\r\n	Ihre Aufmerksamkeit einer breiten Palette von Immobilien aller Art und aus allen Kontinenten. Hier finden Sie alles was Sie brauchen: <font color="#ff6600">, Wohnungen, H&auml;user, H&uuml;tten, Condo-Hotels, B&uuml;rogeb&auml;ude, Grundst&uuml;cke, etc <!-- font-->. Das Hotel bietet komfortable Sichter, die Sie leicht finden kann ein Objekt nicht nur durch ihren Typ, sondern auch durch die Lage.<br />\r\n	<br />\r\n	F&uuml;r Fans von ausl&auml;ndischen Urlaub sind wir <font color="#ff6600"> Pakete Touren <!-- font-->Anforderungen der anspruchsvollsten Geschmack.<br />\r\n	<br />\r\n	Suchen Sie einen Gesch&auml;ftspartner? Baute das Gesch&auml;ft und der Markt? - Topic &laquo;<b> Business Partner <!-- b-->&raquo; Ihr F&uuml;hrer in der Gesch&auml;ftswelt werden.<br />\r\n	<br />\r\n	Topic &laquo;<b> Investitionsprojekte <!-- b-->&raquo; bieten Ihnen eine gro&szlig;e Auswahl an Optionen f&uuml;r Investitionen.<br />\r\n	<br />\r\n	Administration Portal &uuml;ber Ihren Besuch auf unserem Portal und m&ouml;chten eine erfolgreiche Suche zu danken.<br />\r\n	<br />\r\n	F&uuml;r <font color="#ff6600"> Immobilienerwerb, um die Zusammenarbeit und der Werbung <!-- font-->Kontakt der Verwaltung:<br />\r\n	<br />\r\n	Tel. ,<br />\r\n	<br />\r\n	skype:<br />\r\n	<br />\r\n	E-Mail:&nbsp;<a href="mailto:buyworld.ru@gmail.com"> <!-- a--><br />\r\n	<br />\r\n	<br />\r\n	<br />\r\n	</a></font></b></b></font></font></font></b></div>\r\n<p>\r\n	<b><font color="#ff6600"><font color="#ff6600"><font color="#ff6600"><b><b><font color="#ff6600"><a href="mailto:buyworld.ru@gmail.com"> </a></font></b></b></font></font></font></b></p>\r\n', 'About the Portal', 'Über das Portal'),
(2, 'Помощь', '', '', '', 'Help', 'Hilfe'),
(3, 'Реклама', '', '', '', 'Advertis.', 'Werbung'),
(4, 'Акции', '<p>\r\n	акции</p>\r\n', '', '', 'Stocks', 'Aktien'),
(5, 'Контакты ', '<h1>\r\n	Контакты</h1>\r\n<p>\r\n	Тел.</p>\r\n<p>\r\n	skype:</p>\r\n<p>\r\n	E-mail:&nbsp;</p>\r\n<p>\r\n	По вопросам размещения на сайте, приобретения недвижимости и поиска инвестиционных проектов за рубежом обращайтесь по вышеуказанным телефонам или эл. почте.</p>\r\n<p>\r\n	С уважением,</p>\r\n<p>\r\n	Администрация портала.</p>\r\n', '<p>\r\n	<span class="long_text" id="result_box"><span style="background-color: rgb(255, 255, 255);" title="Контакты">Contact<br />\r\n	<br />\r\n	</span><span style="background-color: rgb(255, 255, 255);" title="Тел.">Tel. </span><span title="+7 (495) 518-34-84"><br />\r\n	<br />\r\n	</span><span style="background-color: rgb(255, 255, 255);" title="skype: buyworld.ru">skype:<br />\r\n	<br />\r\n	</span><span style="background-color: rgb(255, 255, 255);" title="E-mail: info@buyworld.ru">E-mail:<br />\r\n	<br />\r\n	</span><span style="background-color: rgb(255, 255, 255);" title="По вопросам \r\nразмещения на сайте, приобретения недвижимости и поиска инвестиционных \r\nпроектов за рубежом обращайтесь по вышеуказанным телефонам или эл.">For accommodation on the site, real estate acquisition and retrieval of investment projects abroad, please contact the above phone or email. </span><span title="почте.">mail.<br />\r\n	<br />\r\n	</span><span style="background-color: rgb(255, 255, 255);" title="С уважением,">Sincerely,<br />\r\n	<br />\r\n	</span><span title="Администрация портала.">Portal administration.</span></span></p>\r\n', '<h1>\r\n	Kontakte</h1>\r\n<div style="padding-left: 1px; padding-top: 10px;">\r\n	<p>\r\n		Tel. <!-- p--></p>\r\n	<p>\r\n		skype: <!-- p--></p>\r\n	<p>\r\n		E-Mail: <a href="mailto:"><!-- a--><!-- p--></a></p>\r\n	<p>\r\n		<a href="mailto:info@buyworld.ru">F&uuml;r die Ver&ouml;ffentlichung auf der Webseite, Immobilien erwerben und die Suche nach Investitionen im Ausland, kontaktieren Sie bitte die oben genannten Telefonnummern oder E-Mail. Mail. <!-- p--></a></p>\r\n	<p>\r\n		<a href="mailto:info@buyworld.ru">Mit freundlichen Gr&uuml;&szlig;en, <!-- p--></a></p>\r\n	<p>\r\n		<a href="mailto:info@buyworld.ru">Portal-Administration. <!-- P--><!-- Div--></a></p>\r\n</div>\r\n', 'Contact', 'Kontakt');

-- --------------------------------------------------------

--
-- Структура таблицы `object`
--

CREATE TABLE IF NOT EXISTS `object` (
  `id_object` int(11) NOT NULL AUTO_INCREMENT,
  `theme_id_theme` int(11) NOT NULL,
  `country_id_country` int(11) NOT NULL,
  `image` text NOT NULL,
  `hint` text NOT NULL,
  `hint_eng` text NOT NULL,
  `hint_ger` text NOT NULL,
  PRIMARY KEY (`id_object`),
  KEY `country_id_country` (`country_id_country`),
  KEY `theme_id_theme` (`theme_id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Дамп данных таблицы `object`
--

INSERT INTO `object` (`id_object`, `theme_id_theme`, `country_id_country`, `image`, `hint`, `hint_eng`, `hint_ger`) VALUES
(1, 1, 1, '../adminpanel/images/object/1object.jpg', 'Проекты месяца', 'Projects month', 'Projekte Monat'),
(12, 1, 2, '../adminpanel/images/object/Hamb_German_House.jpg', 'Дома', 'Houses', 'Häusern'),
(26, 1, 2, '../adminpanel/images/object/1ger3.jpg', 'Офисы', 'Оffices', 'Ofisy'),
(33, 1, 1, '../adminpanel/images/object/kvartira.jpg', 'Квартиры', 'Apartments', 'Ferienwohnungen'),
(34, 1, 1, '../adminpanel/images/object/rus_kotedj.jpg', 'Дома', 'New object', 'Neues Objekt');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `id_object` int(11) NOT NULL,
  `content_eng` text NOT NULL,
  `content_ger` text NOT NULL,
  `opisanie` text NOT NULL,
  `opisanie_ger` text NOT NULL,
  `opisanie_eng` text NOT NULL,
  `img` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `kontakt` text NOT NULL,
  `date` date NOT NULL,
  `square` int(11) NOT NULL,
  `price` double NOT NULL,
  `currency_key` varchar(3) NOT NULL,
  `dob` int(1) NOT NULL,
  PRIMARY KEY (`id_page`),
  KEY `id_object` (`id_object`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id_page`, `content`, `id_object`, `content_eng`, `content_ger`, `opisanie`, `opisanie_ger`, `opisanie_eng`, `img`, `image_2`, `image_3`, `kontakt`, `date`, `square`, `price`, `currency_key`, `dob`) VALUES
(6, '<p style="text-align: justify;">\r\nАрхитектурный памятник 13-го Века, полностью отремонтирован и модернизирован в 1993/95. Отель расположен в курорте недалеко от Рейна, в земле Рейнланд-Пфальц. Красивая природа, целебные источники, исторические места<br />\r\n	&nbsp;</p>\r\n', 1, 'Monument of architecture 13 century, totally renovated and modernized in 1993/95. Located in the resort town near the Rhine, in the land of Rhineland-Palatinate. The beautiful nature, mineral springs, historical sites <br />\r\n<br />\r\n</ p>', '<p>\r\nDenkmal der Architektur 13. Jahrhundert, komplett renoviert und modernisiert 1993/95. Das Hotel liegt im Ferienort in der Nähe des Rheins, in das Land Rheinland-Pfalz. Die wunderschöne Natur, Heilquellen, historische Stätten <br />\r\n<br />\r\n</ P>', 'Архитектурный памятник 13-го Века', 'Denkmal der Architektur 13', 'Monument of architecture 13 century', 'images/objavl/54725735_000_0007.jpg', 'images/objavl/54725735_000_0007.jpg', '', '', '0000-00-00', 0, 0, '', 1),
(7, '<p>Дом расположен в лучшем районе города Бремен- Арбергенс. Дом построен в 1956 году и полностью реконструирован в 2000 году.\r\n\r\nУхоженный сад с системой автономного полива, плодовые деревья и цветы.\r\nДом расположен в тихом переулке. Вся инфраструктура имеется поблизости - поликлиника, магазины, школа.</p>\r\n', 12, 'House German', 'Germanischen', 'Дом в Бремене', 'German', 'Недвижимость Германия', 'images/objavl/a000244l.jpg', 'images/objavl/a000244l.jpg', '', '', '2010-06-01', 100, 100, 'eur', 1),
(16, 'Состав комплекса\r\n\r\nКомплекс состоит из 3-х зданий\r\n10 -ти этажное площадью 7 700 кв.м.\r\n4-х этажное площадью 5 383 кв.м.\r\n3-х этажное площадью 2 363 кв.м.\r\n\r\nТехнические характеристики:\r\nЭтажность: переменная 3 – 10 этажей\r\nПарковка: проектная 1 150 м/мест\r\nтекущая 270 м/мест\r\nМощность:\r\nна участке 1.6 Мвт электричества\r\nУстановлены: вентилируемый фасад, новые пластиковые оконные конструкции', 26, '', '', 'Брюдерштрассе  д. 86/1', '', '', 'images/objavl/office_ger.jpg', 'images/objavl/office_ger.jpg', '', '', '0000-00-00', 0, 0, '', 1),
(23, '<p>Продам 1-ю квартиру Сокол 10/14-эт кирпичного дома, Кухонный гарнитур со встроенной бытовой техникой, гарнитурная мебель, парковка.</p>', 33, 'new page', 'neue Seite', '1-ю квартира Сокол', '', '', 'images/objavl/kvartira.jpg', 'images/objavl/kvartira.jpg', '', '', '0000-00-00', 0, 5657, 'USD', 1),
(24, '<p>65 км Симферопольское ш., д. Волосово. Новый деревянный дом со всеми удобствами, внутри: пол-ламинат, потолки и стены - вагонка, интересная удобная и рациональная планировка. Жилая современная деревня 90-х годов застройки. Электричество. Газ. Подъезд круглый год.</p>\r\n', 34, 'new page', 'neue Seite', 'Коттедж 160 кв м все коммуникации', '', '', 'images/objavl/rus_kottedj.jpg', 'images/objavl/rus_kottedj.jpg', '', '', '0000-00-00', 0, 0, '', 1),
(52, '<P>Продается однокомнатная квартира. Квартира после ремонта, в идеальном состоянии. В комнате современная мебель, хорошая, дорогая бытовая техника. На кухне кухонный гарнитур, холодильник, микроволновая печь. Санузел и ванна в идеальном состоянии, в ванной комнате стиральная машинка (автомат).В квартире подключен городской телефон и выход в интернет. Установлен домофон и металлическая входная дверь.</P>', 33, '', '', 'Продается однокомнатная квартира', '', '', 'images/objavl/rus_kvartir.jpg', 'images/objavl/rus_kvartir.jpg', '', '', '2010-03-01', 0, 0, '', 1),
(72, 'Прекрасный дом с видом на финский залив. Рядом сад с апельсинами. Есть пруд с карпами. В доме имеется погреб на 30 кв.м.', 1, 'A beautiful house overlooking the Gulf of Finland. Beside a garden with oranges. There is a pond with carp. The house has a cellar of 30 sq.m', 'Ein schönes Haus mit Blick auf den Golf von Finnland. Neben einem Garten mit Orangen. Es ist ein Teich mit Karpfen. Das Haus hat einen Keller von 30 qm', 'Дача', 'Dacha', 'Datscha', '', '', '', 'Ф.И.О. Ивушкин Анатолий Саксонович ТЕЛ. 8(951)5634215 Email iva@mail.ru', '2010-06-14', 100, 15896, 'РУБ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `sidebar`
--

CREATE TABLE IF NOT EXISTS `sidebar` (
  `video` text NOT NULL,
  `spezpredl` text NOT NULL,
  `strateg` text NOT NULL,
  `banervideo` text NOT NULL,
  `linkbanervideo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sidebar`
--

INSERT INTO `sidebar` (`video`, `spezpredl`, `strateg`, `banervideo`, `linkbanervideo`) VALUES
('http://www.youtube.com/v/hwCRZeN6Plg&hl=ru_RU&fs=1&', '<p>Спецпредложения\r\n</p>\r\n', '<p>\r\n	Стратегические партнёры</p>', '../images/banervideo/gaseta-izvestia.jpg', 'http://www.izvestia.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id_theme` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id_theme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `theme`
--

INSERT INTO `theme` (`id_theme`, `name`) VALUES
(1, 'Автострахование'),
(2, 'Зелёная карта'),
(3, 'КАСКО'),
(4, 'Мед. страхование'),
(5, 'ОСАГО'),
(6, 'Выезд за рубеж'),
(7, 'Страхование имущества');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `status`) VALUES
(7, 'admin', 'admin', 'admin@admin.ru', 'administrator'),
(8, 'mod', 'mod', 'mod@mod.ru', 'moderator'),
(13, 'oleg', 'oleg', 'oleg@mod.ru', 'moderator');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continent_id_continent`) REFERENCES `continent` (`id_continent`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `mailer`
--
ALTER TABLE `mailer`
  ADD CONSTRAINT `mailer_ibfk_2` FOREIGN KEY (`theme_id_theme`) REFERENCES `theme` (`id_theme`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `object`
--
ALTER TABLE `object`
  ADD CONSTRAINT `object_ibfk_1` FOREIGN KEY (`theme_id_theme`) REFERENCES `theme` (`id_theme`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `object_ibfk_2` FOREIGN KEY (`country_id_country`) REFERENCES `country` (`id_country`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`id_object`) REFERENCES `object` (`id_object`) ON DELETE CASCADE ON UPDATE CASCADE;

