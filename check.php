<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin")
{
$_SESSION['authorized'] = 1;
echo "You typed in the correct credentials<br> <br>";
echo "Go to <a href='hackme.php'> This page </a> next<br> <br>";
echo "or go to <a href='index.php'> The login page </a> to try again<br> <br>";
echo " If you want to logout <a href='logout.php'> click here </a> . <br>";
}
else
{
$_SESSION['authorized'] = 0;
echo "Bad credentials. Hacking detected<br> <br>";
echo "Go to <a href='hackme.php'> This page </a> next to see your status <br> <br>";
echo "or go to <a href='index.php'> The Login Page </a> to try again<br>";

}
?>
