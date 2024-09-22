<?php
session_start();
require_once "../config/db.php"; // Upewnij się, że ten plik jest poprawny i zawiera prawidłowe połączenie z bazą danych

header('Content-Type: application/json');

// Sprawdzanie połączenia z bazą danych
if (!$pdo) {
    http_response_code(500);
    echo json_encode(array("message" => "Błąd połączenia z bazą danych"));
    exit();
}

// Pobranie danych przesłanych z żądania POST
$data = json_decode(file_get_contents('php://input'), true);
$login = $data['login'] ?? null;
$password = $data['password'] ?? null;

// Walidacja danych wejściowych
if (!$login || !$password) {
    http_response_code(400);
    echo json_encode(array("message" => "Brak loginu lub hasła"));
    exit();
}

try {
    // Przygotowanie zapytania SQL
    $sql = "SELECT idUser, login, password FROM admin WHERE login = :login AND password = :password";
    $stmt = $pdo->prepare($sql);
    
    if (!$stmt) {
        throw new Exception("Błąd przygotowania zapytania: " . implode(", ", $pdo->errorInfo()));
    }

    // Bindowanie parametrów
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);

    // Wykonanie zapytania
    if (!$stmt->execute()) {
        throw new Exception("Błąd wykonania zapytania: " . implode(", ", $stmt->errorInfo()));
    }

    // Pobranie wyników
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
        // Ustawienie sesji po udanym logowaniu
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;

        $_SESSION['zalogowany'] = 'true';
        echo json_encode(array("message" => "Login successful", "redirect" => "../public/menu.php"));
    } else {
        $_SESSION['zalogowany'] = 'false';
        echo json_encode(array("message" => "Invalid login or password"));
    }
} catch (Exception $e) {
    // Obsługa wyjątków
    http_response_code(500);
    echo json_encode(array("message" => $e->getMessage()));
    exit();
}

// Zamknięcie połączenia z bazą danych
$pdo = null;
?>
