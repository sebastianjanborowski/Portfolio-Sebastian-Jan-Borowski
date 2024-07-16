<?php
require_once "../config/db.php";

try {
    // Pobierz dane JSON z żądania
    $json_data = file_get_contents('php://input');
    if ($json_data === false) {
        throw new Exception('Nie udało się pobrać danych JSON.');
    }
    $data = json_decode($json_data, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Błąd podczas dekodowania JSON: ' . json_last_error_msg());
    }

    // Sprawdź, czy wszystkie wymagane dane są obecne
    if (!isset($data['Id'])) {
        throw new Exception('Brak wymaganego parametru ID.');
    }

    // Przypisanie danych do zmiennych
    $Id = $data['Id'];

    // Przygotowanie zapytania DELETE
    $sql_delete = "DELETE FROM Approval_Request WHERE ID = :Id";
    $stmt_delete = $pdo->prepare($sql_delete);
    $stmt_delete->bindParam(':Id', $Id, PDO::PARAM_INT);

    // Wykonanie zapytania DELETE
    if ($stmt_delete->execute()) {
        $response = ['status' => 'success'];
        echo json_encode($response);
    } else {
        throw new Exception('Nie udało się wykonać zapytania DELETE.');
    }
} catch (Exception $e) {
    // Logowanie błędu do pliku serwera
    error_log('Błąd: ' . $e->getMessage());
    // Zwracanie szczegółowej odpowiedzi błędu
    $response = ['status' => 'error', 'message' => $e->getMessage()];
    echo json_encode($response);
}
$pdo = null;

?>
