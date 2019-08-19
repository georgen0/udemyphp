<?php
$name = "SomeName";
$value = 100;
$exp = time() + (3600 * 24);
setcookie($name, $value, $exp);
if (isset($_COOKIE['SomeName'])) {
    echo "Success";
} else {
    echo "Fail";
}
?>