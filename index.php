<!DOCTYPE html>
<html>
<head>
<body>
        <a href="wpisy.php">Wszystkie wpisy</a><br/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
        <title>Ksiega gosci</title>
    <form method="POST"> <!--formularz dodajacy wpisy-->
    <p align="center" style="color:#556B2F; font-size:30px">Ksiega gosci</p>
    <p align="center" style="color:#556B2F; font-size:20px">Prosze zostawic swoje opinie lub komentarze</p>
    <table>
        <tr>
            <td style="color:#6B8E23; font-size:20px">imie:</td>
            <td><input type ='text' name="imie" required maxlength="30"></td>
        </tr>
        <tr>
            <td style="color:#6B8E23; font-size:20px">tresc:</td>
            <td><textarea cols="80" rows="9" name="tresc" required maxlength="500"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="dodaj" value="wyslac"></td>
        </tr>
    </table>
</form>
</body>
</head>
</html>

<?php
if(isset($_POST['dodaj']))
{
    $imie = $_POST['imie']; //odebranie danych pochodzacych z formularza
    $czas = date('Y-m-d H:i:s'); //aktualna data i czas
    $tresc = $_POST['tresc'];
    include "polacz.php";
    $insert = $pdo->exec("insert into ksiega (imie, data, tresc) values ('$imie', '$czas', '$tresc')");
    //wpisywanie danych z formularza do bazy danych  
    echo "<p>";
    echo "Wpis zostal zapisany";
    echo "</p>";
}
?>
