CREATE DATABASE FISIO DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE FISIO;

/*CREATE TABLE IF NOT EXISTS USUARIO( 
  IDUSUARIO INT(11) AUTO_INCREMENT PRIMARY KEY, 
  NOME VARCHAR(255) NOT NULL, 
  LOGIN VARCHAR(255) NOT NULL, 
  SENHA VARCHAR(255) NOT NULL,
  TIPO VARCHAR(255) NOT NULL
 )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
 */
 
CREATE TABLE IF NOT EXISTS ALUNO( 
  IDALUNO INT(11) AUTO_INCREMENT PRIMARY KEY, 
  NOMEALUNO VARCHAR(255) NOT NULL, 
  DATANASCALUNO DATE NOT NULL, 
  SEXOALUNO VARCHAR(255) NOT NULL,
  RGALUNO VARCHAR(255) NOT NULL, 
  CPFALUNO VARCHAR(255) NOT NULL, 
  ESTADOCIVILALUNO VARCHAR(255) NOT NULL,
  ENDERECOALUNO VARCHAR(255) NOT NULL, 
  BAIRROALUNO VARCHAR(255) NOT NULL,
  CIDADEALUNO VARCHAR(255) NOT NULL, 
  PROFISSAOALUNO VARCHAR(255) NOT NULL,
  TELEFONEALUNO VARCHAR(255) NOT NULL, 
  MATRICULAALUNO VARCHAR(255) NOT NULL,
  LOGIN VARCHAR(255) NOT NULL,
  SENHA INT(11) NOT NULL
 )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
 
 CREATE TABLE IF NOT EXISTS PROFESSOR( 
  IDPROF INT(11) AUTO_INCREMENT PRIMARY KEY, 
  NOMEPROF VARCHAR(255) NOT NULL, 
  DATANASCPROF DATE NOT NULL,
  SEXOPROF VARCHAR(255) NOT NULL,
  RGPROF VARCHAR(255) NOT NULL,
  CPFPROF VARCHAR(255) NOT NULL,
  ESTADOCIVILPROF VARCHAR(255) NOT NULL,
  ENDERECOPROF VARCHAR(255) NOT NULL,
  BAIRROPROF VARCHAR(255) NOT NULL,
  CIDADEPROF VARCHAR(255) NOT NULL, 
  TELEFONEPROF VARCHAR(255) NOT NULL,
  ESPECIALIZACAO VARCHAR(255) NOT NULL,
  LOGIN VARCHAR(255) NOT NULL,
  SENHA INT(11) NOT NULL
 )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
 
 CREATE TABLE IF NOT EXISTS FUNCIONARIO( 
  IDFUNC INT(11) AUTO_INCREMENT PRIMARY KEY, 
  NOMEFUNC VARCHAR(255) NOT NULL, 
  DATANASCFUNC DATE NOT NULL,
  SEXOFUNC VARCHAR(255) NOT NULL,
  RGFUNC VARCHAR(255) NOT NULL,
  CPFFUNC VARCHAR(255) NOT NULL,
  ESTADOCIVILFUNC VARCHAR(255) NOT NULL,
  ENDERECOFUNC VARCHAR(255) NOT NULL,
  BAIRROFUNC VARCHAR(255) NOT NULL,
  CIDADEFUNC VARCHAR(255) NOT NULL,
  TELEFONEFUNC VARCHAR(255) NOT NULL,
  LOGIN VARCHAR(255) NOT NULL, 
  SENHA INT(11) NOT NULL
 )ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;
 
 
INSERT INTO `aluno`(`NOMEALUNO`, `DATANASCALUNO`, `SEXOALUNO`, `RGALUNO`, `CPFALUNO`, 
  `ESTADOCIVILALUNO`, `ENDERECOALUNO`, `BAIRROALUNO`, `CIDADEALUNO`, `PROFISSAOALUNO`,
  `TELEFONEALUNO`, `MATRICULAALUNO`, `LOGIN`, `SENHA`) 
VALUES ('Felipe Sousa','1970-08-12','Masculino','00002121','072.000.000-00','Solteiro','Rua Regente Feijo,1250',
  'Cidade Nova','Ico-ce','Autonomo','(88) 99845-7773','10206','fe@gmail',123);
 
INSERT INTO `professor`(`NOMEPROF`, `DATANASCPROF`, `SEXOPROF`, `RGPROF`, 
  `CPFPROF`, `ESTADOCIVILPROF`, `ENDERECOPROF`, `BAIRROPROF`, `CIDADEPROF`, `TELEFONEPROF`, `ESPECIALIZACAO`, `LOGIN`, `SENHA`) 
VALUES ('Adriano Lima','1980-03-01','Masculino','003232111','445.000.000-00','Solteiro','Rua Delegado Jose de lima,1234',
  'Centro','Ico-ce','(88) 99860-7724','Pós-Graduado','adr@gmail',123);