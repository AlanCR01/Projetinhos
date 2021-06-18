CREATE database provaabrangente;
use provaabrangente;
create table usuario(
	cod_usu int auto_increment primary key,
	login varchar(30) not null,
	senha varchar(20) not null,
	email varchar(30) unique not null,
	nome varchar(40) ,
	telefone numeric(9,0)
	);
create table endereco(
  cod_end int auto_increment primary key,
  rua_end varchar(50) not null,
  num_end varchar(5) not null, 
  comp_end varchar(100) not null, 
  bai_end varchar(50) not null,
  cod_usu int,
  constraint endereco_cod_usu_fk foreign key(cod_usu) references usuario(cod_usu)
);

create table historico(
	cod_his int auto_increment primary key,
	receita blob, 
	data_pedido date ,
	cod_usu int , 
	constraint historico_cod_usu_fk  foreign key(cod_usu) references usuario(cod_usu)

);
alter table historico add column data_entrega date;

create table pedido(
	cod_ped int auto_increment primary key,
	data_pedido date,
	data_pre_pedido date,
	cod_usu int,
	receita blob,
	constraint pedido_cod_usu_fk  foreign key(cod_usu) references usuario(cod_usu)
);
alter table pedido 
add column data_pre_pedido date;

select * from usuario u ;
select * from pedido;
select * from endereco e;
select * from historico;

insert into usuario(cod_usu,login,senha,email,nome,telefone)
values(1,'Alan22',12345,'alan@email.com','Alan',54789632),
(2,'Fernando01',147852369,'fernando@email.com','Fernando Almeida',54123232),
(6,'Humberto',147852369,'Humberto@email.com','Humberto almeida',54123232),
(3,'Marcelo',987456,'marcelo@email.com','Marcelo',54723632),

insert into pedido(cod_ped,data_pedido,cod_usu,data_pre_pedido)
values (1,'2021-06-17',1,'2021-06-20');
insert into pedido(cod_ped,data_pedido,cod_usu,data_pre_pedido)
values (2,'2021-06-17',1,'2021-06-18');
insert into pedido(cod_ped,data_pedido,cod_usu,data_pre_pedido)
values (3,'2021-06-17',2,'2021-06-19');
insert into pedido(cod_ped,data_pedido,cod_usu,data_pre_pedido)
values (4,'2021-06-17',3,'2021-06-19');


insert into historico(cod_his,data_pedido,cod_usu,data_entrega)
values (1,'2021-06-14',3,'2021-06-16');
insert into historico(cod_his,data_pedido,cod_usu,data_entrega)
values (2,'2021-06-09',1,'2021-06-10'),(3,'2021-06-14',1,'2021-06-16');
insert into usuario(cod_usu,login,senha,email,telefone)
values(4,'Eduardo',12345,'eduardo@email.com',54789632);
insert into endereco
values(1,'NomeRua',14,'Ap. 09','Centro',1);
insert into endereco
values(2,'NomeRua2',142,'Ap. 092','Centro',2);


insert into usuario(cod_usu,login,senha,email)
values(0,'Ana','admin123','ana@email.com');

