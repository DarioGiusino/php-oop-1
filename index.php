<?php

include_once __DIR__ . '/models/Movie.php';

$first_film = new Movie('007, dalla Russia con Amore', 'Terence Young', 'inglese');
$second_film = new Movie('007, Skyfall', 'Sam Mendes', 'inglese');

// var_dump($first_film, $second_film);

echo "{$first_film->getFullDescription()} </br> {$second_film->getFullDescription()}";
