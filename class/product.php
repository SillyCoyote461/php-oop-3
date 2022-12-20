<?php 

include_once __DIR__ . '/../trait/date.php';
include_once __DIR__ . '/../trait/image.php';

class Product{
    use Date, Image;
    public $image;
    public $genre;
    public $description;
    public $vote;
    public $edition;

    public function __construct(
        String $genre,
        String $description,
        Float $vote,
        String $edition

    ){
        $this->genre = $genre;
        $this->description = $description;
        $this->vote = $vote;
        $this->edition = $edition;

    }

}

?>