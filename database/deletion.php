<?php
require 'connection.php';
// lets first make an input field
if(isset($_POST['submit']))
{
    $id=$_POST['uId'];
    //echo $id;
    $query="DELETE FROM `records` WHERE name='$id'"; 
    if(mysqli_query($conn,$query))
    {
        echo'Records deleted';
    }
    else
    {
        echo'Name does not found';
    }
}


?>
<form method='post'>
Name : <input type='text' name='uId' placeholder='Enter name' required/>
        <input type='submit' name='submit'/>
</form>