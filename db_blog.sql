-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2018 at 09:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(2, 'Php'),
(3, 'Python'),
(4, 'GO Lang'),
(5, 'Ruby On Rails');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copyright`
--

CREATE TABLE `tbl_copyright` (
  `id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_copyright`
--

INSERT INTO `tbl_copyright` (`id`, `note`) VALUES
(1, 'All right revised by Abir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `page_title`, `page_body`) VALUES
(1, 'About Us', 'Quis incididunt eiusmod sint cillum eu incididunt ad non. Voluptate cillum consectetur veniam irure magna aliquip do mollit dolor nostrud sint. Eu aute incididunt anim non incididunt nulla nisi cillum ipsum. Elit irure sit pariatur duis ut nostrud reprehenderit deserunt eu dolor Lorem id sunt. Veniam occaecat aliqua eu dolor.\r\n\r\nSunt veniam sunt ea ut Lorem deserunt reprehenderit. Elit mollit et veniam elit fugiat. Nostrud mollit mollit labore proident Lorem qui sit dolore.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `body` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `catid`, `title`, `image`, `author`, `body`, `tags`, `date`) VALUES
(1, 1, 'This is first post', 'upload/post1.jpg', 'Admin', 'dadsfjsdhhdkfhdkjfdh fksdhfdkfhdfjsfhdsjfhd dhfkdhfkdshfdf fdjhfsdjhfdshfkdhfkdsh fhdkfhdskhfdhf ddhh dskh f dfdfhd fkdfksd hfdhdf hddh fdsfhdsk hfdkhf jkdsf sdfdhfkdjfhdkjf dhfkdhfdkhfdkhjf kd fdkfhdsksfhdkhfksdjh  sdjkshfkdsfhdksfhkdsjhkjhkas kdshfkjf hdkfd d  fd fhdjkfhdkjfhsd fhak fhkjdashfkdhfkdahf dkjfhdakjfhdksjfhkdfahksdjfh kdhfdjfhsdkjfadhsjkf dfhdskjafhsdkfhdskjf sdjkhfkdjh fhsdfkdjhs dsfhdjkfhdkfhdkfjdhs fhdfkjdshfksdjfh dfdsjhfdsjkafhdskjf hhfdksjafkdfhdk f dhfaksdhfkds dhfkjdsh sdhf ddkjfdafhfkjhdsjkafhdsfkjsdhhf sdhhfkjdhfkjdshfkdash dhfjksdhfkjsdhfsdjkhf ', 'Java. program', '2018-01-15 06:28:49'),
(2, 2, 'this is Secound post', 'upload/post2.png', 'Admin', 'Do proident sit amet incididunt duis magna minim. Culpa ea deserunt ex aliqua sit quis do magna mollit velit enim enim. Tempor quis anim ut laboris sit deserunt.\n\nUllamco amet sit enim nisi incididunt sit irure adipisicing amet occaecat. Culpa aute laboris labore irure. Eiusmod non consectetur Lorem ad pariatur nisi enim aliqua deserunt est aliquip duis. Ex irure ullamco eu est Lorem et aliqua qui est et.\n\nElit sunt consectetur in elit. Non id id pariatur minim ea qui non. Consequat adipisicing fugiat consequat dolor commodo ut do est ut fugiat veniam esse. Veniam dolor exercitation eiusmod deserunt voluptate mollit consequat cillum nulla consequat aliqua in veniam nulla. Fugiat reprehenderit nisi eu id dolore ut consectetur laborum commodo excepteur. Ad minim culpa voluptate cupidatat non culpa est. Voluptate amet excepteur commodo et ex reprehenderit.', 'php, program', '2018-01-15 06:53:09'),
(3, 1, 'This is first post', 'upload/post1.jpg', 'Admin', 'dadsfjsdhhdkfhdkjfdh fksdhfdkfhdfjsfhdsjfhd dhfkdhfkdshfdf fdjhfsdjhfdshfkdhfkdsh fhdkfhdskhfdhf ddhh dskh f dfdfhd fkdfksd hfdhdf hddh fdsfhdsk hfdkhf jkdsf sdfdhfkdjfhdkjf dhfkdhfdkhfdkhjf kd fdkfhdsksfhdkhfksdjh  sdjkshfkdsfhdksfhkdsjhkjhkas kdshfkjf hdkfd d  fd fhdjkfhdkjfhsd fhak fhkjdashfkdhfkdahf dkjfhdakjfhdksjfhkdfahksdjfh kdhfdjfhsdkjfadhsjkf dfhdskjafhsdkfhdskjf sdjkhfkdjh fhsdfkdjhs dsfhdjkfhdkfhdkfjdhs fhdfkjdshfksdjfh dfdsjhfdsjkafhdskjf hhfdksjafkdfhdk f dhfaksdhfkds dhfkjdsh sdhf ddkjfdafhfkjhdsjkafhdsfkjsdhhf sdhhfkjdhfkjdshfkdash dhfjksdhfkjsdhfsdjkhf ', 'Java. program', '2018-01-15 06:28:49'),
(4, 2, 'this is Secound post', 'upload/post2.png', 'Admin', 'Do proident sit amet incididunt duis magna minim. Culpa ea deserunt ex aliqua sit quis do magna mollit velit enim enim. Tempor quis anim ut laboris sit deserunt.\n\nUllamco amet sit enim nisi incididunt sit irure adipisicing amet occaecat. Culpa aute laboris labore irure. Eiusmod non consectetur Lorem ad pariatur nisi enim aliqua deserunt est aliquip duis. Ex irure ullamco eu est Lorem et aliqua qui est et.\n\nElit sunt consectetur in elit. Non id id pariatur minim ea qui non. Consequat adipisicing fugiat consequat dolor commodo ut do est ut fugiat veniam esse. Veniam dolor exercitation eiusmod deserunt voluptate mollit consequat cillum nulla consequat aliqua in veniam nulla. Fugiat reprehenderit nisi eu id dolore ut consectetur laborum commodo excepteur. Ad minim culpa voluptate cupidatat non culpa est. Voluptate amet excepteur commodo et ex reprehenderit.', 'php, program', '2018-01-15 06:53:09'),
(5, 1, 'This is first post', 'upload/post1.jpg', 'Admin', 'dadsfjsdhhdkfhdkjfdh fksdhfdkfhdfjsfhdsjfhd dhfkdhfkdshfdf fdjhfsdjhfdshfkdhfkdsh fhdkfhdskhfdhf ddhh dskh f dfdfhd fkdfksd hfdhdf hddh fdsfhdsk hfdkhf jkdsf sdfdhfkdjfhdkjf dhfkdhfdkhfdkhjf kd fdkfhdsksfhdkhfksdjh  sdjkshfkdsfhdksfhkdsjhkjhkas kdshfkjf hdkfd d  fd fhdjkfhdkjfhsd fhak fhkjdashfkdhfkdahf dkjfhdakjfhdksjfhkdfahksdjfh kdhfdjfhsdkjfadhsjkf dfhdskjafhsdkfhdskjf sdjkhfkdjh fhsdfkdjhs dsfhdjkfhdkfhdkfjdhs fhdfkjdshfksdjfh dfdsjhfdsjkafhdskjf hhfdksjafkdfhdk f dhfaksdhfkds dhfkjdsh sdhf ddkjfdafhfkjhdsjkafhdsfkjsdhhf sdhhfkjdhfkjdshfkdash dhfjksdhfkjsdhfsdjkhf ', 'Java. program', '2018-01-15 06:28:49'),
(6, 2, 'this is Secound post', 'upload/post2.png', 'Admin', 'Do proident sit amet incididunt duis magna minim. Culpa ea deserunt ex aliqua sit quis do magna mollit velit enim enim. Tempor quis anim ut laboris sit deserunt.\n\nUllamco amet sit enim nisi incididunt sit irure adipisicing amet occaecat. Culpa aute laboris labore irure. Eiusmod non consectetur Lorem ad pariatur nisi enim aliqua deserunt est aliquip duis. Ex irure ullamco eu est Lorem et aliqua qui est et.\n\nElit sunt consectetur in elit. Non id id pariatur minim ea qui non. Consequat adipisicing fugiat consequat dolor commodo ut do est ut fugiat veniam esse. Veniam dolor exercitation eiusmod deserunt voluptate mollit consequat cillum nulla consequat aliqua in veniam nulla. Fugiat reprehenderit nisi eu id dolore ut consectetur laborum commodo excepteur. Ad minim culpa voluptate cupidatat non culpa est. Voluptate amet excepteur commodo et ex reprehenderit.', 'php, program', '2018-01-15 06:53:09'),
(7, 1, 'This is first post', 'upload/post1.jpg', 'Admin', 'dadsfjsdhhdkfhdkjfdh fksdhfdkfhdfjsfhdsjfhd dhfkdhfkdshfdf fdjhfsdjhfdshfkdhfkdsh fhdkfhdskhfdhf ddhh dskh f dfdfhd fkdfksd hfdhdf hddh fdsfhdsk hfdkhf jkdsf sdfdhfkdjfhdkjf dhfkdhfdkhfdkhjf kd fdkfhdsksfhdkhfksdjh  sdjkshfkdsfhdksfhkdsjhkjhkas kdshfkjf hdkfd d  fd fhdjkfhdkjfhsd fhak fhkjdashfkdhfkdahf dkjfhdakjfhdksjfhkdfahksdjfh kdhfdjfhsdkjfadhsjkf dfhdskjafhsdkfhdskjf sdjkhfkdjh fhsdfkdjhs dsfhdjkfhdkfhdkfjdhs fhdfkjdshfksdjfh dfdsjhfdsjkafhdskjf hhfdksjafkdfhdk f dhfaksdhfkds dhfkjdsh sdhf ddkjfdafhfkjhdsjkafhdsfkjsdhhf sdhhfkjdhfkjdshfkdash dhfjksdhfkjsdhfsdjkhf ', 'Java. program', '2018-01-15 06:28:49'),
(15, 2, 'this is Secound post', 'upload/a20cc4bbe0.png', 'Admin', 'Eu proident nisi elit sit dolore. Exercitation labore enim laboris et ut est ex laborum proident proident ipsum consequat et. Culpa tempor ullamco est cupidatat tempor ullamco ex exercitation est in cillum cillum et.</div>\n<br />\n<div>Enim consequat duis nulla id nostrud sint laborum quis. Officia amet ullamco labore ullamco aute esse voluptate nulla consectetur minim anim sint. Ea laborum enim nulla id reprehenderit laboris eu. Deserunt ea labore id ad duis non. Ad sunt nostrud irure quis nostrud ex consectetur officia consectetur fugiat. Amet aliqua Lorem ut ipsum voluptate esse est.</div>\n<br />\n<div><strong>Labore</strong> voluptate cillum adipisicing eu commodo. Adipisicing id irure excepteur do laboris culpa deserunt dolor ut anim aliqua in tempor. Ipsum quis mollit proident velit dolore pariatur commodo voluptate minim aliquip nostrud. Consequat quis et adipisicing ullamco qui veniam qui et adipisicing aliqua eiusmod nostrud aute.</div>\n<br />\n<div>Tempor consequat proident est irure quis proident. Fugiat nulla do velit irure sit nulla incididunt. Cillum quis nisi sunt amet enim. Qui consequat id nostrud adipisicing nulla anim velit. Commodo commodo cillum laborum laborum consectetur magna anim. Quis quis cupidatat laborum esse culpa. Ex ea ad sunt pariatur culpa laboris culpa est officia dolor.', 'php, blog , help', '2018-01-19 12:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Dynamic Blog', 'Its a Dynamic Blog', 'upload/logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `facebook`, `twitter`, `linkedin`, `googleplus`) VALUES
(1, 'asliabir', 'asliabir', 'asliabir', 'asliabir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `photo`, `pass`) VALUES
(1, 'admin', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
