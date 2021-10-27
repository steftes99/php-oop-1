<?php

    class Movie{
        
        public $title;
        public $length;
        public $director;
        public $genre;

    }

    $twows = new Movie();
    $twows->title = 'The Wolf of Wall Street';

    var_dump($twows)

?>