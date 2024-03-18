<?php
namespace src\Model;

class OperationsModel {
    public function concatenate($string1, $string2){
        return $string1 . $string2;
    }
    public function split($result, $index){
        return substr($result, $index, strlen($result) - $index);
    }
    public function replace($remove, $replace, $root){
        return str_replace($remove, $replace, $root);
    }
}