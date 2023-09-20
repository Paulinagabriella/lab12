<?php
session_start();
$authorized = $_SESSION['authorized'];

if ($authorized == 1)
{

    echo "You are currently logged in <br> <br>";
//NEW IF CONDITION for logged in users
    $secret = $_POST['flag_value'];

    if ($secret == 'blog')
    {

       echo "The flag is Flag-Success123";

    }
    else
    {

       echo "This webpage accepts a POST value of 'flag_value'. Use raft-small-words to brute-force this parameter and find the flag!";
       echo "If you want to log out click <a href='logout.php'> here </a> to log out";

    }

}
if ($authorized != 1)

{

       echo "You are not logged in. Please go to <a href='index.php'> this </a> to log in";

}

?>
