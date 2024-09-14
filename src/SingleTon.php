<?php

namespace App;

class SingleTon
{
    private static $obj;
    public function __construct(){
        echo "Class is called first time";
    }


    public static function generate(){

        if(!isset(self::$obj)){

            self::$obj = new SingleTon();
            
        }else{

            echo "\n";
            echo "Class object already called one time can't call now";
        }
    }
}