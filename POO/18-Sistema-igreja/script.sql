CREATE DATABASE IF NOT EXISTS igreja;

CREATE TABLE IF NOT EXISTS igreja (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comunidade VARCHAR(1000), NOT NULL,
    descricao VARCHAR(1000), NOT NULL,
    endereco VARCHAR(750),NOT NULL,
    equipe VARCHAR(100),NOT NULL,
    email VARCHAR(100),NOT NULL,
);

USE nome_da_base_de_dados;
