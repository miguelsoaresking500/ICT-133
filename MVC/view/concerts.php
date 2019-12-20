<?php
ob_start();


$tab = ['band', 'date']

?>

<nav>
    <h1>Il y a <?=count($concerts)?> concerts</h1>
    <a class='btn  btn-secondary' href='http://localhost:8081/MVC/?action=home'>Home</a>
    <a class=' btn  btn-secondary' href='http://localhost:8081/MVC/?action=movies'>movies</a>
</nav>
<table class="table table-striped table-dark">
    <?php
    foreach ($tab as $tabs) {
        echo "<th>" . $tabs . "</th>";
    }


    foreach ($concerts as $concert) {
        echo "<tr>";
        echo "<td>" . $concert['band'] . "</td>";
        echo "<td>" . $concert['date'] . "</td>";
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
require_once 'gabarit.php';

?>

