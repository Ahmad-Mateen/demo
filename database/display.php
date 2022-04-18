<?php
require 'connection.php';
// Select Query
$query="select * from records";
$result=mysqli_query($conn , $query);
// if you want to find the number of rows in table
//$rows=mysqli_num_rows($result);
//echo $rows;
// now lets display the records
while($rs=mysqli_fetch_assoc($result))
{
echo $rs['name'].' '.$rs['city'].' '.$rs['phone'].' '.$rs['password'].' '.'<br>';
}
?>