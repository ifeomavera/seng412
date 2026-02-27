<?php
$cookie_name = "User";
$cookie_value = "Fed";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo "Cookie has been set.";

if (isset($_COOKIE[$cookie_name])) {
    // This statement retrieves the value
    echo "User: " . $_COOKIE["User"];
} else {
    echo "User cookie is not set.";
}