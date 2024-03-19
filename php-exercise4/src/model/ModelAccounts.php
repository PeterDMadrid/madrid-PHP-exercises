<?php
namespace src\Model;

class ModelAccounts
{
    public $usernames = ["peter", "kirsch", "madrid"];
    public $passwords = ["peter123", "kirsch123", "madrid123"];

    public function getUsernames()
    {
        return $this->usernames;
    }

    public function getPasswords()
    {
        return $this->passwords;
    }
}
