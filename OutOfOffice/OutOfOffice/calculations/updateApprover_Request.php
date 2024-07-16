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
    if (!isset($data['Approver'], $data['Leave_Request'], $data['Status'], $data['Comment'], $data['Id'])) {
        throw new Exception('Brak wymaganych danych wejściowych.');
    }

    // Przypisanie danych do zmiennych
    $Approver = $data['Approver'];
    $Leave_Request = $data['Leave_Request'];
    $Status = $data['Status'];
    $Comment = $data['Comment'];
    $Id = $data['Id'];

    // Dodatkowa walidacja klucza obcego Leave_Request
    $sql_check_leave_request = "SELECT COUNT(*) AS count FROM Leave_Request WHERE ID = :Leave_Request";
    $stmt_check_leave_request = $pdo->prepare($sql_check_leave_request);
    $stmt_check_leave_request->bindParam(':Leave_Request', $Leave_Request, PDO::PARAM_INT);
    $stmt_check_leave_request->execute();
    $result = $stmt_check_leave_request->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] === 0) {
        throw new Exception('Niepoprawna wartość Leave_Request. Podane ID nie istnieje w tabeli Leave_Request.');
    }

    // Przygotowane zapytanie UPDATE
    $sql_update = "UPDATE Approval_Request
                   SET Approver = :Approver,
                       Leave_Request = :Leave_Request,
                       Status = :Status,
                       Comment = :Comment 
                   WHERE ID = :Id";

    $stmt_update = $pdo->prepare($sql_update);
    $stmt_update->bindParam(':Approver', $Approver, PDO::PARAM_INT);
    $stmt_update->bindParam(':Leave_Request', $Leave_Request, PDO::PARAM_INT);
    $stmt_update->bindParam(':Status', $Status, PDO::PARAM_STR);
    $stmt_update->bindParam(':Comment', $Comment, PDO::PARAM_STR);
    $stmt_update->bindParam(':Id', $Id, PDO::PARAM_INT);

    // Wykonanie zapytania UPDATE
    if ($stmt_update->execute()) {
        $response = ['status' => 'success'];
        echo json_encode($response);
    } else {
        throw new Exception('Nie udało się wykonać zapytania SQL.');
    }
} catch (Exception $e) {
    // Logowanie błędu do pliku serwera
    error_log($e->getMessage());
    // Zwracanie szczegółowej odpowiedzi błędu
    $response = ['status' => 'error', 'message' => $e->getMessage()];
    echo json_encode($response);
}
$pdo = null;

?>
