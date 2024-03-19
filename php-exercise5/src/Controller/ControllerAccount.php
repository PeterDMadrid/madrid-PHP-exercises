<?php
namespace src\Controller;

class ControllerAccount
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["logout"])) {
            include __DIR__ . "/../View/View.php";
            exit();
        }
    }
}
