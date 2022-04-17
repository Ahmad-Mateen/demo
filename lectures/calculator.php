<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h3>Basic Calculator </h3>
    <form method="post">
<input type="textbox" name="txt_1"  required/>
<input type="textbox" name="txt_2" required/>

<input type="submit" name="btn_division" value="/"/>
<input type="submit" name="btn_multiplication" value="*"/>
<input type="submit" name="btn_minus" value="-"/>
<input type="submit" name="btn_plus" value="+"/>
<br/>

<?php
if(isset($_POST['btn_division']))
{
    $number1=$_POST['txt_1'];
    $number2=$_POST['txt_2'];
    $result=$number1/$number2;
    print_r($result);
}
if(isset($_POST['btn_multiplication']))
{
    $number1=$_POST['txt_1'];
    $number2=$_POST['txt_2'];
    $result=$number1*$number2;
    print_r($result);
}
if(isset($_POST['btn_minus']))
{
    $number1=$_POST['txt_1'];
    $number2=$_POST['txt_2'];
    $result=$number1-$number2;
    print_r($result);
}
if(isset($_POST['btn_plus']))
{
    $number1=$_POST['txt_1'];
    $number2=$_POST['txt_2'];
    $result=$number1+$number2;
    print_r($result);
}
?>
</form>
</body>
</html>