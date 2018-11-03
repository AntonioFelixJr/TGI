/* 
    ESTE SCRIPT CRIA A TABELA FORNECEDOR
*/

USE gastos_parlamentares_db;

-- TABELA DESPESA

DROP TABLE IF EXISTS despesa;

CREATE TABLE despesa (
	id INT,
	descricao VARCHAR(255),
	numero_sub_cota INT NOT NULL
);

ALTER TABLE despesa MODIFY id INT AUTO_INCREMENT PRIMARY KEY;
