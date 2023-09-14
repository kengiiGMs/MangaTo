create database projetoLoja;
use projetoLoja;

create table produto(
codigo_produto int primary key,
descricao varchar(90),
valor decimal(6,3),
foto varchar(10),
imagem blob
);



create table cliente(
cpf int(11) primary key,
nomeCliente varchar(50),
cidade varchar(90),
genero char(1),
);

create table mensagem(
codigo_mensagem int primary key auto_increment,
assunto varchar(20),
obs varchar(90),
dataMensagem date
);

drop table produto;
select * from produto;
select * from cliente;
select * from mensagem;

