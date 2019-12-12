<HTML>
<HEAD>
    <link rel="stylesheet" href="css/style.css">
</HEAD>
<BODY style='background-color:#F0E0D0'>





<div class="month">
    <ul>
        <?php
        $moistab = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");


// Set your timezone!!
date_default_timezone_set('Europe/Zurich');
// Get prev & next month
if (isset($_GET['year'])) {
    $ym = $_GET['year  '];
} else {
    // This month
    $ym = date('F-Y');
}



        echo "<li>" . $ym . "</li>";
        ?>


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
$date= mktime(0, 0, 0, ym, 1,ym);

echo "<ul class='days'>";

if (isset($_GET['day'])) {
    $jour = $_GET['day'];
} else {
    $jour = '1';
}

for ($i = 1; $i <32; $i++) {
    if ($i == $jour) {
        echo "<li> <span class=\"active\">$i</span></li>";
    } else {
        echo "<li>$i</li>";
    }
}
echo "</ul>"
?>




</BODY>
</HTML>

