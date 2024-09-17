create database cavalo;
use cavalo;

create table usuario(
	id int primary key auto_increment not null,
	nome varchar(150) not null,
	usuario varchar(45) not null,
    senha varchar(250) not null,
	email varchar(45) unique not null,
	dataNasc varchar(10) not null,
	genero varchar(45) not null
);

create table raca (
	id int not null primary key auto_increment,
    nome varchar(75)
);

create table vacina(
	id int not null auto_increment primary key,
    nome varchar(45) not null,
    descricao varchar(45) not null
    );

create table equino (
    id int primary key auto_increment not null,
    nome varchar(75) not null,
    id_raca int not null,
		foreign key (id_raca)
        references cavalo.raca (id)
        on delete cascade
        on update cascade,
    pelagem varchar(45) not null,
    altura int not null,
    id_usuario int not null,
		foreign key (id_usuario)
        references cavalo.usuario (id)
        on delete cascade 
        on update cascade
);

create table vacinacao(
	id int not null auto_increment primary key,
    id_vacina int not null,
		foreign key (id_vacina)
        references cavalo.vacina (id)
        on delete cascade
        on update cascade,
    id_cavalo int not null,
		foreign key (id_cavalo)
        references cavalo.equino (id)
        on delete cascade
        on update cascade,
    data_aplicacao varchar(10)
	);
