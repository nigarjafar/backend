-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 06:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startuply`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(2) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nameblue` varchar(100) NOT NULL,
  `subtitle` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `nameblue`, `subtitle`, `text`) VALUES
(1, 'FOR EVERY', 'Startup', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrhsdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(2, 'NEW AGE ', 'TECHNOLOGY', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrhsdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(3, 'NEW AGE ', 'TECHNOLOGY', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrhsdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.'),
(4, 'HANG ON TO', ' YER HELMET', 'Lorem ipsum dolor sit atmet sit dolor greand fdanrhsdfs sit atmet sit dolor greand fdanrh sdfs', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.');

-- --------------------------------------------------------

--
-- Table structure for table `about3tab`
--

CREATE TABLE `about3tab` (
  `id` int(1) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about3tab`
--

INSERT INTO `about3tab` (`id`, `icon`, `name`, `text`) VALUES
(1, 'newspaper-o', 'Place orders', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(2, 'cogs', 'our system runs', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(3, 'calendar-check-o', 'RECEIVE REPORT', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.');

-- --------------------------------------------------------

--
-- Table structure for table `editcontact`
--

CREATE TABLE `editcontact` (
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `editcontact`
--

INSERT INTO `editcontact` (`mail`, `place`, `phone`) VALUES
('info@startup.ly', '2901 Marmora road, Glassgow, Seattle, WA 98122-109', '1 - 234-456-7980');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `heading`, `text`) VALUES
(1, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(4, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(5, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(6, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(9, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(10, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(11, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(12, 'cloud-download', 'Feature', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.');

-- --------------------------------------------------------

--
-- Table structure for table `featureslider`
--

CREATE TABLE `featureslider` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `featureslider`
--

INSERT INTO `featureslider` (`id`, `name`, `text`) VALUES
(1, 'Feature 1', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.'),
(2, 'Lorem ipsum 2', 'Lorem ipsum dolor si amet '),
(3, 'Lorem ipsum 3', 'Lorem ipsum dolor si amet ');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(1) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `img`) VALUES
(1, 'assets/img/logos/30082016235507.png'),
(2, 'assets/img/logos/logo-1.png'),
(3, 'assets/img/logos/logo-1.png'),
(4, 'assets/img/logos/logo-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(4) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `category`) VALUES
(1, 'Feature', 'http://www.facebook.com', 'main'),
(4, 'Quotes', 'http://www.yahoo.com', 'main'),
(5, 'Contact', 'http://www.google.com', 'main'),
(9, 'sd', 'sdg', 'sdg');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `per` varchar(30) NOT NULL,
  `attr1` varchar(50) NOT NULL,
  `feature1` varchar(50) NOT NULL,
  `attr2` varchar(50) NOT NULL,
  `feature2` varchar(50) NOT NULL,
  `attr3` varchar(50) NOT NULL,
  `feature3` varchar(50) NOT NULL,
  `attr4` varchar(50) NOT NULL,
  `feature4` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `name`, `price`, `per`, `attr1`, `feature1`, `attr2`, `feature2`, `attr3`, `feature3`, `attr4`, `feature4`, `type`) VALUES
(1, 'Individual', 19, 'per month', 'Free', 'Domain', 'Unlimited', 'Websites', 'Unlimited', 'Bandwidth', 'Unlimited', 'Disk Space', 'disabled'),
(2, 'Studio', 29, 'SUBSCRIPTION', 'Free', 'Domain', 'Unlimited', 'Websites', 'Unlimited', 'Bandwidth', 'Unlimited', 'Disk space', ''),
(3, 'Enterprise', 49, 'per month', 'Free', 'Domain', 'Unlimited', 'Websites', 'Unlimited', 'Bandwidth', 'Unlimited', 'Disk space', '');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `workplace` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `quote` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `job`, `workplace`, `quote`, `img`) VALUES
(1, 'Nigar Jafaro', 'Student', 'Code Academy', ' CLIENT 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.', 'assets/img/people/30082016222945.jpg'),
(2, 'Chingiz', 'Accountant', 'Vell Inc', 'CLIENT 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.', 'assets/img/people/30082016235737.jpg'),
(3, 'Peter Moosome', 'Marketing VP', 'Footbook', 'CLIENT 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.', 'assets/img/people/3008201692358.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(3) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `mail`) VALUES
(1, 'ali', 'alixalilzade@gmail.c'),
(2, 'sd', 'cvxl'),
(3, 'fv', 'cv'),
(4, 'ali', 'xalilzade'),
(5, 'sdc', 'alixalilzade@gmail.c'),
(6, 'sdlf', 'alixalilzade@gmail.c'),
(7, 'sdlf', 'alixalilzade@gmail.c'),
(8, 'adsgasdg', 'sadgsdag'),
(9, 'asgsfag', 'asfgsfaga'),
(10, 'Nigar', 'nigar@mail.ru'),
(11, 'Nigar', 'nigar@mail.ru');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `envelope-o` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `img`, `text`, `envelope-o`, `facebook`, `twitter`, `linkedin`, `skype`) VALUES
(1, 'Ali', 'Developer', 'assets/img/people/30082016234636.jpg', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.', 'https://mail.ru', 'https://facebook.com', 'https://twitter.com', 'https://linkedin.com', 'https://skype.com'),
(2, 'Nigar', 'Engineer', 'assets/img/people/30082016235709.jpg', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.', 'https://mail.google.com', 'https://www.facebook.com/', '', '', ''),
(3, 'Mike', 'Developer', 'assets/img/people/30082016222841.jpg', 'Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.', 'gmail.com', 'https://www.facebook.com/', '', '', 'https://www.skype.com/'),
(4, 'MIKE BOLDER', 'Developer', 'assets/img/people/team-1.jpg', 'Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.', 'hdhsdasdj', '', 'https://twitter.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about3tab`
--
ALTER TABLE `about3tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureslider`
--
ALTER TABLE `featureslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `about3tab`
--
ALTER TABLE `about3tab`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `featureslider`
--
ALTER TABLE `featureslider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
