<?php
include "class7.php";

$id = $_GET['id'];

if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $stmt = mysqli_prepare($conn, 
    "UPDATE myguests SET name=?, email=? WHERE id=?"
);

    mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $id);
    mysqli_stmt_execute($stmt);

    echo "User updated successfully!";
}

$result = mysqli_query($conn, "SELECT * FROM myguests WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="$_POST">
Name : <input type = "text" name="name" value="<?php echo $row['name']; ?>" required><br>
Email : <input type = "email" name="email" value="<?php echo $row['email']; ?>" required><br>
<button type="submit" name="update">UPDATE</button>

</form>