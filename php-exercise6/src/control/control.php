<?php
require "src/model/model.php";
use model\Sorter;

$sort = new Sorter();
$ascending = [];
$descending = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numbers = $_POST["inputNumber"];

    $correctNumbers = $sort->trimFirstAndLastSpace($numbers);

    $array = explode(" ",$correctNumbers);
    $length = count($array);
    
    $ascending = $sort->asc($array, $length);
    $descending = $sort->desc($array, $length);
}

$ascending = $ascending ?? "";
$descending = $descending ?? "";
include "src/view/view.php";