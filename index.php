<?php

include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/data/db.php';

// $first_film = new Movie('007, dalla Russia con Amore', 'Terence Young', 'inglese');
// $second_film = new Movie('007, Skyfall', 'Sam Mendes', 'inglese');

// var_dump($first_film, $second_film);

// echo "{$first_film->getFullDescription()} </br> {$second_film->getFullDescription()}";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>

<body>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <?= $movie->getFullDescription() ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>