<?php
require_once "../config/db.php";

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData,true);
// Pobranie danych przesłanych z żądania POST
$Full_Name = $data['Full_Name'];
$Subdivision = $data['Subdivision'];
$Position = $data['Position'];
$Status = $data['Status'];
$People_Partner = $data['People_Partner'];
$Out_of_Balance = $data['Out_of_Balance'];


// Przygotowanie zapytania SQL do wstawienia danych do bazy
$sql = "INSERT INTO Employees (Full_Name, Subdivision, Position, Status, People_Partner, Out_of_Balance) 
        VALUES (:Full_Name, :Subdivision, :Position, :Status, :People_Partner, :Out_of_Balance)";

// Przygotowanie danych do zapisu
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':Full_Name', $Full_Name);
$stmt->bindParam(':Subdivision', $Subdivision);
$stmt->bindParam(':Position', $Position);
$stmt->bindParam(':Status', $Status);
$stmt->bindParam(':People_Partner', $People_Partner);
$stmt->bindParam(':Out_of_Balance', $Out_of_Balance);
// Wykonanie zapytania
if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(array("message" => "Nowy pracownik został dodany do bazy danych"));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Wystąpił problem z dodaniem pracownika do bazy danych"));
}
$pdo = null;

?>
