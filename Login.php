<?php
include "Connection.php";
global $connection;
connect();
if (isset($_POST['sent'])) {
    $user = $_POST['user'];
    $pswd = $_POST['pswd'];
    $query = "INSERT INTO students (username,password) VALUES ('$user', '$pswd')";
    $result = mysqli_query($connection, $query);
}
?>