
<?php
// With Reverse function
/*if(isset($_POST["submit"]))
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
}*/
?>
<form method="post">
    <h1>Plaindrom Finder</h1>
    <input type="textbox" name="value" required/>
    <input type="submit" name="submit"/>
    <?php
        if(isset($_POST['submit']))
        {
            $word="";
            $result="";
            $word=$_POST['value'];
            $length=strlen($word) -1;
            
            for($i=$length; $i>=0; $i--)
            {
                $result.=$word[$i];
        
            }
            //echo $result;
            if($word==$result)
            {
                echo '<h5>The given word is plaindrom</h5>';
            }
            else
        {
            echo '<h5>The given word is not plaindrom</h5>';
        }
        }

    ?>
</form>