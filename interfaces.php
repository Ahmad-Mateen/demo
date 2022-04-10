<?php
// 
interface A{
    
 function calc($a,$b);
}
interface B {
    function show();
}
class X implements A,B{
       public function calc($a,$b)
        {
            echo 'Sum is  '.$a+$b.'<br/>';
        }
       public function show()
        {
            echo 'This is an Interface.';
                
        }
}
$x=new X();
$x->calc(10,20);
$x->show();


?>