<?php
ob_start();


$tab = [ 'title','audio','showtime']



?>
    <h1>Il y a <?=count($movies)?> films</h1>
    <a  class='btn  btn-secondary' href='http://localhost:8081/MVC/?action=home'>Home</a>
    <a  class='btn  btn-secondary' href='http://localhost:8081/MVC/?action=concerts'>Concert</a>
<table class="table table-striped table-dark">

<?php
foreach ($tab as $tabs ){
    echo "<th>".$tabs."</th>";
}

foreach ($movies as $movie ){
    echo "<tr>";
    echo "<td>".$movie['title']."</td>";
    echo "<td>".$movie['audio']."</td>";
    echo "<td>".$movie['showtime']."</td>";
    echo "</tr>";
}


?>
</table>
<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 19.12.2019
 * Time: 10:53
 */
$content = ob_get_clean();
require_once 'gabarit.php';

?>