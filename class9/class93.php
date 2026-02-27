<?php
//login.php
session_start();

include "class91.php";

if (isset($_POST['login'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare(
        "SELECT id, fullname, password FROM sysusers WHERE email=?"
    );
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($id, $fullname, $hashed_password);
        $stmt->fetch();

  if (password_verify($password, $hashed_password)) {
            // Create session
            $_SESSION['user_id'] = $id;
            $_SESSION['fullname'] = $fullname;

            // Remember me (cookie)
            if (isset($_POST['remember'])) {

                $token = bin2hex(random_bytes(16));

                setcookie("remember_token", $token, time() + (86400 * 30), "/"); // 30 days
                $update = $conn->prepare("UPDATE sysusers SET remember_token=? WHERE id=?");
                $update->bind_param("si", $token, $id);
                $update->execute();
            }

     header("Location: class94.php");
            exit();
     }else {
            echo "Invalid Password!";
        }
    } else {
        echo "No user found!";
    }
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="checkbox" name="remember"> Remember Me<br>
    <button name="login">Login</button>
</form>
