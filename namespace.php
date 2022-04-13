<?php
//Namespace
// It is used when we want to use more than one classes having same name.
 require 'first.php';
 require 'second.php';
 $obj=new product\A();
 $obj=new test\A();
?>