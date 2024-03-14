<?php 
require_once 'src/model/model.php';
use model\model\Operations;

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first = $_POST['first'] ?? null;
    $second = $_POST['second'] ?? null;
    $operator = $_POST['operations'] ?? null;

    if(isset($operator)){
        switch($operator){
            case "+":
                $result = !empty(Operations::checkEmpty($first, $second)) ? Operations::checkEmpty($first, $second) : Operations::add($first, $second);
                break;
            case "-":
                $result = !empty(Operations::checkEmpty($first, $second)) ? Operations::checkEmpty($first, $second) : Operations::subtract($first, $second);
                break;
            case "/":
                $result = !empty(Operations::checkEmpty($first, $second)) ? Operations::checkEmpty($first, $second) : Operations::divide($first, $second);
                break;
            case "*":
                $result = !empty(Operations::checkEmpty($first, $second)) ? Operations::checkEmpty($first, $second) : Operations::multiply($first, $second);
                break;
            default:
                $result = "Invalid Operator";
                break;
        }
    }
}
    $result = $result ?? "";
    require "src/view/view.php";

