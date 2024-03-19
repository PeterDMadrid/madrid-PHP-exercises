<?php
namespace src\Controller;

use src\Model\ModelAccounts;
use src\Model\Model;

class Controller
{
    public function index()
    {
        $message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
            $usernameInput = $_POST['username'];
            $passwordInput = $_POST['password'];

            $accounts = new ModelAccounts();
            $validation = new Model($accounts->getUsernames(), $accounts->getPasswords(), $usernameInput, $passwordInput);

            $errors = $validation->validate();

            if (empty($errors)) {
                if ($validation->check()) {
                    include __DIR__ . "/../View/AccountPage.php";
                    exit();
                } else {
                    $message = "Invalid Credentials";
                }
            } else {
                $message = implode("", $errors);
            }
        }

        $message = $message ?? "";
        include __DIR__ . "/../View/View.php";
    }
}
