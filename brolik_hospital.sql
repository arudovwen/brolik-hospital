-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 11:12 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brolik_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `first_name` varchar(11) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street1` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `home_phone` int(11) NOT NULL,
  `mobile_phone` int(11) NOT NULL,
  `physician_type` varchar(11) NOT NULL,
  `physician_gender` varchar(11) NOT NULL,
  `physician_name` varchar(11) NOT NULL,
  `appointment_reason` text NOT NULL,
  `appointment_day` varchar(11) NOT NULL,
  `appointment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `appointment_comm` varchar(11) NOT NULL,
  `self_insured` varchar(11) NOT NULL,
  `healthInsurancePlan` varchar(11) NOT NULL,
  `policyID` int(11) NOT NULL,
  `groupID` int(11) NOT NULL,
  `subscriberName` varchar(11) NOT NULL,
  `subscriberDOB_day` int(2) NOT NULL,
  `subscriberDOB_month` text NOT NULL,
  `subscriberDOB_year` int(4) NOT NULL,
  `relationshipToPatient` text NOT NULL,
  `relationshipToPatientCustom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `first_name`, `middle_name`, `last_name`, `street1`, `city`, `state`, `zipcode`, `dob`, `email`, `gender`, `home_phone`, `mobile_phone`, `physician_type`, `physician_gender`, `physician_name`, `appointment_reason`, `appointment_day`, `appointment_time`, `appointment_comm`, `self_insured`, `healthInsurancePlan`, `policyID`, `groupID`, `subscriberName`, `subscriberDOB_day`, `subscriberDOB_month`, `subscriberDOB_year`, `relationshipToPatient`, `relationshipToPatientCustom`) VALUES
(1, 'fvdfji', 'kkk', 'kkk', 'kkk', 'kkk', 'kkk', 77, '2018-01-01', 'lodk@gmail.com', 'male', 89, 9, 'adult', 'male', 'ffff', 'ddddddddddd', 'wednesday', '0000-00-00 00:00:00', 'email', 'insured', 'Preferred P', 244, 444, 'fff', 17, '7', 2003, 'Spouse', 'ffff'),
(2, '$fname', '$mname', '$lname', '$street1', '$city', '$state', 0, '0000-00-00', '$email', '$gender', 0, 0, '$physicianT', '$pgender', '$pname', '$appointment_reason', '$appointmen', '0000-00-00 00:00:00', '$appointmen', '$selfInsure', '$healthInsu', 0, 0, '$subscriber', 0, '$subscriberDOB_month', 0, '$relationshipToPatient', '$relationshipToPatientCustom');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_username`, `password`, `first_name`, `last_name`) VALUES
(33, 'da n', 'dc3abd91412f88c0f43a4beb0173d5d6', '', ''),
(34, 'da n n', 'b242e5d8eed54132087fbc4fc573ffa8', '', ''),
(35, 'joh', '3f1fc907c45f1a765984e64abd9f31eb', 'jon', 'jon'),
(36, 'jon', '006cb570acdab0e0bfc8e3dcb7bb4edf', 'jon', 'jon'),
(37, 'doctor', 'f9f16d97c90d8c6f2cab37bb6d1f1992', 'admin', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_refer`
--

CREATE TABLE `doctor_refer` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `refer_from` varchar(100) NOT NULL,
  `refer_to` varchar(100) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_refer`
--

INSERT INTO `doctor_refer` (`id`, `patient_name`, `sex`, `refer_from`, `refer_to`, `diagnosis`, `reason`) VALUES
(1, 'Jane doe', 'female', 'Dr Kane', 'Dr Tim', 'cancer', 'She is a stage 4');

-- --------------------------------------------------------

--
-- Table structure for table `medication_form`
--

CREATE TABLE `medication_form` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `prescribed_medication` varchar(500) NOT NULL,
  `doctor_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication_form`
--

INSERT INTO `medication_form` (`id`, `patient_name`, `date`, `prescribed_medication`, `doctor_name`) VALUES
(1, 'jane', '2018-10-09', '1 injection\r\n2 sachet of ampicilin', 'Dr John');

-- --------------------------------------------------------

--
-- Table structure for table `patient_diagnosis`
--

CREATE TABLE `patient_diagnosis` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `weight` int(5) NOT NULL,
  `symptoms` varchar(1000) NOT NULL,
  `allergies` varchar(500) NOT NULL,
  `diagnosis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_diagnosis`
--

INSERT INTO `patient_diagnosis` (`id`, `date`, `full_name`, `age`, `sex`, `weight`, `symptoms`, `allergies`, `diagnosis`) VALUES
(1, '2018-10-10', 'James', 21, 'male', 75, 'head ache, fever', 'none', 'malaria type 1');

-- --------------------------------------------------------

--
-- Table structure for table `refer_patient`
--

CREATE TABLE `refer_patient` (
  `id` int(11) NOT NULL,
  `referral_name` varchar(15) NOT NULL,
  `referral_phone` int(11) NOT NULL,
  `referral_email` varchar(50) NOT NULL,
  `referral_cardNo` int(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `patient_age` int(3) NOT NULL,
  `patient_email` varchar(50) NOT NULL,
  `patient_address` varchar(50) NOT NULL,
  `patient_gender` text NOT NULL,
  `patient_phone` int(11) NOT NULL,
  `patient_symptoms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refer_patient`
--

INSERT INTO `refer_patient` (`id`, `referral_name`, `referral_phone`, `referral_email`, `referral_cardNo`, `patient_name`, `patient_age`, `patient_email`, `patient_address`, `patient_gender`, `patient_phone`, `patient_symptoms`) VALUES
(1, 'uuu', 33, 'fd@s', 444, 'rwe', 77, 'ddd@ss', 'jgugu', 'female', 5757, 'uvbbiububub'),
(2, 'uuu', 33, 'fd@s', 444, 'rwe', 0, 'ddd@ss', 'jgugu', 'female', 5757, 'uvbbiububub');

-- --------------------------------------------------------

--
-- Table structure for table `register_patient`
--

CREATE TABLE `register_patient` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street1` varchar(50) NOT NULL,
  `street2` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zipcode` int(5) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `retype_email` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `home_phone` varchar(11) NOT NULL,
  `mobile_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_patient`
--

INSERT INTO `register_patient` (`id`, `first_name`, `middle_name`, `last_name`, `street1`, `street2`, `city`, `state`, `zipcode`, `dob`, `email`, `retype_email`, `gender`, `home_phone`, `mobile_phone`) VALUES
(6, '  Success', 'Chidiebere', 'Ahon', '10,dawning street', 'same', 'ikeja', 'Lagos', 10001, '1998-02-05', 'succy2010@gmail.com', 'succy2010@gmail.com', 'male', '2147483647', '1234855'),
(8, ' success', 'arudovwen', 'ahon', '1 otunba street', '32 dawning street', 'qq', 'q', 1111, '2018-10-19', 'su@gmail.com', 'su@gmail.com', 'male', '08102588399', '9');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_username`, `password`, `first_name`, `last_name`) VALUES
(7, 'yyyyyyyyyyy', '4c3a2a977b37ee152cbaa563be51a21c', '', ''),
(8, 'yyyyyyyyyyy', '4c3a2a977b37ee152cbaa563be51a21c', '', ''),
(9, 'yyyyyyyyyyy', '4c3a2a977b37ee152cbaa563be51a21c', '', ''),
(10, 'da n n', 'd926d7bb9ccf46fc04a61bd65d87b9b3', '', ''),
(11, 'da n ny', 'f4d067967ea66792dc85e89c4df1ef9a', '', ''),
(12, 'ko', 'c70fd4260c9eb90bc0ba9d047c068eb8', '', ''),
(13, 'kou', 'a82a70e06b163fbf0d380d015522ce5a', '', ''),
(14, 'joh', 'bc25f4a426e3822cfa87c83798af88fd', 'jon', 'jon'),
(15, 'jon', '006cb570acdab0e0bfc8e3dcb7bb4edf', 'jon', 'jon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_refer`
--
ALTER TABLE `doctor_refer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication_form`
--
ALTER TABLE `medication_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer_patient`
--
ALTER TABLE `refer_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_patient`
--
ALTER TABLE `register_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `doctor_refer`
--
ALTER TABLE `doctor_refer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medication_form`
--
ALTER TABLE `medication_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refer_patient`
--
ALTER TABLE `refer_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_patient`
--
ALTER TABLE `register_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
