<?php
require_once 'database.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Promenades</title>
 
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link active" href="#">Liste de promenades</a>
  <a class="nav-item nav-link" href="#" >+</a>
</nav>

<div class="wrapper clearfix">

    <figure class="gallery-item">
        <img src="/assets/img/1.jpg">
        <figcaption class="img-title">
            <h5>Image Title</h5>    
        </figcaption>
    </figure>

    <figure class="gallery-item">
        <img src="/assets/img/2.jpg" alt="">    
        <figcaption class="img-title">
            <h5>Image Title</h5>    
        </figcaption>
    </figure>

</div>
       

<!-- Four columns: 25% width on all screens, except for extra small (100% width)-->
<div class="row">
  <div class="col-lg img-responsive"><img src="/assets/img/2.jpg" alt=""><img src="/assets/img/1.jpg" alt=""><img src="/assets/img/3.jpg" alt=""><img src="/assets/img/4.jpg" alt=""></div>
  <div class="col-lg"><img src="/assets/img/2.jpg" alt=""></div>
  <div class="col-lg"><img src="/assets/img/3.jpg" alt=""></div>
  <div class="col-lg"><img src="/assets/img/4.jpg" alt=""></div>
</div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>