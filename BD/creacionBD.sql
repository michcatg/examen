create database examen;
create user 'examen'@'localhost' identified by 'examen';
grant all privileges on examen.* to 'examen'@'localhost';