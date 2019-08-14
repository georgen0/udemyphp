<?php
include "Connection.php";
connect();
?>
<html>
<select name="" id="">

    <?php
    global $connection;
    $query = "SELECT * FROM students";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
    ?>

</select>
</html>
