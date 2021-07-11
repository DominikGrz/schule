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

    <?php 
    include('phpqrcode/qrlib.php');

    // how to build raw content - QRCode with simple Business Card (VCard)
    
    $tempDir = 'phpqrcode/temp';
    
    // here our data
    $name = $_POST['name'];
    $number = $_POST['number'];
    
    // we building raw data
    $codeContents  = 'BEGIN:VCARD'."\n";
    $codeContents .= 'FN:'.$name."\n";
    $codeContents .= 'TEL;WORK;VOICE:'.$number."\n";
    $codeContents .= 'END:VCARD';
    
    // generating
    QRcode::png($codeContents, $tempDir.'output.png', QR_ECLEVEL_H, 3);
   
    // displaying
    echo '<center>Erfolgreich generiert!<br><img src="'.$tempDir.'output.png" /></center>';



    ?>
    
</body>
</html>