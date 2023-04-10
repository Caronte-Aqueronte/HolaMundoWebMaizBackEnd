/*Creacion del superusuario*/
CREATE SCHEMA maiz;
USE maiz;
CREATE USER usuarioMaiz IDENTIFIED BY '123456789!@#$%^&*(';
GRANT ALL PRIVILEGES ON maiz.* TO usuarioMaiz;

/*Creacion de las tablas */
CREATE TABLE usuario(
nombre_usuario VARCHAR(50) NOT NULL,
`password` LONGTEXT NOT NULL,
rol VARCHAR(50) NOT NULL,
PRIMARY KEY (nombre_usuario)
);

CREATE TABLE articulo(
id INT NOT NULL AUTO_INCREMENT,
titulo VARCHAR(50) NOT NULL,
banner BLOB NOT NULL,
informacion LONGTEXT,
fecha_creacion DATE NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE autor(
usuario VARCHAR(50) NOT NULL,
`articulo` INT NOT NULL,
PRIMARY KEY (`articulo`),
FOREIGN KEY (usuario) REFERENCES usuario (nombre_usuario) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (`articulo`) REFERENCES articulo (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE `like`(
id INT NOT NULL AUTO_INCREMENT,
articulo INT NOT NULL,
fecha_creacion DATE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (articulo) REFERENCES articulo (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE comentario	(
id INT NOT NULL AUTO_INCREMENT,
articulo INT NOT NULL,
comentario LONGTEXT NOT NULL,
fecha_comentario DATE NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (articulo) REFERENCES articulo (id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE categoria (
nombre VARCHAR(50) NOT NULL,
PRIMARY KEY (nombre)
);

CREATE TABLE categoria_articulo(
categoria VARCHAR(50) NOT NULL,
articulo INT NOT NULL,
PRIMARY KEY (articulo),
FOREIGN KEY (articulo) REFERENCES articulo (id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (categoria) REFERENCES categoria (nombre) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO usuario VALUES ('admin@admin', '123', 'ADMIN');
