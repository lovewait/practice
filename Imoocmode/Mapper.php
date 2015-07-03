<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/2
 * Time: 17:12
 * 数据对象映射模式：是将对象和数据存储映射起来，对一个对象操作会映射对数据存储的操作。
 */
class Dao{
    protected $conn;
    public function __construct(){
        $this->conn=mysql_connect('localhost','root','123');
        mysql_select_db('test');
        mysql_query('SET NAMES UTF8');
    }

}
class Table extends Dao{
    private $id;
    private $name;
    public function __construct(){
        parent::__construct();
        $result = mysql_query('select * from `table`');
        if($result){
            $row=mysql_fetch_assoc($result);
            $this->id = $row['id'];
            $this->name = $row['name'];
        }
    }
    public function __destruct(){
        mysql_query('update `table` set `id` = '.$this->id.',`name` = "'.$this->name.'"');
    }
    public function __toString(){
        var_dump($this);
    }
    public function __set($name,$value){
        $this->$name = $value;
    }
}
$obj = new Table();
$obj->id = 1;
$obj->name = 'aaaa';
var_dump($obj);