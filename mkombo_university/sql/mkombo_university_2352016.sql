
CREATE DATABASE IF NOT EXISTS `mkombo_university` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mkombo_university`;

CREATE TABLE IF NOT EXISTS `academic_info` (
  `index_no_olevel` varchar(100) NOT NULL,
  `index_no_alevel` varchar(100) DEFAULT NULL,
  `school_name_olevel` varchar(100) DEFAULT NULL,
  `school_name_alevel` varchar(100) DEFAULT NULL,
  `sc_location_olevel` varchar(100) DEFAULT NULL,
  `sc_location_alevel` varchar(100) DEFAULT NULL,
  `cert_olevel` varchar(45) DEFAULT NULL,
  `cert_alevel` varchar(45) DEFAULT NULL,
  `completion_yr_olevel` varchar(5) DEFAULT NULL,
  `completion_yr_alevel` varchar(5) DEFAULT NULL,
  `subject_taken` longtext,
  `subject_combination` varchar(5) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `academic_info` (`index_no_olevel`, `index_no_alevel`, `school_name_olevel`, `school_name_alevel`, `sc_location_olevel`, `sc_location_alevel`, `cert_olevel`, `cert_alevel`, `completion_yr_olevel`, `completion_yr_alevel`, `subject_taken`, `subject_combination`, `reg_no`) VALUES
('S4545/4545/4545', 'S1234/5555/5454', 'Mbezi Beach', 'kisimiri', 'Mbezi', 'arusha', 'CSEE', 'acsee', '2009', '2012', '["Chemistry,","Biology"]', 'PCM', '160210633999'),
('S4565/6562/5625', 'S0343/3533/4343', 'Kisimiri', 'Olekungwadu', 'Dar es salaam', 'Arusha', 'CSEE', 'acsee', '2004', '2008', '["Physics,","Chemistry,","Biology,","Civics,","History,","Kiswahili,","Geography,","Mathematics,","English"]', 'PCM', '160210998257');

CREATE TABLE IF NOT EXISTS `academic_officer` (
  `lec_no` varchar(15) NOT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `sname` varchar(60) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `marital_status` varchar(8) DEFAULT NULL,
  `starting_year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `academic_officer` (`lec_no`, `fname`, `mname`, `sname`, `username`, `password`, `gender`, `phone_no`, `email_address`, `nationality`, `marital_status`, `starting_year`) VALUES
('160215349462', 'Ahmed', 'Juma', 'Juma', 'ahmedjuma', '33c4ff4a5b45c59248a7535de46109d7', 'Male', '+255-787-987487', 'ahmedjuma@gmail.com', 'Tanzanian', 'Single', '2016');

CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `sname` varchar(60) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `nationality` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`fname`, `mname`, `sname`, `username`, `password`, `gender`, `phone_no`, `email_address`, `nationality`) VALUES
('Gerrard', 'Michael', 'Joseph', 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Male', '255786722121', 'hamzaedit@gmail.com', 'Tanzanian');

CREATE TABLE IF NOT EXISTS `admission_officer` (
  `lec_no` varchar(15) NOT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `sname` varchar(60) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `marital_status` varchar(8) DEFAULT NULL,
  `starting_year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admission_officer` (`lec_no`, `fname`, `mname`, `sname`, `username`, `password`, `gender`, `phone_no`, `email_address`, `nationality`, `marital_status`, `starting_year`) VALUES
('160214503195', 'Julius', 'Mungaya', 'Amani', 'juliusmungaya', '33c4ff4a5b45c59248a7535de46109d7', 'Male', '+255-812-787686', 'juliusmungaya@gmail.com', 'Tanzanian', 'Single', '2016');

CREATE TABLE IF NOT EXISTS `bank_account` (
  `bank_name` varchar(45) DEFAULT NULL,
  `bank_branch` varchar(45) DEFAULT NULL,
  `account_no` varchar(100) NOT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bank_account` (`bank_name`, `bank_branch`, `account_no`, `reg_no`) VALUES
('NMB', 'Posta', '092323232322', '160210998257'),
('CRDB', 'Vijana', '2321131312312', '160210633999');

CREATE TABLE IF NOT EXISTS `examination_officer` (
  `lec_no` varchar(15) NOT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `sname` varchar(60) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `marital_status` varchar(8) DEFAULT NULL,
  `starting_year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `examination_officer` (`lec_no`, `fname`, `mname`, `sname`, `username`, `password`, `gender`, `phone_no`, `email_address`, `nationality`, `marital_status`, `starting_year`) VALUES
('160218086932', 'Elizabeth', 'Malya', 'malya', 'elizabeth', '33c4ff4a5b45c59248a7535de46109d7', 'Male', '+255-676-868686', 'elizabethmalya@gmail.com', 'Tanzanian', 'Single', '2016'),
('160219047265', 'Pololo', 'Jangala', 'Jangala', '', '', '', '', '', '', '', '2016'),
('160259208465', 'Sebastian', 'Jongo', 'Jongo', '', '', '', '', '', '', '', '2016');

CREATE TABLE IF NOT EXISTS `gpa` (
  `id_gpa` int(11) NOT NULL,
  `gpa` float DEFAULT NULL,
  `gpa_class` varchar(20) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `health_insurance` (
  `membership_no` varchar(45) NOT NULL,
  `vote` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `issue_date` varchar(15) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `health_insurance` (`membership_no`, `vote`, `address`, `issue_date`, `reg_no`) VALUES
('07-25365263', 'D23', '123, Dar es salaam, Tanzania', '13/09/2000', '160210998257'),
('09-23223232', '323', '2123', '12/03/1999', '160210633999');

CREATE TABLE IF NOT EXISTS `lecturer` (
  `lec_no` varchar(15) NOT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `sname` varchar(60) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `marital_status` varchar(8) DEFAULT NULL,
  `programme` varchar(40) DEFAULT NULL,
  `hod` varchar(100) NOT NULL DEFAULT 'no',
  `department` varchar(100) DEFAULT NULL,
  `starting_year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `lecturer` (`lec_no`, `fname`, `mname`, `sname`, `username`, `password`, `gender`, `phone_no`, `email_address`, `nationality`, `marital_status`, `programme`, `hod`, `department`, `starting_year`) VALUES
('160211512322', 'Amani', 'Julio', 'Julio', 'amanijulio', '33c4ff4a5b45c59248a7535de46109d7', 'Male', '+255-777-883123', 'amanijulio@gmail.com', 'Tanzanian', 'Single', 'Bachelor Degree', 'NO', 'Information Technology', '2016'),
('160212704720', 'Dwanime', 'Awamani', 'Kujio', '', '', '', '', '', '', '', 'Bachelor Degree', 'NO', 'Information Technology', '2016'),
('160217685728', 'Zainabu', 'Ahmad', 'Juma', '', '', '', '', '', '', '', 'Bachelor Degree', 'NO', 'Information Technology', '2016'),
('160219381632', 'Ambokile', 'Kifukwe', 'Amani', '', '', '', '', '', '', '', 'Bachelor Degree', 'NO', 'Information Technology', '2016');

CREATE TABLE IF NOT EXISTS `lecturer_day` (
  `lec_no` varchar(15) NOT NULL,
  `day` text,
  `status` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `lecturer_day` (`lec_no`, `day`, `status`) VALUES
('160211512322', '["Monday","Tuesday","Wednesday"]', 'YES');

CREATE TABLE IF NOT EXISTS `modules` (
  `id_module` int(11) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `module_title` varchar(100) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `semister` varchar(20) DEFAULT NULL,
  `credit` int(4) DEFAULT NULL,
  `programme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `modules` (`id_module`, `code`, `module_title`, `course`, `year`, `semister`, `credit`, `programme`) VALUES
(1, 'cseu 09745', 'Teletraffic Engineering', 'Information Technology', 'first', 'first', 8, 'Bachelor Degree'),
(2, 'CSEU 08234', 'Calculus', 'Computer Engineering', 'first', 'first', 9, 'Ordinary Diploma'),
(3, 'cseu 09236', 'Industrial Automation', 'Electronics and Communication', 'first', 'first', 10, 'Bachelor Degree');

CREATE TABLE IF NOT EXISTS `parent` (
  `fullname` varchar(100) DEFAULT NULL,
  `phone_no_p` varchar(45) DEFAULT NULL,
  `email_p` varchar(100) NOT NULL,
  `physical_location` varchar(50) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `parent` (`fullname`, `phone_no_p`, `email_p`, `physical_location`, `reg_no`) VALUES
('Elizabeth Kaijage', '+312-321-312312', 'elizabeth@gmail.com', 'Mbezi', '160210633999'),
('Happy Urassa', '+255-099-909900', 'happy@gmail.com', 'Arusha', '160210998257');

CREATE TABLE IF NOT EXISTS `sponsor` (
  `sponsor_name` varchar(100) DEFAULT NULL,
  `sponsor_phone` varchar(40) DEFAULT NULL,
  `sponsor_email` varchar(100) DEFAULT NULL,
  `reg_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sponsor` (`sponsor_name`, `sponsor_phone`, `sponsor_email`, `reg_no`) VALUES
('HESLB', '+989-998-798789', 'hamza@gmail.com', '160210633999'),
('HESLB', '+255-767-767676', 'heslb@go.tz', '160210998257');

CREATE TABLE IF NOT EXISTS `student` (
  `reg_no` varchar(20) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `marital_status` varchar(45) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `birth_country` varchar(45) DEFAULT NULL,
  `birth_date` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `home_place` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `programme` varchar(50) DEFAULT NULL,
  `starting_year` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `student` (`reg_no`, `fname`, `mname`, `sname`, `gender`, `marital_status`, `nationality`, `birth_country`, `birth_date`, `password`, `phone_no`, `email_address`, `home_place`, `course`, `programme`, `starting_year`, `year`, `semester`) VALUES
('160210633999', 'Simon', 'Edward', 'Sarita', 'Male', 'Single', 'Tanzania', 'Tanzania', '12/07/1990', '33c4ff4a5b45c59248a7535de46109d7', '+089-080-989808', 'simonkijo@gmail.com', 'Mbezi', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160210998257', 'Elizabeth', 'Kaijage', 'Elfasi', 'Female', 'Single', 'Tanzanian', 'Tanzania', '23/03/1989', '33c4ff4a5b45c59248a7535de46109d7', '+255-234-344343', 'elizabeth@ymail.com', 'Dar es salaam', 'Information Technology', 'Ordinary Diploma', '2016', 'first', 'first'),
('160211980008', 'Qwalala', 'kuli', 'kuli', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160214808100', 'George', 'Masala', 'Masala', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Ordinary Diploma', '2016', 'first', 'first'),
('160217098961', 'Aisha', 'Mohamed', 'Mohamed', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160218902302', 'Hasani', 'Mohamed', 'Alhamade', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Ordinary Diploma', '2016', 'first', 'first'),
('160219084612', 'Walala', 'Lala', 'Lala', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160219709034', 'Gabriel', 'Musa', 'Musa', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160237371448', 'Rose', 'Joseph', 'Joseph', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160249296812', 'Mawawa', 'lolo', 'ploo', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160258282914', 'Mpeka', 'Samwel', 'Samweli', '', '', '', '', '', '', '', '', '', 'Electronics and Communication', 'Bachelor Degree', '2016', 'second', 'first'),
('160261279880', 'Emmanuel', 'Gidion', 'Gidion', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160268972344', 'Abdallah', 'Husein', 'Husein', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Ordinary Diploma', '2016', 'first', 'first'),
('160283306102', 'Julius', 'Mungaya', 'John', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160283991927', 'Qawawa', 'Pololo', 'Pololo', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160286665308', 'Halima', 'Ahmad', 'Ahmad', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160287780578', 'Deogratuis', 'Dwawa', 'Dwawa', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first'),
('160288240294', 'Simon', 'Kijo', 'Wilson', '', '', '', '', '', '', '', '', '', 'Information Technology', 'Bachelor Degree', '2016', 'first', 'first');

CREATE TABLE IF NOT EXISTS `student_marks` (
  `id_student_marks` int(11) NOT NULL,
  `ca` int(2) DEFAULT NULL,
  `fe` int(2) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL,
  `grade_point` int(1) DEFAULT NULL,
  `grade_point_x_credit` int(5) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `time_table` (
  `id_time_table` int(11) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `module` varchar(100) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `v_title` varchar(50) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year` varchar(13) DEFAULT NULL,
  `semister` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `time_table_master` (
  `lec_no` varchar(15) NOT NULL,
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `sname` varchar(60) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  `marital_status` varchar(8) DEFAULT NULL,
  `starting_year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `time_table_master` (`lec_no`, `fname`, `mname`, `sname`, `username`, `password`, `gender`, `phone_no`, `email_address`, `nationality`, `marital_status`, `starting_year`) VALUES
('160281595260', 'Ambokile', 'Kifukwe', 'Kifukwe', 'ambokile', '33c4ff4a5b45c59248a7535de46109d7', 'Male', '+255-987-987987', 'ambokilekifukwe@gmail.com', 'Tanzanian', 'Single', '2016');

CREATE TABLE IF NOT EXISTS `venue` (
  `id_venue` int(11) NOT NULL,
  `v_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO `venue` (`id_venue`, `v_title`) VALUES
(1, 'D1'),
(2, 'D2'),
(3, 'D3'),
(4, 'T1'),
(5, 'T2'),
(6, 'T3'),
(7, 'T4'),
(8, 'T5'),
(9, 'T6'),
(10, 'C1'),
(11, 'C2'),
(12, 'B1'),
(13, 'B2'),
(14, 'B3'),
(15, 'B4'),
(16, 'B5'),
(17, 'B6'),
(18, 'B7'),
(19, 'B8'),
(20, 'B9'),
(21, 'B10'),
(22, 'B11'),
(23, 'B12'),
(24, 'B13'),
(25, 'B14'),
(26, 'B15'),
(27, 'A1'),
(28, 'A2'),
(29, 'A3'),
(30, 'A4'),
(31, 'A5'),
(32, 'A6'),
(33, 'A7'),
(34, 'A8'),
(35, 'A9'),
(36, 'A10'),
(37, 'A11'),
(38, 'W14'),
(39, 'W15'),
(40, 'W1F'),
(41, 'W2F'),
(42, 'W3F'),
(43, 'W4F'),
(44, 'Q1'),
(45, 'W9'),
(46, 'C3'),
(47, 'C4'),
(48, 'C5'),
(49, 'C6'),
(50, 'C1F'),
(51, 'C2F'),
(52, 'C3F');


ALTER TABLE `academic_info`
  ADD PRIMARY KEY (`index_no_olevel`);

ALTER TABLE `academic_officer`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `admin`
  ADD PRIMARY KEY (`email_address`);

ALTER TABLE `admission_officer`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`account_no`);

ALTER TABLE `examination_officer`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `gpa`
  ADD PRIMARY KEY (`id_gpa`);

ALTER TABLE `health_insurance`
  ADD PRIMARY KEY (`membership_no`);

ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `lecturer_day`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `modules`
  ADD PRIMARY KEY (`id_module`);

ALTER TABLE `parent`
  ADD PRIMARY KEY (`email_p`);

ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`reg_no`);

ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);

ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id_student_marks`);

ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id_time_table`);

ALTER TABLE `time_table_master`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `venue`
  ADD PRIMARY KEY (`id_venue`);


ALTER TABLE `gpa`
  MODIFY `id_gpa` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `modules`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
ALTER TABLE `student_marks`
  MODIFY `id_student_marks` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `time_table`
  MODIFY `id_time_table` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `venue`
  MODIFY `id_venue` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
