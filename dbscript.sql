
CREATE DATABASE employees;
CREATE TABLE `employe` (
  `IdEmployee` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `EmployeeLastName` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `EmployeeEmail` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `HireDate` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IdEmployee`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci