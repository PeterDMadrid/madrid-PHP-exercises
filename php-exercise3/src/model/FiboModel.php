<?php

namespace src\model;

class FiboModel{
    function generateFib($length)
    {
        $array = [0, 1];
        for($i = 2; $i < $length; $i++){
            $array[$i] = $array[$i - 1] + $array[$i - 2];
        }
        return $array;
    }

}
