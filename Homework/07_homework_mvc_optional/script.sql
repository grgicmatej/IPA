DROP DATABASE IF EXISTS polaznik05_mvc;
CREATE DATABASE polaznik05_mvc CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use polaznik05_mvc;

create table user(
  id int not null primary key auto_increment,
  firstname varchar(50) not null,
  lastname varchar(50) not null,
  email varchar(100) not null,
  pass char(60) not null,
  image varchar(100),
  role varchar(20)
)engine=InnoDB;

create unique index ix1 on user(email);


create table post(
  id int not null primary key auto_increment,
  content text,
  user int not null,
  date datetime not null default now()
)engine=InnoDB;

create table comment(
  id int not null primary key auto_increment,
  user int not null,
  post int not null,
  content text not null,
date datetime not null default now()
)engine=InnoDB;

create table likes(
  id int not null primary key auto_increment,
  user int not null,
  post int not null
)engine=InnoDB;

create table dislikes(
  id int not null primary key auto_increment,
  user int not null,
  post int not null
)engine=InnoDB;

create table tag(
  id int not null primary key auto_increment,
  post int not null,
  content varchar(20)
)engine=InnoDB;


alter table post add FOREIGN KEY (user) REFERENCES user(id);

alter table comment add FOREIGN KEY (user) REFERENCES user(id);
alter table comment add FOREIGN KEY (post) REFERENCES post(id);

alter table likes add FOREIGN KEY (user) REFERENCES user(id);
alter table likes add FOREIGN KEY (post) REFERENCES post(id);

alter table dislikes add FOREIGN KEY (user) REFERENCES user(id);
alter table dislikes add FOREIGN KEY (post) REFERENCES post(id);

alter table tag add FOREIGN KEY (post) REFERENCES post(id);



insert into user (id,firstname,lastname,email,pass,role) values
(null,'Admin','Admin','admin@admin.com','$2a$10$L3gWOBmxM8uifwSuPX0FhuyXdDtxr5i2ne0m.YMH6mdV8hq1WcqpC','admin');

