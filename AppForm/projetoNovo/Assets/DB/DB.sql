drop database if exists Formulario_central;
create database Formulario_central;
use Formulario_central;

create table valida_usuario(
    matricula int primary key not null,
    email varchar(150) not null unique, /* é o email pessoal obrigatório do usuário */
    ctt int not null unique /* é o número de telefone pessoal obrigatório do usuário */
);
create table usuario (
    id int primary key not null auto_increment, 
    nick varchar(50) not null unique, /* é o nome de usuário que por sinal é obrigatório */
    nome varchar(150) not null, /* é o nome obrigatório do usuário, podendo ser completo ou não. */
    email_corp varchar(150) null unique, /* é o email corporativo obrigatório do usuário */
    ctt_corp int null unique, /* é o número de telefone corporativo do usuário */
    senha varchar(32) not null,
    rank int(1) not null, /* é o ranking obrigatório do usuário, para perfis de acesso. */
    dataCad datetime default current_timestamp, /* é a data de cadastro do usuário, que por sinal é automática */
    matricula int null unique, /* é a matrícula do usuário que puxa como foreign key lá do valida_usuario */
    foreign key (matricula) references valida_usuario (matricula)
);
create table classe(
    cod int primary key not null auto_increment,
    tipo varchar(255) /* Caso tenha que discriminar algo relacionado ao tipo de solicitação */
);
create table docs(
    cod int primary key not null auto_increment,
    nome varchar(255) null,
    dir text /* onde estará o caminho do arquivo a ser exibido */
);
create table notificacao(
    cod int primary key not null auto_increment,
    titulo varchar(255) not null,
    texto text not null,
    classe int,
    nome int,
    arquivo int,
    foreign key (classe) references classe (cod),
    foreign key (nome) references usuario (id),
    foreign key (arquivo) references docs (cod)
);

/* Criado por Yan Fonseca, em 04/07/2023 */