<?php
$host = 'localhost';
$password = '';
$user = 'root';
$dbName = 'handmadetree';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Usuń echo - nie potrzebujemy zwracać żadnych danych tutaj
} catch (PDOException $e) {
    // Zaloguj błąd lub użyj narzędzi do logowania, ale nie zwracaj tego użytkownikowi
    die(json_encode(["error" => "Nieudane połączenie z bazą danych"]));
}
?>
