/*
Create the tuneOrater database
*/
DROP DATABASE IF EXISTS tuneOrater;
CREATE DATABASE tuneOrater;
USE tuneOrater;

CREATE TABLE genres (
    genreID int NOT NULL AUTO_INCREMENT,
    genreName varchar(50) NOT NULL,
    PRIMARY KEY (genreID)
);

INSERT INTO genres VALUES 
(1, 'Rock'), 
(2, 'Pop'),
(3, 'Country');

CREATE TABLE artists(
    artistID int NOT NULL AUTO_INCREMENT,
    artistName varchar(50) NOT NULL,
	genreID int DEFAULT NULL,
    PRIMARY KEY (artistID),
	FOREIGN KEY (genreID)  REFERENCES genres (genreID)
);

INSERT INTO artists VALUES 
(1, 'Boston', 1),
(2, 'The Rolling Stones', 1),
(3, 'The Beatles', 1),
(4, 'Led Zepplin', 1),
(5, 'Nirvana', 1),
(6, 'Queen', 1),
(7, 'AC/DC', 1),
(8, 'Jimmy Hendrix', 1),
(9, 'Taylor Swift', 2),
(10, 'Adele', 2),
(11, 'Katy Perry', 2),
(12, 'Lady Gaga', 2),
(13, 'Madonna', 2),
(14, 'Prince', 2),
(15, 'Micheal Jackson', 2),
(16, 'One Direction', 2),
(17, 'Taylor Swift', 3),
(18, 'Adele', 3),
(19, 'Katy Perry', 3),
(20, 'Lady Gaga', 3),
(21, 'Madonna', 3),
(22, 'Prince', 3),
(23, 'Micheal Jackson', 3),
(24, 'One Direction', 3);

CREATE TABLE albums (
	albumID int NOT NULL AUTO_INCREMENT,	
	albumName VARCHAR(50) NOT NULL,
	albumYear YEAR(4),
	artistID int DEFAULT NULL,
	PRIMARY KEY (albumID),
	FOREIGN KEY (artistID) REFERENCES artists (artistID)
	);
	
INSERT INTO albums VALUES
(1, 'BOSTON', '1974', 1);

CREATE TABLE songs (
	songID int NOT NULL AUTO_INCREMENT,
	songName VARCHAR(50) NOT NULL ,
	albumID int DEFAULT NULL,
	PRIMARY KEY (songID),
	FOREIGN KEY (albumID) REFERENCES albums (albumID)
);

CREATE TABLE  users (
  userID int(11) NOT NULL AUTO_INCREMENT,
  userName varchar(60) NOT NULL,
  firstName varchar(60) NOT NULL,
  lastName varchar (60) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(60) NOT NULL,
  phone varchar(60) NOT NULL,
  userLevel varchar(2) NOT NULL,
  PRIMARY KEY (userID)
);

INSERT INTO users VALUES 
(54, 'jackcable', 'Jack', 'Jordan','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'jackcable@yahoo.com', '8282986959', 'A'),
(55, 'test', 'Test', 'User','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'test@nothing.com', '8282986959', 'M');

CREATE TABLE artistSongs (
	artistID Int NOT NULL AUTO_INCREMENT,
	songID  Int NOT NULL,
  	genreID int NOT NULL,
	PRIMARY KEY (artistID, songID, genreID),
	FOREIGN KEY (artistID) REFERENCES artists (artistID),
	FOREIGN KEY (songID) REFERENCES songs (songID),
	FOREIGN KEY (genreID) REFERENCES genres (genreID)
	);
	

CREATE TABLE musicVotes (
	voteID int NOT NULL AUTO_INCREMENT,
	userID int NOT NULL,
	songID int NOT NULL,
	voteValue Tinyint,
	PRIMARY KEY (voteID, userID),
	FOREIGN KEY (userID) REFERENCES users (userID),
	FOREIGN KEY (songID) REFERENCES songs (songID)
);
-- Create a user named ts_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO ts_user@localhost
IDENTIFIED BY 'pa55word';
