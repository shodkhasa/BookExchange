drop table if exists users;
drop table if exists books;
drop table if exists forum;

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
  );

CREATE TABLE `forum` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `post` varchar(500) NOT NULL
);

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NULL,
  `email` varchar(100) NULL,
  `title` varchar(100) NULL,
  `description` varchar(500) NULL,
  `posttime` datetime NULL,
  `picpath` varchar(100) NULL
);

INSERT INTO `users` (name, email) VALUES ('Kevin Crespin', 'kcrespi@calstatela.edu');
INSERT INTO `users` (name, email) VALUES ('Jose Rosa', 'jrosa@calstatela.edu');

INSERT INTO `forum` (name, email, post) VALUES ('Kevin Crespin', 'kcrespi@calstatela.edu', 'Hello');
