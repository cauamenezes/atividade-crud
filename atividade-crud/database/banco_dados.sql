#CRIAR O BANCO DE DADOS:
create database cadastro;

#HABILITAR O BANCO DE DADOS:
use cadastro;

#CRIAR A TABELA DE PESSOAS NO BANCO DE DADOS:
create table tbl_pessoa(
cod_pessoa int unsigned auto_increment primary key,
nome varchar(250) not null,
sobrenome varchar(500) not null,
email varchar(500) not null,
celular varchar(20) not null
);

create table tbl_administrador(
	cod_administrador int not null auto_increment primary key,
    usuario varchar(80) not null,
    senha varchar(80) not null,
    unique index(cod_administrador)
);
