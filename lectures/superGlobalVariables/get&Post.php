    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Form</title>
    </head>
    <body>
        <form method="post">
         Name: <input type='text' name='fname'><br/><br/>
         Age : <input type='text' name='age'><br/><br/>
         <input type='submit' name='save'><br/><br/>
        </form>
        <?php
// Get & Post super global Methods
// We use these variable when we deal with form to get the valuse 
// The Main difference between get & Post is that get is not secure for data.
 echo '<pre>';   
 print_r($_POST);
echo '<pre/>';
// $ Server 
echo '<pre>';   
 print_r($_SERVER);
echo '<pre/>';
?>
    </body>
    </html>

