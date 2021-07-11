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
              
            f

    </style>

</head>
<body>

    <nav id='navio'>
        <a href='../../../../exercises.php'>Zurück zur Seite</a>
    </nav>
    <br>
    <br>
 

      <?php

        if(empty($_POST["cd"]) || empty($_POST["day"]))
        {
      ?>
          <div style='margin-left: calc(50vw - 91.5px);'>
            <form action='index.php' method='post'>
              <input type='text' name='cd' placeholder='Anzahl der CDs'/></br>
              <input type='text' name='day' placeholder='Tage'/></br>
              <input type='submit' value='Absenden' style='margin-top: 5px; text-align: center; width: 183px;'/>
            </form>
          </div>

       <?php
        }
        else if(!($_POST["cd"] >= 10))
        {
          echo "<p style='text-align: center'>Sie müssen mehr als 10 CDs bestellen!</br> <a href='index.php'>Zurück zum Formular</a></p>";
        }
        else
        {
          echo"
            <div style='margin-left: calc(50vw - 376px);'>
            <table style='text-align: center;'>
            <tr>
              <th id='left'>Anzahl</th>
              <th id='right'>EP</th>
              <th id='left'>Rabatt</th>
              <th id='right'>Nettobetrag</th>
              <th id='left'>Versand</th>
              <th id='right'>MwSt</th>
              <th id='left'>Gesamtbetrag</th>
              <th id='right'>Skontobetrag</th>
             </tr>";
            
      
          $versand = array("4", "8", "15", "0");
          $rabatt = array("0", "8", "12", "25");
          $nettosumme = $_POST["cd"] * 10 + $versand[0];
          $mwst = $nettosumme * 0.19;
          $endsumme = 0;
          $skonto = 0;
          $n = 0;
           
          if($_POST["cd"] >= 10 && $_POST["cd"] <= 49)
          {
            $n = 0;
            $nettosumme = $_POST["cd"] * 10;
            $mwst = $nettosumme * 0.19;
            $endsumme = $nettosumme + $mwst + $versand[$n];
          }
          else if($_POST["cd"] >= 50 && $_POST["cd"] <= 99)
          {
            $n = 1;
            $nettosumme = (($_POST["cd"] * 10)  * (1 - ($rabatt[$n] / 100)));
            $mwst = ($nettosumme + $versand[$n]) * 0.19;
            $endsumme = $nettosumme + $mwst + $versand[$n];
          }
          else if($_POST["cd"] >= 100 && $_POST["cd"] <= 499)
          {
            $n = 2;
            $nettosumme = (($_POST["cd"] * 10) * (1 - ($rabatt[$n] / 100)));
            $mwst = ($nettosumme + $versand[$n]) * 0.19;
            $endsumme = $nettosumme + $mwst + $versand[$n];
          }
          else if($_POST["cd"] >= 500)
          {
            $n = 3;
            $nettosumme = (($_POST["cd"] * 10) * (1 - ($rabatt[$n] / 100)));
            $mwst = ($nettosumme + $versand[$n]) * 0.19;
            $endsumme = $nettosumme + $mwst;
          } 
          if($_POST["day"] >= 9)
          {
              $skonto = 0;
          }
          else
          {
            $skonto = $endsumme * 0.03;
          }
                                    
          
            echo"
             <tr>
              <td id='left'>". $_POST["cd"]  ."</td>
              <td id='right'>10,00€</td>
              <td id='left'>". $rabatt[$n] ."%</td>
              <td id='right'>". $nettosumme ."€</td>
              <td id='left'>". $versand[$n]."€</td>
              <td id='right'>". round($mwst, 2) ."€</td>
              <td id='left'>". round($endsumme, 2)."€</td>
              <td id='right'>% ". round($skonto, 2)."</td>
             </tr> 
            </table></div>
            <p style='text-align: center'>
            </br> <a href='index.php'>Zurück zum Formular</a></p>
            ";
          }
      ?>
    
</body>
</html>