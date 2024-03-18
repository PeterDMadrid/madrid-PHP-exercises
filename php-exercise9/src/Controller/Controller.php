<?php
namespace src\Controller;

use src\Model\OperationsModel;

class Controller {
    public function index(){
        $result = "";
        $result1 = "";
        $resilt2 = "";
        $x = 0;
        session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $operation = new OperationsModel();
            $oper = $_POST["task"];
            
            if(isset($oper)){
                switch($oper){
                    case 'merge' :
                        $string1 = $_POST["first1"];
                        $string2 = $_POST["second1"];
                        $_SESSION["result"] = $operation->concatenate($string1, $string2); 
                        $result = $_SESSION["result"];
                        break;
                    case 'split' :
                        $index = $_POST["index"];
                        if (isset($_SESSION["result"])) { 
                            $x = $x+1;
                            $result = $_SESSION["result"]; 
                            $_SESSION["result1"] = $operation->split($result, $index);
                            $result1 = $_SESSION["result1"];
                        }
                        break;
                    case 'replace' :
                        $replace = $_POST['replace'];
                        if (isset($_SESSION["result1"])){
                            $x = 3;
                            $root = $_SESSION["result"];
                            $substringToRemove = $_SESSION["result1"];
                            $_SESSION["result2"] = $operation->replace($substringToRemove, $replace, $root);
                            $result2 = $_SESSION["result2"];
                        }
                }
            }
        }
        $result = $result ?? "";
        $result1 = $result1 ?? "";
        $resulit2 = $result2 ?? "";
        require __DIR__ ."/../View/View.php";
    }
}
