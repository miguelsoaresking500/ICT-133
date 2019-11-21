<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 21.11.2019
 * Time: 11:44
 */

date_default_timezone_set('Europe/Zurich');
echo "<ol>";
echo "<li>".date('l j \ F Y')."</li>";
echo "<li>".date('M jS Y ')."</li>";
echo "<li>".date("d/m/y H:i A")."</li>";
echo "<li>".date('jS M Y ,H:i:s ')."</li>";
echo "<li>".date('D, j M Y ,H:i:s O')."</li>";
echo "</ol>";
?>
</html>