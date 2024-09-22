<?php
session_start();
require_once "../config/db.php";
header('Content-Type: application/json');

// Pobranie danych przesłanych z żądania POST
$data = json_decode(file_get_contents('php://input'), true);

$Id = $data['Id'] ?? null;
$Project_Type = $data['Project_Type'] ?? null;
$Start_Date = $data['Start_Date'] ?? null;
$End_Date = $data['End_Date'] ?? null;
$Project_Manager = $data['Project_Manager'] ?? null;
$Comment = $data['Comment'] ?? null;
$Status = $data['Status'] ?? null;
if ($Project_Type && $Start_Date && $End_Date && $Project_Manager && $Comment && $Status && $Id) {
  $sql =  "UPDATE Project 
    SET 
        Project_Type = :Project_Type,
        Start_Date = :Start_Date,
        End_Date = :End_Date,
        Project_Manager = :Project_Manager,
        Comment = :Comment,
        Status = :Status
    WHERE 
        Id = :Id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':Project_Type', $Project_Type, PDO::PARAM_STR);
    $stmt->bindParam(':Start_Date', $Start_Date, PDO::PARAM_STR);
    $stmt->bindParam(':End_Date', $End_Date, PDO::PARAM_STR);
    $stmt->bindParam(':Project_Manager', $Project_Manager, PDO::PARAM_STR);
    $stmt->bindParam(':Comment', $Comment, PDO::PARAM_STR);
    $stmt->bindParam(':Status', $Status, PDO::PARAM_STR);
    $stmt->bindParam(':Id', $Id, PDO::PARAM_STR);

    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount() >0)
    {
        echo json_encode(['message' => 'Projekt został aktualizowany']);
    }
    else
    {
        echo json_encode(['message' => 'Wystąpił błąd przy aktualizacji']);
    }
}
else
{
    http_response_code(400);
    echo json_encode(array("message" => "Missing somthing data"));
}
$pdo = null;

?>
