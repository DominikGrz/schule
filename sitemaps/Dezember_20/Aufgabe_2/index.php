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

    <table style="margin-left: calc(50vw - 175px);">
        <tr>
            <th id='left'>Bestellnummer</th>
            <th id='right'>Status</th>
            <th id='left'>Kundennummer</th>
        </tr>

    <?php
        $servername = "localhost";
        //np57S4#EvNF5*Yf3tQ
        
        $conn = new mysqli($servername, "root", "", "classicmodels");
        
        if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
        }

        $sql = 'SELECT orderNumber, status, customerNumber FROM orders
        WHERE status = "On Hold" OR status = "Disputed"
        ORDER BY status;';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <tr>
                    <td id='left'>". $row['orderNumber']."</th>
                    <td id='right'>". $row['status'] ."</th>
                    <td id='left'>". $row['customerNumber']."</th>
                </tr>
            </tr>";
            }
        }
    ?>

</table>
</body>
</html>