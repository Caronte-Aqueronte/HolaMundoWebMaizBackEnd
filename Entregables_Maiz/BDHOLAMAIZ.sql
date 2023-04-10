/*Creacion del superusuario*/
CREATE SCHEMA maiz;
USE maiz;
CREATE USER usuarioMaiz IDENTIFIED BY '123456789!@#$%^&*(';
GRANT ALL PRIVILEGES ON maiz.* TO usuarioMaiz;
/*creacion de las tablas8*/

CREATE TABLE `like`(
id INT NOT NULL AUTO_INCREMENT,
fecha_creacion DATE NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE comentario	(
id INT NOT NULL AUTO_INCREMENT,
comentario LONGTEXT NOT NULL,
fecha_comentario DATE NOT NULL,
PRIMARY KEY (id)
);
