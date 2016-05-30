
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
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lec_no`);