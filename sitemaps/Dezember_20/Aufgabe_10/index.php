<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if(empty($_POST['id'])){ ?>


<p>Daten hinzufügen</p>
<form action="index.php" method="post">
    <input type="number" max="999" min="1" name="id">
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Telefonnummer" name="number">
    <input type="submit">
</form>

<?php 
} else {
$conn = new mysqli("localhost", "root", "", "eksde");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO kunden (id, name, telefonnummer)
    VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["number"]."')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<p>Daten hinzufügen</p>
        <form action="index.php" method="post">
            <input type="number" max="999" min="1" name="id">
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="Telefonnummer" name="number">
            <input type="submit">
        </form><br>Daten wurden gesendet!';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>

    
</body>
</html>