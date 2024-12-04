create database project;
use project;

create table admin(
id int(20),
username varchar(100),
password varchar(20),
primary key(id)
);

create table register(
emp_id int(20),
fname varchar(100),
lname varchar(100),
gender varchar(20),
email varchar(50),
designation varchar(50),
dob date,
mobile int(100),
salary int(100),
image blob,
primary key(emp_id)
);
alter table register modify mobile bigint(20);
select * from register;
insert into  admin (id,username,password) values (1,'azar','1998');

insert into  register (emp_id,fname,lname,gender,email,designation,dob,mobile,salary) values 
(1090,'mohammed','azarudeen','male','azar@gmail.com','webdesigner','1998-12-04',9361246608,10000);


select * from register;

alter table register add id int(11) after emp_id;

truncate register;

drop table register;

