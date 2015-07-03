<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/3
 * Time: 13:16
 * 迭代器模式：提供一种访问一个容器对象中的各个元素，而又不暴露其内部细节
 */
class Iteratormode implements Iterator{
    private $index = 0;
    private $users = array();
    public function __construct(Array $users){
        $this->users = $users;
        $this->index = 0;
    }

    public function valid(){
        return isset($this->users[$this->index]);
    }
    public function next(){
        $this->index ++;
    }
    public function current(){
        return $this->users[$this->index];
    }
    public function key(){
        return $this->index;
    }
    public function rewind(){
        $this->index = 0;
    }
}
class User{

}
$obj1 = new User();
$obj2 = new User();
$data = array(
    $obj1,$obj2
);
$iteractor = new Iteratormode($data);
foreach($iteractor as $key => $value){
    var_dump($value);
}