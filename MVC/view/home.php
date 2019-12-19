<?php
ob_start();
?>
    <h1>Home</h1>
<nav>
    <a  class='nav-item' href='http://localhost:8081/MVC/?action=movies'><img src="images/movies.jpg" height="250px">
    </a>
    <a  class='nav-item' href='http://localhost:8081/MVC/?action=concerts'><img src="images/concerts.jpg"  height="250px"></a>
</nav>
<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 19.12.2019
 * Time: 10:53
 */
$content = ob_get_clean();

?>