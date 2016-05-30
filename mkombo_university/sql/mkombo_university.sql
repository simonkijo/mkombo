
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

CREATE TABLE IF NOT EXISTS `academic_officer` (
  `aca_no` varchar(15) NOT NULL,
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

CREATE TABLE IF NOT EXISTS `admission_officer` (
  `adm_no` varchar(15) NOT NULL,
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

CREATE TABLE IF NOT EXISTS `bank_account` (
  `bank_name` varchar(45) DEFAULT NULL,
  `bank_branch` varchar(45) DEFAULT NULL,
  `account_no` varchar(100) NOT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `examination_officer` (
  `exam_no` varchar(15) NOT NULL,
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

CREATE TABLE IF NOT EXISTS `modules` (
  `id_module` int(11) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `module_title` varchar(100) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `semister` varchar(20) DEFAULT NULL,
  `credit` int(4) DEFAULT NULL,
  `programme` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `parent` (
  `fullname` varchar(100) DEFAULT NULL,
  `phone_no_p` varchar(45) DEFAULT NULL,
  `email_p` varchar(100) NOT NULL,
  `physical_location` varchar(50) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `sponsor` (
  `sponsor_name` varchar(100) DEFAULT NULL,
  `sponsor_phone` varchar(40) DEFAULT NULL,
  `sponsor_email` varchar(100) NOT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `ttm_no` varchar(15) NOT NULL,
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

CREATE TABLE IF NOT EXISTS `venue` (
  `id_venue` int(11) NOT NULL,
  `v_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;


ALTER TABLE `academic_info`
  ADD PRIMARY KEY (`index_no_olevel`);

ALTER TABLE `academic_officer`
  ADD PRIMARY KEY (`aca_no`);

ALTER TABLE `admin`
  ADD PRIMARY KEY (`email_address`);

ALTER TABLE `admission_officer`
  ADD PRIMARY KEY (`adm_no`);

ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`account_no`);

ALTER TABLE `examination_officer`
  ADD PRIMARY KEY (`exam_no`);

ALTER TABLE `gpa`
  ADD PRIMARY KEY (`id_gpa`);

ALTER TABLE `health_insurance`
  ADD PRIMARY KEY (`membership_no`);

ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lec_no`);

ALTER TABLE `modules`
  ADD PRIMARY KEY (`id_module`);

ALTER TABLE `parent`
  ADD PRIMARY KEY (`email_p`);

ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`sponsor_email`);

ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);

ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id_student_marks`);

ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id_time_table`);

ALTER TABLE `time_table_master`
  ADD PRIMARY KEY (`ttm_no`);

ALTER TABLE `venue`
  ADD PRIMARY KEY (`id_venue`);


ALTER TABLE `gpa`
  MODIFY `id_gpa` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `modules`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `student_marks`
  MODIFY `id_student_marks` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `time_table`
  MODIFY `id_time_table` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `venue`
  MODIFY `id_venue` int(11) NOT NULL AUTO_INCREMENT;
