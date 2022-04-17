<?php
// $_Session
//A session is a way to store information (in variables) to be used across multiple pages.
//Unlike a cookie, the information is not stored on the users computer.
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "blue";
$_SESSION["favanimal"] = "dog";
echo "Session variables are set.";
?>

</body>
</html>