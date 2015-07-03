<?php
/**
 * Created by PhpStorm.
 * User: SNOVA
 * Date: 2015/7/3
 * Time: 18:02
 * 解释器模式：给定一种语言，定义它文法的一种表示，并定义一个解释器，该解释器利用该表示来解释语言中的句子
 */
class Interpreter{
    private $_interpreter;
    function execute($string){
        $count = strlen($string);
        for($i=0;$i<$count;$i++){
            $tmp = $string[$i];
            switch(true){
                case is_numeric($tmp) :
                    $this->_interpreter = new Num();
                    break;
                case is_string($tmp) :
                    $this->_interpreter = new Str();
                    break;
            }
            echo $this->_interpreter->interpreter($tmp);
        }
    }
}
class Num{
    public function interpreter($str){
        switch($str){
            case 1 :
                return '一';
            case 2 :
                return '二';
            case 3 :
                return '三';
            case 4 :
                return '四';
            case 5 :
                return '五';
            case 6 :
                return '六';
            case 7 :
                return '七';
            case 8 :
                return '八';
            case 9 :
                return '九';
            case 0 :
                return '零';
        }
    }
}
class Str{
    public function interpreter($str){
        return strtoupper($str);
    }
}
$obj = new Interpreter();
$str = '2323jlfdsjlfsadj3249fdosj';
$obj ->execute($str);