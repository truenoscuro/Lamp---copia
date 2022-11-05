<?php
require_once __DIR__."/../configs/Para.php";
require_once __DIR__."/TendaSql.php";
class GeneradorTenda
{
    private static $tendaSql ;
    private static $para;
    private static function getPara()
    {
        self::$para = Para::get();
    }

    public static function  singleton () : TendaSql {
        if(is_null(self::$tendaSql)) {
            self::getPara();
            self::$tendaSql = new TendaSql(self::$para);
        }
        return self::$tendaSql;
    }

}