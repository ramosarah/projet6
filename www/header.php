<?php
require_once "database.php";


?>


    <nav class="nav navbar navbar-expand-lg navbar-light purple-gradient ">
        <button class="navbar-toggler white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse ml-5 " id="navbarTogglerDemo01">
            <a class="navbar-brand logo text-white" href="index.php?liste"><i class="fas fa-walking fa-3x"></i></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item active ">
                    <a class="nav-link text-white" href="index.php?#liste"><i class="fas fa-th-list"></i>Liste des promenades<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ajouterPromenade.php"><i class="fas fa-highlighter"></i>Ajouter votre promenade</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-5" action="index.php" method="GET">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success text-white my-2 my-sm-0" type="submit" value="search" >Search</button>
            </form>
        </div>
    </nav>

