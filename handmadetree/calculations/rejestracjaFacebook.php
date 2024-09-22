<?php
session_start();
require_once "../config/dbConfig.php";
//echo $_SESSION['username'];
//echo  $_SESSION['email'];
// Sprawdzenie, czy sesja zawiera wymagane dane
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
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
       $_SESSION['emialWystepuje'] = "Emial istnieje w bazie danych,by sie zalogować przejdź do sekcji zaloguj się";
       header('Location:http://localhost/SerwisBeckendowyHandmadetree.pl/rejestracja.php');
    } else {
        // Wstawianie nowych danych użytkownika
        $sql = "INSERT INTO Users (email, name, goldenLiscie) VALUES (:email, :name, 10)";
        $stm = $pdo->prepare($sql);
        $stm->bindParam(':email', $email, PDO::PARAM_STR);
        $stm->bindParam(':name', $user, PDO::PARAM_STR);

        $stm->execute();

        if ($stm->rowCount() > 0) {
            $_SESSION['name'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['zalogowany'] = 'true';
            header('Location: http://localhost/SerwisBeckendowyHandmadetree.pl/i.php');
            exit(); // Upewnij się, że po przekierowaniu kod nie jest wykonywany dalej
        } else {
           // echo "Rejestracja zakończona niepowodzeniem";
        }
    }
} else {
   // echo "Brak wymaganych danych";
}

$pdo = null;
?>
