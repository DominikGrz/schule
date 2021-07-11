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
    </style>

</head>
<body>

    <nav id='navio'>
        <a href='../../../exercises.php'>Zurück zur Seite</a>
    </nav>
    <br>
    <br>
<div style="margin-left: calc(50vw - 375px);">
    <table>
        <tr>
            <th id='left'>Bestelldatum</th>
            <th id='right'>Lieferdatum</th>
            <th id='left'>Bestell Timestamp</th>
            <th id='right'>Ship Timestamp</th>
            <th id='left'>Diff in S</th>
            <th id='right'>Dauer in Tagen</th>
        </tr>

    <?php
        $servername = "localhost";
        //np57S4#EvNF5*Yf3tQ
        
        $conn = new mysqli($servername, "root", "", "classicmodels");
        
        if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
        }

        $sql = 'SELECT orderDate, shippedDate, UNIX_TIMESTAMP(orderDate), UNIX_TIMESTAMP(shippedDate), 
        UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate), 
        ROUND((UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate)) / 60 / 60 / 24) FROM orders
        ORDER BY orderDate;';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_array()) {
            echo "
            <tr>
                <tr>
                    <td id='left'>". $row[0]."</th>
                    <td id='right'>". $row[1] ."</th>
                    <td id='left'>". $row[2]."</th>
                    <td id='left'>". $row[3]."</th>
                    <td id='right'>". $row[4] ."</th>
                    <td id='left'>". $row[5]."</th>
                </tr>
            </tr>";
            }
        }
    ?>
</table>

    <?php
        $sql = 'SELECT AVG((UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate)) / 60 / 60 / 24),
                       SUM((UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate)) / 60 / 60 / 24),
                       COUNT(shippedDate),
                       ROUND(AVG((UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate)) / 60 / 60 / 24), 1),
                       FLOOR(AVG((UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate)) / 60 / 60 / 24)),
                       ROUND(AVG((UNIX_TIMESTAMP(shippedDate) - UNIX_TIMESTAMP(orderDate)) / 60 / 60 / 24), 0)
                FROM orders';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_array()) {
            echo "
            <br>
                <p>
                Durchschnittliche Dauer: ". $row[0] . " Tage <br>". "
                Summe Tage: ". $row[1] . " Tage <br>". "
                Anzahl ausgelieferte Bestellungen: ". $row[2] . " Tage <br>". "
                gerundet: ". $row[3] . " Tage <br>". "
                abgerundet: ". $row[4] . " Tage <br>". "
                aufgerundet: ". $row[5] . " Tage <br>". "   
                </p><br><br>";
            }
        }

    ?>
</body>
</html>