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
if ($dataForm['email'] && $dataForm['password']) 
{
    $email = $dataForm['email'];
    $password = $dataForm['password'];

    try {
        // Sprawdzenie, czy email już istnieje
        $sql2 = "SELECT email FROM Users WHERE email = :email";
        $verify = $pdo->prepare($sql2);
        $verify->bindParam(':email', $email, PDO::PARAM_STR);
        $verify->execute();

        if ($verify->rowCount() > 0) {
            $response['error'] = "Dany email istnieje w bazie danych Zaloguj się badź wybierz inny adres email";
        } else {
            // Wstawianie nowych danych użytkownika
            $sql = "INSERT INTO Users ( email, password, goldenLiscie) 
                    VALUES ( :email, :password, 10)";

            $stm = $pdo->prepare($sql);
            $stm->bindParam(':email', $email, PDO::PARAM_STR);
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stm->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

            $stm->execute();

            if ($stm->rowCount() > 0) {
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
