-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 07:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet care`
--

-- --------------------------------------------------------

--
-- Table structure for table `care_center`
--

CREATE TABLE `care_center` (
  `Hospital_code` int(5) NOT NULL,
  `Hospital_name` varchar(30) NOT NULL,
  `Hospital_Location` varchar(100) NOT NULL,
  `Client_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `care_center`
--

INSERT INTO `care_center` (`Hospital_code`, `Hospital_name`, `Hospital_Location`, `Client_no`) VALUES
(1, 'Pet Care ', 'Latifabad No.6 Hyderabad, Sindh', 0),
(2, 'Pet Care ', 'Safora Block No.7 Sukkur, Sindh ', 0),
(3, 'Pet Care ', 'Chamra Chorangi Gate No. 5 Karachi, Sindh', 0),
(4, 'Pet Care ', 'Aliabad Phase 7 Larkana, Sindh', 0),
(5, 'Pet Care ', 'Chandni Chowk Chak No. 8 Umerkot, Sindh', 0),
(6, 'Pet Care ', 'Hussainabad, Hyderabad,Sindh', 0),
(7, 'Pet Care ', 'Qasimabad, Hyderabad, Sindh', 0),
(8, 'Pet Care ', 'Tara Chowk, Sukkur, Sindh', 0),
(9, 'Pet Care ', 'Nizamabad, Sukkur, Sindh', 0),
(10, 'Pet Care ', 'Gulshan Nagar, Larkana, Sindh', 0),
(11, 'Pet Care ', 'Chaman Chowk, Larkana, Sindh', 0),
(12, 'Pet Care ', 'Defense Phase 6, Karachi, Sindh', 0),
(13, 'Pet Care ', 'Sadar, Karachi, Sindh', 0),
(14, 'Pet Care ', 'Mithi Colony, Umerkot, Sindh', 0),
(15, 'Pet Care ', 'Ramna Galli Block No.8, Umerkot, Sindh', 0),
(16, 'Pet Care ', 'Kachi Abadai, Karachi, Sindh', 0),
(17, 'Pet Care ', 'Nagpur, Umerkot, Sindh', 0),
(18, 'Pet Care ', 'Kiyani Road, Sukkur, Sindh', 0),
(19, 'Pet Care ', 'Qasim Chowk, Hyderabad, Sindh', 0),
(20, 'Pet Care ', 'Karim Phase 3, Larkana, Sindh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client_no` int(10) NOT NULL,
  `Client_name` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pet_owned` varchar(30) NOT NULL,
  `Contact_no` varchar(15) NOT NULL,
  `Centre_chosed` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_no`, `Client_name`, `Address`, `Pet_owned`, `Contact_no`, `Centre_chosed`) VALUES
(1, 'Syed Areeb', 'Gul-Center', 'Cat', '03313521879', 1),
(2, 'Ahmed', 'Flat 6,2nd Floor Shelter Plaza  Salahuddin Road  Hyderabad Cantt', 'Kotta', '033221328923', 1),
(3, 'Klaus', 'Bahria Town', 'Wolf', '03123874268', 12),
(4, 'Caroline', 'Defence ,Phase 4', 'German Shepherd', '03423423411', 19),
(5, 'Demon Salvatore', 'Tara Chok Block 2', 'Owl', '03456456349', 2),
(6, 'Stefan Salvatore', 'Phase6 Near Aliabad', 'Lion', '03234234215', 4),
(7, 'Eleven', 'Mithi Chok block no 5', 'American Eskimo Dog', '03234235712', 15),
(8, 'Zain', 'Defence', 'Cat', '3463463653', 12),
(9, 'xgfdgf', 'sgdg', 'ddfg', '5745', 13),
(10, 'Huzaifa', 'village ', 'Cat', '+923222560444', 6),
(11, 'Ahmer', 'kiyani Road', 'miyaoon', '+923222560444', 10),
(12, 'Alishba', 'Mirpur', 'Parrot', '03324556789', 1),
(13, 'Zoha', 'Village Faqeer Muhammad Bachal Khaskeli chak.41 workshop District Sanghar', 'Rabbit', '+923222560438', 8);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Doctor_id` int(11) NOT NULL,
  `Doctor_name` varchar(30) NOT NULL,
  `Speciality` varchar(50) NOT NULL,
  `Enrolled_in_Centre` int(5) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Doctor_id`, `Doctor_name`, `Speciality`, `Enrolled_in_Centre`, `Email`) VALUES
