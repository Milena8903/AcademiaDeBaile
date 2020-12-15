CREATE DATABASE Bailando;
USE Bailando;

CREATE TABLE Usuario (
  id_Usuario INT auto_increment not null,
  Nombre varchar(45) NOT NULL,
  Apellido varchar(45) NOT NULL,
  Email varchar(45) NOT NULL,
  Fecha_Nacimiento DATE,
  Genero varchar(5) NOT NULL,
  Danza_Preferida varchar(45) NOT NULL,
  Observaciones varchar(45) NOT NULL,
  constraint pk_id_Codigo primary key (id_Usuario)
);

insert into Usuario (Nombre, Apellido, Email, Fecha_Nacimiento, Genero, Danza_Preferida,Observaciones) values ('Sandra','Lopez','sandra@gmail','2015-04-15','F','Salsa','Ninguno');

CREATE TABLE Pareja (
  id_Pareja INT auto_increment not null,
  Nombre_Pareja1 varchar(50) NOT NULL,
  Nombre_Pareja2 varchar(50) NOT NULL,
  Categoria varchar(45) NOT NULL,
  Color_Vestido varchar(45) NOT NULL,
  constraint pk_id_Codigo primary key (id_Pareja)
);

insert into Pareja (Nombre_Pareja1, Nombre_Pareja2, Categoria, Color_Vestido) values ('Sandra Pacheco','Andres Lopez','Amateur','Rojo');

CREATE TABLE Puntuacion (
  id_Puntuacion INT auto_increment not null,
  Email_Jurado varchar(45) NOT NULL,
  Contraseña varchar(45) NOT NULL,
  Pareja_Evaluada varchar(45) NOT NULL,
  Fecha_Puntuacion DATE,
  Pun_Obtenido varchar(5) NOT NULL,
  Observaciones varchar(45) NOT NULL,
  constraint pk_id_Codigo primary key (id_Puntuacion)
);

