-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 01, 2023 at 03:42 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protech4`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_statistic`
--

CREATE TABLE `about_statistic` (
  `id` int NOT NULL,
  `number` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_uz` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_statistic`
--

INSERT INTO `about_statistic` (`id`, `number`, `text_ru`, `text_uz`, `text_en`, `date`) VALUES
(1, '13+', ' лет на рынке', ' Yillik tajriba', 'years on the market', '2023-07-21 09:32:25'),
(2, '100+', 'Довольных клиентов', 'Qoniqarli mijozlar', 'Satisfied customers', '2023-07-21 09:34:04'),
(3, '400+', 'Выполненных проектов', 'Tugallangan loyihalar', 'Completed projects', '2023-07-21 09:37:16'),
(4, '50+', ' Сертифицированных сотрудников', 'Sertifikatga ega xodimlar', 'Certified employees', '2023-07-21 09:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int NOT NULL,
  `text_ru` text NOT NULL,
  `text_uz` text NOT NULL,
  `text_en` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `text_ru`, `text_uz`, `text_en`, `image`, `date`) VALUES
(1, 'Компания <strong>“PROTECH TECHNOLOGY”,</strong> образована в 2008 году, основной деятельностью компании является предоставление технического обслуживания систем пожарной сигнализации и систем автоматического пожаротушения, установка и монтаж систем охранно-пожарной сигнализации, систем видеонаблюдения, монтаж системы локальной компьютерной сети и услуг по профилактическому испытанию электроустановок. За многолетнюю историю работы, наши специалисты приобрели неоценимый опыт в реализации сотен проектов различного масштаба иь уровня сложности.\r\n</br>\r\n</br>\r\nНаша компания активно сотрудничает с государственными организациями и частными компаниями. Мы видим свою задачу в оказании профессиональной помощи организациям и предпринимателям. География проектов охватывает все регионы Республики Узбекистан.\r\n</br>\r\n</br>\r\nМы постоянно работаем над совершенствованием качества услуг и уделяем большое внимание на взаимовыгодное и долгосрочное сотрудничество с нашими клиентами.\r\nНашей компанией осуществлено множество проектов. Нашими заказчиками являются АК «Узбектелеком», «Ташкентский Исламский Институт», СП ЗАО «Seal Mag», «ELER NEW ENERGY POWER» (Швейцария), ООО «Salar Ekoproduct», ООО «PROGRESS PLIT», Управления ГТК РУз по Ташкентской области, «Высший Военный Таможенный Институт» ГТК РУз. и другие.', '<strong>\"PROTECH TECHNOLOGY\" </strong> kompaniyasi 2008 yilda tashkil etilgan bo\'lib, kompaniyaning asosiy faoliyati yong\'in signalizatsiya tizimlari va avtomatik yong\'in o\'chirish tizimlariga texnik xizmat ko\'rsatish, yong\'in signalizatsiyasi, video kuzatuv tizimlarini o\'rnatish, mahalliy kompyuter tarmog\'ini o\'rnatishdan iborat. va elektr inshootlarini profilaktik sinovdan o\'tkazish bo\'yicha xizmatlar. Uzoq yillik tajribamiz davomida bizning mutaxassislarimiz turli o\'lchamdagi va murakkablik darajasidagi yuzlab loyihalarni amalga oshirishgan.\r\n</br>\r\n</br>\r\nKompaniyamiz davlat tashkilotlari va xususiy kompaniyalar bilan faol hamkorlik qiladi. Biz o‘z vazifamizni tashkilot va tadbirkorlarga professional yordam ko‘rsatamiz. Loyihalar O‘zbekiston Respublikasining barcha hududlarini qamrab oladi.\r\n</br>\r\n</br>\r\nBiz doimiy ravishda xizmatlar sifatini oshirish ustida ishlaymiz va mijozlarimiz bilan o\'zaro manfaatli va uzoq muddatli hamkorlikka katta e\'tibor beramiz.\r\nKompaniyamiz ko\'plab loyihalarni amalga oshirdi. Bizning mijozlarimiz: “O‘zbektelekom” AK, “Toshkent islom instituti”, СП ЗАО «Seal Mag», «ELER NEW ENERGY POWER» (Швейцария), ООО «Salar Ekoproduct», ООО «PROGRESS PLIT», Davlat bojxona qo‘mitasi O‘zbekiston Respublikasining Toshkent viloyati bo‘yicha “Oliy harbiy bojxona instituti” O‘zbekiston Respublikasi Davlat bojxona qo‘mitasi. va boshqalar. ', 'The company <strong>\"PTOTECH TECHNOLOGY\"</strong>, founded in 2008, the main activity of the company is to provide maintenance of fire alarm systems and automatic fire extinguishing systems, installation and installation of fire alarm systems, video surveillance systems, installation of a local computer network system and services for preventive testing of electrical installations. Over the long history of work, our specialists have gained invaluable experience in the implementation of hundreds of projects of various sizes and levels of complexity.\r\n</br>\r\n</br>\r\nOur company actively cooperates with government organizations and private companies. We see our task in providing professional assistance to organizations and entrepreneurs. The geography of projects covers all regions of the Republic of Uzbekistan.\r\n</br>\r\n</br>\r\nWe are constantly working to improve the quality of services and pay great attention to mutually beneficial and long-term cooperation with our customers.\r\nOur company has implemented many projects. Our customers are JSC \"Uzbektelecom\", \"Tashkent Islamic Institute\", JV CJSC \"Seal Mag\", \"ELER NEW ENERGY POWER\" (Switzerland), LLC \"Salar Ekoproduct\", LLC \"PROGRESS PLIT\", Office of the State Customs Committee of the Republic of Uzbekistan for the Tashkent region, \"Higher Military Customs Institute\" State Customs Committee of the Republic of Uzbekistan. and others.', 'uploads/about2023-07-20/64b86cc9bc146.png', '2023-07-21 08:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `addresses_links`
--

CREATE TABLE `addresses_links` (
  `id` int NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `google_address` text NOT NULL,
  `address_name_ru` text NOT NULL,
  `address_name_uz` text NOT NULL,
  `address_name_en` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addresses_links`
--

INSERT INTO `addresses_links` (`id`, `phone_number`, `google_address`, `address_name_ru`, `address_name_uz`, `address_name_en`, `email`, `telegram`, `facebook`, `instagram`) VALUES
(1, '+998 71 202 02 20', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d2996.183361375432!2d69.211526!3d41.326626!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzM1LjkiTiA2OcKwMTInNDEuNSJF!5e0!3m2!1suz!2sus!4v1690044258890!5m2!1suz!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n', 'г. Ташкент, Шайхантахурский р-н, улица Кукча Дарвоза, дом 10', 'Toshkent shahri, Shayxontohur tumani, Ko‘kcha Darvoza ko‘chasi, 10-uy', 'Tashkent city, Shaykhantakhur district, Kukcha Darvoza street, building 10', 'info@protech.uz', 'https://t.me/protech_uz', 'https://www.facebook.com/netfeat.uz', 'https://www.instagram.com/nfm.uz/');

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` int NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_uz` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_uz` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `title_ru`, `description_ru`, `image_path`, `description_en`, `description_uz`, `title_en`, `title_uz`) VALUES
(1, 'ОБСЛЕДОВАНИЕ ОБЪЕКТА', 'Выезд на объект, анализ объекта для оценки возможности выстраивания систем безопасности с нуля или дополнительной интеграции.  ', 'uploads/advantages\\icons-1-7-1080x800.jpg', 'Departure to the facility, analysis of the facility to assess the possibility of building security systems from scratch or additional integration.', 'Ob\'ektga jo\'nab ketish, xavfsizlik tizimlarini noldan yoki qo\'shimcha integratsiyadan qurish imkoniyatini baholash uchun ob\'ektni tahlil qilish.', 'OBJECT SURVEY', 'LOYIHANI O‘RGANISH'),
(2, 'ПОДБОР РЕШЕНИЯ', 'Подбираем решение в зависимости от потребностей клиента: это может быть подбор необходимого оборудования или комплексное решение по обеспечению предприятия техническими системами охраны, разработанное конкретно под цели и задачи вашего бизнеса', 'uploads/advantages\\icons-1-2-1080x800.png', 'We select a solution depending on the needs of the client: it can be the selection of the necessary equipment or a comprehensive solution for providing the enterprise with technical security systems, designed specifically for the goals and objectives of your business', 'Biz mijozning ehtiyojlariga qarab yechimni tanlaymiz: bu zarur jihozlarni tanlash yoki korxonani sizning biznesingizning maqsad va vazifalari uchun maxsus ishlab chiqilgan texnik xavfsizlik tizimlari bilan ta\'minlash uchun kompleks yechim bo\'lishi mumkin.', 'SOLUTION SELECTION', 'YECHIMNI TANLASH'),
(3, 'ПРОЕКТИРОВАНИЕ', 'На основе подобранного решения, проектировщики готовят проект специально для вашего предприятия, с соблюдением всех ГОСТ стандартов. Проектная документация включает в себя текстовую часть с описанием объекта, планируемых систем безопасности и описанием необходимых работ по монтажу, а также графическую часть с планами расстановки оборудования и структурной схемой', 'uploads/advantages\\icons-1-3-1080x800.png', 'Based on the selected solution, designers prepare a project specifically for your company, in compliance with all GOST standards. Project documentation includes a text part with a description of the facility, planned security systems and a description of the necessary installation work, as well as a graphic part with equipment layout plans and a block diagram', 'Tanlangan yechimga asoslanib, loyihalar barcha GOST standartlariga muvofiq kompaniyangiz uchun maxsus loyiha tayyorlaydilar. Loyiha hujjatlari ob\'ektning tavsifi, rejalashtirilgan xavfsizlik tizimlari va zarur montaj ishlarining tavsifi bilan matn qismini, shuningdek, uskunani joylashtirish rejalari va strukturaviy diagramma bilan grafik qismini o\'z ichiga oladi.', 'DESIGN', 'LOYIHALASHTIRISH'),
(4, 'ПОСТАВКА ОБОРУДОВАНИЯ', 'Наши специалисты Центра компетенций «PTOTECH TECHNOLOGY» регулярно проводят тщательный анализ решений на рынке технических систем охраны, применяемых для разных отраслей бизнеса, на основе которого «PTOTECH TECHNOLOGY» принимает решение о сотрудничестве с поставщиками оборудования. Оборудование, с которым мы работаем, отвечает всем современным требованиям к системам безопасности, а наши вендоры – это не только признанные лидеры рынка систем безопасности в Узбекистане , но и за рубежом.', 'uploads/advantages\\icons-1-4-1080x800.png', 'Our specialists of the PTOTECH TECHNOLOGY Competence Center regularly conduct a thorough analysis of solutions on the market of technical security systems used for various business sectors, on the basis of which PTOTECH TECHNOLOGY makes a decision on cooperation with equipment suppliers. The equipment we work with meets all modern requirements for security systems, and our vendors are not only recognized leaders in the security systems market in Uzbekistan, but also abroad.', 'PROTECH TECHNOLOGY vakolat markazi mutaxassislarimiz muntazam ravishda turli biznes tarmoqlari uchun qo‘llaniladigan texnik xavfsizlik tizimlari bozoridagi yechimlarni chuqur tahlil qilib boradilar, buning asosida PROTECH TECHNOLOGY uskunalar yetkazib beruvchilar bilan hamkorlik qilish to‘g‘risida qaror qabul qiladi. Biz ishlayotgan uskunalar xavfsizlik tizimlariga qo‘yiladigan barcha zamonaviy talablarga javob beradi va bizning sotuvchilarimiz nafaqat O‘zbekistonda, balki xorijda ham xavfsizlik tizimlari bozorida tan olingan yetakchi hisoblanadi.', 'SUPPLY OF EQUIPMENT', 'Uskunalar bilan ta\'minlash'),
(5, 'МОНТАЖ', 'Произведем работы по монтажу: выполним весь комплекс работ по прокладке кабельных трасс, установке и подключению оборудования и технических средств, настройке основных функций системы и осуществим контрольную проверку работоспособности оборудования. Наши специалисты прошли все необходимое обучение и сертификацию соответствующего образца и готовы произвести инсталляцию и пусконаладку технических систем безопасности любой сложности «под ключ».', 'uploads/advantages\\icons-1-5-1080x800.png', 'We will carry out installation works: we will perform the entire range of works on laying cable routes, installing and connecting equipment and technical means, setting up the main functions of the system and carrying out a control check of the equipment\'s performance. Our specialists have passed all the necessary training and certification of the corresponding sample and are ready to install and commission technical security systems of any complexity on a turnkey basis.', 'Montaj ishlarini bajaramiz: kabel yo\'nalishlarini yotqizish, uskunalar va texnik vositalarni o\'rnatish va ulash, tizimning asosiy funktsiyalarini sozlash va uskunaning ishlashini nazorat qilish bo\'yicha barcha ishlarni bajaramiz. Mutaxassislarimiz barcha kerakli o\'qitish va tegishli namunadagi sertifikatlashdan o\'tdilar va har qanday murakkablikdagi texnik xavfsizlik tizimlarini o\'rnatish asosida ishga tushirishga tayyor.', 'INSTALLATION', 'O‘RNATISH'),
(6, 'СЕРВИС', 'Возьмем объект на техническое обслуживание и обеспечим необходимый комплекс организационно-технических мероприятий по проведению профилактических осмотров, разработанных с учётом требований «Правил пожарной безопасности в УЗБ», СНиП, ГОСТов и инструкций производителей применяемого оборудования.', 'uploads/advantages\\icons-1-6-1080x800.png', 'We will take the object for maintenance and provide the necessary set of organizational and technical measures for conducting preventive inspections, developed taking into account the requirements of the \"Fire Safety Rules in UZB\", SNiP, GOSTs and instructions from manufacturers of the equipment used.', 'Biz ob\'ektni texnik xizmat ko\'rsatish uchun qabul qilamiz va \"UZBda yong\'in xavfsizligi qoidalari\", davlat foydalanadigan asbob-uskunalarni ishlab chiqaruvchilarning ko\'rsatmalari talablarini hisobga olgan holda ishlab chiqilgan profilaktik tekshiruvlarni o\'tkazish uchun zarur tashkiliy va texnik chora-tadbirlar to\'plamini taqdim etamiz.', 'SERVICE', 'XIZMAT');

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int NOT NULL,
  `telegram_token` varchar(255) NOT NULL,
  `telegram_chat_id` varchar(255) NOT NULL,
  `bitrix_24_api` varchar(255) DEFAULT NULL,
  `widgetId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `telegram_token`, `telegram_chat_id`, `bitrix_24_api`, `widgetId`) VALUES
(1, 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `phone_number`, `date`, `ip_address`, `status`) VALUES
(18, 'dfdfdf', '+998 (84) 444 54 55', '2023-07-26 09:52:43', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `image`, `name`) VALUES
(1, 'uploads/certificates/2023-07-22/64bbcfbf2f601.jpg', '2'),
(2, 'uploads/certificates/2023-07-22/64bbd1465e535.jpg', '3'),
(3, 'uploads/certificates/2023-07-22/64bbd151f2e4d.jpg', '4'),
(4, 'uploads/certificates/2023-07-22/64bbd15e55361.jpg', '5'),
(5, 'uploads/certificates/2023-07-22/64bbd16989788.jpg', '6');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `name`) VALUES
(1, 'uploads/clients/2023-07-27/1 (1).jpg', '2'),
(2, 'uploads/clients/2023-07-27/1 (10).jpg', '3'),
(3, 'uploads/clients/2023-07-27/1 (11).jpg', '4'),
(4, 'uploads/clients/2023-07-27/1 (12).jpg', '5'),
(5, 'uploads/clients/2023-07-27/1 (13).jpg', '6'),
(6, 'uploads/clients/2023-07-27/1 (14).jpg', '7'),
(7, 'uploads/clients/2023-07-27/1 (15).jpg', '8'),
(8, 'uploads/clients/2023-07-27/1 (16).jpg', '9'),
(9, 'uploads/clients/2023-07-27/1 (17).jpg', '10'),
(10, 'uploads/clients/2023-07-27/1 (18).jpg', '11'),
(11, 'uploads/clients/2023-07-27/1 (19).jpg', '12'),
(12, 'uploads/clients/2023-07-27/1 (2).jpg', '13'),
(13, 'uploads/clients/2023-07-27/1 (20).jpg', '14'),
(14, 'uploads/clients/2023-07-27/1 (21).jpg', '15'),
(15, 'uploads/clients/2023-07-27/1 (22).jpg', '16'),
(16, 'uploads/clients/2023-07-27/1 (23).jpg', '17'),
(17, 'uploads/clients/2023-07-27/1 (24).jpg', '18'),
(18, 'uploads/clients/2023-07-27/1 (25).jpg', '19'),
(19, 'uploads/clients/2023-07-27/1 (26).jpg', '20'),
(20, 'uploads/clients/2023-07-27/1 (27).jpg', '21'),
(21, 'uploads/clients/2023-07-27/1 (28).jpg', '22'),
(22, 'uploads/clients/2023-07-27/1 (29).jpg', '23'),
(23, 'uploads/clients/2023-07-27/1 (3).jpg', '24'),
(24, 'uploads/clients/2023-07-27/1 (30).jpg', '25'),
(25, 'uploads/clients/2023-07-27/1 (31).jpg', '26'),
(26, 'uploads/clients/2023-07-27/1 (32).jpg', '27'),
(27, 'uploads/clients/2023-07-27/1 (4).jpg', '28'),
(28, 'uploads/clients/2023-07-27/1 (5).jpg', '29'),
(29, 'uploads/clients/2023-07-27/1 (6).jpg', '30'),
(30, 'uploads/clients/2023-07-27/1 (7).jpg', '31'),
(31, 'uploads/clients/2023-07-27/1 (8).jpg', '32'),
(32, 'uploads/clients/2023-07-27/1 (9).jpg', '33'),
(33, 'uploads/clients/2023-07-27/64c1ab92ccd1d.jpg', '34');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `phone_number`, `date`, `ip_address`) VALUES
(18, 'Lesley Long', '+998 (19) 315 65 42', '2023-07-22 18:58:43', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `home_about`
--

CREATE TABLE `home_about` (
  `id` int NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content_ru` text NOT NULL,
  `content_uz` text NOT NULL,
  `content_en` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_about`
--

INSERT INTO `home_about` (`id`, `title_ru`, `title_uz`, `title_en`, `content_ru`, `content_uz`, `content_en`, `image`, `date`) VALUES
(1, 'О компании', 'Kompaniya haqida', 'About company', 'Компания <strong>“PROTECH TECHNOLOGY”,</strong> образована в 2008 году, основной деятельностью компании является предоставление технического обслуживания систем пожарной сигнализации и систем автоматического пожаротушения, установка и монтаж систем охранно-пожарной сигнализации, систем видеонаблюдения, монтаж системы локальной компьютерной сети и услуг по профилактическому испытанию электроустановок. За многолетнюю историю работы, наши специалисты приобрели неоценимый опыт в реализации сотен проектов различного масштаба и уровня сложности.', '</strong>\"PROTECH TECHNOLOGY\"</strong> kompaniyasi 2008 yilda tashkil etilgan bo\'lib, kompaniyaning asosiy faoliyati yong\'in signalizatsiya tizimlari va avtomatik yong\'in o\'chirish tizimlariga texnik xizmat ko\'rsatish, yong\'in signalizatsiyasi, video kuzatuv tizimlarini o\'rnatish, mahalliy kompyuter tarmog\'ini o\'rnatishdan iborat. va elektr inshootlarini profilaktik sinovdan o\'tkazish bo\'yicha xizmatlar. Uzoq yillik tajribamiz davomida bizning mutaxassislarimiz turli o\'lchamdagi va murakkablik darajasidagi yuzlab loyihalarni amalga oshirishgan.', 'The company <strong>\"PROTECH TECHNOLOGY\", </strong> founded in 2008, the main activity of the company is to provide maintenance of fire alarm systems and automatic fire extinguishing systems, installation and installation of fire alarm systems, video surveillance systems, installation of a local computer network system and services for preventive testing of electrical installations. Over the long history of work, our specialists have gained invaluable experience in the implementation of hundreds of projects of various sizes and levels of complexity.', 'uploads/home/about2023-07-20/64b868c6c2ed7.png', '2023-07-25 05:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `home_our_advantages`
--

CREATE TABLE `home_our_advantages` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jivo`
--

CREATE TABLE `jivo` (
  `id` int NOT NULL,
  `widgetId` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int NOT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_uz` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `text_ru` text,
  `text_uz` text,
  `text_en` text,
  `created_at` datetime NOT NULL,
  `dropdown_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title_ru`, `title_uz`, `title_en`, `text_ru`, `text_uz`, `text_en`, `created_at`, `dropdown_key`) VALUES
(1, 'Менеджер по продажам B2B', 'B2B savdo menejeri', 'B2B sales manager', '<p><span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">от 4 000 000 до 15 000 000 сум на руки</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Требуемый опыт работы: 3&ndash;6 лет</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Полная занятость, полный день</span><br />\r\n<br />\r\n<strong>Обязанности:</strong><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Активный поиск потенциальных клиентов, создание и расширение своей клиентской базы</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Требования:</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Опыт работы не менее 3х лет, в продажах B2B химикатов, сырья и расходных материалов для производителей (цеха, фабрики и завод), знание ПК (MS Office - excel, outlook, CRM) на продвинутом уровне</span><br />\r\n<br />\r\n<strong>Условия:</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Фиксированный оклад + бонусы с каждой продажи и с повторных продаж, комфортный офис (вплодь до бесплатного итальянского кофе машиной) в центре города, командировки, мобильная сим-карта и смартфон Samsung и ноутбук HP Corei5 для пользования, маленький дружный коллектив в местном офисе, крупной компании.</span></p>\r\n', '<p>4 000 000 so&#39;mdan 15 000 000 so&#39;mgacha</p>\r\n\r\n<p>Talab qilinadigan ish tajribasi: 3-6 yil</p>\r\n\r\n<p>To&#39;liq kun, to&#39;liq kun</p>\r\n\r\n<p>Mas&#39;uliyat:</p>\r\n\r\n<p>Potentsial mijozlarni faol izlash, uning mijozlar bazasini yaratish va kengaytirish<br />\r\nTalablar:<br />\r\nIshlab chiqaruvchilar (tsexlar, fabrikalar va zavodlar) uchun kimyoviy moddalar, xom ashyo va sarf materiallarini B2B sotish bo&#39;yicha kamida 3 yillik tajriba, kompyuter bilimi (MS Office - excel, outlook, CRM) ilg&#39;or darajada</p>\r\n\r\n<p>Shartlar:<br />\r\nRuxsat etilgan ish haqi + har bir sotuvdan va takroriy sotuvlardan bonuslar, shahar markazida qulay ofis (bepul italyan kofe mashinasigacha), xizmat safarlari, mobil SIM karta va Samsung smartfoni va foydalanish uchun HP Corei5 noutbuki, mahalliy ofisdagi kichik do&#39;stona jamoa, yirik kompaniya.</p>\r\n', '<p>from 4,000,000 to 15,000,000 soums on hand</p>\r\n\r\n<p>Required work experience: 3-6 years</p>\r\n\r\n<p>Full time, full day</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<p>Active search for potential customers, creation and expansion of its customer base<br />\r\nRequirements:<br />\r\nAt least 3 years of experience in B2B sales of chemicals, raw materials and consumables for manufacturers (workshops, factories and plant), PC knowledge (MS Office - excel, outlook, CRM) at an advanced level</p>\r\n\r\n<p>Conditions:<br />\r\nFixed salary + bonuses from each sale and from repeat sales, a comfortable office (up to a free Italian coffee machine) in the city center, business trips, a mobile SIM card and a Samsung smartphone and an HP Corei5 laptop for use, a small friendly team in a local office, a large company.</p>\r\n', '2023-07-22 21:51:40', '64bc2e517f3cc'),
(2, 'Ассистент руководителя', 'Direktor yordamchisi', 'Director\'s assistant', '<p><span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">от 4 000 000 до 5 000 000 сум до вычета налогов</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Требуемый опыт работы: 1&ndash;3 года</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Полная занятость, полный день</span><br />\r\n<br />\r\n<strong>Обязанности:</strong><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Грамотное управление финансовыми потоками компании;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Контроль доходов/расходов компании, обеспечение эффективного использования ресурсов;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Налоговое планирование бизнеса;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Стратегическое планирование финансовой политики компании;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Анализ и минимизация возможных коммерческих рисков;</span><br />\r\n<br />\r\n<strong>Требования:</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Опыт работы в аналогичной должности;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Обязательное знание русского языка;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Умение мыслить масштабно;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Грамотность.</span><br />\r\n<br />\r\n<strong>Условия:</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Официальное трудоустройство;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Карьерный рост;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Дружелюбная команда;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Зарплата по итогу собеседования.</span></p>\r\n', '<p>4 000 000 so&#39;mdan 5 000 000 so&#39;mgacha</p>\r\n\r\n<p>Talab qilinadigan ish tajribasi: 1-3 yil</p>\r\n\r\n<p>To&#39;liq kun, to&#39;liq kun</p>\r\n\r\n<p>Mas&#39;uliyat:</p>\r\n\r\n<p>Kompaniyaning moliyaviy oqimlarini vakolatli boshqarish;<br />\r\nKompaniyaning daromadlari/xarajatlarini nazorat qilish, resurslardan samarali foydalanishni ta&#39;minlash;<br />\r\nBiznes soliqlarini rejalashtirish;<br />\r\nKompaniyaning moliyaviy siyosatini strategik rejalashtirish;<br />\r\nMumkin bo&#39;lgan tijorat xatarlarini tahlil qilish va minimallashtirish;</p>\r\n\r\n<p>Talablar:<br />\r\nShu kabi lavozimda ish tajribasi;<br />\r\nRus tilini majburiy bilish;<br />\r\nKatta fikrlash qobiliyati;<br />\r\nSavodxonlik.</p>\r\n\r\n<p>Shartlar:<br />\r\nRasmiy ishga joylashish;<br />\r\nKaryera o&#39;sishi;<br />\r\ndo&#39;stona jamoa;<br />\r\nSuhbat asosida ish haqi.</p>\r\n', '<p>from 4,000,000 to 5,000,000 UZS before taxes</p>\r\n\r\n<p>Required work experience: 1-3 years</p>\r\n\r\n<p>Full time, full day</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<p>Competent management of the company&#39;s financial flows;<br />\r\nControl of the company&#39;s income/expenses, ensuring efficient use of resources;<br />\r\nBusiness tax planning;<br />\r\nStrategic planning of the company&#39;s financial policy;<br />\r\nAnalysis and minimization of possible commercial risks;</p>\r\n\r\n<p>Requirements:<br />\r\nExperience in a similar position;<br />\r\nCompulsory knowledge of the Russian language;<br />\r\nAbility to think big;<br />\r\nLiteracy.</p>\r\n\r\n<p>Conditions:<br />\r\nOfficial employment;<br />\r\nCareer growth;<br />\r\nFriendly team;<br />\r\nSalary based on interview.</p>\r\n', '2023-07-22 21:54:28', '64bc4283a1642'),
(3, 'Координатор технического отдела', 'Texnik bo\'lim koordinatori', 'Technical department coordinator', '<p><span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">от 4 000 000 до 5 000 000 сум на руки</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Требуемый опыт работы: не требуется</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">Полная занятость, полный день</span><br />\r\n<br />\r\n<strong>Обязанности:</strong><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Координация заявок, поступающих в технический отдел;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Координация заявок, поступающих с коммерческого отдела;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Регистрация, настройка и проверка на неполадки абонентов, пользующихся услугой VOIP;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Настройка оборудования провайдера;</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Слежение за группами для поднятия портов и регистрации GPON терминалов;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Поднятие портов и регистрация GPON терминалов;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Регистрация, настройка, проверка на неполадки и ведение оплат абонентов, пользующихся услугой Хостинга;</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Контроль за блоками питания, аккумуляторами установленными на узлах связи;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Помощь администраторам провайдера в вопросах коммутации, машрутизации.</span><br />\r\n<br />\r\n<strong>Требования:</strong><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Уверенный пользователь ПК;</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Аналитический склад ума, способность быстро реагировать и принимать решения;</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Знания в технической сфере (технологии Wi-Fi, роутеры)</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Предпочтения отдаются кандидату с хорошим знанием русского языка.</span><br />\r\n<br />\r\n<strong>Мы предлагаем:</strong><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Комфортабельный офис в центре города, дружный коллектив, адекватное руководство;</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Своевременная заработная плата (на период испытательного срока 4 000 000, после испытательного срока до 5 000 000);</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:14.4px\">- Скидки на домашний интернет.</span></p>\r\n', '<p>kassada 4 000 000 so&#39;mdan 5 000 000 so&#39;mgacha</p>\r\n\r\n<p>Majburiy ish tajribasi: shart emas</p>\r\n\r\n<p>To&#39;liq kun, to&#39;liq kun</p>\r\n\r\n<p>Mas&#39;uliyat:</p>\r\n\r\n<p>- texnik bo&#39;limga kelib tushgan arizalarni muvofiqlashtirish;<br />\r\n- tijorat bo&#39;limidan kelib tushgan so&#39;rovlarni muvofiqlashtirish;<br />\r\n- VOIP xizmatidan foydalangan holda abonentlarni ro&#39;yxatga olish, sozlash va nosozliklarni bartaraf etish;<br />\r\n- provayder uskunasini sozlash;</p>\r\n\r\n<p>- Portlarni ko&#39;tarish va GPON terminallarini ro&#39;yxatdan o&#39;tkazish uchun kuzatuv guruhlari;<br />\r\n- portlarni ko&#39;tarish va GPON terminallarini ro&#39;yxatdan o&#39;tkazish;<br />\r\n- Xosting xizmatidan foydalanuvchi abonentlar uchun to&lsquo;lovlarni ro&lsquo;yxatdan o&lsquo;tkazish, sozlash, nosozliklarni bartaraf etish va texnik xizmat ko&lsquo;rsatish;</p>\r\n\r\n<p>- Aloqa markazlarida o&#39;rnatilgan quvvat manbalari, batareyalarni nazorat qilish;<br />\r\n- provayder ma&#39;murlariga kommutatsiya, marshrutlash masalalarida yordam berish.</p>\r\n\r\n<p>Talablar:</p>\r\n\r\n<p>- ishonchli shaxsiy kompyuter foydalanuvchisi;</p>\r\n\r\n<p>- Analitik fikrlash, tez reaksiyaga kirishish va qaror qabul qilish qobiliyati;</p>\r\n\r\n<p>- texnik sohada bilim (Wi-Fi texnologiyalari, routerlar)</p>\r\n\r\n<p>- Rus tilini yaxshi biladigan nomzodga ustunlik beriladi.</p>\r\n\r\n<p>Biz taklif etamiz:</p>\r\n\r\n<p>- shahar markazida qulay ofis, samimiy xodimlar, adekvat boshqaruv;</p>\r\n\r\n<p>- o&#39;z vaqtida ish haqi (sinov davrida 4 000 000, sinov muddatidan keyin 5 000 000 gacha);</p>\r\n\r\n<p>- Uy internetiga chegirmalar.</p>\r\n', '<p>from 4,000,000 to 5,000,000 soums on hand</p>\r\n\r\n<p>Required work experience: not required</p>\r\n\r\n<p>Full time, full day</p>\r\n\r\n<p>Responsibilities:</p>\r\n\r\n<p>- Coordination of applications received by the technical department;<br />\r\n- Coordination of requests coming from the commercial department;<br />\r\n- Registration, configuration and troubleshooting of subscribers using the VOIP service;<br />\r\n- Setting up the provider&#39;s equipment;</p>\r\n\r\n<p>- Tracking groups to raise ports and register GPON terminals;<br />\r\n- Elevation of ports and registration of GPON terminals;<br />\r\n- Registration, configuration, troubleshooting and maintenance of payments for subscribers using the Hosting service;</p>\r\n\r\n<p>- Control over power supplies, batteries installed at communication centers;<br />\r\n- Assistance to administrators of the provider in matters of switching, routing.</p>\r\n\r\n<p>Requirements:</p>\r\n\r\n<p>- Confident PC user;</p>\r\n\r\n<p>- Analytical mindset, ability to react quickly and make decisions;</p>\r\n\r\n<p>- Knowledge in the technical field (Wi-Fi technologies, routers)</p>\r\n\r\n<p>- Preference is given to a candidate with a good knowledge of the Russian language.</p>\r\n\r\n<p>We offer:</p>\r\n\r\n<p>- Comfortable office in the city center, friendly staff, adequate management;</p>\r\n\r\n<p>- Timely salary (during the trial period 4,000,000, after the trial period up to 5,000,000);</p>\r\n\r\n<p>- Discounts on home internet.</p>\r\n', '2023-07-22 23:58:10', '64bc42e23cac0');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1689806944),
('m230710_163747_create_home_about_table', 1689806953),
('m230710_163816_create_home_our_advantages_table', 1689806953),
('m230710_163853_create_addresses_links_table', 1690045344),
('m230710_163910_create_about_us_table', 1690050554),
('m230710_163943_create_about_statistic_table', 1690050554),
('m230710_163959_create_certificates_table', 1690111558),
('m230710_164019_create_services_table', 1690112030);

-- --------------------------------------------------------

--
-- Table structure for table `mission_text`
--

CREATE TABLE `mission_text` (
  `id` int NOT NULL,
  `small_title_ru` mediumtext,
  `small_title_uz` mediumtext,
  `small_title_en` mediumtext,
  `title_1_ru` varchar(255) DEFAULT NULL,
  `title_1_uz` varchar(255) DEFAULT NULL,
  `title_1_en` varchar(255) DEFAULT NULL,
  `text1_ru` mediumtext,
  `text1_uz` mediumtext,
  `text1_en` mediumtext,
  `image1` varchar(255) DEFAULT NULL,
  `title_2_ru` varchar(255) DEFAULT NULL,
  `title_2_uz` varchar(255) DEFAULT NULL,
  `title_2_en` varchar(255) DEFAULT NULL,
  `text2_ru` mediumtext,
  `text2_uz` mediumtext,
  `text2_en` mediumtext,
  `image2` varchar(255) DEFAULT NULL,
  `title_3_ru` varchar(255) DEFAULT NULL,
  `title_3_uz` varchar(255) DEFAULT NULL,
  `title_3_en` varchar(255) DEFAULT NULL,
  `text3_en` mediumtext,
  `text3_ru` mediumtext,
  `text3_uz` mediumtext,
  `image3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mission_text`
--

INSERT INTO `mission_text` (`id`, `small_title_ru`, `small_title_uz`, `small_title_en`, `title_1_ru`, `title_1_uz`, `title_1_en`, `text1_ru`, `text1_uz`, `text1_en`, `image1`, `title_2_ru`, `title_2_uz`, `title_2_en`, `text2_ru`, `text2_uz`, `text2_en`, `image2`, `title_3_ru`, `title_3_uz`, `title_3_en`, `text3_en`, `text3_ru`, `text3_uz`, `image3`) VALUES
(1, 'Установление долгосрочного партнерства с клиентами через предоставление самого современного, инновационного,\r\nудобного и надежного сервиса в сфере услуг связи, безопасности и ИТ. ', 'Алоқа, хавфсизлик ва IT хизматлари соҳасида энг замонавий, инновацион, қулай ва ишончли хизматни тақдим этиш орқали\r\nмижозлар билан узоқ муддатли ҳамкорликни ўрнатиш.', 'By providing the most modern, innovative, convenient and reliable service in the field of communication, security and IT services\r\nestablishing long-term cooperation with customers.', 'Для наших клиентов', 'Bizning mijozlarimiz uchun', 'For our client', '<p style=\"text-align:justify\"><strong>Гибкость</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Устанавливая долгосрочные партнерские отношения, мы проявляем гибкость в подходах к решению задач клиентов. Подходя индивидуально к решению задач клиента, мы решаем ее комплексно. Мы предоставляем комплексность решений, качество услуг и конкурентоспособность цен. Мы создаем решения, которые приносят нашим клиентам и обществу реальную пользу.</span><br />\r\n<br />\r\n<strong>Бережливость</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Мы &ndash; за рациональное использование ресурсов клиента. Основной критерий эффективности нашей работы &mdash; высокая степень удовлетворенности заказчиков полученными продуктами и услугами. Мы стабильно достигаем поставленных целей и выполняем свои обязательства, руководствуясь принципами и нормами профессиональной этики.</span></p>\r\n', '<p style=\"text-align:justify\"><strong>Moslashuvchanlik</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Uzoq muddatli hamkorlikni o&lsquo;rnatish orqali biz mijozlarning muammolarini hal qilishda mijozning talab va imkoniyatlariga moslashuvchan bo&lsquo;lamiz. Biz yechimlarning majmuasini, xizmatlarning sifati va narxlarning raqobatbardoshligini taʼminlaymiz. Biz mijozlarimiz va jamiyatimizga haqiqiy foyda keltiradigan yechimlarni yaratamiz.</span><br />\r\n<br />\r\n<strong>Tejamkorlik</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Biz mijozning resurslaridan oqilona foydalanish tarafdorimiz. Ishimiz samaradorligining asosiy mezoni - mijozlarning olingan mahsulot va xizmatlardan yuqori darajada qoniqishidir. Biz kasbiy etika tamoyillari va meʼyorlariga amal qilgan holda o&lsquo;z majburiyatlarimizni bajaramiz.&nbsp;</span></p>\r\n', '<p style=\"text-align: justify;\"><strong>Flexibility</strong><br />\r\nBy establishing long-term partnerships, we are flexible in our approaches to solving customer problems. Approaching individually to solving the problems of the client, we solve it in a complex way. We provide comprehensive solutions, quality services and competitive prices. We create solutions that bring real value to our customers and society.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Thrift</strong><br />\r\nWe are for the rational use of the client&#39;s resources. The main criterion for the effectiveness of our work is a high degree of customer satisfaction with the products and services received. We consistently achieve our goals and fulfill our obligations, guided by the principles and norms of professional ethics.</p>\r\n', 'uploads/mission2023-07-23/64bcfa79ebaa1.png', 'Для нашего бизнеса', 'Biznesimiz uchun', 'For our business', '<p style=\"text-align:justify\"><strong>Качество</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Мы стремимся создавать для наших клиентов стоимость, во много раз превосходящую исходные инвестиции. Повышение эффективности услуг за счет использования передовых технологий, экспертных знаний, профессионализма и опыта наших сотрудников. Если мы делаем что-либо, мы должны делать это лучше наших конкурентов.</span><br />\r\n<br />\r\n<strong>Инновации</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Мы &ndash;энтузиасты наших технологий. Максимальные инвестиции и внимание к новейшим технологиям и инновационным проектам. Мы находимся в постоянном поиске новых возможностей для достижения лучших результатов. Мы инвестируем в освоение передовых технологий и первыми применяем их для решения задач наших клиентов. Мы создаем и претворяем в жизнь новые идеи, которые изменяют мир к лучшему.</span></p>\r\n', '<p style=\"text-align:justify\"><strong>Sifat</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Biz mijozlarimiz uchun bir necha baravar yuqori qiymat yaratishga intilamiz. Ilg&lsquo;or texnologiyalar, xodimlarimizning ekspert bilimlari, professionalligi va tajribasidan foydalangan holda xizmatlar samaradorligini oshirishga intilamiz. Agar biz biror narsa qilsak, buni raqiblarimizdan yaxshiroq qilishimiz kerak.</span><br />\r\n<br />\r\n<strong>Innovatsiyalar</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Biz &ndash; zamonaviy va samarador texnologiyaning ixlosmandlarimiz. Maksimal investitsiyalar va eng yangi texnologiyalar va innovatsion loyihalarga eʼtibor qaratamiz. Biz yaxshi natijalarga erishish uchun doimiy ravishda yangi imkoniyatlarni izlaymiz. Biz ilg&lsquo;or texnologiyalarni rivojlantirishga sarmoya kiritamiz va ularni mijozlarimizning muammolarini hal qilish uchun birinchi bo&lsquo;lib qo&lsquo;llaymiz. Biz dunyoni yaxshi tomonga o&lsquo;zgartiradigan yangi g&lsquo;oyalarni yaratamiz va amalga oshiramiz.</span></p>\r\n', '<p style=\"text-align:justify\"><strong>Quality</strong><br />\r\nWe strive to create value for our clients that is many times greater than the initial investment. Improving the efficiency of services through the use of advanced technologies, expertise, professionalism and experience of our employees. If we do something, we must do it better than our competitors.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Innovation</strong><br />\r\nWe are enthusiasts of our technologies. Maximum investment and attention to the latest technologies and innovative projects. We are constantly looking for new opportunities to achieve better results. We invest in the development of advanced technologies and are the first to apply them to solve the problems of our customers. We create and implement new ideas that change the world for the better.</p>\r\n', 'uploads/mission2023-07-23/64bcfa79ebff8.png', 'Для наших сотрудников', 'Xodimlarimiz uchun', 'For our employees', '<p style=\"text-align:justify\"><strong>Professionalism</strong><br />\r\nSochetanie professionalnyx znaniy i prakticheskogo opyta poluchennyy v protesse realizatsii proektov pozvolyaet successfully reshat samye nonstandartnye zadachi v kortkie roki. Initiative and predpriimchivost oplot nashikh professionalov!</p>\r\n\r\n<p style=\"text-align:justify\"><strong>My relationship with you:</strong><br />\r\n&bull; my results are my own work;<br />\r\n&bull; the whole process;<br />\r\n&bull; my colleagues;<br />\r\n&bull; my client.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Self-development</strong><br />\r\nMy v nepreryvnom poiske vozmojnostey dlya samosovershenstvovaniya. Nashi sotrudniki razvivayutsya kak v lichnom, tak i v professionalnom plane. Postoyannoe samorazvitie sotrudnika - vajneishi factor rosta v Kompanii.</p>\r\n', '<p style=\"text-align:justify\"><strong>Профессионализм</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Сочетание профессиональных знаний и практического опыта полученный в процессе реализации проектов позволяет успешно решать самые нестандартные задачи в короткие сроки. Инициативность и предприимчивость оплот наших профессионалов!</span><br />\r\n<br />\r\n<strong>Мы уважительно относимся:</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&bull; к результатам своей работы;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&bull; к самому процессу;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&bull; к коллегам;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&bull; к клиентам.</span><br />\r\n<br />\r\n<strong>Саморазвитие</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Мы в непрерывном поиске возможностей для самосовершенствования. Наши сотрудники развиваются как в личном, так и в профессиональном плане. Постоянное саморазвитие сотрудника - важнейший фактор роста в Компании.&nbsp;</span></p>\r\n', '<p style=\"text-align:justify\"><strong>Professionallik</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Loyihalarni amalga oshirish jarayonida olingan kasbiy bilim va amaliy tajribani birlashtirish qisqa vaqt ichida eng nostandart muammolarni muvaffaqiyatli hal qilishga imkon beradi. Tashabbuskorlik va ishbilarmonlik bizning mutaxassislarimizning asosiy ustunliklardandir!</span><br />\r\n<br />\r\n<strong>Biz quyidagilarga hurmat bilan qaraymiz:</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&middot; ishimizning natijalariga;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&middot; jarayonning o&lsquo;ziga;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&middot; hamkasblarimizga;</span><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">&middot; mijozlarga.</span><br />\r\n<br />\r\n<strong>O&lsquo;z-o&lsquo;zini rivojlantirish</strong><br />\r\n<span style=\"color:rgb(0, 0, 0); font-family:be vietnam pro,sans-serif; font-size:17.6px\">Biz o&lsquo;zimizni takomillashtirish imkoniyatlarini doimiy ravishda izlayapmiz. Bizning xodimlarimiz ham shaxsiy, ham professional tarzda rivojlanadi. Xodimning doimiy o&lsquo;zini o&lsquo;zi rivojlantirishi - Kompaniyadagi eng muhim o&lsquo;sish omilidir.</span></p>\r\n', 'uploads/mission2023-07-23/64bcfa79ec2c0.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `banner_text_ru` text NOT NULL,
  `banner_text_uz` text NOT NULL,
  `banner_text_en` text NOT NULL,
  `image_banner` text NOT NULL,
  `full_text_ru` text NOT NULL,
  `full_text_uz` text NOT NULL,
  `full_text_en` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ru`, `title_uz`, `title_en`, `banner_text_ru`, `banner_text_uz`, `banner_text_en`, `image_banner`, `full_text_ru`, `full_text_uz`, `full_text_en`, `created_at`) VALUES
(1, 'Samsung представила новые флагманы Galaxy S23', 'Samsung янги Galaxy S23 флагманларини тақдим этди', 'Samsung presented the new Galaxy S23 flagships', 'Компания Samsung представила смартфоны Galaxy S23, Galaxy S23+ и Galaxy S23 Ultra.', 'Samsung компанияси Galaxy S23, Galaxy S23+ ва Galaxy S23 Ultra смартфонларини тақдим этди.', 'Samsung introduced Galaxy S23, Galaxy S23+ and Galaxy S23 Ultra smartphones.', 'uploads/news/2023-07-26/64c0dfc744ad9.jpg', '<h1><strong>Галакси С23 Ультра 200</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Samsung анонсировала новую серию флагманских смартфонов Galaxy S23. Смартфоны представили представители компании во время мероприятия Galaxy Unpacked. Церемония транслировалась на YouTube-канале компании.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Новые смартфоны включают Galaxy S23, Galaxy S23+ и Galaxy S23 Ultra. Устройства серии оснащены процессором Snapdragon 8 Gen 2 и 8 гигабайтами оперативной памяти.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Основной смартфон имеет 6,1-дюймовый дисплей Dynamic AMOLED 2X, поддерживающий частоту 120 Гц, винчестер на 128 ГБ и три камеры с объективами на 50, 12 и 10 Мп. Аппарат получил аккумулятор емкостью 3900 мАч. Модель Galaxy S23+ отличается от основного смартфона тем, что имеет экран диагональю 6,6 дюйма и аккумулятор емкостью 4700 мАч.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Лучший телефон серии получил 6,8-дюймовый дисплей. Galaxy S23 Ultra оснащен камерами на 200, 12 и 10 мегапикселей, камерой со 100-кратным зумом и аккумулятором емкостью 5000 мАч.</span></p>\r\n', '<h1><strong>Galaxy S23 Ultra 200</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Samsung компанияси янги Galaxy S23 флагман смартфонлари сериясини эълон қилди. Компания вакиллари Galaxy Unpacked тадбири чоғида смартфонларни тақдим этди. Маросим компаниянинг YouTube каналида намойиш этилди.<br />\r\n<br />\r\nЯнги смартфонлар қаторига Galaxy S23, Galaxy S23+ ва Galaxy S23 Ultra киради. Серия қурилмалари Snapdragon 8 Gen 2 процессори ва 8 гигабайт оператив хотира билан таъминланган.<br />\r\n<br />\r\nАсосий смартфон 6,1 дюймли Dynamic AMOLED 2X дисплейга эга бўлиб, 120 герц частотасини қўллаб-қувватлайди, 128 гигабайтлик диск, 50, 12 ва 10 мегапикселли линзали уч камерага эга. Қурилма 3900 миллиампер-соат қувватга эга аккумуляторни олди. Galaxy S23+ модели асосий смартфондан 6,6 дюймли экран ва 4700 миллиампер-соатли батареяга эгалиги билан фарқ қилади.<br />\r\n<br />\r\nСериянинг энг яхши телефони 6,8 дюймли дисплейни олди. Galaxy S23 Ultra 200, 12, ва 10 мегапикселли камералар, 100 марта катталаштира оладиган масштабли камера, 5000 миллиампер-соатли батареяга эга.</span></p>\r\n', '<h1><strong>Galaxy S23 Ultra 200</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Samsung announced the new Galaxy S23 series of flagship smartphones. Representatives of the company presented the smartphones during the Galaxy Unpacked event. The ceremony was broadcast on the company&#39;s YouTube channel.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">The new smartphones include the Galaxy S23, Galaxy S23+ and Galaxy S23 Ultra. Series devices are equipped with a Snapdragon 8 Gen 2 processor and 8 gigabytes of RAM.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">The main smartphone has a 6.1-inch Dynamic AMOLED 2X display that supports a frequency of 120 Hz, a 128 GB hard drive, and three cameras with 50, 12 and 10 megapixel lenses. The device received a battery with a capacity of 3900 mAh. The Galaxy S23+ model differs from the main smartphone in that it has a 6.6-inch screen and a 4700 mAh battery.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">The best phone of the series received a 6.8-inch display. The Galaxy S23 Ultra has 200, 12, and 10 megapixel cameras, a 100x zoom camera, and a 5,000 mAh battery.</span></p>\r\n', '2023-07-26 11:51:48'),
(2, 'Искусственный интеллект меняет будущее: в чем его польза и вред человечеству?', 'Келажакни ўзгартирувчи сунъий идрок: унинг инсониятга фойда-зиёни нимада?', 'Artificial intelligence changing the future: what is its benefit and harm to humanity?', 'В последнее время часто можно услышать термин искусственный интеллект. Что он такое? На него возлагают большие надежды ученые, ИТ-специалисты, работники интеллигенции, студенты и школьники. Политики и военные хотят использовать его в своих целях.', 'Кейинги вақтларда сунъий идрок атамаси тез-тез қулоққа чалинмоқда. У ўзи нима? Олимлар, IT-мутахассислари, ақлий меҳнат билан шуғулланувчилар, талаба ва мактаб ўқувчилари ундан катта умид қилишмоқда. Сиёсатдонлар ва ҳарбийлар эса ундан ўз мақсадлари йўлида фойдаланмоқчи. ', 'In recent times, the term artificial intelligence is often heard. What is he? Scientists, IT specialists, intellectual workers, students and schoolchildren have high hopes for it. Politicians and military want to use it for their own purposes.', 'uploads/news/2023-07-26/64c0e157642e0.jpg', '<h1><strong>Искусственный интеллект</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Эти технологии появились не сразу, а массовый интерес к ним появился в 2011-2012 гг. В то время стали решаться действительно сложные вопросы, такие как узнавание человека по голосу. Победа сети AlexNet в конкурсе по классификации изображений осенью 2012 года продемонстрировала превосходство этого подхода над другими.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">С середины 2010-х каждая крупная технологическая корпорация и наиболее перспективные стартапы начали использовать технологию нейронных сетей и развивать ее. Стало ясно, что искусственный интеллект можно использовать где угодно. Например, если в 2012 году у Google было всего два проекта в области глубокого обучения, то к 2016 году их количество перевалило за тысячу. Стремительное развитие отрасли привлекло внимание правительств всего мира.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Кремль начал обращать внимание на соблазн искусственного интеллекта ближе к концу второго десятилетия. В мае 2019 года Владимир Путин заявил, что тот, кто добьется монополии в сфере ИИ, станет &laquo;абсолютным правителем мира&raquo;. Он приказал добиться &laquo;технологического суверенитета&raquo; в области ИИ. Осенью того же года он подписал указ о создании национального проекта &laquo;Искусственный интеллект&raquo; и национальной стратегии развития ИИ до 2030 года.</span></p>\r\n', '<h1><strong>Сунъий идрок</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Бу технологиялар кеча ё бугун пайдо бўлиб қолгани йўқ, лекин унга нисбатан оммавий қизиқиш 2011&ndash;2012 йилларда пайдо бўлган. Ўшанда инсонни товушидан таниб олиш каби чиндан ҳам мураккаб масалалар ечила бошлаган. 2012 йил кузида тасвирларни синфлаш танловида AlexNet тармоғининг ғалабаси бу ёндашув бошқалардан устунлигини намойиш этиб берди.<br />\r\n<br />\r\n2010-йиллар ўрталаридан бошлаб ҳар бир йирик технокорпорация ва истиқболли стартапларнинг кўпчилиги нейротармоқли технологиялардан фойдаланиб, уни ривожлантира бошлади. Сунъий идрокни ҳар қандай жойда ишлатиш мумкинлиги ойдинлашди. Масалан, агар 2012 йилда Google чуқур ўрганиш соҳасида иккитагина лойиҳа бўлган бўлса, 2016 йилга келиб уларнинг сони мингдан ошди. Соҳа гуркираб ривожланиши бутун дунё бўйлаб ҳукуматлар эътиборига туша бошлади.<br />\r\n<br />\r\nСунъий идрок васвасасига Кремл иккинчи ўн йиллик охирига келиб эътибор қарата бошлади. 2019 йилнинг майида Владимир Путин AI соҳасида монополияга эришган одам &laquo;жаҳонга мутлақ ҳоким&raquo; бўлишини таъкидлади. У AI соҳасида &laquo;технологик суверенитет&raquo;га эришишга буйруқ берди. Ўша йилнинг кузида &laquo;Сунъий идрок&raquo; миллий лойиҳаси ва AI&rsquo;ни 2030 йилгача ривожлантириш бўйича миллий стратегияни таъсис этувчи фармон имзолади.</span></p>\r\n', '<h1><strong>Artificial</strong> <strong>intelligence</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">These technologies did not appear overnight, but mass interest in them appeared in 2011-2012. At that time, really complicated issues such as recognizing a person by his voice began to be solved. The victory of the AlexNet network in the image classification competition in the fall of 2012 demonstrated the superiority of this approach over others.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Since the mid-2010s, every major tech corporation and most promising startups have started using neural network technology and developing it. It became clear that artificial intelligence can be used anywhere. For example, if in 2012 Google had only two projects in the field of deep learning, by 2016 their number exceeded a thousand. The industry&#39;s booming development has caught the attention of governments around the world.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">The Kremlin began to pay attention to the temptation of artificial intelligence towards the end of the second decade. In May 2019, Vladimir Putin stated that the person who achieves a monopoly in the field of AI will be the &quot;absolute ruler of the world&quot;. He ordered to achieve &quot;technological sovereignty&quot; in the field of AI. In the fall of the same year, he signed a decree establishing the national project &quot;Artificial Intelligence&quot; and the national strategy for the development of AI until 2030.</span></p>\r\n', '2023-07-26 12:03:19'),
(3, 'Рыночная стоимость платформы Twitter выросла почти втрое — Bloomberg', 'Twitter платформасининг бозор қиймати деярли уч баравар пасайди – Bloomberg', 'The market value of the Twitter platform has almost tripled - Bloomberg', 'Говорят, что это было вызвано непонятными решениями владельца сети Илона Маска.', 'Бунга тармоқ эгаси Илон Маскнинг тушунарсиз қарорлари сабаб бўлгани айтилмоқда.  ', 'It is said that this was caused by the incomprehensible decisions of the owner of the network, Elon Musk.', 'uploads/news/2023-07-26/64c0e1fe4eeaf.jpg', '<h1><strong>Илон Маск</strong></h1>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\">Рыночная стоимость Twitter составляет треть от того, что предприниматель Илон Маск заплатил за его покупку. Об этом сообщает Bloomberg со ссылкой на инвестиционный холдинг Fidelity.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Маск купил соцсеть за 44 миллиарда долларов и признал, что заплатил больше, чем ее рыночная стоимость. Недавно он признал, что стоимость компании упала вдвое.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Fidelity, с другой стороны, сообщила о падении стоимости акций Twitter на 44% в ноябре прошлого года, после чего последовало еще 2 снижения.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Twitter был продан Илону Маску с общим долгом в 13 миллиардов долларов. Его необъяснимые решения привели к 50-процентному падению рекламных доходов соцсети. Чтобы исправить ситуацию, Маск начал предлагать подписку Twitter Blue, которая позволяет любому пройти аутентификацию и поставить синюю галочку рядом с именем своей учетной записи. Пока его купили менее 1% активных пользователей.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">По данным Bloomberg Billionaires, когда Илон Маск купил компанию в 2022 году, пакет акций Twitter стоил 25 миллиардов долларов. Сейчас его стоимость составляет 8,8 миллиарда долларов.</span></p>\r\n', '<h1><strong>Илон Маск&nbsp;</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Twitter ижтимоий тармоғининг бозор қиймати тадбиркор Илон Маск<strong>&nbsp;</strong>уни сотиб олиш учун тўлаган пулнинг учдан бир қисмини ташкил этади. Бу ҳақда Fidelity инвестиция ҳолдинги маълумотларига таяниб Bloomberg хабар берди.<br />\r\n<br />\r\nМаск ижтимоий тармоқни 44 миллиард долларга сотиб олган ва унинг бозор қийматидан кўпроқ пул тўлаганини тан олган эди. Яқинда у компаниянинг қиймати икки баравар пасайганини тан олди.<br />\r\n<br />\r\nЎз навбатида Fidelity ўтган йилнинг ноябрь ойида Twitter акциялари қиймати 44 фоизга пасайганини, сўнгра яна 2 марта пасайиш бўлгани ҳақида хабар берган эди.<br />\r\n<br />\r\nTwitter 13 миллиард долларлик умумий қарз билан Илон Маскка сотилди. Унинг қабул қилган тушунарсиз қарорлари ижтимоий тармоқнинг реклама даромади 50 фоизга қисқаришига олиб келди. Вазиятни тўғрилаш учун Маск ҳар кимга аутентификация қилиш ва аккаунт номи ёнида кўк белгини олиш имконини берадиган Twitter Blue обунасини таклиф қила бошлади. Ҳозиргача фаол фойдаланувчиларининг 1 фоиздан камроғи уни сотиб олган.<br />\r\n<br />\r\nBloomberg Billionaires маълумотларига кўра, 2022 йилда Илон Маск компанияни сотиб олаётганда Twitter акциялари пакетининг қиймати 25 млрд доллар бўлган. Ҳозир унинг қиймати 8,8 млрд долларни ташкил қилади.&nbsp;</span></p>\r\n', '<h1><strong>Elon Musk</strong></h1>\r\n\r\n<p><span style=\"font-size:18px\">Twitter&#39;s market value is a third of what entrepreneur Elon Musk paid to buy it. This was reported by Bloomberg with reference to Fidelity investment holding.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Musk bought the social network for $44 billion and admitted that he paid more than its market value. He recently admitted that the company&#39;s value has halved.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Fidelity, on the other hand, reported a 44% drop in Twitter&#39;s stock value in November last year, followed by 2 more declines.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Twitter was sold to Elon Musk with total debt of $13 billion. His inexplicable decisions led to a 50% drop in the social network&#39;s advertising revenue. To remedy the situation, Musk began offering a Twitter Blue subscription that allows anyone to authenticate and get a blue tick next to their account name. So far, less than 1 percent of its active users have purchased it.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">According to Bloomberg Billionaires, when Elon Musk bought the company in 2022, Twitter&#39;s stock package was worth $25 billion. Now its value is 8.8 billion dollars.</span></p>\r\n', '2023-07-26 12:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_uz` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_uz` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_ru`, `title_en`, `title_uz`, `main_image`, `description_ru`, `description_en`, `description_uz`) VALUES
(8, 'SAYRAM GOLD LUX', 'SAYRAM GOLD LUX', 'SAYRAM GOLD LUX', 'uploads/projects/2023-07-27/64c28a2a85221.jpg', '', '', ''),
(9, 'Национальная гвардия Узбекистана', 'Uzbekistan National Guard', 'Oʻzbekiston Respublikasi Milliy gvardiyasi', 'uploads/projects/2023-07-27/64c28b4d39185.jpg', '<div>\r\n<p>Демонтаж монтаж и транспортировка видеостены состоящей из 40 панелей&nbsp;55дюьмов</p>\r\n</div>\r\n\r\n<div>\r\n<h1>Уличные IP видеокамеры на крыше офисного комплекса</h1>\r\n\r\n<p>В компанию &quot;Protech Technology&quot; поступил заказ на монтаж уличной системы ip видеонаблюдения в недавно построенном офисном комплексе Национальная гвардия Узбекистана.<br />\r\n<br />\r\nЗадача: Обеспечить видеонаблюдением периметр вокруг здания.<br />\r\n<br />\r\nОборудование:<br />\r\n<br />\r\nIP-камера Beward с автофокусировкой и встроенной видео-аналитикой;<br />\r\nНеуправляемый PoE-коммутатор Beward;<br />\r\nИсточник питания NDR-240-48;<br />\r\nШкаф навесной с монтажной платой.<br />\r\n<br />\r\nАдрес установки: город Ташкент, улица Шарафа Рашидова, дом 23</p>\r\n</div>\r\n', '<div>\r\n<div>\r\n<div>\r\n<p><span style=\"font-size:14px\">Dismantling installation and transportation of a video wall consisting of 40 panels 55 inches</span></p>\r\n\r\n<p><span style=\"font-size:24px\"><strong>Outdoor IP video cameras on the roof of the office complex</strong></span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:14px\">The Protech Technology company received an order for the installation of an outdoor IP video surveillance system in the newly built office complex of the National Guard of Uzbekistan.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Task: Provide video surveillance around the perimeter of the building.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Equipment:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Beward IP camera with autofocus and built-in video analytics;<br />\r\nBeward unmanaged PoE switch;<br />\r\nPower supply NDR-240-48;<br />\r\nWall cabinet with mounting plate.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Installation address: Tashkent city, Sharaf Rashidov street, house 23</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n', '<div>\r\n<p>Демонтаж монтаж и транспортировка видеостены состоящей из 40 панелей&nbsp;55дюьмов</p>\r\n</div>\r\n\r\n<div>\r\n<h1>Уличные IP видеокамеры на крыше офисного комплекса</h1>\r\n\r\n<p>В компанию &quot;Protech Technology&quot; поступил заказ на монтаж уличной системы ip видеонаблюдения в недавно построенном офисном комплексе Национальная гвардия Узбекистана.<br />\r\n<br />\r\nЗадача: Обеспечить видеонаблюдением периметр вокруг здания.<br />\r\n<br />\r\nОборудование:<br />\r\n<br />\r\nIP-камера Beward с автофокусировкой и встроенной видео-аналитикой;<br />\r\nНеуправляемый PoE-коммутатор Beward;<br />\r\nИсточник питания NDR-240-48;<br />\r\nШкаф навесной с монтажной платой.<br />\r\n<br />\r\nАдрес установки: город Ташкент, улица Шарафа Рашидова, дом 23</p>\r\n</div>\r\n'),
(10, 'Таможня узбекистана', 'Таможня узбекистана', 'Таможня узбекистана', 'uploads/projects/2023-07-27/64c28c16ac313.jpg', '', '', ''),
(41, 'To\'ytepa shtab', 'To\'ytepa shtab', 'To\'ytepa shtab', 'uploads/projects/2023-07-27/64c28cd05be38.jpg', '', '', ''),
(42, 'Uzbekistan Airways Technics', 'Uzbekistan Airways Technics', 'Uzbekistan Airways Technics', 'uploads/projects/2023-07-27/64c28db73440d.jpg', '', '', ''),
(43, 'Демонтаж монтаж и', 'Демонтаж монтаж и', 'Демонтаж монтаж и', 'uploads/projects/2023-07-27/64c28e9a8d344.jpg', '', '', ''),
(44, 'ЧС по объекту ГУ Марказий', 'ЧС по объекту ГУ Марказий', 'ЧС по объекту ГУ Марказий', 'uploads/projects/2023-07-27/64c28f20b1082.jpg', '', '', ''),
(45, 'Таможенного института', 'Таможенного института', 'Таможенного института', 'uploads/projects/2023-07-27/64c28f7a77ad6.jpg', '', '', ''),
(46, 'завод GTL', 'завод GTL', 'завод GTL', 'uploads/projects/2023-07-27/64c28fd9da554.jpg', '', '', ''),
(47, 'НИЯУ МИФИ в г.Ташкенте', 'НИЯУ МИФИ в г.Ташкенте', 'НИЯУ МИФИ в г.Ташкенте', 'uploads/projects/2023-07-27/64c290b3c1d0c.jpg', '', '', ''),
(48, 'Строительство зданий ГТК РУз', 'Строительство зданий ГТК РУз', 'Строительство зданий ГТК РУз', 'uploads/projects/2023-07-27/64c294c3e7c09.jpg', '', '', ''),
(49, 'DMR Tier III в г. Ташкенте для службы', 'DMR Tier III в г. Ташкенте для службы', 'DMR Tier III в г. Ташкенте для службы', 'uploads/projects/2023-07-27/64c2951e0bf8e.jpg', '', '', ''),
(50, 'Монтаж и пусконаладочные работы систем', 'Монтаж и пусконаладочные работы систем', 'Монтаж и пусконаладочные работы систем', 'uploads/projects/2023-07-27/64c2957058a08.jpg', '', '', ''),
(51, 'Монтаж системы охранно-пожарной сигнализации (ОПС)', 'Монтаж системы охранно-пожарной сигнализации (ОПС)', 'Монтаж системы охранно-пожарной сигнализации (ОПС)', 'uploads/projects/2023-07-27/64c295da2afcd.jpg', '', '', ''),
(52, 'Прокладка и демонтаж кабелей специальной связи между зданиями', 'Прокладка и демонтаж кабелей специальной связи между зданиями', 'Прокладка и демонтаж кабелей специальной связи между зданиями', 'uploads/projects/2023-07-27/64c2964183043.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int NOT NULL,
  `project_id` int NOT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `image_path`) VALUES
(3, 9, 'uploads/2023-07-27/XHPUtA3hO-c9ehr6IYbz7bcgmpCPIcEL.jpg'),
(36, 10, 'uploads/2023-07-27/hUF1WGsLyRxa8lxX-oYz3YYg7vEkOnfT.jpg'),
(37, 10, 'uploads/2023-07-27/-vGJmc1FZpbG5LJa3U3m7gUBp_CwPs-2.jpg'),
(38, 8, 'uploads/projects/2023-07-27/WszLcCGGA0XqYfdI5RS-y2zYmDq8gEuF.jpg'),
(39, 8, 'uploads/projects/2023-07-27/UhNXbjR5BTWs37EaJWwbJYpa55sHasit.jpg'),
(40, 8, 'uploads/projects/2023-07-27/TeaBSNLlI1S2wVoKK8DReGgn4JJBqGok.jpg'),
(41, 8, 'uploads/projects/2023-07-27/1X0ZCdOADgQbdtyXKiZV5HZVjiua3v6t.jpg'),
(42, 8, 'uploads/projects/2023-07-27/Ze-ozch_oeuX3boUYV1HZMrw0v4h1lOL.jpg'),
(43, 8, 'uploads/projects/2023-07-27/8QnhAh0tY5cXtnXXIcNLdU_ExMnQN6VV.jpg'),
(44, 8, 'uploads/projects/2023-07-27/WuhKhLLwYXVk1vH5pjAjq2kOyojVSyNU.jpg'),
(45, 8, 'uploads/projects/2023-07-27/IpJ2BNAXvNKcpNoxu4NIR106X9g2aRSn.jpg'),
(46, 8, 'uploads/projects/2023-07-27/pLPAvXb2AveyXfZmgxAo5vLofaXODwSt.jpg'),
(47, 8, 'uploads/projects/2023-07-27/jOp2jxhA-McvJqmNb4m2t6URmm9m4Gsk.jpg'),
(48, 8, 'uploads/projects/2023-07-27/m8Y5n4DZ8VNGX2lcZobNd2M093J0iBlY.jpg'),
(49, 8, 'uploads/projects/2023-07-27/XGXcfyN-WRX5YLL-mRZ4vwxdqnCvFh86.jpg'),
(50, 9, 'uploads/projects/2023-07-27/oJAUBbprkdMab1nJz0kHFPw3aZpPtGcn.jpg'),
(51, 9, 'uploads/projects/2023-07-27/L5qHPdK5bvYDzPYx_uzRHjriqrH-QkFM.jpg'),
(52, 9, 'uploads/projects/2023-07-27/dNY-P2UIUr16epJocni9IkQdfjAdvnun.jpg'),
(53, 9, 'uploads/projects/2023-07-27/VPn4u7mzrbAbN4S6VjAOv0D63S1IVdxD.jpg'),
(54, 9, 'uploads/projects/2023-07-27/IRnb9tDd35HDUsvssINTZVRkfxvCbEI3.jpg'),
(55, 9, 'uploads/projects/2023-07-27/TyjH8KaLBp0YJXXkRL7YLMoGoxjUt06i.jpg'),
(56, 10, 'uploads/projects/2023-07-27/3Bkp4d-WQ9cvou8ZVXXclm10iXVeKI_S.jpg'),
(57, 10, 'uploads/projects/2023-07-27/Xpy14BrsoyGs1mnZLkFNugWvcZFelGVD.jpg'),
(58, 10, 'uploads/projects/2023-07-27/KkfcJXCRVShEb90B5YwqmfyubgAirMqR.jpg'),
(59, 10, 'uploads/projects/2023-07-27/L2-1jdGQ6SicTw-fLIFmFmHc0XCcBRLW.jpg'),
(60, 10, 'uploads/projects/2023-07-27/P3Eq-YMynP0bUjC8q1bi7ikfVtwLtjk4.jpg'),
(61, 41, 'uploads/projects2023-07-27/ZfKpVlUlm6SFnRnU_OlslOgZoATJsvX6.jpg'),
(62, 41, 'uploads/projects2023-07-27/m3uPioGDAe6v5VbOHqu790Y9MCDcosi7.jpg'),
(63, 41, 'uploads/projects2023-07-27/3tilV-jjNYZwiaa7j6J1jGzRqJUYAVsl.jpg'),
(64, 41, 'uploads/projects2023-07-27/xQ5EwTbPtkLBtC0zT9CO7wvcq6m-vhoS.jpg'),
(65, 41, 'uploads/projects2023-07-27/U0mtBPoaA0OepqaLUDuzfoaYkXYqzxND.jpg'),
(66, 42, 'uploads/projects2023-07-27/sIXIOc_3fZhVbvKN7y6QVuK15f_O-Q_9.jpg'),
(67, 42, 'uploads/projects2023-07-27/nEEW5d6sCfBs6bYZXV6kqfTxAzEpLRLc.jpg'),
(68, 42, 'uploads/projects2023-07-27/2E9oVqpFwzV2yId21gC58EaBgB9sCu0u.jpg'),
(69, 42, 'uploads/projects2023-07-27/Xy3YIcrVU8uXtvkNw3m9-jFOjKbgg-tW.jpg'),
(70, 42, 'uploads/projects2023-07-27/DpbkyK-cDPzzwFYHzuh5OyYmq4DnFq8J.jpg'),
(71, 42, 'uploads/projects2023-07-27/L4hX4mX4IouMD8PKVALjwR4uSwHnOOs2.jpg'),
(72, 42, 'uploads/projects2023-07-27/l609hLlQL2rWUknMd7zVZjSiuLG0WE1q.jpg'),
(73, 42, 'uploads/projects2023-07-27/e_HXzijXmOw7SSXaVUs-Z7f5JCB2MEAI.jpg'),
(74, 42, 'uploads/projects2023-07-27/wd7n7Xjy5T2oG8e71vkj4kxz4zWkmBxr.jpg'),
(75, 42, 'uploads/projects2023-07-27/5LwVEVC-zb0IgKHiQv-4zmQG6DTeSGNI.jpg'),
(76, 42, 'uploads/projects2023-07-27/xuQ_qfiifDOYFT_HKyJdVS4Qz7jDO6pV.jpg'),
(77, 42, 'uploads/projects2023-07-27/6pIYgXV8DnFpvhsHHVabZbouhliWgEI2.jpg'),
(78, 43, 'uploads/projects2023-07-27/rOxVaF2LJNpVMpTc7pPniCLUQYyxycBb.jpg'),
(79, 43, 'uploads/projects2023-07-27/f-y60AnJYFYcY1T8YUP4ZHFBnhuPCz_D.jpg'),
(80, 43, 'uploads/projects2023-07-27/2JXxTqxi9gk9w6SYNa5-eqUHzogaaf3m.jpg'),
(81, 43, 'uploads/projects2023-07-27/mIfHJbErExDViu0D0ZZyrsRcOvg3iokR.jpg'),
(82, 43, 'uploads/projects2023-07-27/MBpahRRVD5GkfpuWw5T4xDv-wqudiUj9.jpg'),
(83, 43, 'uploads/projects2023-07-27/OMZ1hXgtyAjBqG2sUgOmqnUWjmrcJJ3S.jpg'),
(84, 43, 'uploads/projects2023-07-27/X48QUROqgaE7VoojF6iMhS-5OBdG9rLK.jpg'),
(85, 43, 'uploads/projects2023-07-27/QKVBc0FbL4tOJocmepkI5bC0GxXlIUGA.jpg'),
(86, 43, 'uploads/projects2023-07-27/RCSQmaAHf85TcHyVZewessgDNVLXjj0J.jpg'),
(87, 43, 'uploads/projects2023-07-27/OMvvzbwSpxmkY1E5W6hUhEy0KqrhTTO2.jpg'),
(88, 43, 'uploads/projects2023-07-27/B7K-Li_keG7Od7cOmpKKwLXTnjV3wu6k.jpg'),
(89, 43, 'uploads/projects2023-07-27/9mw2AKCSxXN_iKNLb8hS3sJNhBNDRZ9z.jpg'),
(90, 43, 'uploads/projects2023-07-27/C-rEp9Fyi_IZeOxHmbl1WXAq43EI13kX.jpg'),
(91, 43, 'uploads/projects2023-07-27/geMIboqMVlrkRvrnR8JbNuu9q_M-npQb.jpg'),
(92, 43, 'uploads/projects2023-07-27/LYQSZolzqtcqzYf0sSl5dlHqegFCcHVd.jpg'),
(93, 43, 'uploads/projects2023-07-27/U5kM4CDbzpADDCs05xM4KpsYV40K4fzI.jpg'),
(94, 43, 'uploads/projects2023-07-27/1Yej9EdKz-ZXnfTO9QYOM5m7L0nwInNT.jpg'),
(95, 43, 'uploads/projects2023-07-27/sZTMWEmxvirXB1TQj5BWgt4t_i-gOEm6.jpg'),
(96, 44, 'uploads/projects2023-07-27/9ArV9FDGxZMzsNoMd23kSn9eAP0_7d11.jpg'),
(97, 44, 'uploads/projects2023-07-27/-202KVo5Li-ktrX4RucYVGsbTQExF7_M.jpg'),
(98, 44, 'uploads/projects2023-07-27/LpQJ055yba1QaOFquOWlYmVo7WkKNtBS.jpg'),
(99, 44, 'uploads/projects2023-07-27/IMOf8uaLo-9cOM5DBsqKIX8pyegHx8od.jpg'),
(100, 44, 'uploads/projects2023-07-27/0ZmBhUEmZq0OkKQrQLfhw1faEysNE1AS.jpg'),
(101, 44, 'uploads/projects2023-07-27/xoW_6VYq4fiPYMcEFeKrK0fboQQiWxeG.jpg'),
(102, 44, 'uploads/projects2023-07-27/zHDw9HrL67ClFxKnHXRep-w_pnFyukoL.jpg'),
(103, 45, 'uploads/projects2023-07-27/IB9nP2boIbvaBfn-Q2o0BpcI-JYP8uJi.jpg'),
(104, 45, 'uploads/projects2023-07-27/QOHmKouAapkmHHsIRkXBApCmpHwwu4zZ.jpg'),
(105, 45, 'uploads/projects2023-07-27/YTJyADF6pDE1b7cmWOTMHAvdrn5PTQU1.jpg'),
(106, 45, 'uploads/projects2023-07-27/ZpFYj0dRcJQHk7VKQW4mrl6v2i9mTvz8.jpg'),
(107, 45, 'uploads/projects2023-07-27/v4wpJ7guYUPBQ-toOW3sFcwUVAIZgv5c.jpg'),
(108, 45, 'uploads/projects2023-07-27/fmwkuWeARHryCPLJBe1D411oQSQZ3DH0.jpg'),
(109, 45, 'uploads/projects2023-07-27/PdniO8GyTT8KR1Zoz8i2kJc3LMcnoCr3.jpg'),
(110, 46, 'uploads/projects2023-07-27/ilZw6oATdtzP6ZS3yoUS-398DU_Ng_VH.jpg'),
(111, 46, 'uploads/projects2023-07-27/hfyCNHNFy0axK5vl2tAdxqUUI7CPU8cd.jpg'),
(112, 46, 'uploads/projects2023-07-27/0escvVbPaADZVg4iOQ_PIT8gn0DXKqP0.jpg'),
(113, 46, 'uploads/projects2023-07-27/5I3Vi8MbJ5oES_9UOQRUoVgL7poDyx41.jpg'),
(114, 46, 'uploads/projects2023-07-27/WeT14ruV3Rn1WG2-1vWxvtfOxcxdZaTK.jpg'),
(115, 46, 'uploads/projects2023-07-27/bCAgAI51HAKkzXLhTjfODjMeqzxvPKY1.jpg'),
(116, 46, 'uploads/projects2023-07-27/EZrnCPr0LrLI9mP2mP_DY87xFVSjdPRP.jpg'),
(117, 46, 'uploads/projects2023-07-27/DZx2tGiREBvb3yOIQmYtJo5znrumLW-e.jpg'),
(118, 46, 'uploads/projects2023-07-27/9mJ2pMzXpRSPNNEfCIczqV34q3lL-zuR.jpg'),
(119, 46, 'uploads/projects2023-07-27/WDtP8fX6RPvQ-V4fDONtUWlwSAqw9xBl.jpg'),
(120, 46, 'uploads/projects2023-07-27/6QW-pDknEZahQTbSmGSkstlBt4tY6lH9.jpg'),
(121, 47, 'uploads/projects2023-07-27/O4XQLJoFArM-_dciASNurIuql3bcZICK.jpg'),
(122, 47, 'uploads/projects2023-07-27/xb1kWZquZeb9OoQ91cQ0RVq0l8Nd4Hwd.jpg'),
(123, 47, 'uploads/projects2023-07-27/syj_NfZ6pj0uwfttFmKlrkcKtPRgTMLY.jpg'),
(124, 47, 'uploads/projects2023-07-27/ZXjCW88J9bNOiZ-vxwbPW4BVlWKirMik.jpg'),
(125, 47, 'uploads/projects2023-07-27/I6Rgq-jpQ-SUNbtNCHFho1ZuBAvQnCTR.jpg'),
(126, 47, 'uploads/projects2023-07-27/Rt9GbYIK54uzJmUqvMBi0VN6Oc4i0D36.jpg'),
(127, 47, 'uploads/projects2023-07-27/1Hnk57jPYpFGCjUQ1RhADhS4Uvc4Ra8U.jpg'),
(128, 47, 'uploads/projects2023-07-27/kRgJUa09fco1pdpbN8XzAxcgcCNbKvW3.jpg'),
(129, 47, 'uploads/projects2023-07-27/frc-XN3UkCeE1RLjlyvuEyM4wi38ghoF.jpg'),
(130, 47, 'uploads/projects2023-07-27/qRiAKOrearPJIJBvLAANO7B1OH74HVsP.jpg'),
(131, 47, 'uploads/projects2023-07-27/2RKzcl5CKhVbFp32SiLhffs07-RW8oWe.jpg'),
(132, 47, 'uploads/projects2023-07-27/v2xoUT_Yt9UHxN7aXxbXLgoUGTjCIfIr.jpg'),
(133, 47, 'uploads/projects2023-07-27/ryV_kw_CcjUkkkakRtwBtutQH_D9i2LN.jpg'),
(134, 47, 'uploads/projects2023-07-27/DYNmWc3jFcBzOQ-uD3zR0ZdbQfmU5qgX.jpg'),
(135, 47, 'uploads/projects2023-07-27/mmOwBXkyb0HfviPqVJ_mKrKnWqH-XOb4.jpg'),
(136, 47, 'uploads/projects2023-07-27/ICK8Yn_ve_ErfnRCxHwRC5cYCIqfr4DY.jpg'),
(137, 47, 'uploads/projects2023-07-27/cYHXiMFC5xJZkv_f2k56E6i_k6TR5_yx.jpg'),
(138, 47, 'uploads/projects2023-07-27/eCuMTCkwy-0QcAL4eEDxLFYBYtDyTWOf.jpg'),
(139, 47, 'uploads/projects2023-07-27/j3_y3mU6aVvl6J4WHtbOc_HHiyX54Q8s.jpg'),
(140, 48, 'uploads/projects2023-07-27/jl3ypxt7yKMQTjv-DodDw8Ghh5s49tG4.jpg'),
(141, 48, 'uploads/projects2023-07-27/atPR7vHLw1OXq5qB3oJOnxjBZoBuBeYo.jpg'),
(142, 48, 'uploads/projects2023-07-27/9_J8y71vmkOQlh7lkNMUwiuBs2a8Mj7z.jpg'),
(143, 48, 'uploads/projects2023-07-27/JNXNt_stwghLRynqcjiz6iWNo-edea-r.jpg'),
(144, 48, 'uploads/projects2023-07-27/LZrFCKma2JOIWDF1066ItJhJifxxboOm.jpg'),
(145, 48, 'uploads/projects2023-07-27/VfrMLgYAIlIouCrYxMM5Iv0iCSPB6hA5.jpg'),
(146, 48, 'uploads/projects2023-07-27/zYu4yYKqr5MRCA85wumaQHNsHjBpfNaI.jpg'),
(147, 48, 'uploads/projects2023-07-27/q70FyLP1N_iRzH5ydpqT5MNO3l1PJ0qz.jpg'),
(148, 48, 'uploads/projects2023-07-27/pGkgRVMnGXISK7QAOdrhHccMzbuG3sun.jpg'),
(149, 48, 'uploads/projects2023-07-27/QMGkP8ONqnRjxj995hUH-rOP2CgGwUBb.jpg'),
(150, 48, 'uploads/projects2023-07-27/8C28ZPBaAkuRezU5tHcl1VmiJK6NjaqJ.jpg'),
(151, 48, 'uploads/projects2023-07-27/HY-ikoPOo1RvRZ05Nn7rO2J0wr_kU1Q_.jpg'),
(152, 48, 'uploads/projects2023-07-27/Fme7LK3eQ6EEXjRUaUBz8AC2WAXF5oVP.jpg'),
(153, 48, 'uploads/projects2023-07-27/-NE_VD7QCP-x75jdc4TEXdAuIgcxNeP7.jpg'),
(154, 48, 'uploads/projects2023-07-27/TYLceNZxb6pHDPhUVT0DkVAKREAppcud.jpg'),
(155, 48, 'uploads/projects2023-07-27/WrLlaAf3pahjOpsef0bdJd9wEVTEw0PJ.jpg'),
(156, 48, 'uploads/projects2023-07-27/O1Qr9uNSVwNBd0zIx0ztvwqxTnsxxUVR.jpg'),
(157, 48, 'uploads/projects2023-07-27/KIlvFLNbQfUE1SjMCa6tpGqb9fWBY9uC.jpg'),
(158, 48, 'uploads/projects2023-07-27/NbueuPP-q5fDBxApv14IZl11eBuGr3vb.jpg'),
(159, 49, 'uploads/projects2023-07-27/ZK1wiAK3vq1BvnOepaYy8K2CejuXFv9V.jpg'),
(160, 49, 'uploads/projects2023-07-27/s8p9e__yTtU3ghvYHSLS9x6IYMaTaDEn.jpg'),
(161, 49, 'uploads/projects2023-07-27/zAAUsQAMQihzs4jjCHd49tcDn1xPdR4N.jpg'),
(162, 49, 'uploads/projects2023-07-27/n3TfuLn9eUC7FBSG5K8BQVw-CpjkWuAK.jpg'),
(163, 49, 'uploads/projects2023-07-27/r_KxtP_ZXWvBgm6lSGZVE5D4FeznLSV0.jpg'),
(164, 49, 'uploads/projects2023-07-27/7mexy1jSi_19KUr9bE7WEryxT9aEKDbw.jpg'),
(165, 49, 'uploads/projects2023-07-27/xKZzEpNO3wUlWIz53Xh-O_HHWk6dVgrS.jpg'),
(166, 50, 'uploads/projects2023-07-27/RYJUSRkkAa5Q-7ojcGK4DMMvugvouffc.jpg'),
(167, 50, 'uploads/projects2023-07-27/Dst22pKM6xresEv9p4dBx1t8aCgZhFvc.jpg'),
(168, 50, 'uploads/projects2023-07-27/0KTEuiX5dvKPiOUNssKL4zdXtptWy4CK.jpg'),
(169, 50, 'uploads/projects2023-07-27/fhnnb4rgzlt1xfubO6A1DH6Gzdot7OBx.jpg'),
(170, 50, 'uploads/projects2023-07-27/dF4Rqjo6CRn03DlokqKt2QjjJBYjveO2.jpg'),
(171, 50, 'uploads/projects2023-07-27/ieyWQh8MttKajwRV5epsU2BDxpFn35xM.jpg'),
(172, 50, 'uploads/projects2023-07-27/bbRIIEg75tA5gmtY5OPNT_wrjVVsMCNw.jpg'),
(173, 51, 'uploads/projects2023-07-27/JOWIW7KxGDFkRj2nzLOakz9AFldbrBxW.jpg'),
(174, 51, 'uploads/projects2023-07-27/iTL3UN0dgOW26NpLqVMwO96IdYPwPzmj.jpg'),
(175, 51, 'uploads/projects2023-07-27/4LUVXn3bMv_bq_sfLLUDyDJQv4rGGTa5.jpg'),
(176, 51, 'uploads/projects2023-07-27/aT3t8AVBOCGEQJvzkQGktXEChAa326xw.jpg'),
(177, 51, 'uploads/projects2023-07-27/p26ntyWEooWl1re59W3mGtq6CImahIRG.jpg'),
(178, 51, 'uploads/projects2023-07-27/phhr0j8lP_9UFpXzWAGII7V7ByLXVhJI.jpg'),
(179, 51, 'uploads/projects2023-07-27/F5k3WGsuw-Rfqa8JkrMvl9CcvIu0X9cL.jpg'),
(180, 51, 'uploads/projects2023-07-27/zbdVsVYtqOxI0OPdZ2wh7nYHAeXF7zsJ.jpg'),
(181, 51, 'uploads/projects2023-07-27/_sV-r4OZM9yEcUz0lhHt6EOllcc-K61y.jpg'),
(182, 51, 'uploads/projects2023-07-27/o0hC4HQG8h2lMs7kRUKYoibwCh7luuCo.jpg'),
(183, 51, 'uploads/projects2023-07-27/KdMnOo1iWzlfO2DjcwyvSK5v-VMVuntq.jpg'),
(184, 51, 'uploads/projects2023-07-27/FvTngFYN-Iawni-0pHFSHRrim3kdiOoC.jpg'),
(185, 51, 'uploads/projects2023-07-27/IeQ-4xczKed3iKN9P8KrnXSYSTRqPyWh.jpg'),
(186, 51, 'uploads/projects2023-07-27/MTEjy5SU8DPDXe-VXp1TCEEQN5-QxfSw.jpg'),
(187, 51, 'uploads/projects2023-07-27/ClTlyIJGaa754bI-iw-sNCJXiHDvhcOb.jpg'),
(188, 52, 'uploads/projects2023-07-27/iThzLRLsF38dHVW8_RImlYWLxJY5p70Q.jpg'),
(189, 52, 'uploads/projects2023-07-27/eUJ-UJAoiM5vFUAwYljJezfzn0w4UgvC.jpg'),
(190, 52, 'uploads/projects2023-07-27/_42M5yC3TwmE4Qyr5yYL4kyQ4zGHvYeG.jpg'),
(191, 52, 'uploads/projects2023-07-27/XahrcbY72KeAB1FJXFJpby00Tz3hI8ES.jpg'),
(192, 52, 'uploads/projects2023-07-27/PnMXctUWDrbIBOGaFOqintjJpO3GsTVb.jpg'),
(193, 52, 'uploads/projects2023-07-27/lv5DV-6EpOvBDH3Qim2Sg4EykKRe_RWL.jpg'),
(194, 52, 'uploads/projects2023-07-27/qfmmdg_qPB6BaQDOpKzfGbKogaYXx3T0.jpg'),
(195, 52, 'uploads/projects2023-07-27/IcTXgD01wsT3nQoQSLNeUaHi3YmhdpN2.jpg'),
(196, 52, 'uploads/projects2023-07-27/_RFocZ-i65Gl_R7n2LT992z4Jr4rtAtE.jpg'),
(197, 52, 'uploads/projects2023-07-27/4u66eRVKQEBr4OMHMi26YaOis9OL9DB_.jpg'),
(198, 52, 'uploads/projects2023-07-27/VJJvuBbe2_WZHJxx11a6BS5QqfhqfGka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `short_description_ru` text,
  `short_description_uz` text,
  `short_description_en` text,
  `image_bg` varchar(255) DEFAULT NULL,
  `title_ru` text NOT NULL,
  `title_uz` text NOT NULL,
  `title_en` text NOT NULL,
  `image_main` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_uz` text NOT NULL,
  `text_en` text NOT NULL,
  `text_full_ru` text,
  `text_full_uz` text,
  `text_full_en` text,
  `isHome` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `short_description_ru`, `short_description_uz`, `short_description_en`, `image_bg`, `title_ru`, `title_uz`, `title_en`, `image_main`, `text_ru`, `text_uz`, `text_en`, `text_full_ru`, `text_full_uz`, `text_full_en`, `isHome`, `created_at`) VALUES
(2, 'Специалистами \"PROTECH TECHNOLOGY\" осуществляется разработка и составление проектной документации  автоматической системы пожарной сигнализации и оповещения людей о пожаре (АСПС и СООП).', '\"PROTECH TECHNOLOGY\" mutaxassislari tomonidan avtomatik yong\'in signalizatsiyasi va odamlarni yong\'indan ogohlantirish (ASPS va SOOP) uchun loyiha hujjatlarini ishlab chiqish va tayyorlash xizmati.', 'Service of development and preparation of project documents for automatic fire alarm and fire warning to people (ASPS and SOOP) by \"PROTECH TECHNOLOGY\" specialists.', 'uploads/services/2023-07-24/64be4d268e4f9.jpg', 'Проектирование и монтаж системы пожарной сигнализации и оповещение', 'Yong\'in signalizatsiyasi va xabar berish tizimlarini loyihalash va o\'rnatish', 'Design and installation of fire alarm and notification systems', 'uploads/services/2023-07-27/64c18e6ba888b.jpg', 'Компания \"Protech Technology\" предоставляет услуги по проектированию и монтажу пожарной сигнализации и других противопожарных систем. Имеем большой опыт работ как с малыми так и с крупными объектами такими как: банки, госпитали, склады и т.д. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'The company \"Protech Technology\" provides design and installation of fire alarm and other fire protection systems. Imeem bolshoy opyt rabot kak s malymi tak i s krupnymi obektami kak takimi kak kak: bank, hospitali, sklady i t.d.', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 1, '2023-07-27 00:21:47'),
(3, 'Компания \"PROTECH TECHNOLOGY\"   выполнит монтаж быстро и качественно. Мы предлагаем оптимальные решения, ориентируясь на бюджет заказчика.', 'O\'rnatishni \"PROTECH TECHNOLOGY\" kompaniyasi tez va sifatli amalga oshiradi. Biz mijozning byudjetiga e\'tibor qaratgan holda eng yaxshi echimlarni taklif qilamiz.', 'Design and installation of a video surveillance system for buildings Installation is carried out quickly and qualitatively by \"PROTECH TECHNOLOGY\" company. We offer the best solutions keeping in mind the client\'s budget.', 'uploads/services/2023-07-26/64c08215a2ec8.jpg', 'Проектирование и монтаж системы видеонаблюдения здании и периметра', 'Binolar uchun video kuzatuv tizimini loyihalash va o\'rnatish', 'Design and installation of video surveillance system for buildings', 'uploads/services/2023-07-26/64c08215a314a.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 1, '2023-07-26 05:58:03'),
(4, 'Профессионально  организованное серверное помещение обеспечит надежную бесперебойную работу инженерных систем и всей группы серверного и сетевого оборудования, и как следствие станет залогом стабильной успешной работы и развития вашей компании.', 'Professional tarzda tashkil\r\n                                            etilgan server xonasi muhandislik tizimlari va butun server va tarmoq\r\n                                            uskunalari guruhining ishonchli uzluksiz ishlashini ta\'minlaydi va natijada\r\n                                            kompaniyangizning barqaror muvaffaqiyatli ishlashi va rivojlanishining\r\n                                            kalitiga aylanadi.', 'Professionally organized\r\n                                             server room engineering systems and the entire server and network\r\n                                             ensures reliable continuous operation of the equipment group and as a result\r\n                                             stable successful operation and development of your company\r\n                                             becomes the key.', 'uploads/services/2023-07-26/64c08db147879.jpg', 'Монтаж сетевые, коммутационные и серверное оборудования', 'Tarmoq, kommutatsiya va server uskunalarini o\'rnatish', 'Installation of network, switching and server equipment', 'uploads/services/2023-07-26/64c09402de748.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 1, '2023-07-26 06:33:22'),
(5, '', '', '', NULL, 'Проектирование и монтаж охранные системы здании и периметра', 'Bino va atrof-muhitni muhofaza qilish tizimlarini loyihalash va o\'rnatish', 'Design and installation of building and environmental protection systems', 'uploads/services/2023-07-26/64c0917f4bf41.jpg', 'Проектирование охранных сигнализаций учитывает архитектурные и планировочные особенности здания, характеристики прилегающей территории, нюансы вида деятельности на охраняемом объекте. Наличие проекта упрощает монтаж и настройку оборудования охранной системы, экономит средства на ее эксплуатацию и обслуживание. В зависимости от целей заказчика, может осуществляться разработка системы исключительно для охраны объекта или проектирование охранно-пожарной сигнализации (ОПС).', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:22:39'),
(6, '', '', '', NULL, 'Проектирование и строительство сетей проводных и беспроводных передачи данных', 'Simli va simsiz ma\'lumotlarni uzatish tarmoqlarini loyihalash va qurish', 'Design and construction of wired and wireless data transmission networks', 'uploads/services/2023-07-26/64c09654cfb31.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:44:21'),
(7, '', '', '', NULL, 'Проектирование и строительство сетей традиционной и IP телефонной связи', 'An\'anaviy va IP telefon tarmoqlarini loyihalash va qurish', 'Design and construction of traditional and IP telephone networks', 'uploads/services/2023-07-26/64c09748c9c08.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:47:20'),
(8, '', '', '', NULL, 'Проектирование и монтаж системы контроля и учета доступа', 'Kirish nazorati va buxgalteriya tizimini loyihalash va o\'rnatish', 'Design and installation of access control and accounting system', 'uploads/services/2023-07-26/64c09800d008e.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:50:24');
INSERT INTO `services` (`id`, `short_description_ru`, `short_description_uz`, `short_description_en`, `image_bg`, `title_ru`, `title_uz`, `title_en`, `image_main`, `text_ru`, `text_uz`, `text_en`, `text_full_ru`, `text_full_uz`, `text_full_en`, `isHome`, `created_at`) VALUES
(9, '', '', '', NULL, 'Подготовка (адаптация) технических, серверных и аппаратных помещении под ключ.', 'Texnik, server va apparat xonalarini tayyorlash va moslashtiris.', 'Preparation and adaptation of technical, server and hardware rooms.', 'uploads/services/2023-07-26/64c0985948bf7.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:51:53'),
(10, '', '', '', NULL, 'Система кондиционирования технологических помещении', 'Texnologik xonalarga konditsioner tizimi o’rnatish', 'Technological room air conditioning system', 'uploads/services/2023-07-26/64c0989cb2231.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:53:00'),
(11, '', '', '', NULL, 'Проектирование и монтаж систем автоматической газовой пожаротушения для серверных помещений', 'Server xonalari uchun avtomatik gazli yong\'inni o\'chirish tizimlarini loyihalash va o\'rnatish', 'Design and installation of automatic gas fire extinguishing systems for server rooms', 'uploads/services/2023-07-26/64c098e6eb1c2.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:54:14'),
(12, '', '', '', NULL, 'Проектирование и монтаж систем звукового оповещение', 'Ovozli ogohlantirish tizimlarini loyihalash va o\'rnatish', 'Design and installation of sound warning systems', 'uploads/services/2023-07-26/64c09920c1679.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:55:12'),
(13, '', '', '', NULL, 'Проектирование и строительство волоконно-оптические линии связи (ВОЛС)', 'Optik tolali aloqa liniyalarini loyihalash va qurish', 'Design and construction of optical fiber communication lines', 'uploads/services/2023-07-26/64c099b875237.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования.', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Design is an important step in the process of implementing a project to deploy a Wi-Fi network. A preliminary analysis allows you to avoid possible problems in the future related to the quality of coverage, the stability and speed of the wireless data channel, ensuring the proper level of network security or the amount of equipment involved in the project', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 06:57:44'),
(14, '', '', '', NULL, 'Проектирование и монтаж систем часофикации', 'Soat tizimlarini loyihalash va o\'rnatish', 'Soat tizimlarini loyihalash va o\'rnatish', 'uploads/services/2023-07-26/64c09a91dabac.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 07:01:21'),
(15, '', '', '', NULL, 'Проектирование и установка домофонов для частных и многоквартирных домов', 'Xususiy va ko\'p qavatli uylar uchun domofonlarni loyihalash va o\'rnatish', 'Design and installation of intercoms for private and apartment buildings', 'uploads/services/2023-07-26/64c09aefca042.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 07:02:55');
INSERT INTO `services` (`id`, `short_description_ru`, `short_description_uz`, `short_description_en`, `image_bg`, `title_ru`, `title_uz`, `title_en`, `image_main`, `text_ru`, `text_uz`, `text_en`, `text_full_ru`, `text_full_uz`, `text_full_en`, `isHome`, `created_at`) VALUES
(16, '', '', '', NULL, 'Проектирование и монтаж систем интерком связи', 'Interkom aloqa tizimlarini loyihalash va o\'rnatish', 'Design and installation of intercom communication systems', 'uploads/services/2023-07-26/64c09b26b014f.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 07:03:50'),
(17, '', '', '', NULL, 'Проектирование и монтаж систем автоматической водяной пожаротушении для производственных, административных здании и складов', 'Sanoat, ma\'muriy binolar va omborlar uchun avtomatik suv yong\'inga qarshi tizimlarini loyihalash va o\'rnatish', 'Design and installation of automatic water fire extinguishing systems for industrial, administrative buildings and warehouses', 'uploads/services/2023-07-26/64c09b5a859ee.jpg', 'Проектирование является важным этапом в процессе реализации проекта по развертыванию Wi-Fi сети. Предварительный анализ позволяет избежать возможные проблемы в будущем, связанные с качеством покрытия, стабильностью и скоростью беспроводного канала передачи данных, обеспечением должного уровня безопасности сети или количеством задействованного в проекте оборудования. ', '\"Protech Technology\" kompaniyasi yong\'in signalizatsiyasi va boshqa yong\'indan himoya qilish tizimlarini loyihalash va o\'rnatish bo\'yicha xizmatlar ko\'rsatadi. Biz banklar, shifoxonalar, omborlar va boshqalar kabi kichik va yirik ob\'ektlar bilan ishlashda katta tajribaga egamiz', 'Protech Technology provides services in the design and installation of fire alarm and other fire protection systems. We have extensive experience working with small and large facilities such as banks, hospitals, warehouses, etc', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\"><strong>Выполняем такие работы как:</strong></span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Проектирование систем пожаротушения<br />\r\n➤ Монтаж охранно-пожарной сигнализации<br />\r\n➤ Монтаж систем оповещения и управления эвакуацией<br />\r\n➤ Монтаж систем противопожарной автоматики (дымоудаление)<br />\r\n➤ Монтаж систем автоматического пожаротушения<br />\r\n➤ Составление проекта<br />\r\n<br />\r\nСистемы пожарной сигнализации могут устанавливать специализированные организации, аккредитованные в МЧС. Не аттестованные лица не допускаются к монтажу противопожарных систем. Противопожарные комплексы должны монтироваться в строгом соответствии с требованиями действующих норм и правил.<br />\r\n<span style=\"font-size:20px\"><strong>Выполняем такие задачи по проектированию и монтажу:</strong></span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Пожарной сигнализации для дома, коттеджа и дачи;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для офисов, банков, больниц;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для квартир;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для магазинов и кафе;</span></h2>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<h2><span style=\"font-size:16px\">Пожарной сигнализации для складов и т.д.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Biz qanday ishlarni bajaramiz:</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">➤ Yong&#39;in o&#39;chirish tizimlarini loyihalash<br />\r\n➤ Yong&#39;in va xavfsizlik signalizatsiyasini o&#39;rnatish<br />\r\n➤ Ogohlantirish va evakuatsiyani boshqarish tizimlarini o&#39;rnatish<br />\r\n➤ Yong&#39;inga qarshi avtomatlashtirish tizimlarini o&#39;rnatish (tutunni tozalash)<br />\r\n➤ Avtomatik yong&#39;in o&#39;chirish tizimlarini o&#39;rnatish<br />\r\n➤ Loyihalash<br />\r\n<br />\r\nYong&#39;in signalizatsiya tizimlari Favqulodda vaziyatlar vazirligi tomonidan akkreditatsiya qilingan ixtisoslashtirilgan tashkilotlar tomonidan o&#39;rnatilishi mumkin. Sertifikatga ega bo&#39;lmagan shaxslarga yong&#39;indan himoya qilish tizimlarini o&#39;rnatishga ruxsat berilmaydi. Yong&#39;inga qarshi tizimlar amaldagi&nbsp; qoidalar talablariga qat&#39;iy muvofiq o&#39;rnatilishi kerak.<br />\r\n<br />\r\nBiz quyidagi dizayn va o&#39;rnatish ishlarini bajaramiz:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Uy, kottej va yozgi uy uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Ofislar, banklar, shifoxonalar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Kvartiralar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Do&#39;kon va kafelar uchun yong&#39;in signalizatsiyasi;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Omborlar uchun yong&#39;in signalizatsiyasi va boshqalar.</span></h2>\r\n	</li>\r\n</ul>\r\n', '<h2 style=\"text-align:justify\"><span style=\"font-size:22px\">What we do:</span><br />\r\n<span style=\"font-size:16px\">➤ Design of fire extinguishing systems<br />\r\n➤ Fire and security alarm installation<br />\r\n➤ Installation of warning and evacuation control systems<br />\r\n➤ Installation of fire automation systems (smoke removal)<br />\r\n➤ Installation of automatic fire extinguishing systems<br />\r\n➤ Design</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">Fire alarm systems can be installed by specialized organizations accredited by the Ministry of Emergency Situations. Persons who do not have a certificate are not allowed to install fire protection systems. Fire protection systems must be installed in strict accordance with the requirements of current regulations.</span></h2>\r\n\r\n<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">We design and install the following:</span></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for house, cottage and cottage;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for offices, banks, hospitals;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for apartments;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarm for shops and cafes;</span></h2>\r\n	</li>\r\n	<li>\r\n	<h2 style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp;Fire alarms for warehouses, etc.</span></h2>\r\n	</li>\r\n</ul>\r\n', 0, '2023-07-26 07:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `thanksgiving`
--

CREATE TABLE `thanksgiving` (
  `id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanksgiving`
--

INSERT INTO `thanksgiving` (`id`, `image`) VALUES
(1, '/uploads/thanksgiving/2023-07-27/R29qjNMj5hRaXzAyloqn7kxvgbiRMhZ9.jpg'),
(2, '/uploads/thanksgiving/2023-07-27/xiNiFO9gcKb_IF8OZwRuTlVGCIwEkY2p.jpg'),
(3, '/uploads/thanksgiving/2023-07-27/YcH_K4sxUcqIDPbOfuXPTlyQEuzf2_8V.jpg'),
(4, '/uploads/thanksgiving/2023-07-27/m3zZUjeE5yyUP_4CDpltNu9G2VYF1eT0.jpg'),
(5, '/uploads/thanksgiving/2023-07-27/RqQ5Napo-k_KtIFD_EAjFL3ozvfB2lnb.jpg'),
(6, '/uploads/thanksgiving/2023-07-27/7o0CqcraxYoJIOYRpcN3ycpGWa34p7x6.jpg'),
(7, '/uploads/thanksgiving/2023-07-27/yAry3t5ZHne4ZPxZEi3M3aJ4XGf9arUX.jpg'),
(8, '/uploads/thanksgiving/2023-07-27/ZcABmlEOUD3cQq1uLsjvWxz74wZo6Tvx.jpg'),
(9, '/uploads/thanksgiving/2023-07-27/66PWmbU7u_m07ItBE-_Y8amgBK5Gg665.jpg'),
(10, '/uploads/thanksgiving/2023-07-27/_2yjvtYaCknV8AJ6LhmcbHzWkGULzc-R.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key_expire` time NOT NULL,
  `lasted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_block` bigint NOT NULL,
  `access_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `password_hash`, `password_text`, `auth_key_expire`, `lasted_at`, `created_at`, `updated_at`, `email`, `first_name`, `last_name`, `is_block`, `access_token`, `role_id`) VALUES
(1, 'admin', '$2y$13$NrJl4SXf7MzEYJh05/3kJ.4gQAV7bF.9..ie/7MEUZqdJJsl50vP2', 'gnBSU3-pAHk4tzjcqjk8MseK2e6otRQG', '$2y$13$aQjuonlgNVsbxNtgaLoe5.4j50iXl6C1nH0WUgMnrbCFjFX2cYXzq', 'admin858', '00:00:00', '2023-07-31 23:49:26', '2023-02-28 17:01:10', '2023-08-01 00:49:27', '', 'admin users', '', 0, 'W3ExRLXt_YfXGZO4rFVNK9hDw1JuaTmB', 1),
(2, 'content', '$2y$13$4GE2vAQA9JAm/jlaSbJfMuueu3tnIMUI0.1X1BgHvH88tS6juasHq', 'DSnBSU3-pAHk4tzjcqjk8MseK2e6otRQG', '$2y$13$Mat8OZ6UtKbCbmvqjpoXeuAuDpo8bNTRnN4h89e1wHRCKBUBz2m1m', 'admin858', '00:00:00', '2023-07-28 17:51:07', '2023-05-01 01:43:14', '2023-07-28 18:51:07', '', 'content manager', 'content manager', 0, 'ZKflyuEFUPnr0n7VilMP3IgDY-2A2PPV', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_attempts`
--

CREATE TABLE `user_attempts` (
  `id` bigint UNSIGNED NOT NULL,
  `ip` bigint UNSIGNED DEFAULT NULL,
  `ip_text` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int DEFAULT NULL,
  `datetime_attempts` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_attempts`
--

INSERT INTO `user_attempts` (`id`, `ip`, `ip_text`, `attempts`, `datetime_attempts`, `created_at`, `updated_at`) VALUES
(1, 2130706433, '127.0.0.1', 0, NULL, '2023-07-25 04:14:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint NOT NULL,
  `user_id` int DEFAULT NULL,
  `ip_text` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `ip_text`, `user_agent`, `created_at`, `updated_at`) VALUES
(4, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-27 15:34:50', '2023-07-27 15:34:50'),
(5, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 17:39:50', '2023-07-28 17:39:50'),
(6, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 17:43:29', '2023-07-28 17:43:29'),
(7, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 17:44:04', '2023-07-28 17:44:04'),
(8, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 17:47:52', '2023-07-28 17:47:52'),
(9, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 17:49:03', '2023-07-28 17:49:03'),
(10, 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 17:51:07', '2023-07-28 17:51:07'),
(11, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:20:09', '2023-07-28 18:20:09'),
(12, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:22:51', '2023-07-28 18:22:51'),
(13, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:27:47', '2023-07-28 18:27:47'),
(14, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:28:08', '2023-07-28 18:28:08'),
(15, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:28:32', '2023-07-28 18:28:32'),
(16, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:28:56', '2023-07-28 18:28:56'),
(17, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:29:41', '2023-07-28 18:29:41'),
(18, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 18:35:09', '2023-07-28 18:35:09'),
(19, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 19:05:23', '2023-07-28 19:05:23'),
(20, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-28 20:14:16', '2023-07-28 20:14:16'),
(21, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-30 21:57:30', '2023-07-30 21:57:30'),
(22, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-30 23:53:57', '2023-07-30 23:53:57'),
(23, 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '2023-07-31 23:49:27', '2023-07-31 23:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint NOT NULL,
  `role_id` int DEFAULT NULL,
  `route` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access` tinyint(1) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `role_id`, `route`, `access`, `created_at`, `updated_at`) VALUES
(1, 2, 'helpers/error', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(2, 2, 'admin/error', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(3, 2, 'admin/change-password', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(4, 2, 'auth/login', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(5, 2, 'auth/logout', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(6, 2, 'form/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(7, 2, 'form/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(8, 2, 'form/delete', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(9, 2, 'roles/permission', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(10, 2, 'roles/index', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(11, 2, 'roles/add', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(12, 2, 'roles/update', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(13, 2, 'users/index', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(14, 2, 'users/add', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(15, 2, 'users/update', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(16, 2, 'users/status', 0, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(17, 2, 'about-statistic/index', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(18, 2, 'about-statistic/view', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(19, 2, 'about-statistic/create', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(20, 2, 'about-statistic/update', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(21, 2, 'about-statistic/delete', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(22, 2, 'about-us/index', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(23, 2, 'about-us/view', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(24, 2, 'about-us/create', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(25, 2, 'about-us/update', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(26, 2, 'about-us/delete', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(27, 2, 'addresses-links/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(28, 2, 'addresses-links/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(29, 2, 'addresses-links/create', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(30, 2, 'addresses-links/update', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(31, 2, 'addresses-links/delete', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(32, 2, 'certificates/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(33, 2, 'certificates/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(34, 2, 'certificates/create', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(35, 2, 'certificates/update', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(36, 2, 'certificates/delete', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(37, 2, 'clients/index', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(38, 2, 'clients/view', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(39, 2, 'clients/create', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(40, 2, 'clients/update', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(41, 2, 'clients/delete', 1, '2023-07-24 19:52:25', '2023-07-24 21:22:56'),
(42, 2, 'home-about/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(43, 2, 'home-about/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(44, 2, 'home-about/create', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(45, 2, 'home-about/update', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(46, 2, 'home-about/delete', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(47, 2, 'jobs/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(48, 2, 'jobs/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(49, 2, 'jobs/create', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(50, 2, 'jobs/update', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(51, 2, 'jobs/delete', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(52, 2, 'mission-text/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(53, 2, 'mission-text/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(54, 2, 'mission-text/create', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(55, 2, 'mission-text/update', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(56, 2, 'mission-text/delete', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(57, 2, 'services/index', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(58, 2, 'services/view', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(59, 2, 'services/create', 1, '2023-07-24 19:52:25', '2023-07-24 19:52:25'),
(60, 2, 'services/update', 1, '2023-07-24 19:52:26', '2023-07-24 19:52:26'),
(61, 2, 'services/delete', 1, '2023-07-24 19:52:26', '2023-07-24 19:52:26'),
(62, 2, 'admin/index', 0, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(63, 2, 'api/index', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(64, 2, 'api/view', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(65, 2, 'api/update', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(66, 2, 'advantage/index', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(67, 2, 'advantage/add', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(68, 2, 'advantage/update', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(69, 2, 'advantage/view', 1, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(70, 2, 'applications/index', 0, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(71, 2, 'applications/view', 0, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(72, 2, 'applications/message-read', 0, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(73, 2, 'applications/delete', 0, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(74, 2, 'applications/retrieve-data', 0, '2023-07-28 15:40:42', '2023-07-28 15:40:42'),
(75, 2, 'news/index', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(76, 2, 'news/view', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(77, 2, 'news/create', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(78, 2, 'news/update', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(79, 2, 'news/delete', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(80, 2, 'projects/create', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(81, 2, 'projects/update', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(82, 2, 'projects/delete', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(83, 2, 'projects/view', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(84, 2, 'projects/index', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:14'),
(85, 2, 'thanksgiving/index', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:07'),
(86, 2, 'thanksgiving/view', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:07'),
(87, 2, 'thanksgiving/create', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:07'),
(88, 2, 'thanksgiving/update', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:07'),
(89, 2, 'thanksgiving/delete', 1, '2023-07-28 15:40:42', '2023-07-28 15:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `info`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'главный администратор', '2023-04-30 14:40:01', '2023-04-30 14:40:01'),
(2, 'kontent', 'менеджер контента', '2023-04-30 14:40:01', '2023-04-30 14:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int NOT NULL,
  `created_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `created_at`) VALUES
(1, 1690251261),
(2, 1690337817),
(3, 1690387548),
(4, 1690445531),
(5, 1690554944),
(6, 1690558996),
(7, 1690560092),
(8, 1690560107),
(9, 1690560108),
(10, 1690561356),
(11, 1690572406),
(12, 1690744400),
(13, 1690752413);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_statistic`
--
ALTER TABLE `about_statistic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses_links`
--
ALTER TABLE `addresses_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about`
--
ALTER TABLE `home_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_our_advantages`
--
ALTER TABLE `home_our_advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jivo`
--
ALTER TABLE `jivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `mission_text`
--
ALTER TABLE `mission_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanksgiving`
--
ALTER TABLE `thanksgiving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attempts`
--
ALTER TABLE `user_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_statistic`
--
ALTER TABLE `about_statistic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addresses_links`
--
ALTER TABLE `addresses_links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home_about`
--
ALTER TABLE `home_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_our_advantages`
--
ALTER TABLE `home_our_advantages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jivo`
--
ALTER TABLE `jivo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mission_text`
--
ALTER TABLE `mission_text`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `thanksgiving`
--
ALTER TABLE `thanksgiving`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_attempts`
--
ALTER TABLE `user_attempts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
