CREATE SCHEMA fitness DEFAULT CHARSET utf8;
USE fitness;

CREATE TABLE usuario(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(60),
/* Um e-mail tem até 320 caracteres no máximo */
email VARCHAR(320),
endereco VARCHAR(100),
telefone VARCHAR(12),
versao_lista INT,
data_inicio DATE,
data_saida DATE,
data_nascimento DATE,
mensalidade DECIMAL(6,2),
atraso_pagamento BOOLEAN,
ativo BOOLEAN
);

CREATE TABLE funcionario(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(60),
email VARCHAR(320),
endereco VARCHAR(100),
telefone VARCHAR(12),
cpf VARCHAR(9),
data_inicio DATE,
data_saida DATE,
data_nascimento DATE,
salario DECIMAL(6,2),
ativo BOOLEAN
);

CREATE TABLE equipamento(
id INT PRIMARY KEY AUTO_INCREMENT,
equipamento VARCHAR(60),
data_aquisicao DATETIME,
ativo BOOLEAN
);

SELECT *  from usuario;

insert into usuario (mensalidade) values (1223.12)