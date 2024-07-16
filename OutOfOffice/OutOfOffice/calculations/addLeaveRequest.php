<?php
require_once "../config/db.php";

$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

$Employee = $data['Employee'];
$Absense_Reason = $data['Absense_Reason'];
$Start_Date = $data['Start_Date'];
$End_Date = $data['End_Date'];
$Status = $data['Status'];
$Comment = $data['Comment'];

// Przygotowane zapytanie
$sql = "INSERT INTO Leave_Request (Employee, Absense_Reason, Start_Date, End_Date, Comment, Status)
        VALUES (:Employee, :Absense_Reason, :Start_Date, :End_Date, :Comment, :Status)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':Employee', $Employee);
$stmt->bindParam(':Absense_Reason', $Absense_Reason);
$stmt->bindParam(':Start_Date', $Start_Date);
$stmt->bindParam(':End_Date', $End_Date);
$stmt->bindParam(':Comment', $Comment);
$stmt->bindParam(':Status', $Status);

if ($stmt->execute()) {
    $response = ['status' => 'success'];
    echo json_encode($response);
} else {
    $response = ['status' => 'error'];
    echo json_encode($response);
}
$pdo = null;

?>