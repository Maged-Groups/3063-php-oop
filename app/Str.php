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

    }

    public static function upper($str)
    {

    }

    public static function lower($str)
    {

    }

    public static function ucwords($str)
    {

    }

    public static function contains($str, $substr)
    {

    }

}