-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 oct. 2025 à 03:15
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `psy`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `phone`, `message`) VALUES
(3, 'attempt3', 608780210, '1ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd255'),
(7, 'juuuu', 608880210, 'ddddddddddddddddddddddddddddd'),
(8, 'Ahmed', 708039910, '123456789---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------255');

-- --------------------------------------------------------

--
-- Structure de la table `getconsultation`
--

CREATE TABLE `getconsultation` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `therapy` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `getconsultation`
--

INSERT INTO `getconsultation` (`id`, `name`, `phone`, `date`, `therapy`) VALUES
(12, 'abdelwahed', 2147483647, '2025-01-10', 'Traitement de la dépression'),
(15, 'habib', 2147483647, '2025-01-24', 'Thérapie des enfants'),
(16, 'khaled', 708039910, '2025-02-09', 'Trouble anxieux'),
(22, 'najlae', 444444, '2025-02-08', 'Relationships'),
(23, 'mohamed motivation', 2147483647, '2025-02-01', 'Traitement de la dépression'),
(24, 'aya', 2147483647, '2025-01-26', 'Trouble anxieux'),
(25, 'asmae', 2147483647, '2025-01-18', 'Thérapie individuelle'),
(26, 'ilham', 2147483647, '2025-02-09', 'Child therapy'),
(27, '', 0, '0000-00-00', 'Sélectionner la thérapie');

-- --------------------------------------------------------

--
-- Structure de la table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(4) NOT NULL,
  `nav` varchar(30) NOT NULL,
  `refer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `navbar`
--

INSERT INTO `navbar` (`id`, `nav`, `refer`) VALUES
(23, 'Accueil', 'index.php'),
(24, 'Communiquer avec un expert', 'equipe.php'),
(26, 'Tests', 'tests.php mazal masawbnah'),
(27, 'Sources', 'sources.html');

-- --------------------------------------------------------

--
-- Structure de la table `navbar_table`
--

CREATE TABLE `navbar_table` (
  `id` int(4) NOT NULL,
  `nav` varchar(30) NOT NULL,
  `refer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `navbar_table`
--

INSERT INTO `navbar_table` (`id`, `nav`, `refer`) VALUES
(5, 'page_admin', 'phpnavtable'),
(8, 'navbar', 'phpnav'),
(9, 'message', 'phpcontact'),
(10, 'consultation', 'phpconsult');

-- --------------------------------------------------------

--
-- Structure de la table `test_audit`
--

CREATE TABLE `test_audit` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `Q1` varchar(255) DEFAULT '',
  `Q2` varchar(255) DEFAULT '',
  `Q3` varchar(255) DEFAULT '',
  `Q4` varchar(255) DEFAULT '',
  `Q5` varchar(255) DEFAULT '',
  `Q6` varchar(255) DEFAULT '',
  `Q7` varchar(255) DEFAULT '',
  `Q8` varchar(255) DEFAULT '',
  `Q9` varchar(255) DEFAULT '',
  `Q10` varchar(255) DEFAULT '',
  `Q11` varchar(255) DEFAULT '',
  `Q12` varchar(255) DEFAULT '',
  `Q13` varchar(255) DEFAULT '',
  `Q14` varchar(255) DEFAULT '',
  `Q15` varchar(255) DEFAULT '',
  `Q16` varchar(255) DEFAULT '',
  `Q17` varchar(255) DEFAULT '',
  `Q18` varchar(255) DEFAULT '',
  `Q19` varchar(255) DEFAULT '',
  `Q20` varchar(255) DEFAULT '',
  `val_q1` tinyint(4) DEFAULT 0,
  `val_q2` tinyint(4) DEFAULT 0,
  `val_q3` tinyint(4) DEFAULT 0,
  `val_q4` tinyint(4) DEFAULT 0,
  `val_q5` tinyint(4) DEFAULT 0,
  `val_q6` tinyint(4) DEFAULT 0,
  `val_q7` tinyint(4) DEFAULT 0,
  `val_q8` tinyint(4) DEFAULT 0,
  `val_q9` tinyint(4) DEFAULT 0,
  `val_q10` tinyint(4) DEFAULT 0,
  `val_q11` tinyint(4) DEFAULT 0,
  `val_q12` tinyint(4) DEFAULT 0,
  `val_q13` tinyint(4) DEFAULT 0,
  `val_q14` tinyint(4) DEFAULT 0,
  `val_q15` tinyint(4) DEFAULT 0,
  `val_q16` tinyint(4) DEFAULT 0,
  `val_q17` tinyint(4) DEFAULT 0,
  `val_q18` tinyint(4) DEFAULT 0,
  `val_q19` tinyint(4) DEFAULT 0,
  `val_q20` tinyint(4) DEFAULT 0,
  `comment_msg_test` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_audit`
--

INSERT INTO `test_audit` (`id`, `id_test`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(185, 91, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '4 fois ou plus par semaine', '10 ou plus', 'Quotidiennement ou presque quotidiennement', 'Quotidiennement ou presque quotidiennement', 'Quotidiennement ou presque quotidiennement', 'Quotidiennement ou presque quotidiennement', 'Quotidiennement ou presque quotidiennement', 'Quotidiennement ou presque quotidiennement', 'Oui, pendant la dernière année', 'Oui, pendant la dernière année', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:45:15'),
(186, 92, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:53:18'),
(187, 93, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:54:54'),
(188, 94, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:58:04'),
(189, 95, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 02:08:51');

-- --------------------------------------------------------

--
-- Structure de la table `test_base`
--

CREATE TABLE `test_base` (
  `id` int(11) NOT NULL,
  `Q1` varchar(40) NOT NULL,
  `Q2` varchar(40) NOT NULL,
  `Q3` varchar(40) NOT NULL,
  `Q4` varchar(40) NOT NULL,
  `Q5` varchar(40) NOT NULL,
  `Q6` varchar(40) NOT NULL,
  `Q7` varchar(40) NOT NULL,
  `Q8` varchar(40) NOT NULL,
  `Q9` varchar(40) NOT NULL,
  `Q10` varchar(40) NOT NULL,
  `val_q1` tinyint(2) NOT NULL,
  `val_q2` tinyint(2) NOT NULL,
  `val_q3` tinyint(2) NOT NULL,
  `val_q4` tinyint(2) NOT NULL,
  `val_q5` tinyint(2) NOT NULL,
  `val_q6` tinyint(2) NOT NULL,
  `val_q7` tinyint(2) NOT NULL,
  `val_q8` tinyint(2) NOT NULL,
  `val_q9` tinyint(2) NOT NULL,
  `val_q10` tinyint(2) NOT NULL,
  `suicide_q` int(1) NOT NULL,
  `C_SSRS_Level` tinyint(4) NOT NULL DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `C_SSRS` tinyint(1) NOT NULL DEFAULT 0,
  `PHQ9_Score` tinyint(4) DEFAULT 0,
  `GAD7_Score` tinyint(4) DEFAULT 0,
  `PCL5_Score` tinyint(4) DEFAULT 0,
  `ISI_Score` tinyint(4) DEFAULT 0,
  `AUDIT_C_Score` tinyint(4) DEFAULT 0,
  `AUDIT_Score` tinyint(4) DEFAULT 0,
  `DAST10_Score` tinyint(4) DEFAULT 0,
  `Display_PHQ9` tinyint(1) DEFAULT 0,
  `Display_GAD7` tinyint(1) DEFAULT 0,
  `Display_PCL5` tinyint(1) DEFAULT 0,
  `Display_ISI` tinyint(1) DEFAULT 0,
  `Display_AUDIT_C` int(1) DEFAULT 0,
  `Display_AUDIT` tinyint(1) DEFAULT 0,
  `Display_DAST10` tinyint(1) DEFAULT 0,
  `Display_PHQ9_J` tinyint(1) DEFAULT 0,
  `Display_GAD7_J` tinyint(1) DEFAULT 0,
  `Display_PCL5_J` tinyint(1) DEFAULT 0,
  `Display_ISI_J` tinyint(1) DEFAULT 0,
  `Display_AUDIT_J` tinyint(1) DEFAULT 0,
  `Display_DAST_J` tinyint(1) DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_base`
