<?php
$pass = "mypass";
$salt = "somesalt";
$cry = crypt($pass, $salt);
echo $cry;
?>