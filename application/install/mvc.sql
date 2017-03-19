create database notes
	default character set utf8mb4
	default collate utf8mb4_unicode_ci;
use notes;
create table notes (
	note_id int(9) not null primary key auto_increment,
	note_text varchar(24) not null
) engine=innodb;
