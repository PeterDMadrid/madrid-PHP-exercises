<?php
namespace src\Model;

class Model
{
    public $first;
    public $last;
    public $email;
    public $message;
    public function __construct($first, $last, $email, $message)
    {
        $this->first = $first;
        $this->last = $last;
        $this->email = $email;
        $this->message = $message;
    }

    public function getFirst()
    {
        return $this->first;
    }
    public function getLast()
    {
        return $this->last;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getText()
    {
        return $this->message;
    }
}
