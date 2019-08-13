<?php

if (isset($_POST['sent'])){
    echo $_POST['pswd'];
}

?>

<html>

<form action="Form.php" method="post">
    <input type="text" placeholder="Enter User" name="text">
    <input type="password" placeholder="Enter password" name="pswd">
    <br>
    <input type="submit" name="sent">
</form>

</html>