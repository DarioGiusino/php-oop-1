<?php

include_once __DIR__ . '/../models/Movie.php';
include_once __DIR__ . '/../data/db.php';

// // var_dump($movies)

header('Content-Type: application/json');

echo json_encode($movies);
