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
    <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 



    <title>Document</title>

</head>
<body>
  

<form  method="post" action="search.php"  id="searchform"> 
    <input  type="text" name="name"> 
    <input  type="submit" name="submit" value="Search"> 
</form> 



</body>
</html>