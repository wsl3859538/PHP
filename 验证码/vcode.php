<?php
class RandomCode{
    private $length;
    private $type;
    
    function __construct($l,$t){
        $this->length = $l;
        $this->type = $t;
    }
    
    function getRandNum(){
        $_length = $this->length;
        $_type = $this->type;
        switch ($_type){
            case 1:
                $str = join(array_rand(range(0, 9),$_length));
                return $str;
                break;
            case 2:
                //array_rand返回键值，array_merge合并后返回内容为10->a,11->b，
                //所以在rand前使用array_flip翻转数组
                $hb_array = array_flip(array_merge(range(0, 9),range('a', 'z'),range('A', 'Z')));                  
                $strA = join(array_rand($hb_array,$_length));            
                return $strA;
                break;
        }
    }
}

$obj = new RandomCode(4, 1);
echo $obj->getRandNum().'<hr/>';
$obj2 = new RandomCode(4, 2);
echo $obj2->getRandNum().'<hr/>';