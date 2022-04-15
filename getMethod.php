<?php
    // GetMethod 
    // Usually we use it when we want to show an error whwen we try to access the private or non exsisting member
        class abc{
            private $name;
            public function __get($property)
            {
                    echo 'You are trying to access the private or non exsisting member'.$property;
            }
        }
        $obj=new abc();
        $obj->name;
?>