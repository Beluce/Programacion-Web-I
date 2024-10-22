-- Validar si existe la base de datos
DROP SCHEMA IF EXISTS progra_web;
-- crear la base de datos
CREATE SCHEMA IF NOT EXISTS  progra_web DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

use progra_web;

drop table if exists alumno;
CREATE table alumno(
    nombre_usuario text not null,
    carrera text not null,
    no_cuenta int(10) not null,
    direccion text not null,
    telefono varchar(10) not null,
    email text not null,
    password varchar(25) not null,
    fecha_registro datetime not null DEFAULT current_timestamp(),
    permisos int(11) not null DEFAULT '2'
);
alter TABLE alumno add primary key(no_cuenta);

select * from alumno;

-- Insertar 15 registros en la tabla alumno
INSERT INTO alumno (nombre_usuario, carrera, no_cuenta, direccion, telefono, email, password, permisos) VALUES
('Juan Perez', 'Ingeniería Civil', 20210001, 'Calle 1, Ciudad A', '1234567890', 'juan.perez@example.com', 'pass1234', 2),
('Maria Lopez', 'Medicina', 20210002, 'Calle 2, Ciudad B', '0987654321', 'maria.lopez@example.com', 'medpass12', 2),
('Carlos Sanchez', 'Derecho', 20210003, 'Calle 3, Ciudad C', '2345678901', 'carlos.sanchez@example.com', 'lawpass34', 2),
('Ana Gomez', 'Arquitectura', 20210004, 'Calle 4, Ciudad D', '3456789012', 'ana.gomez@example.com', 'arqpass56', 2),
('Luis Rodriguez', 'Ingeniería Mecánica', 20210005, 'Calle 5, Ciudad E', '4567890123', 'luis.rodriguez@example.com', 'mechpass78', 2),
('Sofia Martinez', 'Ingeniería Eléctrica', 20210006, 'Calle 6, Ciudad F', '5678901234', 'sofia.martinez@example.com', 'elecpass90', 2),
('Miguel Ramirez', 'Psicología', 20210007, 'Calle 7, Ciudad G', '6789012345', 'miguel.ramirez@example.com', 'psypass12', 2),
('Elena Jimenez', 'Administración', 20210008, 'Calle 8, Ciudad H', '7890123456', 'elena.jimenez@example.com', 'admpass34', 2),
('Ricardo Castro', 'Contabilidad', 20210009, 'Calle 9, Ciudad I', '8901234567', 'ricardo.castro@example.com', 'contpass56', 2),
('Gabriela Diaz', 'Ingeniería de Sistemas', 20210010, 'Calle 10, Ciudad J', '9012345678', 'gabriela.diaz@example.com', 'syspass78', 2),
('Fernando Torres', 'Biología', 20210011, 'Calle 11, Ciudad K', '0123456789', 'fernando.torres@example.com', 'biopass90', 2),
('Diana Vargas', 'Química', 20210012, 'Calle 12, Ciudad L', '1123456789', 'diana.vargas@example.com', 'chemipass12', 2),
('Pedro Navarro', 'Ingeniería Industrial', 20210013, 'Calle 13, Ciudad M', '2123456789', 'pedro.navarro@example.com', 'indpass34', 2),
('Lucia Ortega', 'Filosofía', 20210014, 'Calle 14, Ciudad N', '3123456789', 'lucia.ortega@example.com', 'philopass56', 2),
('Manuel Ruiz', 'Historia', 20210015, 'Calle 15, Ciudad O', '4123456789', 'manuel.ruiz@example.com', 'histpass78', 2);

-- Consultar la tabla para verificar los datos
SELECT * FROM alumno;
