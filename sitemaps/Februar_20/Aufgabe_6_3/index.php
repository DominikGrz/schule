<?php

$firstDayOfMonth = time() + (-(date("d") - 1) * 24 * 60 * 60);
$first_day = date("N", $firstDayOfMonth);
$datum = date("d.m.Y");
$datum_vz = date("d.m.Y", time() + (14 * 24 * 60 * 60));
$data = json_decode('https://ferien-api.de/api/v1/holidays/{stateCode}');
$sommerferien = strtotime('29 June 2020');
$sommerferien_dif = round(((($sommerferien - strtotime("now")) / 60) / 60) / 24) + 1;
$jahrtausend = strtotime('1 January 2000');
$jahrtausend_dif = round((((strtotime("now") - $jahrtausend) / 60) / 60) / 24);



echo("<style>@import url('https://fonts.googleapis.com/css?family=Quicksand|Raleway|Roboto');
    html, body{ 
    font-family: 'Calibri', sans-serif;
    font-size: 16px;
    padding: 0;
    margin: 0;}
    #navio
    {
        font-family: Quicksand;
        background-color: #181818;
        text-align: center;
        width: 100%;
        height: 20px;
        padding-bottom: 15px;
        padding-top: 15px;
    }

    #navio a
    {
        text-decoration: none;
        font-size: 16pt;
        color: #FFF;
    }
    #eksde
    {
        margin-left: calc(50% - 60.5px);
    }
    </style>");
echo 
    "
    <nav id='navio'>
    <a href='../../../../exercises.php'>Zurück zur Seite</a>
    </nav>
    <br>
    <br>
    ";


echo "<div style='margin-left: calc(50% - 120px);'>
       Heute ist der " . $datum . "</br>
       Die Sommerferien beginnen am 29.06.2020. </br>
       Noch $sommerferien_dif Tage bis zu den Sommerferien. </br>
       Schon $jahrtausend_dif Tage im neuen Jahrtausend vergangen. </br>
       In 14 Tagen ist der $datum_vz.
       </div>";

?>