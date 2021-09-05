CREATE DATABASE shoestock;

CREATE TABLE shoestock.items(
    id INT(30) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price INT(30) NOT NULL);

CREATE TABLE shoestock.users(
    id INT(30) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL);

CREATE TABLE shoestock.users_items(
    id INT(30) PRIMARY KEY AUTO_INCREMENT,
    user_id INT(30) NOT NULL,
    item_id INT(30) NOT NULL,
    status enum('Added to cart', 'Confirmed') NOT NULL,
    FOREIGN KEY(user_id) REFERENCES users(id) ON UPDATE CASCADE,
   	FOREIGN KEY(item_id) REFERENCES items(id) ON UPDATE CASCADE);

