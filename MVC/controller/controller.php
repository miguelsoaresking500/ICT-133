<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 20.12.2019
 * Time: 13:40
 */

function showConcerts()
{
    $today = date('Y-m-d');
    require_once 'model/concerts.php';


    //Logique Pour parcourrir les concerts et les effacer si la date est dans le passé
    for ($i = 0; $i < count($concerts); $i++) {

        if ($today > $concerts[$i]['date']) {
            unset($concerts[$i]);

        }
    }
    require_once 'view/concerts.php';

}

function showMovies()
{
    date_default_timezone_set('Europe/Zurich');
    require_once 'model/movies.php';
    $now = date('H-i');
    for ($i = 0; $i < count($movies); $i++) {

        if ($now > $movies[$i]['showtime']) {
            unset($movies[$i]);

        } else if ($now < $movies[$i]['showtime']) {

            unset($movies[$i]);
        }

    }


    require_once 'view/movies.php';

}

?>