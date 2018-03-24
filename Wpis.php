<!DOCTYPE html>
<html>
<head>
<body>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	</style>
</head>
</body>
</html>

<?php
include "polacz.php";
$result=$pdo->query("select * from ksiega where id='".(int)$_GET['id']."'");

while($row = $result->fetch(PDO::FETCH_OBJ))
{
echo "<table>";
echo "<tr>";
echo "<td>nazwa: {$row->imie}</a></td><br/>";
echo "</tr><tr>
echo "<td>data: {$row->data}</td><br/>";
echo "<tr></tr>;
echo "<td>tresc: {$row->tresc}</td><br/>";
echo "<tr>";
echo "</table>";
}

?>
