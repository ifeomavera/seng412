<?php 
$state_capital = array(
    "Abia" => "Umuahia",
    "Adamawa" => "Yola",
    "Akwa Ibom" => "Uyo",
    "Anambra" => "Awka",
    "Delta" => "Asaba",
    "Lagos" => "Ikeja",
    "Ondo" => "Akure",
    "FCT" => "Abuja"
);

foreach($state_capital as $state => $capital){
    echo "The capital of $state is $capital <br/>";
}

?>
