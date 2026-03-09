create database mvc_biblioteca;
use mvc_biblioteca;
CREATE TABLE livros(
  ID integer auto_increment primary key,
  TITULO varchar(255),
  AUTOR varchar(255),
  ANOPUBLICACO varchar(255),
  EDITORA varchar(255)
);

SELECT * FROM livros;