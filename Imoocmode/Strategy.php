<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 17:03
 * 策略模式：针对不同的应用场景调用不同的策略对象
 */
interface Strategy{
    function stra();
}
class Strategy1 implements Strategy{
    function stra(){
        echo 'Strategy1';
    }
}
class Strategy2 implements Strategy{
    function stra(){
        echo 'Strategy2';
    }
}
class Test{
    public function run(Strategy $obj){
        $obj->stra();
    }
}
$obj = new test();
$obj->run(new Strategy1());
$obj->run(new Strategy2());