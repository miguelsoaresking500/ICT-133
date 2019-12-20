<?php
// Set your timezone!!
date_default_timezone_set('Europe/Zurich');
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
    $yd = date('Y-m');
}
// Check format
$timestamp = strtotime($ym . '-01');  // the first day of the month
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
$month = date('m',$timestamp);

// Today
$today = date('j');
// Title
$title = date('F, Y', $timestamp);
// Create prev & next month link
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));
// Number of days in the month
$day_count = date('t', $timestamp);
// 1:Mon 2:Tue 3: Wed ... 7:Sun
$str = date('N', $timestamp );
$prevmonth = date( 'N', date('Y-m', strtotime('-1 month', $timestamp)));
$nextmonth = date( 'N', date('Y-m', strtotime('+1 month', $timestamp)));
$nbmonthcurrent=date("m", strtotime("this month"));

function contenu($day_count, $prevmonth,$today,$nextmonth,$nbmonthcurrent,$month){
    echo "<ul class='days'>";

    for($i=$day_count - $prevmonth-1; $i <=$day_count;$i++  ) {
        echo "<li class='daysplus'>$i</li>";

    }
    for ($i = 1; $i != date("t", $day_count) + 1; $i++) { // Affichier les jours du mois accutel
        if ($i == $today && $nbmonthcurrent == $month) {
            echo("<li><span class='active'>$i</span></li>");
        } else {
            echo("<li>$i</li>");
        }
    }
    for($i=1 ; $i <= $nextmonth+1;$i++  ) {
        echo "<li class='daysplus'>$i</li>";



    }

    echo "</ul>";

}

function titre($title){

    echo "<li class='list-inline-item'><span class='title' >$title</span></li>";



}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">

</head>
<body>
<div class="month">
    <ul class="list-inline">
        <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt;</a></li>
        <?php
        titre($title);
        ?>
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

contenu($day_count, $prevmonth,$today,$nextmonth,$nbmonthcurrent,$month);




?>



</body>
</html>