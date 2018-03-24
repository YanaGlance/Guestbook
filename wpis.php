<!DOCTYPE html>
<html>
<head>
<body>  
        <a href="wpisy.php">Wszystkie wpisy</a><br/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Wpis</title>
</head>
</body>
</html>

<?php
include "polacz.php";
$result=$pdo->query("select * from ksiega where id='".(int)$_GET['id']."'");
// pytanie dla wypisywania zawartosci osobnego wpisu z bazy

while($row = $result->fetch(PDO::FETCH_OBJ)) // wypisywanie zawartosci osobnego wpisu
{
    echo "<table>";
    echo "<tr>";
    echo "<td>imie: {$row->imie}</td><br/>";
    echo "</tr><tr>";
    echo "<td>data: {$row->data}</td><br/>";
    echo "</tr><tr>";
    echo "<td>tresc: {$row->tresc}</tr><br/>";
    echo "</tr>";
    echo "</table>";
}
?>