-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 10:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `course_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`course_id`, `name`, `status`) VALUES
(1, 'Computer Science', 1),
(2, 'Tamil', 2),
(3, 'English', 2),
(4, 'Maths', 1),
(5, 'Chemistry', 1),
(6, 'Physics', 1),
(7, 'Computer Application', 3),
(8, 'Economics', 3),
(9, 'Commerce', 3),
(10, 'Plant Biology & Plan', 1),
(11, 'Zoology', 1),
(12, 'Botany', 1),
(13, 'P.H.S', 1),
(14, 'Viscom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `commented_by` varchar(20) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `date` text NOT NULL,
  `profile_pic` text,
  `user_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `alumni_id`, `comment_text`, `commented_by`, `user_name`, `date`, `profile_pic`, `user_email`) VALUES
(21, 67, 7, 'hi', 'sakthi', 'sakthi-magesh-3', 'February 22, 2019, 10:24 am', 'http://localhost/CI/upload/elon30.jpeg', 'sakthimagesh2199@gmail.com'),
(22, 66, 7, 'hi there', 'sakthi', 'sakthi-magesh-3', 'February 22, 2019, 10:24 am', 'http://localhost/CI/upload/elon30.jpeg', 'sakthimagesh2199@gmail.com'),
(63, 67, 6, 'hello  ', 'Elon Musk', 'vignesh-a-968', 'February 25, 2019, 4:01 am', 'http://localhost/CI/upload/index1.jpeg', 'vickypotter2516@yandex.com'),
(64, 67, 6, 'hello  ', 'Elon Musk', 'vignesh-a-968', 'February 25, 2019, 4:01 am', 'http://localhost/CI/upload/index1.jpeg', 'vickypotter2516@yandex.com'),
(66, 67, 6, 'nice to  see you', 'Elon Musk', 'vignesh-a-968', 'February 25, 2019, 4:03 am', 'http://localhost/CI/upload/index1.jpeg', 'vickypotter2516@yandex.com'),
(69, 67, 9, 'hi', 'Julie', 'potter-a-670', 'February 25, 2019, 5:47 am', 'http://localhost/CI/upload/fjpeg.jpeg', 'vickypotter2516@gmail.com'),
(70, 68, 6, 'hello', 'Dummy', 'vignesh-a-968', 'February 25, 2019, 5:54 am', 'http://localhost/CI/upload/elon31.jpeg', 'vickypotter2516@yandex.com'),
(71, 69, 6, 'hello', 'Dummy', 'vignesh-a-968', 'February 25, 2019, 6:04 am', 'http://localhost/CI/upload/elon31.jpeg', 'vickypotter2516@yandex.com'),
(72, 69, 7, 'hi', 'sakthi', 'sakthi-magesh-3', 'February 25, 2019, 6:11 am', 'http://localhost/CI/upload/elon30.jpeg', 'sakthimagesh2199@gmail.com'),
(73, 69, 7, 'hi @dummy how can i help', 'sakthi', 'sakthi-magesh-3', 'February 25, 2019, 6:17 am', 'http://localhost/CI/upload/sakthi2.jpeg', 'sakthimagesh2199@gmail.com'),
(74, 69, 7, 'hello', 'sakthi', 'sakthi-magesh-3', 'February 25, 2019, 8:25 am', 'http://localhost/CI/upload/sakthi2.jpeg', 'sakthimagesh2199@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `branch_id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`branch_id`, `name`, `status`) VALUES
(1, 'B.Sc', 1),
(2, 'B.A', 1),
(3, 'B.Com', 1),
(4, 'B.C.A', 1),
(5, 'B.B.A', 1),
(6, 'M.A', 1),
(7, 'M.Sc', 1),
(8, 'Hindi', 1),
(9, 'M.C.A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fcm`
--

CREATE TABLE `fcm` (
  `id` int(11) NOT NULL,
  `token` varchar(300) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fcm`
--

INSERT INTO `fcm` (`id`, `token`, `date`) VALUES
(32, 'eJTcA5O_shs:APA91bH6R878mBICvqFDl5qc_2nzmdihjgvg23RrRa0fYuPH62YM5KTJ42nkbM-_Nlt1An2WwBJgSQyECxQdRPUXbz8KVVqS8VOoq8LDswBlYFD7KfHkdqSh-U7U4A9ZJ_GCAnqqlYzJ', '0000-00-00 00:00:00'),
(33, 'eJTcA5O_shs:APA91bH6R878mBICvqFDl5qc_2nzmdihjgvg23RrRa0fYuPH62YM5KTJ42nkbM-_Nlt1An2WwBJgSQyECxQdRPUXbz8KVVqS8VOoq8LDswBlYFD7KfHkdqSh-U7U4A9ZJ_GCAnqqlYzJ', '0000-00-00 00:00:00'),
(34, 'eJTcA5O_shs:APA91bH6R878mBICvqFDl5qc_2nzmdihjgvg23RrRa0fYuPH62YM5KTJ42nkbM-_Nlt1An2WwBJgSQyECxQdRPUXbz8KVVqS8VOoq8LDswBlYFD7KfHkdqSh-U7U4A9ZJ_GCAnqqlYzJ', '0000-00-00 00:00:00'),
(35, 'eJTcA5O_shs:APA91bH6R878mBICvqFDl5qc_2nzmdihjgvg23RrRa0fYuPH62YM5KTJ42nkbM-_Nlt1An2WwBJgSQyECxQdRPUXbz8KVVqS8VOoq8LDswBlYFD7KfHkdqSh-U7U4A9ZJ_GCAnqqlYzJ', '0000-00-00 00:00:00'),
(36, 'eJTcA5O_shs:APA91bH6R878mBICvqFDl5qc_2nzmdihjgvg23RrRa0fYuPH62YM5KTJ42nkbM-_Nlt1An2WwBJgSQyECxQdRPUXbz8KVVqS8VOoq8LDswBlYFD7KfHkdqSh-U7U4A9ZJ_GCAnqqlYzJ', '0000-00-00 00:00:00'),
(37, 'eJTcA5O_shs:APA91bH6R878mBICvqFDl5qc_2nzmdihjgvg23RrRa0fYuPH62YM5KTJ42nkbM-_Nlt1An2WwBJgSQyECxQdRPUXbz8KVVqS8VOoq8LDswBlYFD7KfHkdqSh-U7U4A9ZJ_GCAnqqlYzJ', '0000-00-00 00:00:00'),
(38, 'doRl1FK0DdU:APA91bGIgE54rG-iEKdpaQ-PKL0m9vjd48rofM6Wqi3H09-xAvCBwhXq3tRiPLy5yLgtXpslMRUb6fHL59fCbS_a_abcRrKtS9MUT5o5nt4HTmDJQqaNStHCASbUAkNuF9EFY4nALAR8', '0000-00-00 00:00:00'),
(39, 'd0vH-ETEDuc:APA91bHVjlrPaKlLu6FunhvIdBkx1NzEWItoqoXSVHflBtA6XxdsHVP29KOoajzeHMNpT-xySjdSCrDArImKauaO7sgM70g0owNdQqbfqKQvgbpSs9jaIPJgUnJy05q6xiizPf-jOMfi', '0000-00-00 00:00:00'),
(40, 'dY8OA4MSpxI:APA91bFoXPn_oBFuAlQ5EBm6KKVbU9jOfcufKUSerynhfLOmrFGioIXwv0GrgFS2SIQXCr1irbvSdelKgrDpcqmazmFXptwjvBQb5cq7bt9DNeHJJ3IEGyrnJ8EmfbpXfIIOMblgRIgJ', '0000-00-00 00:00:00'),
(41, 'dY8OA4MSpxI:APA91bFoXPn_oBFuAlQ5EBm6KKVbU9jOfcufKUSerynhfLOmrFGioIXwv0GrgFS2SIQXCr1irbvSdelKgrDpcqmazmFXptwjvBQb5cq7bt9DNeHJJ3IEGyrnJ8EmfbpXfIIOMblgRIgJ', '0000-00-00 00:00:00'),
(42, 'dIlQAlIZKlQ:APA91bGGEpwbgqoQe4hXjXMSTiT8Vkn5IqbtDlR3O3b6lxhcguCOt_6Ms0vJoCAJS22v5X7gyNf6FeWm1Wzhyi-DoEk0j5b---ge38VX97JqKCiy9WN9DmF0DJ0lIAGevaDueLXCQI-L', '0000-00-00 00:00:00'),
(43, 'dIlQAlIZKlQ:APA91bGGEpwbgqoQe4hXjXMSTiT8Vkn5IqbtDlR3O3b6lxhcguCOt_6Ms0vJoCAJS22v5X7gyNf6FeWm1Wzhyi-DoEk0j5b---ge38VX97JqKCiy9WN9DmF0DJ0lIAGevaDueLXCQI-L', '0000-00-00 00:00:00'),
(44, 'eT_t2ifQ0Ko:APA91bEZ9NXjwwpFaoy4hREKqvYeiPy5hKS2vySfVkNXFZeNVbWK3z7StwaE_FZkmxKxbOgldZuhzIwBlrmRbqtZwO3s71JoUNXP8q7Hao523sMubV6nUKRwSEg-o6c2HWLOBVOXQZLO', '0000-00-00 00:00:00'),
(45, 'eT_t2ifQ0Ko:APA91bEZ9NXjwwpFaoy4hREKqvYeiPy5hKS2vySfVkNXFZeNVbWK3z7StwaE_FZkmxKxbOgldZuhzIwBlrmRbqtZwO3s71JoUNXP8q7Hao523sMubV6nUKRwSEg-o6c2HWLOBVOXQZLO', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `needs`
--

CREATE TABLE `needs` (
  `need_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `body` text NOT NULL,
  `posted_by` varchar(25) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `added_date` text NOT NULL,
  `profile_pic` text,
  `user_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needs`
--

INSERT INTO `needs` (`need_id`, `alumni_id`, `category`, `body`, `posted_by`, `user_name`, `added_date`, `profile_pic`, `user_email`) VALUES
(68, 7, 'HigherEducation', 'hello i need higher education', 'sakthi', 'sakthi-magesh-3', 'February 25, 2019, 10:20 am', 'http://localhost/CI/upload/elon30.jpeg', 'sakthimagesh2199@gmail.com'),
(69, 6, 'Career', 'hello', 'Dummy', 'vignesh-a-968', 'February 25, 2019, 10:23 am', 'http://localhost/CI/upload/elon31.jpeg', 'vickypotter2516@yandex.com');

-- --------------------------------------------------------

--
-- Table structure for table `other_detail`
--

CREATE TABLE `other_detail` (
  `gender` varchar(20) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(20) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pushmessage`
--

CREATE TABLE `pushmessage` (
  `message_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `icon` longblob NOT NULL,
  `img` longblob NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `alumni_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` bigint(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year_entry` int(10) NOT NULL,
  `year_grad` int(10) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `active` tinyint(4) NOT NULL,
  `profile_pic` text NOT NULL,
  `bio` text NOT NULL,
  `receive_msg` tinyint(1) NOT NULL,
  `communication` tinyint(1) NOT NULL,
  `fb` text NOT NULL,
  `ln` text NOT NULL,
  `twitter` text NOT NULL,
  `site` text NOT NULL,
  `interest` text NOT NULL,
  `skill` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `current_city` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `experiencefrom` text NOT NULL,
  `experienceto` text NOT NULL,
  `accomplishment_type` varchar(30) NOT NULL,
  `accomplishment_text` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`alumni_id`, `fname`, `lname`, `user_name`, `email`, `pno`, `password`, `course`, `branch`, `year_entry`, `year_grad`, `rollno`, `dob`, `place`, `created_date`, `active`, `profile_pic`, `bio`, `receive_msg`, `communication`, `fb`, `ln`, `twitter`, `site`, `interest`, `skill`, `gender`, `father_name`, `address1`, `address2`, `current_city`, `title`, `domain`, `experiencefrom`, `experienceto`, `accomplishment_type`, `accomplishment_text`) VALUES
(6, 'Dummy', 'User', 'vignesh-a-968', 'vickypotter2516@yandex.com', 8110883730, '187471cfa608d0c7b9baba986989fbdb', 'B.Sc', 'Economics', 2016, 2019, '16us36', '1999-04-29', 'Sivakasi, Tamil Nadu, India', '2019-02-18', 1, 'http://localhost/CI/upload/elon31.jpeg', 'hello im elon musk i want to change the world founder and ceo of spacex', 1, 1, 'www.fb.com', 'www.linkedin.com', 'www.twitter.com', 'www.example.com', 'reading books', 'html,css,django', 'Male', 'ayyam perumal', 'abcd nagar', '', 'sivakasi', 'Django Developer', 'Django', '2016-04-29', '2020-04-29', 'Achievement', ' completed udemy courses      '),
(7, 'sakthi', 'magesh', 'sakthi-magesh-3', 'sakthimagesh2199@gmail.com', 7904076190, '187471cfa608d0c7b9baba986989fbdb', 'B.Sc', 'Computer Science', 2016, 2019, '16us36', '1999-04-29', 'SC, USA', '2019-02-18', 1, 'http://localhost/CI/upload/sakthi2.jpeg', 'hello im sakthi', 1, 1, 'http://www.fb.com', 'http://www.linkedin.com', 'http://www.twitter.com', 'http://www.example.com', 'kabadi,foot,ball,tennis', 'html,css,django', 'Male', 'Basker', 'Sasi Nagar', '', 'Sasi Nagar', 'MEAN stack developer', 'Web Developer', '2019-02-07', '2019-02-26', 'Social Contribution', 'being the part in National Ser'),
(9, 'Julie', 'yana', 'potter-a-670', 'vickypotter2516@gmail.com', 8110883730, '187471cfa608d0c7b9baba986989fbdb', 'B.A', 'English', 2016, 2019, '16us36', '1999-04-29', 'sivakasi', '2019-02-19', 1, 'http://localhost/CI/upload/fjpeg.jpeg', 'Hello my name is potter im from svks', 1, 1, 'www.fb.com', '', 'www.twitter.com', 'www.example.com', 'reading books,surfing the internet', 'html,css,python', 'Male', 'ayyam perumal', '248 abc nagar', 'indira nagar', 'sivakasi', 'Django Developer', 'Web Developer', '2000-04-29', '2020-04-30', 'Achievement', '   Completed udemy courses  '),
(10, 'potter', 'a', 'potter-a-434', 'vickypotter2516@yandex.com1', 7904076190, '187471cfa608d0c7b9baba986989fbdb', 'B.A', 'Tamil', 2016, 2019, '16us36', '1999-12-24', 'sivakasi', '2019-02-25', 0, 'http://localhost/CI/assets/images/default/prom.jpg', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `token` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `clicked` tinyint(1) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset`
--

INSERT INTO `reset` (`token`, `time`, `clicked`, `id`) VALUES
('SCj53ARsoNP4EJ192LUzwVDk', '2019-02-21 04:52:22', 1, 7),
('o5w8l7qbt69HaRYPGQ3mkhJd', '2019-02-21 09:32:46', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `token` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `clicked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`token`, `time`, `id`, `clicked`) VALUES
('zAek5h2KGvEb', '2019-02-19 17:55:57', 9, 1),
('SdzumBVZfMiO', '2019-02-25 04:33:23', 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `fcm`
--
ALTER TABLE `fcm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needs`
--
ALTER TABLE `needs`
  ADD PRIMARY KEY (`need_id`);

--
-- Indexes for table `pushmessage`
--
ALTER TABLE `pushmessage`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`alumni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `branch_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fcm`
--
ALTER TABLE `fcm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `needs`
--
ALTER TABLE `needs`
  MODIFY `need_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pushmessage`
--
ALTER TABLE `pushmessage`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
