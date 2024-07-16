<?php
require_once "../config/db.php";

// Włącz raportowanie błędów
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Pobranie danych z JSON
$json_data = file_get_contents('php://input');
$data = json_decode($json_data,true);

// Sprawdzenie, czy wszystkie dane zostały przesłane

$ID = $data['Id'];

// Przygotowanie zapytania SQL do usunięcia rekordu
$sql = "DELETE FROM Employees WHERE id = :id";

// Przygotowanie zapytania
$stmt = $pdo->prepare($sql);

// Powiązanie parametrów
$stmt->bindParam(':id', $ID, PDO::PARAM_INT);

// Wykonanie zapytania
if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(array("message" => "Pracownik został usunięty z bazy danych"));
} else {
    http_response_code(500);
    $errorInfo = $stmt->errorInfo();
    echo json_encode(array("message" => "Wystąpił problem z usunięciem pracownika z bazy danych", "error" => $errorInfo));
}
$pdo = null;

?>
