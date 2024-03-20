<?php
namespace src\Model;

class CalculatorModel
{

    public static function add($first, $second)
    {
        if (isset($first) && isset($second)) {
            return $first + $second;
        } else {
            return "No values (addition function)";
        }
    }

    public static function subtract($first, $second)
    {
        if (isset($first) && isset($second)) {
            return $first - $second;
        } else {
            return "No values (subtract function)";
        }
    }

    public static function divide($first, $second)
    {
        if (isset($first) && isset($second)) {
            if ($second != 0) {
                return $first / $second;
            } else {
                return "Divisor must not be 0";
            }
        }
    }

    public static function multiply($first, $second)
    {
        if (isset($first) && isset($second)) {
            return $first * $second;
        }
    }

    public static function checkEmpty($first, $second)
    {
        if (empty($first) && empty($second)) {
            return "Enter First and Second Number!";
        } elseif (empty($first)) {
            return "Enter First Number!";
        } elseif (empty($second)) {
            return "Enter Second Number!";
        }
    }
}
