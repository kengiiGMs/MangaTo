create database mangaTo;
use mangaTo;

create table usuarios (
id int(4) not null primary key auto_increment,
nome varchar(60) not null,
email varchar(90) not null,
senha varchar(32) not null
);

create table comentarios(
id int not null primary key auto_increment,
id_usuario int not null,
comentario varchar(140) not null,
data_comentario datetime default current_timestamp
);

create table usuarios_seguidores(
id int not null primary key auto_increment,
id_usuario int not null,
id_usuario_seguindo int not null
);

select * from usuarios;
select * from comentarios;
select * from usuarios_seguidores;

TRUNCATE usuarios;
drop database mangaTo;