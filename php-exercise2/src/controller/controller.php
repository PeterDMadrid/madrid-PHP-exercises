<?php
namespace src\Controller;

use src\Model\CalculatorModel;

class Controller
{
    public function index()
    {
        $operations = new CalculatorModel();

        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first = $_POST['first'] ?? null;
            $second = $_POST['second'] ?? null;
            $operator = $_POST['operations'] ?? null;

            if (isset($operator)) {
                switch ($operator) {
                    case "+":
                        $result = !empty($operations->checkEmpty($first, $second)) ? $operations->checkEmpty($first, $second) : $operations->add($first, $second);
                        break;
                    case "-":
                        $result = !empty($operations->checkEmpty($first, $second)) ? $operations->checkEmpty($first, $second) : $operations->subtract($first, $second);
                        break;
                    case "/":
                        $result = !empty($operations->checkEmpty($first, $second)) ? $operations->checkEmpty($first, $second) : $operations->divide($first, $second);
                        break;
                    case "*":
                        $result = !empty($operations->checkEmpty($first, $second)) ? $operations->checkEmpty($first, $second) : $operations->multiply($first, $second);
                        break;
                    default:
                        $result = "Invalid Operator";
                        break;
                }
            }
        }

        include __DIR__ . "/../View/CalculatorView.php";
    }
}
