<?php
//Abstract Class
// Implemented by using abstract keyord
// Abstract class must have a abstract method 
// No Obj;
// This is also called method overidding
 abstract class A{
    public $name;
    
    abstract protected function calc($a,$b);
}
class B extends A {
    public function calc($c,$d)
    {
            echo 'Sum is ' .$c+$d;
    }
}
$b=new B();
$b->calc(10,20);

?>