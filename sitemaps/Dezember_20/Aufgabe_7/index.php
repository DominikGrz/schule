<?php
setcookie("TESTcookie", TRUE, time() + 86400 * 30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<body>
<nav id='navio'>
        <a href='../../../exercises.php'>Zurück zur Seite</a>
    </nav>
    <br>
    <br>
    <p>Das ist eine Intro Seite</p>

    <?php
        if(isset($_COOKIE['TESTcookie'])){
            if($_COOKIE['TESTcookie'] == TRUE){
                header('Location: TESTcookie.html');
            } else {
                $_COOKIE['TESTcookie'] = FALSE;
            }
        }

    ?>

</head>
<body>
    
</body>
</html>