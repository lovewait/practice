<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/3
 * Time: 15:12
 * 代理模式：给某一对象提供代理对象，并由代理对象控制具体对象的引用
 */
class Proxy{
    function run(){
        $obj = new BuyProxy();
        $obj->run();
    }
    function walk(){
        $obj = new SellProxy();
        $obj->walk();
    }
}
class BuyProxy {
    function run(){
        echo 'buyrun';
    }
    function walk(){
        echo 'buywalk';
    }
}
class SellProxy {
    function walk(){
        echo 'sellwalk';
    }
}

$obj = new Proxy();
$obj->run();
$obj->walk();