<?php
// Constructor
// It is used to assigne values to variables.
// This is autometically called when the objecs of class is created.
class A{
    public $name='No Name';
    function __construct($n)
    {
            $this->name=$n;
            
    }
    function show()
    {
        echo 'Your name is '.$this->name;
    }
}
    $obj=new A('Ali Usman');
    $obj->show();
?>