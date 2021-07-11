<?php
session_start();

if(isset($_SESSION['permit'])){
    if($_SESSION['permit'] === TRUE)
    {
        header('Location: permit.php');
    }
} else{
    $_SESSION['permit'] = FALSE;
}

$pass = "1234567";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=#, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css">
    <script src="../../../main.js"></script>
    <title>Super Seite!!</title>
</head>
<body>
<nav id='navio'>
    <a href='../../../exercises.php'>Zurück zur Seite</a>
</nav>
<br>
<br>

    <?php if(empty($_POST['pass'])){
    
    echo '
        <form style="text-align: center;" action="index.php" method="post">
            <input type="password" name="pass">
            <input type="submit" value="BESTÄTIGEN">
        </form>';


    } else {?>

        <form style="text-align: center;" action="index.php" method="post">
            <input type="password" name="pass">
            <input type="submit" value="BESTÄTIGEN">
        </form>

        <?php
            if($_POST['pass'] == "1234567"){
                $_SESSION['permit'] = TRUE;
                header('Location: permit.php');
            } else{
                echo '<center>Das Passwort ist falsch!</center>';
            }

        }
        ?>
   

</body>
</html>