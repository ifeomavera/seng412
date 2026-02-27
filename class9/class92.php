<?php
//registration page
include "class91.php";

if(isset($_POST['register'])){

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn ->prepare("INSERT INTO sysusers (fullname, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullname, $email, $password);
if($stmt->execute()){
    echo "New record created successfully";
}else {
    echo "Error: Email already exists";
}

}
?>

<form method="POST">
    <input type="text" name="fullname" placeholder="Full Name"><br>
    <input type="email" name="email" placeholder="Ifeoma@example.com"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button name="register">REGISTER</button>
</form>