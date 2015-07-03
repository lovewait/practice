<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/3
 * Time: 15:33
 * 建造者模式：将一个复杂对象的构造与它的表示分离，使同样的构建过程可以创建不同的表示的设计模式
 */
class Builder{
    private $_config;
    private $_object;
    public function __construct($config){
        $this->_object = new Product();
        $this->_config = $config;
    }
    public function build(){
        $this->_object->setPrice($this->_config['price']);
        $this->_object->setSize($this->_config['size']);
    }
    public function getObj(){
        return $this->_object;
    }
}
class Product{
    private $price;
    private $size;
    public function setPrice($price){
        $this->price = $price;
    }
    public function setSize($size){
        $this->size = $size;
    }
    public function __toString(){
        return  $this->price.$this->size;
    }
}

$config = array(
    'size' => '10',
    'price' => '$190.00',
);
$obj = new Builder($config);
$obj->build();
echo $obj->getObj();
