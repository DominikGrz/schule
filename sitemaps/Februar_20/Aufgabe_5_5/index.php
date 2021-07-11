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
            margin-left: calc(50% - 171.5px);
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

    <div id="eksde2">
        <p style="text-align: center;">
            <a href='#top'>Zum Ergebnis</a><br>
        </p><br>
    </div>

    <div id="exercise" style="text-align: center;">
    <table>
        <th id='left'>n</th>
        <th id='right'>π</th>
        <th id='right'>arctan</th>

        <tr>
            <td id='left'>1</td>
            <td id='right'>4</td>
            <td id='left'>1</td>
        </tr>
    <?php

    $e = 1;
    $p = 0;
    $arc = 0;
    $z = 3;

    for($i = 2; $i <= 100; $i++)
    {
        if($i % 2 == 0)
        {
            $e -= 1**$z/$z;
            $p = 4 * $e;
        }
        else
        {
            $e += 1**$z/$z;
            $p = 4 * $e;
        }

        echo("<tr id='left'><td>$i</td>");
        echo("<td id='right'>$p</td>");
        echo("<td id='left'>$e</td></tr>");

        $z += 2;
    }

    ?>
    </table>
    </div>

    <br><p id="top" style="text-align: center;"><a href="#navio">Nach oben</a></p><br>

    <script src="../../../main.js"></script>
    
</body>
</html>