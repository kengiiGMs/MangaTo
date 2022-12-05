create database mangaTo;
use mangaTo;

create table usuarios (
id_usuario int(4) not null primary key auto_increment,
nome_usuario varchar(60) not null,
email_usuario varchar(90) not null,
senha_usuario varchar(40) not null
);

select * from usuarios;

drop database mangaTo;