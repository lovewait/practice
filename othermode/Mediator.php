<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/6
 * Time: 10:23
 * 中介者模式：中介者模式用于开发一个对象，这个对象能够在类似对象相互之间不直接相互的情况下传送或者调解对这些对象的集合的修改
 */
class Mediator{
    private $_containers = array();
    public function __construct(){
        $this->_containers[] = 'First';
        $this->_containers[] = 'Second';
    }
    public function change($obj){
        foreach($this->_containers as $container){
            if($obj instanceof $container){
                $obj->mychange();
                $obj->afterchange();
            }
        }
    }
}
class First{
    public function mychange(){
        echo 'first changed';
    }
    public function afterchange(){
        echo 'first afterchanged';
    }
}
class Second{
    public function mychange(){
        echo 'second changed';
    }
    public function afterchange(){
        echo 'second afterchanged';
    }
}
$obj = new Mediator();
$objtest = new First();
$obj->change($objtest);
$objtest2 = new Second();
$obj->change($objtest2);