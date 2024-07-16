<?php
$host = "localhost";
$password = "";
$user = "root";
$db = "OutOfOffice";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   // echo "udane połączenie";
}
catch(PDOException $e){
    die("błąd połączenia z bazą danych "). $e->getMessage();
}
?>
