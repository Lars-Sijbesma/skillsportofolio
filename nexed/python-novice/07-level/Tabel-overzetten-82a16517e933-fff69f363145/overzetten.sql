DROP DATABASE IF EXISTS python_novice;

CREATE DATABASE python_novice;

USE python_novice;

CREATE TABLE users (
    name varchar(255),
    gender varchar(255),
    age int,
    fav_color varchar(255)
);