<?php

namespace src\control;
require "src/model/FiboModel.php";
use src\model\FiboModel;

$results = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];
    $fiboModel = new FiboModel();
    $results = $fiboModel->generateFib($length);
}
