<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/6
 * Time: 16:25
 * 访问者模式：表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素类的前提下定义作用于这些元素的新操作。
 */
class Visitor{
    public function visit(User $user){}
}
class SimpleVisitor extends Visitor{
    public function visit(User $user){
        $user->simpleVisit();
    }
}
class MultiVisitor extends Visitor{
    public function visit(User $user){
        $user->multiVisit();
    }
}
class User{
    public function simpleVisit(){}
    public function multiVisit(){}
}

class RealUser extends User{
    public function simpleVisit(){
        echo 'simplevisit<br/>';
    }
    public function multiVisit(){
        echo 'multivisit<br/>';
    }
}
class Users{
    private $_visitors = array();
    public function addVisitor(Visitor $visitor){
        $this->_visitors[] = $visitor;
    }
    public function run(User $user){
        foreach($this->_visitors as $visitor){
            $visitor->visit($user);
        }

    }
}
$visitor1 = new SimpleVisitor();
$visitor2 = new MultiVisitor();
$visitor3 = new SimpleVisitor();
$users = new Users();
$user = new RealUser();
$users->addVisitor($visitor2);
$users->addVisitor($visitor1);
$users->addVisitor($visitor3);
$users->run($user);