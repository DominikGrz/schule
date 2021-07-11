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
            margin-left: calc(50% - 90px);
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

    <div id="exercise" style="text-align: center;">
    <table>
        <th id='left'>n</th>
        <th id='right'>x</th>
    <?php

    function fakultaet($x)
    {
        $res = 1;

        for($i = 1; $i <= $x; $i++)
        {
            $res *= $i;
        }

        return $res;
    }

    $e = 1;

    for($i = 1; $i <= 20; $i++)
    {
        $e += 1/fakultaet($i);

        echo("<tr id='left'><td>$i</td>");
        echo("<td id='right'>$e</td></tr>");
    }

    ?>
    </table>
    </div>

    <a class="top-but" id="eksde">
		<div>
			^
        </div></a>
    <script src="../../../main.js"></script>
    
</body>
</html>