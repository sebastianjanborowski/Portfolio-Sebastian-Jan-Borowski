<?php
session_start();
require_once "../config/dbConfig.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Ustawienie nagłówków odpowiedzi
header('Content-Type: application/json');

// Włączenie raportowania błędów
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$response = [];

// Odbieranie danych JSON
$dataForm = json_decode(file_get_contents('php://input'), true);

// Sprawdzenie, czy e-mail jest podany
if (!empty($dataForm['email'])) {
    $email = trim($dataForm['email']); // Usunięcie zbędnych białych znaków

    // Sprawdzenie poprawności adresu e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['error'] = '<span class="span">Podano nieprawidłowy adres e-mail.</span>';
    } else {
        try {
            // Sprawdzenie, czy e-mail już istnieje
            $sqlNewsletterFind = "SELECT email FROM newsletter WHERE email = :email";
            $verifyNewsletter = $pdo->prepare($sqlNewsletterFind);
            $verifyNewsletter->bindParam(':email', $email, PDO::PARAM_STR);
            $verifyNewsletter->execute();

            if ($verifyNewsletter->rowCount() > 0) {
                // E-mail już istnieje w bazie
                $response['error'] = '<span class="span">Ten adres e-mail jest już zapisany w newsletterze.</span>';
            } else {
                // Dodawanie e-maila do newslettera
                $sqlNewsletterInsert = "INSERT INTO newsletter (email) VALUES (:email)";
                $verifyNewsletterInsert = $pdo->prepare($sqlNewsletterInsert);
                $verifyNewsletterInsert->bindParam(':email', $email, PDO::PARAM_STR);
                $verifyNewsletterInsert->execute();

                if ($verifyNewsletterInsert->rowCount() > 0) {
                    // Ustawienia PHPMailer
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 465;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->SMTPAuth = true;
                    $mail->Username = 'borowskisebastjan@gmail.com';
                    $mail->Password = 'zstjhiefnhjfthkb'; // Hasło aplikacji
                    $mail->CharSet = 'UTF-8';
                    $mail->setFrom('no-reply@handmadetree.pl', 'Newsletter');
                    $mail->addAddress($email);
                    $mail->isHTML(true);
                    $mail->Subject = 'Potwierdzenie dołączenia do Newslettera HandmadeTree';
                    
                    // Przykładowy kod resetowania, upewnij się, że zmienna $randomCode jest zdefiniowana
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

                    
                    // Wysłanie e-maila
                    if ($mail->send()) {
                        $response['message'] = '<span class="span">Email z potwierdzeniem został wysłany na podany email.</span>';
                    } else {
                        $response['error'] = '<span class="span">Nie udało się wysłać e-maila: ' . $mail->ErrorInfo . '</span>';
                    }
                } else {
                    $response['error'] = '<span class="span">Błąd podczas dodawania do newslettera.</span>';
                }
            }
        } catch (PDOException $e) {
            $response['error'] = '<span class="span">Błąd bazy danych: ' . $e->getMessage() . '</span>';
        }
    }
} else {
    $response['error'] = '<span class="span">Nie podano wymaganego adresu e-mail.</span>';
}

// Zakończenie buforowania i wysłanie odpowiedzi
echo json_encode($response);
