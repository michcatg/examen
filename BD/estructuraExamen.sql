use examen;
CREATE TABLE empleado(
	empleado_id	int auto_increment primary key,
    nombre varchar(100) not null,
    apellido_paterno varchar(100) not null,
    apellido_materno varchar(100)
);

CREATE TABLE detalle_empleado(
	empleado_id int primary key,
    fecha_nacimiento date not null,
    ingresos_anuales numeric(8,2) not null,
    constraint detalle_empleado_fk foreign key (empleado_id)
		references empleado(empleado_id)
);