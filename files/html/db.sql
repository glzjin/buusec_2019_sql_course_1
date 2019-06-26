CREATE DATABASE IF NOT EXISTS news;
USE news;
create table if not exists admin
(
	id int auto_increment
		primary key,
	username varchar(128) not null,
	password varchar(128) not null
)
;

create table if not exists contents
(
	id int auto_increment
		primary key,
	title varchar(1000) not null,
	content varchar(10000) not null
)
;

INSERT INTO admin(username, password) VALUES('admin', MD5(RAND()));

INSERT INTO contents(title, content) values
('测试新闻1', '哈哈哈哈'),
('测试新闻2', '喵喵喵喵'),
('测试新闻3', '呜呜呜呜');
