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
            margin-left: calc(50% - 52.5px);
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
        <a data-active="active" id="icon-link" onclick="check_night_mode();"><span class="icon" id="m-icon"></span></a>
    </nav>
    <br>
    <br>

    <div id="eksde2">
        <p style="text-align: center;">
            Die Zahl <b>n</b> muss 10310 betragen um die ersten 4. Stellen der Eulerschen darzustellen. <a href='#result'>Zum Ergebnis</a><br>
            Man kann beobachten das der <b>x</b> Wert von 2 bis ≈2.7... ein relativ schnellen Wachstum hat und danach nur noch langsam steigt.
        </p><br>
    </div>

    <div id="exercise" style="text-align: center;">
    <table>
        <th id='left'>n</th>
        <th id='right'>x</th>
    <?php

    $e = 0;

    for($i = 1; $i; $i++)
    {
        $e = round((1 + 1/$i)**$i, 4);

        if ($e == 2.7182)
        {
            echo("<tr id='result'><td id='left' style='background-color: #0a6800;'>$i</td>");
            echo("<td id='right' style='background-color: #0a6800;'>$e</td></tr>");
            break;
        } else{
            echo("<tr id='left'><td>$i</td>");
            echo("<td id='right'>$e</td></tr>");
        }
    }
    ?>
    </table>
    </div>

    <br><p id="top" style="text-align: center;"><a href="#navio">Nach oben</a></p><br>

    <a class="top-but" id="eksde7">
		<div>
			^
        </div></a>
    <script src="../../../main.js"></script>
    <script>
        window.onscroll = function()
        {
            stick();
        }

        var x = document.getElementById("eksde2");
        var y = document.getElementById("eksde");

        function stick() {
        if (x != null) {
            if (scrollY >= x.offsetTop + 85) {
                y.classList.add("stick_but");
                y.setAttribute('href', "#navio");
            } else {
                y.classList.remove("stick_but");
                y.removeAttribute('href');
            }
        } else {;
        }
}
    </script>
    
</body>
</html>