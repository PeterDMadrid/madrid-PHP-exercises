<?php
namespace src\Controller;

use src\Model\Model;

class Controller {
    public function index(){
        $first = '';
$last = '';
$em = '';
$text = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST["first"];
    $lastName = $_POST["last"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $form = new Model($firstName, $lastName, $email, $message);

    $first = $form->getFirst();
    $last = $form->getLast();
    $em = $form->getEmail();
    $text = $form->getText();
}

$first = $first ?? "";
$last = $last ?? "";
$em = $em ?? "";
$text = $text ?? "";
require __DIR__ . "/../View/View.php";
    }
}
