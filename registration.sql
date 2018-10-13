-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2018 at 03:26 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDescriotion` text,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDescriotion`) VALUES
(10, 'vldan baba', '<p>eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;</p>'),
(11, 'vldasadqweqwn baba', '<p>eq e iu oeuqeq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw&nbsp;</p>'),
(12, 'vldasadqweqwn baba', '<p>eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu qoweqw eiqw eqwe qw&nbsp;eq e iu oeuqw eqweuu owu&nbsp;</p>'),
(13, 'eqwewqewqeqw', '<p>weqeqwe qweqw eeqwe qweqwweqeqwe qweqw&nbsp;weqeqwe qweqw&nbsp;weqeqwe qweqw&nbsp;weqeqwe qweqw</p>'),
(16, 'vldan baba', '<p>qweqw eqwe qwe qwe&nbsp;qweqw eqwe qwe qwe&nbsp;qweqw eqwe qwe qwe&nbsp;qweqw eqwe qwe qwe&nbsp;qweqw eqwe qwe qwe&nbsp;qweqw eqwe qwe qwe&nbsp;qweqw eqwe qwe qwe&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `cars` varchar(20) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `text`, `cars`, `hobi`, `gender`) VALUES
('vildan', 'vildanbinaa@gmail.com', 'eqwewqewq', 'Saab', 'Java,', 'mashkull'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('ewqe', 'vildanbinaa@gmail.com', 'ewqeqw', '', 'Java,', 'femer'),
('e', 'vildanbinaa@gmail.com', 'ewqeqw', 'Volvo', 'Web,', 'femer'),
('VildanBinaa', 'qwqwqwq@sds.om', 'ewqewqewqeqw', 'Mercedes', 'Web,Java,', 'mashkull'),
('VildanBinaa', 'qwqwqwq@sds.om', 'ewqewqewqeqw', 'Mercedes', 'Web,Java,', 'mashkull'),
('VildanBin', 'wqeqwqwewqqweqw@ewqewq.com', 'eqweqwe', 'Volvo', 'Web,', 'mashkull'),
('ewqeq', 'qwqwqwq@sds.om', 'e', 'Volvo', 'Web,', 'mashkull'),
('ewqeq', 'qwqwqwq@sds.om', 'eqeq', 'Volvo', 'Java,', 'femer'),
('ewqeq', 'qwqwqwq@sds.om', 'e', 'Volvo', 'Web,', 'mashkull'),
('ewqeq', 'qwqwqwq@sds.om', 'e', 'Volvo', 'Web,', 'mashkull'),
('eqwqw', 'qwqwqwq@sds.om', 'eqweqw', 'Saab', 'Web,', 'mashkull'),
('eqwqw', 'qwqwqwq@sds.om', 'eqweqw', 'Saab', 'Web,', 'mashkull'),
('wqw', 'qwqwqwq@sds.om', 'ewqeq', 'Mercedes', 'Web,', 'mashkull'),
('wqw', 'qwqwqwq@sds.om', 'ewqeq', 'Mercedes', 'Web,', 'mashkull'),
('wqw', 'qwqwqwq@sds.om', 'ewqeq', 'Mercedes', 'Web,', 'mashkull'),
('wqw', 'qwqwqwq@sds.om', 'ewqeq', 'Mercedes', 'Web,', 'mashkull'),
('wqw', 'qwqwqwq@sds.om', 'ewqeq', 'Mercedes', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('ewq', 'qwqwqwq@sds.om', 'ewqewq', 'Volvo', 'Web,', 'mashkull'),
('wqw', 'qwqwqwq@sds.om', '321312', 'Volvo', 'Web,', 'mashkull');

-- --------------------------------------------------------

--
-- Table structure for table `recovery_keys`
--

DROP TABLE IF EXISTS `recovery_keys`;
CREATE TABLE IF NOT EXISTS `recovery_keys` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recovery_keys`
--

INSERT INTO `recovery_keys` (`rid`, `userID`, `token`, `valid`) VALUES
(1, 4, '7f632bfb95467a2de52d82873750ba45', 1),
(2, 4, '8ea61774878a84e874b77594abc84ea3', 1),
(3, 4, '1eca95a1e552e511b4aa49d6d3f66507', 1),
(4, 4, 'dfab0f23b17d54c54625ddf3308cad42', 1),
(5, 4, '634ff6ab829197036eed9c6582488768', 1),
(6, 4, 'c45daaf8a0fff891c8f22e3a0e492d8d', 1),
(7, 4, '791ccdd93aa6a9f73f59c645369d78b7', 1),
(8, 4, '098cdf5e2979eb16a07b0859d0b8b1a1', 1),
(9, 4, '8dfbc77de60bf56969cfd2870ee28be5', 0),
(10, 4, 'dd7f4bba3221f06ee49df8b53915d9c7', 1),
(11, 4, '6986a25b1c59dee9d3dd8b2552e0fcd5', 1),
(12, 4, 'e0e7a894afa35e806d903718633eb014', 1),
(13, 4, '96c943e9129f3d29c2fd06cb8ee328cb', 1),
(14, 4, 'c4b5c41084c6f99c6d3c6009bfdbb81e', 1),
(15, 4, '4c4d4c21c992b715482b446865f2c7d7', 0),
(16, 4, 'c708d77f8722e48e61db53a2a76c623c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `date`) VALUES
(15, 'Services 2', '<p>Before you can begin to determine what the composition of a particular paragraph will be, you must first decide on an&nbsp;<a title=\"argument\" href=\"https://writingcenter.unc.edu/tips-and-tools/argument/\">argument</a>&nbsp;and a working&nbsp;<a title=\"Thesis Statements\" href=\"https://writingcenter.unc.edu/tips-and-tools/thesis-statements/\">thesis statement</a>&nbsp;for youper where there are direct, familial relationships between all of the ideas in the paper.</p>', 'Profile senior.jpg', '2018-06-18 20:15:27'),
(16, 'Services 3', '<p>Before you can begin to 3determineect, familial relationships between all of the ideas in the paper.</p>', 'col-04.png', '2018-06-18 20:15:39'),
(17, 'Services 4', '<p>Before you can begin to determineect, familial relationships between all of the ideas in the paper.</p>', 'col-02.png', '2018-06-18 20:15:52'),
(19, 'Services 6', '<p>Before you can begin to d&nbsp;paper.Before you can begin to d&nbsp;paper.</p>', '', '2018-06-18 20:19:52'),
(20, 'Shqipdon', '<p><strong>ewrwepur weri eewrwepur weri eewrwepur weri eewrwepur weri eewrwepur weri eewrwepur weri eewrwepur weri e</strong></p>', 'col-04.png', '2018-06-20 12:25:18'),
(21, 'qweqweqw', '<p>eqweqweqweqweqweqw</p>', '', '2018-07-25 21:13:45'),
(22, 'Welcome', '<p>Relive the MADNESS with these exclusive Spotify playlists: The Official Tomorrowland Playlist: <a class=\"yt-simple-endpoint style-scope yt-formatted-string\" spellcheck=\"false\" href=\"https://www.youtube.com/redirect?event=video_description&amp;v=MglnNn_rB3I&amp;q=http%3A%2F%2Ftomorrowland.com%2Fspotify&amp;redir_token=59IWt8i7cbm7gEsCCt3JB0_Lkht8MTUzMzczNjE1MEAxNTMzNjQ5NzUw\">http://tomorrowland.com/spotify</a> The Smash The House Radio Playlist:</p>', '37249005_1937575409627054_200044582916849664_o.jpg', '2018-08-07 15:26:48'),
(23, 'Phillips tha:', '<p>Profesori n&euml; Universitetin Columbia t&euml; SHBA-s&euml;, David Philips, n&euml; nj&euml; interviste p&euml;r Deutche Welle thekson se n&euml; asnj&euml; m&euml;nyr&euml; nuk duhet t&euml; ket&euml; ndarje t&euml; Kosov&euml;s.</p>', '37249005_1937575409627054_200044582916849664_o.jpg', '2018-08-07 15:33:06'),
(24, 'AktakuzÃ« pÃ«r krime lufte', '<p>Prokuroria Speciale ee Republik&euml;s s&euml; Kosov&euml;s ka paraqitur aktakuz&euml; m&euml; 3 gusht 2018 n&euml; Departamentin p&euml;r Krime t&euml; R&euml;nda n&euml; Gjykat</p>', 'Profile senior.jpg', '2018-08-07 15:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(4, 'vildanbinaa', 'vildanbina@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(16, 'test1', 'test1@gmail.com', 'user', '05a671c66aefea124cc08b76ea6d30bb'),
(11, 'demo', 'test@test.com', 'user', 'fe01ce2a7fbac8fafaed7c982a04e229'),
(17, 'test', 'test132@gmail.com', 'admin', '3d6d9b0447c2f4e995203bd28a9a9fee'),
(15, 'shqipdon', 'shqipdon@gmail.com', 'admin', '63e7205f0b212cbe3987cdb525e4c91d'),
(20, 'demo', 'demo@live.com', 'user', 'fe01ce2a7fbac8fafaed7c982a04e229'),
(21, 'vildanbina', 'vildanbinaa@gmail.com', 'admin', '3bbc42becf853333d46101900ce65da3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
