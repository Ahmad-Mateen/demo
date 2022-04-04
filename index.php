<?php
echo "01-04-2022".'<br/>';
echo "Variables and Constants".'<br/>';
// Variables
$name="Johan Smith".'<br/>';
echo $name;
// Constants
// By Using Define funcation
define('NAME','Ahmad');
echo NAME.'<br/>';
// By Using Const keyword
const fName="Shahid Mateen".'<br>';
echo fName;
// Predefine Constants
echo PHP_VERSION.'<br/>';
// Majic Constants
echo __FILE__;
echo __LINE__;
    

//------------------------
echo "<br/>";
echo "02-04-2022".'<br/>';
echo "Data Types in Php".'<br/>';
echo "1-Boolean".'<br/>';
echo "2-Integer".'<br/>';
echo "3-Flot".'<br/>';
echo "4-String".'<br/>';
echo "5-Arrys".'<br/>';
echo "6-Objects".'<br/>';
echo "7-Callable".'<br/>';
echo "8-Iterable".'<br/>';
echo "9-Resources".'<br/>';
echo "10-Null".'<br/>';
//
echo "3-4-2022".'<br/>';
//Arrays In PhP
$Person=['Johan','Face','Hands','Mouth'];
echo '<pre>';
print_r($Person);
echo '<pr/>';
//for counting of array Element
echo 'Total Number of Arrays = '.count($Person);
// we can add more elements by push function
array_push($Person,'Eyes','Teeth');
echo '<pre>';
print_r($Person);
echo '<pr/>';
//Associative Array
$Languages=[
    'Php'=> '1.8',
    'Java'=> '1.8',
    'Larvl'=> '1.8',
];
echo '<pre>';
print_r($Languages);
echo '<pr/>';

?>