--

INSERT INTO `test_base` (`id`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `suicide_q`, `C_SSRS_Level`, `comment_msg`, `C_SSRS`, `PHQ9_Score`, `GAD7_Score`, `PCL5_Score`, `ISI_Score`, `AUDIT_C_Score`, `AUDIT_Score`, `DAST10_Score`, `Display_PHQ9`, `Display_GAD7`, `Display_PCL5`, `Display_ISI`, `Display_AUDIT_C`, `Display_AUDIT`, `Display_DAST10`, `Display_PHQ9_J`, `Display_GAD7_J`, `Display_PCL5_J`, `Display_ISI_J`, `Display_AUDIT_J`, `Display_DAST_J`, `timestamp`) VALUES
(151, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'Bien, il n\'y a pas de signes d\'auto-mutilation, mais certains symptômes sont apparus et des tests supplémentaires peuvent être effectués.', 0, 15, 9, 18, 3, 3, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 20:17:56'),
(152, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 3, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 20:23:30'),
(153, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 3, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 20:31:12'),
(154, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 0, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 20:37:29'),
(155, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'نتيجتك طبيعية.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-28 20:38:39'),
(156, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 20:39:30'),
(157, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 0, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 21:11:23'),
(158, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 21:11:53'),
(159, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 21:38:16'),
(160, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 21:41:37'),
(161, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:06:36'),
(162, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:14:03'),
(163, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:16:58'),
(164, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 0, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 22:19:12'),
(165, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:24:24'),
(166, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:24:59'),
(167, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 0, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 22:25:34'),
(168, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:27:54'),
(169, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-28 22:38:22'),
(170, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:38:59'),
(171, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-28 22:42:34'),
(172, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'نتيجتك طبيعية.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-28 22:48:44'),
(173, 'souvent', 'souvent', 'quelques jours', 'souvent', 'quelques jours', 'quelques jours', 'jamais', 'jamais', 'jamais', 'jamais', 2, 2, 1, 2, 1, 1, 0, 0, 0, 0, 0, 0, 'نتيجتك طبيعية.', 0, 5, 2, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-28 22:49:13'),
(174, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 0, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-28 22:49:37'),
(175, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'jamais', 'jamais', 'jamais', 3, 3, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 12, 6, 12, 3, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-28 22:50:06'),
(176, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-28 22:50:30'),
(177, 'quelques jours', 'quelques jours', 'quelques jours', 'quelques jours', 'quelques jours', 'quelques jours', 'souvent', 'quelques jours', 'quelques jours', 'jamais', 1, 1, 1, 1, 1, 1, 2, 1, 1, 0, 0, 0, 'نتيجتك طبيعية.', 0, 5, 4, 6, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2025-10-30 00:51:09'),
(178, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', 0, 15, 9, 18, 3, 0, 6, 6, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, '2025-10-30 00:51:35'),
(179, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 00:59:15'),
(180, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:03:46'),
(181, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:08:17'),
(182, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:15:01'),
(183, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:18:05'),
(184, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:19:57'),
(185, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:38:08'),
(186, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:53:18'),
(187, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:54:54'),
(188, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 01:58:04'),
(189, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 1, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 0, 15, 9, 18, 3, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2025-10-30 02:08:51');

--
-- Déclencheurs `test_base`
--
DELIMITER $$
CREATE TRIGGER `trg_test_base_before_insert` BEFORE INSERT ON `test_base` FOR EACH ROW BEGIN
    -- تحويل الإجابات النصية إلى قيم رقمية
    SET NEW.val_q1 = CASE NEW.Q1 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q2 = CASE NEW.Q2 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q3 = CASE NEW.Q3 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q4 = CASE NEW.Q4 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q5 = CASE NEW.Q5 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q6 = CASE NEW.Q6 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q7 = CASE NEW.Q7 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q8 = CASE NEW.Q8 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q9 = CASE NEW.Q9 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;
    SET NEW.val_q10 = CASE NEW.Q10 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END;

    -- حساب السكورات بناءً على القيم الرقمية
    SET NEW.PHQ9_Score = NEW.val_q2 + NEW.val_q3 + NEW.val_q5 + NEW.val_q6 + NEW.val_q8;
    SET NEW.GAD7_Score = NEW.val_q1 + NEW.val_q7 + NEW.val_q8;
    SET NEW.PCL5_Score = NEW.val_q4 + NEW.val_q5 + NEW.val_q6 + NEW.val_q7 + NEW.val_q8 + NEW.val_q10;
    SET NEW.ISI_Score = NEW.val_q3;
    SET NEW.AUDIT_C_Score = 0;
    SET NEW.AUDIT_Score = NEW.val_q9 + NEW.val_q10;
    SET NEW.DAST10_Score = NEW.val_q9 + NEW.val_q10;

    -- تحديد Display العادي و Display_J
    SET NEW.Display_PHQ9 = IF(NEW.PHQ9_Score >= 8 AND NEW.suicide_q = 0, 1, 0);
    SET NEW.Display_PHQ9_J = IF(NEW.PHQ9_Score >= 8 AND NEW.suicide_q <> 0, 1, 0);

    SET NEW.Display_GAD7 = IF(NEW.GAD7_Score >= 6 AND NEW.suicide_q = 0, 1, 0);
    SET NEW.Display_GAD7_J = IF(NEW.GAD7_Score >= 6 AND NEW.suicide_q <> 0, 1, 0);

    SET NEW.Display_PCL5 = IF(NEW.PCL5_Score >= 10 AND NEW.suicide_q = 0, 1, 0);
    SET NEW.Display_PCL5_J = IF(NEW.PCL5_Score >= 10 AND NEW.suicide_q <> 0, 1, 0);

    SET NEW.Display_ISI = IF(NEW.ISI_Score >= 2 AND NEW.suicide_q = 0, 1, 0);
    SET NEW.Display_ISI_J = IF(NEW.ISI_Score >= 2 AND NEW.suicide_q <> 0, 1, 0);

    SET NEW.Display_AUDIT_C = IF(NEW.AUDIT_C_Score >= 1 AND NEW.suicide_q = 0, 0, 0);
    SET NEW.Display_AUDIT = IF(NEW.AUDIT_Score >= 3 AND NEW.suicide_q = 0, 1, 0);
    SET NEW.Display_AUDIT_J = IF(NEW.AUDIT_Score >= 3 AND NEW.suicide_q <> 0, 1, 0);

    SET NEW.Display_DAST10 = IF(NEW.DAST10_Score >= 2 AND NEW.suicide_q = 0, 1, 0);
    SET NEW.Display_DAST_J = IF(NEW.DAST10_Score >= 2 AND NEW.suicide_q <> 0, 1, 0);

    -- تعيين comment_msg
    IF NEW.suicide_q = 1 THEN
        SET NEW.comment_msg = '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.';
    ELSE
        IF NEW.Display_PHQ9 = 1 OR NEW.Display_GAD7 = 1 OR NEW.Display_PCL5 = 1 OR NEW.Display_ISI = 1   OR NEW.Display_AUDIT_C = 1 OR NEW.Display_AUDIT = 1 OR NEW.Display_DAST10 = 1 THEN
            SET NEW.comment_msg = 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.';
        ELSE
            SET NEW.comment_msg = 'نتيجتك طبيعية.';
        END IF;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `test_base_ancienne`
--

CREATE TABLE `test_base_ancienne` (
  `id` int(11) NOT NULL,
  `q1` varchar(14) DEFAULT NULL,
  `q2` varchar(14) DEFAULT NULL,
  `q3` varchar(14) DEFAULT NULL,
  `q4` varchar(14) DEFAULT NULL,
  `q5` varchar(14) DEFAULT NULL,
  `q6` varchar(14) DEFAULT NULL,
  `q7` varchar(14) DEFAULT NULL,
  `q8` varchar(14) DEFAULT NULL,
  `q9` varchar(14) DEFAULT NULL,
  `q10` varchar(14) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `evaluation` varchar(50) DEFAULT NULL,
  `suicide_q` varchar(5) DEFAULT NULL,
  `final_result` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_base_ancienne`
--

INSERT INTO `test_base_ancienne` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `total`, `evaluation`, `suicide_q`, `final_result`, `created_at`) VALUES
(2, 'jamais', 'souvent', 'quelques j', 'toujours', 'jamais', 'souvent', 'jamais', 'quelques j', 'toujours', 'jamais', 10, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-19 01:06:10'),
(3, 'jamais', 'souvent', 'quelques j', 'toujours', 'jamais', 'souvent', 'jamais', 'quelques j', 'toujours', 'jamais', 10, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-19 01:14:22'),
(4, 'jamais', 'souvent', 'quelques j', 'toujours', 'jamais', 'souvent', 'jamais', 'quelques j', 'toujours', 'jamais', 10, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-19 01:19:06'),
(5, 'jamais', 'souvent', 'quelques jours', 'toujours', 'jamais', 'souvent', 'jamais', 'quelques jours', 'toujours', 'jamais', 12, 'ظهور أعراض', '0', 'ظهور أعراض', '2025-10-19 01:23:55'),
(6, 'jamais', 'souvent', 'quelques jours', 'toujours', 'jamais', 'souvent', 'jamais', 'quelques jours', 'toujours', 'jamais', 12, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-19 01:24:35'),
(7, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-19 01:53:53'),
(8, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-19 01:54:01'),
(9, 'jamais', 'jamais', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 24, 'أعراض شديدة', '0', 'أعراض شديدة', '2025-10-19 01:54:56'),
(10, 'jamais', 'jamais', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 24, 'أعراض شديدة', '0', 'أعراض شديدة', '2025-10-19 01:55:45'),
(11, 'jamais', 'jamais', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 24, 'أعراض شديدة', '0', 'أعراض شديدة', '2025-10-19 01:57:19'),
(12, 'jamais', 'jamais', 'quelques jours', 'quelques jours', 'toujours', 'toujours', 'souvent', 'jamais', 'toujours', 'souvent', 15, 'ظهور أعراض', '0', 'ظهور أعراض', '2025-10-19 01:58:18'),
(13, 'jamais', 'jamais', 'quelques jours', 'quelques jours', 'toujours', 'toujours', 'souvent', 'jamais', 'toujours', 'souvent', 15, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-19 01:58:38'),
(14, 'jamais', 'jamais', 'quelques jours', 'quelques jours', 'toujours', 'toujours', 'souvent', 'jamais', 'toujours', 'souvent', 15, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-19 02:00:26'),
(15, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 00:00:08'),
(16, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 00:46:14'),
(17, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 00:47:13'),
(18, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'quelques jours', 1, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 00:47:26'),
(19, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 30, 'أعراض شديدة', '0', 'أعراض شديدة', '2025-10-20 00:47:54'),
(20, 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 'toujours', 30, 'أعراض شديدة', '0', 'أعراض شديدة', '2025-10-20 00:48:01'),
(21, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 00:49:49'),
(22, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 00:50:25'),
(23, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'toujours', 'toujours', 'toujours', 'toujours', 12, 'ظهور أعراض', '0', 'ظهور أعراض', '2025-10-20 00:50:42'),
(24, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'toujours', 'toujours', 'toujours', 'toujours', 12, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 00:50:50'),
(25, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 00:54:29'),
(26, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 00:54:35'),
(27, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 01:51:33'),
(28, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 02:15:40'),
(29, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:21:42'),
(30, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:21:47'),
(31, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 02:21:55'),
(32, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:23:35'),
(33, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:23:38'),
(34, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:25:39'),
(35, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:25:40'),
(36, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:25:41'),
(37, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:25:41'),
(38, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:25:41'),
(39, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:25:41'),
(40, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:28:34'),
(41, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:29:44'),
(42, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:41:07'),
(43, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:41:24'),
(44, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:41:58'),
(45, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:42:17'),
(46, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:42:36'),
(47, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:46:53'),
(48, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:47:27'),
(49, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:50:31'),
(50, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:58:00'),
(51, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:58:10'),
(52, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 02:58:23'),
(53, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 03:01:42'),
(54, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 03:02:08'),
(55, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 03:02:20'),
(56, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 03:02:30'),
(57, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 03:02:47'),
(58, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 03:04:02'),
(59, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, 'لا توجد أعراض', '0', 'لا توجد أعراض', '2025-10-20 03:04:47'),
(60, 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 'jamais', 0, NULL, '1', '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية', '2025-10-20 03:34:12');

--
-- Déclencheurs `test_base_ancienne`
--
DELIMITER $$
CREATE TRIGGER `trg_calculate_scores` BEFORE INSERT ON `test_base_ancienne` FOR EACH ROW BEGIN
    -- حساب نقاط كل سؤال مباشرة
    SET NEW.total =
        (CASE NEW.q1 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q2 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q3 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q4 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q5 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q6 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q7 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q8 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q9 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END) +
        (CASE NEW.q10 WHEN 'jamais' THEN 0 WHEN 'quelques jours' THEN 1 WHEN 'souvent' THEN 2 WHEN 'toujours' THEN 3 ELSE 0 END);

    -- تحويل سؤال الانتحار لرقم
    SET NEW.suicide_q = CASE NEW.suicide_q
        WHEN 'non' THEN 0
        WHEN 'oui' THEN 1
        ELSE 0
    END;

    -- تقييم النتيجة
    IF NEW.suicide_q = 1 THEN
        SET NEW.final_result = '⚠ تنبيه عاجل: إذا كانت تراودك أفكار لإيذاء نفسك، نوصي بطلب مساعدة فورية';
        SET NEW.evaluation = NULL;
    ELSE
        IF NEW.total BETWEEN 0 AND 10 THEN
            SET NEW.evaluation = 'لا توجد أعراض';
        ELSEIF NEW.total BETWEEN 11 AND 20 THEN
            SET NEW.evaluation = 'ظهور أعراض';
        ELSE
            SET NEW.evaluation = 'أعراض شديدة';
        END IF;
        SET NEW.final_result = NEW.evaluation;
    END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `test_dast`
--

CREATE TABLE `test_dast` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `Q1` varchar(255) DEFAULT '',
  `Q2` varchar(255) DEFAULT '',
  `Q3` varchar(255) DEFAULT '',
  `Q4` varchar(255) DEFAULT '',
  `Q5` varchar(255) DEFAULT '',
  `Q6` varchar(255) DEFAULT '',
  `Q7` varchar(255) DEFAULT '',
  `Q8` varchar(255) DEFAULT '',
  `Q9` varchar(255) DEFAULT '',
  `Q10` varchar(255) DEFAULT '',
  `Q11` varchar(255) DEFAULT '',
  `Q12` varchar(255) DEFAULT '',
  `Q13` varchar(255) DEFAULT '',
  `Q14` varchar(255) DEFAULT '',
  `Q15` varchar(255) DEFAULT '',
  `Q16` varchar(255) DEFAULT '',
  `Q17` varchar(255) DEFAULT '',
  `Q18` varchar(255) DEFAULT '',
  `Q19` varchar(255) DEFAULT '',
  `Q20` varchar(255) DEFAULT '',
  `val_q1` tinyint(4) DEFAULT 0,
  `val_q2` tinyint(4) DEFAULT 0,
  `val_q3` tinyint(4) DEFAULT 0,
  `val_q4` tinyint(4) DEFAULT 0,
  `val_q5` tinyint(4) DEFAULT 0,
  `val_q6` tinyint(4) DEFAULT 0,
  `val_q7` tinyint(4) DEFAULT 0,
  `val_q8` tinyint(4) DEFAULT 0,
  `val_q9` tinyint(4) DEFAULT 0,
  `val_q10` tinyint(4) DEFAULT 0,
  `val_q11` tinyint(4) DEFAULT 0,
  `val_q12` tinyint(4) DEFAULT 0,
  `val_q13` tinyint(4) DEFAULT 0,
  `val_q14` tinyint(4) DEFAULT 0,
  `val_q15` tinyint(4) DEFAULT 0,
  `val_q16` tinyint(4) DEFAULT 0,
  `val_q17` tinyint(4) DEFAULT 0,
  `val_q18` tinyint(4) DEFAULT 0,
  `val_q19` tinyint(4) DEFAULT 0,
  `val_q20` tinyint(4) DEFAULT 0,
  `comment_msg_test` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_dast`
--

INSERT INTO `test_dast` (`id`, `id_test`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(153, 52, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:31:12'),
(154, 53, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:37:29'),
(157, 54, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 21:11:23'),
(161, 55, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:06:36'),
(162, 56, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:14:03'),
(163, 57, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:16:58'),
(164, 58, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:19:13'),
(165, 59, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:24'),
(166, 60, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:59'),
(167, 61, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:25:34'),
(168, 62, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:27:54'),
(169, 63, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:22'),
(170, 64, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:59'),
(171, 65, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:42:34'),
(174, 66, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:49:37'),
(176, 67, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:30'),
(178, 68, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:51:35'),
(179, 69, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:59:15'),
(180, 70, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:03:46'),
(181, 71, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:08:17'),
(182, 72, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:15:01'),
(183, 73, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:18:05'),
(184, 74, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:19:57'),
(185, 75, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:38:08'),
(186, 76, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:53:18'),
(187, 77, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:54:54'),
(188, 78, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:58:04'),
(189, 79, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 02:08:51');

-- --------------------------------------------------------

--
-- Structure de la table `test_gad`
--

CREATE TABLE `test_gad` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `Q1` varchar(255) DEFAULT '',
  `Q2` varchar(255) DEFAULT '',
  `Q3` varchar(255) DEFAULT '',
  `Q4` varchar(255) DEFAULT '',
  `Q5` varchar(255) DEFAULT '',
  `Q6` varchar(255) DEFAULT '',
  `Q7` varchar(255) DEFAULT '',
  `Q8` varchar(255) DEFAULT '',
  `Q9` varchar(255) DEFAULT '',
  `Q10` varchar(255) DEFAULT '',
  `Q11` varchar(255) DEFAULT '',
  `Q12` varchar(255) DEFAULT '',
  `Q13` varchar(255) DEFAULT '',
  `Q14` varchar(255) DEFAULT '',
  `Q15` varchar(255) DEFAULT '',
  `Q16` varchar(255) DEFAULT '',
  `Q17` varchar(255) DEFAULT '',
  `Q18` varchar(255) DEFAULT '',
  `Q19` varchar(255) DEFAULT '',
  `Q20` varchar(255) DEFAULT '',
  `val_q1` tinyint(4) DEFAULT 0,
  `val_q2` tinyint(4) DEFAULT 0,
  `val_q3` tinyint(4) DEFAULT 0,
  `val_q4` tinyint(4) DEFAULT 0,
  `val_q5` tinyint(4) DEFAULT 0,
  `val_q6` tinyint(4) DEFAULT 0,
  `val_q7` tinyint(4) DEFAULT 0,
  `val_q8` tinyint(4) DEFAULT 0,
  `val_q9` tinyint(4) DEFAULT 0,
  `val_q10` tinyint(4) DEFAULT 0,
  `val_q11` tinyint(4) DEFAULT 0,
  `val_q12` tinyint(4) DEFAULT 0,
  `val_q13` tinyint(4) DEFAULT 0,
  `val_q14` tinyint(4) DEFAULT 0,
  `val_q15` tinyint(4) DEFAULT 0,
  `val_q16` tinyint(4) DEFAULT 0,
  `val_q17` tinyint(4) DEFAULT 0,
  `val_q18` tinyint(4) DEFAULT 0,
  `val_q19` tinyint(4) DEFAULT 0,
  `val_q20` tinyint(4) DEFAULT 0,
  `comment_msg_test` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_gad`
--

INSERT INTO `test_gad` (`id`, `id_test`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(153, 65, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:31:12'),
(154, 66, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:37:29'),
(157, 67, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 21:11:23'),
(161, 68, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:06:36'),
(162, 69, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:14:03'),
(163, 70, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:16:58'),
(164, 71, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:19:12'),
(165, 72, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:24'),
(166, 73, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:59'),
(167, 74, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:25:34'),
(168, 75, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:27:54'),
(169, 76, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:22'),
(170, 77, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:59'),
(171, 78, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:42:34'),
(174, 79, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:49:37'),
(175, 80, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:06'),
(176, 81, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:30'),
(178, 82, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:51:35'),
(179, 83, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:59:15'),
(180, 84, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:03:46'),
(181, 85, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:08:17'),
(182, 86, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:15:01'),
(183, 87, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:18:05'),
(184, 88, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:19:57'),
(185, 89, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:38:08'),
(186, 90, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:53:18'),
(187, 91, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:54:54'),
(188, 92, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:58:04'),
(189, 93, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 02:08:51');

-- --------------------------------------------------------

--
-- Structure de la table `test_isi`
--

CREATE TABLE `test_isi` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `Q1` varchar(255) DEFAULT '',
  `Q2` varchar(255) DEFAULT '',
  `Q3` varchar(255) DEFAULT '',
  `Q4` varchar(255) DEFAULT '',
  `Q5` varchar(255) DEFAULT '',
  `Q6` varchar(255) DEFAULT '',
  `Q7` varchar(255) DEFAULT '',
  `Q8` varchar(255) DEFAULT '',
  `Q9` varchar(255) DEFAULT '',
  `Q10` varchar(255) DEFAULT '',
  `Q11` varchar(255) DEFAULT '',
  `Q12` varchar(255) DEFAULT '',
  `Q13` varchar(255) DEFAULT '',
  `Q14` varchar(255) DEFAULT '',
  `Q15` varchar(255) DEFAULT '',
  `Q16` varchar(255) DEFAULT '',
  `Q17` varchar(255) DEFAULT '',
  `Q18` varchar(255) DEFAULT '',
  `Q19` varchar(255) DEFAULT '',
  `Q20` varchar(255) DEFAULT '',
  `val_q1` tinyint(4) DEFAULT 0,
  `val_q2` tinyint(4) DEFAULT 0,
  `val_q3` tinyint(4) DEFAULT 0,
  `val_q4` tinyint(4) DEFAULT 0,
  `val_q5` tinyint(4) DEFAULT 0,
  `val_q6` tinyint(4) DEFAULT 0,
  `val_q7` tinyint(4) DEFAULT 0,
  `val_q8` tinyint(4) DEFAULT 0,
  `val_q9` tinyint(4) DEFAULT 0,
  `val_q10` tinyint(4) DEFAULT 0,
  `val_q11` tinyint(4) DEFAULT 0,
  `val_q12` tinyint(4) DEFAULT 0,
  `val_q13` tinyint(4) DEFAULT 0,
  `val_q14` tinyint(4) DEFAULT 0,
  `val_q15` tinyint(4) DEFAULT 0,
  `val_q16` tinyint(4) DEFAULT 0,
  `val_q17` tinyint(4) DEFAULT 0,
  `val_q18` tinyint(4) DEFAULT 0,
  `val_q19` tinyint(4) DEFAULT 0,
  `val_q20` tinyint(4) DEFAULT 0,
  `comment_msg_test` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_isi`
--

INSERT INTO `test_isi` (`id`, `id_test`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(153, 57, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:31:12'),
(154, 58, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:37:29'),
(157, 59, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 21:11:23'),
(161, 60, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:06:36'),
(162, 61, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:14:03'),
(163, 62, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:16:58'),
(164, 63, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:19:13'),
(165, 64, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:24'),
(166, 65, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:59'),
(167, 66, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:25:34'),
(168, 67, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:27:54'),
(169, 68, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:22'),
(170, 69, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:59'),
(171, 70, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:42:34'),
(174, 71, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:49:37'),
(175, 72, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:06'),
(176, 73, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:30'),
(178, 74, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:51:35'),
(179, 75, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:59:15'),
(180, 76, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:03:46'),
(181, 77, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:08:17'),
(182, 78, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:15:01'),
(183, 79, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:18:05'),
(184, 80, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:19:57'),
(185, 81, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 'Très sévère', 'Très sévère', 'Très sévère', 'Très insatisfait', 'Très perceptible', 'Très inquiet', 'Beaucoup d’interférence', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:44:22'),
(186, 82, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:53:18'),
(187, 83, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:54:54'),
(188, 84, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:58:04'),
(189, 85, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 02:08:51');

-- --------------------------------------------------------

--
-- Structure de la table `test_pcl`
--

CREATE TABLE `test_pcl` (
  `id_test` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT NULL,
  `comment_msg` text DEFAULT NULL,
  `Q1` varchar(255) DEFAULT NULL,
  `Q2` varchar(255) DEFAULT NULL,
  `Q3` varchar(255) DEFAULT NULL,
  `Q4` varchar(255) DEFAULT NULL,
  `Q5` varchar(255) DEFAULT NULL,
  `Q6` varchar(255) DEFAULT NULL,
  `Q7` varchar(255) DEFAULT NULL,
  `Q8` varchar(255) DEFAULT NULL,
  `Q9` varchar(255) DEFAULT NULL,
  `Q10` varchar(255) DEFAULT NULL,
  `Q11` varchar(255) DEFAULT NULL,
  `Q12` varchar(255) DEFAULT NULL,
  `Q13` varchar(255) DEFAULT NULL,
  `Q14` varchar(255) DEFAULT NULL,
  `Q15` varchar(255) DEFAULT NULL,
  `Q16` varchar(255) DEFAULT NULL,
  `Q17` varchar(255) DEFAULT NULL,
  `Q18` varchar(255) DEFAULT NULL,
  `Q19` varchar(255) DEFAULT NULL,
  `Q20` varchar(255) DEFAULT NULL,
  `val_q1` varchar(255) DEFAULT NULL,
  `val_q2` varchar(255) DEFAULT NULL,
  `val_q3` varchar(255) DEFAULT NULL,
  `val_q4` varchar(255) DEFAULT NULL,
  `val_q5` varchar(255) DEFAULT NULL,
  `val_q6` varchar(255) DEFAULT NULL,
  `val_q7` varchar(255) DEFAULT NULL,
  `val_q8` varchar(255) DEFAULT NULL,
  `val_q9` varchar(255) DEFAULT NULL,
  `val_q10` varchar(255) DEFAULT NULL,
  `val_q11` varchar(255) DEFAULT NULL,
  `val_q12` varchar(255) DEFAULT NULL,
  `val_q13` varchar(255) DEFAULT NULL,
  `val_q14` varchar(255) DEFAULT NULL,
  `val_q15` varchar(255) DEFAULT NULL,
  `val_q16` varchar(255) DEFAULT NULL,
  `val_q17` varchar(255) DEFAULT NULL,
  `val_q18` varchar(255) DEFAULT NULL,
  `val_q19` varchar(255) DEFAULT NULL,
  `val_q20` varchar(255) DEFAULT NULL,
  `comment_msg_test` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_pcl`
--

INSERT INTO `test_pcl` (`id_test`, `id`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(38, 185, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'Symptômes sévères haute probabilité de SSPT, suivi de traitement urgent recommandé.', '2025-10-30 01:42:59'),
(39, 186, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-30 01:53:18'),
(40, 187, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-30 01:54:54'),
(41, 188, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', 'extremement', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'Symptômes sévères haute probabilité de SSPT, suivi de traitement urgent recommandé.', '2025-10-30 01:58:38'),
(42, 189, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-30 02:08:51');

--
-- Déclencheurs `test_pcl`
--
DELIMITER $$
CREATE TRIGGER `trg_update_test_pcl` BEFORE UPDATE ON `test_pcl` FOR EACH ROW BEGIN
    -- تحويل النصوص إلى أرقام
    SET NEW.val_q1  = CASE NEW.Q1  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q2  = CASE NEW.Q2  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q3  = CASE NEW.Q3  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q4  = CASE NEW.Q4  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q5  = CASE NEW.Q5  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q6  = CASE NEW.Q6  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q7  = CASE NEW.Q7  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q8  = CASE NEW.Q8  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q9  = CASE NEW.Q9  WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q10 = CASE NEW.Q10 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q11 = CASE NEW.Q11 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q12 = CASE NEW.Q12 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q13 = CASE NEW.Q13 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q14 = CASE NEW.Q14 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q15 = CASE NEW.Q15 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q16 = CASE NEW.Q16 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q17 = CASE NEW.Q17 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q18 = CASE NEW.Q18 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q19 = CASE NEW.Q19 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;
    SET NEW.val_q20 = CASE NEW.Q20 WHEN 'pasdutout' THEN 0 WHEN 'unpeu' THEN 1 WHEN 'moderement' THEN 2 WHEN 'pasmal' THEN 3 WHEN 'extremement' THEN 4 ELSE NULL END;

    -- حساب المجموع
    SET @total = NEW.val_q1 + NEW.val_q2 + NEW.val_q3 + NEW.val_q4 + NEW.val_q5
               + NEW.val_q6 + NEW.val_q7 + NEW.val_q8 + NEW.val_q9 + NEW.val_q10
               + NEW.val_q11 + NEW.val_q12 + NEW.val_q13 + NEW.val_q14 + NEW.val_q15
               + NEW.val_q16 + NEW.val_q17 + NEW.val_q18 + NEW.val_q19 + NEW.val_q20;

    -- تحديد التقييم
    SET NEW.comment_msg_test = CASE 
        WHEN @total BETWEEN 0 AND 19 THEN 'Il n''y a pas de signes, ou ils sont très faibles, ce qui ne signifie pas qu''il s''agit d''un SSPT.'
        WHEN @total BETWEEN 20 AND 31 THEN 'Symptômes légers, une détresse psychologique, surveillance uniquement.'
        WHEN @total BETWEEN 32 AND 49 THEN 'Symptômes modérés, probabilité modérée de TSPT, une évaluation clinique est recommandée.'
        WHEN @total BETWEEN 50 AND 80 THEN 'Symptômes sévères haute probabilité de SSPT, suivi de traitement urgent recommandé.'
    END;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `test_phq`
--

CREATE TABLE `test_phq` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `Q1` varchar(255) DEFAULT '',
  `Q2` varchar(255) DEFAULT '',
  `Q3` varchar(255) DEFAULT '',
  `Q4` varchar(255) DEFAULT '',
  `Q5` varchar(255) DEFAULT '',
  `Q6` varchar(255) DEFAULT '',
  `Q7` varchar(255) DEFAULT '',
  `Q8` varchar(255) DEFAULT '',
  `Q9` varchar(255) DEFAULT '',
  `Q10` varchar(255) DEFAULT '',
  `Q11` varchar(255) DEFAULT '',
  `Q12` varchar(255) DEFAULT '',
  `Q13` varchar(255) DEFAULT '',
  `Q14` varchar(255) DEFAULT '',
  `Q15` varchar(255) DEFAULT '',
  `Q16` varchar(255) DEFAULT '',
  `Q17` varchar(255) DEFAULT '',
  `Q18` varchar(255) DEFAULT '',
  `Q19` varchar(255) DEFAULT '',
  `Q20` varchar(255) DEFAULT '',
  `val_q1` tinyint(4) DEFAULT 0,
  `val_q2` tinyint(4) DEFAULT 0,
  `val_q3` tinyint(4) DEFAULT 0,
  `val_q4` tinyint(4) DEFAULT 0,
  `val_q5` tinyint(4) DEFAULT 0,
  `val_q6` tinyint(4) DEFAULT 0,
  `val_q7` tinyint(4) DEFAULT 0,
  `val_q8` tinyint(4) DEFAULT 0,
  `val_q9` tinyint(4) DEFAULT 0,
  `val_q10` tinyint(4) DEFAULT 0,
  `val_q11` tinyint(4) DEFAULT 0,
  `val_q12` tinyint(4) DEFAULT 0,
  `val_q13` tinyint(4) DEFAULT 0,
  `val_q14` tinyint(4) DEFAULT 0,
  `val_q15` tinyint(4) DEFAULT 0,
  `val_q16` tinyint(4) DEFAULT 0,
  `val_q17` tinyint(4) DEFAULT 0,
  `val_q18` tinyint(4) DEFAULT 0,
  `val_q19` tinyint(4) DEFAULT 0,
  `val_q20` tinyint(4) DEFAULT 0,
  `comment_msg_test` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_phq`
--

INSERT INTO `test_phq` (`id`, `id_test`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(153, 65, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:31:12'),
(154, 66, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 20:37:29'),
(157, 67, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 21:11:23'),
(161, 68, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:06:36'),
(162, 69, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:14:03'),
(163, 70, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:16:58'),
(164, 71, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:19:12'),
(165, 72, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:24'),
(166, 73, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:24:59'),
(167, 74, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:25:34'),
(168, 75, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:27:54'),
(169, 76, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:22'),
(170, 77, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:38:59'),
(171, 78, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:42:34'),
(174, 79, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:49:37'),
(175, 80, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:06'),
(176, 81, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-28 22:50:30'),
(178, 82, 0, 'جيد، لا توجد علامات على إيذاء النفس، لكن بعض الأعراض ظهرت ويمكن إجراء اختبارات إضافية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:51:35'),
(179, 83, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 00:59:15'),
(180, 84, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:03:46'),
(181, 85, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:08:17'),
(182, 86, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:15:01'),
(183, 87, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:18:05'),
(184, 88, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:19:57'),
(185, 89, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:38:08'),
(186, 90, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:53:18'),
(187, 91, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:54:54'),
(188, 92, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:58:04'),
(189, 93, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 02:08:51');

-- --------------------------------------------------------

--
-- Structure de la table `test_ssrs`
--

CREATE TABLE `test_ssrs` (
  `id` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  `suicide_q` tinyint(4) DEFAULT 0,
  `comment_msg` varchar(500) DEFAULT NULL,
  `Q1` varchar(255) DEFAULT '',
  `Q2` varchar(255) DEFAULT '',
  `Q3` varchar(255) DEFAULT '',
  `Q4` varchar(255) DEFAULT '',
  `Q5` varchar(255) DEFAULT '',
  `Q6` varchar(255) DEFAULT '',
  `Q7` varchar(255) DEFAULT '',
  `Q8` varchar(255) DEFAULT '',
  `Q9` varchar(255) DEFAULT '',
  `Q10` varchar(255) DEFAULT '',
  `Q11` varchar(255) DEFAULT '',
  `Q12` varchar(255) DEFAULT '',
  `Q13` varchar(255) DEFAULT '',
  `Q14` varchar(255) DEFAULT '',
  `Q15` varchar(255) DEFAULT '',
  `Q16` varchar(255) DEFAULT '',
  `Q17` varchar(255) DEFAULT '',
  `Q18` varchar(255) DEFAULT '',
  `Q19` varchar(255) DEFAULT '',
  `Q20` varchar(255) DEFAULT '',
  `val_q1` tinyint(4) DEFAULT 0,
  `val_q2` tinyint(4) DEFAULT 0,
  `val_q3` tinyint(4) DEFAULT 0,
  `val_q4` tinyint(4) DEFAULT 0,
  `val_q5` tinyint(4) DEFAULT 0,
  `val_q6` tinyint(4) DEFAULT 0,
  `val_q7` tinyint(4) DEFAULT 0,
  `val_q8` tinyint(4) DEFAULT 0,
  `val_q9` tinyint(4) DEFAULT 0,
  `val_q10` tinyint(4) DEFAULT 0,
  `val_q11` tinyint(4) DEFAULT 0,
  `val_q12` tinyint(4) DEFAULT 0,
  `val_q13` tinyint(4) DEFAULT 0,
  `val_q14` tinyint(4) DEFAULT 0,
  `val_q15` tinyint(4) DEFAULT 0,
  `val_q16` tinyint(4) DEFAULT 0,
  `val_q17` tinyint(4) DEFAULT 0,
  `val_q18` tinyint(4) DEFAULT 0,
  `val_q19` tinyint(4) DEFAULT 0,
  `val_q20` tinyint(4) DEFAULT 0,
  `comment_msg_test` varchar(500) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_ssrs`
--

INSERT INTO `test_ssrs` (`id`, `id_test`, `suicide_q`, `comment_msg`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `val_q1`, `val_q2`, `val_q3`, `val_q4`, `val_q5`, `val_q6`, `val_q7`, `val_q8`, `val_q9`, `val_q10`, `val_q11`, `val_q12`, `val_q13`, `val_q14`, `val_q15`, `val_q16`, `val_q17`, `val_q18`, `val_q19`, `val_q20`, `comment_msg_test`, `timestamp`) VALUES
(185, 17, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Risque suicidaire très élevé : comportement suicidaire récent. Intervention urgente requise.', '2025-10-30 01:41:25'),
(186, 18, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:53:18'),
(187, 19, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '2025-10-30 01:54:54'),
(188, 20, 0, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Aucune idéation suicidaire détectée.', '2025-10-30 02:00:51'),
(189, 21, 1, '⚠ تنبيه: توجد أفكار إيذاء النفس، يرجى إجراء الاختبارات الإضافية بعناية.', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', 'oui', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Risque suicidaire très élevé : comportement suicidaire récent. Intervention urgente requise.', '2025-10-30 02:09:42');

--
-- Déclencheurs `test_ssrs`
--
DELIMITER $$
CREATE TRIGGER `trg_update_test_ssrs` BEFORE UPDATE ON `test_ssrs` FOR EACH ROW BEGIN
    DECLARE msg TEXT;

    -- تحويل Oui/Non إلى أرقام val_q1..val_q6
    SET NEW.val_q1 = CASE NEW.Q1 WHEN 'Oui' THEN 1 WHEN 'Non' THEN 0 ELSE NULL END;
    SET NEW.val_q2 = CASE NEW.Q2 WHEN 'Oui' THEN 1 WHEN 'Non' THEN 0 ELSE NULL END;
    SET NEW.val_q3 = CASE NEW.Q3 WHEN 'Oui' THEN 1 WHEN 'Non' THEN 0 ELSE NULL END;
    SET NEW.val_q4 = CASE NEW.Q4 WHEN 'Oui' THEN 1 WHEN 'Non' THEN 0 ELSE NULL END;
    SET NEW.val_q5 = CASE NEW.Q5 WHEN 'Oui' THEN 1 WHEN 'Non' THEN 0 ELSE NULL END;
    SET NEW.val_q6 = CASE NEW.Q6 WHEN 'Oui' THEN 1 WHEN 'Non' THEN 0 ELSE NULL END;

    -- تحديد مستوى الخطر بناءً على C-SSRS
    IF NEW.Q7 = 'Oui' THEN
    SET msg = 'Risque suicidaire très élevé : comportement suicidaire récent. Intervention urgente requise.';
    SET NEW.suicide_q = 1;

ELSEIF NEW.Q6 = 'Oui' THEN
    SET msg = 'Idéation suicidaire avec plan. Risque élevé. Évaluation immédiate nécessaire.';
    SET NEW.suicide_q = 1;

ELSEIF NEW.Q5 = 'Oui' THEN
    SET msg = 'Idéation suicidaire avec intention d’agir. Risque important.';
    SET NEW.suicide_q = 1;

ELSEIF NEW.Q4 = 'Oui' THEN
    SET msg = 'Idéation suicidaire avec méthode envisagée. Surveillance requise.';
    SET NEW.suicide_q = 0;

ELSEIF NEW.Q3 = 'Oui' THEN
    SET msg = 'Idéation suicidaire active sans méthode. Suivi recommandé.';
    SET NEW.suicide_q = 0;

ELSEIF NEW.Q2 = 'Oui' THEN
    SET msg = 'Idée passive de mort. Suivi simple conseillé.';
    SET NEW.suicide_q = 0;

ELSEIF NEW.Q1 = 'Oui' THEN
    SET msg = 'Idée passive détectée, suivi conseillé.';
    SET NEW.suicide_q = 0;

ELSE
    SET msg = 'Aucune idéation suicidaire détectée.';
    SET NEW.suicide_q = 0;

END IF;

    -- تحديث رسالة التقييم
    SET NEW.comment_msg_test = msg;

    -- تحديث timestamp تلقائيًا عند كل UPDATE
    SET NEW.timestamp = CURRENT_TIMESTAMP;

END
$$
DELIMITER ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `getconsultation`
--
ALTER TABLE `getconsultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `navbar_table`
--
ALTER TABLE `navbar_table`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_audit`
--
ALTER TABLE `test_audit`
  ADD PRIMARY KEY (`id_test`);

--
-- Index pour la table `test_base`
--
ALTER TABLE `test_base`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_base_ancienne`
--
ALTER TABLE `test_base_ancienne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_dast`
--
ALTER TABLE `test_dast`
  ADD PRIMARY KEY (`id_test`);

--
-- Index pour la table `test_gad`
--
ALTER TABLE `test_gad`
  ADD PRIMARY KEY (`id_test`);

--
-- Index pour la table `test_isi`
--
ALTER TABLE `test_isi`
  ADD PRIMARY KEY (`id_test`);

--
-- Index pour la table `test_pcl`
--
ALTER TABLE `test_pcl`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `fk_pcl_test_base` (`id`);

--
-- Index pour la table `test_phq`
--
ALTER TABLE `test_phq`
  ADD PRIMARY KEY (`id_test`);

--
-- Index pour la table `test_ssrs`
--
ALTER TABLE `test_ssrs`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `getconsultation`
--
ALTER TABLE `getconsultation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `navbar_table`
--
ALTER TABLE `navbar_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `test_audit`
--
ALTER TABLE `test_audit`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `test_base`
--
ALTER TABLE `test_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT pour la table `test_base_ancienne`
--
ALTER TABLE `test_base_ancienne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `test_dast`
--
ALTER TABLE `test_dast`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `test_gad`
--
ALTER TABLE `test_gad`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `test_isi`
--
ALTER TABLE `test_isi`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `test_pcl`
--
ALTER TABLE `test_pcl`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `test_phq`
--
ALTER TABLE `test_phq`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT pour la table `test_ssrs`
--
ALTER TABLE `test_ssrs`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `test_pcl`
--
ALTER TABLE `test_pcl`
  ADD CONSTRAINT `fk_pcl_test_base` FOREIGN KEY (`id`) REFERENCES `test_base` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
