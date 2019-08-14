<?php
include "Connection.php";
global $connection;
connect();
$user = $_POST['user'];
$pswd = $_POST['pswd'];
$query = "INSERT INTO students (username,password) VALUES ('$user', '$pswd')";
$result = mysqli_query($connection, $query);
?>