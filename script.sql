
CREATE DATABASE Promenades;



CREATE USER "adminProm"@"localhost" IDENTIFIED BY "adminPr0m";
GRANT ALL PRIVILEGES ON Promenades.* TO "adminProm"@"localhost";



CREATE TABLE Promenades(
    
    
    private $id;
    private $nom;
    private $titre;
    private $img;
    private $pays;
    private $ville;
    private $zip;
    private $depart;
    private $arrivee;
    private $desc;
    
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    titre VARCHAR(255)
    img XXXXX,
    id_maitre INT,
    FOREIGN KEY (id_maitre) REFERENCES Maitres(id)
);