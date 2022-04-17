<?php
$serverName='localhost';
$userName='root';
$password='';
$database='student';
$conn=new mysqli($serverName,$userName,$password,$database);
if(!$conn)
{
    echo 'Connection Error'.'<br>';
}
else
{
    echo 'Connection Generated';
}
?>