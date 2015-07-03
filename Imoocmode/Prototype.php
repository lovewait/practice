<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 17:34
 * 原型模式：通过复制已经存在的实例来返回新的实例，而不是新建实例，并且原型（被复制的实例）是可定制的
 */
interface Prototype{
    function copy();
}
class Prototype1 implements Prototype{
    public $name;
    public function copy(){
        return unserialize(serialize($this));//据说这叫深拷贝
    }
    public function setName($name){
        $this->name = $name;
    }
}
$obj = new Prototype1();
$obj->setName('xxx');
$obj1 = $obj->copy();
$obj2 = clone($obj);//据说这是浅拷贝
var_dump($obj2);
var_dump($obj1);
var_dump($obj);