# Primetime
This PHP site chooses randomly a movie from your movie list and displays it with the trailer.

# About the Movie List
MovieList.csv can be simply imported into your database. It includes more than 1300 movies with their youtube link which are chosen from imdb with a rating more than 6,5.

# Database Settings
> Database connection settings are in /includes/psl-config.php

--> Create Database in phpmyadmin:
```
CREATE DATABASE `primetime`;
```
--> Create table for the list of movies:
```
CREATE TABLE `library`.`books` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255),
    `link` VARCHAR(255)
) ENGINE = InnoDB;
```
