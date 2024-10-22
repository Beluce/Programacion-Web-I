-- Validar si existe la base de datos
DROP SCHEMA IF EXISTS progra_web;
-- crear la base de datos
CREATE SCHEMA IF NOT EXISTS  progra_web DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

use progra_web;
CREATE table alumno(
    nombre_usuario text not null,
    carrera text not null,
    no_cuenta int(10) not null,
    direccion text not null,
    telefono varchar(10) not null,
    email text not null,
    password varchar(10) not null,
    fecha_registro datetime not null DEFAULT current_timestamp(),
    permisos int(11) not null DEFAULT '2'
);
alter TABLE alumno add primary key(no_cuenta);

select * from alumno;
