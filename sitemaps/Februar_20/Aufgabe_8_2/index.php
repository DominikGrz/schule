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

        if(empty($_POST["jahr"]) || empty($_POST["name"]))
        {
      ?>
          <div style='margin-left: calc(50vw - 91.5px);'>
            <form action='index.php' method='post'>
              <input type='text' name='name' placeholder='Name'/></br>
              <input type='text' name='jahr' placeholder='Geburtsjahr'/></br>
              <input type='submit' value='Absenden' style='margin-top: 5px; text-align: center; width: 183px;'/>
            </form>
          </div>

       <?php
        }
        else if($_POST["jahr"] <= date("Y"))
        {
          $n = date("Y") - $_POST["jahr"];

          echo "<p style='text-align: center'>Du heißt ". $_POST["name"] ." und bist oder wirst ". $n . "Jahre alt. </br> <a href='index.php'>Zurück zum Formular</a></p>";
        }
        else
        {
          echo "<p style='text-align: center'>Ungültiges Jahresformat.</br> <a href='index.php'>Zurück zum Formular</a></p>";  
        }


      ?>
    
</body>
</html>