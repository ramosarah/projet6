
CREATE DATABASE Promenades;



CREATE USER "adminProm"@"%" IDENTIFIED BY "adminPr0m";
GRANT ALL PRIVILEGES ON Promenades.* TO "adminProm"@"%";

UPDATE Promenades SET 
            nom = :nom,
            titre = :titre,
            img = :img,
            pays = :pays,
            ville = :ville,
            zip = :zip,
            depart = :depart
            arrivee = :arrivee
            WHERE id = :id




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
    descr VARCHAR(255)
);


CREATE TABLE Membres(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    email VARCHAR(255),
    pass VARCHAR(255)
)


INSERT INTO Membres (nom, email, pass) VALUE (
    "Sophie",
    "sophie@lechoix.com",
    "lacroixdesophie"
);



SELECT * FROM Promenades WHERE id = $id



        $pdoStatement->execute(array("idChien" => $id));  
        
        $resultatEx12 = $pdoStatement->fetchObject('Chien');

        return $resultatEx12;

INSERT INTO Promenades (nom, titre, img, pays, ville, zip, depart, arrivee, descr)  
VALUES (
    "La Plaine",
    "Redécouverte de la Plaine",
    "assets/img/laPlaine.jpg",
    "Suisse",
    "Genève",
    1200,
    "Cornavin",
    "La Plaine",
    "La Plaine est un village de Suisse. Situé sur le territoire de la commune de Dardagny dans le canton de Genève, sur la rive droite du Rhône, il est le lieu de l'une des usines du groupe Firmenich."
);
