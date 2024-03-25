<?php
namespace src\Controller;

use src\Model\ModelAccounts;
use src\Model\Model;

class Controller
{

    public function index()
    {
        $accounts = new ModelAccounts();
        $response = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userInput = $_POST['username'] ?? null;
            $userPassword = $_POST['password'] ?? null;

            $user1 = new Model($accounts->getUsernames(), $accounts->getPasswords(), $userInput, $userPassword);
            $response =  $user1->check();
            if (strpos($response, "Login Successful") !== false) {
                include __DIR__ . "/../View/AccountPage.php";
                exit();
            }
        }
        $response = $response ?? "";
        include __DIR__ . "/../View/View.php";
    }
}
