<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 16:38
 * 适配器模式：将一个类的接口转换成需要的另外一个接口，使得原本不兼容的的类可以一起工作
 */
interface Adapter{
    function ada($param,$param2);
}
class WantAdapter implements Adapter{
    public function ada($param1='',$param2=''){
        $this->want();
    }
    public function want(){
        echo 'I want to work like adapter';
    }
}

$obj = new WantAdapter();
$obj->ada();