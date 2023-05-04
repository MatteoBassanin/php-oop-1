<?php

require __DIR__  . "/Models/Movie.php";
require __DIR__  . "/Models/Genre.php";

$generi = [
    new Genre("adventure"),
    new Genre("action"),
];

$jumanji = new Movie("Jumanji",$generi,"1995","	Joe Johnston","104 minutes");
$matrix = new Movie("Matrix",$generi,"1999","Andy e Larry Wachowski","	136 minutes");


$movies = [$jumanji,$matrix];



echo $jumanji->getAllData();
echo $jumanji->getGenres();
echo "</br>";
echo $matrix->getAllData();
echo $matrix->getGenres();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php opp 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    

    <main>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">genere</th>
                    <th scope="col">anno di uscita</th>
                    <th scope="col">regista</th>
                    <th scope="col">durata</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($movies as $movie) {?>
                        <tr>
                            <th scope="row"><?php  echo $movie->title; ?></th>
                            <td><?php  echo $movie->title; ?></td>
                            <td><?php  echo $movie->releaseYear; ?></td>
                            <td><?php  echo $movie->director; ?></td>
                            <td><?php  echo $movie->duration; ?></td>
                        </tr>
                    <?php } ?>
                   
                </tbody>
            </table>
    </main>

</body>
</html>