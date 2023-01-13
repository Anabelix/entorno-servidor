CREATE TABLE users (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `username`    varchar(255) NOT NULL UNIQUE,
  `email`       varchar(255) NOT NULL,
  `pass`        varchar(255) NOT NULL ,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
/*SI BORRAS ALGUN REGISTRO Y QUIERES RESETEAR EL AUTO_INCREMENT:
1º- HAZ UN UPDATE PARA PONER AL ULTIMO REGISTRO EL ID QUE LE CORRESPONDE
2º- HAZ UN SELECT MAX(id) FROM users;
3º- HAZ ALTER TABLE users AUTO_INCREMENT=(RESULTADO ANTERIOR+1)*/
UPDATE users SET email='anabelpedrajas@hotmail.com' WHERE id=1;
UPDATE users SET email='migped@hotmail.com' WHERE id=2;
UPDATE users SET email='romankv@hotmail.com' WHERE id=3;
UPDATE users SET email='francisacon@hotmail.com' WHERE username=4;
UPDATE users SET email='mryetireturns@gmail.com' WHERE username=5;

UPDATE users SET descripcion='15. Viendo ahora mismo: Suspicious partner, S.W.A.T y Prodigal Son. Rowoon<3.' WHERE id=1;
UPDATE users SET descripcion='El Marqués de Villaverde. No somos nadie y menos en bañador. La paz está en Bolivia. Sigueme para más tips.' WHERE id=2;
UPDATE users SET descripcion='Hola panitas soy Román hehe. CSS como estilo de vida, lorem ipsum blah blah blah...' WHERE id=3;
UPDATE users SET descripcion='15. Buscando un sentido a la vida. ' WHERE id=4;
UPDATE users SET descripcion='Holaa soy Franco Gianello y estudio DAW. Me gusta el ajedrez y pokemon. Tyty.' WHERE id=5;

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
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('francis', 'holaaa me uno al grupo', 1673466354);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('francis', 'He tenido que actualizar la base de datos lol, que pereza la vdd. Queda aun realizar la pagina de perfil xdd', 1673477403);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('alvaro', 'hola genteee, soy alvaro', 1673477627);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'hoy no es noche de kdramas :(', 1673477702);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('miguel96', 'yo soy yo y mis circunstancias', 1673477827);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('anabel', 'Un poquito de lorem ipsum: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 1673478128);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('alvaro', 'weno weno ya hice los perfiles oleeeee', 1673486577);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('alvaro', 'estoy sad :(', 1673486593);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('alvaro', 'escuchando una nueva ost yasss!!', 1673487225);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('romanXD', 'ya esta semi doneeeee ole oleeeeee', 1673488226);
INSERT INTO mensajes (username, mensaje, timestamp) VALUES ('romanXD', 'a dormir ya ', 1673488230);