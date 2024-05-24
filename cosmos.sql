-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 05:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplishments`
--

CREATE TABLE `accomplishments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomplishments`
--

INSERT INTO `accomplishments` (`id`, `student_id`, `title`, `description`, `date`, `status`, `created_at`) VALUES
(1, 4, 'Tech Start-Up, Winner', 'A startup is usually a company such as a small business, a partnership or an organization designed to rapidly develop scalable business model. Often, startup companies deploy technologies, such as Internet, e-commerce, computers, telecommunications, or robotics.', '2021-10-22', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `profile_photo` text NOT NULL,
  `email_id` text NOT NULL,
  `contact_number` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `website` text NOT NULL,
  `about_us` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `profile_photo`, `email_id`, `contact_number`, `password`, `address`, `website`, `about_us`, `status`, `created_at`) VALUES
(1, 'BMS COLLEGE OF COMMERCE &amp; MANAGEMENT', '/uploads/bmsccm.png', 'bmsccm@gmail.com', '8026610174', '8250c15e87fa6d3a9dce3922114fcaac', 'No-97, Kavi Lakshmisha Rd, Opp to Jain College, Parvathipuram, Vishweshwarapura, Basavanagudi, Bengaluru, Karnataka 560004', 'www.bmsccm.in', 'B.M.S. College of Commerce &amp; Management (BMSCCM) is run under the aegis of BMS Educational Trust, Bengaluru. The college is affiliated to Bangalore Central University and offers under graduate courses in Commerce, Management and Computer Applications.', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `college_name` text NOT NULL,
  `course` text NOT NULL,
  `duration` text NOT NULL,
  `score` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `student_id`, `college_name`, `course`, `duration`, `score`, `status`, `created_at`) VALUES
(1, 1, 'BMSCCM', 'BCA', '3 Yrs', '9.2', 1, '0000-00-00 00:00:00'),
(2, 1, 'ASC PU College', 'PCME', '2 Yrs', '60%', 1, '0000-00-00 00:00:00'),
(3, 4, 'BMS College Of Commerce &amp; Management', 'BCA', '3 Yrs', '8.68 CGPA', 1, '0000-00-00 00:00:00'),
(4, 5, 'BMS College Of Commerce &amp; Management', 'BCA', '3 Yrs', '10 CGPA', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `role` text NOT NULL,
  `duration` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `student_id`, `company_name`, `role`, `duration`, `description`, `status`, `created_at`) VALUES
(1, 4, 'SpecX Technologies Pvt Ltd', 'Full Stack Developer', '4 Months', 'Full stack developers are required to be proficient in front end development and back end web development, coding with HTML, CSS, and JS for the client-side and maintaining databases and infrastructure server-side.', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `recruiter_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `role` text NOT NULL,
  `description` text NOT NULL,
  `ctc` text NOT NULL,
  `elegibility` text NOT NULL,
  `skills_required` text NOT NULL,
  `experience` text NOT NULL,
  `course` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `recruiter_id`, `title`, `role`, `description`, `ctc`, `elegibility`, `skills_required`, `experience`, `course`, `status`, `created_at`) VALUES
