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

        if(empty($_POST["staat"]) || empty($_POST["jahr"]))
        {
      ?>
          <div style='margin-left: calc(50vw - 91.5px);'>
            <form action='index.php' method='post'>
              <input type='text' name='staat' placeholder='Staatsangehörigkeit'/></br>
              <input type='date' name='jahr' placeholder='Geburtsdatum'/></br>
              <input type='submit' value='Absenden' style='margin-top: 5px; text-align: center; width: 183px;'/>
            </form>
          </div>

       <?php
        }
        else
        {
           $date_ex = explode('.',$_POST['jahr']);
           $date = strtotime ($_POST['jahr']);
           $now = strtotime('today');
          
           $sum = floor((strtotime('today') - $date) / 86400);
           $year = floor($sum / 365.25);
          
          if($_POST["jahr"] <= date("Y"))
          {
              if(strtolower($_POST["staat"]) == 'deutsch')
              {
                  if(18 <= $year)
                  {
                      echo "<p style='text-align: center'>Du darfst Bundeskanzler werden. </br></p>";
                  }
                  else
                  {
                      echo  "<p style='text-align: center'>Du kannst dich leider nicht aufstellen lassen. </p>";
                  }
                  if(40 <= $year)
                  {
                    echo "<p style='text-align: center;'>Und du darfst Bundespräsident werden.</p>";
                  }

               }
               else
               {
                   echo  "<p style='text-align: center'>Du kannst dich leider nicht aufstellen lassen.</p>";
               }
          }
          else
          {
            echo "<p style='text-align: center'>Ungültiges Jahresformat.</br> <a href='index.php'>Zurück zum Formular</a></p>";  
          }
          
          echo "<p style='text-align: center'></br><a href='index.php'>Zurück zum Formular</a></p>";
        }  


      ?>
    
</body>
</html>