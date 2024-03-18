<?php
namespace src\Controller;

use src\Model\SortModel;

class Controller
{
    public function index()
    {
        $sort = new SortModel();
        $ascending = [];
        $descending = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numbers = $_POST["inputNumber"];

            $correctNumbers = $sort->trimFirstAndLastSpace($numbers);

            $array = explode(" ", $correctNumbers);
            $length = count($array);

            $ascending = $sort->ascending($array, $length);
            $descending = $sort->descending($array, $length);
        }

        $ascending = $ascending ?? "";
        $descending = $descending ?? "";
        include __DIR__ . "/../View/View.php";
    }
}
