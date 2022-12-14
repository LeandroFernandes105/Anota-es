create database anotacao;
use anotacao;
drop database anotacao;




CREATE TABLE USUARIO (
    Id_user int(8) NOT NULL  PRIMARY KEY auto_increment,
    nome_user varchar(255) NOT NULL,
    email_user varchar(255) NOT NULL UNIQUE,
    senha_user varchar(15) NOT NULL
   
);
select * from usuario;


CREATE TABLE anotacao (
    Id_mensagem int(8) NOT NULL  PRIMARY KEY auto_increment,
    Id_user  int(8) NOT NULL,
    titulo varchar(255) NOT NULL,
     conteudo varchar(255) NOT NULL
    
   
);
select * from anotacao;		


ALTER TABLE anotacao
ADD FOREIGN KEY (Id_user)
REFERENCES USUARIO (Id_user);