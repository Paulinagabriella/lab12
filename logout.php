<?php
session_start();
session_destroy();
echo "Go <a href=hackme.php> here </a> to check your status. You are logged out.";
?>
