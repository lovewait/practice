<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 17:50
 * 装饰器模式：不必重写任何已有的功能性代码，而是对某个基于对象应用增量变化
 */
abstract class Decorator{
    public function beforetest(){}
    public function aftertest(){}
}
class Decorator1  extends Decorator{
    public function beforetest(){
        echo 'before';
    }
    public function aftertest(){
        echo 'after';
    }
}
class Test{
    public function __construct(){
        //这边有个问题我很郁闷，为毛我没有定义这个构造函数的时候系统就会报实例化缺少参数的错呢
    }
    public function test(Decorator $decorator){
        $decorator->beforetest();
        echo 'test';
        $decorator->aftertest();
    }
}
$decorator = new Decorator1();
$obj = new Test();
$obj->test($decorator);