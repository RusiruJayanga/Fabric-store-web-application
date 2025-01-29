CREATE TABLE `message` (
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `message` varchar(150) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci