-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 05:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicircle`
--

-- --------------------------------------------------------

--
-- Table structure for table `circle_table`
--

CREATE TABLE `circle_table` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `circle_image_url` varchar(255) DEFAULT NULL,
  `circle_name` varchar(255) NOT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `uni_img` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `circle_table`
--

INSERT INTO `circle_table` (`id`, `owner`, `circle_image_url`, `circle_name`, `university_name`, `uni_img`, `category`, `description`, `create_date`) VALUES
(1, 'koushik', '../uploads/koushik_campion_club.png', 'RUJA', 'SHYLET', '../uploads/SHYLET_', '1', 'jello', NULL),
(2, 'koushik', '../uploads/koushik_business.jpg', 'RUss', 'bubt', '../uploads/bubt_outline-user-icon-1.png', '3', 'to the moon', NULL),
(3, 'koushik', '../uploads/koushik_buet.svg', 'helloWORLD', 'DUIA', '../uploads/DUIA_ai_uiu.png', '2', 'HEKJKD', NULL),
(5, 'bangladesh', '../uploads/bangladesh_business.jpg', 'ASIA', 'JUP', '../uploads/JUP_pablita-good-job-2.png', '1', 'YOYOYO', NULL),
(6, 'bangladesh', '../uploads/bangladesh_gd.png', 'AUSTRALIA', 'SHYLET', '../uploads/SHYLET_ci-transformed.png', '1', 'helo world', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_date` datetime NOT NULL,
  `reactions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`, `topic_id`, `post_date`, `reactions`) VALUES
