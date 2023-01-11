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

insert into mensajes (username, mensaje, timestamp) values ('anabel', 'a tomarse las uvas hhehe', 1672444800);
insert into mensajes (username, mensaje, timestamp) values ('miguel', 'tan solo unos minutos para decir adiós al 2022 lol', 1672444800);
insert into mensajes (username, mensaje, timestamp) values ('miguel', 'Feliz año nuevo panitas!!!', 1672531200);
insert into mensajes (username, mensaje, timestamp) values ('anabel', 'Feliz año 2023!!!', 1672531200);
insert into mensajes (username, mensaje, timestamp) values ('anabel', 'Ya vienen los Reyes omgg', 1672876800);
insert into mensajes (username, mensaje, timestamp) values ('miguel', 'Han caido muchos regalitos???', 1672963200);
insert into mensajes (username, mensaje, timestamp) values ('anabel', 'Noche de kdramas', 1673222400);
insert into mensajes (username, mensaje, timestamp) values ('romanXD', 'hola soy romanXD', 1673308800);
insert into mensajes (username, mensaje, timestamp) values ('romanXD', 'yo hasta el viernes no existo chicos, tengo examen de bd el jueves', 1673308800);
insert into mensajes (username, mensaje, timestamp) values ('miguel', 'no puede serrrr, cancelaron 1899', 1673308800);