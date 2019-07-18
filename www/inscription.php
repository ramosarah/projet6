<?php


require_once "database.php";

$database = new Database();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/jellee-typeface" type="text/css"/> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>




</head>
<body>
    

    <div> 
    
    <h1>Pour pouvoir modifier ou ajouter des promenades, il vous faut un compte:</h1>

        <form action="processInscription.php" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="nom">Votre Nom</label>
            <input class="form-control" type="text" name="nom" id="nom" require>
        </div> 

        <div class="form-group">
            <label for="email">Votre E-Mail</label>
            <input class="form-control" type="email" name="email" id="email" require>
        </div>

        <div class="form-group">
            <label for="pass">Votre E-Mail</label>
            <input class="form-control" type="pass" name="pass" id="pass" require>
        </div>



		<button type="submit" class="btn btn-primary">Submit</button>



        </form>
    </div>




</body>
</html>