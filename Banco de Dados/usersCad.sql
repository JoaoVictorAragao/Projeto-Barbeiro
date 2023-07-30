use sistemabarbeiros;

create table usersCad(
	ID int PRIMARY KEY auto_increment,
    login varchar(255),
    nome varchar(255),
    phone varchar(30),
    password varchar(255),
    userType int,
    foreign key (userType) REFERENCES usertype(id)
);

ALTER TABLE userscad
ADD COLUMN adress VARCHAR(255);

select * from usersCad;

select ID, password FROM usersCad WHERE login = "barbeiro@gmail.com";