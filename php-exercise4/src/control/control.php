<?php
require 'src/model/model.php';
use model\Accounts;
use model\Validation;

$accounts = new Accounts();
$response = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = $_POST['username'];
    $userPassword = $_POST['password'];

    $user1 = new Validation($accounts->getUsernames(), $accounts->getPasswords(), $userInput, $userPassword);
    $response =  $user1->check();
    if(str_contains($response, "Login Successful")){
        header("Location: src/view/accountPage.php");
        exit();
    }
}
$loginSuccessful = $loginSuccessful ?? "";
$response = $response ?? "";
include "src/view/view.php";