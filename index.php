<?php

include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/data/db.php';

// // var_dump($movies)
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