<?php

class Movie
{
    public $title;
    public $director;
    public $language;

    public function __construct($_title, $_director, $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
    }

    public function getFullDescription()
    {
        return "$this->title, un film in $this->language diretto da $this->director";
    }
}

$first_film = new Movie('007, dalla Russia con Amore', 'inglese', 'Terence Young');
$second_film = new Movie('007, Skyfall', 'inglese', 'Sam Mendes');

// var_dump($first_film, $second_film);

echo "{$first_film->getFullDescription()} </br> {$second_film->getFullDescription()}";
