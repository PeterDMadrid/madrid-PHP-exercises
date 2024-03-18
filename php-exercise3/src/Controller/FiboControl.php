<?php
namespace src\Controller;

use src\Model\FiboModel;

class FiboControl {
    public function index(){
        $results = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $length = $_POST["length"];
            $fiboModel = new FiboModel();
            $results = $fiboModel->generateFib($length);
        }
            include __DIR__ . "/../View/View.php";
    }
}

