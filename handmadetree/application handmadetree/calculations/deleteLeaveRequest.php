<?php
session_start();
require_once "../config/db.php";
header('Content-Type: application/json');

// Pobranie danych przesłanych z żądania POST
$data = json_decode(file_get_contents('php://input'), true);

$Id = $data['Id'] ?? null;
if ($Id) {
    $sql = "DELETE FROM Leave_Request WHERE id = :id LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $Id, PDO::PARAM_INT);

    $stmt->execute();

    if($stmt->rowCount() > 0) {
        echo json_encode(['message' => 'Projekt został usunięty']);
    } else {
        echo json_encode(['message' => 'Nie znaleziono projektu o podanym ID']);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Brak danych do usunięcia projektu']);
}
$pdo = null;

?>
