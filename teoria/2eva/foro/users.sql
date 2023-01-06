CREATE TABLE users (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `username`       varchar(255) NOT NULL ,
  `pass`        varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;