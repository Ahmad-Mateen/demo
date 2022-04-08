<?php
// Arrays
// 1) Indexed arrays 2) Associative arrays 3) Multidimensional arrays
//--Index Array
$person=array('Hands', 'Mouth', 'Lips','Foot', 'Ear');
echo count($person); // For get the length of any array
array_push($person,'Teeth','Arms'); // For adding new elements in array
print_r($person);
print_r(array_reverse($person));  // For reversing the array


//--Associative arrays
//Associative arrays are arrays that use named keys that you assign to them.
$languags=array(
    'PHP'=>'8.3',
    'JAVA' => '9.0'
);
print_r($languags);

//Multidimensional arrays
//A multidimensional array is an array containing one or more arrays.
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  print_r($cars);



?>
 

