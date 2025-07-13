<?php
namespace App;

class Num
{
    public static function sum($num1, $num2)
    {

    }

    public static function isNumber($n)
    {
        return is_numeric($n);
    }

    public static function inRange($n, $min, $max)
    {
        return $n >= $min && $n <= $max;
    }
}