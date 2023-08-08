CREATE DATABASE IF NOT EXISTS McRonalds;

USE McRonalds;

CREATE TABLE IF NOT EXISTS user(
    id INT(11) NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (email)
);

CREATE TABLE IF NOT EXISTS contact(
    id INT(11) NOT NULL AUTO_INCREMENT,
    salution VARCHAR(4),
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(50) NOT NULL,
    enquiry VARCHAR(20),
    subject VARCHAR(300),
    posted DATE,
    PRIMARY KEY (id),
    UNIQUE KEY (email)
);

INSERT INTO user (email, password) VALUES ('user1@gmail.com',MD5('123456'));
INSERT INTO user (email, password) VALUES ('user2@gmail.com',MD5('123456'));
INSERT INTO user (email, password) VALUES ('user3@gmail.com',MD5('123456'));