
CREATE DATABASE clinica_braganca;
USE clinica_braganca;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    telefone VARCHAR(15),
    nif VARCHAR(20),
    senha VARCHAR(255),
    morada VARCHAR(255),
    is_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    tipo_consulta VARCHAR(255),
    detalhes TEXT,
    data_consulta DATE,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    assunto VARCHAR(255),
    mensagem TEXT
);