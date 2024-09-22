<?php
require_once "../config/db.php";

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData,true);
// Pobranie danych przesłanych z żądania POST
$name = $data['name'];
$password = $data['password'];
$lastName = $data['lastName'];
$email = $data['email'];


// Przygotowanie zapytania SQL do wstawienia danych do bazy
$sql = "INSERT INTO Users (name, lastName, email, password) 
        VALUES (:name, :lastName, :email, :password)";

// Przygotowanie danych do zapisu
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
// Wykonanie zapytania
if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(array("message" => "Nowy użytkownik został dodany do bazy danych"));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Wystąpił problem z dodaniem użytkownika do bazy danych"));
}
$pdo = null;

?>
