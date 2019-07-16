<?php


    require_once("database.php");

    $database = new Database();
    $id = $_GET['id'];
    
    $promenade = $database->afficherPromenade($id);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Modification</title>
    </head>
    <body>

    
        <h1>Veuillez faire des modifications nécessaires</h1>


       
        <div>
            <form action="processModifier.php" method="post" enctype="multipart/form-data">

                <div>
                    <input type="hidden" name="id" value="<?php echo $promenade->getId() ?>">
                    <label for="nom"> Nom de l'auteur</label>
                    <input class="form-group form-control-sm" type="text" name="nom" id="nom" value="<?php echo $promenade->getNom() ?>" require>
                </div>

                <div>
                    <label for="titre">Titre de la promenade</label>
                    <input class="form-group form-control-sm" type="text" name="titre" id="titre" value="<?php echo $promenade->getTitre()?>" require>
                </div>
                
                
                <div>
                    <label for="img">Image</label>
                    <input class="form-group form-control-sm" type="file" name="imgUp" id="img" value="<?php echo $promenade->getImg() ?>" require>
                </div>



                <div>
                    <label for="pays">Pays</label>
                    <input class="form-group form-control-sm" type="text" name="pays" id="pays" value="<?php echo $promenade->getPays() ?>" require>
                </div>

                <div>
                    <label for="ville">Ville</label>
                    <input class="form-group form-control-sm" type="text" name="ville" id="ville" value="<?php echo $promenade->getVille()?>" require>
                </div>


                <div>
                    <label for="zip">Code Postal</label>
                    <input class="form-group form-control-sm" type="number" name="zip" id="zip" value="<?php echo $promenade->getZip()?>" require>
                </div>

                <div>
                    <label for="depart">Lieu de départ</label>
                    <input class="form-group form-control-sm" type="text" name="depart" id="depart" value="<?php echo $promenade->getDepart() ?>" require>
                </div>


                <div>
                    <label for="arrivee">Lieu d'arrivée</label>
                    <input class="form-group form-control-sm" type="text" name="arrivee" id="arrivee" value="<?php echo $promenade->getArrivee()?>" require>
                </div>

                <div class="d-flex align-content-sm-start"> 
                    <label for="descr">Descriptif de la ballade</label>
                    <textarea class="form-group"  name="descr" id="descr" rows="10" cols="32" require> <?php echo $promenade->getDescr()?> </textarea>
                </div>




                <div>
                    <input type="submit" value="mettre à jour la promenade">
                </div>


            </form>
        </div>







    </body>
</html>