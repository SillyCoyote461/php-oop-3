<?php
include_once __DIR__ . '/class/product.php';

$test=[
    new Product(20, 12, 2022, 'prova', 'prova 2', 'prova 3', 4.5, 'platinum prova')
];

var_dump($test);

?>