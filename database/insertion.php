<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h1>Register Yourself !</h1>
    
<form method="post">
<input type="textbox" name="uname" placeholder='UserName'  required/>
<input type="textbox" name="ucity" placeholder='City' required/>
<input type="textbox" name="uphone" placeholder='Contact'  required/>
<input type="textbox" name="upassword" placeholder='Password' required/>
<input type="submit" name="save"/>
</form>
<?php
include 'connection.php';
if(isset($_POST['save']))
{
    $name=$_POST['uname'];
    $city=$_POST['ucity'];
    $phone=$_POST['uphone'];
    $password=$_POST['upassword'];
    $query="insert into records(name,city,phone,password)values('$name','$city','$phone','$password')";
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('New User has been added')</script>";

    }
    else
    {
        echo 'error'.mysql_error($conn);
    }
}
?>
</body>
</html>