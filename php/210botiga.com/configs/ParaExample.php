<?php

class ParaExample
{
    private static $para = array(
        "type"   => "",
        "sName"  => "",
        "dbName" => "",
        "uName"  => "",
        "pass"   => ""
    );

    public static function get () : array{ return self::$para; }

}