<?php
// Static Members
// We make static members and functions when we want to use them outside the class without creating the objects of class.
//
    class Students{
        public static $name='No Name';
        
        public static function show($n)
        {
            self ::$name=$n;
            echo 'Student Name is '.self ::$name;
        }
    }
    //echo Students ::$name;
    Students ::show('ali'); // if you want to access the members or functions just write the class name and double colon and then required thing


?>