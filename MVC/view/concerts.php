<?php
ob_start();
$concerts = [
    ['band' => 'MARZELLA', 'date' => '2019-12-15'],
    ['band' => 'MICHELLE DAVID & THE GOSPEL SESSIONS', 'date' => '2019-12-16'],
    ['band' => 'PENGUIN CAFE', 'date' => '2020-01-18'],
    ['band' => 'FÉFÉ & LEEROY', 'date' => '2020-01-24'],
    ['band' => 'LIDO REVIVAL', 'date' => '2020-01-25'],
    ['band' => 'KEB’ MO’', 'date' => '2020-02-04'],
    ['band' => 'VOYOU + MÉTÉO MIRAGE', 'date' => '2020-02-06'],
    ['band' => 'TRYO', 'date' => '2020-02-07'],
    ['band' => 'OFENBACH (LIVE)', 'date' => '2020-02-08'],
    ['band' => 'STEREOPHONICS', 'date' => '2020-02-09'],
    ['band' => 'CORNEILLE', 'date' => '2020-02-12'],
    ['band' => 'THE GROWLERS', 'date' => '2020-02-13'],
    ['band' => 'DRAGONFORCE', 'date' => '2020-02-16'],
    ['band' => 'BADNAIY', 'date' => '2020-02-20'],
    ['band' => 'BROKEN BACK', 'date' => '2020-02-29'],
    ['band' => 'PATRICK WATSON', 'date' => '2020-03-04']
];

$tab = [ 'band','date']

?>
    <h1>Il y a <?=count($concerts)?> concerts</h1>
    <nav>
        <a class=' nav-item ' href='http://localhost:8081/MVC/?action=home'>Home</a>
        <a  class='nav-item ' href='http://localhost:8081/MVC/?action=movies'>movies</a>
    </nav>
<table class="table table-striped">
    <?php
    foreach ($tab as $tabs ){
        echo "<th>".$tabs."</th>";
    }


    foreach ($concerts as $concert ){
        echo "<tr>";
        echo "<td>".$concert['band']."</td>";
        echo "<td>".$concert['date']."</td>";
        echo "<tr>";
    }


    ?>
</table>
<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 19.12.2019
 * Time: 10:52
 */

$content = ob_get_clean();
?>

