/*
Create the tuneOrater database
*/
DROP DATABASE IF EXISTS tuneOrater;
CREATE DATABASE tuneOrater;
USE tuneOrater;

CREATE TABLE artists(
    artistID int(10) NOT NULL AUTO_INCREMENT,
    artistName varchar(50) NOT NULL,
    PRIMARY KEY (artistID)
);

INSERT INTO artists VALUES 
(1, 'The Beatles'), 
(2, 'The Rolling Stones'),
(3, 'Michael Jackson'), 
(4, 'Elvis Presley'),
(5, 'Madonna'), 
(6, 'Elton John'), 
(7, 'Eminem'), 
(8, 'Jimi Hendrix'),
(9, 'The Who'), 
(10, 'David Bowie'),
(11, 'Stevie Wonder'), 
(12, 'Bob Marley'), 
(13, 'Bruce Springsteen'), 
(14, 'Led Zeppelin'),
(15, 'The Beach Boys'), 
(16, 'James Brown'),
(17, 'Aretha Franklin'), 
(18, 'Marvin Gaye'), 
(19, 'Taylor Swift'), 
(20, 'Mariah Carey'),
(21, 'Beyonce'), 
(22, 'The Beach Boys'),
(23, 'U2'), 
(24, 'Chuch Berry'), 
(25, 'Neil Young'), 
(26, 'Prince'),
(27, 'Johnny Cash'), 
(28, 'Tina Turner'),
(29, 'Roy Orbison'), 
(30, 'Queen'), 
(31, 'Diana Ross'), 
(32, 'Van Morrison'),
(33, 'Tupac Shakur'), 
(34, 'Elvis Costello'),
(35, 'Curtis Mayfield'), 
(36, 'Public Enemy'), 
(37, 'Aerosmith'), 
(38, 'Otis Redding'),
(39, 'Janet Jackson'), 
(40, 'The Clash'),
(41, 'Run-D.M.C.'), 
(42, 'Notorious B.I.G.'), 
(43, 'Bee Gees'), 
(44, 'Chicago'),
(45, 'The Supremes'), 
(46, 'Rod Stewart'),
(47, 'Billy Joel'), 
(48, 'Neil Diamond'), 
(49, 'Bob Dylan');

CREATE TABLE genres (
    genreID int NOT NULL AUTO_INCREMENT,
    genreDescription varchar(50) NOT NULL,
    PRIMARY KEY (genreID)
);

INSERT INTO genres VALUES 
(1, 'Rock'), 
(2, 'Pop'),
(3, 'Country');

CREATE TABLE users (
	userID int NOT NULL AUTO_INCREMENT,
	user VARCHAR(50) NOT NULL UNIQUE,
	firstName VARCHAR(50) NOT NULL,
	lastName VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	phone CHAR(20) NOT NULL,
	adminUser BOOLEAN NOT NULL,
	password VARCHAR(50) NOT NULL,
	PRIMARY KEY (userID)
);

CREATE TABLE songs (
	songID int NOT NULL AUTO_INCREMENT,
	songTitle VARCHAR(50) NOT NULL ,
	genreID int NOT NULL,
	PRIMARY KEY (songID)
);

INSERT INTO users VALUES
(1, 'jumpingflash', 'Jumping', 'Flash', 'jumpingflash@yahoo.net', '414-547-0331', '0', 'pa55word'),
(2, 'jackjordan', 'Jack', 'Jordan', 'jackcable@yahoo.com', '828-774-6063', '1', 'pa55word');

CREATE TABLE albums (
	albumID int NOT NULL AUTO_INCREMENT,
	songID int NOT NULL,
	albumName VARCHAR(50) NOT NULL,
	albumYear YEAR(4),
	PRIMARY KEY (albumID, songID),
	FOREIGN KEY (songID) REFERENCES songs (songID)
	);

CREATE TABLE artistSongs (
	artSongID int NOT NULL AUTO_INCREMENT,
	artistID Int NOT NULL,
	songID  Int NOT NULL,
  	genreID int NOT NULL,
	PRIMARY KEY (artSongID, artistID, songID, genreID),
	FOREIGN KEY (artistID) REFERENCES artists (artistID),
	FOREIGN KEY (songID) REFERENCES songs (songID),
	FOREIGN KEY (genreID) REFERENCES genres (genreID)
	);
	
CREATE TABLE adminUsers (
	adminID int NOT NULL AUTO_INCREMENT,
	password VARCHAR(50) NOT NULL,
	userID int NOT NULL,
	PRIMARY KEY (adminID),
	FOREIGN KEY (userID) REFERENCES users (userID)
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

