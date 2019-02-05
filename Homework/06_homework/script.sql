
drop database if exists polaznik05_mvc;
create database polaznik05_mvc character set utf8mb4 collate utf8mb4_unicode_ci;
use polaznik05_mvc;

create  table post(
id int not null primary key auto_increment,
content text,
)engine=InnoDB;

insert into post(content, CURRENT_DATE , CURRENT_TIME ) values
('Danas je opet padao snijeg :('),
('Jedem  jagode'),
('test');
