<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 15:56
 * 观察者模式：一个对象状态变化时，所有相关的对象都将得到通知
 */
interface Observer{
    function update();
}
class Observer1 implements Observer{
    function update(){
        echo 'update Observer1';
    }
}
class Observer2 implements Observer{
    function update(){
        echo 'update Observer2';
    }
}
class Test{
    private $observer = array();
    public function addObs(Observer $obs){
        $this->observer[] = $obs;
    }
    public function testRun(){
        if(!empty($this->observer)){var_dump($this->observer);
            $this->observer=array_reverse($this->observer);//数组反转
            foreach($this->observer as $obs){
                $obs->update();
            }
        }
    }
}
$obs1 = new Observer1();
$obs2 = new Observer2();
$obj = new Test();
$obj->addObs($obs1);
$obj->addObs($obs2);
$obj->testRun();