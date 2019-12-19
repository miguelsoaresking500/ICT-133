<?php
ob_start();
$movies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
];

$tab = [ 'title','audio','showtime']



?>
    <h1>Il y a <?=count($movies)?> films</h1>
    <a  class='navbar-dark' href='http://localhost:8081/MVC/?action=home'>Home</a>
    <a  class='nav-item navbar-dark' href='http://localhost:8081/MVC/?action=concerts'>Concert</a>
<table class="table table-striped">

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

?>