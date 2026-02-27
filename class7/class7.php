<?php

$host= "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($host, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully <br/>";
?>