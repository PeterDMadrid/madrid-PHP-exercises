<?php
namespace control;
require "src/model/model.php";
use model\Accounts;
use model\Validation;

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];

    $accounts = new Accounts();
    $validation = new Validation($accounts->getUsernames(), $accounts->getPasswords(), $usernameInput, $passwordInput);

    $errors = $validation->validate();

    if(empty($errors)){
        if($validation->check()){
            header("Location: src/view/accountPage.php");
            exit();
        } else {
            $message = "Invalid Credentials";
        }
    } else {
        $message = implode("", $errors);
    }
}

$message = $message ?? "";
require "src/view/view.php";