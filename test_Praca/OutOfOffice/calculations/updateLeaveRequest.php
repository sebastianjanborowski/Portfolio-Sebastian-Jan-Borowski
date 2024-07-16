<?php
session_start();
require_once "../config/db.php";
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$Id = $data['Id'] ?? null;
$Employee = $data['Employee'] ?? null;
$Absense_Reason = $data['Absense_Reason'] ?? null;
$Start_Date = $data['Start_Date'] ?? null;
$End_Date = $data['End_Date'] ?? null;
$Comment = $data['Comment'] ?? null;
$Status = $data['Status'] ?? null;

if ($Employee && $Absense_Reason && $Start_Date && $End_Date && $Comment && $Status && $Id) {

    $sql = "UPDATE Leave_Request 
            SET Employee = :Employee, 
                Absense_Reason = :Absense_Reason, 
                Start_Date = :Start_Date, 
                End_Date = :End_Date, 
                Comment = :Comment, 
                Status = :Status 
            WHERE Id = :Id;";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Employee', $Employee, PDO::PARAM_STR);
        $stmt->bindParam(':Absense_Reason', $Absense_Reason, PDO::PARAM_STR);
        $stmt->bindParam(':Start_Date', $Start_Date, PDO::PARAM_STR);
        $stmt->bindParam(':End_Date', $End_Date, PDO::PARAM_STR);
        $stmt->bindParam(':Comment', $Comment, PDO::PARAM_STR);
        $stmt->bindParam(':Status', $Status, PDO::PARAM_STR);
        $stmt->bindParam(':Id', $Id, PDO::PARAM_INT);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo json_encode(['message' => 'Zaktualizowano wniosek o urlop']);
        } else {
            echo json_encode(['message' => 'Nie wprowadzono żadnych zmian']);
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(['message' => 'Wystąpił błąd podczas wykonywania zapytania: ' . $e->getMessage()]);
    }
} else {
    http_response_code(400);
    echo json_encode(['message' => 'Brak danych wymaganych do wykonania operacji']);
}
$pdo = null;

?>
