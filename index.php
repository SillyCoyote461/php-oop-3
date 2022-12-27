<?php
include_once __DIR__ . '/class/book.php';
include_once __DIR__ . '/class/dvd.php';
include_once __DIR__ . '/class/employer.php';
include_once __DIR__ . '/class/genre.php';

$genres=[
    'giallo' => new genre('giallo','fa-solid fa-user-secret'),
    'fantasy' => new genre('fantasy', 'fa-solid fa-dragon')
]


// $test=[
//     new Product('prova', 'prova 2', 4.5, 'platinum prova')
// ];
// $test[0]->day = 20;
// $test[0]->month = 12;
// $test[0]->year = 2022;
// $test[0]->image = '20';
// var_dump($test);
// var_dump($test[0]->getDate());

?>