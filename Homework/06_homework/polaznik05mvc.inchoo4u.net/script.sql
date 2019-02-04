
drop database if exists social_network;
create database social_network character set utf8mb4 collate utf8mb4_unicode_ci;
use social_network;

create  table post(
id int not null primary key auto_increment,
content text
)engine=InnoDB;

insert into post(content) values
('Danas je opet padao snijeg :('),
('Jedem  jagode');