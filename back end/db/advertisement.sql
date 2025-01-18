CREATE TABLE `advertisement` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci