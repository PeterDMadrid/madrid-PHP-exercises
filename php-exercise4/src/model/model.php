<?php
namespace model;

class Accounts {
    public $usernames = ["peter", "kirsch", "madrid"];
    public $passwords = ["peter123", "kirsch123", "madrid123"];

    public function getUsernames(){
        return $this->usernames;
    }

    public function getPasswords(){
        return $this->passwords;
    }
}

class Validation {
    private $usernames;
    private $passwords;
    private $userInput;
    private $userPassword;

    public function __construct($usernames, $passwords, $userInput, $userPassword){
        $this->usernames = $usernames;
        $this->passwords = $passwords;
        $this->userInput = $userInput;
        $this->userPassword = $userPassword;
    }

    public function check(){
        for($i=0; $i<count($this->usernames); $i++){
            if($this->userInput == $this->usernames[$i] && $this->userPassword == $this->passwords[$i]){
                return "Login Successful";
            }
        }
        return "Invalid Credentials";
    }
}