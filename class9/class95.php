<?php
// logout.php

session_start();

include "class91.php";

// Remove remember token from DB
if (isset($_SESSION['user_id'])) {
    $stmt = $conn->prepare(
        "UPDATE sysusers SET remember_token = NULL
         WHERE id = ?"
    );

    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
}

// Destroy session
session_unset();
session_destroy();

// Delete cookie
setcookie("remember_token", "", time() - 3600, "/");

header("Location: class93.php");
exit();
?>
