<?php
session_start();
$authorized = $_SESSION['authorized'];

if ($authorized == 1)
{

echo "You are currently logged in <br> <br>";
echo "If you want to log out click <a href='logout.php'> here </a> to log out";

}
else
{

echo "You are not logged in. Please go to <a href='index.php'> this </a> to log in";

}
?>
