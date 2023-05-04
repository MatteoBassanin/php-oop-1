<?php

require __DIR__  . "/Models/Movie.php";


$jumanji = new Movie("Jumanji","adventure","1995","	Joe Johnston","104 minutes");
$matrix = new Movie("Matrix","action","1999","Andy e Larry Wachowski","	136 minutes");




echo $jumanji->getAllData();
echo "</br>";
echo $matrix->getAllData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php opp 1</title>
</head>
<body>
    
</body>
</html>