    <title>SENG 412 class 2</title>
</head>
<body>
    <?php
        $x = 100;

        while($x <= 1500){
            $y = $x % 2;
            if ($y == 0){
                echo "Even" . " ". $x*2 . "<br>";
            }else{
                 echo "Odd" . " ". $x*3 . "<br>";  
            }
            $x++;
            
        }


        


    ?>
</body>
</html>