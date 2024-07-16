<?php
session_start();
require_once "../config/db.php";
header('Content-Type: application/json');

// Pobranie danych przesłanych z żądania POST
$data = json_decode(file_get_contents('php://input'), true);
$login = $data['login'] ?? null;
$password = $data['password'] ?? null;

if ($login && $password) {
    $sql = "SELECT id, login, password FROM admin WHERE login = :login AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);

    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['zalogowany'] = 'true';
        echo json_encode(array("message" => "Login successful", "redirect" => "../public/menu.php"));
    } else {
        $_SESSION['zalogowany'] = 'false';
        echo json_encode(array("message" => "Invalid login or password"));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Missing login or password"));
}
$pdo = null;

?>
