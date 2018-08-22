-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 04:20 PM
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
-- Database: `women`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsy`
--

CREATE TABLE `bsy` (
  `id` int(100) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `husband_name` varchar(100) NOT NULL,
  `son_of` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob_mother` date NOT NULL,
  `dob_child` date NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `no_of_child` int(5) NOT NULL,
  `caste` varchar(10) NOT NULL,
  `amount_figures` int(10) NOT NULL,
  `amount_words` varchar(300) NOT NULL,
  `policy_no` varchar(30) NOT NULL,
  `da` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsy`
--

INSERT INTO `bsy` (`id`, `applicant_name`, `husband_name`, `son_of`, `address`, `dob_mother`, `dob_child`, `birth_place`, `no_of_child`, `caste`, `amount_figures`, `amount_words`, `policy_no`, `da`) VALUES
(1, 'a', 'b', 'juyt', ' jhg', '2017-02-12', '2017-02-20', '0', 56, '0', 1, 'one', '3446', '2017-02-25'),
(2, 'xyz', 'abc', 'efg', 'HELLO ', '1977-02-09', '2018-04-28', 'lonavala', -1, 'OBC', 5000, 'Five thousands Rupees Only', '12457', '2018-04-12'),
(3, 'xyz', 'abc', 'efg', 'HELLO ', '1977-02-09', '2018-04-28', 'lonavala', -1, 'OBC', 5000, 'Five thousands Rupees Only', '12457', '2018-04-12'),
(5, 'abc', 'ahbaASJS', 'SJDHJ', 'SAJSHDAJDH ', '2018-04-03', '2018-04-12', 'UNR', 2, 'SC', 1200, 'JHSJH', '1212', '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_size` int(2) NOT NULL,
  `uploaded_at` datetime NOT NULL,
  `uploaded_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `doc_name`, `doc_size`, `uploaded_at`, `uploaded_by`) VALUES
(1, 'DU73355704.pdf', 15862, '2018-03-26 09:41:01', 1),
(2, 'BIRTH.pdf', 377419, '2018-04-12 10:24:35', 3),
(4, 'DOMICILE.pdf', 434103, '2018-04-12 10:25:21', 3),
(6, 'DU73355704.pdf', 15862, '2018-04-12 10:28:05', 3),
(7, 'New Doc 2017-07-11 (1).pdf', 758075, '2018-04-12 10:30:22', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jsy`
--

