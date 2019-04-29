-- creación de la base de datos
create database sesion;
use sesion;
-- creación de la tabla de registros
create table inicio_sesion(
    -- creación de las columnas
    identificador INT PRIMARY KEY AUTO_INCREMENT,
    columna_usuario VARCHAR (255) NOT NULL,
    columna_password VARCHAR (255) NOT NULL
)Engine InnoDB default charset=latin1;