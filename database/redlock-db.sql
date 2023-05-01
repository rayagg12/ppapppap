CREATE DATABASE Redlock;
USE Redlock;


CREATE TABLE `users` (
  Id int(11) NOT NULL,
  Nama varchar(100) NOT NULL,
  Alamat varchar(150) NOT NULL,
  Jabatan varchar(50) NOT NULL
);


INSERT into users values
("1", "Salman", "Atsiri Permai", "Orang keren"),
("2", "Harits", "Tapops", "Orang Biasa");


