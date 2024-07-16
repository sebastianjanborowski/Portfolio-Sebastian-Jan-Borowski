<?php
require_once "../config/db.php";
$json_data = file_get_contents('php://input');
$data = json_decode($json_data,true);

// Pobranie danych przesłanych z żądania POST
$Full_Name = $data['Full_Name'];
$Subdivision = $data['Subdivision'];
$Position = $data['Position'];
$Status = $data['Status'];
$People_Partner = $data['People_Partner'];
$Out_of_Balance = $data['Out_of_Balance'];
$Id = $data['Id'];
// Przygotowanie zapytania SQL do wstawienia danych do bazy
$sql = "UPDATE Employees 
        SET Full_Name = :Full_Name, 
            Subdivision = :Subdivision, 
            Position = :Position, 
            Status = :Status, 
            People_Partner = :People_Partner, 
            Out_of_Balance = :Out_of_Balance 
        WHERE Id = :Id";

// Przygotowanie danych do zapisu
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':Full_Name', $Full_Name);
$stmt->bindParam(':Subdivision', $Subdivision);
$stmt->bindParam(':Position', $Position);
$stmt->bindParam(':Status', $Status);
$stmt->bindParam(':People_Partner', $People_Partner);
$stmt->bindParam(':Out_of_Balance', $Out_of_Balance);
$stmt->bindParam(':Id', $Id);
// Wykonanie zapytania
if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(array("message" => "Nowy pracownik został zaktualizowany  w bazie danych"));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Wystąpił problem z update pracownika"));
}
$pdo = null;

?>
