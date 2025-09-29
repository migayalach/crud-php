create database mini_project;
use mini_project;

create table username(
  id int not null auto_increment,
  name varchar(255) not null,
  primary key(id)
);

insert into username (name) values ('John Doe');
insert into username (name) values ('Dacota DeLaVega');
insert into username (name) values ('Sdenka Vazquez');
insert into username (name) values ('Ezequiel Garcia');
insert into username (name) values ('Miguel Garcia');
insert into username (name) values ('Juan Garcia');
insert into username (name) values ('Pedro Garcia');
insert into username (name) values ('Maria Garcia');
insert into username (name) values ('Ana Garcia');
insert into username (name) values ('Juan Garcia');

select * from username;