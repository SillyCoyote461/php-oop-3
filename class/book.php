<?php
include_once __DIR__.'/product.php';

class book extends product{
    public $cover;
    public $pages;
    public function __construct(
        String $title,
        String $author,
        String $genre,
        String $description,
        String $edition,
        Float $vote,
        String $cover,
        Int $pages
    ){
        $this->cover = $cover;
        $this->pages = $pages;
    }
}
?>