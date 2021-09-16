<?php

namespace Belayat;


class Belayat
{


    /**
     * Make slug 
     */
    public static function makeSlug($title)
    {
        $lowerdata = strtolower($title);
        return str_replace(' ', '-', $lowerdata);
    }

    /**
     * Array to JSON Convert 
     */
    public static function jsonencode(array $arr)
    {
        return json_encode($arr);
    }


    /**
     * JSON  to Array  Convert 
     */
    public static function jsondecode(string $str, $type = false)
    {
        return json_decode($str, $type);
    }

    /**
     * Random Number
     */
    public static function randNum()
    {
        return rand();
    }


    /**
     * Qunite name prefix
     */
    public function uname($ext = '')
    {
        return md5(time() . rand()) . '.' . $ext;
    }
}
