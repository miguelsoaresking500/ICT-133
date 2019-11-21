<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
</head>
<body>
<?php


$value=20;
$step=3;
$i = 0;

while ($i<10){
    if($value >=30){
        echo"<h1>le nombre vaut".$value."</h1>";
    }
    else{
        echo"<h1>nombre est trop petit";
    }
    $i++;
    $value += $step;
}

?>
</html>