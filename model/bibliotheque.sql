DROP DATABASE IF EXISTS bibliotheque;
CREATE DATABASE bibliotheque CHARACTER SET 'utf8';

DROP USER IF EXISTS 'biblio'@'Localhost';
CREATE USER 'biblio'@'Localhost' IDENTIFIED BY 'acces';
GRANT ALL PRIVILEGES ON bibliotheque.* TO 'biblio'@'Localhost';

CREATE TABLE `User`
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    lastname VARCHAR(60) NOT NULL,
    firstname VARCHAR(60) NOT NULL,
    phone INT(20) NOT NULL, 
    email VARCHAR(50) NOT NULL UNIQUE,
    sexe CHAR (1) NOT NULL,
    password VARCHAR(255) NOT NULL, 
    birth_date DATE NOT NULL,
    city VARCHAR(50)NOT NULL,
    city_code CHAR(10)NOT NULL,
    street_number INT(10) NOT NULL,
    street VARCHAR(50)NOT NULL,
    PRIMARY KEY (id)
)
ENGINE = InnoDB;

INSERT INTO `User` (lastname, firstname, phone, email, sexe, password, birth_date, city, city_code, street_number, street)
VALUES
("Dupont", "Marc", 0658862300, "dupont_marc@gmail.com", "h", "dm2615", "1980/03/21", "Paris", "75003", 23, "Poitou"),
("Dubois", "Juliette", 0622122320, "dubois_juliette@gmail.com", "f", "dj@4512", "1992/02/12", "Rouen", "76000", 2, "Carmes");

CREATE TABLE Book 
(
    id int UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    author VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    date_of_onset DATE NOT NULL,
    abstract TEXT(255) NOT NULL,
    user_id INT UNSIGNED NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES `User`(id) 
)
ENGINE = InnoDB;

INSERT INTO Book (title, author, category, date_of_onset, abstract, user_id)
VALUES
("Le fils du pauvre", "Mouloud FERAOUN", "Roman", "1954/01/01", "Il savait depuis sa naissance qu' il ne deverait pas être riche", 1),
("Pilates", "Abby ELLSWORTH", "Sport", "2009/01/01", "Anatomie et mouvements", 2),
("Histoire de ma vie", "Fadhma Amrouche", "Roman", "1968/01/01", "Ce livre est le récit d une vie", 1),
("Thermodynamique Matériaux PC", "Jacques MESPLEDE", "Science", "2004/01/01", "Cours Méthodes Exercices résolus", NULL);
