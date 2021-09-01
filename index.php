<?php 
    class Movie {
        public $title;
        public $length;

        //costruttore per il titolo

        function __construct($_title){
            $this->title = $_title;
        }

        //set durata film

        public function setLength($duration){
            if($duration < 60){
                $this ->length = 'Cortometraggio';
            }
            elseif($duration > 60 && $duration < 120){
                $this ->length = 'Film';
            }
            else {
                $this ->length = 'Film lungo';
            }
        }
    }
    $twows = new Movie('The Wolf of Wall Street');
    $twows->setLength(180);

    $sm = new Movie('Scary Movie');
    $sm->setLength(50);

    $bm = new Movie('Batman - Il cavaliere oscuro');
    $bm ->setLength(90);

    var_dump($twows);
    var_dump($sm);
    var_dump($bm);