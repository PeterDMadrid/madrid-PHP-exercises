<?php
namespace src\Controller;

class HelloController
{
    public function index()
    {
        $model = new \src\Model\HelloModel();
        $message = $model->getMessage();
        require "src/View/HelloView.php";
    }
}
