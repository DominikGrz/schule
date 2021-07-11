<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eine tolle Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css">
    <script src="../../../main.js"></script>

</head>
<body>
    <nav id='navio'>
        <a href='../../../exercises.php'>Zurück zur Seite</a>
    </nav>
    <br>
    <br>
<?php if(empty($_POST['vname'])){ ?>
<center>
        <form action="index.php" method="post">
            <input type="text" name="vname" placeholder="Vorame" style="margin: 5px;"><br>
            <input type="text" name="nname" placeholder="Nachname" style="margin: 5px;"><br>
            <input type="text" name="number" placeholder="Telefonnummer" style="margin: 5px;"><br>
            <input type="email" name="email" placeholder="E-Mail" style="margin: 5px;"><br>
            <input type="submit" style="width: 178px; margin: 5px;">
        </form>
</center>

<?php
} else {

    echo '<center>
    <form action="index.php" method="post">
    <input type="text" name="vname" placeholder="Vorame" style="margin: 5px;"><br>
    <input type="text" name="nname" placeholder="Nachname" style="margin: 5px;"><br>
    <input type="text" name="number" placeholder="Telefonnummer" style="margin: 5px;"><br>
    <input type="email" name="email" placeholder="E-Mail" style="margin: 5px;"><br>
    <input type="submit" style="width: 178px; margin: 5px;"></form><br>Daten wurden erfolgreich übermittelt!<br><a href="data.txt">Zur Datei</center>';

    $fp = fopen("data.txt", "a");
    $row = $_POST["vname"]. ", " .$_POST["nname"].", ".$_POST["number"].", " .$_POST["email"]. "\n";
    fputs($fp, $row);
    fclose($fp);

    $_POST = array();
}


?>
    
</body>
</html>