<?php
function connect()
{
    global $connection;
    $connection = mysqli_connect('localhost', 'root', '', 'udemy');
    if ($connection) {
        echo "Success";
    } else {
        echo "Fail";
    }
}
?>