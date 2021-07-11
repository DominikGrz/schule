<?php

$firstDayOfMonth = time() + (-(date("d") - 1) * 24 * 60 * 60);
$first_day = date("N", $firstDayOfMonth);

$p = date("N", $firstDayOfMonth);

echo "<p>". $firstDayOfMonth . "</p>";

echo("<style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand|Raleway|Roboto');
    @import url('https://fonts.googleapis.com/css?family=Major+Mono+Display');
    @import url('https://fonts.googleapis.com/css?family=Roboto+Mono');
    html, body{ 
    font-family: 'Roboto Mono', monospace;
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


echo "<div style='text-align: center;'>" . date("F Y") . "</div>";

echo(
"
<div style='margin-left: calc(50% - 85px);'>
<table style='text-align: center;'>
<tr>
    <th>Mo</th>
    <th>Di</th>
    <th>Mi</th>
    <th>Do</th>
    <th>Fr</th>
    <th style='color: red;'>Sa</th>
    <th style='color: red;'>So</th>
</tr>
<tr>

");

for($i = 1; $i < $first_day; $i++)
{
    echo "<td>" . "&nbsp;" . "</td>";
}

for($i = 1; $i <= date("t"); $i++)
{
    if($i == date("d") && $p == 7)   {
        echo "<td style='color: blue; font-weight: 700;'>" . $i . "</td>". "</tr> <tr>";
        $p = 1;
    }
    else if($i == date("d")){
        echo "<td style='color: blue; font-weight: 700;'>" . $i . "</td>";
    }
    else if($p == 6)   {
        echo "<td style='color: red; font-weight: 700;'>" . $i . "</td>";
    }       
    else if($p == 7 && $i != date("d")){
        echo"<td style='color: red; font-weight: 700;'>" . $i . "</td>". "</tr> <tr>";
        $p = 0;
    }
    else{echo "<td>" . $i . "</td>";}
    $p++;
}


echo("</table> </div>");

?>