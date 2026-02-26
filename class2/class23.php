    <title>SENG 412 class 2</title>
</head>
<body>
    <?php
    $bank_balance = NULL ;

    if($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    }elseif($bank_balance > 200)
    {
        $savings += 100;
        $bank_balance -= 100;
      }else{
        $savings += 50;
        $bank_balance -= 50;
      }
        echo "The bank balance is :"."". $bank_balance;

    ?>
</body>
</html>