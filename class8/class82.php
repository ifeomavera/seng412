<?php

setcookie("user", "", time() - 3600, "/");

header("Location: class81.php");
exit();

?>