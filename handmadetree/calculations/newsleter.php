<?php
session_start();
require_once "../config/dbConfig.php";

header('Content-Type: application/json');

// Ustawienia błędów tylko w środowisku deweloperskim
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Odbieranie danych JSON
$dataForm = json_decode(file_get_contents('php://input'), true);

$response = [];

// Sprawdzenie, czy wszystkie wymagane dane są obecne
if (isset($dataForm['name'], $dataForm['lastName'], $dataForm['email'])) {
    $name = $dataForm['name'];
    $lastName = $dataForm['lastName'];
    $email = $dataForm['email'];

    try {
        // Sprawdzenie, czy email już istnieje
        $sql2 = "SELECT email FROM NewSleter WHERE email = :email";
        $verify = $pdo->prepare($sql2);
        $verify->bindParam(':email', $email, PDO::PARAM_STR);
        $verify->execute();

        if ($verify->rowCount() > 0) {
            $response['error'] = "Dany email istnieje w bazie danych";
            $_SESSION['email'] = "<p class='error'>Dany email istnieje w bazie danych</p>";  
        } else {
            // Wstawianie nowych danych użytkownika
            $sql = "INSERT INTO NewSleter (name, lastName, email) 
                    VALUES (:name, :lastName, :email)";

            $stm = $pdo->prepare($sql);
            $stm->bindParam(':name', $name, PDO::PARAM_STR);
            $stm->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $stm->bindParam(':email', $email, PDO::PARAM_STR);

            $stm->execute();

            if ($stm->rowCount() > 0) {
                $response['message'] = "Udana rejestracja w newsleter";
                $response['redirect'] = "http://localhost/SerwisBeckendowyHandmadetree.pl/zaloguj.php";
            } else {
                $response['message'] = "Rejestracja zakończona niepowodzeniem";
            }
        }
    } catch (PDOException $e) {
        $response['error'] = "Błąd: " . $e->getMessage();
    }
} else {
    $response['error'] = "Brak wymaganych danych";
}

// Debugowanie: wypisz odpowiedź przed wysłaniem
error_log("Odpowiedź JSON: " . json_encode($response));

echo json_encode($response);
?>
