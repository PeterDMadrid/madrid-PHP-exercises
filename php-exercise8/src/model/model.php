<?php
namespace model;

date_default_timezone_set('Asia/Manila');
class Format {
    public function format1(){
        return date('Y-m-d H:i:s');
    }

    public function format2(){
        return  date('F j, Y');
    }

    public function format3(){
        return date('h:i:s A');
    }

    public function format4(){
        return date('h:i:s A');
    }
    public function format5(){
        return date('l, F j');
    }
}