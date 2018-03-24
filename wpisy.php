<!DOCTYPE html>
<html>
<head>
<body>  
        <a href="index.php">Dodaj wpis</a><br/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Wpisy ksiegi gosci</title>
</head>
</html>
</body>

<?php
include "polacz.php";
$result = $pdo->query("select * from ksiega order by id DESC");
// pytanie dla wypisywania wpisow z bazy wzgledem id w odwrotnej kolejnosci
while($row = $result->fetch(PDO::FETCH_OBJ)) //wypisywanie zawartosci wpisow
{
    echo "<table>";
    echo "<tr>";
    echo "<td>imie: <a href=wpis.php?id={$row->id}>{$row->imie}</a></td><br/>"; 
    // link do przejscia dla wyswietlania osobnego wpisu
    echo "</tr><tr>";
    echo "<td>data: {$row->data}</td><br/>";
    echo "</tr><tr>";
    echo "<td>tresc: {$row->tresc}</td>";
    echo "<tr>";
    echo "</table>";
}
?>