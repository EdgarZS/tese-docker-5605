CREATE DATABASE IF NOT EXISTS test;
USE test;

CREATE TABLE IF NOT EXISTS integrantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    grupo VARCHAR(50)
);


INSERT INTO integrantes (nombre, apellido, grupo) VALUES 
('Alan Eduardo', 'Alcantara Perez', '5605'),
('Jose Gerardo', 'Diaz Saavedra', '5605'),
('Miguel Angel', 'Huerta Torres', '5605'),
('Fernanda Graciela', 'Estrada Tapia', '5605'),
('Edgar Noe', 'Zaragoza San Juan', '5605');
