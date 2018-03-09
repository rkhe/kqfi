-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2015 at 12:10 AM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kingsfoo_website`
--
CREATE DATABASE `kingsfoo_website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kingsfoo_website`;

-- --------------------------------------------------------

--
-- Table structure for table `cake_sessions`
--

DROP TABLE IF EXISTS `cake_sessions`;
CREATE TABLE IF NOT EXISTS `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `created`, `modified`) VALUES
(1, 'News', '2013-12-13 02:32:04', NULL),
(2, 'Promo', '2013-12-13 02:32:04', NULL),
(3, 'Manager', '2013-12-13 02:32:04', NULL),
(4, 'Home Banner', '2014-01-13 07:23:54', NULL),
(5, 'News Banner', '2014-01-13 07:23:54', NULL),
(6, 'Product Banner', '2014-01-13 07:23:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `image_url` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_category_id` (`post_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category_id`, `title`, `body`, `created`, `modified`, `image_url`, `slug`, `is_show`) VALUES
(1, 2, 'RAFFLE DRAW WINNERS', '<div class="table"><span>1st Prize</span><span>Alexander Bongo</span><span>(Rajah Motorbike)</span><br />\r\n<span>2nd Prize</span><span>Paraluman Correa</span><span>(Archer Motorbike)</span><br />\r\n<span>3rd Prize</span><span>Jenalyn Sabad</span><span>(15 cu. Ft. Freezer)</span></div>\r\n<br /><br />\r\n<div class="table">\r\n<b>Gift Certificate Winners</b><br /><br />\r\n<span>Alejandro Tudtud</span><span>Lester Casallas</span><br />\r\n<span>Annabelle Dungog</span><span>Mariadelinda Diaz</span><br />\r\n<span>Bonet Rodriguez</span><span>May Salazar</span><br />\r\n<span>Carmen Pagandy</span><span>Nenita Darmail</span><br />\r\n<span>Elmer Nu&ntilde;ez</span><span>Panilag Merlinda</span><br />\r\n<span>Ethni Garsula</span><span>Relna Godinez</span><br />\r\n<span>Gerland Caldaza</span>\r\n<span>Richie Atillo</span><br />\r\n<span>Joemark Mutia</span>\r\n<span>Soriano Jesse</span><br />\r\n<span>Josphine Pastrero</span>\r\n<span>Susan Remedio</span><br />\r\n<span>Kara Redelosa</span>\r\n<span>Tomas Mortorillas</span>\r\n</div><br /><br />\r\n<div class="table">\r\n<b>Sack of Rice Winners</b></span><br />\r\n<span>Analie Tandog</span>\r\n<span>Lynneth Rafil</span><br />\r\n<span>Barbette Blance Agranio</span>\r\n<span>Merdawena Bubuli</span><br />\r\n<span>Carmela Villahermosa</span>\r\n<span>Mery Margaret Young</span><br />\r\n<span>Eduard Vincent Caspe</span>\r\n<span>Nena Empleo</span><br />\r\n<span>Egbert Fajardo</span>\r\n<span>Nieva Fua</span><br />\r\n<span>Erpie Aonor</span>\r\n<span>Olmedo Lorena</span><br />\r\n<span>Fernando Gimena</span>\r\n<span>Pe&ntilde;as Arnold</span><br />\r\n<span>Helnida Yee</span>\r\n<span>Ricardo Legaspi</span><br />\r\n<span>Imelda Baguio</span>\r\n<span>Rolando Lambojon</span><br />\r\n<span>Irene Villoseroz</span>\r\n<span>Russel Bihag</span><br />\r\n<span>Joan Berli Denampo</span>\r\n<span>Silogan Ni Gian</span><br />\r\n<span>Lina Morales</span>\r\n<span>Vicente Mendez</span><br />\r\n<span>Lito Terol</span></div><br /><br />', '2013-12-13 02:32:04', '2015-10-30 00:09:11', 'kqfi_promo01.jpg', 'King''s Quality Foods (Cebu), Inc. December 14, 2013 raffle draw Winners.', 1),
(2, 1, 'Announcement', 'Gift Certificate is now Available at KQFI Designated Outlets (Leon Kilat, Fuente, Carbon, Paknaan Mandaue and Tabunok)', '2013-12-13 02:32:04', '2015-10-30 00:09:35', 'kqfi_gc.png', 'Gift Certificate is now Available at KQFI Designated Outlets', 1),
(3, 3, 'Manager''s Corner', 'test lang!', '2013-12-13 02:32:04', '2014-09-01 02:50:46', '', '', 1),
(4, 4, 'Home Banner 01', 'This shows at home page', '2014-01-13 07:24:22', NULL, 'banner01.png', NULL, 1),
(5, 5, 'News Banner 01', 'This shows at news page', '2014-01-13 07:24:23', NULL, 'banner_page_promotion01.png', NULL, 1),
(6, 5, 'News Banner 02', 'This shows at news page', '2014-01-13 07:24:23', NULL, 'banner_page_promotion02.png', NULL, 1),
(7, 5, 'News Banner 03', 'This shows at news page', '2014-01-13 07:24:24', NULL, 'banner_page_promotion03.png', NULL, 1),
(8, 5, 'News Banner 04', 'This shows at news page', '2014-01-13 07:24:24', NULL, 'banner_page_promotion04.png', NULL, 1),
(9, 5, 'News Banner 05', 'This shows at news page', '2014-01-13 07:24:24', NULL, 'banner_page_promotion05.png', NULL, 1),
(10, 6, 'Product Banner 01', 'This shows at products page', '2014-01-13 07:24:25', NULL, 'banner_product01.png', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `url`, `created`, `modified`, `is_active`) VALUES
(1, 'Hams', 'cat_hams.png', '2013-12-13 02:32:04', NULL, 1),
(2, 'Sausages', 'cat_sausages.png', '2013-12-13 02:32:04', NULL, 1),
(3, 'Cold Cuts', 'cat_coldcuts.png', '2013-12-13 02:32:04', NULL, 1),
(4, 'Patties', 'cat_patties.png', '2013-12-13 02:32:04', '2014-06-04 00:43:23', 1),
(5, 'Dried Products', 'cat_driedproducts.png', '2013-12-13 02:32:04', NULL, 1),
(6, 'IQF Products', 'cat_iqfproducts.png', '2013-12-13 02:32:04', NULL, 1),
(7, 'Christmas Hams', 'cat_chirstmashams.png', '2013-12-16 06:41:21', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_packages`
--

DROP TABLE IF EXISTS `product_packages`;
CREATE TABLE IF NOT EXISTS `product_packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `remarks` varchar(128) DEFAULT NULL,
  `quantity` decimal(18,9) DEFAULT NULL,
  `quantity_unit` varchar(10) DEFAULT NULL,
  `price` decimal(18,9) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `product_packages`
--

INSERT INTO `product_packages` (`id`, `product_id`, `remarks`, `quantity`, `quantity_unit`, `price`, `created`, `modified`) VALUES
(1, 6, NULL, '1.000000000', 'kilograms', '400.000000000', '2013-12-16 06:44:05', NULL),
(2, 6, NULL, '950.000000000', 'grams', '380.000000000', '2013-12-16 06:44:06', NULL),
(3, 6, NULL, '900.000000000', 'grams', '360.000000000', '2013-12-16 06:44:06', NULL),
(4, 6, NULL, '850.000000000', 'grams', '340.000000000', '2013-12-16 06:44:06', NULL),
(5, 6, NULL, '800.000000000', 'grams', '320.000000000', '2013-12-16 06:44:06', NULL),
(6, 7, NULL, '1.000000000', 'kilograms', '212.000000000', '2013-12-16 06:44:07', NULL),
(7, 7, NULL, '750.000000000', 'grams', '172.000000000', '2013-12-16 06:44:07', NULL),
(8, 7, NULL, '500.000000000', 'grams', '123.000000000', '2013-12-16 06:44:07', NULL),
(9, 8, NULL, '1.000000000', 'kilo', '800.000000000', '2013-12-16 06:44:07', NULL),
(10, 9, '-', '800.000000000', 'grams', NULL, '2013-12-26 04:49:24', NULL),
(11, 1, '32 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:24', NULL),
(12, 1, '10 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:24', NULL),
(13, 2, '27-28 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:24', NULL),
(14, 2, '8 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:24', NULL),
(15, 3, '40 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:25', NULL),
(16, 3, '8 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:25', NULL),
(17, 4, '30 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:25', NULL),
(18, 4, '10 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:25', NULL),
(19, 5, '36-38 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:26', NULL),
(20, 5, '10 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:26', NULL),
(21, 10, '40 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:26', NULL),
(22, 10, '10 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:26', NULL),
(23, 11, '48-49 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:26', NULL),
(24, 11, '12 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:27', NULL),
(25, 12, '42-44 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:27', NULL),
(26, 12, '12 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:27', NULL),
(27, 13, '25 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:27', NULL),
(28, 13, '5 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:27', NULL),
(29, 14, '25 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:28', NULL),
(30, 14, '5 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:28', NULL),
(31, 15, '52-53 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:28', NULL),
(32, 15, '13 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:28', NULL),
(33, 16, '25 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:29', NULL),
(34, 16, '6 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:29', NULL),
(35, 17, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:29', NULL),
(36, 17, '-', '250.000000000', 'grams', NULL, '2013-12-26 04:49:29', NULL),
(37, 18, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:29', NULL),
(38, 18, '-', '250.000000000', 'grams', NULL, '2013-12-26 04:49:30', NULL),
(39, 19, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:30', NULL),
(40, 19, '-', '250.000000000', 'grams', NULL, '2013-12-26 04:49:30', NULL),
(41, 20, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:30', NULL),
(42, 20, '-', '250.000000000', 'grams', NULL, '2013-12-26 04:49:30', NULL),
(43, 21, '50 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:31', NULL),
(44, 21, '10 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:31', NULL),
(45, 21, '8 pieces', '160.000000000', 'grams', NULL, '2013-12-26 04:49:31', NULL),
(46, 22, '50 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:31', NULL),
(47, 22, '10 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:31', NULL),
(48, 23, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:32', NULL),
(49, 23, '-', '250.000000000', 'grams', NULL, '2013-12-26 04:49:32', NULL),
(50, 24, '48 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:32', NULL),
(51, 24, '12 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:32', NULL),
(52, 25, '72 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:33', NULL),
(53, 25, '12 pieces', '170.000000000', 'grams', NULL, '2013-12-26 04:49:33', NULL),
(54, 26, '19-21 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:33', NULL),
(55, 26, '8-9 pieces', '400.000000000', 'grams', NULL, '2013-12-26 04:49:33', NULL),
(56, 26, '4 pieces', '160.000000000', 'grams', NULL, '2013-12-26 04:49:33', NULL),
(57, 27, '-', '100.000000000', 'grams', NULL, '2013-12-26 04:49:34', NULL),
(58, 28, '-', '80.000000000', 'grams', NULL, '2013-12-26 04:49:34', NULL),
(59, 29, '32 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:34', NULL),
(60, 29, '8 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:34', NULL),
(61, 30, '32 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:35', NULL),
(62, 30, '8 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:35', NULL),
(63, 31, '12 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:35', NULL),
(64, 32, '13 pcs regular, 6 pcs Jum', '250.000000000', 'grams', NULL, '2013-12-26 04:49:35', NULL),
(65, 33, '8 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `url` varchar(128) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_id` (`product_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `title`, `description`, `url`, `created`, `modified`) VALUES
(1, 1, 'Chicken Ham', 'Pink moulded ham in emulsion form, seasoned with spices to give a delicate chicken ham flavor.', '', '2013-12-13 02:32:04', NULL),
(2, 1, 'Cooked Ham', 'Pinkish red moulded ham in semi-emulsion form, cured and seasoned with spices to give delicate ham flavor.', '', '2013-12-13 02:32:04', NULL),
(3, 1, 'Luncheon Meat', 'Light pink semi-emulsified product,seasoned with spices to give a pleasing aroma and taste.', 'luncheonmeat.jpg', '2013-12-13 02:32:04', NULL),
(4, 1, 'Meat Loaf', 'Pink semi-emulsified product, seasoned with spices to give pleasing aroma and taste.', 'meatloaf.jpg', '2013-12-13 02:32:04', NULL),
(5, 1, 'Spiced Ham', 'Brigth pinkish red semi-emulsified product,seasoned with a distinct spicy flavored and molded into square loaf and sliced uniformly.', 'spicedham.jpg', '2013-12-13 02:32:04', NULL),
(6, 7, 'Pi&ntilde;a Ham', 'Rounded whole musscle hams with brown to golden brown colors, cured and seasoned with spices to give a delicate ham and  pineapple flavor.', NULL, '2013-12-16 06:42:24', NULL),
(7, 7, 'Pear Shaped Ham', 'Pinkish molded ham in semi-emulsion form cured and seasoned with spices to give delicate ham flavor.', 'pearshapedham.jpg', '2013-12-16 06:42:25', NULL),
(8, 7, 'Chinese Ham', 'Brown colored ham in whole cut or mini-cut ham legs,cured with salt and seasoned with spices to give delicate ham flavor', NULL, '2013-12-16 06:43:53', NULL),
(9, 7, 'Ball Ham', 'Round ham in semi-emulsion form cured and seasoned with spices to give delicate ham flavor.', NULL, '2013-12-26 04:48:42', NULL),
(10, 2, 'Chorizo Cebuano', 'Pinkish red semi-emulsified product, seasoned with a distinct sweet and spicy flavor', NULL, '2013-12-26 04:48:44', NULL),
(11, 2, 'Chorizo Pinoy', 'Orange brown with very few fine dark speckles, semi-emulsified meat.', NULL, '2013-12-26 04:48:44', NULL),
(12, 2, 'Longaniza Hamonada', 'Light brown,semi-emulsified meat,spiced,stuffed and smoked in an edible collagen casing.', NULL, '2013-12-26 04:48:44', NULL),
(13, 2, 'Hotdog Classic', 'Dark Brownish emulsion,stuffed in red cellulose casing.', NULL, '2013-12-26 04:48:44', NULL),
(14, 2, 'Hotdog Franks', 'Light pinkish brown emulsion seasoned with spices,stuffed in clear cellulose casing.', NULL, '2013-12-26 04:48:44', NULL),
(15, 2, 'Royal Hotdog', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', NULL, '2013-12-26 04:48:45', NULL),
(16, 2, 'Royal Jumbo', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', NULL, '2013-12-26 04:48:45', NULL),
(17, 3, 'Bacon Premium', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', NULL, '2013-12-26 04:48:45', NULL),
(18, 3, 'Bacon Regular', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', NULL, '2013-12-26 04:48:45', NULL),
(19, 3, 'Bacon Bits', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', NULL, '2013-12-26 04:48:45', NULL),
(20, 3, 'Corned Beef', 'Strips of cured and pleasingly seasoned beef,purplish red in color and pack in thin slices.', NULL, '2013-12-26 04:48:46', NULL),
(21, 3, 'Lumpia Shanghai', 'Ground pork seasoned with spices,rolled with off white lumpia wrapper.', NULL, '2013-12-26 04:48:46', NULL),
(22, 3, 'Meat Balls', 'Ground pork seasoned with spices.', NULL, '2013-12-26 04:48:46', NULL),
(23, 3, 'Pork Tocino', 'Orange red, thinly sliced premium pork cured and seasoned to attain a pleasing distinct spicy flavor.', NULL, '2013-12-26 04:48:46', NULL),
(24, 3, 'Siomai', 'Ground pork seasoned with spices, rolled with off white siomai wrapper.', NULL, '2013-12-26 04:48:47', NULL),
(25, 3, 'Chicken Balls', 'Ground chicken seasoned with spices.', NULL, '2013-12-26 04:48:47', NULL),
(26, 5, 'Chorizo Macao Original', 'Reddish brown to brown dried sausage,cured and seasoned with spices.', NULL, '2013-12-26 04:48:47', NULL),
(27, 5, 'Beef Tapa', 'Thin dried sheets of beef lean, reddish brown in color, cured and seasoned with spices and condiments.', NULL, '2013-12-26 04:48:47', NULL),
(28, 5, 'Pork Tapa', 'Thin dried sheets of pork lean, reddish brown in color, cured and seasoned with spices and condiments.', NULL, '2013-12-26 04:48:47', NULL),
(29, 4, 'Chicken Burger', 'Yellowish to light brown circular mixed ground chicken with spices to give a chicken taste and aroma.', NULL, '2013-12-26 04:48:48', NULL),
(30, 4, 'Hamburger Patties', 'Ligth brown circular mixed gorund meat with spices to give a meaty spicy taste and aroma.', NULL, '2013-12-26 04:48:48', NULL),
(31, 6, 'IQF Chicken Longaniza', 'Very light brown semi-emulsified meat,spiced to give a delicate chicken flavoir,stuffed and smoked in an edible collagen casing.', NULL, '2013-12-26 04:48:48', NULL),
(32, 6, 'IQF Royal Hotdog', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', NULL, '2013-12-26 04:48:48', NULL),
(33, 6, 'IQF Pear Shaped Ham', 'Pinkish brown  molded ham in semi-emulsion form cured and seasoned with spice to give delicate ham flavor.', NULL, '2013-12-26 04:48:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `last_login` datetime DEFAULT '0000-00-00 00:00:00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', 'a8c9ba33cb0f8f52aaa4cc2e085235db', '2015-10-30 00:08:25', '2014-01-13 07:32:09', '2015-10-30 00:08:25'),
(2, 'rkhe', '11f2a09b333b50a8af62be56e6737263', '0000-00-00 00:00:00', '2014-01-13 07:32:09', NULL),
(3, NULL, NULL, '2015-07-06 17:41:39', '2015-07-06 17:41:39', '2015-07-06 17:41:39'),
(4, NULL, NULL, '2015-10-18 09:09:17', '2015-10-18 09:09:17', '2015-10-18 09:09:17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
