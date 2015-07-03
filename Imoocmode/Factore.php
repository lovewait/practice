<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 15:38
 * 工厂模式：根据传入的参数不同选择实例化不同的类
 */
class Factory{
    public static function createClass($class){
        $obj = new $class();
        return $obj;
    }
}
class test1{

}
class test2{

}

$obj1 = Factory::createClass('test1');
$obj2 = Factory::createClass('test2');
var_dump($obj1);
var_dump($obj2);