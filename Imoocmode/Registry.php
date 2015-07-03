<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 16:16
 * 注册模式：注册表中提供静态方法，让其他对象访问其中的数据，整个系统中的每个对象都可以访问这些数据对象
 */
class Registry{
    private static $_obj = array();
    public static function getObj($alias){
        if(isset(self::$_obj[$alias])){
            return self::$_obj[$alias];
        }else{
            return false;
        }
    }
    public static function setObj($alias,$obj){
        if(!isset(self::$_obj[$alias])){
            self::$_obj[$alias] = $obj;
        }
        return true;
    }
    public static function unsetObj($alias){
        if(isset(self::$_obj[$alias])){
            unset(self::$_obj[$alias]);
        }
        return true;
    }
}
class test{

}

Registry::setObj('test1',new test());
Registry::setObj('test2',new test());
var_dump(Registry::getObj('test1'));
var_dump(Registry::getObj('test2'));