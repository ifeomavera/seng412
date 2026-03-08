<?php
$answer = "";

if(isset($_POST['q1'])){
    $answer = "1";
}
elseif(isset($_POST['q2'])){
    $answer = "2";
}
elseif(isset($_POST['q3'])){
    $answer = "3";
}
elseif(isset($_POST['q4'])){
    $answer = "4";
}
elseif(isset($_POST['q5'])){
    $answer = "5";
}
?>

<html>
<head>
<title>Questions and Answer Practice Page</title>
</head>

<body>

<h2>Questions and Answer Practice Page</h2>

<form method="post">
<!-- Question 1 -->
<p>1. Internet is supported by ----------- and WWW is supported by -----------</p>
<input type="submit" name="q1" value="Click to View Answer">
<?php
if($answer == "1"){
    echo "<p>Internet is supported by TCP/IP and WWW is supported by HTTP</p>";
}
?>

<br><br>
<!-- Question 2 -->
<p>2. IPv4 is -------- bits and IPv6 is --------</p>
<input type="submit" name="q2" value="Click to View Answer">
<?php
if($answer == "2"){
    echo "<p>IPv4 is 32 bits and IPv6 is 128 bits</p>";
}
?>

<br><br>
<!-- Question 3 -->
<p>3. Write a PHP script to compute the average of five numbers</p>
<input type="submit" name="q3" value="Click to View Answer">
<?php
if($answer == "3"){
echo "<pre>
&lt;?php
\$numbers = array(10,20,30,40,50);
\$average = array_sum(\$numbers) / count(\$numbers);
echo \$average;
?&gt;
</pre>";
}
?>

<br><br>

<p>4. An example of PHP Framework --------</p>
<input type="submit" name="q4" value="Click to View Answer">
<?php
if($answer == "4"){
    echo "<p>Laravel</p>";
}
?>

<br><br>

<p>5. Create an array of five cars and display on separate lines</p>
<input type="submit" name="q5" value="Click to View Answer">
<?php
if($answer == "5"){
echo "<pre>
&lt;?php
\$cars = array('Toyota','Honda','BMW','Ford','Mercedes');
foreach(\$cars as \$car){
echo \$car.'<br>';
}
&gt;
</pre>";
}
?>

</form>

</body>
</html>