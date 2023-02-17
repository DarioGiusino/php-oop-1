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
}
