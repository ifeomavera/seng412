<?php

if (!isset($_COOKIE["user"])) {
    header("Location: class81.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .container {
            background-color: #fff0f5;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(219, 112, 147, 0.2);
            text-align: center;
        }
        
        h2 {
            color: #c2185b;
            margin-bottom: 30px;
        }
        
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ec407a;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        a:hover {
            background-color: #c2185b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Welcome <?php echo $_COOKIE['user']; ?></h2>
        <a href="class82.php">Logout</a>
    </div>
</body>

</html>