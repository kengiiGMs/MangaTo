create database mangaTo;
use mangaTo;

create table usuarios (
id_usuario int(4) not null primary key auto_increment,
nome_usuario varchar(60) not null,
email_usuario varchar(90) not null,
senha_usuario varchar(32) not null
);

create table comentarios(
id_comentario int not null primary key auto_increment,
id_usuario int not null,
comentario varchar(140) not null,
data_comentario datetime default current_timestamp
);

select * from usuarios;
select * from comentarios;
TRUNCATE usuarios;
drop database mangaTo;