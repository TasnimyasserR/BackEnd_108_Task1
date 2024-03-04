<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$N = 13;
$M = 12;


$lastDigitN = $N %10;
$lastDigitN1 = $M %10;

$sum = $lastDigitN1 + $lastDigitN;


echo "Summation of the last digits is: " . $sum;
?>
  
</body>
</html>