CREATE TABLE `jsy` (
  `id` int(11) NOT NULL,
  `sub_center` varchar(50) NOT NULL,
  `phc` varchar(50) NOT NULL,
  `applicant_name` varchar(25) NOT NULL,
  `husband_name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `area` varchar(10) NOT NULL,
  `card` varchar(5) NOT NULL,
  `bpl_card_no` varchar(25) NOT NULL,
  `dor` date NOT NULL,
  `registration_no` int(11) NOT NULL,
  `age` int(5) NOT NULL,
  `imp` varchar(50) NOT NULL,
  `edd` varchar(50) NOT NULL,
  `para` varchar(50) NOT NULL,
  `gravida` varchar(50) NOT NULL,
  `health_inst` varchar(50) NOT NULL,
  `doa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jsy`
--

INSERT INTO `jsy` (`id`, `sub_center`, `phc`, `applicant_name`, `husband_name`, `address`, `area`, `card`, `bpl_card_no`, `dor`, `registration_no`, `age`, `imp`, `edd`, `para`, `gravida`, `health_inst`, `doa`) VALUES
(1, 'Mumbai', 'IDK', 'Jane', 'Joe', 'Florida ', 'Rural', 'Yes', '988200021', '2017-02-01', 889376638, 28, 'Hi', 'Hello', 'Welcome', 'To', 'The World of PHP', '2017-02-21'),
(2, 'Kurla', 'Test', 'Sonia', 'Husmukh', 'Ghatkopar ', 'Rural', 'No', '', '2017-02-02', 2323, 23, 'A', 'B', 'C', 'D', 'Fortis', '2017-02-21'),
(3, 'ki', 'as', 'dd', 'ad', ' dg', 'Rural', 'No', '', '2017-02-23', 12, 3, 'cvb', 'fg', 'as', 'fhg', 'as', '2017-02-21'),
(4, 'Mumbai', 'abc', 'dd', 'ad', '48/A, MANOHAR \r\nSOUTH DADAR', 'Rural', 'No', '', '2017-02-14', 436573, 18, 'cvb', 'fg', 'as', 'fhg', 'as', '2017-02-22'),
(5, 'Mumbai', 'HU', 'abc', 'abc', 'hu ', 'Rural', 'No', '7788', '2018-04-26', 17411, 20, '12', '12', '12', '12', 'nu', '2018-04-09'),
(6, 'abc', 'xyz', 'Anuja Burambadkar', 'Anirudhaa Panchal', 'B-212 Niku Palace,Dadar-West ', 'Urban', 'Yes', '12457824', '2015-03-19', 1457825, 34, '12', '45', 'abc', 'xyz', 'LIC', '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(1, '1487692221');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_role` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_name`, `member_email`, `member_password`, `member_role`, `created_at`) VALUES
(1, 'Anuja', 'anubadkar@gmail.com', 'abc', 'admin', '2018-01-28 00:00:00'),
(2, 'Akshada', 'akshu@gmail.com', 'abc', 'admin', '2018-03-11 18:44:56'),
(3, 'Jatin', 'varlyanijatin88@gmail.com', '123', 'admin', '2018-04-10 00:00:00'),
(5, 'Ajay', 'ajayyadav@gmail.com', '123', 'admin', '2018-04-12 10:20:09'),
(6, 'Prathamesh', 'shinde@gmail.com', '1234', 'admin', '2018-04-12 10:21:31'),
(7, 'abc', 'abc@gmail.com', '123', 'admin', '2018-04-12 01:25:12'),
(8, 'Jayant', 'jayant@gmail.com', '123', 'admin', '2018-04-16 08:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `mkby`
--

CREATE TABLE `mkby` (
  `id` int(11) NOT NULL,
  `saving` varchar(25) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `amountf` int(10) NOT NULL,
  `amountw` text NOT NULL,
  `mode` text NOT NULL,
  `namen` text NOT NULL,
  `dobm` date NOT NULL,
  `addressn` varchar(100) NOT NULL,
  `share` int(3) NOT NULL,
  `name_add` varchar(100) NOT NULL,
  `name_a` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `open_minor` varchar(10) NOT NULL,
  `namem` text NOT NULL,
  `namew` text NOT NULL,
  `standing` varchar(100) NOT NULL,
  `da` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mkby`
--

INSERT INTO `mkby` (`id`, `saving`, `name`, `fname`, `address`, `dob`, `amountf`, `amountw`, `mode`, `namen`, `dobm`, `addressn`, `share`, `name_add`, `name_a`, `aadhar_no`, `open_minor`, `namem`, `namew`, `standing`, `da`) VALUES
(1, 'sdfghj', 'fghjkl', 'dfghjkl', 'dfghjkl ', '2017-02-03', 3456789, 'sdfgh', 'dfghj', 'jkl', '2017-02-15', 'dfghjk ', 345678, 'ghjk ', 'fghjk', 4567890, 'fghjkl', 'dfghjkl', 'dfghjkl', 'fghjkl;', '2017-02-25'),
(2, 'as', 'harish thapa', 'harish thapa', '502, 5th floor, ackruti star\r\nmidc central road, midc, andheri east', '2017-02-11', 1, 'sd', 'ssssssdf', 'harish thapa', '2017-02-08', '502, 5th floor, ackruti star\r\nmidc central road, midc, andheri east', 134, '502, 5th floor, ackruti star\r\nmidc central road, midc, andheri east', 'harish thapa', 4567890, 'rtyuio', 'harish thapa', 'harish thapa', 'cvbnm,', '2017-02-25'),
(6, '12334', 'Jatin varlyani', 'Jaikishin', ' Mumbai ', '1998-06-10', 12500, 'Twelve Thousand FIve Hundred Rupees', 'Cash', 'Anuja', '2010-02-02', ' Dadar', 1000, ' Ddaar', 'anuja', 2147483647, '', '', '', '', '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `pmjjby`
--

CREATE TABLE `pmjjby` (
  `id` int(15) NOT NULL,
  `name_acc` varchar(200) NOT NULL,
  `psa` varchar(200) NOT NULL,
  `mob` int(10) NOT NULL,
  `name_nom` varchar(100) NOT NULL,
  `sol_id` varchar(10) NOT NULL,
  `name_gau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `address_subscriber` varchar(300) NOT NULL,
  `address_nominee` varchar(300) NOT NULL,
  `da` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmjjby`
--

INSERT INTO `pmjjby` (`id`, `name_acc`, `psa`, `mob`, `name_nom`, `sol_id`, `name_gau`, `email`, `date`, `relationship`, `address_subscriber`, `address_nominee`, `da`) VALUES
(1, 'ertyu', '4567', 45678, 'harish thapa', '3456', '', '', '2017-03-01', 'fgh', ' fghj', ' fgbn', '2017-02-25'),
(2, '', '', 0, '', '', '', '', '1970-01-01', '', ' ', ' ', '2018-04-12'),
(3, '', '', 0, '', '', '', '', '1970-01-01', '', ' ', ' ', '2018-04-12'),
(4, '', '', 0, '', '', '', '', '1970-01-01', '', ' ', ' ', '2018-04-12'),
(5, '', '', 0, '', '', '', '', '1970-01-01', '', ' ', ' ', '2018-04-12'),
(6, '', '', 0, '', '', '', '', '1970-01-01', '', ' ', ' ', '2018-04-12'),
(7, '', '', 0, '', '', '', '', '1970-01-01', '', ' ', ' ', '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `pmuy`
--

CREATE TABLE `pmuy` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `dob` date NOT NULL,
  `poa` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `relation` text NOT NULL,
  `name` text NOT NULL,
  `aadhar` int(12) NOT NULL,
  `name_a` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `name_bank` text NOT NULL,
  `bankname` text NOT NULL,
  `branchname` text NOT NULL,
  `ifsc` varchar(15) NOT NULL,
  `bank_no` int(20) NOT NULL,
  `status` text NOT NULL,
  `ration_no` varchar(20) NOT NULL,
  `da` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmuy`
--

INSERT INTO `pmuy` (`id`, `fname`, `mname`, `lname`, `dob`, `poa`, `address`, `relation`, `name`, `aadhar`, `name_a`, `aadhar_no`, `name_bank`, `bankname`, `branchname`, `ifsc`, `bank_no`, `status`, `ration_no`, `da`) VALUES
(1, 'dfghjkl', 'dfghjkl', 'dfghjkl', '2017-02-14', 'dfghjkl;', 'dfghjkl; ', 'fghjkl;', 'ghjkl;', 34567890, 'ghjkl;\'', 4567890, 'jkl;', 'fghjkl', 'fghjk', 'fghjk', 567890, 'fghjk', '56789', '2017-02-25'),
(2, 'fgh', 'hjk', 'fghjk', '1970-01-01', '', ' ', '', '', 0, '', 0, '', '', '', '', 0, '', '', '2017-02-25'),
(3, 'fgh', 'hjk', 'fghjk', '1970-01-01', '', ' ', '', '', 0, '', 0, '', '', '', '', 0, '', '', '2017-02-25'),
(4, 'Anuja', '', '', '1970-01-01', '', ' ', '', '', 0, '', 0, '', '', '', '', 0, '', '', '2017-02-25'),
(5, 'sdf', 'sfg', 'hjk', '2017-02-23', 'dfghj', 'erty ', 'ert', 'ert', 23456, 'dfgh', 456, 'dfg', 'ertg', 'sdfgh', 'fghj', 4567, 'fgh', '567', '2017-02-25'),
(6, 'ANUJA', 'shankar', 'BURAMBADKAR', '1970-01-01', '48/A, MANOHAR BHASKAR KAWALI WADI', '502, 5th floor, ackruti star\r\nmidc central road, midc, andheri east', 'fghjkl', 'ANUJA BURAMBADKAR', 1234567890, '', 0, 'ANUJA BURAMBADKAR', 'fghjm', '', '', 0, '', '', '2017-02-25'),
(7, 'Jatin ', 'Jaikishin', 'Varlyani', '1998-08-08', '123', 'B-212,Niku Palace ,UNR-3 ', 'Son', 'Jaikishin Varlyani', 2147483647, 'Jatin Varlyani', 2147483647, 'Jatin Varlyani', 'IDBI Bank', 'Ulhasnagar-3', '145784578547854', 1245784572, 'Issued', '12457845', '2018-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `vpby`
--

CREATE TABLE `vpby` (
  `id` int(100) NOT NULL,
  `name_pensioner` varchar(200) NOT NULL,
  `father_pensioner` text NOT NULL,
  `sex` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `mobno` int(10) NOT NULL,
  `resno` int(10) NOT NULL,
  `offno` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `purchase_price` int(100) NOT NULL,
  `amt` int(20) NOT NULL,
  `deposit` int(20) NOT NULL,
  `cheque` int(100) NOT NULL,
  `dat` date NOT NULL,
  `drawn` date NOT NULL,
  `mode` varchar(100) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `branchname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `bank_no` int(40) NOT NULL,
  `it` varchar(100) NOT NULL,
  `pan` varchar(30) NOT NULL,
  `policy` varchar(100) NOT NULL,
  `policy_no` int(100) NOT NULL,
  `amt_pension` int(100) NOT NULL,
  `mode_pension` varchar(100) NOT NULL,
  `da` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vpby`
--

INSERT INTO `vpby` (`id`, `name_pensioner`, `father_pensioner`, `sex`, `nationality`, `aadhar_no`, `mobno`, `resno`, `offno`, `email`, `purchase_price`, `amt`, `deposit`, `cheque`, `dat`, `drawn`, `mode`, `bankname`, `branchname`, `type`, `address`, `bank_no`, `it`, `pan`, `policy`, `policy_no`, `amt_pension`, `mode_pension`, `da`) VALUES
(1, 'qwe', 'rtyu', 'fghjk', 'fghjk', 234567, 23456789, 3456789, 456789, 'dfghjk', 45678, 67890, 45678, 67890, '2017-02-17', '2017-02-08', 'fghjkl', 'fghjkl', 'fghjkl', 'ghjkl', ' ghjkl;', 4567890, 'Yes', '34567890', 'Yes', 3456789, 567890, 'dfghjk', '2017-02-25'),
(2, 'sdfgh', 'fg', 'fg', 'fg', 0, 3456, 456, 345678, 'ghjk', 0, 3456, 456, 34, '2017-02-17', '2017-02-20', '', '', 'sdfedrf', 'rtg', 'edrtgh ', 6, 'Yes', '34567', 'Yes', 345678, 34567, '45678', '2017-02-25'),
(3, 'Ajay Yadav', 'Kishin Yadav', 'Malee', 'Indian', 2147483647, 2147483647, 2710825, 87585, 'ajayyadav@gmail.com', 550, 12, 7500, 1245785, '2018-01-02', '2018-02-05', 'Cash', 'IDBI Bank', 'Ulhasnagar-3', 'Savings', 'B-212,Niku palace ,ulhasnagar-3 ', 2147483647, 'Yes', '878787845457874', 'Yes', 1245784, 9700, 'Cash', '2018-04-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsy`
--
ALTER TABLE `bsy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jsy`
--
ALTER TABLE `jsy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkby`
--
ALTER TABLE `mkby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmjjby`
--
ALTER TABLE `pmjjby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmuy`
--
ALTER TABLE `pmuy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vpby`
--
ALTER TABLE `vpby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsy`
--
ALTER TABLE `bsy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jsy`
--
ALTER TABLE `jsy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mkby`
--
ALTER TABLE `mkby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pmjjby`
--
ALTER TABLE `pmjjby`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pmuy`
--
ALTER TABLE `pmuy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vpby`
--
ALTER TABLE `vpby`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
