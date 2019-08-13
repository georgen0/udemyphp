<?php
$connection = mysqli_connect('localhost', 'root', '', 'udemy');
if ($connection) {
    echo "Success";
} else {
    echo "Fail";
}
$user = $_POST['user'];
$pswd = $_POST['pswd'];
$query = "INSERT INTO students (username,password) VALUES ('$user', '$pswd')";
$result = mysqli_query($connection, $query);
?>