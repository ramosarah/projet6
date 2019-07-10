
CREATE DATABASE Promenades;



CREATE USER "adminProm"@"localhost" IDENTIFIED BY "adminPr0m";
GRANT ALL PRIVILEGES ON Promenades.* TO "adminProm"@"localhost";



CREATE TABLE Promenades(
    
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    titre VARCHAR(255),
    img VARCHAR(255),
    pays VARCHAR(255),
    ville VARCHAR(255),
    zip INT,
    depart VARCHAR(255),
    arrivee VARCHAR(255),
    descr VARCHAR(255),
);


INSERT INTO Promenades VALUES (
    "La Plaine",
    "Redécouverte de la Plaine",
    "assets/laPlaine.jpg",
    "Suisse",
    "Genève",
    1200,
    "Cornavin",
    "La Plaine",
    "La Plaine est un village de Suisse. Situé sur le territoire de la commune de Dardagny dans le canton de Genève, sur la rive droite du Rhône, il est le lieu de l'une des usines du groupe Firmenich.",
);