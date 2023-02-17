<?php

class Movie
{
    public $title;
    public $author;
    public $language;

    public function __construct($_title, $_author, $_language)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->language = $_language;
    }
}
