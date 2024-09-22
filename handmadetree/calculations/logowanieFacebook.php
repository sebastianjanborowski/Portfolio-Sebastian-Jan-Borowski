<?php
session_start();
require_once "../config/dbConfig.php";
//echo $_SESSION['username'];
//echo  $_SESSION['email'];
// Sprawdzenie, czy sesja zawiera wymagane dane
if (isset($_SESSION['username']) && isset($_SESSION['email'])) 
{
    $user = $_SESSION['username'];
    $email = $_SESSION['email']; // Popraw zmienną z 'emial' na 'email'

    unset($_SESSION['email']);
    unset($_SESSION['username']);

    // Sprawdzenie, czy email już istnieje
    $sql2 = "SELECT email FROM Users WHERE email = :email";
    $verify = $pdo->prepare($sql2);
    $verify->bindParam(':email', $email, PDO::PARAM_STR);
    $verify->execute();

    if ($verify->rowCount() > 0) {
        $_SESSION['name'] = $user;
        $_SESSION['email'] = $email;

        $_SESSION['zalogowany'] = 'true';
        header('Location:http://localhost/SerwisBeckendowyHandmadetree.pl/i.php');
    }
    else
    {
        header('Location:http://localhost/SerwisBeckendowyHandmadetree.pl/zaloguj.php');
        $_SESSION['emialWystepuje'] = "Nie znaleziono adresu email";

    } 
} 
else 
{
    echo "Brak wymaganych danych";
}

$pdo = null;
?>
