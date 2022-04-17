<?php
function __spl_autoload_register($class)
{
        require $class.'.php';
}
$obj=new first();
?>