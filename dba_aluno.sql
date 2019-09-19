create schema dba_aluno;
use dba_aluno;

create table curso(
   id_curso int not null auto_increment,
   descricao varchar(100),
   valor decimal(9,2) not null,
   periodo varchar(20),
   primary key (id_curso)
); 


create table aluno(
   id_aluno int not null auto_increment,
   nome varchar(100),
   email varchar(80),
   endereco varchar (100),
   cidade varchar(100),
   uf char(2),
   id_curso int not null,
   foreign key (id_curso) references curso(id_curso),
   primary key (id_aluno)
);













