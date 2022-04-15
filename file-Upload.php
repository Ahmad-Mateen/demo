<?php
if(isset($_FILES['image']))
{
   // print_r($_FILES);
    $name=$_FILES['image']['name'];
    $type=$_FILES['image']['type'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $size=$_FILES['image']['size'];

    echo $name;
    // now Upload this file to server
    move_uploaded_file($tmp_name,'upload-images/'.$name);
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Form</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
        <input type='file' name='image'><br/><br/>
         <input type='submit' name='save'><br/><br/>
        </form>
        </body>
    </html>