CREATE TABLE IF NOT EXISTS usuarios(
  USU_INT_ID int(11) AUTO_INCREMENT PRIMARY KEY,
  USU_VAR_NOME varchar(100) NOT NULL,
  USU_VAR_EMAIL varchar(100) NOT NULL,
  USU_VAR_SENHA varchar(255) NOT NULL
);