(101, 'Dr. Zoha', 'Skin', 1, 'zohamemon@gmail.com'),
(102, 'Dr. Tayyaba', 'Anthrax', 2, 'tayyaba@gmail.com'),
(103, 'Dr. Kashaf', 'viruses', 3, 'kashaf@gmail.com'),
(104, 'Dr. Hamza', 'Nutritional deficiencies', 4, 'hamza@gmail.com'),
(105, 'Dr. Harsha', 'viruses', 6, 'harsha@gmail.com'),
(106, 'Dr. Alishba', 'Anthrax', 5, 'alishba@gmail.com'),
(107, 'Dr. Sarfaraz', 'Nutritional deficiencies', 7, 'sarfaraz@gmail.com'),
(108, 'Dr. Sahiba', 'fungi', 10, 'sahiba@gmail.com'),
(109, 'Dr. Priyanka', 'Chemical poisons', 9, 'priyanka@gmail.com'),
(110, 'Dr. Chandni', 'Skin', 8, 'chandni@gmail.com'),
(111, 'Dr. Areeb', 'Vaccination', 11, 'areeb@gmail.com'),
(112, 'Dr. Tehmas', 'Surgery', 12, 'tehmas@gmail.com'),
(113, 'Dr. Bhawish', ' Infectious', 13, 'bhawish@gmail.com'),
(114, 'Dr. Zawar', 'Anthrax', 14, 'zawar@gmail.com'),
(115, 'Dr. Mahnoor', 'Skin', 15, 'mahnoor@gmail.com'),
(116, 'Dr. Kanwal', 'viruses', 16, 'kanwal@gmail.com'),
(117, 'Dr. Farheen', 'Veterinarian', 17, 'farheen@gmail.com'),
(118, 'Dr. Reem', 'fungi', 18, 'reem@gmail.com'),
(119, 'Dr. Afia', 'Skin', 19, 'afia@gmail.com'),
(120, 'Dr. Faseeh', 'veterinarian', 20, 'faseeh@gmail.com'),
(121, 'Dr. Taha', 'sk', 1, 'taha@gmail.com'),
(122, 'Dr. Imtiaz', 'Anthrax', 2, 'imtiaz@gmail.com'),
(123, 'Dr. Shahbaz', 'viruses', 3, 'shahbaz@gmail.com'),
(124, 'Dr. Babar', 'Nutritional deficiencies', 4, 'babar@gmail.com'),
(125, 'Dr. Zaheer', 'viruses', 5, 'zaheer@gmail.com'),
(126, 'Dr. Zamin', 'Anthrax', 6, 'zamin@gmail.com'),
(127, 'Dr. Kashif', 'Nutritional deficiencies', 7, 'kashif@gmail.com'),
(128, 'Dr. Tanveer', 'fungi', 8, 'tanveer@gmail.com'),
(129, 'Dr. Israr', 'Chemical poisons', 9, 'israr@gmail.com'),
(130, 'Dr. Izhar', 'Skin', 10, 'izhar@gmail.com'),
(131, 'Dr. Fakhar', 'Vaccination', 11, 'fakhar@gmail.com'),
(132, 'Dr. Shahdab', 'Surgery', 12, 'shaddy@gmail.com'),
(133, 'Dr. Arman', 'Infectious', 13, 'arman@gmail.com'),
(134, 'Dr. Bilal', 'Anthrax', 14, 'bilal@gmail.com'),
(135, 'Dr. Aryan', 'Fever', 15, 'aryan@gmail.com'),
(136, 'Dr. Sahil', 'fever', 16, 'sahil@gmail.com'),
(137, 'Dr. Sara', 'Vaccination', 17, 'sara@gmail.com'),
(138, 'Dr. Rabia', 'Infectious', 18, 'rabia@gmail.com'),
(139, 'Dr. Sana', 'Anthrax', 19, 'sana@gmail.com'),
(140, 'Dr. Unsa', 'Nutritional deficiencies', 20, 'unsa@gmail.com'),
(141, 'Dr. Hashir', 'Allergy Testing', 1, 'hashir2@gmail.com'),
(142, 'Dr.Anas', 'Allergy Testing', 2, 'anas21@gmail.com'),
(143, 'Dr.Shazil', 'Allergy Testing', 3, 'shazilshah22@gmail.com'),
(144, 'Dr.Umair', 'Allergy Testing', 4, 'umairsyed@gmail.com'),
(145, 'Dr.Faraz', 'Allergy Testing', 5, 'farazahmed24@gmail.com'),
(146, 'Dr.Saqib', 'Allergy Testing', 6, 'saqibawan146@gmail.com'),
(147, 'Dr.Samad', 'Allergy Testing', 7, 'samadhassan@gmail.com'),
(148, 'Dr.Anna', 'Allergy Testing', 8, 'anna23@gmail.com'),
(149, 'Dr.Hamza', 'Allergy Testing', 9, 'hamzakamran2@gmail.com'),
(150, 'Dr.Shahroz', 'Allergy Testing', 10, 'shahrozali2gmail.com'),
(151, 'Dr.Aaliyan', 'Allergy Testing', 11, 'aaliyancchanna11@gmail.com'),
(152, 'Dr.Syeda Qareen', 'Allergy Testing', 12, 'qareensyeda27@gmail.com'),
(153, 'Dr.Zartasha', 'Allergy Testing', 13, 'zartasha1@gmail.com'),
(154, 'Dr.Irfan', 'Allergy Testing', 14, 'ifranbaloch@gmail.com'),
(155, 'Dr.Kashif', 'Allergy Testing', 15, 'kashifsyed@gmail.com'),
(156, 'Dr.Kamlesh', 'Allergy Testing', 16, 'kamleshganjha@gmail.com'),
(157, 'Dr.Irtaza', 'Allergy Testing', 17, 'irtazasyed@gmail.com'),
(158, 'Dr.Atif', 'Allergy Testing', 18, 'atifsyed27@gmail.com'),
(159, 'Dr.Maham', 'Allergy Testing', 19, 'mahamsyed@gmail.com'),
(160, 'Dr.Isha', 'Allergy Testing', 20, 'ishasyed@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_no` int(5) NOT NULL,
  `Client_name` varchar(30) NOT NULL,
  `Pet_name` varchar(30) NOT NULL,
  `Diagnosed_by` varchar(30) NOT NULL,
  `Disease` varchar(30) NOT NULL,
  `Current_status` varchar(20) NOT NULL,
  `Duration_of_treatment` varchar(30) NOT NULL,
  `Date_of_treatment` varchar(30) NOT NULL,
  `center_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_no`, `Client_name`, `Pet_name`, `Diagnosed_by`, `Disease`, `Current_status`, `Duration_of_treatment`, `Date_of_treatment`, `center_id`) VALUES
(1, 'Syed Areeb', 'Cat', 'Dr. Zoha', 'Skin', 'In-Progess', '21 Days', '01/11/2022', 1),
(2, 'Ahmed', 'Kotta', 'Dr. Taha', 'sk', 'In-Progess', '26 Days', '01/11/2022', 1),
(3, 'Klaus', 'Wolf', 'Dr. Shahdab', 'Surgery', 'In-Progess', '29 Days', '01/11/2022', 12),
(4, 'Caroline', 'German Shepherd', 'Dr.Maham', 'Allergy Testing', 'In-Progess', '11 Days', '01/11/2022', 19),
(5, 'Demon Salvatore', 'Owl', 'Dr.Anas', 'Allergy Testing', 'In-Progess', '14 Days', '01/11/2022', 2),
(6, 'Stefan Salvatore', 'Lion', 'Dr. Hamza', 'Nutritional deficiencies', 'In-Progess', '25 Days', '01/11/2022', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Username` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email_id`, `Password`, `Username`) VALUES
('f1aa64637f02e08d6cac6aacbdc5ded5', 'af09d7053cea27f861c9feb78936ab17', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care_center`
--
ALTER TABLE `care_center`
  ADD PRIMARY KEY (`Hospital_code`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_no`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Doctor_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
