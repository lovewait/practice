<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 15:25
 * 单例模式：一个类只有一个实例
 */

class Single{
    private static $conn;
    private function __construct(){

    }
    private function __clone(){

    }
    public static function getInstance(){
        if(self::$conn){
            return self::$conn;
        }else{
            self::$conn = new self();
            return self::$conn;
        }
    }

}
$db1 = Single::getInstance();
$db2 = Single::getInstance();
var_dump($db1);
var_dump($db2);