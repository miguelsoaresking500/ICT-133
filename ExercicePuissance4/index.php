<HTML>
<HEAD>
    <STYLE type="text/css">
        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>
<table>
    <?php
    /**
     * Created by PhpStorm.
     * User: Miguel.SOARES
     * Date: 29.11.2019
     * Time: 14:29
     */

    for ($line = 0; $line < 8; $line++) {
        echo("<tr>");
        for ($col = 0; $col < 8; $col++) {

            if ($line == 7 && $col == 0) {
                echo("<td><img src=\"rouge.JPG\"></td>");
            }
            else if ($line == 7 && $col == 5) {
                echo("<td><img src=\"bleu.jpg\"></td>");
            }
            else {
                echo("<td></td>");
            }

        }
        echo("</tr>");
    }

    ?>
</table>
</BODY>
</HTML>

