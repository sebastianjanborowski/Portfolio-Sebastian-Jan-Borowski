<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Tutaj dodaj kod do weryfikacji użytkownika w bazie danych
    // Przykład:
    if ($email == "test@example.com" && $password == "password") {
        $_SESSION['loggedin'] = true;
        header("Location: welcome.php");
    } else {
        echo "Nieprawidłowy email lub hasło.";
    }
}
?>