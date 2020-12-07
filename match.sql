-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 07, 2020 at 07:39 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `match`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_confirmation`
--

CREATE TABLE `age_confirmation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img_body` text NOT NULL,
  `date` datetime NOT NULL,
  `flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `age_confirmation`
--

INSERT INTO `age_confirmation` (`id`, `user_id`, `img_body`, `date`, `flag`) VALUES
(8, 1, '1584885153.png', '0000-00-00 00:00:00', 2),
(9, 2, '1585006524.png', '0000-00-00 00:00:00', 2),
(17, 14, '1586607585.png', '0000-00-00 00:00:00', 2),
(18, 15, '1588342098.png', '0000-00-00 00:00:00', 3),
(21, 5, '1588926344.png', '0000-00-00 00:00:00', 2),
(22, 4, '1588926531.png', '0000-00-00 00:00:00', 2),
(23, 10, '1589096651.png', '0000-00-00 00:00:00', 1),
(24, 0, '1589096651.png', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `common_information`
--

CREATE TABLE `common_information` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `time` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_information`
--

INSERT INTO `common_information` (`id`, `title`, `body`, `time`, `user_id`) VALUES
(3, 'ご登録ありがとうございます。', 'はじめまして。\r\nこちらはe-dea運営部です。\r\nさて、e-deaの使い方について簡単にご説明したいと思います。。。。', '0000-00-00', 0),
(4, '注意（身の安全のために）', 'こんにちは。\r\nこちらはe-dea運営部です。\r\n最近、マッチングサイトで風紀を乱す言動をされる会員様が見られます。', '0000-00-00', 0),
(5, 'みんな頑張ってちぃ', 'うぇーい。\r\nカスどもに朗報だ。\r\n\r\n頑張れよ！', '0000-00-00', 0),
(9, 'メッセージ機能について', 'ただいま、メンテナンス中で問題が見つかり次第アップデートしていきます。\r\n\r\nご指摘ありがとうございました。', '0000-00-00', 1),
(10, '？', 'もう少し詳しくお願いいたします。', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(8) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `date`) VALUES
(1, '2020-02-29 03:36:26'),
(2, '2020-03-02 02:24:53'),
(3, '0000-00-00 00:00:00'),
(4, '0000-00-00 00:00:00'),
(5, '0000-00-00 00:00:00'),
(6, '0000-00-00 00:00:00'),
(7, '0000-00-00 00:00:00'),
(8, '0000-00-00 00:00:00'),
(9, '0000-00-00 00:00:00'),
(10, '0000-00-00 00:00:00'),
(11, '0000-00-00 00:00:00'),
(12, '0000-00-00 00:00:00'),
(13, '0000-00-00 00:00:00'),
(14, '0000-00-00 00:00:00'),
(15, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `conversations_members`
--

CREATE TABLE `conversations_members` (
  `conversation_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `opponent_id` int(11) NOT NULL,
  `conversation_last_view` int(10) NOT NULL,
  `conversation_deleted` int(1) NOT NULL,
  `conversation_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversations_members`
--

INSERT INTO `conversations_members` (`conversation_id`, `user_id`, `opponent_id`, `conversation_last_view`, `conversation_deleted`, `conversation_flag`) VALUES
(1, 1, 2, 1607326573, 0, 1),
(1, 2, 1, 1599217227, 0, 1),
(2, 1, 5, 1607326258, 0, 1),
(2, 5, 1, 1588926389, 0, 1),
(8, 2, 13, 1588999545, 0, 0),
(8, 13, 2, 1585965835, 0, 0),
(9, 2, 7, 1599216677, 1, 1),
(9, 7, 2, 1585964126, 0, 1),
(10, 2, 13, 1599216680, 0, 1),
(10, 13, 2, 1585965840, 1, 1),
(11, 1, 14, 1607326521, 0, 0),
(11, 14, 1, 1587542934, 0, 1),
(12, 1, 15, 1607260046, 0, 1),
(12, 15, 1, 1588342967, 0, 1),
(13, 1, 3, 1588920629, 1, 1),
(13, 3, 1, 1588918717, 0, 1),
(14, 1, 1, 1607232281, 1, 1),
(15, 4, 5, 1588932375, 0, 0),
(15, 5, 4, 1588932345, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversations_messages`
--

CREATE TABLE `conversations_messages` (
  `message_id` int(10) NOT NULL,
  `conversation_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `message_date` int(10) NOT NULL,
  `message_text` text NOT NULL,
  `reload_flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversations_messages`
--

INSERT INTO `conversations_messages` (`message_id`, `conversation_id`, `user_id`, `message_date`, `message_text`, `reload_flag`) VALUES
(645, 1, 1, 1582943786, 'ã¯ã˜ã‚ã¾ã—ã¦ï¼', 0),
(646, 1, 2, 1582984394, 'ã‚ˆã‚ã—ããŠé¡˜ã„ã„ãŸã—ã¾ã™ï¼', 0),
(647, 1, 1, 1583061072, 'ã“ã¡ã‚‰ã“ãï¼', 0),
(648, 2, 1, 1583112293, 'ã¯ã˜ã‚ã¾ã—ã¦ï¼', 0),
(649, 1, 2, 1583213006, 'ã‚', 0),
(650, 2, 1, 1583350411, 'ãƒ†ã‚¹ãƒˆ\r\n', 0),
(651, 1, 1, 1583578438, 'ã„', 0),
(652, 2, 1, 1583578447, 'ä¸ŠðŸ‘†', 0),
(653, 2, 1, 1583578450, 'ãã‚‰ã„ã«', 0),
(654, 2, 1, 1583593484, 'konntya-\r\n', 0),
(655, 2, 1, 1583595528, 'ã‚\r\n', 0),
(656, 2, 1, 1583595532, 'ã‚', 0),
(657, 2, 1, 1583595536, 'ã‚', 0),
(658, 2, 1, 1583595539, 'ã‚', 0),
(659, 2, 1, 1583595543, 'ã‚', 0),
(660, 2, 1, 1583595547, 'ã‚', 0),
(661, 2, 1, 1583595550, 'ã‚', 0),
(662, 2, 1, 1583595578, 'ã‚', 0),
(663, 2, 1, 1583659391, 'ã‚ã‚Œã‚Œå›²ã¿ãŒãŠã‹ã—ã„ã€‚', 0),
(664, 2, 1, 1583659397, 'ã‚ã‚Œã‚Œå›²ã¿ãŒãŠã‹ã—ã„ã€‚', 0),
(665, 2, 1, 1583659412, 'ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚ã‚', 0),
(666, 1, 2, 1583676723, 'å‡„ã„ã§ã™ã­ï¼', 0),
(667, 1, 1, 1584196452, 'ã„ãˆã„ãˆï¼å¤§ã—ãŸã“ã¨ãªã„ã§ã™ã€‚\\r\\n', 0),
(668, 1, 1, 1584196478, 'ä»Šæ—¥ã¯ä½•ã•ã‚Œã¦ã‚‹ã‚“ã§ã™ã‹ï¼Ÿ', 0),
(669, 1, 1, 1584196487, 'ã‚ã‚ã‚ã‚ã”ã–ã„ã¾ã—ãŸãã ã•ã„ã‹!ã‹ã€‚ã‹ãã ã•ã„ä¸‹ã•ã„ã‹ã‹ãã ã•ã„', 0),
(670, 1, 1, 1584599522, 'あｑ', 0),
(671, 1, 1, 1585325721, 'う逸す', 0),
(672, 2, 1, 1585325735, 'うぇい', 0),
(673, 1, 2, 1585327631, 'は?', 0),
(674, 1, 2, 1585743574, 'あいうえお', 0),
(675, 8, 13, 1585923338, 'uuu', 0),
(676, 9, 2, 1585964127, 'a', 0),
(677, 10, 13, 1585965804, 'aa', 0),
(678, 11, 1, 1586606823, '初めまして！', 0),
(679, 11, 14, 1586607844, 'はじめまして！', 0),
(680, 11, 14, 1586607853, 'よろしくお願いいたします。', 0),
(681, 11, 1, 1586607875, 'こちらこそ！', 0),
(682, 11, 1, 1586607904, 'コロナ大変ですねぇ', 0),
(683, 11, 14, 1586607916, 'あ', 0),
(684, 11, 14, 1586607928, 'フェレイラ', 0),
(685, 11, 1, 1586607960, 'おかしいですね', 0),
(686, 11, 14, 1586607989, 'ですねえ', 0),
(687, 11, 1, 1587527595, 'あああ', 0),
(688, 1, 2, 1587527961, 'hello', 0),
(689, 1, 1, 1587527975, 'ok\\r\\n', 0),
(690, 1, 2, 1587528005, 'away', 0),
(691, 1, 2, 1587528031, 'あ\\r\\n', 0),
(692, 1, 2, 1587530653, 'あささ', 0),
(693, 1, 2, 1587530682, 'abc', 0),
(694, 1, 2, 1587530761, 'a', 0),
(695, 1, 2, 1587532311, 'a', 0),
(696, 1, 2, 1587532311, 'a', 0),
(697, 1, 2, 1587532323, 'a', 0),
(698, 1, 2, 1587532480, 'a', 0),
(699, 1, 2, 1587534161, 'a', 0),
(700, 1, 2, 1587534253, 'a', 0),
(701, 1, 2, 1587534267, 'kaka\\r\\n', 0),
(702, 1, 2, 1587534415, 'aas', 0),
(703, 1, 2, 1587534419, 'sa', 0),
(704, 1, 2, 1587534424, 'gf', 0),
(705, 1, 2, 1587534424, 'gf', 0),
(706, 1, 2, 1587534772, 'a', 0),
(707, 1, 2, 1587534780, 'dsd', 0),
(708, 1, 2, 1587534780, 'dsd', 0),
(709, 1, 1, 1587534828, 'f', 0),
(710, 1, 1, 1587534859, 's', 0),
(711, 1, 1, 1587535212, 's', 0),
(712, 11, 14, 1587535312, 'a', 0),
(713, 11, 1, 1587535351, 'j', 0),
(714, 11, 14, 1587535408, 'a', 0),
(715, 11, 14, 1587535424, 'sd', 0),
(716, 11, 14, 1587542670, 'a', 0),
(717, 11, 14, 1587542796, 'a', 0),
(718, 11, 14, 1587542825, 'a', 0),
(719, 11, 14, 1587542900, 'a', 0),
(720, 11, 14, 1587542934, '4', 0),
(721, 1, 2, 1587542993, 'a', 0),
(722, 1, 2, 1587543025, 'y', 0),
(723, 1, 1, 1587543287, 'a', 0),
(724, 1, 1, 1587543320, 'a', 0),
(725, 1, 1, 1587543327, 'as', 0),
(726, 1, 1, 1587543519, 'as', 0),
(727, 1, 1, 1587544160, 'aa', 0),
(728, 1, 1, 1587544174, 'うぇーい', 0),
(729, 1, 1, 1587544219, 'うぇーい', 0),
(730, 1, 1, 1587544540, 'あ', 0),
(731, 1, 1, 1587544548, 'ありがとうございます。', 0),
(732, 1, 1, 1587544565, 'おおおお', 0),
(733, 1, 2, 1587544574, 'aaaaa', 0),
(734, 1, 1, 1587544611, 'あ\\r\\n', 0),
(735, 1, 1, 1587544968, 'ありがとうございます。', 0),
(736, 1, 1, 1587545050, 'あ', 0),
(737, 1, 2, 1587545055, 'wei', 0),
(738, 11, 1, 1588077392, 'hey', 0),
(739, 1, 1, 1588159821, 'thank you for sending me message.', 0),
(740, 12, 1, 1588162635, 'fdf', 0),
(741, 1, 2, 1588836291, 'hello', 0),
(742, 1, 1, 1588836298, 'hey', 0),
(743, 1, 2, 1588836322, 'what are you doing now ?', 0),
(744, 13, 1, 1588918718, '-deaは外国人との交流を目的とした国際交流マッチングサイトです。\r\n用途ですが日本在住の外国人との友人作りや言語学習のためのツールとしてもご利用いただけます。費用は広告制を採用しているため利用者にはかかりません。', 0),
(745, 13, 1, 1588919732, 'aaaa\\r\\naaa', 0),
(746, 14, 1, 1588919962, 'hello!\r\nnice to meet you!', 0),
(747, 14, 1, 1588920871, 'aaa\r\naaa', 0),
(748, 15, 5, 1588926429, 'Hello!\r\nNice to meet you~', 0),
(749, 15, 4, 1588926625, 'Hello !\r\nI\'m happy to meet you!', 0),
(750, 10, 2, 1588999607, 'a\r\na', 0),
(751, 12, 1, 1589085037, 'hello!', 0),
(752, 1, 2, 1589096770, 'hey', 0),
(753, 9, 2, 1589096784, 'hello!', 0),
(754, 9, 2, 1599216677, 'Hello', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(11) NOT NULL,
  `hobby_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flag` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `hobby_id`, `user_id`, `flag`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 5, 1, 0),
(5, 6, 1, 0),
(6, 1, 2, 1),
(7, 2, 2, 1),
(8, 3, 2, 1),
(9, 4, 2, 1),
(10, 6, 2, 1),
(11, 2, 3, 1),
(12, 8, 1, 1),
(13, 1, 3, 1),
(14, 3, 3, 1),
(15, 8, 3, 1),
(16, 1, 7, 1),
(17, 3, 7, 1),
(18, 7, 7, 1),
(19, 4, 1, 1),
(20, 7, 1, 0),
(21, 1, 8, 1),
(22, 2, 8, 1),
(23, 27, 1, 0),
(24, 28, 1, 0),
(25, 30, 1, 0),
(26, 31, 1, 0),
(27, 32, 1, 0),
(28, 9, 1, 0),
(29, 10, 1, 1),
(30, 11, 1, 0),
(31, 12, 1, 1),
(32, 13, 1, 0),
(33, 26, 1, 0),
(34, 20, 1, 0),
(35, 2, 13, 1),
(36, 13, 14, 1),
(37, 14, 14, 1),
(38, 15, 14, 1),
(39, 24, 1, 0),
(40, 25, 1, 0),
(41, 15, 1, 0),
(42, 14, 1, 0),
(43, 16, 1, 0),
(44, 17, 1, 0),
(45, 18, 1, 0),
(46, 19, 1, 0),
(47, 21, 1, 0),
(48, 22, 1, 0),
(49, 29, 1, 0),
(50, 2, 15, 1),
(51, 3, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `iine`
--

CREATE TABLE `iine` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `opponent_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `flag` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iine`
--

INSERT INTO `iine` (`id`, `user_id`, `opponent_id`, `date`, `flag`) VALUES
(7, 3, 0, '2020-02-29', 0),
(8, 3, 4, '2020-02-29', 1),
(12, 7, 2, '2020-03-07', 1),
(20, 8, 7, '0000-00-00', 0),
(21, 8, 7, '0000-00-00', 0),
(22, 8, 6, '0000-00-00', 0),
(25, 8, 4, '0000-00-00', 0),
(34, 14, 7, '0000-00-00', 0),
(36, 1, 11, '0000-00-00', 0),
(40, 2, 16, '0000-00-00', 0),
(41, 1, 7, '0000-00-00', 0),
(42, 2, 17, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `kind` tinyint(4) NOT NULL,
  `date` datetime NOT NULL,
  `flag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_id`, `body`, `kind`, `date`, `flag`) VALUES
(1, 1, '1607260003.png', 0, '2020-02-28 19:18:17', 0),
(2, 1, '1586429490.png', 1, '2020-03-02 18:03:57', 0),
(3, 1, '1587315481.png', 2, '2020-03-12 09:33:02', 0),
(4, 1, '1586430726.png', 3, '2020-02-28 19:17:23', 0),
(5, 2, '1587991216.png', 0, '2020-03-07 14:57:42', 0),
(6, 2, 'default.png', 1, '2020-02-29 03:14:41', 0),
(7, 2, '1582942494.png', 2, '2020-02-29 03:14:54', 0),
(8, 2, '1582942503.png', 3, '2020-02-29 03:15:03', 0),
(9, 3, '1583410932.png', 0, '2020-03-05 13:22:12', 0),
(10, 3, '1583410951.png', 1, '2020-03-05 13:22:31', 0),
(11, 3, 'default.png', 2, '2020-02-29 03:57:34', 0),
(12, 3, 'default.png', 3, '2020-02-29 03:57:34', 0),
(13, 4, '1582945361.png', 0, '2020-02-29 04:02:41', 0),
(14, 4, 'default.png', 1, '2020-02-29 04:02:21', 0),
(15, 4, 'default.png', 2, '2020-02-29 04:02:21', 0),
(16, 4, 'default.png', 3, '2020-02-29 04:02:21', 0),
(17, 5, '1588926462.png', 0, '2020-03-02 02:22:13', 0),
(18, 5, 'default.png', 1, '2020-03-02 02:22:13', 0),
(19, 5, 'default.png', 2, '2020-03-02 02:22:13', 0),
(20, 5, 'default.png', 3, '2020-03-02 02:22:13', 0),
(21, 6, 'default.png', 0, '2020-03-02 11:47:37', 0),
(22, 6, 'default.png', 1, '2020-03-02 11:47:37', 0),
(23, 6, 'default.png', 2, '2020-03-02 11:47:37', 0),
(24, 6, 'default.png', 3, '2020-03-02 11:47:37', 0),
(25, 7, '1583574459.png', 0, '2020-03-07 10:47:39', 0),
(26, 7, 'default.png', 1, '2020-03-07 10:45:50', 0),
(27, 7, 'default.png', 2, '2020-03-07 10:45:50', 0),
(28, 7, 'default.png', 3, '2020-03-07 10:45:50', 0),
(29, 8, 'default.png', 0, '0000-00-00 00:00:00', 0),
(30, 8, 'default.png', 1, '0000-00-00 00:00:00', 0),
(31, 8, 'default.png', 2, '0000-00-00 00:00:00', 0),
(32, 8, 'default.png', 3, '0000-00-00 00:00:00', 0),
(33, 9, 'default.png', 0, '0000-00-00 00:00:00', 0),
(34, 9, 'default.png', 1, '0000-00-00 00:00:00', 0),
(35, 9, 'default.png', 2, '0000-00-00 00:00:00', 0),
(36, 9, 'default.png', 3, '0000-00-00 00:00:00', 0),
(37, 10, 'default.png', 0, '0000-00-00 00:00:00', 0),
(38, 10, 'default.png', 1, '0000-00-00 00:00:00', 0),
(39, 10, 'default.png', 2, '0000-00-00 00:00:00', 0),
(40, 10, 'default.png', 3, '0000-00-00 00:00:00', 0),
(41, 11, '1584170191.png', 0, '2020-03-14 08:16:32', 0),
(42, 11, 'default.png', 1, '0000-00-00 00:00:00', 0),
(43, 11, 'default.png', 2, '0000-00-00 00:00:00', 0),
(44, 11, 'default.png', 3, '0000-00-00 00:00:00', 0),
(45, 12, 'default.png', 0, '0000-00-00 00:00:00', 0),
(46, 12, 'default.png', 1, '0000-00-00 00:00:00', 0),
(47, 12, 'default.png', 2, '0000-00-00 00:00:00', 0),
(48, 12, 'default.png', 3, '0000-00-00 00:00:00', 0),
(49, 13, 'default.png', 0, '0000-00-00 00:00:00', 0),
(50, 13, 'default.png', 1, '0000-00-00 00:00:00', 0),
(51, 13, 'default.png', 2, '0000-00-00 00:00:00', 0),
(52, 13, 'default.png', 3, '0000-00-00 00:00:00', 0),
(53, 14, '1586606771.png', 0, '0000-00-00 00:00:00', 0),
(54, 14, 'default.png', 1, '0000-00-00 00:00:00', 0),
(55, 14, 'default.png', 2, '0000-00-00 00:00:00', 0),
(56, 14, 'default.png', 3, '0000-00-00 00:00:00', 0),
(57, 15, '1588176111.png', 0, '0000-00-00 00:00:00', 0),
(58, 15, 'default.png', 1, '0000-00-00 00:00:00', 0),
(59, 15, 'default.png', 2, '0000-00-00 00:00:00', 0),
(60, 15, 'default.png', 3, '0000-00-00 00:00:00', 0),
(61, 16, '1588423809.png', 0, '0000-00-00 00:00:00', 0),
(62, 16, '1588423825.png', 1, '0000-00-00 00:00:00', 0),
(63, 16, 'default.png', 2, '0000-00-00 00:00:00', 0),
(64, 16, 'default.png', 3, '0000-00-00 00:00:00', 0),
(65, 17, 'default.png', 0, '0000-00-00 00:00:00', 0),
(66, 17, 'default.png', 1, '0000-00-00 00:00:00', 0),
(67, 17, 'default.png', 2, '0000-00-00 00:00:00', 0),
(68, 17, 'default.png', 3, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `refinement`
--

CREATE TABLE `refinement` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `age1` int(11) NOT NULL,
  `age2` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `work` int(11) NOT NULL,
  `education` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `cigarette` int(11) NOT NULL,
  `alchool` int(11) NOT NULL,
  `cohabitants` int(11) NOT NULL,
  `request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refinement`
--

INSERT INTO `refinement` (`id`, `user_id`, `sex`, `age1`, `age2`, `place`, `income`, `work`, `education`, `holiday`, `size`, `cigarette`, `alchool`, `cohabitants`, `request`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 14, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 17, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `specific_information`
--

CREATE TABLE `specific_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `reply_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specific_information`
--

INSERT INTO `specific_information` (`id`, `user_id`, `title`, `body`, `date`, `reply_id`, `flag`) VALUES
(5, 1, 'aa', 'いたします。', '0000-00-00 00:00:00', 0, 1),
(6, 1, '管理人さんへ', 'メッセージ機能が遅くて使い物になりません。\r\n改善してください。', '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `temporary_img`
--

CREATE TABLE `temporary_img` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `kind` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `iine_count` int(11) NOT NULL,
  `email` text NOT NULL,
  `sex` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `images_id` int(11) NOT NULL,
  `profile_text` text NOT NULL,
  `age` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `work` int(11) NOT NULL,
  `education` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `cigarette` int(11) NOT NULL,
  `alchool` int(11) NOT NULL,
  `cohabitants` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `registration_date`, `iine_count`, `email`, `sex`, `place`, `images_id`, `profile_text`, `age`, `income`, `work`, `education`, `holiday`, `size`, `cigarette`, `alchool`, `cohabitants`, `request`, `login`) VALUES
(1, 'test', '$2y$10$2vv/urVWopRoJKojFJc3jOiWuPa/0MssODxtRoecTg1PkDUAU3iIi', '2020-02-28 19:17:23', 6, 'yukiaakana@gmail.com', 2, 1, 0, 'Hello!\r\nMy name is Yuki.', 1, 2, 14, 1, 0, 0, 0, 0, 0, 1, '2020-12-07 07:37:51'),
(2, 'test', '$2y$10$bNCw3CAmsTStJhXHAyUk6eQuuoDLBiMz9io6GgHYClZl4uBBSZzLu', '2020-02-28 19:21:03', 12, 'test@gmail.com', 1, 28, 0, 'はじめまして！', 27, 1, 3, 2, 2, 5, 2, 2, 3, 3, '2020-12-06 13:31:53'),
(3, 'test1', '$2y$10$g/jwTtC.a7AOf8nWZLJut.cKaqwu5jsE86B2cgcESk6bA8HPhaH2e', '2020-02-29 03:57:34', 6, 'test1@gmail.com', 1, 2, 0, 'åˆã‚ã¾ã—ã¦ï¼', 4, 1, 3, 0, 2, 3, 2, 1, 2, 3, '2020-03-05 13:24:20'),
(4, 'test2', '$2y$10$P0sFZCijzstfmxVAuJoxZutszKxid59KcWQoholdNTtJWHewwuhvi', '2020-02-29 04:02:21', 9, 'test2@gmail.com', 2, 12, 0, '', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-08 12:18:47'),
(5, 'test3', '$2y$10$Xk0q45gv5NkWvIHc4qq4VesUEXKy/fEyoXbtSOmpy9gx1Q4WoE666', '2020-03-02 02:22:13', 1, 'test3@gmail.com', 1, 4, 0, '', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-08 12:05:55'),
(6, 'miki', '$2y$10$wsWnGHLrHnfpqZa5KlaSCOsb9CqUtDzrZK97Zyo09a6fA1cg6xbXe', '2020-03-02 11:47:37', 3, 'miki@gmail.com', 2, 27, 0, '', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-03-02 11:49:18'),
(7, 'sato', '$2y$10$UU0PLr.XPf0QR4Qpwi.8QeeY.UdIlo5LlqVoNGlnUI.OgF8tGDtAy', '2020-03-07 10:45:50', 4, 'sato@gmail.com', 2, 16, 0, '', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-03-07 10:48:03'),
(8, 'punpee', '$2y$10$uTH9Vn2M2bu4WxLEMoOeseZG2sIZv3Zo2wY0FWwE6.j69Q96wK6Em', '2020-03-14 08:00:13', 7, 'punpee@gmail.com', 1, 16, 0, '', 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-08-28 07:02:02'),
(9, 'oo', '$2y$10$CjefsBOCZOxHBDx62GMNNOSLqvid77GXBNLjBZcypOIlzEg1FpmCG', '2020-03-14 08:10:29', 1, 'oo@gmail.com', 1, 5, 0, '', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(10, 'ã¾ã„', '$2y$10$9z3/D.0tw2vbakYbc3s5sOyZXWvH3Jeo.U/8R77pfdWVicjC03tDW', '2020-03-14 08:12:56', 0, 'mai@gmail.com', 2, 5, 0, '', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-10 09:45:31'),
(11, 'ãƒ¬ãƒ³', '$2y$10$p/fbxc1p6VzMyQvb.l8FlOQXGYNR9BhLJHAW0ZrHpzpvK30A3sOWS', '2020-03-14 08:14:46', 4, 'ren@gmail.com', 1, 7, 0, '', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-03-14 08:15:52'),
(12, 'aa', '$2y$10$Urto.uoKEzRuPnmEuAUof.1O8CHym6tPQFiO6QDrlrAcCddTBOIHm', '2020-03-17 07:09:28', 2, 'yukiaaa@gmail.com', 1, 5, 0, '', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(13, 'poi', '$2y$10$hBH2kE8H2F1gdjQiKbt.FeQi1vB4NW/nYxxaUoGIW8Pcsm4aWOdce', '2020-04-03 16:01:35', 0, 'poi@gmail.com', 2, 4, 0, '', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-04 03:43:46'),
(14, 'タニピ', '$2y$10$cMqaJOYVuLUxHj335MRcf.U/WQzKNEFNciq8y8UqGLGShUHDy/aRq', '2020-04-11 14:03:52', 0, 'tanipi@gmail.com', 1, 9, 0, '', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-22 10:09:23'),
(15, 'kenkyu', '$2y$10$YfEpewDpmbdMeCn/NBjCxuIM3kwgdzmeFGmmnsDtJAeMi7Mkx6iHe', '2020-04-29 14:13:13', 1, 'kenkyu@gmail.com', 1, 21, 0, '', 8, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2020-05-01 16:29:50'),
(16, 'sd', '$2y$10$zZ71m9vx0TTL16A9IDTHqeiyEUneP7aqDs41jrGmZBnCOuoewjU8a', '2020-05-02 14:48:02', 15, 'aa@gmail.com', 2, 4, 0, '', 8, 0, 0, 0, 0, 0, 0, 0, 0, 2, '2020-05-02 15:00:39'),
(17, 'yumi', '$2y$10$6c42cImhMgLbZEINjteuM.rq1g5RLEVTgbyhrU6rd0Oryi0PH2D4W', '2020-05-10 09:49:34', 1, 'yumi@gmail.com', 2, 27, 0, '', 5, 0, 0, 0, 0, 0, 0, 0, 0, 2, '2020-05-10 09:56:50'),
(36, 'lad', '$2y$10$oySQ3abBejSmoPc4nrB7a.SG4u0DNtOkY26layLzVSTJz7BzglCh6', '2020-12-07 03:10:31', 0, 'rat@gmail.com', 1, 7, 0, '', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-12-07 07:22:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_confirmation`
--
ALTER TABLE `age_confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_information`
--
ALTER TABLE `common_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `conversations_members`
--
ALTER TABLE `conversations_members`
  ADD UNIQUE KEY `unique` (`conversation_id`,`user_id`);

--
-- Indexes for table `conversations_messages`
--
ALTER TABLE `conversations_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iine`
--
ALTER TABLE `iine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refinement`
--
ALTER TABLE `refinement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_information`
--
ALTER TABLE `specific_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_img`
--
ALTER TABLE `temporary_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_confirmation`
--
ALTER TABLE `age_confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `common_information`
--
ALTER TABLE `common_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `conversations_messages`
--
ALTER TABLE `conversations_messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=755;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `iine`
--
ALTER TABLE `iine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `refinement`
--
ALTER TABLE `refinement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `specific_information`
--
ALTER TABLE `specific_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temporary_img`
--
ALTER TABLE `temporary_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;