CREATE DATABASE PC;
USE PC;
CREATE TABLE User(
	nome VARCHAR(30) PRIMARY KEY,
    password VARCHAR(20)
);
CREATE TABLE Componentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    processador VARCHAR(50),
    PlacaMae VARCHAR(50),
    Memoria VARCHAR(50),
    PlacaVideo VARCHAR(50),
    Disco VARCHAR(50),
    Fonte VARCHAR(50),
    Torre VARCHAR(50),
    Nome VARCHAR(30),
    CONSTRAINT fkuser FOREIGN KEY (Nome) REFERENCES User(nome)
);

INSERT INTO User VALUES ('adm', '1234');

select * from Componentes;
