<?php
namespace src\Controller;

use src\Model\DateModel;

class Controller
{
    public function index()
    {
        $format = new DateModel();
        $format1 = $format->format1();
        $format2 = $format->format2();
        $format3 = $format->format3();
        $format4 = $format->format4();
        $format5 = $format->format5();

        require __DIR__ . "/../View/View.php";
    }
}
