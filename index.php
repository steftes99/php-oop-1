<?php

    class Movie{
        
        public $title;
        public $length;
        public $director;

        function __construct($_director){
            $this->director = $_director;
        }

        public function setLength($length){
            if($length < 60){
              $this->length = 'Cortometraggio'. ', '.$length . ' ' . 'minuti';
            }
            elseif($length > 60 && $length < 120){
              $this->length = 'Media durata'. ', ' .$length . ' ' . 'minuti';
            }
            else{
              $this->length = 'Lunga durata' . ', '.$length . ' ' . 'minuti';
            }
          }

          public function getLength(){
            return $this->length;
          }

    }

    $twows = new Movie('Martin Scorsese');
    $twows->title = 'The Wolf of Wall Street';
    $twows->setLength(180);

    

    var_dump($twows)

?>