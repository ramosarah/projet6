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
  

<form  method="post" action="search.php?go"  id="searchform"> 
    <input  type="text" name="name"> 
    <input  type="submit" name="submit" value="Search"> 
</form> 


<?php
    if(isset($_POST['submit'])){ 
    if(isset($_GET['go'])){ 
    if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
    $name=$_POST['name']; 
    //connect  to the database 
    $db=mysql_connect  ("mariaDB", "adminProm",  "adminPr0m") or die ('I cannot connect to the database  because: ' . mysql_error()); 
    //-select  the database to use 
    $mydb=mysql_select_db("Promenades"); 
    //-query  the database table 
    $sql="SELECT  Titre, FROM Promenades WHERE Titre LIKE '%" . $titre; 
    //-run  the query against the mysql query function 
    $result=mysql_query($sql); 
    //-create  while loop and loop through result set 
    while($row=mysql_fetch_array($result)){ 
            $titre  =$row['Titre']; 
    //-display the result of the array 
    echo "<ul>\n"; 
    echo "<li>" . "<a  href=\"search.php?id=$id\">"   .$titre .  "</a></li>\n"; 
    echo "</ul>"; 
    } 
    } 
    else{ 
    echo  "<p>Please enter a search query</p>"; 
    } 
    } 
    } 
?> 




</body>
</html>