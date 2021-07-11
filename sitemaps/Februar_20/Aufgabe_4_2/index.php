<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css">

    <style>
        #exercise
        {
            margin-left: calc(50% - 142.5px);
            margin-right: auto;
        }
        #left
        {
            background-color: #e2e2e2;

            padding: 7.5px;
            padding-left: 12.5px;
        }
        #right
        {
            background-color: #a5a5a5;

            padding: 7.5px;
            padding-left: 12.5px;
        }
    </style>
</head>
<body>

    <nav id='navio'>
        <a href='../../../../exercises.php'>Zurück zur Seite</a>
    </nav>
    <br>
    <br>

    <div style='text-align: center;'>Startkapital: 50000€ <br> Zinzsatz: 3.95% <br> Laufzeit: 60 Monate</div><br>
    <div id="eksde2">
        <p style="text-align: center;">
            Diese Anlageform sollte bevorzugt werden, da das Endkapital größer ist als wenn es jährlich abgerechnet wird. </br>
            <a href='#top'>Zum Ergebnis</a><br>
        </p><br>
    </div>

    <div id='exercise'>
    <table>
        <tr>
            <th id='left'>Monat</th>
            <th id='right'>Faktor(Zinz)</th>
            <th id='left'>Endkapital</th>
        </tr>

    <?php

    $zinssatz = 1 + ((3.95 / 100) / 12);
    $kapital = 50000;

    for($i = 1; $i <= 60; $i++)
    {
        $kapital *= $zinssatz;

        echo "<tr><td id='left'>". $i ."</td>";
        echo "<td id='right' style='text-align: center;'>". round($zinssatz, 5) ."</td>";
        echo "<td id='left'>". round($kapital, 2) ."€</td></tr>";
    }




    ?>
    </table>
    </div>

    <br><p id="top" style="text-align: center;"><a href="#navio">Nach oben</a></p><br>

    <script src="../../../main.js"></script>
    
</body>
</html>