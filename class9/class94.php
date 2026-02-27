<?php
// dashboaerd.php

session_start();

include "class91.php";

// If session not set, check cookie
if(!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {
    $token = $_COOKIE['remember_token'];
    
    $stmt = $conn->prepare("SELECT id, fullname FROM sysusers WHERE remember_token=?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();
    
    if($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullname);
        $stmt->fetch();
        $_SESSION['user_id'] = $id;
        $_SESSION['fullname'] = $fullname;
    }
}

// If still not logged in
if(!isset($_SESSION['user_id'])) {
    header("Location: class93.php");
    exit();
}

?>

<h2>Welcome, <?php echo $_SESSION['fullname']; ?></h2>

<a href="logout.php">Logout</a>
