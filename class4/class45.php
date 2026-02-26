<?php 

$number = range(1, 2000);


foreach($number as $x) {
    if ($x % 2 == 0) {
        echo $x * 5 . " is even.<br/><br/>";
    } else {
        echo $x * 7 . " is odd.<br/><br/>";
    }
}

?>