CREATE TABLE users (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `username`    varchar(255) NOT NULL UNIQUE,
  `pass`        varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

UPDATE users SET email='anabelpedrajas@hotmail.com' WHERE id=1;
UPDATE users SET email='migped@hotmail.com' WHERE id=2;
UPDATE users SET email='romankv@hotmail.com' WHERE id=3;
UPDATE users SET email='francisacon@hotmail.com' WHERE username='francis';
UPDATE users SET email='mryetireturns@gmail.com' WHERE username='alvaro';

UPDATE users SET descripcion='15. Viendo ahora mismo: Suspicious partner, S.W.A.T y Prodigal Son. Rowoon<3.' WHERE id=1;
UPDATE users SET descripcion='El Marqués de Villaverde. No somos nadie y menos en bañador. La paz está en Bolivia. Sigueme para más tips.' WHERE id=2;
UPDATE users SET descripcion='Hola panitas soy Román hehe. CSS como estilo de vida, lorem ipsum blah blah blah...' WHERE id=3;
UPDATE users SET descripcion='Holaa soy Franco Gianello y estudio DAW. Me gusta el ajedrez y pokemon. Tyty.' WHERE id=5;
UPDATE users SET descripcion='Javier Lasso. Juego con la consola en clase lol. Buscando un sentido a la vida.' WHERE id=4;

CREATE TABLE mensajes (
  `id`        MEDIUMINT NOT NULL AUTO_INCREMENT,
  `username`  varchar(255) NOT NULL,
  `mensaje`   varchar(255) NOT NULL,
  timestamp int,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`username`) REFERENCES users(`username`) ON DELETE CASCADE
) ENGINE=InnoDB;

INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'a tomarse las uvas hhehe', 1672444800);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('miguel96', 'tan solo unos minutos para decir adiós al 2022 lol', 1672444800);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('miguel96', 'Feliz año nuevo panitas!!!', 1672531200);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'Feliz año 2023!!!', 1672531200);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'Ya vienen los Reyes omgg', 1672876800);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('miguel96', 'Han caido muchos regalitos???', 1672963200);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'Noche de kdramas', 1673222400);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('romanXD', 'hola soy romanXD', 1673308800);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('romanXD', 'yo hasta el viernes no existo chicos, tengo examen de bd el jueves', 1673308800);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('miguel96', 'no puede serrrr, cancelaron 1899', 1673308800);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('romanXD', 'hola', 1673305200);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'hemos avanzado con el foro', 1673434922);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'hay que darle estilos', 1673442198);