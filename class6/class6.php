<?php 
require("class51.php");

$sql = "INSERT INTO myDB.myguests (firstname, lastname, email) 
        VALUES ('Hank', 'Doe', 'hank@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>