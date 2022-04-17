<?php
//Type Hinting 
//type hinting means providing hints to function to only accept the given data type
function sum(int $number) // we specify data type in the start of variable
{
    echo 'The Sum is'.$number+10;
}
sum('Ahmad');
?>