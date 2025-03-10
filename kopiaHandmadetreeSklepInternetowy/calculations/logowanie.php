<?php
session_start();
require_once "../config/dbConfig.php";
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
// Włączenie bufora wyjścia
ob_start();

// Pobranie danych przesłanych z żądania POST
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'] ?? null;
$password = $data['password'] ?? null;
$newsletter = $data['newsletter'] ?? null;

$response = [];

if ($email && $password) {
    // Sprawdzenie i dodanie użytkownika do newslettera, jeśli wybrano
    if ($newsletter === "true") {
        $sqlNewsletterFind = "SELECT email FROM newsletter WHERE email = :email";
        $verifyNewsletter = $pdo->prepare($sqlNewsletterFind);
        $verifyNewsletter->bindParam(':email', $email, PDO::PARAM_STR);
        $verifyNewsletter->execute();

        if ($verifyNewsletter->rowCount() == 0) {
            $sqlNewsletterInsert = "INSERT INTO newsletter (email) VALUES (:email)";
            $verifyNewsletterInsert = $pdo->prepare($sqlNewsletterInsert);
            $verifyNewsletterInsert->bindParam(':email', $email, PDO::PARAM_STR);
            $verifyNewsletterInsert->execute();

            if ($verifyNewsletterInsert->rowCount() > 0) {
                try {
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 465;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->SMTPAuth = true;
                    $mail->Username = 'borowskisebastjan@gmail.com';
                    $mail->Password = 'zstjhiefnhjfthkb'; // Użyj hasła aplikacji Gmail
                    $mail->CharSet = 'UTF-8';
                    $mail->setFrom('no-reply@handmadetree.pl', 'Newsletter');
                    $mail->addAddress($email);
                    $mail->addReplyTo('biuro@handmadetree.pl', 'Biuro');
                    $mail->isHTML(true);
                    $mail->Subject = 'Potwierdzenie dołączenia do Newslettera HandmadeTree';
                    $mail->Body = '<!DOCTYPE html>
                    <html lang="pl">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>NewsLetter HandmadeTree - potwierdzenie</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                background-color: #f4f4f4;
                                margin: 0;
                                padding: 20px;
                            }
                            .email-container {
                                background-color: #ffffff;
                                padding: 20px;
                                border-radius: 8px;
                                max-width: 600px;
                                margin: 0 auto;
                                text-align: center;
                            }
                            .btn {
                                display: inline-block;
                                background-color: #28a745;
                                color: #ffffff;
                                padding: 12px 24px;
                                border-radius: 5px;
                                text-decoration: none;
                                font-weight: bold;
                            }
                            .btn:hover {
                                background-color: #218838;
                            }
                            .discount-code {
                                font-size: 1.2em;
                                font-weight: bold;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="email-container">
                            <h2>Hej!</h2>
                            <p>Dziękujemy, że dołączyłeś do naszego newslettera. Skorzystaj z 10% rabatu na pierwsze zakupy, używając kodu:</p>
                            <p class="discount-code">LOVEBONSAI10</p>
                            <p>podczas płatności.</p>
                            <p>Aby otrzymać dodatkowe benefity, zarejestruj się na stronie HandmadeTree.</p>
                            <a href="http://localhost/SerwisBeckendowyHandmadetree.pl/rejestracja.php" class="btn">Rejestracja</a>
                        </div>
                    </body>
                    </html>
                    ';

                    // Debugowanie PHPMailer
                    $mail->SMTPDebug = 2; // Ustawienie debugowania
                    $mail->Debugoutput = 'html';

                    if ($mail->send()) {
                        $response['message'] = "Email został wysłany na podany adres.";
                    } else {
                        $response['message'] = "Nie udało się wysłać e-maila.";
                        $response['error'] = "Błąd PHPMailer: " . $mail->ErrorInfo;
                    }
                } catch (Exception $e) {
                    $response['error'] = "Wyjątek PHPMailer: " . $mail->ErrorInfo;
                }
                $response['newsletter'] = "Użytkownik dodany do newslettera";
            } else {
                $response['newsletter'] = "Błąd podczas dodawania do newslettera";
            }
        }
    }

    // Przygotowanie zapytania SQL do sprawdzenia danych użytkownika
    $sql = "SELECT email, password, name FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['name'] = 'Witaj '.$user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['zalogowany'] = true;

        $response['message'] = "Udane logowanie";
        $response['redirect'] = "http://localhost/SerwisBeckendowyHandmadetree.pl/i.php";
    } else {
        $_SESSION['zalogowany'] = false;
        $response['message'] = "Błędne hasło albo login";
    }
} else {
    http_response_code(400);
    $response['message'] = "Brakuje danych wejściowych";
}

// Przechwycenie nieoczekiwanych danych wyjściowych i ich ignorowanie
$output = ob_get_clean();
if (!empty($output)) {
    $response['debug'] = "Unexpected output: " . $output;
}

echo json_encode($response);

// Zamknięcie połączenia PDO
$pdo = null;
?>
