<?php
session_start();
require_once "../config/dbConfig.php";
header('Content-Type: application/json');

// Pobranie danych przesłanych z żądania POST
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'] ?? null;
$password = $data['password'] ?? null;

if ($email && $password) {
    // Przygotowanie zapytania SQL do sprawdzenia danych użytkownika
    $sql = "SELECT name, email, password FROM Users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Użytkownik zalogowany pomyślnie
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['zalogowany'] = 'true';
        echo json_encode(array("message" => "udane logowanie", "redirect" => "http://localhost/SerwisBeckendowyHandmadetree.pl/i.php"));
    } else {
        // Błędne dane logowania
        $_SESSION['zalogowany'] = 'false';
        $_SESSION['poprawnosc'] = 'false';
        echo json_encode(array("message" => "Błędne hasło albo login"));
    }
} else {
    // Brak danych logowania
    http_response_code(400);
    echo json_encode(array("message" => "Brakuje danych wejściowych"));
}

$pdo = null;
?>
