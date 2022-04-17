<?php
//Destructor function
//A destructor is called when the object is destructed or the script is stopped or exited
class A{
    function __construct()
    {
        echo 'This is class constructor'.'<br/>';
    }
    public function hello()
    {
            echo 'Hi Everyone!'.'<br/>';
    }
    function __destruct()
    {
        echo 'This is class destructor'.'<br/>';
    }
}
$obj=new A();
$obj->hello();
?>