(1, 1, 'Vacancy For Solidity Programmers', 'Smart Contract Developer', 'Solidity is an object-oriented, high-level language for implementing smart contracts. Solidity is a curly-bracket language. It is influenced by C++, Python and JavaScript, and is designed to target the Ethereum Virtual Machine (EVM).', '7,20,000 LPA', 'BCA, BE, B.tech or Above', 'Solidity, Truffle, Ganache CLI', 'Fresher', 'BCA', 1, '2022-01-24 11:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `student_id`, `title`, `description`, `url`, `status`, `created_at`) VALUES
(1, 4, 'Mahila Pasand - Rental Bridal Jewelry', 'Mahila Pasand is a place, that specializes in renting (and also buying) jewellery and Fashion Accessories. We provide many services such as Early Booking, Door Step Delivery, etc.', 'https://play.google.com/store/apps/details?id=com.mahila_pasand', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `option_1` text NOT NULL,
  `option_2` text NOT NULL,
  `option_3` text NOT NULL,
  `option_4` text NOT NULL,
  `correct_option` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `test_id`, `question_name`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_option`, `status`, `created_at`) VALUES
(1, 1, 'A shopkeeper expects a gain of 22.5% on his cost price. If in a week, his sale was of Rs. 392, what was his profit?', 'Rs. 18.20', 'Rs. 70', 'Rs. 72', 'Rs. 88.25', 'Rs. 72', 1, '0000-00-00 00:00:00'),
(2, 1, 'GRAIN:SALT', 'shard:pottery', 'shred:wood', 'blades:grass', 'chip:glass', 'chip:glass', 1, '0000-00-00 00:00:00'),
(3, 1, 'Find the statement that must be true according to the given information. Vincent has a paper route. Each morning, he delivers 37 newspapers to customers in his neighborhood. It takes Vincent 50 minutes to deliver all the papers. If Vincent is sick or has other plans, his friend Thomas, who lives on the same street, will sometimes deliver the papers for him.', 'Vincent and Thomas live in the same neighborhood.', 'It takes Thomas more than 50 minutes to deliver the papers.', 'It is dark outside when Vincent begins his deliveries', 'Thomas would like to have his own paper route.', 'Vincent and Thomas live in the same neighborhood.', 1, '0000-00-00 00:00:00'),
(4, 1, 'Two numbers are respectively 20% and 50% more than a third number. The ratio of the two numbers is:', '02:05', '03:05', '04:05', '06:07', '04:05', 1, '0000-00-00 00:00:00'),
(5, 1, 'Pointing to a photograph of a boy Suresh said, \"He is the son of the only son of my mother.\" How is Suresh related to that boy?', 'Brother', 'Uncle', 'Cousin', 'Father', 'Father', 1, '0000-00-00 00:00:00'),
(6, 1, 'The total of the ages of Amar, Akbar and Anthony is 80 years. What was the total of their ages three years ago ?', '71 years', '72 years', '74 years', '77 years', '71 years', 1, '0000-00-00 00:00:00'),
(7, 1, 'How much time will it take for an amount of Rs. 450 to yield Rs. 81 as interest at 4.5% per annum of simple interest?', '3.5 years', '4 years', '4.5 years', '5 years', '4 years', 1, '0000-00-00 00:00:00'),
(8, 1, 'A train always has', 'Rails', 'Driver', 'Guard', 'Engine', 'Engine', 1, '0000-00-00 00:00:00'),
(9, 1, 'Introducing a boy, a girl said, \"He is the son of the daughter of the father of my uncle.\" How is the boy related to the girl?', 'Brother', 'Nephew', 'Uncle', 'Son-in-law', 'Brother', 1, '0000-00-00 00:00:00'),
(10, 1, 'Which is the known language', 'Hindi', 'HTML', 'CSS', 'English', 'English', 1, '0000-00-00 00:00:00'),
(11, 2, 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', '150 metres', 1, '0000-00-00 00:00:00'),
(12, 2, 'Optimist is to cheerful as pessimist is to', 'gloomy', 'mean', 'petty', 'helpful', 'gloomy', 1, '0000-00-00 00:00:00'),
(13, 2, 'Pointing to a photograph of a boy Suresh said, \"He is the son of the only son of my mother.\" How is Suresh related to that boy?', 'Brother', 'Uncle', 'Cousin', 'Father', 'Father', 1, '0000-00-00 00:00:00'),
(14, 2, 'Peacock : India :: Bear : ?', 'Australia', 'America', 'Russia', 'England', 'Russia', 1, '0000-00-00 00:00:00'),
(15, 2, 'In order to obtain an income of Rs. 650 from 10% stock at Rs. 96, one must make an investment of:', 'Rs. 3100', 'Rs. 6240', 'Rs. 6500', 'Rs. 9600', 'Rs. 6240', 1, '0000-00-00 00:00:00'),
(16, 2, 'A woman says, \"If you reverse my own age, the figures represent my husband\'s age. He is, of course, senior to me and the difference between our ages is one-eleventh of their sum.\" The woman\'s age is', '23 years', '34 years', '45 years', 'None of these', '45 years', 1, '0000-00-00 00:00:00'),
(17, 2, 'A number of friends decided to go on a picnic and planned to spend Rs. 96 on eatables. Four of them, however, did not turn up. As a consequence, the remaining ones had to contribute Rs. 4 each extra. The number of those who attended the picnic was', '8', '12', '16', '24', '8', 1, '0000-00-00 00:00:00'),
(18, 2, 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?', '3.6', '7.2', '8.4', '10', '7.2', 1, '0000-00-00 00:00:00'),
(19, 2, 'Two trains running in opposite directions cross a man standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is:', '01:03', '03:02', '03:04', 'None of these', '03:02', 1, '0000-00-00 00:00:00'),
(20, 2, 'How many 3-digit numbers can be formed from the digits 2, 3, 5, 6, 7 and 9, which are divisible by 5 and none of the digits is repeated?', '5', '10', '15', '20', '20', 1, '0000-00-00 00:00:00'),
(21, 3, 'A 6% stock yields 8%. The market value of the stock is:', 'Rs. 48', 'Rs. 75', 'Rs. 96', 'Rs. 133.33', 'Rs. 75', 1, '0000-00-00 00:00:00'),
(22, 3, 'In how many different ways can the letters of the word \'LEADING\' be arranged in such a way that the vowels always come together?', '360', '5040', '720', 'None of these', '720', 1, '0000-00-00 00:00:00'),
(23, 3, 'If A + B means A is the mother of B; A - B means A is the brother B; A % B means A is the father of B and A x B means A is the sister of B, which of the following shows that P is the maternal uncle of Q?', 'Q - N + M x P', 'P + S x N - Q', 'P - M + N x Q', 'Q - S % P', 'P - M + N x Q', 1, '0000-00-00 00:00:00'),
(24, 3, 'Yard is to inch as quart is to', 'gallon', 'ounce', 'milk', 'liquid', 'ounce', 1, '0000-00-00 00:00:00'),
(25, 3, 'Carbon : Diamond :: Corundum : ?', 'Garnet', 'Ruby', 'Pukhraj', 'Pearl', 'Ruby', 1, '0000-00-00 00:00:00'),
(26, 3, 'In how many ways can a group of 5 men and 2 women be made out of a total of 7 men and 3 women?', '63', '90', '45', '126', '63', 1, '0000-00-00 00:00:00'),
(27, 3, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '7', '10', '12', '13', '10', 1, '0000-00-00 00:00:00'),
(28, 3, 'The total of the ages of Amar, Akbar and Anthony is 80 years. What was the total of their ages three years ago ?', '71 years', '72 years', '74 years', '77 years', '71 years', 1, '0000-00-00 00:00:00'),
(29, 3, 'Reptile is to lizard as flower is to', 'petal', 'stem', 'daisy', 'alligator', 'daisy', 1, '0000-00-00 00:00:00'),
(30, 3, 'The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:', '200 m', '225 m', '245 m', '250 m', '245 m', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE `recruiters` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `profilephoto` text NOT NULL,
  `email_id` text NOT NULL,
  `contact_number` text NOT NULL,
  `password` text NOT NULL,
  `website` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`id`, `name`, `profilephoto`, `email_id`, `contact_number`, `password`, `website`, `address`, `description`, `status`, `created_at`) VALUES
(1, 'Belovance', '/uploads/belovance.png', 'belovance@gmail.com', '9113621205', '3c0b5baea375ae53f8e58468baf8f69f', 'belovance.com', 'Belovance, IndiQube South Mile, Vijayarangam Layout, Jayanagar, Bengaluru, Karnataka 560070', 'I love my company', 1, '2021-12-31 15:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `profile_photo` text NOT NULL,
  `email_id` text NOT NULL,
  `contact_number` text NOT NULL,
  `password` text NOT NULL,
  `college_id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `bio` text NOT NULL,
  `address` text NOT NULL,
  `website` text NOT NULL,
  `skills` text NOT NULL,
  `languages` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `profile_photo`, `email_id`, `contact_number`, `password`, `college_id`, `dob`, `bio`, `address`, `website`, `skills`, `languages`, `status`, `created_at`) VALUES
(1, 'Dhanush Raju S', '/uploads/1.jpeg', 'dhanushrajus16@gmail.com', '9448952040', '03c017f682085142f3b60f56673e22dc', 1, '2001-12-16', 'Don&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;#039;t follow me i&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;#039;m sunami (En Helu Nan Baalu)', '#22 3rd floor rt street bangalore-560053', 'www.raju.com', 'photography', 'kannada', 1, '0000-00-00 00:00:00'),
(4, 'Akash S', '/uploads/4.jpeg', 'as99281@gmail.com', '+917337760739', '94754d0abb89e4cf0a7f1c494dbb9d2c', 1, '2001-05-22', 'My name is Akash and I am a Full Stack Developer for SpecX Technologies Pvt Ltd. I am an accomplished coder and programmer, and I enjoy using my skills to contribute to the exciting technological advances that happen every day at Oswald Tech. I graduated from the California Institute of Technology in 2016 with a Bachelor&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;#039;s Degree in Software Development. While in school, I earned the 2015 Edmund Gains Award for my exemplary academic performance and leadership skills.', 'No.265/3, 4th main road, 2nd block, Thyagarajanagar, Bangalore - 560028', 'akash.belovance.com', 'HTML, CSS, JS, Flutter, Dart etc', 'Kannada, English, Hindi', 1, '0000-00-00 00:00:00'),
(5, 'Manoj S', '/uploads/5.jpeg', 'manojsgowda0327@gmail.com', '9482412057', '5e81f9859d223ea420aca993c647b839', 1, '2002-03-27', 'I&amp;#039;m Handsome Boy! Hardcore Java Fan... Wait for my java textbook. #odhudhre_hogbidthya', 'Mantri Square', 'www.manojava.com', 'Java', 'Kannada, English, Hindi', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `test_name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `test_name`, `description`, `status`, `created_at`) VALUES
(1, 'Aptitude #1', 'Aptitude #1 test is an exam used to determine an individual\'s skill or propensity to succeed in a given activity.', 1, '2022-01-04 17:57:55'),
(2, 'Aptitude #2', 'Aptitude #2 tests assume that individuals have inherent strengths and weaknesses, and have a natural inclination toward success or failure in specific areas based on their innate characteristics.', 1, '2022-01-04 17:59:05'),
(3, 'Aptitude #3', 'Aptitude #3 test, examination that attempts to determine and measure a person\'s ability to acquire', 1, '2022-01-04 18:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `tests_attempted`
--

CREATE TABLE `tests_attempted` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `percentage` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests_attempted`
--

INSERT INTO `tests_attempted` (`id`, `test_id`, `student_id`, `percentage`, `status`, `created_at`) VALUES
(1, 1, 4, '90', 1, '2022-02-02 18:48:17'),
(2, 2, 4, '80', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@email.com', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomplishments`
--
ALTER TABLE `accomplishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`) USING HASH,
  ADD UNIQUE KEY `contact_number` (`contact_number`) USING HASH;

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recruiter_id` (`recruiter_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`) USING HASH,
  ADD UNIQUE KEY `contact_number` (`contact_number`) USING HASH;

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`) USING HASH,
  ADD UNIQUE KEY `mobile_no` (`contact_number`) USING HASH;

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests_attempted`
--
ALTER TABLE `tests_attempted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomplishments`
--
ALTER TABLE `accomplishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tests_attempted`
--
ALTER TABLE `tests_attempted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
