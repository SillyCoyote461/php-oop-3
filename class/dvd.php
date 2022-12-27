<?php
include_once __DIR__.'/product.php';

class dvd extends product{
    public $time;
    public function __construct(
        String $title,
        String $author,
        Float $price,
        String $genre,
        String $description,
        String $edition,
        Float $vote,
        String $time
    ){
        $this->time = $time;
    }
}
?>