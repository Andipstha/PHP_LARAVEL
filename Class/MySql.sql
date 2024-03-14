CREATE DATABASE phone_book;

use phone_book;

create table contacts(
	id int primary key auto_increment,
    first_name varchar(50) not null,
    middle_name varchar(50) not null,
    last_name varchar (50) not null,
	phone_number varchar (10) not null
);

select * from contacts;



