<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time</title>
</head>
<body>
    <h1>Time In Pakistan</h1>
    <?php
    // Time
    //There are four parametrs that we have pass (Hour, Minutes, Seconds, Meridiem)
    // This date function show your server time you have to change the region according to your requirements
    echo "Time is  ".date('h:i:s:a').'<br>';
    echo "Time is  ".date('H:I:S:A').'<br>';
    echo "Time is  ".date('g:i:s:a').'<br>';
    echo "Time is  ".date('G:i:s:A').'<br>';
    // Now change the Region
    date_default_timezone_set('Asia/Karachi');
    echo "Time is  ".date('h:i:s:a').'<br>';
    // Data
    echo 'Today is'."  ".date("d/m/y").'<br>';   
    echo 'Today is'."  ".date("D-M-Y").'<br>';
    ?>
</body>
</html>