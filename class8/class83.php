<?php

$valid_user = "Ifeoma";
$valid_pass = "1234";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { 
            background-color: #ffc0cb; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .success { 
            color: #d81b60; 
            font-size: 18px; 
            font-weight: bold;
            margin-bottom: 20px;
        }
        .error { 
            color: #d81b60; 
            font-size: 18px; 
            font-weight: bold;
        }
        a { 
            color: #fff; 
            background-color: #d81b60; 
            padding: 10px 20px; 
            text-decoration: none; 
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        a:hover { background-color: #c2185b; }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($username == $valid_user && $password == $valid_pass) {
            setcookie("user", $username, time() + (86400 * 30), "/");
            echo "<div class='success'>Login successful.</div>";
            echo "<a href='class8.php'>Go to Dashboard</a>";
        } else {
            echo "<div class='error'>Invalid login details.</div>";
        }
        ?>
    </div>
</body>
</html>