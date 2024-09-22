<?php
require_once "../config/db.php";
$json_data = file_get_contents('php://input');
$data = json_decode($json_data,true);

// Pobranie danych przesłanych z żądania POST
$name = $data['name'];
$password = $data['password'];
$lastName = $data['lastName'];
$email = $data['email'];
$id = $data['id'];
// Przygotowanie zapytania SQL do wstawienia danych do bazy
$sql = "UPDATE Users 
        SET name = :name, 
            password = :password, 
            email = :email, 
            lastName = :lastName 
        WHERE idUser = :id";

// Przygotowanie danych do zapisu
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':id', $id);

// Wykonanie zapytania
if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(array("message" => "Nowy klient został zaktualizowany  w bazie danych"));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Wystąpił problem z update klienta"));
}
$pdo = null;

?>
