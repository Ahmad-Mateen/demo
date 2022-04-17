<?php
//Classes And Objects
class person
{
    public $name='No Name'; // You Can assign variables defalut value like this..
    public $age=0;

    function __construct($n,$age)
    {
        $this->name=$n;
        $this->age=$age;
    }

    function show()
    {
        echo 'Your Name is'.'  ' .$this->name.'  '.'and Your Age is '.$this->age;
    }
}
   $p1=new person('Ahmad Mateen',20);
    $p1->show();
?>
