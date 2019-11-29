
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>
<?php
// TODO : Ecrire le php qui remplace le html dans la balise ul ci-dessous
$tab=array("Fabien","David","Miguel","Benoît","Johnny","Kevin","Christopher","Dmitri","etc...");

for ($numero = 0; $numero < 9; $numero++)

{

    echo ("<li id='$i'>$tab[$numero]</li>");

}
?>

<h1>SM-C1a</h1>

</body>
</html>