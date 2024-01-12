<?php
require __DIR__ . "/Models/Movie.php";


$back_to_the_future = new Movie("Ritorno al futuro", "Robert Zemeckis", "1985", "fantascienza");
$back_to_the_future->genre .= ", commedia, avventura.";

$the_naked_gun = new Movie("Una pallottola spuntata", "David Zucker", "1988", "comico");
$the_naked_gun->genre .= ", poliziesco.";

var_dump($back_to_the_future);
var_dump($the_naked_gun);

echo "<h1>Elenco film:</h1>";
echo $back_to_the_future->getMovieInfo() . "<br>";
echo $the_naked_gun->getMovieInfo();
