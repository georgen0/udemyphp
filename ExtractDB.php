<?php
$connection = mysqli_connect('localhost', 'root', '', 'udemy');
if ($connection) {
    echo "Success";
} else {
    echo "Fail";
}
?>
<html>
<select name="" id="">

    <?php

    $query = "SELECT * FROM students";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
    ?>

</select>
</html>
