<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/3
 * Time: 16:19
 * 外观模式：外部与一个子系统的通信必须通过一个统一的外观对象进行，为子系统中的一组接口提供一个一致的界面，外观模式定义了一个高层接口，这个接口使得这一子系统更加容易使用
 */
class Facade{
    public function run(){
        $obj1 = new Test1();
        $obj2 = new Test2();

        $obj1->run1();
        $obj2->run2();
    }


}
class Test1{
    public function run1(){
        echo 'Test.run1';
    }
}
class Test2{
    public function run2(){
        echo 'Test.run2';
    }
}
$obj = new Facade();
$obj->run();
