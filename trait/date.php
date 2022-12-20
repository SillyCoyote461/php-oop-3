<?php

trait Date{
    public $day;
    public $month;
    public $year;

    public function GetDate(
        Int $day,
        Int $month,
        Int $year
    ){
        return $date=[$day, $month, $year];
    }
}

?>