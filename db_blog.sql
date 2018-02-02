-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2018 at 06:50 PM
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
-- Table structure for table `tbl_contect`
--

CREATE TABLE `tbl_contect` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(25) DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contect`
--

INSERT INTO `tbl_contect` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`) VALUES
(1, 'Abiruzzaman', 'Molla', 'abiruzzaman.molla@gmail.com', 'Hay There, i am back!', 0, '2018-02-02 23:08:58'),
(2, 'Abiruzzaman', 'Molla', 'abiruzzaman.molla@gmail.com', 'Hay There, i am back!', 0, '2018-02-02 23:08:58'),
(3, 'Md. Khurshed', 'Alom', 'mdkhurshedalom@gmail.com', 'HI, I am Khurshes Alom form the main nook', 0, '2018-02-02 23:10:06');

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
(1, 'About Us', 'Quis incididunt eiusmod sint cillum eu incididunt ad non. Voluptate cillum consectetur veniam irure magna aliquip do mollit dolor nostrud sint. Eu aute incididunt anim non incididunt nulla nisi cillum ipsum. Elit irure sit pariatur duis ut nostrud reprehenderit deserunt eu dolor Lorem id sunt. Veniam occaecat aliqua eu dolor.\r\n\r\nSunt veniam sunt ea ut Lorem deserunt reprehenderit. Elit mollit et veniam elit fugiat. Nostrud mollit mollit labore proident Lorem qui sit dolore.'),
(2, 'DMSC', '\r\nNisi non aliquip adipisicing dolor quis laboris aliquip incididunt consectetur exercitation et est. Nisi voluptate esse minim nisi. Irure magna duis minim reprehenderit enim ea culpa occaecat. Veniam eiusmod in tempor proident anim qui ullamco excepteur magna qui minim sunt. Mollit deserunt aliqua tempor aliqua duis pariatur adipisicing. Ut culpa non reprehenderit ea laboris enim do proident nisi fugiat tempor veniam nulla nulla. Fugiat cillum laboris tempor anim.\r\n\r\nLabore in dolore est et ullamco duis incididunt exercitation incididunt magna nulla adipisicing. Tempor excepteur id ea quis excepteur tempor proident ut consequat ullamco ipsum voluptate est. Proident mollit aute culpa anim officia labore pariatur fugiat Lorem tempor. Duis dolor nulla qui aliquip et.\r\n\r\nMollit amet cillum cupidatat deserunt laboris irure tempor. Duis incididunt veniam minim elit nostrud aliqua sunt ipsum irure non. Sint proident aliqua mollit elit dolore ad ad culpa exercitation nisi fugiat eu eu. Non incididunt et sit ad sit adipisicing quis ullamco commodo. Ea laboris aliqua irure pariatur incididunt velit cupidatat culpa fugiat. Consectetur sunt ad elit cupidatat labore occaecat incididunt non sit. Velit enim sint nisi laboris quis eiusmod voluptate.\r\n\r\nEt ut aliquip est mollit nostrud labore aliqua reprehenderit mollit voluptate adipisicing veniam. Culpa ipsum laboris do esse ipsum voluptate irure. Ea laborum quis commodo duis dolore ad reprehenderit ex incididunt proident sint cupidatat do.\r\n'),
(3, 'Privacy', '\r\nNisi non aliquip adipisicing dolor quis laboris aliquip incididunt consectetur exercitation et est. Nisi voluptate esse minim nisi. Irure magna duis minim reprehenderit enim ea culpa occaecat. Veniam eiusmod in tempor proident anim qui ullamco excepteur magna qui minim sunt. Mollit deserunt aliqua tempor aliqua duis pariatur adipisicing. Ut culpa non reprehenderit ea laboris enim do proident nisi fugiat tempor veniam nulla nulla. Fugiat cillum laboris tempor anim.\r\n\r\nLabore in dolore est et ullamco duis incididunt exercitation incididunt magna nulla adipisicing. Tempor excepteur id ea quis excepteur tempor proident ut consequat ullamco ipsum voluptate est. Proident mollit aute culpa anim officia labore pariatur fugiat Lorem tempor. Duis dolor nulla qui aliquip et.\r\n\r\nMollit amet cillum cupidatat deserunt laboris irure tempor. Duis incididunt veniam minim elit nostrud aliqua sunt ipsum irure non. Sint proident aliqua mollit elit dolore ad ad culpa exercitation nisi fugiat eu eu. Non incididunt et sit ad sit adipisicing quis ullamco commodo. Ea laboris aliqua irure pariatur incididunt velit cupidatat culpa fugiat. Consectetur sunt ad elit cupidatat labore occaecat incididunt non sit. Velit enim sint nisi laboris quis eiusmod voluptate.\r\n\r\nEt ut aliquip est mollit nostrud labore aliqua reprehenderit mollit voluptate adipisicing veniam. Culpa ipsum laboris do esse ipsum voluptate irure. Ea laborum quis commodo duis dolore ad reprehenderit ex incididunt proident sint cupidatat do.\r\n');

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
(15, 2, 'this is Secound post', 'upload/a20cc4bbe0.png', 'Admin', 'Eu proident nisi elit sit dolore. Exercitation labore enim laboris et ut est ex laborum proident proident ipsum consequat et. Culpa tempor ullamco est cupidatat tempor ullamco ex exercitation est in cillum cillum et.</div>\n<br />\n<div>Enim consequat duis nulla id nostrud sint laborum quis. Officia amet ullamco labore ullamco aute esse voluptate nulla consectetur minim anim sint. Ea laborum enim nulla id reprehenderit laboris eu. Deserunt ea labore id ad duis non. Ad sunt nostrud irure quis nostrud ex consectetur officia consectetur fugiat. Amet aliqua Lorem ut ipsum voluptate esse est.</div>\n<br />\n<div><strong>Labore</strong> voluptate cillum adipisicing eu commodo. Adipisicing id irure excepteur do laboris culpa deserunt dolor ut anim aliqua in tempor. Ipsum quis mollit proident velit dolore pariatur commodo voluptate minim aliquip nostrud. Consequat quis et adipisicing ullamco qui veniam qui et adipisicing aliqua eiusmod nostrud aute.</div>\n<br />\n<div>Tempor consequat proident est irure quis proident. Fugiat nulla do velit irure sit nulla incididunt. Cillum quis nisi sunt amet enim. Qui consequat id nostrud adipisicing nulla anim velit. Commodo commodo cillum laborum laborum consectetur magna anim. Quis quis cupidatat laborum esse culpa. Ex ea ad sunt pariatur culpa laboris culpa est officia dolor.', 'php, blog , help', '2018-01-19 12:48:11'),
(16, 3, 'This Post is from Python', 'upload/ae506373c8.png', 'Abir', '<p>Rather than having all of its functionality built into its core, Python was designed to be highly extensible. This compact modularity has made it particularly popular as a means of adding programmable interfaces to existing applications. Van Rossum\'s vision of a small core language with a large standard library and easily extensible interpreter stemmed from his frustrations with&nbsp;<a title=\"ABC (programming language)\" href=\"https://en.wikipedia.org/wiki/ABC_(programming_language)\">ABC</a>, which espoused the opposite approach.<sup id=\"cite_ref-venners-interview-pt-1_30-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-venners-interview-pt-1-30\">[30]</a></sup></p>\r\n<p>While offering choice in coding methodology, the Python philosophy rejects exuberant syntax (such as that of&nbsp;<a title=\"Perl\" href=\"https://en.wikipedia.org/wiki/Perl\">Perl</a>) in favor of a simpler, less-cluttered grammar. As&nbsp;<a title=\"Alex Martelli\" href=\"https://en.wikipedia.org/wiki/Alex_Martelli\">Alex Martelli</a>put it: \"To describe something as \'clever\' is&nbsp;<em>not</em>&nbsp;considered a compliment in the Python culture.\"<sup id=\"cite_ref-AutoNT-19_49-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-AutoNT-19-49\">[49]</a></sup>&nbsp;Python\'s philosophy rejects the Perl \"<a class=\"mw-redirect\" title=\"There is more than one way to do it\" href=\"https://en.wikipedia.org/wiki/There_is_more_than_one_way_to_do_it\">there is more than one way to do it</a>\" approach to language design in favor of \"there should be one&mdash;and preferably only one&mdash;obvious way to do it\".<sup id=\"cite_ref-PEP20_48-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-PEP20-48\">[48]</a></sup></p>\r\n<p>Python\'s developers strive to avoid&nbsp;<a class=\"mw-redirect\" title=\"Premature optimization\" href=\"https://en.wikipedia.org/wiki/Premature_optimization\">premature optimization</a>, and reject patches to non-critical parts of CPython that would offer marginal increases in speed at the cost of clarity.<sup id=\"cite_ref-AutoNT-20_50-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-AutoNT-20-50\">[50]</a></sup>&nbsp;When speed is important, a Python programmer can move time-critical functions to extension modules written in languages such as C, or use&nbsp;<a title=\"PyPy\" href=\"https://en.wikipedia.org/wiki/PyPy\">PyPy</a>, a&nbsp;<a title=\"Just-in-time compilation\" href=\"https://en.wikipedia.org/wiki/Just-in-time_compilation\">just-in-time compiler</a>.&nbsp;<a title=\"Cython\" href=\"https://en.wikipedia.org/wiki/Cython\">Cython</a>&nbsp;is also available, which translates a Python script into C and makes direct C-level API calls into the Python interpreter.</p>\r\n<p>An important goal of Python\'s developers is keeping it fun to use. This is reflected in the language\'s name&mdash;a tribute to the British comedy group&nbsp;<a title=\"Monty Python\" href=\"https://en.wikipedia.org/wiki/Monty_Python\">Monty Python</a><sup id=\"cite_ref-AutoNT-24_51-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-AutoNT-24-51\">[51]</a></sup>&mdash;and in occasionally playful approaches to tutorials and reference materials, such as examples that refer to spam and eggs (from a&nbsp;<a title=\"Spam (Monty Python)\" href=\"https://en.wikipedia.org/wiki/Spam_(Monty_Python)\">famous Monty Python sketch</a>) instead of the standard&nbsp;<a title=\"Foobar\" href=\"https://en.wikipedia.org/wiki/Foobar\">foo and bar</a>.<sup id=\"cite_ref-52\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-52\">[52]</a></sup><sup id=\"cite_ref-53\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Python_(programming_language)#cite_note-53\">[53]</a></sup></p>\r\n<p>A common&nbsp;<a title=\"Neologism\" href=\"https://en.wikipedia.org/wiki/Neologism\">neologism</a>&nbsp;in the Python community is&nbsp;<em>pythonic</em>, which can have a wide range of meanings related to program style. To say that code is pythonic is to say that it uses Python idioms well, that it is natural or shows fluency in the language, that it conforms with Python\'s minimalist philosophy and emphasis on readability. In contrast, code that is difficult to understand or reads like a rough transcription from another programming language is called&nbsp;<em>unpythonic</em>.</p>\r\n<p>Users and admirers of Python, especially those considered knowledgeable or experienced, are often referred to as&nbsp;<em>Pythonists</em>,&nbsp;<em>Pythonistas</em>, and&nbsp;<em>Pythoneers</em>.</p>', 'python, programming', '2018-01-30 19:30:15');

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
-- Indexes for table `tbl_contect`
--
ALTER TABLE `tbl_contect`
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
-- AUTO_INCREMENT for table `tbl_contect`
--
ALTER TABLE `tbl_contect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
