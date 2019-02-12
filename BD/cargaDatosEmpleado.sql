use examen;

select * from empleado;
insert into empleado (nombre,apellido_paterno,apellido_materno) 
	values ('Juan', 'Vázquez', 'Sánchez');
insert into empleado (nombre,apellido_paterno,apellido_materno) 
	values ('María', 'Arredondo', 'Hernández');
insert into empleado (nombre,apellido_paterno,apellido_materno) 
	values ('Cristian', 'Ortega', 'Ramírez');
insert into empleado (nombre,apellido_paterno,apellido_materno) 
	values ('Daniela', 'García', 'Velasco');
insert into empleado (nombre,apellido_paterno,apellido_materno) 
	values ('Elvira', 'Díaz', 'Gutiérrez');
    
    
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (1,'11-07-1995',12000);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (2,'03-03-1990',20000.50);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (3,'29-01-1985',25000);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (4,'15-02-1994',25000);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (5,'22-06-1990',30000);