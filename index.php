<?php

    class Movie{
        
        public $title;
        public $length;
        public $director;
        public $genre;

        function __construct($_length){
            $this->length = $_length;
        }

    }

    $twows = new Movie(120);
    $twows->title = 'The Wolf of Wall Street';

    

    var_dump($twows)

?>