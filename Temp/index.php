<?php
// Set your timezone!!
date_default_timezone_set('Asia/Tokyo');
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}
// Check format
$timestamp = strtotime($ym . '-01');  // the first day of the month
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
// Today (Format:2018-08-8)
$today = date('j');
// Title (Format:August, 2018)
$title = date('F, Y', $timestamp);
// Create prev & next month link
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));
// Number of days in the month
$day_count = date('t', $timestamp);
// 1:Mon 2:Tue 3: Wed ... 7:Sun
$str = date('N', $timestamp);
;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="month">
    <ul class="list-inline">
        <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt;</a></li>
        <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
        <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">></a></li>
    </ul>
</div>
        <ul class="weekdays">
            <?php
            $sem = array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
            for ($a = 0; $a < 7; $a++) {
                echo "<li>$sem[$a]</li>";
            }
            ?>

        </ul>
    <?php


    echo "<ul class='days'>";


    for ($i = 1; $i <= $day_count; $i++) {
        if ($i == $today) {
            echo "<li> <span class=\"active\">$i</span></li>";
        } else {
            echo "<li>$i</li>";
        }
    }

    echo "</ul>"
    ?>



</body>
</html>