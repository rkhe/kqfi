-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2017 at 06:25 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kingsfoo_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake_sessions`
--

CREATE TABLE IF NOT EXISTS `cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE IF NOT EXISTS `post_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `created`, `modified`) VALUES
(1, 'News', '2013-12-13 02:32:04', NULL),
(2, 'Promo', '2013-12-13 02:32:04', NULL),
(3, 'Manager', '2013-12-13 02:32:04', NULL),
(4, 'Home Banner', '2014-01-13 07:23:54', NULL),
(5, 'News Banner', '2014-01-13 07:23:54', NULL),
(6, 'Product Banner', '2014-01-13 07:23:55', NULL),
(7, 'Careers', '2017-05-31 13:06:18', '2017-05-31 13:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `post_category_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `image_url` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `slug` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT NULL,
  `startdate` datetime DEFAULT NULL,
  `enddate` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category_id`, `title`, `body`, `created`, `modified`, `image_url`, `slug`, `is_show`, `startdate`, `enddate`) VALUES
(1, 2, 'RAFFLE DRAW WINNERS', '<div class="table"><span>1st Prize</span><span>Alexander Bongo</span><span>(Rajah Motorbike)</span><br />\r\n<span>2nd Prize</span><span>Paraluman Correa</span><span>(Archer Motorbike)</span><br />\r\n<span>3rd Prize</span><span>Jenalyn Sabad</span><span>(15 cu. Ft. Freezer)</span></div>\r\n<br /><br />\r\n<div class="table">\r\n<b>Gift Certificate Winners</b><br /><br />\r\n<span>Alejandro Tudtud</span><span>Lester Casallas</span><br />\r\n<span>Annabelle Dungog</span><span>Mariadelinda Diaz</span><br />\r\n<span>Bonet Rodriguez</span><span>May Salazar</span><br />\r\n<span>Carmen Pagandy</span><span>Nenita Darmail</span><br />\r\n<span>Elmer Nu&ntilde;ez</span><span>Panilag Merlinda</span><br />\r\n<span>Ethni Garsula</span><span>Relna Godinez</span><br />\r\n<span>Gerland Caldaza</span>\r\n<span>Richie Atillo</span><br />\r\n<span>Joemark Mutia</span>\r\n<span>Soriano Jesse</span><br />\r\n<span>Josphine Pastrero</span>\r\n<span>Susan Remedio</span><br />\r\n<span>Kara Redelosa</span>\r\n<span>Tomas Mortorillas</span>\r\n</div><br /><br />\r\n<div class="table">\r\n<b>Sack of Rice Winners</b></span><br />\r\n<span>Analie Tandog</span>\r\n<span>Lynneth Rafil</span><br />\r\n<span>Barbette Blance Agranio</span>\r\n<span>Merdawena Bubuli</span><br />\r\n<span>Carmela Villahermosa</span>\r\n<span>Mery Margaret Young</span><br />\r\n<span>Eduard Vincent Caspe</span>\r\n<span>Nena Empleo</span><br />\r\n<span>Egbert Fajardo</span>\r\n<span>Nieva Fua</span><br />\r\n<span>Erpie Aonor</span>\r\n<span>Olmedo Lorena</span><br />\r\n<span>Fernando Gimena</span>\r\n<span>Pe&ntilde;as Arnold</span><br />\r\n<span>Helnida Yee</span>\r\n<span>Ricardo Legaspi</span><br />\r\n<span>Imelda Baguio</span>\r\n<span>Rolando Lambojon</span><br />\r\n<span>Irene Villoseroz</span>\r\n<span>Russel Bihag</span><br />\r\n<span>Joan Berli Denampo</span>\r\n<span>Silogan Ni Gian</span><br />\r\n<span>Lina Morales</span>\r\n<span>Vicente Mendez</span><br />\r\n<span>Lito Terol</span></div><br /><br />', '2013-12-13 02:32:04', '2015-10-30 00:09:11', 'kqfi_promo01.jpg', 'King''s Quality Foods (Cebu), Inc. December 14, 2013 raffle draw Winners.', 1, NULL, NULL),
(2, 1, 'Announcement', 'Gift Certificate is now Available at KQFI Designated Outlets (Leon Kilat, Fuente, Carbon, Paknaan Mandaue and Tabunok)', '2013-12-13 02:32:04', '2015-10-30 00:09:35', 'kqfi_gc.png', 'Gift Certificate is now Available at KQFI Designated Outlets', 1, NULL, NULL),
(3, 3, 'Manager''s Corner', 'test lang!', '2013-12-13 02:32:04', '2014-09-01 02:50:46', '', '', 1, NULL, NULL),
(4, 4, 'Home Banner 01', 'This shows at home page', '2014-01-13 07:24:22', '2015-11-17 22:02:07', 'web_cover02.png', '', 1, NULL, NULL),
(5, 5, 'News Banner 01', 'This shows at news page', '2014-01-13 07:24:23', '2015-11-27 19:43:46', 'promo-bacon.jpg', '', 1, NULL, NULL),
(6, 5, 'News Banner 02', 'This shows at news page', '2014-01-13 07:24:23', '2015-11-27 22:18:32', 'promo-corned-beef.jpg', '', 1, NULL, NULL),
(7, 5, 'News Banner 03', 'This shows at news page', '2014-01-13 07:24:24', '2015-11-27 22:18:45', 'promo-pina-ham.jpg', '', 1, NULL, NULL),
(8, 5, 'News Banner 04', 'This shows at news page', '2014-01-13 07:24:24', '2015-11-27 22:19:02', 'promo-pork-tocino.jpg', '', 1, NULL, NULL),
(9, 5, 'News Banner 05', 'This shows at news page', '2014-01-13 07:24:24', '2015-11-27 22:19:10', 'banner_page_promotion05.png', '', 0, NULL, NULL),
(10, 6, 'Product Banner 01', 'This shows at products page', '2014-01-13 07:24:25', NULL, 'banner_product01.png', NULL, 1, NULL, NULL),
(11, 4, 'New Outlets 2016', '', '2016-02-04 19:50:28', '2016-02-04 19:50:28', 'web_cover05.png', '', 1, NULL, NULL),
(12, 4, 'Rewards Banner', '', '2016-05-17 00:40:32', '2016-05-17 00:40:32', 'web_cover03.png', '', 1, NULL, NULL),
(13, 4, 'Dealership', '', '2016-05-17 00:53:58', '2016-05-17 00:53:58', 'web_cover04.png', '', 1, '2016-10-05 16:42:00', '2016-10-05 16:42:00'),
(14, 2, 'The King''s Eco Bag Promo', 'The Two (2) Part Mechanics:<br />\r\n	<b>PART I</b>\r\n	<ul>\r\n	<li>This program is open to all King''s Loyalty Card holders.</li>\r\n	<li>On the first purchase of 500.00 pesos, the customer will enjoy the following:</li>\r\n		<ul>\r\n			<li>Free King''s Eco Bag</li>\r\n			<li>Free Loyalty Card</li>\r\n		</ul>\r\n	<li>The customer has to bring the Eco Bag in every purchase to get the items.</li>\r\n	<li>Each Loyalty Card consists of twelve (12) boxes to be stamped.</li>\r\n		<ul>\r\n			<li>In completion of the twelve (12) stamps, \r\n			the customer will get an additional free sample sized - 115 grams Best Choice Longaniza.</li>\r\n		</ul>\r\n	<li>"No Eco Bag, No Free Items" is strictly implemented.</li>\r\n	</ul>\r\n	\r\n	<b>PART II</b>\r\n	<ul>\r\n	<li>This program is open to all King''s Loyalty Card holders with King''s Eco Bag.</li>\r\n	<li>The customer has to bring the Eco Bag in every purchase to get free items.</li>\r\n	<li>Each Loyalty Card consist of twelve (12) boxes to be stamped.</li>\r\n		<ul><li>On the next completion of the twelve (12) stamps, \r\n		the customer will get an additional free sample sized - \r\n		115grams Best Choice Longaniza and 100 grams Chicken Tocino.</li></ul>\r\n	<li>"No Eco Bag, No Free Items" is strictly implemented.</li>\r\n	</ul>', '2016-10-02 01:12:59', '2016-10-02 01:12:59', 'Ads_EcoBag01_2016.png', 'Eco Bag Program', 1, '2016-10-03 00:00:00', '2016-12-16 23:59:00'),
(15, 4, 'Christmas Ham 2016', '', '2016-10-24 08:55:13', '2016-10-24 08:55:13', 'web_christmas2016.png', '', 1, '2016-10-24 08:54:00', '2017-01-31 23:59:00'),
(16, 2, 'Sinulog Sale', '<ol>\r\n<li>BUY 1 GET 1\r\n<ul><li>Every 1 (one) pc purchase of PiÃ±a Ham, Pear Shaped Ham and/or Ball Ham (in any sizes), the customer is entitled to 1 (one) pc of the same product for free.</li></ul>\r\n</li>\r\n<li>Promo is applicable only in all Factory Outlets and supermarkets.</li>\r\n</ol>\r\n', '2017-01-06 09:17:18', '2017-01-06 09:17:18', 'HamsB1T1.png', '', 0, '2017-01-06 08:49:00', '2037-01-06 08:49:00'),
(17, 2, 'Promo Of The Month: March', '<b>Mechanics:</b><br>\r\nFor every Loyalty Rewards Card completed in the month of March 2017,<br>you are entitled to get <b>two(2) Breakfast Hams 250g</b> for <b>FREE</b>.<br>\r\n<em style="color:red;">Valid for walk-in customers only.<br>\r\nPromo is valid for the month of March only.</em>', '2017-03-02 15:08:17', '2017-03-02 15:08:17', 'LoyaltyRewardPoster-PREVIEW.jpg', 'Promo Of The Month', 1, '2017-03-01 00:00:00', '2017-03-31 23:59:00'),
(18, 2, 'Summer Pa-Promo Pa-More 2017', 'â˜€Summer Pa-Raffle Pa-More 2017â˜€<br /><br />\r\n\r\n<b>Mechanics</b><br />\r\n<ol>\r\n<li>Promo is open to all Walk-In customers and dealers</li>\r\n<li>For every Php 1,000.00 purchase, customer entitles to 1 raffle coupon</li>\r\n<li>Raffle draws will be drawn on May 12, 2017 and June 9, 2017</li>\r\n</ol>\r\n<b>Prizes</b><br />\r\nðŸŒŸ 8 units of 7 cu., Haier, Chest Type, Hard Top Freezers - Grand Prize<br />\r\nðŸŒŸ 10 Bags of Ganador Rice (25 kilos each) â€“ 1st Prize<br />\r\nðŸŒŸ 20 Gift Certificates worth 500 pesos each â€“ Consolation Prize<br /><br />\r\n\r\nFor inquiries and bookings, call us at:\r\nðŸ“ Paknaan, Mandaue City, Cebu: (032) 343.7115 to 18; 0923 749 9551; 0932.667.8801; <br />ðŸ“Fuente Outlet: (032) 253.8997; 0922.820.6586<br />\r\nðŸ“Carbon Outlet: 0922.820.6585<br />\r\nðŸ“Leon Kilat Outlet: (032) 256.1360; 0922.820.6584<br />\r\nðŸ“Tabunok Outlet: 0932.630 0830; 0916 219 5562; 0925 506 2538<br />\r\nðŸ“Lapu-Lapu Outlet: 0922.746.9266 <br />\r\nðŸ“Ilo-Ilo Outlet: (0925) 503 0769, (033) 330 2937<br /><br />\r\nðŸ“¦ We ship nationwide!<br /><br />\r\n\r\nDOH-FDA-RFOVII Permit No. 031702 Series 2017', '2017-04-05 19:25:38', '2017-04-05 19:25:38', 'SummerPromo2017.2.0.jpg', '', 1, '2017-04-01 19:22:00', '2017-06-09 23:59:00'),
(19, 1, 'Promo Of The Month: MARCH 2017', 'Promo Of The Month: MARCH 2017\r\n\r\nMechanics:\r\nFor every Loyalty Rewards Card completed in the month of March 2017, you are entitled to get two(2) Breakfast Hams 250g for FREE.\r\nValid for walk-in customers only.', '2017-04-05 19:28:07', '2017-04-05 19:28:07', 'PromoOfTheMonth-March.png', '', 1, '2017-03-01 00:00:00', '2017-03-31 23:59:00'),
(20, 7, 'Marketing Assistant', 'Qualifications:\r\n<ul>\r\n<li>Preferably  a graduate in Marketing or any business related course</li>\r\n<li>Must have at least 2 years working experience in the field is required</li>\r\n<li>Must be detail oriented, organized, and have the ability to manage multiple priorities</li>\r\n<li>Strong verbal and written communication skills</li>\r\n</ul>\r\n', '2017-05-31 13:07:34', '2017-05-31 13:07:34', '', '', 0, '2017-05-31 13:07:00', '2017-05-31 13:07:00'),
(21, 7, 'Programmer / Software Developer', 'Qualifications:\r\n<ul>\r\n<li>At least 3 years programming experience</li>\r\n<li>Preferably with experience in developing and maintaining Web-Based Applications with relational database Systems either from scratch or by existing website/systems.</li>\r\n<li>With strong background knowledge about PHP, Javascript, HTML, CSS, MSSQL, and MySQL.</li>\r\n<li>Strong problem solving skills.</li>\r\n<li>Possess exemplary analytical skills and creativity.</li>\r\n<li>Good understanding of IT infrastructure is required (Windows, Routers, Firewall, Network, Security, etcâ€¦.)</li>\r\n<li>Exposure to POS, Manufacturing, Business Intelligence, MSQL and Crystal Reports is an advantage.</li>\r\n<li>Degree in IT or related disciplines.</li>\r\n<li>Background in Project management is an advantage.</li>\r\n<li>With good interpersonal and communication skills.</li>\r\n</ul>', '2017-05-31 13:08:59', '2017-05-31 13:08:59', '', '', 0, '2017-05-31 13:08:00', '2017-05-31 13:08:00'),
(22, 7, 'Technical Support Engineer', '(IT, NETWORKING, DATA CENTER, SOFTWARE SUPPORT)<br />\r\n\r\nRequirements:\r\n<ul>\r\n<li>Candidate must possess at least a Bachelorâ€™s/College Degree, any field.</li>\r\n<li>Preferably specializing in Cabling, Networking, Technical & Software support or equivalent.</li>\r\n<li>Minimum of 2 years of desktop support experience, diagnosing and troubleshooting hardware, software, printer, PABX, CCTV and network LAN/WAN issues.</li>\r\n<li>Experience Windows 8, Windows 10, Windows Servers 2008 or 2012 installation</li>\r\n<li>Full-Time position</li>\r\n</ul>\r\n\r\nResponsibilities:\r\n<ul>\r\n<li>Installation and configuration of Desktop, Laptops and Printers</li>\r\n<li>Cabling and network support</li>\r\n<li>Procurement (hardware and software)</li>\r\n<li>Pabx installation and configuration</li>\r\n<li>CCTV installation and configuration</li>\r\n<li>Microsoft Navision Support â€“ advantage</li>\r\n<li>Responsible for daily backup</li>\r\n<li>Server Management</li>\r\n</ul>', '2017-05-31 15:07:46', '2017-05-31 15:07:46', '', '', 1, '2017-05-31 15:04:00', '2017-05-31 15:04:00'),
(23, 7, 'Sales and Marketing Manager', '<div>Job Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; The Sales and Marketing Manager is responsible for the planning and implementation of sales strategies to achieve sales target. He/She should also accomplish business development activities by researching and developing marketing opportunities that aims to grow the business.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>Essential Functions&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>\r\n\r\n<ol>\r\n	<li>Develops and implements strategic sales and marketing plans and forecasts to achieve corporate objectives / targets;</li>\r\n	<li>Develops and manages sales / marketing operating budgets;</li>\r\n	<li>Develops and recommends product positioning and pricing strategy to produce the highest possible long-term market share;</li>\r\n	<li>Lead and schedule weekly and/or monthly meetings with sales team and managing director;</li>\r\n	<li>Directs sales forecasting activities and sets performance goals accordingly;</li>\r\n	<li>Meets with key clients, assisting sales representative with maintaining relationships and negotiating and closing deals;</li>\r\n	<li>Prepares periodic sales report showing sales volume, potential sales, and areas of proposed client base expansion;</li>\r\n	<li>Day to day management of the sales team ensuring they are on track for achieving KPIs / targets;</li>\r\n	<li>Training the sales team on sales techniques and giving advice;</li>\r\n	<li>Reviews and analyzes sales performances against plans, programs and promotions to determines effectiveness.</li>\r\n</ol>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>Background and Qualifications:</div>\r\n\r\n<ul>\r\n	<li>Sales and marketing experience gained from FMCG industry is an advantage</li>\r\n	<li>Excellent motivational and leadership skills to inspire performance</li>\r\n	<li>Must possess at least Bachelor&rsquo;s / College Degree in Accountancy, Business Management, Marketing, Industrial Engineering or equivalent</li>\r\n	<li>Proven track record in handling dynamic sales force</li>\r\n	<li>Excellent data analysis and reporting skills</li>\r\n	<li>Exceptional written and verbal communications skills</li>\r\n</ul>\r\n', '2017-05-31 15:09:54', '2017-05-31 15:09:54', '', '', 0, '2017-05-31 15:08:00', '2017-05-31 15:08:00'),
(24, 7, 'Accountant', '<div>Job Description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</div><ul><li>To provide monthly Financial Statement reports every 15th&nbsp;of the succeeding month and provide highlights on the Financial Statement reports</li><li>To oversee daily accounting transactions</li><li>Facilitate month-end closing of books of account</li><li>Provide weekly accounting updates/ concerns for Finance Manager</li><li>Ensure 100% implementation of accounting policies and procedures</li><li>Provide performance appraisal for accounting personnel</li><li>Recommend trainings and seminars for his/her subordinates (continuing professional education)</li><li>To provide assistance to Finance Manager</li></ul><div>&nbsp;</div><div>Qualification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</div><ul><li>A graduate of Bachelor of Science in Accountancy of Management Accounting</li><li>Preferably a Certified Public Accountant (CPA)</li><li>With at least 3 years work experience as an accountant</li><li>Keen on details</li><li>Highly analytical</li><li>Knowledgeable in Microsoft Office applications</li><li>Proficient in oral and written communication</li></ul><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div></div> </div>\r\n					</div>', '2017-05-31 15:11:13', '2017-05-31 15:11:13', '', '', 0, '2017-05-31 15:10:00', '2017-05-31 15:10:00'),
(25, 7, 'HR Officer', '<div>\r\n<div>Qualifications:</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<ul>\r\n	<li>Must be a graduate of BS / AB Psychology &nbsp;or BSBA Major in HRDM</li>\r\n	<li>At least 3 â€“ 5 year working experience</li>\r\n	<li>&nbsp;Must be knowledgeable in Recruitment, Compensation and Benefits, Employee Relations, Computation of Government Remittances, and other&nbsp;<strong>HR</strong>&nbsp;functions</li>\r\n</ul>\r\n\r\n<div>\r\n<ul>\r\n	<li>Has a strong interpersonal skills and can work well in a diverse working environment</li>\r\n	<li>With excellent oral and written communication skills</li>\r\n	<li>&nbsp;Computer literate and can operate MS Office applications</li>\r\n	<li>Be able to work accurately, with strong attention to details.</li>\r\n</ul>\r\n</div>\r\n</div>', '2017-05-31 15:12:39', '2017-05-31 15:12:39', '', '', 0, '2017-05-31 15:11:00', '2017-05-31 15:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `settings` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `url`, `created`, `modified`, `is_active`, `sequence`, `settings`) VALUES
(1, 'Hams', 'menuboard/mb_03.jpg', '2013-12-13 02:32:04', '2015-11-28 00:08:43', 1, 3, '981,0,1366,478'),
(2, 'Sausages', 'menuboard/mb_01.jpg', '2013-12-13 02:32:04', '2015-11-28 00:09:05', 1, 1, '0,0,425,350'),
(3, 'Cold Cuts', 'menuboard/mb_04.jpg', '2013-12-13 02:32:04', '2015-11-28 00:09:15', 1, 4, '0,350,425,700'),
(4, 'Patties', 'menuboard/mb_05.jpg', '2013-12-13 02:32:04', '2014-06-04 00:43:23', 1, 5, '0,350,578,700'),
(5, 'Dried Products', 'menuboard/mb_06.jpg', '2013-12-13 02:32:04', '2015-11-28 00:09:37', 1, 6, '0,350,737,700'),
(6, 'IQF Products', 'menuboard/mb_07.jpg', '2013-12-13 02:32:04', '2015-11-28 00:09:46', 1, 7, '0,350,980,700'),
(7, 'Christmas Hams', 'prodcat-christmashams.jpg', '2013-12-16 06:41:21', '2015-11-28 00:09:57', 0, 10, ''),
(8, 'Hotdogs', 'menuboard/mb_02.jpg', '2015-12-16 00:00:00', NULL, 1, 2, '425,0,703,350'),
(9, 'Bacons', 'prodcat-bacons.jpg', NULL, '2016-01-13 02:42:28', 0, 45, '292,539,590,980');

-- --------------------------------------------------------

--
-- Table structure for table `product_packages`
--

CREATE TABLE IF NOT EXISTS `product_packages` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `remarks` varchar(128) DEFAULT NULL,
  `quantity` decimal(18,9) DEFAULT NULL,
  `quantity_unit` varchar(10) DEFAULT NULL,
  `price` decimal(18,9) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

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
(12, 1, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:24', NULL),
(13, 2, '27-28 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:24', NULL),
(14, 2, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:24', NULL),
(15, 3, '30 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:25', NULL),
(16, 3, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:25', NULL),
(17, 4, '20 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:25', NULL),
(18, 4, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:25', NULL),
(19, 5, '36-38 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:26', NULL),
(20, 5, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:26', NULL),
(21, 10, '40 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:26', NULL),
(22, 10, '10 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:26', NULL),
(23, 11, '40 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:26', NULL),
(24, 11, '8 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:27', NULL),
(25, 12, '42-44 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:27', NULL),
(26, 12, '10 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:27', NULL),
(27, 13, '25 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:27', NULL),
(28, 13, '5 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:27', NULL),
(29, 14, '25 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:28', NULL),
(30, 14, '5 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:28', NULL),
(31, 15, '52-53 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:28', NULL),
(32, 15, '12 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:28', NULL),
(33, 16, '25 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:29', NULL),
(34, 16, '6 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:29', NULL),
(35, 17, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:29', NULL),
(37, 18, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:29', NULL),
(38, 18, '-', '200.000000000', 'grams', NULL, '2013-12-26 04:49:30', NULL),
(39, 19, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:30', NULL),
(40, 19, '-', '200.000000000', 'grams', NULL, '2013-12-26 04:49:30', NULL),
(41, 20, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:30', NULL),
(42, 20, '-', '225.000000000', 'grams', NULL, '2013-12-26 04:49:30', NULL),
(43, 21, '50 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:31', NULL),
(44, 21, '10 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:31', NULL),
(45, 21, '8 pieces', '160.000000000', 'grams', NULL, '2013-12-26 04:49:31', NULL),
(46, 22, '50 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:31', NULL),
(47, 22, '10 pieces', '200.000000000', 'grams', NULL, '2013-12-26 04:49:31', NULL),
(48, 23, '-', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:32', NULL),
(49, 23, '-', '200.000000000', 'grams', NULL, '2013-12-26 04:49:32', NULL),
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
(60, 29, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:34', NULL),
(61, 30, '32 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:35', NULL),
(62, 30, '8 pieces', '225.000000000', 'grams', NULL, '2013-12-26 04:49:35', NULL),
(63, 31, '12 pieces', '250.000000000', 'grams', NULL, '2013-12-26 04:49:35', NULL),
(64, 32, '13 pcs regular, 6 pcs Jum', '250.000000000', 'grams', NULL, '2013-12-26 04:49:35', NULL),
(65, 33, '8 pieces', '1.000000000', 'kilograms', NULL, '2013-12-26 04:49:35', NULL),
(66, 34, '8 pieces', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(67, 35, '', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(68, 36, '', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(69, 37, '12 pieces', '255.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(70, 38, '8 pieces', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(71, 39, '8 pieces', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(72, 40, '', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(73, 40, '', '150.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(74, 41, '6 pieces', '250.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(75, 42, '', '40.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(76, 43, '25 pieces', '1.000000000', 'kilograms', NULL, '2015-12-16 00:00:00', NULL),
(77, 43, '5 pieces', '200.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL),
(78, 44, '5 pieces', '230.000000000', 'grams', NULL, '2015-12-16 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `url` varchar(128) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `title`, `description`, `url`, `created`, `modified`, `is_active`, `sequence`) VALUES
(1, 1, 'Chicken Ham', 'Pink moulded ham in emulsion form, seasoned with spices to give a delicate chicken ham flavor.', 'Chicken-Ham.jpg', '2013-12-13 02:32:04', '2016-01-07 03:30:55', 1, 99),
(2, 1, 'Cooked Ham', 'Pinkish red moulded ham in semi-emulsion form, cured and seasoned with spices to give delicate ham flavor.', 'Cooked-Ham.jpg', '2013-12-13 02:32:04', '2016-01-07 03:31:05', 1, 99),
(3, 1, 'Luncheon Meat', 'Light pink semi-emulsified product,seasoned with spices to give a pleasing aroma and taste.', 'Luncheon-Meat-225g.jpg', '2013-12-13 02:32:04', '2016-01-07 03:31:16', 1, 99),
(4, 1, 'Meat Loaf', 'Pink semi-emulsified product, seasoned with spices to give pleasing aroma and taste.', 'Meat-Loaf.jpg', '2013-12-13 02:32:04', '2016-01-07 03:31:25', 0, 99),
(5, 1, 'Spiced Ham', 'Brigth pinkish red semi-emulsified product,seasoned with a distinct spicy flavored and molded into square loaf and sliced uniformly.', 'Spiced-Ham.jpg', '2013-12-13 02:32:04', '2016-01-07 03:31:34', 0, 99),
(6, 7, 'Pi&ntilde;a Ham', 'Rounded whole musscle hams with brown to golden brown colors, cured and seasoned with spices to give a delicate ham and  pineapple flavor.', NULL, '2013-12-16 06:42:24', NULL, 1, 99),
(7, 7, 'Pear Shaped Ham', 'Pinkish molded ham in semi-emulsion form cured and seasoned with spices to give delicate ham flavor.', 'pearshapedham.jpg', '2013-12-16 06:42:25', NULL, 1, 99),
(8, 7, 'Chinese Ham', 'Brown colored ham in whole cut or mini-cut ham legs,cured with salt and seasoned with spices to give delicate ham flavor', NULL, '2013-12-16 06:43:53', NULL, 1, 99),
(9, 7, 'Ball Ham', 'Round ham in semi-emulsion form cured and seasoned with spices to give delicate ham flavor.', NULL, '2013-12-26 04:48:42', NULL, 1, 99),
(10, 2, 'Chorizo Cebuano', 'Pinkish red semi-emulsified product, seasoned with a distinct sweet and spicy flavor', 'Chorizo-Cebuano.jpg', '2013-12-26 04:48:44', '2016-01-07 02:39:59', 1, 99),
(11, 2, 'Chorizo Pinoy', 'Orange brown with very few fine dark speckles, semi-emulsified meat.', 'Chorizo-Pinoy.jpg', '2013-12-26 04:48:44', '2016-01-07 02:40:19', 1, 99),
(12, 2, 'Longaniza Hamonada', 'Light brown,semi-emulsified meat,spiced,stuffed and smoked in an edible collagen casing.', 'Longaniza.jpg', '2013-12-26 04:48:44', '2016-01-07 02:40:34', 1, 99),
(14, 8, 'Hotdog Franks', 'Light pinkish brown emulsion seasoned with spices,stuffed in clear cellulose casing.', 'hotdog-franks.jpg', '2013-12-26 04:48:44', '2016-01-13 19:40:05', 0, 99),
(15, 8, 'Royal Hotdog', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', 'Royal Hotdog Regular.jpg', '2013-12-26 04:48:45', '2016-01-07 19:01:37', 1, 99),
(16, 8, 'Royal Hotdog Jumbo', 'Cherry red emulsified,stuffed in a cellulose red casing with spicy flavor and with a pleasing smoky odor.', 'Royal-Hotdog-Jumbo.jpg', '2013-12-26 04:48:45', '2016-01-07 19:02:31', 1, 99),
(17, 3, 'Bacon Premium', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', 'bacon-premium.jpg', '2013-12-26 04:48:45', '2016-01-13 03:08:32', 1, 99),
(18, 3, 'Bacon Regular', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', 'Kings-Bacon-Regular-1kg.jpg', '2013-12-26 04:48:45', '2016-01-07 19:46:51', 1, 99),
(19, 3, 'Bacon Bits', 'Pinkish red colored thin strips of pork belly with lean and fat in right proportion.', 'Kings-Bacon-Bits-1kg.jpg', '2013-12-26 04:48:45', '2016-01-07 19:46:38', 1, 99),
(20, 3, 'Corned Beef', 'Strips of cured and pleasingly seasoned beef,purplish red in color and pack in thin slices.', 'Kings-Premium-Corned-Beef-FA-(152-x180mm)-gen2.jpg', '2013-12-26 04:48:46', '2016-01-07 19:46:03', 1, 99),
(21, 6, 'Lumpia Shanghai', 'Ground pork seasoned with spices,rolled with off white lumpia wrapper.', 'IQF-Lumpia-Shanghai.jpg', '2013-12-26 04:48:46', '2016-01-11 23:36:13', 1, 99),
(23, 3, 'Pork Tocino', 'Orange red, thinly sliced premium pork cured and seasoned to attain a pleasing distinct spicy flavor.', 'Pork-Tocino.jpg', '2013-12-26 04:48:46', '2016-01-07 19:47:32', 1, 99),
(26, 5, 'Chorizo Macao Original', 'Reddish brown to brown dried sausage,cured and seasoned with spices.', 'Chorizo-Macao.jpg', '2013-12-26 04:48:47', '2016-01-07 22:01:45', 1, 99),
(27, 5, 'Beef Tapa', 'Thin dried sheets of beef lean, reddish brown in color, cured and seasoned with spices and condiments.', 'Kings Beef Tapa 100g.jpg', '2013-12-26 04:48:47', '2015-12-01 01:28:15', 1, 99),
(28, 5, 'Pork Tapa', 'Thin dried sheets of pork lean, reddish brown in color, cured and seasoned with spices and condiments.', 'Kings-Pork-Tapa-80g.jpg', '2013-12-26 04:48:47', '2016-01-07 22:02:17', 1, 99),
(29, 4, 'Chicken Burger', 'Yellowish to light brown circular mixed ground chicken with spices to give a chicken taste and aroma.', 'Chicken-Burger.jpg', '2013-12-26 04:48:48', '2016-01-13 04:24:22', 0, 99),
(30, 4, 'Hamburger Patties', 'Ligth brown circular mixed gorund meat with spices to give a meaty spicy taste and aroma.', 'Burger-Steak.jpg', '2013-12-26 04:48:48', '2016-01-13 04:24:44', 1, 99),
(34, 2, 'BBQ Chorizo Pinoy', '', 'BBQ Chorizo Pinoy 200g.jpg', '2015-12-16 00:00:00', '2016-01-07 02:40:53', 1, NULL),
(35, 3, 'Bacon Honeycured', '', 'Kings-Honeycured-Bacon-2.jpg', '2015-12-16 00:00:00', '2016-01-07 19:49:06', 1, NULL),
(37, 6, 'Longaniza', '', 'IQF-Longaniza.jpg', '2015-12-16 00:00:00', '2016-01-07 22:12:00', 1, NULL),
(38, 6, 'Cooked Ham', '', 'IQF-Cooked-Ham.jpg', '2015-12-16 00:00:00', '2016-01-07 22:12:19', 1, NULL),
(39, 6, 'Cooked Ham Bilog', NULL, NULL, '2015-12-16 00:00:00', NULL, 1, NULL),
(40, 6, 'Pork Tocino', '', 'IQF-Pork-Tocino.jpg', '2015-12-16 00:00:00', '2016-01-07 22:12:33', 1, NULL),
(43, 8, 'Chicken Hotdog', '', 'Chicken-Hotdog.jpg', '2015-12-16 00:00:00', '2016-01-07 19:00:15', 1, NULL),
(44, 8, 'Premium Hotdog Jumbo', '', 'Premium-Hotdog-Jumbo.jpg', '2015-12-16 00:00:00', '2016-01-07 19:03:22', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `last_login` datetime DEFAULT '0000-00-00 00:00:00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `last_login`, `created`, `modified`) VALUES
(1, 'admin', 'a8c9ba33cb0f8f52aaa4cc2e085235db', '2017-10-03 10:59:18', '2014-01-13 07:32:09', '2017-10-03 10:59:18'),
(2, 'rkhe', '11f2a09b333b50a8af62be56e6737263', '0000-00-00 00:00:00', '2014-01-13 07:32:09', NULL),
(3, NULL, NULL, '2015-07-06 17:41:39', '2015-07-06 17:41:39', '2015-07-06 17:41:39'),
(4, NULL, NULL, '2015-10-18 09:09:17', '2015-10-18 09:09:17', '2015-10-18 09:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_sessions`
--
ALTER TABLE `cake_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`), ADD KEY `post_category_id` (`post_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_packages`
--
ALTER TABLE `product_packages`
  ADD PRIMARY KEY (`id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`), ADD KEY `product_category_id` (`product_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_packages`
--
ALTER TABLE `product_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
