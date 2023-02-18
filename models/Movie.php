<?php
include_once __DIR__ . '/Genre.php';
class Movie
{
    public $id;
    public $title;
    public $director;
    public $language;
    public $genres;
    public $plot;

    public function __construct($_id, $_title, $_director, $_language, Genre $_genres = null, $_plot)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
        $this->setGenre($_genres->name);
        $this->plot = $_plot;
    }

    public function getFullDescription()
    {
        return "$this->title, un film di genere '$this->genres' in $this->language diretto da $this->director";
    }

    public function setGenre($array)
    {
        if (!$array[1]) $this->genres = "$array[0]";
        else $this->genres = "$array[0]/$array[1]";
    }
}
