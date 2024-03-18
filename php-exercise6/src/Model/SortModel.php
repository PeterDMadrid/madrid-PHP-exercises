<?php
namespace src\Model;

class SortModel {
    public function ascending($array, $length){
        for($i = 0; $i < $length; $i++) {
            for($j = 0; $j < $length - 1 - $i; $j++) {
                if($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }

    public function descending($array, $length){
        for($i = 0; $i < $length; $i++) {
            for($j = 0; $j < $length - 1 - $i; $j++) {
                if($array[$j] < $array[$j + 1]) { 
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }

    function trimFirstAndLastSpace($str) {
        if (substr($str, 0, 1) === ' ') {
            $str = substr($str, 1);
        }
        if (substr($str, -1) === ' ') {
            $str = substr($str, 0, -1);
        }
        return $str;
    }
    
}