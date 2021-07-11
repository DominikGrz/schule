<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css">
    <script src="../../../main.js"></script>

    <style>
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
    
        input
        {
          
          
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

    $zinssatz = 1 + ($_POST["zinssatz"] / 100);
    $endkapital;
    $kapital = $_POST["kapital"];
  
    $file = 'ergebnis.txt';


    echo "<div style='margin-left: calc(50vw - 123px);'>";

    echo "<table style='text-align: center;'>
        <tr>
            <th id='left'>Jahr</th>
            <th id='right'>Faktor(Zinz)</th>
            <th id='left'>Endkapital</th>
        </tr>
    ";

    for($i = 1; $i <= 5; $i++)
    {
        echo "<tr>
                <td id='left'>$i</td>
                <td id='right'>" . round($zinssatz ** $i, 2) . "</td>
                <td id='left'>" . $endkapital = round($kapital * ($zinssatz ** $i), 2);
        echo "€</td> </tr>";
    } 
    
    $con = "Eingabe:
             Kapital: ". $_POST['kapital'] . "
             Zinssatz: ". $_POST['zinssatz'] .     
            "
            Ergebnis: ". $endkapital . ""; 
      
    file_put_contents($file, $con);

    echo "</table></div></br><p style='text-align: center'><a href='ergebnis.txt'>Ergebnis.txt</a></p> <p style='text-align: center'><a href='index.php'>Zurück zum Formular</a></p>";
    ?>
    
</body>
</html>