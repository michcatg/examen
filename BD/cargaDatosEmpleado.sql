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
	values (1,STR_TO_DATE('11-07-1995', '%d-%m-%Y'),12000);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (2,STR_TO_DATE('03-03-1990', '%d-%m-%Y'),20000.50);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (3,STR_TO_DATE('29-01-1985', '%d-%m-%Y'),25000);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (4,STR_TO_DATE('15-02-1994', '%d-%m-%Y'),25000);
insert into detalle_empleado (empleado_id, fecha_nacimiento,ingresos_anuales)
	values (5,STR_TO_DATE('22-06-1990', '%d-%m-%Y'),30000);
    
    
