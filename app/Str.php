<?php
namespace App;
class Str
{
    public static function validateLength($str, $min = 3, $max = 255)
    {
        if (strlen($str) < $min || strlen($str) > $max) {
            return false;
        }

        return true;

    }

    public static function reverse($str)
    {
        return strrev($str);
    }

    public static function upper($str)
    {
        return strtoupper($str);
    }

    public static function lower($str)
    {
        return strtolower($str);
    }

    public static function ucwords($str)
    {
        return ucwords($str);
    }

    public static function contains($str, $substr)
    {
        if (strpos($str, $substr) === false) {
            return false;
        }

        return true;

    }

}