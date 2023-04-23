-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 12:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `actionable_type` varchar(255) NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'running',
  `exception` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext DEFAULT NULL,
  `changes` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `call_backs`
--

CREATE TABLE `call_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `call_backs`
--

INSERT INTO `call_backs` (`id`, `name`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'тусттус', '+380987777777', 'ттттттттттттттттттттттттттттттттт', '2023-04-20 05:36:24', '2023-04-20 05:36:24'),
(2, 'testttt', '+380987777777', 'tttttttttttttttttttttttttttttttttttttttttttttttttt', '2023-04-20 05:37:05', '2023-04-20 05:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `slug`, `title`, `created_at`, `updated_at`) VALUES
(1, 'active', 'Analizy', 'Анализы', '2023-04-20 10:00:22', '2023-04-20 10:00:22'),
(2, 'active', 'Stazionar', 'Стационар', '2023-04-20 10:00:50', '2023-04-20 10:00:50'),
(3, 'active', 'stomatologia', 'Стоматология', '2023-04-20 10:01:30', '2023-04-20 10:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `evidence`
--

CREATE TABLE `evidence` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evidence`
--

INSERT INTO `evidence` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Вялое состояние', '2023-04-17 18:34:13', '2023-04-17 18:34:13'),
(2, 'Отсутсвие аппетита', '2023-04-18 04:08:17', '2023-04-18 04:08:17'),
(3, 'Обильные выделения из глаз/носа/ушей', '2023-04-18 04:08:33', '2023-04-18 04:11:57'),
(4, 'Выделения из органов моче-половой системы', '2023-04-18 04:08:42', '2023-04-18 04:08:42'),
(5, 'Кашель (часто похож на позывы к рвоте)', '2023-04-18 04:08:54', '2023-04-18 04:08:54'),
(6, 'Кровотечения', '2023-04-18 04:09:00', '2023-04-18 04:09:00'),
(7, 'Зуд', '2023-04-18 04:09:07', '2023-04-18 04:09:07'),
(8, 'Постоянное «мотание» головой', '2023-04-18 04:09:12', '2023-04-18 04:09:12'),
(9, 'Хромота', '2023-04-18 04:09:18', '2023-04-18 04:09:18'),
(10, 'Беспричинная агрессия  ', '2023-04-18 04:09:25', '2023-04-18 04:09:25'),
(11, 'Бледные слизистые оболочки', '2023-04-18 04:09:32', '2023-04-18 04:09:32'),
(12, 'Приступы различной этиологии', '2023-04-18 04:09:37', '2023-04-18 04:09:37'),
(13, 'Повышенная жажда', '2023-04-18 04:09:43', '2023-04-18 04:09:43'),
(14, 'Проблемы с мочеиспусканием', '2023-04-18 04:09:49', '2023-04-18 04:12:32'),
(15, 'Повышеная температура (измеряется ректально)', '2023-04-18 04:09:56', '2023-04-18 04:09:56'),
(16, 'Диарея, жидкий стул, запор', '2023-04-18 04:10:01', '2023-04-18 04:10:01'),
(17, 'Рвота ', '2023-04-18 04:10:10', '2023-04-18 04:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2018_01_01_000000_create_action_events_table', 1),
(4, '2019_05_10_000000_add_fields_to_action_events_table', 1),
(7, '2021_08_25_193039_create_nova_notifications_table', 1),
(8, '2022_04_26_000000_add_fields_to_nova_notifications_table', 1),
(9, '2022_12_19_000000_create_field_attachments_table', 1),
(10, '2023_04_17_182421_create_posts_table', 2),
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2014_10_12_100000_create_password_resets_table', 3),
(14, '2019_08_19_000000_create_failed_jobs_table', 3),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(16, '2023_04_17_194354_create_posts_table', 3),
(17, '2023_04_17_213048_create_evidence_table', 4),
(18, '2023_04_17_213754_create_videos_table', 5),
(19, '2023_04_18_093206_create_pages_table', 6),
(20, 'create_pages_table', 7),
(21, '2023_04_18_112744_create_teams_table', 8),
(22, '2023_04_18_221552_create_call_backs_table', 9),
(23, '2023_04_18_224700_create_social_links_table', 9),
(24, '2023_04_20_125039_create_categories_table', 10),
(25, '2023_04_20_133018_create_services_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `nova_field_attachments`
--

CREATE TABLE `nova_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachable_type` varchar(255) NOT NULL,
  `attachable_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `disk` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_notifications`
--

CREATE TABLE `nova_notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_pending_field_attachments`
--

CREATE TABLE `nova_pending_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `draft_id` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `disk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `h1` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desctiption` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `h1`, `name`, `title`, `desctiption`, `content`, `created_at`, `updated_at`) VALUES
(1, ' Ветеринарная <br />  клиника VoLYAVET', 'aboutUs', 'О нас', 'Когда здоровье вашего питомца важнее всего остального', '        VolyaVet – это больше, чем просто ветеринарная клиника. Мы – семья, ваша\n        поддержка и опора во всём, что связано с вашими питомцами. <br />\n        У нас индивидуальный подход к каждому пациенту и владельцу. Здесь\n        выслушают, поддержат и помогут, ведь мы понимаем ту связь, которая\n        существует между питомцем и его владельцем.\n        <br /><br />\n        Мы предоставляем спектр самых важных услуг: терапевтических,\n        хирургических, стоматологических, услуг по уходу и многое другое. <br />\n        Наши специалисты регулярно повышают свои навыки, чтобы оказывать только\n        качественную ветеринарную помощь.', '2023-04-18 06:52:55', '2023-04-18 06:52:55'),
(2, 'Ветеринарная <br />  клиника <span>VоLYAVET</span>', 'main', 'Ветеринарная        клиника VоLYAVET', 'Когда здоровье вашего питомца важнее всего остального', ' <div class=\"text\">Профессиональные врачи с огромным опытом</div>\n        <div class=\"text\">Новое современное оборудование</div>\n        <div class=\"text\">Безграничная любовь и забота о животных</div>', '2023-04-18 07:26:19', '2023-04-18 07:27:30'),
(3, 'Контакты', 'contacts', 'Контакты', 'Описание', 'Content', '2023-04-18 07:29:30', '2023-04-18 07:29:30'),
(4, 'Библиотека', 'library', 'Библиотека', 'Библиотека описание', 'контент', '2023-04-18 08:11:19', '2023-04-18 08:11:19'),
(5, 'Офферта', 'offerta', 'Публичная офферта', 'Офферта описание', 'контент', '2023-04-18 08:13:44', '2023-04-18 08:14:54'),
(6, 'Самые важные домашние животные', 'post', 'Самые важные домашние животные', 'Самые важные домашние животные описание', 'контент', '2023-04-18 08:16:42', '2023-04-18 08:16:42'),
(7, 'Услуги и цены', 'services', 'Услуги и цены', ' описание', 'контент', '2023-04-18 08:19:05', '2023-04-18 08:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Самые важные домашние животные', '    Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x6939666d757a5149376b4d714444567456546e326f6f32766e69384153432d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-17 17:13:52', '2023-04-17 17:13:52'),
(2, 'Самые важные домашние животные', '    Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x474335716b50497535445637735a4269794b6669786575627068786a68392d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-17 18:17:13', '2023-04-17 18:17:13'),
(4, 'Самые важные домашние животные', '  Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x4c57643044546c39614e586b59393961706b536e6f59774e44494d67664b2d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-18 04:03:38', '2023-04-18 04:03:38'),
(5, 'Самые важные домашние животные', '  Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x6968486b796d66486c44334154555333457865546e5a6f6171566e46417a2d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-18 04:04:06', '2023-04-18 04:04:06'),
(6, 'Самые важные домашние животные', '  Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x69597953637564757a4a53776646364e326432716978316c796c47414b492d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-18 04:04:28', '2023-04-18 04:04:28'),
(7, 'Самые важные домашние животные', '  Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x5a57736546613279534668567035357771317954515372386d53534c47702d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-18 04:04:55', '2023-04-18 04:04:55'),
(8, 'Самые важные домашние животные', '  Процесс приручения дикого животного был чрезвычайно сложным,\n            длительным, далеко не всегда успешно заканчивался. Но это было\n            необходимо. Теперь трудно себе представить жизнь человека без таких\n            великолепных поставщиков и помощников, какими являются домашние\n            животные. <br /><br />\n\n            В самого верного друга первым превратился волк. Долгие столетия\n            злобный хищник превращался в ту самую домашнюю собаку, которая\n            охраняет нас, помогает охотиться, воевать, разыскивать преступников,\n            сопровождать незрячих и многое, многое ещё. Учёные утверждают, что\n            первые волки привыкали к людям так давно, что 26 тысяч лет тому\n            назад им уже спокойно поручали охранять маленьких детей, оставляемых\n            в пещере, пока родители занимаются поисками еды. Во Франции есть\n            пещера со следами ребёнка и собаки (или ещё волка), датируемыми\n            именно этим столетием. Постепенно природа дикого животного под\n            воздействием человека менялась, возникали всё новые и новые породы,\n            можно сказать — узко специализированные. Различие бывшие волки\n            получили и в величине, и в форме тела, в масти и во множестве других\n            признаков. Дрессировке собаки поддаются превосходно. У них обоняние\n            во множество раз лучше человеческого, поэтому они гораздо успешнее\n            стерегут стадо, охраняют имущество, на севере перевозят людей и\n            грузы, служат на границах и таможнях, а также связистами,\n            подрывниками, разведчиками на войне, спасателями в горах и на водах.\n            Людям собаки преданы всем сердцем, готовы погибнуть сами, чтобы\n            спасти хозяина. Это касается любых, даже абсолютно декоративных\n            пород. <br /><br />\n\n            Это домашнее животное находится у человека на привилегированном\n            положении как минимум десять тысяч лет. В дикой природе кошек,\n            наверное, меньше, чем в неволе, где они чувствуют себя настоящими\n            хозяевами. Как только древние люди перестали кочевать, начали жить\n            оседло, возделывая поля, появилась необходимость в охране запасов.', 0x5936756154693879706831646c6f7138386c5a646c5572577577625a57372d6d6574616347397a64444575616e426e2d2e6a7067, '2023-04-18 04:05:18', '2023-04-18 04:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Вакцинация кошки без бешенства  (Биофел PCH)', 1900, '2023-04-20 11:14:59', '2023-04-20 11:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `link`, `title`, `created_at`, `updated_at`) VALUES
(1, 'https://wa.me/89777998782', 'viber', '2023-04-20 05:50:09', '2023-04-20 05:54:50'),
(2, 'https://web.telegram.org/', 'telegram', '2023-04-20 05:50:41', '2023-04-20 05:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `description` text NOT NULL,
  `exp` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `body`, `description`, `exp`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Анна Голованова', 'Главный врач, ветеринарныйврач-терапевт,\nхирург, стоматолог', 'Два высших образования: ветеринарное и биологическое, на постоянной основе повышает квалификацию. Имеет научные статьи.\n\nСейчас Анна – владелица и главный врач клиники. Начала работать по специализации в Московском зоопарке ещё будучи студенткой. ', 'Стаж - 10+ лет', 0x63596f594d446c6d48486a625070424634655770656a416f66397a6e686a2d6d6574616447566862544575616e426e2d2e6a7067, '2023-04-18 08:35:04', '2023-04-18 08:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'sashapylypenko.pov@gmail.com', NULL, '$2y$10$rNhZwBbQc05uDzAuZOlWPO75j2/kJPuFYNFewFzY9hCD3.8IPYOza', 'fNRxUM01YAegI8LPycVW8eS9NgiI1zlJXTkdLnpZepsxVCZdDYh3EK3SpDI9', '2023-04-17 17:08:04', '2023-04-17 17:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'https://youtu.be/kZmK4mmsMLI', '2023-04-17 18:41:34', '2023-04-17 18:41:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_target_type_target_id_index` (`target_type`,`target_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Indexes for table `call_backs`
--
ALTER TABLE `call_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evidence`
--
ALTER TABLE `evidence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_field_attachments_attachable_type_attachable_id_index` (`attachable_type`,`attachable_id`),
  ADD KEY `nova_field_attachments_url_index` (`url`);

--
-- Indexes for table `nova_notifications`
--
ALTER TABLE `nova_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_pending_field_attachments_draft_id_index` (`draft_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `call_backs`
--
ALTER TABLE `call_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evidence`
--
ALTER TABLE `evidence`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
