<?php

include_once __DIR__ . '/../models/Movie.php';

//db constant
const HOSTNAME = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'root';
const DBNAME = 'movies_db';
const PORT = 8889;

//try connection to db
try {
    $conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME, PORT);
    // // var_dump($conn);
} catch (Exception $e) {
    //if fail, print the error message
    echo $e->getMessage();
    die();
}

//try a query
try {
    //define a query string
    $sql = 'SELECT `title`, `language`, `director` FROM `movie`';
    // // var_dump($sql);

    //query the db
    $res = $conn->query($sql);
    // // var_dump($res);

    //if the db answer
    if ($res->num_rows) {
        //define an empty array
        $movies = [];
        //while the db continuing answer
        while ($movie = $res->fetch_assoc()) {
            //push the answer in array
            $movies[] = new Movie($movie['title'], $movie['director'], $movie['language']);
        }
    } else {
        echo 'No results';
    }
} catch (Exception $e) {
    //if fail, print the error message
    echo $e->getMessage();
    die();
}

// // var_dump($movies);
//close connection to db
$conn->close();
