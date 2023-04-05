create database Alumnos_practicas;
#drop database Alumnos_practicas;

use Alumnos_practicas;

create table Empresas(
id int auto_increment,
Nombre_empresa varchar(50),
Persona_Contacto varchar(50),
email varchar(70) unique,
telefono char(9) unique,
direccion varchar(150),

primary key (id)
);

Create table practicas (
id int auto_increment,
Tipo_practicas boolean,
horario varchar(100),

primary key (id)
);

#drop table Alumnos;
create table Alumnos(
id int auto_increment,
nombre varchar(50),
apellido varchar(50),
dni char(9) unique,
fk_Nombre_empresa_id int,
fk_tipo_practicas_id int,

primary key (id),
foreign key (fk_Nombre_empresa_id) references Empresas(id),
foreign key (fk_tipo_practicas_id) references practicas(id)
);

