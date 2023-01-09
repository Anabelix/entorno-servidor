CREATE TABLE users (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `username`       varchar(255) NOT NULL UNIQUE,
  `pass`        varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE mensajes (
  `id`        MEDIUMINT NOT NULL AUTO_INCREMENT,
  `username`  varchar(255) NOT NULL,
  `mensaje`   varchar(255) NOT NULL,
  timestamp int,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`username`) REFERENCES users(`username`) ON DELETE CASCADE
) ENGINE=InnoDB;