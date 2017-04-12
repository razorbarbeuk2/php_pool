USE db_gbourson;

DROP TABLE IF EXISTS `ft_table`; 

CREATE TABLE `ft_table` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(8) DEFAULT 'toto' NOT NULL,
	`groupe` ENUM('staff','student','other') NOT NULL,
	`date_de_creation` DATE NOT NULL,
	PRIMARY KEY (`id`)
);