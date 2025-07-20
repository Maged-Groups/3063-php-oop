<?php
namespace App;

class Num
{
    /**
     * @param $num1
     * @param $num2
     * @return int
     */
    public static function sum($num1, $num2): int
    {
        return $num1 + $num2;
    }

    /**
     * @param $n
     * @return bool
     */
    public static function isNumber($n): bool
    {
        return is_numeric($n);
    }

    public static function inRange($n, $min, $max)
    {
        return $n >= $min && $n <= $max;
    }
}