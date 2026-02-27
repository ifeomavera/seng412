<?php
include "class7.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = mysqli_prepare ($conn,
        "INSERT INTO mydatabase.myguests(name, email) VALUES (?,?)"
    );

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);
    
    echo "User Created Sucessfully";
}
?>

<form method="POST">
Name : <input type = "text" name="name" required><br>
Email : <input type = "email" name="email" required><br>
<button type="Submit" name="Submit">Create User</button>
</form>