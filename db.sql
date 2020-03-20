-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: dd39936
-- Generation Time: Mar 14, 2020 at 09:07 PM
-- Server version: 5.7.28-nmm1-log
-- PHP Version: 5.6.38-nmm2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d0301316`
--

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE IF NOT EXISTS `markets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `market_type` int(11) DEFAULT NULL,
  `market_name` varchar(111) DEFAULT NULL,
  `market_owner` varchar(111) DEFAULT NULL,
  `owner_email` varchar(111) DEFAULT NULL,
  `owner_phone` varchar(112) DEFAULT NULL,
  `owner_address` text,
  `contact_person_name` varchar(111) DEFAULT NULL,
  `contact_person_phone` varchar(111) DEFAULT NULL,
  `contact_person_email` varchar(191) DEFAULT NULL,
  `other` text,
  `audio` text,
  `pdf` text,
  `notes` text,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(222) DEFAULT 'incomplete',
  `img` varchar(222) DEFAULT NULL,
  `color` varchar(222) DEFAULT NULL,
  `item_quantity` int(22) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `item_amount` double DEFAULT NULL,
  `plz` varchar(222) NOT NULL DEFAULT '',
  `display` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `user_id`, `market_type`, `market_name`, `market_owner`, `owner_email`, `owner_phone`, `owner_address`, `contact_person_name`, `contact_person_phone`, `contact_person_email`, `other`, `audio`, `pdf`, `notes`, `lat`, `lng`, `created_at`, `updated_at`, `status`, `img`, `color`, `item_quantity`, `total_amount`, `item_amount`, `plz`, `display`) VALUES
