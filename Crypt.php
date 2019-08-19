<?php
$pass = "mypass";
$salt = "iusesomecrazystrings22";
$cry = crypt($pass, $salt);
echo $cry;
?>