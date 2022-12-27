<?php 

include_once __DIR__ . '/../trait/date.php';
include_once __DIR__ . '/../trait/image.php';

class product{
    use Date, Image;
    public $title;
    public $author;
    public $genre;
    public $description;
    public $edition;
    public $vote;

    public function __construct(
        String $title,
        String $author,
        String $genre,
        String $description,
        String $edition,
        Float $vote
    ){
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->description = $description;
        $this->edition = $edition;
        $this->vote = $vote;
    }
}
?>