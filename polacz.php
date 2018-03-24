<?php

$dsn = 'mysql:host=localhost;dbname=s13786';
$user = "s13786";
$pass = "Yan.Buha"; // polaczenie z baza danych

try
{
    $pdo = new PDO($dsn, $user, $pass);
}
catch(PDOException $e)
{
    echo 'Wystapil blad: ' . $e->getMessage();
}
?>