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
            margin-left: calc(50% - 67.5px);
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

    <?php
    
        setlocale(LC_TIME, "de_DE");

        $day = strftime("%A");
        
        echo("<div style='text-align: center;'>Heute ist $day!</div>");

    ?>
    

    <a class="top-but" id="eksde">
		<div>
			^
        </div></a>
    <script src="../../../main.js"></script>
    
</body>
</html>