drop database if exists polaznik05_mvc;
create database polaznik05_mvc character set utf8mb4 collate utf8mb4_unicode_ci;
use polaznik05_mvc;

create  table post(
  id int not null primary key auto_increment,
  content text
);

insert into post(content) values
('Ovo je prvi post'),
('Ovo je drugi post'),
('Ovo je treci post');