(45, 13, 7, 'TATTOO MOZART', 'Amadeus Zwierko', 'amadeus_zwierko@yahoo.de', '017664979661', 'Wollankstraße. 102', 'Amadeus Zwierko', '017664979661', 'amadeus_zwierko@yahoo.de', NULL, NULL, NULL, 'Probe am 14.11.2019 abgegeben', NULL, NULL, '2019-11-16 08:37:57', '2019-11-16 08:37:57', 'incomplete', NULL, NULL, NULL, NULL, NULL, '13187', NULL),
(49, 17, 1, 'Robert Koch Apotheke', 'Hr. Abdullah Khaleghi - Nafchi', 'unbekannt@web.de', '06105 75796', 'Aschaffenburer Str. 11', 'Fr. Jourdan', '06105 75796', 'unbekannt@web.de', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-15 11:36:37', '2019-12-15 12:21:02', 'complete', '1576416039.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '64546 Mörfelden Walldorf', NULL),
(50, 17, 1, 'Michaelis Apotheke', 'unbekannt', 'michaelisapotheke@yahoo.de', '06142-53660', 'Feuerbachstr. 18', 'Fr. Yigit, Derya', '06142-53660', 'michaelisapotheke@yahoo.de', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-15 11:45:41', '2019-12-15 12:21:55', 'complete', '1576416106.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '65428 Rüsselsheim', NULL),
(51, 17, 1, 'Alte Apotheke', 'Fr. Stäuber', 'michaelisapotheke@yahoo.de', '06134 5645010', 'Hauptstr. 139', 'Fr. Stäuber', '06134 5645010', 'michaelisapotheke@yahoo.de', NULL, NULL, NULL, 'Apo im Sanupark Hochheim; Apo im MCN Wiesbaden Nordenstadt; Rosenapotheke Hochheim', NULL, NULL, '2019-12-15 11:52:13', '2019-12-15 12:22:44', 'complete', '1576416155.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '55246 Mainz Kostheim', NULL),
(53, 17, 1, 'Rosen Apotheke', 'Fr. Pinger', 'kunden@rosenapothekewiesbaden.de', '0611 - 664 95 ', 'Str. der Republik 17-19', 'Fr. Pinger', '0611 - 664 95 ', 'kunden@rosenapothekewiesbaden.de', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-15 11:56:10', '2019-12-15 12:24:53', 'complete', '1576416288.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '65203 Wiesbaden Biebrich', NULL),
(54, 17, 1, 'Radilo Apotheke', 'Hr. Holger Seyfarth', 'unbekannt@web', '069 783416', 'Radilostr. 15', 'Fr. Barbara Fuchs', '069 783416', 'unbekannt@web.de', NULL, NULL, NULL, 'noch zugehörige Apos, Umzug Frühjahr', NULL, NULL, '2019-12-15 12:02:07', '2019-12-15 12:24:16', 'complete', '1576416251.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '60489 Frankfurt', NULL),
(55, 17, 1, 'Altkönig Apotheke', 'Svetlana Mäule', 'Altkoenig-Apotheke@t-online.de', '069 783639', 'Niddagaustraße 73', 'Svetlana Mäule', '069 783639', 'Altkoenig-Apotheke@t-online.de', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-15 12:06:41', '2019-12-15 12:23:52', 'complete', '1576416226.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '60489\n\nFrankfurt', NULL),
(56, 17, 1, 'Rochus Vital Apotheke (Globus)', 'Eva Göbel', 'wi@rochus-apotheke.net', '0 61 22 / 5 33 86 30', 'Ostring 2', 'Fr. Hickl (Fr. Latzko, Neuwied)', 'j.latzko@rochus-apotheke.net', 'wi@rochus-apotheke.net', NULL, NULL, NULL, 'mehrere Apotheken', NULL, NULL, '2019-12-15 12:16:40', '2019-12-15 12:23:21', 'complete', '1576416195.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, '65205 Wiesbaden', NULL),
(57, 17, 1, 'Eulen Apotheke', 'kA', 'tanja.pesel@web.de', '06074 812273', 'Gustav-Heinemann-Ring 1A', 'kA', '06074 812273', 'info@eulen-apotheke-dietzenbach.de', NULL, NULL, NULL, 'kein Interesse, keine Flasche', NULL, NULL, '2019-12-16 07:54:34', '2019-12-16 09:05:35', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63128 Dietzenbach', NULL),
(58, 17, 1, 'Easy Apotheke Dietzenbach', 'Herr Dr. Horst W. Schuchmann', 'dietzenbach@easyapotheken.de', '06074-4862110', 'Masayapl. 3', 'Herr Dr. Horst W. Schuchmann', '06074-4862110', 'dietzenbach@easyapotheken.de', NULL, NULL, NULL, 'sofort abgewiesen, Haben genug Aloe Vera Produke!', NULL, NULL, '2019-12-16 07:58:50', '2019-12-16 09:07:16', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63128 Dietzenbach', NULL),
(59, 17, 1, 'Apotheke im real Dreieich', 'Hr. Arnd Bätz', 'info@apotheke-dreieich.de', '+49610393030', 'Robert-Bosch-Straße 15', 'Hr. Arnd Bätz', '+49610393030', 'info@apotheke-dreieich.de', NULL, NULL, NULL, 'sollte T machen, bei Anruf Hr. Bätz unhöfl. abgelehnt- Brauchen wir nicht', NULL, NULL, '2019-12-16 08:02:43', '2019-12-16 09:06:57', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63303 Dreieich', NULL),
(60, 17, 1, 'hochtaunus apotheke bad homburg', 'Hr. Guido Kruse', 'info@hochtaunus-apotheke.eu', ' 06172 67168-0', 'Zeppelinstraße 24', 'Hr. Guido Kruse', ' 06172 67168-0', 'info@hochtaunus-apotheke.eu', NULL, NULL, NULL, 'Hr. Ruppert Sieht schlecht aus, Chef entscheidet', NULL, NULL, '2019-12-16 08:08:18', '2019-12-16 09:06:46', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '61352 Bad Homburg', NULL),
(61, 17, 1, 'Apotheke am Bürgel', 'kA', 'info@apothekeambuegel.de', '069/507 25 45', 'Ben-Gurion-Ring 54', 'kA', '069/507 25 45', 'info@apothekeambuegel.de', NULL, NULL, NULL, 'bestellen NICHS direkt', NULL, NULL, '2019-12-16 08:12:08', '2019-12-16 09:06:31', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '60437 Frankfurt Main', NULL),
(62, 17, 1, 'Kur- und Louisen Apotheke', 'Fr. Margit Kowalski', 'mail@kur-und-louisenapotheke.de', '06172 - 24037', 'Louisenstr. 77', 'Helferinnen, Margit Kowalski', '06172 - 24037', 'mail@kur-und-louisenapotheke.de', NULL, NULL, NULL, 'Helferinnen begeistert, Chefin sagt Nein', NULL, NULL, '2019-12-16 08:16:08', '2019-12-16 09:06:02', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '61348 Bad Homburg', NULL),
(63, 17, 1, 'Eschbach Apotheke', 'Hr. Philos Sthapit e.K. ', 'info@eschbach-apotheke.de', '069 – 5077077', 'Alt Niedereschbach 2 ', 'Fr. Thinnes, Fr. Heinzmann', '069 – 5077077', 'info@eschbach-apotheke.de', NULL, NULL, NULL, 'im Februar erneut nachfragen', NULL, NULL, '2019-12-16 08:20:16', '2019-12-16 09:06:17', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '60437 Frankfurt Main', NULL),
(64, 17, 2, 'Glam Up Kosmetikstudio', 'Hr. Alexander Jung', 'Info@Glam-Up-Beauty.de', '06134 9379082', 'Uthmannszr. 8', 'Fr. Mallione Biofax', '06134 9379082', 'Info@Glam-Up-Beauty.de', NULL, NULL, NULL, 'MB kennt sich bestens aus, Chefin will nicht, im FRÜHJAHR nachfragen', NULL, NULL, '2019-12-16 08:25:28', '2019-12-16 09:04:26', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '55246 Mainz Kostheim', NULL),
(65, 17, 2, 'Auszeit', 'Jasmin Küber', 'info@kosmetik-auszeit.net', '+49 (0) 6134 65983', 'Wilhelmstr. 40', 'Jasmin Küber', '+49 (0) 6134 65983', 'info@kosmetik-auszeit.net', NULL, NULL, NULL, 'kein Intetesse, keine Ahnung, kein Potential', NULL, NULL, '2019-12-16 08:28:31', '2019-12-16 09:03:59', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '55246 Mainz-Kostheim', NULL),
(66, 17, 1, 'Spitzweg Apotheke im Fachärztezentrum', 'kA', 'unbekannt@web.de', '06103 3018118', 'Röntgenstraße 6-8', 'Fr. Regina Schuchmann', '06103 3018118', 'unbekannt@web.de', NULL, NULL, NULL, 'im Frühjahr , jetzt kein Bedarf', NULL, NULL, '2019-12-16 08:34:14', '2019-12-16 09:01:59', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63225 Langen (Hessen)', NULL),
(67, 17, 1, 'Paracelsus Apotheke', 'Hr. Richard Graf e.K.', 'info@paracelsusapo.de', '(0 60 74) 3 12 15', 'Rathenaustraße 35', 'Hr. Richard Graf e.K.', '(0 60 74) 3 12 15', 'info@paracelsusapo.de', NULL, NULL, NULL, 'nachfragen, hat es Chef vorgelegt', NULL, NULL, '2019-12-16 08:38:09', '2019-12-16 09:01:46', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '63128 Dietzenbach', NULL),
(68, 17, 1, 'Stadt Apotheke', 'kA Fr. Schulz (?)', 'unbekannt@web.de', '069783127', 'Lorscher Str. 3', 'Fr. Schulz', '069783127', 'unbekannt@web.de', NULL, NULL, NULL, '+ Brentano , + Am Bahnhof, Umzug im Frühjahr', NULL, NULL, '2019-12-16 08:44:18', '2019-12-16 09:02:11', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '60489 Frankfurt am Main', NULL),
(69, 17, 1, 'Ebelfeld-Apotheke', 'Fr. Monika Loris', 'm.loris@outlook.de', '069/76 10 54', 'Ludwig-Landmann-Str. 73', 'Fr. Monika Loris', '069/76 10 54', 'm.loris@outlook.de', NULL, NULL, NULL, 'gr. Apotheke, zZt. kein Personal, in 2020 nochmal besuchen', NULL, NULL, '2019-12-16 08:48:08', '2019-12-16 09:01:32', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '60488 Frankfurt', NULL),
(70, 17, 1, 'Nidda Apotheke', 'egal', 'unbekannt@web.de', '0123456789', 'Heerstraße 3E', 'egal', '0123456789', 'unbekannt@web.de', NULL, NULL, NULL, 'KEINE DIREKTBESTELLUNGEN', NULL, NULL, '2019-12-16 08:50:25', '2019-12-16 09:01:09', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '60488 Frankfurt am Main', NULL),
(71, 17, 1, 'Schloss Apotheke', 'Silvia Schafhausen-Wernicke', 'email@schlossapotheke-frankfurt.de', '069 – 57 91 96', 'In der Römerstadt 238', 'Silvia Schafhausen-Wernicke', '069 – 57 91 96', 'email@schlossapotheke-frankfurt.de', NULL, NULL, NULL, '50-jähriges, ausl. anmutender Mann, 1 Flasche', NULL, NULL, '2019-12-16 08:55:22', '2019-12-16 09:00:56', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '60439 Frankfurt', NULL),
(72, 17, 1, 'Hadrian Apotheke\\ Kronen Apo', 'Fr. Jelena Radtke', 'infoo@hadrian-apotheke.de', '069/57 11 16', 'In der Römerstadt 118', 'Jelena Radtke', '069/57 11 16', 'info@hadrian-apotheke.de', NULL, NULL, NULL, 'Wir haben preissensibles Publikum. NEIN.', NULL, NULL, '2019-12-16 08:59:23', '2019-12-16 09:00:33', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '60439 Frankfurt am Main', NULL),
(73, 15, 2, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'rest', 'importiere others', NULL, NULL, 'importirrte notes', NULL, NULL, '2019-12-16 09:42:43', '2020-03-10 04:51:21', 'complete', '1583819472.png', 'Yellow/Contacted', 12, 12, 12, '24634', NULL),
(74, 17, 1, 'City Apotheke Ihre Apotheker', 'Jens Süssmann', 'city@ihre-apotheke.de', '06102327260', 'Frankfurter Str. 166', 'Jens Süssmann', '06102327260', 'city@ihre-apotheke.de', 'im neuen Jahr, MAin hatte angebl. keine Zeit', NULL, NULL, '7 Apotheken', NULL, NULL, '2019-12-17 17:39:57', '2019-12-17 17:51:14', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63263 Neu-Isenburg', NULL),
(75, 17, 1, 'Pluspunkt Apotheke im Isenburg Zentrum', 'Barbara Manzano Vela', 'neu-isenburg@pluspunkt-apotheke.de', '06102 - 30 66 66', 'Hermesstraße 4', 'Barbara Manzano Vela', '06102 - 30 66 66', 'neu-isenburg@pluspunkt-apotheke.de', NULL, NULL, NULL, 'Chefin kein Interesse, trotzdem Infos + Flasche', NULL, NULL, '2019-12-17 17:44:49', '2019-12-17 17:50:43', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '63263 Neu-Isenburg', NULL),
(76, 17, 1, 'Schloss- (+ Victoria) Apotheke', 'Inhaberwechsel Jahresende', 'info@schloss-apotheke.de', '069864004', 'Bürgeler Str. 35', 'Inhaberwechsel Jahresende', '069864004', 'info@schloss-apotheke.de', NULL, NULL, NULL, 'nä Jahr, da Inhaberwechsel', NULL, NULL, '2019-12-17 17:50:02', '2019-12-17 17:50:28', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63075 Offenbach am Main', NULL),
(77, 17, 1, 'Alpha Apotheke/ Apo im Ärztezentrum', 'Hr. Mortazavi', 'info@alpha-apotheke-of.de', '069 770674220', 'Berliner Straße 79', 'Hr. Mortazavi, Fr. Mörtel', '069 770674220', 'info@alpha-apotheke-of.de', NULL, NULL, NULL, 'Fr. Mörtel Donnerstag anrufen', NULL, NULL, '2019-12-18 08:18:02', '2019-12-18 08:55:49', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '63071 Offenbach', NULL),
(78, 17, 1, 'Schwanen Apotheke', 'Dr. Guido Kruse', 'info@schwanen-apotheke.eu', '0698090660', 'Marktpl. 8', 'Dr. Guido Kruse, Fr. Blum', '0698090660', 'info@schwanen-apotheke.eu', NULL, NULL, NULL, 'Mail an Fr. Blum', NULL, NULL, '2019-12-18 08:23:18', '2019-12-18 08:55:39', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63065 Offenbach am Main', NULL),
(79, 17, 1, 'Flora Apotheke (Dreieichstr.)', 'Dr. M. Oswald', 'flora-apo-ffm@pharma-online.de', '069623016', 'Dreieichstr. 59', 'Dr. M. Oswald', '069623016', 'flora-apo-ffm@pharma-online.de', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-18 08:27:50', '2019-12-18 08:55:30', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '60594 Frankfurt', NULL),
(80, 17, 1, 'Central-Apotheke', 'Peter Petri', 'egal@web.de', '0123456789', 'Kleiner Biergrund 32', 'Petri', '0123456789', 'egal@web.de', NULL, NULL, NULL, 'KEIN INTERESSE, keine Kunden, die Geld ausgeben', NULL, NULL, '2019-12-18 08:55:10', '2019-12-18 08:55:20', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, '63065 Offenbach', NULL),
(81, 16, 1, 'mm', 'mm', 'a@a.com', '5585', 'null null', 'hh', 'hh', 'b@b.com', 'hj', NULL, NULL, 'hh', NULL, NULL, '2020-01-18 18:56:35', '2020-01-19 17:45:31', 'complete', '1579459495.png', 'LimeGreen/Successfully Acquired', 12, 12, 12, 'null null', NULL),
(82, 16, 6, 'test', 'test', 'test', 'tes', 'Monbijoustraße 3B', 'test', 'test', 'tet', 'test', NULL, NULL, 'test', '52.523107080680376', '13.39502390474081', '2020-01-19 17:46:08', '2020-01-19 17:48:11', 'complete', '1579459680.png', 'DarkGreen/Successfully Acquired & Sample left', 36, 36, 36, '10117 Berlin', NULL),
(83, 16, 1, 'kashif', 'kk', 'k@k.com', '12245', 'null null', 'fg', 'gh', 'a@a.com', 'gg', NULL, NULL, 'hh', NULL, NULL, '2020-01-20 06:07:35', '2020-02-01 11:38:51', 'complete', '1580560714.png', 'LimeGreen/Successfully Acquired', 12, 12, 12, 'null null', NULL),
(84, 16, 1, 'ssjj', 'jsj', 'z@z', 'dhdj', 'null null', 'djxh', 'dhdha@', 'a@a', 'jejs', NULL, NULL, 'hdhd', NULL, NULL, '2020-02-01 11:48:12', '2020-03-14 18:53:28', 'complete', '1584215579.png', 'DarkGreen/Successfully Acquired & Sample left', 12, 12, 12, 'null null', NULL),
(87, 21, 1, 'Quellen-Apotheke', 'C. Schneider', 'Keine', '089/933684', 'Ostpreußenstraße 12', 'C. Schneider', 'Keine', 'Keine', NULL, NULL, NULL, NULL, '48.146875519863585', '11.640491746366026', '2020-03-09 17:58:25', '2020-03-09 18:00:47', 'complete', '1583780359.png', 'LimeGreen/Successfully Acquired', 12, 12, 12, '81927 München', NULL),
(88, 21, 1, 'Sani Plus Apotheke', 'Lauterbach', 'Apo. riem@saniplus.de', '089/8987810', 'Willy-Brandt-Platz5', 'Steffi Schwarz', 'Keine', 's. schwarz@saniplus.de', NULL, NULL, NULL, 'in 2 Wochen melden', NULL, NULL, '2020-03-09 18:06:22', '2020-03-09 18:06:44', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '81829 München', NULL),
(89, 21, 1, 'Atrium Apotheke', 'Rosser Sandra', 'Keine', '089/936737', 'null null', 'Rosser Sandra', '089/936737', 'Keine', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 11:43:42', '2020-03-10 11:46:15', 'complete', '1583844351.png', 'LimeGreen/Successfully Acquired', 12, 12, 12, 'null null', NULL),
(91, 21, 1, 'Ost-Apotheke', 'Keine', 'Keine', '089/4313930', 'null null', 's. o', 's. o', 'Keine', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 11:59:35', '2020-03-10 12:00:20', 'incomplete', NULL, 'Yellow/Contacted', NULL, NULL, NULL, 'null null', NULL),
(92, 21, 1, 'Freischütz Apotheke', 'Frau Echtler', 'Keine', '089/956075', 'Freischützstr. 55', 's. o', 's. o', 'Keine', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 12:11:42', '2020-03-10 12:13:02', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '81927 München', NULL),
(93, 21, 1, 'Arnika Apotheke', '....', 'Keine', '089/9983730', 'Oberföhringerstr. 2', '....', 's. o', 'Keine', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 12:16:31', '2020-03-10 12:16:40', 'incomplete', NULL, 'Blue/Contacted & Sample left', NULL, NULL, NULL, '81679 München', NULL),
(94, 21, 1, 'Amalien Apotheke', 'Dr. Aurnhammer', 'www.amalienapotheke.de', '089/968454', 'Bahnhofsstr. 17', 'Frau Aurnhammer', 's. o', 's. o', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 15:47:06', '2020-03-10 15:48:16', 'complete', '1583858887.png', 'LimeGreen/Successfully Acquired', 12, 12, 12, '85737 Ismaning', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `market_images`
--

CREATE TABLE IF NOT EXISTS `market_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `market_id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `market_types`
--

CREATE TABLE IF NOT EXISTS `market_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `market_types`
--

INSERT INTO `market_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pharmacy', '2019-09-29 11:34:32', '0000-00-00 00:00:00'),
(2, 'Beauty Salon', '2019-09-29 11:34:47', '0000-00-00 00:00:00'),
(3, 'Hair Stylist', '2019-09-29 11:34:57', '0000-00-00 00:00:00'),
(4, 'Naturopath', '2019-09-29 11:35:06', '0000-00-00 00:00:00'),
(5, 'Bio-Market', '2019-09-29 11:35:19', '0000-00-00 00:00:00'),
(6, 'store chain', '2019-09-29 11:35:32', '0000-00-00 00:00:00'),
(7, 'other', '2019-09-29 11:35:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcm_id` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `user_type` int(22) NOT NULL DEFAULT '0',
  `plz` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st_house` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `fcm_id`, `password`, `remember_token`, `created_at`, `updated_at`, `is_verified`, `user_type`, `plz`, `st_house`) VALUES
(8, 'Kashif', 'muhammadkashif700010@gmail.com', NULL, NULL, '$2y$10$RLkq63RrTbMef5t5Ed2OIOCCa/3xzLbG8lO18eTLPFYiO2SkDKezG', 'F8poPGkbyqQVMea9HiKE4BfERh1RRdvb4pvyL9nUEkQTAuTqHdEqe1xPOwSf', '2019-09-28 05:27:36', '2019-09-28 05:27:36', 'yes', 1, NULL, NULL),
(10, 'Hashim', 'hashim@hmail.com', '090078701', NULL, '$2y$10$OmuaV.Q0YxpfnsCqxRwCEu02UByVvX0DpY5U6jONLEifpwm7zOf1a', NULL, '2019-10-17 14:38:20', '2019-10-17 14:39:11', 'yes', 0, 'llz', 'St'),
(13, 'Michael Thomas Smejkal', 'mts-berlin@gmx.de', '017630145677', NULL, '$2y$10$qL2luPv00NG2K9rhA4IUfu/U70eKo2t4Q3iPcUfrAt5jbiXgX5jIq', NULL, '2019-11-06 06:18:39', '2020-02-18 10:24:59', 'no', 0, '13125 Berlin', 'Lindenberger Weg 83'),
(14, 'William Pusch', 'fff@eu.xlm', '0000', NULL, '$2y$10$ZTyuutUl2P.kGyyorODVPOeE1QmC72La.7OL4ezPGpWfSwkDQH.J2', NULL, '2019-11-20 18:41:39', '2019-11-20 18:49:17', 'yes', 0, '00000 Gießen', 'Test 12'),
(15, 'Rudolf Pusch', 'rudolf.pusch@hotmail.de', '015117876712', NULL, '$2y$10$ESieRn2WjjN6ngTJjPygMuFuR8BXC9HwIp.f3aU25hEuQU8S6XAdC', NULL, '2019-11-21 11:33:12', '2019-11-25 09:00:44', 'yes', 0, '35390 Gießen', 'Dürerstr. 9'),
(16, 'Abdul', 'hashim@gmail.com', '03001234567', NULL, '$2y$10$HL4S./52xcKcGvX0RjU6LOAsd/dRH4lNSe0ttCUtneQOJ/RKkiBIC', NULL, '2019-11-23 19:50:39', '2019-11-24 07:09:24', 'yes', 0, 'Lahore', 'main st'),
(17, 'Tanja Bader', 't.bader@elysius.eu', '01746740231', NULL, '$2y$10$J19N0EYuZvceU9V4cJGRXeOjhF6.6U2dIXKFxLED9t/EDrmLTQeI.', NULL, '2019-11-25 15:44:34', '2019-11-25 15:45:05', 'yes', 0, '64546 Mörfelden-Walldorf', 'Soonwaldstr. 2'),
(18, 'kashif', 'ap@gmail.com', '3764646', NULL, '$2y$10$ER13ijKA/dJxtlcw1xObrORWCHqk16nWvMAIy/z75k3F79BdesXXq', NULL, '2020-01-19 15:14:07', '2020-01-19 15:14:07', 'no', 0, 'hdhs', 'djdh'),
(21, 'Stephan Balling', 's.balling@elysius.eu', '0176/21812485', NULL, '$2y$10$OePkrH97QfE0HbV1wiMZa.KXSrZnvbSTN1azRfnIqThUbPca.Mmxq', NULL, '2020-03-03 12:40:22', '2020-03-03 12:40:28', 'yes', 0, '81929 München', 'Burgauerstr. 61'),
(22, 'yg', 'iftihussain4u@gmail.com', '03005411085', NULL, '$2y$10$h2iBofDLkWDRTd/DeYsjkOrmFDGT4.wV8CTM3yZHFRCI2sg/ZmqYy', NULL, '2020-03-12 10:33:00', '2020-03-12 10:33:00', 'no', 0, 'jinnah', 'garden');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
