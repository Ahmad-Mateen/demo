// Palindrome Finder
<?php
if(isset($_POST["submit"]))
{
    $n=$_POST["word"];
    $revers=strrev($n);
    if($n==$revers)
    {
        echo 'The Given Word is Palindrome.';
    }
    else
    {
        echo 'The Given Word is not Palindrome.';
    }
}
?>
<form method="post">
    <h1>Plaindrom Finder</h1>
    <input type="textbox" name="word" reuired/>
    <input type="submit" name="submit"/>
</form>