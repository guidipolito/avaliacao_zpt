CREATE DATABASE zpt_db;

USE zpt_db;

CREATE TABLE `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `department` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `employees` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `user_department` (
  `user` int unsigned NOT NULL,
  `department` int unsigned NOT NULL,
  PRIMARY KEY (`user`,`department`),
  CONSTRAINT `FK_department` FOREIGN KEY (`department`) REFERENCES `department` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_user` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB;
