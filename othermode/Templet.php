<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/6
 * Time: 15:58
 * 模板模式：模板模式准备一个抽象类，将部分逻辑以具体方法以及具体构造形式实现，然后声明一些抽象方法来迫使子类实现剩余的逻辑
 */
abstract class Templet{
    public function temp(){
        $this->firstopt();
        $this->secondopt();
        echo 'everything is ok';
    }
    public abstract function firstopt();
    public abstract function secondopt();
}

class First extends Templet{
    public function firstopt(){
        echo 'Ffirstopt';
    }
    public function secondopt(){
        echo 'Fsecondopt';
    }
}
class Second extends Templet{
    public function firstopt(){
        echo 'Sfirstopt';
    }
    public function secondopt(){
        echo 'Ssecondopt';
    }
}
$first = new First();
$first->temp();
$second = new Second();
$second->temp();