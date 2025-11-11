DROP DATABASE IF EXISTS `netland`;

CREATE DATABASE `netland`;

USE `netland`;

CREATE TABLE movies (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    playtime TIME NOT NULL,
    release_date DATETIME,
    country ENUM('NL', 'UK', 'VS'),
    description TEXT NOT NULL,
    trailerID VARCHAR(12) NOT NULL
);

INSERT INTO movies (title, playtime, country, description, trailerID) VALUES
    ("Oppenheimer", TIME("3:00:00"), "UK", "Een biografische thriller van Christopher Nolan over J. Robert Oppenheimer en de ontwikkeling van de atoombom.", "uYPbbksJxIg"),
    ("Aquaman and the Lost Kingdom", TIME("2:24:00"), "VS", "Aquaman moet een alliantie smeden om Atlantis te beschermen tegen nieuwe bedreigingen.", "ZQLKEZzBIZE"),
    ("Mission: Impossible - Dead Reckoning Part One", TIME("2:43:00"), "UK", "Ethan Hunt gaat opnieuw op een levensgevaarlijke missie om de wereld te redden.", "fhP9rkHo7wA"),
    ("Barbie", TIME("1:54:00"), "VS", "Een satire waarin Barbie op een reis gaat naar de echte wereld.", "pBk4NYhWNMM"),
    ("The Red Door", TIME("1:47:00"), "VS", "De familie Lambert moet hun demonen confronteren door verder te gaan dan ooit tevoren.", "8s7cNtNV6aA");

SELECT * FROM series;
SELECT * FROM movies;