<?php

class Genre{
    public $name;
    public $icon;

    public function __construct(
        String $name,
        String $icon
    ){
        $this->name = $name;
        $this->icon = $icon;
    }

}

?>