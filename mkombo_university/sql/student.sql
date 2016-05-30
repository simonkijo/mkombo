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

ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);