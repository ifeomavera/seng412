<?php
session_start();

//setting session variables
$_SESSION["username"] = "Ifeoma";
$_SESSION["role"] = "Admin";


echo "Session varaibles are set  ". "<br>";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Role: " . $_SESSION["role"] . "<br>";

?>