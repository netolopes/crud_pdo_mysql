# crud_pdo_mysql

TABELA  UTILIZAR INNODB

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT, -- id
    name VARCHAR(60) NOT NULL, -- nome
    email VARCHAR(80) NOT NULL, 
    PRIMARY KEY(id)
) COLLATE=utf8_general_ci;
