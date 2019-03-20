-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2019 at 07:45 PM
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
(2, 'Tamil', 1),
(3, 'English', 1),
(4, 'Maths', 1),
(5, 'Chemistry', 1),
(6, 'Physics', 1),
(7, 'Computer Application', 1),
(8, 'Economics', 1),
(9, 'Commerce', 1),
(10, 'Plant Biology & Plan', 1),
(11, 'Zoology', 1),
(12, 'Botany', 1),
(13, 'Physical Education H', 1),
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
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `added_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needs`
--

INSERT INTO `needs` (`need_id`, `alumni_id`, `category`, `body`, `posted_by`, `added_date`) VALUES
(31, 5, 'HigherEducation', 'Hi there welcome everyone', 'potter', 'February 14, 2019, 8:07 am'),
(35, 5, 'Other', 'I need money', 'potter', 'February 14, 2019, 11:26 am'),
(42, 3, 'HigherEducation', 'hi im testing now', 'vignesh', 'February 15, 2019, 12:00 am');

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
  `email` varchar(50) NOT NULL,
  `pno` bigint(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `year_entry` int(10) NOT NULL,
  `year_grad` int(10) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `active` tinyint(4) NOT NULL,
  `profile_pic` blob NOT NULL,
  `bio` text NOT NULL,
  `receive_msg` tinyint(1) NOT NULL,
  `communcation` tinyint(1) NOT NULL,
  `fb` text NOT NULL,
  `ln` text NOT NULL,
  `twitter` text NOT NULL,
  `site` text NOT NULL,
  `interest` text NOT NULL,
  `skill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`alumni_id`, `fname`, `lname`, `email`, `pno`, `password`, `course`, `branch`, `year_entry`, `year_grad`, `rollno`, `dob`, `place`, `created_date`, `active`, `profile_pic`, `bio`, `receive_msg`, `communcation`, `fb`, `ln`, `twitter`, `site`, `interest`, `skill`) VALUES
(3, 'vignesh', 'rocks', 'vickypotter2516@yandex.com', 8110883730, '187471cfa608d0c7b9baba986989fbdb', '', '', 2016, 2019, '16us37', '1999-04-29', 'kutralam', '2019-02-08', 1, '', 'Hi there im vignesh im coming from ttl\r\n\r\nfirst cry on 29apr ', 0, 0, 'www.facebook.com/vicky', '', 'www.twitter.com/thalavicky0', 'www.djblogs.herokuapp.com', '', ''),
(5, 'potter', 'M', 'vickypotter2516@gmail.com', 7904076190, '187471cfa608d0c7b9baba986989fbdb', '', '', 2016, 2019, '16us35', '1999-04-29', 'sivakasi', '2019-02-10', 1, '', 'Hello im vignesh im an student of anjac\r\n\r\nvignesh rocks', 0, 0, 'www.facebook.com/vicky', '', 'www.twitter.com/thalavicky0', 'www.djblogs.herokuapp.com', '', ''),
(6, 'sakthi', 'vel', 'vickypotter25116@gmail.com', 9585580859, '47be59fb8d5e37e15b03c538112dd59c', 'bcom', 'matg', 2016, 2016, '16us37', '2019-02-22', 'sivakasi', '2019-02-11', 0, '', '', 0, 0, '', '', '', '', '', ''),
(7, 'vignesh', 'a', 'vickypotter2516@yandex.com1', 7904076190, '187471cfa608d0c7b9baba986989fbdb', 'B.Sc', 'Computer Scienc', 2016, 2019, '16us36', '1999-04-29', 'Sivakasi, Tamil Nadu, India', '2019-02-12', 0, '', '', 0, 0, '', '', '', '', '', ''),
(8, 'vignesh', 'a', 'a@a.com1', 7904076190, '187471cfa608d0c7b9baba986989fbdb', 'B.Sc', 'Computer Scienc', 2016, 2019, '16us36', '2019-12-31', 'Sivakasi, Tamil Nadu, India', '2019-02-13', 1, '', '', 0, 0, '', '', '', '', '', ''),
(9, 'vignesh', 'a', 'b@b.com', 8110883730, '187471cfa608d0c7b9baba986989fbdb', 'B.Sc', 'Computer Scienc', 2016, 2019, '16us36', '1999-04-29', '?i?li, 19 May?s Mahallesi, ?i?li/Istanbul, Turkey', '2019-02-13', 1, '', '', 0, 0, '', '', '', '', '', ''),
(10, 'sakthi', 'vel', 'sakthimagesh2199@gmail.com', 8110883730, '187471cfa608d0c7b9baba986989fbdb', 'B.Sc', 'Physics', 2016, 2019, '16us36', '1998-10-29', 'Sivakasi, Tamil Nadu, India', '2019-02-13', 1, '', '', 0, 0, '', '', '', '', '', '');

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
('2b749285df19eafd59b20fc5e2169001', '2019-01-18 17:04:40', 1, 23),
('c734a574964dea221f036cef954814d6', '2019-01-18 17:41:32', 1, 24),
('d4e6cb3e361eb33b45eb1fde8603787b', '2019-01-18 13:13:51', 0, 24),
('wRFQsqizTxX9SI5Jc2tE3pvV', '2019-01-18 17:52:28', 1, 24),
('p3gk6IqzWFMeBUAZTcwEo1ux', '2019-01-19 03:38:27', 1, 24),
('Be7JG1RkgqWDy3m8fFSQiX5M', '2019-01-19 03:52:05', 1, 24),
('xAevRtBG8K4ETbhZwoNMpqXS', '2019-01-19 05:14:01', 1, 24),
('MlDKuSkNhTywqJGmORrg3zVB', '2019-01-21 05:11:00', 1, 24),
('3f7I5RXaucvPr49dVzwNO81C', '2019-01-21 00:42:16', 0, 24),
('3o15juaiYMNl9bmnL4t2OeDh', '2019-01-21 04:18:19', 0, 24),
('M2SNsbiChYXF6AVRw3xag7HE', '2019-01-21 04:45:24', 0, 24),
('TcNRqh97nHMivDdPaQZIlOeY', '2019-01-21 04:45:50', 0, 24),
('4FyeYDp6PXIG9jmHTilbAfkx', '2019-01-21 04:46:40', 0, 24),
('cZL35twD9bdfQyphWz8liq2N', '2019-01-21 06:45:16', 0, 24),
('tqwpHoXNUef4D9Yz2bCurGnV', '2019-01-21 06:46:32', 0, 24),
('5HMLsfv9JcFjey8diVU1wI4r', '2019-01-21 06:46:45', 0, 24),
('xaho9B71NtUInQ6b48CLj5eg', '2019-01-21 06:47:06', 0, 24),
('CPsiYyboHaX25LDhTnk1qfJM', '2019-01-21 06:47:15', 0, 24),
('eTEogIf6Xdw3UsvbqWY2prGc', '2019-01-21 06:47:23', 0, 24),
('5axI3rE12QLyUqKb4sBo6CFk', '2019-01-21 06:47:34', 0, 24),
('pEaRLdv7UtyjTbFY9nmxZOK3', '2019-01-21 06:48:28', 0, 24),
('T4MqKi2NwU6JsSX1C5kQhIrA', '2019-01-21 06:48:32', 0, 24),
('SCpOijmIfB89MbYcQn4ZUxle', '2019-01-21 06:49:06', 0, 24),
('YbsxW8e23ZUuqIzlTCLMh47P', '2019-01-21 06:49:31', 0, 24),
('dxf9YipFgZGA3yuJzQaU2ORV', '2019-01-21 06:49:57', 0, 24),
('nD5UqdzBX87CwL2VKicxuvhb', '2019-01-21 06:50:18', 0, 24),
('fqtT1iovJh8IWGALRwa265ed', '2019-01-21 06:50:28', 0, 24),
('hH5iDyCWSftQzb7TOBd6sApZ', '2019-01-21 06:50:37', 0, 24),
('yUdsimPct2ZWIDx1wk9f4jKv', '2019-01-21 06:50:46', 0, 24),
('LUKmvb9qGxlRgouJHXWCsE3A', '2019-01-21 06:51:01', 0, 24),
('qwO91sgQidK7N2bcBHUSFtZj', '2019-01-21 06:54:50', 0, 24),
('ZHqby86iK2QnCEjuLYNAetMS', '2019-01-21 23:08:23', 0, 24),
('6OfVkyPwj4h7D9vbY3CcpXEs', '2019-01-21 23:08:29', 0, 24),
('oaYrsEKwZvyIc27qL3DiJ5WU', '2019-01-21 23:08:35', 0, 24),
('NyFYxeqvMiS7D2wVaroHCzZX', '2019-01-21 23:08:40', 0, 24),
('Trmhv6xAkHyE5RpzZBPXMNQL', '2019-01-21 23:08:45', 0, 24),
('wiGpNTuvmdlzj2VEg6LSCJRo', '2019-01-21 23:08:51', 0, 24),
('sPxG6AzNEhmH2qQp3VBe5WyC', '2019-01-21 23:08:56', 0, 24),
('uIJrEhSTlqPFHog6i8LfVsvk', '2019-01-21 23:09:02', 0, 24),
('46biHtX3wqYl5hCsB1IvNGz8', '2019-01-21 23:09:06', 0, 24),
('j1bYxBpc9nGz4kuHiq7MvIsO', '2019-01-21 23:09:11', 0, 24),
('6l4uNs35ovHYKRCy9OnSLjTD', '2019-01-21 23:09:15', 0, 24),
('XG35dTpxmhwPsBa1NjUHnuFM', '2019-01-21 23:09:20', 0, 24),
('BmoUY6p8wzA4EXbDarsyIOTv', '2019-01-21 23:09:26', 0, 24),
('9l35qtvm6Z2rC1Dp7kTxuQPA', '2019-01-21 23:09:30', 0, 24),
('83RQWcwkqJpUGuSsXCDTgOKy', '2019-01-21 23:09:35', 0, 24),
('8lMvanNK5RygQZhEfJGePxI4', '2019-01-21 23:09:40', 0, 24),
('sPLejIqhNax3S6wHFWOodzAJ', '2019-01-21 23:09:45', 0, 24),
('HqEQt7ourAgJDeba8w9nl23d', '2019-01-21 23:09:50', 0, 24),
('QCaSirxtv4L3OnokdRNZIVfG', '2019-01-21 23:09:54', 0, 24),
('bQsD7dHPhyk6Gmr5S4OAxlnK', '2019-01-21 23:10:59', 0, 24),
('6ZIGRqcLlnkSjO3P214xH8zN', '2019-01-21 23:12:43', 0, 24),
('Qd5Kp9ZLeGyvA4wPkWjm3Fs1', '2019-01-21 23:12:46', 0, 24),
('kYb7LsgT26AyqpU3c5ZloNuv', '2019-01-21 23:16:25', 0, 24),
('LHamYlAKWziejbdGUPNv5Boy', '2019-01-21 23:18:46', 0, 24),
('wMephRK6E9jaOL7zHJrFloiX', '2019-01-21 23:19:42', 0, 24),
('9QImvNBfcdyoX56kCiEhJw7x', '2019-01-21 23:19:47', 0, 24),
('lVBOiCvms9Rf4a35TIhQbkZ7', '2019-01-21 23:19:52', 0, 24),
('n48Qp5NVj2agqHIMdsEDmihx', '2019-01-21 23:19:57', 0, 24),
('sPzCG1Rtr5dEno42YkAlDbXi', '2019-01-21 23:20:02', 0, 24),
('5Wl7r9NAMIBbhEQa41iKRUYO', '2019-01-21 23:20:07', 0, 24),
('Ulqawy4QLP6JOecNfhz1XoT5', '2019-01-21 23:20:12', 0, 24),
('KZlp2M8qgDNFIcEefx5hy3YQ', '2019-01-21 23:20:16', 0, 24),
('qUPjgJ1BcSCivQzIm6HZE4Rs', '2019-01-21 23:20:21', 0, 24),
('sRlhgWEaHMjY2OfxoFAdnt3m', '2019-01-21 23:20:25', 0, 24),
('1IabT5lLmkCp27JvAuzcGqZH', '2019-01-21 23:20:30', 0, 24),
('mfqWElUiZrGTpHCSuYQaFXw8', '2019-01-21 23:20:35', 0, 24),
('vfWAaFOjuL1HkUNl5Ihg2Y4R', '2019-01-21 23:20:39', 0, 24),
('K7qB2vumsTClaQthgzoZxW41', '2019-01-21 23:20:44', 0, 24),
('5FloXjQKvcOMAePVJwrdx4L6', '2019-01-21 23:20:49', 0, 24),
('SFzUO9gEGqdXIMt3Zk5VrAsC', '2019-01-21 23:20:53', 0, 24),
('RIXU957rAafP2qQ8FboY4GEz', '2019-01-21 23:20:58', 0, 24),
('yls46jo1ZfhBEieF7QSMxLnz', '2019-01-21 23:33:48', 0, 24),
('TWjynp4rmUODgwQkRK2AYHNt', '2019-01-22 09:33:07', 0, 24),
('bgpwvytULCZ4eJMuXcA72kSf', '2019-01-22 15:02:36', 1, 24),
('RcJbUMEimOnVxKvoX6Yz7GfH', '2019-01-22 16:47:50', 1, 24),
('HnFz17iJbfQjVE8BkReNsWm3', '2019-01-22 16:48:27', 1, 24),
('jAIFnwDS6dB93gvaeN5ERsoW', '2019-01-22 19:15:32', 1, 22),
('zNXSrIdVPlRMbOL3GHq1ytBo', '2019-01-22 12:26:58', 0, 24),
('vqKdLaymhAfYIGc23JX95zo7', '2019-01-22 17:03:30', 1, 24),
('VRSBYvkJ9OQxCfgr56mesuZa', '2019-01-22 14:42:27', 0, 22),
('8ByqwHMxEuAi3YmtbrXk5WNU', '2019-01-22 14:46:57', 0, 22),
('q8LASCautUvlcVk93fBnsMO6', '2019-01-22 14:47:50', 0, 22),
('BymbkaTuiUxcqRKdZQFenGWA', '2019-01-22 14:50:15', 0, 22),
('nSAH7Jgy24DhcvOzFkPKUorB', '2019-01-23 04:38:08', 1, 24),
('nR4ymFOKMfHhG8U12wbspetd', '2019-01-23 00:08:41', 0, 24),
('VlDZzCkadgnHtiwKFoue8TWj', '2019-01-23 06:49:39', 1, 24),
('MVRUwrYuFETS4pfjJWPa8H51', '2019-01-23 07:00:55', 1, 24),
('AW5VKSubYkXEGy2m3HjFQoBd', '2019-01-23 07:18:42', 1, 24),
('VA81WtXzfsEdHRrapnmMBkxh', '2019-01-28 01:23:16', 0, 24),
('qZPnKlk3u6yDQJLEFCNfrz4x', '2019-01-28 11:29:11', 1, 24),
('DvE7I8agheY6f1sw3nRHWuSo', '2019-01-28 10:39:27', 0, 22),
('bgnOF8vsJcxHW2jd3NGB6eaD', '2019-01-28 10:40:16', 0, 22),
('VnOiPQElueMx8JStYNWfsFXA', '2019-02-04 00:21:15', 0, 1),
('oTuKmsEHFLiyGftI6MAUD3d5', '2019-02-04 04:52:51', 1, 1),
('h3a17zMfiZ9HOeoLtAdj5rUc', '2019-02-04 06:03:24', 1, 1),
('2vmICY4zWHqslXrtMN1OnDpg', '2019-02-04 01:24:08', 0, 2),
('7BcEXAvRtb8UkyiL4SCYHjP5', '2019-02-04 01:24:50', 0, 2);

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
('S7kpxD2ljy8n', '2019-01-18 06:29:44', 18, 0),
('jq3O1S8KBnbz', '2019-01-18 09:25:41', 19, 0),
('2JPuNcprR6i8', '2019-01-18 10:44:17', 20, 0),
('sIgKWDGHq2Zr', '2019-01-18 15:46:26', 21, 1),
('HJASL8s95Fod', '2019-01-18 15:54:15', 22, 1),
('VTIRNEqXemMx', '2019-01-18 16:00:01', 23, 1),
('a12XMlRtSnUd', '2019-01-18 17:17:11', 24, 1),
('SHO73lEyxK8A', '2019-02-04 04:47:32', 1, 1),
('7uAVfL9GTwOQ', '2019-02-04 01:20:26', 2, 0),
('Vw9plvdgzMEC', '2019-02-04 01:21:44', 3, 0),
('EwhQd4PaYB6q', '2019-02-04 06:04:02', 4, 1),
('SrgBZPX1RYed', '2019-02-04 03:25:52', 5, 0),
('XSfYaQ3mVukg', '2019-02-04 08:00:38', 6, 1),
('mjVPgawLWc46', '2019-02-05 06:33:23', 1, 0),
('3fjIMhZbCurd', '2019-02-07 05:48:31', 1, 0),
('9yH1qgwTt6La', '2019-02-07 12:33:56', 2, 0),
('hQux9mBO21ZL', '2019-02-08 11:10:47', 3, 0),
('suCTN3oxfyQe', '2019-02-10 10:11:41', 4, 0),
('bpjwCSltfJXT', '2019-02-10 10:11:48', 5, 0),
('GrhpMxvzaB61', '2019-02-11 02:42:36', 6, 0),
('W8vMGskwzJnu', '2019-02-12 14:09:16', 7, 0),
('zPvi3RACMg7k', '2019-02-13 05:49:37', 8, 0),
('Ef2l68g7YKz3', '2019-02-13 06:02:36', 9, 0),
('qv23UHPSQkNz', '2019-02-13 12:46:13', 10, 0);

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
  MODIFY `need_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
