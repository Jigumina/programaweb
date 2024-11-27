-- Crear la base de datos
CREATE DATABASE kpop_users;

-- Usar la base de datos
USE kpop_users;

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL,
    cancion_favorita VARCHAR(100)
);

CREATE TABLE sugerencias_canciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_cancion VARCHAR(255) NOT NULL,
    sugerido_por VARCHAR(255),
    url_canc varchar(255) NOT NULL,
    comentario TEXT
);
