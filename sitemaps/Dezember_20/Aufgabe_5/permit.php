<?php
session_start();

if(isset($_SESSION['permit'])){
    if($_SESSION['permit'] === FALSE)
    {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');  
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css">
    <script src="../../../main.js"></script>
    <title>Document</title>
</head>
<body>
<nav id='navio'>
        <a href='../../../exercises.php'>Zurück zur Seite</a>
</nav>
<br>
<br>
    <center>
        Passwortgeschützte Seite
    </center>
</body>
</html>