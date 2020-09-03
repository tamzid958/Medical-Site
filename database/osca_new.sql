-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 11:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osca_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `patient_name` varchar(500) NOT NULL,
  `service_category` varchar(500) NOT NULL,
  `service_service` varchar(500) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `service_date` varchar(100) NOT NULL,
  `service_time` varchar(100) NOT NULL,
  `service_status` varchar(20) NOT NULL,
  `payment_number` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `patient_name`, `service_category`, `service_service`, `doctor_name`, `service_date`, `service_time`, `service_status`, `payment_number`, `transaction_id`) VALUES
(4, 'Jose L. Gonzalez', 'HEART SPECIALIST', 'ARRHYTHMIA', 'Prof Dr Atahar Ali', '2020-09-16', '01:20', 'Approved', '4324305', '07bf647b-f114-4af4-a240-05095d83f6b8'),
(5, 'Umar Chichigov', 'EYE SPECIALIST', 'REFRACTIVE ERRORS', 'Dr. Refatullah', '2020-09-17', '05:21', 'Approved', '88014324305', '9bfb57b5-4dc2-4af6-a621-2e7b25a79771'),
(12, 'Jose L. Gonzalez', 'HEART SPECIALIST', 'CARDIOMYOPATHY', 'Prof. Dr. AQM Reza', '2020-09-15', '03:02', 'Approved', '01521203280', '07bf647b-f114-4af4-a240-05095d83f6b8'),
(13, 'Jose L. Gonzalez', 'HEART SPECIALIST', 'CARDIOMYOPATHY', 'Prof. Dr. AQM Reza', '2020-09-15', '03:02', 'Approved', '01521203280', '07bf647b-f114-4af4-a240-05095d83f6b8'),
(14, 'Jose L. Gonzalez', 'HEART SPECIALIST', 'CARDIOMYOPATHY', 'Prof Dr Atahar Ali', '2020-09-10', '17:54', 'Approved', '88014324305', '07bf647b-f114-4af4-a240-05095d83f6b8'),
(15, 'Jose L. Gonzalez', 'HEART SPECIALIST', 'REFRACTIVE ERRORS', 'Prof Dr Atahar Ali', '2020-09-16', '17:56', 'Approved', '88014324305', '07bf647b-f114-4af4-a240-05095d83f6b8');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(44, 'HEART SPECIALIST'),
(45, 'EYE SPECIALIST'),
(46, 'NOSE SPECIALIST');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_dir` varchar(500) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_dir`, `post_title`, `post_description`) VALUES
(11, '5f4ff856b8aba7.87061644.jpg', 'Speed-Cleaning to Kill Household Germs', 'As a rule of thumb, any area of your home with high traffic and surfaces that get touched a lot is a germ bank. Not all germs are harmful. But where there are germ strongholds, the conditions are favorable for disease-causing viruses or bacteria to lurk.'),
(12, '5f4ff98ecab8e9.49585428.jpg', 'Antiviral used to treat cat coronavirus also works against SARS-CoV-2', 'Researchers at the University of Alberta are preparing to launch clinical trials of a drug used to cure a deadly disease caused by a coronavirus in cats that they expect will also be effective as a treatment for humans against COVID-19.'),
(13, '5f514bf0a14ec0.25568657.png', 'How cancer invasion takes shape', 'Skin cancers resulting from distinct mutations have characteristic tissue forms and different disease outcomes. Analyzing the architecture of benign and aggressive tumors reveals how mechanical forces drive these patterns.'),
(14, '5f514c5fc2c8f7.93770612.jpg', 'Deciphering the genetic landscape', 'Pulmonary lymphoid malignancies comprise various entities, 80% of them are pulmonary marginal zone B-cell lymphomas (PMZL). So far, little is known about point mutations in primary pulmonary lymphomas. We characterized the genetic landscape of primary pulmonary lymphomas using a customized high-throughput sequencing gene panel covering 146 genes. Our cohort consisted of 28 PMZL, 14 primary diffuse large B-cell lymphomas (DLBCL) of the lung, 7 lymphomatoid granulomatoses (LyG), 5 mature small B-cell lymphomas and 16 cases of reactive lymphoid lesions. Mutations were detected in 22/28 evaluable PMZL (median 2 mutation/case); 14/14 DLBCL (median 3 mutations/case) and 4/7 LyG (1 mutation/case). '),
(15, '5f514db2691ea7.85974194.jpg', 'COVID-19 live updates', 'According to a new study, it is relatively rare for COVID-19 patients to return to the hospital within 2 weeks of discharge. Individuals with hypertension or chronic obstructive pulmonary disease are the most likely to return.'),
(16, '5f514e045b97e8.57436285.jpg', 'People with eating disorders negatively affected', 'The research, which appears in the Journal of Eating Disorders, raises awareness of the pandemic’s detrimental effects on people’s mental health and could be valuable for the future development of health services. COVID-19, the disease caused by SARS-CoV-2, has hospitalized hundreds of thousands of people worldwide and resulted in a significant number of deaths.'),
(17, '5f514ef66b2a04.36691880.jpg', 'Link found between metabolic syndrom', 'As journals started publishing the results of observational studies drawing on data from the first wave of the pandemic, it became clear that some underlying medical conditions were associated with a greater chance of a person developing severe COVID-19.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_ID` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_ID`, `service_name`, `category_name`, `cost`) VALUES
(32, 'REFRACTIVE ERRORS', 'EYE SPECIALIST', '30'),
(34, 'DIABETIC RETINOPATHY', 'EYE SPECIALIST', '50'),
(35, 'ARRHYTHMIA', 'HEART SPECIALIST', '50'),
(36, 'CARDIOMYOPATHY', 'HEART SPECIALIST', '30');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscribe_id`, `subscribe_mail`) VALUES
(1, 'tamjidahmed958@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `service` varchar(40) DEFAULT NULL,
  `profile_picture` varchar(500) DEFAULT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `full_name`, `email`, `phone`, `password`, `description`, `category`, `service`, `profile_picture`, `registration_time`) VALUES
(24, 'admin', 'Tamzid Ahmed', 'admin@gmail.com', '1521203280', 'MTIz', NULL, '', '', NULL, '2020-08-31 11:33:11'),
(36, 'doctor', 'Prof Dr Atahar Ali ', 'atharali@gmail.com', '02-55037242', 'T0xsbkpyeFQ=', 'Prof. Dr. Atahar Ali is a cardiologist (Interventional cardiologist & electrophysiologist - arrhythmia and heart failure specialist). He has got his fellowship in electrophysiology & cardiac pacing from Escorts Heart Institute, New Delhi, India. He also completed his fellowship in cardiac Electrophysiology from AllMS, Kerala, India. He is an expert and certified professional from Switzerland to perform CRT- D & P. Prof. Dr. Atahar Ali completed his MBBS in 1984. After completing his FCPS in Internal Medicine, he obtained his MD in cardiology in 1998. Since 2004, he has been working in the Arrhythmia and heart failure services department. He is very expert in electrophysiological procedures & ablation. Now at Evercare Hospital Dhaka\r\n', 'HEART SPECIALIST', 'ARRHYTHMIA', '1.jpg', '2020-09-02 21:24:03'),
(37, 'doctor', 'Prof. Dr. AQM Reza', 'reza@gmail.com', '01713-042780', 'UmhPOTNvaU8=', 'Renowned in Bangladesh for his expertise in Balloon Valvuloplasty including PTMC and Peripheral Angioplasty, he has an outstanding performance record in PCI, including CTOS of Coronary Artery Diseases. A highly reputed Clinical and Interventional Cardiologist, who was trained in Interventional Cardiology at the Mount Elizabeth Hospital in Singapore and at the Madras Medical Mission Hospital in India. Obtained his MBBS from Sir Salimullah Medical College, He earned his MD in Cardiology from NICVD. He was a Cardiologist at the National Institute of Cardiovascular Disease (NICVD) and had training in Internal Medicine at IPGMR in Dhaka. He received personalized training in bradycardia pacing, ICD, and CRT from Baroda, India, and Germany', 'HEART SPECIALIST', 'CARDIOMYOPATHY', '2.jpg', '2020-09-02 21:09:21'),
(38, 'doctor', 'Dr. Refatullah', 'refatullah@gmail.com', '02-9660350', 'bEd1R2lPZm8=', 'The hospital is founded in the fond memory of Dr.Md.Refatullah, MB(Cal), the first principle of Dhaka Medical College & Hospital who was also the first ophthalmologist during his era. His family members started this hospital by Saleha Akter Trust named after his wife', 'EYE SPECIALIST', 'REFRACTIVE ERRORS', '3.jpg', '2020-09-02 21:09:30'),
(39, 'doctor', 'Dr. Nurul Islam', 'nurul@gmail.com', '01743-783407', 'WUJKWHZFcFU=', 'Nurul Eye Foundation Hospital has been established in 1994 as an enterprise of Harun Eye Foundation Ltd. This Eye Hospital is the first well equipped private eye hospital in our country with a concept of a specialized doctors group practice in ophthalmology. Harun Eye Foundation Hospital is situated at its own six storied building on Mirpur Main Road at Dhanmondi, Dhaka. The ocular diagnostic department of this hospital is fully equipped with advanced equipment at level 6. The operation theater complex at entire level 3 comprises 7 operation theatres of which number 7 is a Lasik OT with world number one wave light Lasik Refractive suite only one in our country. There are 28 renowned ophthalmologists of different sub-specialties are practicing', 'EYE SPECIALIST', 'DIABETIC RETINOPATHY', '4.jpg', '2020-09-02 21:09:39'),
(40, 'patient', 'Jose L. Gonzalez', 'JoseLGonzalez@dayrep.com', '4324305', 'YW90bVFCSnE=', NULL, NULL, NULL, NULL, '2020-09-02 19:02:58'),
(41, 'patient', 'Umar Chichigov', 'umarChichigov@jourrapide.com', '88014324305', 'NDIxWXgxaWk=', NULL, NULL, NULL, NULL, '2020-09-02 19:02:35'),
(42, 'patient', 'Sultanbek Shervashidze', 'sultanbekShervashidze@jourrapide.com', '7736250', 'aERYYU1tek8=', NULL, NULL, NULL, NULL, '2020-09-02 19:03:35'),
(43, 'patient', 'Maija Sandell', 'maijaSandell@armyspy.com', '3241612', 'cWtoUEY3azI=', NULL, NULL, NULL, NULL, '2020-09-02 19:04:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_ID`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