(1, 'koushik', 'yyoy this is garbage\r\n', 1, '2024-05-05 18:30:26', 1),
(2, 'koushik', 'yyoy this is your shamelss\r\n', 1, '2024-05-05 18:30:56', 2),
(3, 'koushik', 'yyoy this is your how are u going\r\n', 1, '2024-05-05 18:32:24', 3),
(4, 'koushik', 'dont be a idiot', 1, '2024-05-05 18:35:31', 1),
(5, 'koushik', 'hwy you ok', 1, '2024-05-05 18:40:20', 7),
(6, 'bangladesh', 'hey idiots', 1, '2024-05-05 19:06:51', 3),
(7, 'bangladesh', 'how you doing itdo', 1, '2024-05-05 19:21:36', 13),
(8, 'bangladesh', 'jo jo bizare ad', 2, '2024-05-05 20:33:14', 2),
(9, 'koushik', 'jjk is mid', 2, '2024-05-05 20:33:58', 4),
(10, '1234', 'nayeem is brilliant', 2, '2024-05-05 20:39:19', 3),
(11, 'bangladesh', 'yes russia is winning', 5, '2024-05-05 21:11:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`comment_id`, `post_id`, `username`, `content`, `comment_date`) VALUES
(1, 1, 'jane_smith', 'Welcome, John!', '2024-03-19 01:27:27'),
(2, 2, 'alice_wonder', 'Great work, Jane!', '2024-03-19 01:27:27'),
(3, 3, 'bob_barker', 'I\'m interested! Let me know the details.', '2024-03-19 01:27:27'),
(4, 4, 'emma_jones', 'I recommend \"Sapiens\" by Yuval Noah Harari.', '2024-03-19 01:27:27'),
(5, 5, 'john_doe', 'Congratulations, Emma!', '2024-03-19 01:27:27'),
(6, 6, 'bob_barker', 'What was the lecture about?', '2024-03-19 01:27:27'),
(7, 7, 'emma_jones', 'I\'ll definitely check out your paper, Jane!', '2024-03-19 01:27:27'),
(8, 8, 'john_doe', 'Which conference did you attend, Alice?', '2024-03-19 01:27:27'),
(9, 9, 'jane_smith', 'Count me in for the book club!', '2024-03-19 01:27:27'),
(10, 10, 'alice_wonder', 'Good luck with your proposal, Emma!', '2024-03-19 01:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_time_from` varchar(255) NOT NULL,
  `event_time_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `username`, `event_name`, `event_time_from`, `event_time_to`) VALUES
(1, 'koushik', 'russia war', '12:30', '13:40'),
(2, 'koushik', 'russia war', '12:30', '13:40');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `sender`, `destination`, `content`) VALUES
(1, 'koushik', 'RUJA', 'hello bye'),
(2, '1234', 'RUJA', ''),
(3, '1234', 'RUJA', 'dgdsgd'),
(4, '1234', 'RUJA', 'hello'),
(5, '1234', 'RUJA', 'jello hyj'),
(6, '1234', 'RUJA', 'whow are u'),
(7, '1234', 'RUJA', 'europe'),
(8, '1234', 'RUJA', 'jackob'),
(9, '1234', 'RUJA', 'Russia is gg'),
(10, '1234', 'RUJA', 'bangls'),
(11, 'koushik', 'RUJA', 'RUSSA ONE'),
(12, 'koushik', 'RUJA', 'gg russia'),
(13, 'bangladesh', 'RUJA', 'RUSSIA is bb'),
(14, 'bangladesh', 'RUJA', 'europe'),
(15, 'koushik', 'RUss', 'russua'),
(16, 'koushik', 'RUss', 'HELLO'),
(17, 'bangladesh', 'RUss', 'JOY R'),
(18, 'bangladesh', 'RUss', 'LOY '),
(19, 'bangladesh', 'RUss', 'HELLO WORLD'),
(20, 'bangladesh', 'RUss', 'whow are u'),
(21, 'koushik', 'RUJA', 'BANGLADESH'),
(22, 'bangladesh', 'RUJA', 'I konw'),
(23, 'koushik', 'RUss', 'helo world'),
(24, 'koushik', 'ASIA', 'Rusiian heli'),
(25, 'koushik', 'ASIA', 'yo yo'),
(26, 'bangladesh', 'ASIA', 'jani yo'),
(27, 'bangladesh', 'AUSTRALIA', 'Nothing'),
(28, 'koushik', 'helloWORLD', 'yo yo'),
(29, 'bangladesh', 'AUSTRALIA', 'whow are u'),
(30, 'bangladesh', 'RUJA', 'hhhdf'),
(31, '1234', 'RUss', 'HELO HI BYE'),
(34, '1234', 'RUss', 'yo'),
(35, 'koushik', 'RUss', 'not bad'),
(36, '1234', 'koushik', 'hey how are you'),
(37, 'koushik', '1234', 'hey you good'),
(38, '1234', 'RUss', 'hey man'),
(39, '1234', 'koushik', 'bye'),
(40, 'koushik', '1234', 'hey man i am k'),
(41, '1234', 'koushik', 'hey there'),
(42, '1234', 'koushik', ' to day is ok'),
(43, 'koushik', '1234', 'yo '),
(44, 'koushik', '1234', 'yo yo'),
(45, 'bangladesh', 'RUss', 'hello'),
(46, 'koushik', 'bangladesh', 'Hello k'),
(47, 'bangladesh', 'koushik', 'your truly bd'),
(48, 'bangladesh', 'ASIA', 'roroo'),
(49, 'bangladesh', 'koushik', 'i am koushik'),
(50, 'koushik', 'bangladesh', 'hell world russian '),
(51, 'koushik', 'ASIA', 'yo'),
(52, 'koushik', 'helloWORLD', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `post_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`comment_id`, `username`, `content`, `post_date`) VALUES
(1, 'john_doe', 'Hello everyone! Just joined this platform.', '2024-03-19 01:27:27'),
(2, 'jane_smith', 'Excited to share my latest research findings.', '2024-03-19 01:27:27'),
(3, 'alice_wonder', 'Looking for collaborators for a new project.', '2024-03-19 01:27:27'),
(4, 'bob_barker', 'Any recommendations for good books to read?', '2024-03-19 01:27:27'),
(5, 'emma_jones', 'Just finished my exams. Feeling relieved!', '2024-03-19 01:27:27'),
(6, 'john_doe', 'Attended a fascinating lecture today.', '2024-03-19 01:27:27'),
(7, 'jane_smith', 'Published a new paper in a prestigious journal.', '2024-03-19 01:27:27'),
(8, 'alice_wonder', 'Visited an interesting conference last week.', '2024-03-19 01:27:27'),
(9, 'bob_barker', 'Thinking of starting a book club. Who\'s interested?', '2024-03-19 01:27:27'),
(10, 'emma_jones', 'Started working on my thesis proposal.', '2024-03-19 01:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `projectName` varchar(255) DEFAULT NULL,
  `projectAdmin` varchar(255) DEFAULT NULL,
  `rootCircle` varchar(255) DEFAULT NULL,
  `projectSelect` varchar(255) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `earnCoins` varchar(255) DEFAULT NULL,
  `projectDescription` text DEFAULT NULL,
  `fileUploadPath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectName`, `projectAdmin`, `rootCircle`, `projectSelect`, `startDate`, `endDate`, `earnCoins`, `projectDescription`, `fileUploadPath`) VALUES
(9, 'hello', 'dsd', 'root', 'MACANICAL PROJECTS', '0000-00-00', '0000-00-00', '10', 'shseh', '../../uploads/1234_hello.png'),
(10, 'yo', 'dsd', 'root', 'MACANICAL PROJECTS', '0000-00-00', '0000-00-00', '10', 'shseh', '../../uploads/1234_yo.png'),
(11, 'yo', 'dsd', 'root', 'MACANICAL PROJECTS', '0000-00-00', '0000-00-00', '10', 'shseh', '../../uploads/_yo.png'),
(18, 'yes', 'dsd', 'root', 'TEXTILE PROJECTS', '0000-00-00', '0000-00-00', '10', 'mnvds', '../../uploads/bangladesh_yes.png'),
(19, 'hhhh', 'dsd', 'root', 'TEXTILE PROJECTS', '0000-00-00', '0000-00-00', '10', 'mnvds', '../../uploads/bangladesh_yes.png'),
(36, 'ajaxHEL', 'bangladesh', 'root', 'CSE PROJECTS', '0000-00-00', '0000-00-00', '10', '', '../uploads/bangladesh_ajaxHEL.png'),
(37, 'Below average', 'bangladesh', 'united international', '3D MODELS PROJECTS', '0000-00-00', '0000-00-00', '10', 'heloo guys', '../uploads/bangladesh_Below average.png'),
(38, 'KAiju no 8', 'bangladesh', 'bUBT', 'RESEARCH', '0000-00-00', '0000-00-00', '10', 'kaiju vs kaiju', '../uploads/bangladesh_KAiju no 8.png'),
(39, 'ajaxYO', 'bangladesh', 'united international', 'MARKETING PROJECTS', '0000-00-00', '0000-00-00', '10', '12345', '../uploads/bangladesh_ajaxYO.png'),
(40, 'yohoney', '1234', '', 'CSE PROJECTS', '0000-00-00', '0000-00-00', '10', 'honey', '../uploads/1234_yohoney.png'),
(41, 'ANGEL', '1234', '', 'CSE PROJECTS', '0000-00-00', '0000-00-00', '10', 'testing', '../uploads/1234_ANGEL.png'),
(42, 'ajoy', '1234', '', 'CSE PROJECTS', '0000-00-00', '0000-00-00', '10', '', '../uploads/1234_ajoy.png'),
(43, 'japan', 'bangladesh', 'united international', 'CSE PROJECTS', '0000-00-00', '0000-00-00', '10', 'ggg', '../uploads/bangladesh_japan.png'),
(44, 'Car', 'koushik', 'united university', 'MACANICAL PROJECTS', '0000-00-00', '0000-00-00', '10', 'testing', '../uploads/koushik_Car.png'),
(45, 'GOOGLE', 'koushik', '', 'CSE PROJECTS', '0000-00-00', '0000-00-00', '10', 'hello', '../uploads/koushik_GOOGLE.jpg'),
(46, 'ruissia', 'koushik', 'united international', 'EEE PROJECTS', '0000-00-00', '0000-00-00', '10', '', '../uploads/koushik_ruissia.png');

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`id`, `username`, `comment_id`) VALUES
(1, '1234', 8),
(2, '1234', 9),
(3, '1234', 10),
(4, 'bangladesh', 9),
(5, 'bangladesh', 8),
(6, 'bangladesh', 10),
(7, 'bangladesh', 11),
(8, 'koushik', 3),
(9, 'koushik', 2),
(10, 'koushik', 1),
(11, 'koushik', 5),
(12, 'koushik', 7),
(13, 'koushik', 6);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `username`, `reply`, `post_date`) VALUES
(1, 7, NULL, 'hey', '2024-05-05 18:10:53'),
(2, 7, NULL, 'hey', '2024-05-05 18:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `TopicID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`TopicID`, `username`, `Title`, `Description`) VALUES
(1, 'bangladesh', 'education', 'heeleoe'),
(2, 'bangladesh', 'eourpian', 'jelo by'),
(3, 'koushik', 'hololive', 'vtubers rocks '),
(5, 'bangladesh', 'russia war', 'russia winning\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `User_Email` varchar(200) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `profile_pic_link` varchar(200) NOT NULL,
  `Uni_mail` varchar(200) NOT NULL,
  `University` varchar(200) NOT NULL,
  `study` varchar(50) NOT NULL,
  `lives` varchar(50) NOT NULL,
  `total_rank` varchar(50) NOT NULL,
  `coin_earned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `password`, `User_Email`, `Full_Name`, `profile_pic_link`, `Uni_mail`, `University`, `study`, `lives`, `total_rank`, `coin_earned`) VALUES
('1234', '$2y$10$1kL2EQ8CmmIpxOiJW5s44.lRohKETveuuGh41ex608N4aUKyBJFqC', 'kroy2022@gmail.com', '', '../uploads/proPic1234.svg', '', '', '', '', '', 0),
('12345', '$2y$10$TFKz8x8V0Xp3Z/tNgjRiO.AnofGWv/Cmy9UPVSeWKGmQ31DAueqVC', 'kroy2c@gml.com', '', '', '', '', '', '', '', 0),
('alice_wonder', 'secret', 'alice@example.com', 'Alice Wonder', 'https://example.com/alice.jpg', 'alice.wonder@university.com', 'University of Wonder', '', '', '', 0),
('bangladesh', '$2y$10$g2C3m1RZBWtAdTTkpsh2Ve9kRJNkPhmh1y80r4V5fR7T3XeX5AQ8i', 'kroy221236@bscse.uiu', 'Alice', '../uploads/proPicbangladesh.jpg', '', 'kou', 'ehs', '', '', 0),
('bob_barker', 'bobpass', 'bob@example.com', 'Bob Barker', 'https://example.com/bob.jpg', 'bob.barker@university.com', 'Bob University', '', '', '', 0),
('emma_jones', 'password1234', 'emma@example.com', 'Emma Jones', 'https://example.com/emma.jpg', 'emma.jones@university.com', 'Jones College', '', '', '', 0),
('jane_smith', 'p@ssw0rd', 'jane@example.com', 'Jane Smith', 'https://example.com/jane.jpg', 'jane.smith@university.com', 'Another University', '', '', '', 0),
('john_doe', 'password123', 'john@example.com', 'John Doe', 'https://example.com/john.jpg', 'john.doe@university.com', 'University of Example', '', '', '', 0),
('khobaer', '$2y$10$RdMcla109YF3gGqCw4DXVu0A2WZe4vcr9qolUh5/wnv49myRFqfUe', 'sampadroykoushik01@gmail.com', '', '../uploads/proPickhobaer.png', '', '', '', '', '', 0),
('kkrr', '1234', 'kroy2236@bscse.uiu.ac.bd', '', '', '', '', '', '', '', 0),
('koushik', '$2y$10$WO/W3NjyGRn6Jf2IwZzkauvxtZ/x43udQstVvuw0LrhNuvDvj1VWi', 'kroy221236@bscse.uiu.ac.bd', '', '../uploads/proPickoushik.jpg', '', ' uiu', 'EEE', 'RUSSIA', '12', 23),
('kousik', '1234', 'sampadroykoushik01@gmila.com', '', '', '', '', '', '', '', 0),
('RIFAT', '1234', 'sampadroykoushik1@gmila.com', '', '', '', '', '', '', '', 0),
('root', '$2y$10$Skr2OjS0/IkwDoUDZarXd.TUKqgl3.geRH/mNeWveQhf3ohXoZhiy', 'kroy1c@gmail.com', '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `circle_table`
--
ALTER TABLE `circle_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`TopicID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `User_Email` (`User_Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `circle_table`
--
ALTER TABLE `circle_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `TopicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `circle_table`
--
ALTER TABLE `circle_table`
  ADD CONSTRAINT `circle_table_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `user_table` (`username`);

--
-- Constraints for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `comment_table_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_table` (`comment_id`),
  ADD CONSTRAINT `comment_table_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user_table` (`username`);

--
-- Constraints for table `post_table`
--
ALTER TABLE `post_table`
  ADD CONSTRAINT `post_table_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user_table` (`username`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
