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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Modification</title>
    </head>
    <body class="form-bg">

    


        <div class="container">
            <div class="row justify-content-center">
                <h1>Veuillez faire des modifications nécessaires</h1>


                <form action="processModifier.php" method="post" enctype="multipart/form-data">



                    <div class="form-group col-sm-12">
                        <input type="hidden" name="id" value="<?php echo $promenade->getId() ?>">
                        <label for="nom">Nom de l'auteur</label>
                        <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $promenade->getNom() ?>" require>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="titre">Titre de la promenade</label>
                        <input class="form-control" type="text" name="titre" id="titre" value="<?php echo $promenade->getTitre()?>" require>
                    </div>
                    
                    
                    <div class="form-group col-sm-12">
                        <label for="img">Image</label>
                        <input class="form-control-file" type="file" name="imgUp" id="img" value="<?php echo $promenade->getImg() ?>" require>
                    </div>



                    <div class="form-group col-sm-12">
                        <label for="pays">Pays</label>
                        <input class="form-control" type="text" name="pays" id="pays" value="<?php echo $promenade->getPays() ?>" require>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="ville">Ville</label>
                        <input class="form-control" type="text" name="ville" id="ville" value="<?php echo $promenade->getVille()?>" require>
                    </div>


                    <div class="form-group col-sm-12">
                        <label for="zip">Code Postal</label>
                        <input class="form-control" class="form-control" type="number" name="zip" id="zip" value="<?php echo $promenade->getZip()?>" require>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="depart">Lieu de départ</label>
                        <input class="form-control" type="text" name="depart" id="depart" value="<?php echo $promenade->getDepart() ?>" require>
                    </div>


                    <div class="form-group col-sm-12">
                        <label for="arrivee">Lieu d'arrivée</label>
                        <input class="form-control" type="text" name="arrivee" id="arrivee" value="<?php echo $promenade->getArrivee()?>" require>
                    </div>

                    <div class="d-flex col-sm-12"> 
                        <label for="descr">Descriptif de la ballade</label>
                        <textarea   name="descr" id="descr" class="textArea" require> <?php echo $promenade->getDescr()?> </textarea>
                    </div>




                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary mb-2">mettre à jour la promenade</button>
                    </div>


                </form>
            </div>
        </div>






    </body>
</html>