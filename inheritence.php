<?php
     
     class student {
         public $name;
         public $class;
         public $subject;
         function __construct($n,$c,$s)
         {
                $this->name=$n;
                $this->class=$c;
                $this->subject=$s;
         }
         function info()
         {
             echo '<h4>Student Information</h4>';
             echo $this->name.'<br/>';
             echo $this->class.'<br/>';
             echo $this->subject.'<br\>';
         }
     }
     class teacher extends student{
            

     }
     $s1=new teacher('Ali Ahsan','Bscs','CS');
     $s1->info();

?>