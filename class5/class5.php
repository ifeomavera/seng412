<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully <br/>";

$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE myDB.MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP)";

if(mysqli_query($conn, $sql)){
    echo "Table MyGuests created successfully";
} else {  
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);


?>