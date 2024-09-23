DROP DATABASE IF EXISTS `thiago_nicolas`;
CREATE DATABASE `thiago_nicolas`;
USE `thiago_nicolas`;

CREATE TABLE `professores` (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  materia VARCHAR(255) NOT NULL,
  salario DECIMAL(5, 2) NOT NULL,
  foto TEXT
);

CREATE TABLE `aula` (
  id INT PRIMARY KEY AUTO_INCREMENT,
  sala VARCHAR(255) NOT NULL,
  capacidade INT NOT NULL
);

CREATE TABLE `diario` (
  id INT PRIMARY KEY AUTO_INCREMENT,
  hora_aula DATETIME,
  professor_id INT,
  aula_id INT,
  FOREIGN KEY (professor_id) REFERENCES professores(id),
  FOREIGN KEY (aula_id) REFERENCES aula(id)
);