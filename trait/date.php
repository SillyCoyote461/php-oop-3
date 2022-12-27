<?php

trait Date{
    public $day;
    public $month;
    public $year;

    public function getDate(){
        echo "$this->day/$this->month/$this->year";
    }
}

?>