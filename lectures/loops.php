<?php
//Loops
//Loops are used to execute the same block of code again and again
//1)while Loop 2)do while loop 3)For Loop 4) Foreach Loop

// while Loop
//loops through a block of code as long as the specified condition is true
$n=0;
while($n<=5)
{
    echo 'The Number is= '. $n.'<br/>'; 
    $n++;
}
// DO-while Loop
//loops through a block of code once, and then repeats the loop as long as the specified condition is true
$p=0;
do
{
    
    echo 'The Number is= '. $p.'<br/>'; 
    $p++;
}while($p<=4);
// For Loop     
//loops through a block of code a specified number of times
for($i=0;$i<=5;$i++)
{
    echo 'The Number is= '. $i.'<br/>';
}
// ForEach Loop     
//loops through a block of code for each element in an array
$color=[
    'Red',
    'Green',
    'Blue',
];

foreach ($color as $value) {
    echo  $value.'<br>';  
  }
$age=[
    'Bill'=>'20',
    'Steve'=>'22',
    'Johan'=>'34',
];

foreach($age as $key=>$val)
{
    echo $key.' = '.$val.'<br>';
}



?>