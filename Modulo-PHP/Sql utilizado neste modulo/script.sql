CREATE DATABASE BD_ModuloPHP;
USE BD_ModuloPHP;

CREATE TABLE Pessoa(
	id INT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100),
	idade INT NOT NULL
);
 
INSERT INTO Pessoa (id, nome, idade) VALUES(null, "Luis", 10);

DELETE FROM Pessoa WHERE id = 1;

SELECT * FROM Pessoa ORDER BY nome;
