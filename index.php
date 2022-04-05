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
const fname="Shahid Mateen".'<br>';
echo fname;
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
$person=['Johan','Face','Hands','Mouth'];
echo '<pre>';
print_r($person);
echo '<pr/>';
//for counting of array Element
echo 'Total Number of Arrays = '.count($person);
// we can add more elements by push function
array_push($person,'Eyes','Teeth');
echo '<pre>';
print_r($person);
echo '<pr/>';
//Associative Array
$languages=[
    'php'=> '1.8',
    'java'=> '1.8',
    'larvl'=> '1.8',
];
echo '<pre>';
print_r($languages);
echo '<pr/>';
echo "4-4-2022".'<br/>';
//Operators
//Arithmetic Operators
$operators=["+","-","*","/"];
print_r($operators);
//if else statements
$number=20;
if($number==20)
{
    echo"The Given number is equal to 20.";
}
else
{
    echo "Not Matched";
}
// loops
//For Loop
echo 'With For Loop'.'<br/>';
for($i=0;$i<=10;$i++)
{
    echo 'The Number is= '. $i.'<br/>';
}
// do-While loop
echo '----------------'.'<br/>';
echo 'With For  do While Loop'.'<br/>';
$p=0;
do
{
    
    echo 'The Number is= '. $p.'<br/>'; 
    $p++;
}while($p<=5); 
//
echo '----------------'.'<br/>';
echo 'With For While loop  '.'<br/>';
$n=0;
while($n<=5)
{
    echo 'The Number is= '. $n.'<br/>'; 
    $n++;
}
// Switch Statement
$message='paid';
switch ($message) {
    case 'paid':
        echo 'Status Paid.';
        break;
    case 'declined':
        echo 'declind';
        break;
        case 'pending':
            echo 'Pending';
            break;
    default:
        echo 'Unknown Payment Status.';
}
?>