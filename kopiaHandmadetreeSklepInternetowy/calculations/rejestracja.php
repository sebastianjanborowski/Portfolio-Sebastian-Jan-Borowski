<?php
session_start();
require_once "../config/dbConfig.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

// Ustawienia błędów tylko w środowisku deweloperskim
if (isset($_SERVER['APP_ENV']) && $_SERVER['APP_ENV'] === 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

// Odbieranie danych JSON
$dataForm = json_decode(file_get_contents('php://input'), true);

$response = [];

if (!empty($dataForm['email']) && !empty($dataForm['password'])) {
    $email = $dataForm['email'];
    $password = $dataForm['password'];
    
    // Walidacja pola newsletter - sprawdzamy, czy istnieje, jeśli nie, ustawiamy na "false"
    $newsletter = isset($dataForm['newsletter']) && $dataForm['newsletter'] === "true" ? true : false;

    try {
        // Sprawdzanie i dodawanie do newslettera, jeśli zaznaczono
        if ($newsletter) {
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
                        $mail->Password = 'zstjhiefnhjfthkb';
                        $mail->CharSet = 'UTF-8';
                        $mail->setFrom('no-reply@handmadetree.pl', 'Newsletter');
                        $mail->addAddress($email);
                        $mail->addReplyTo('biuro@handmadetree.pl', 'Biuro');
                        $mail->isHTML(true);
                        $mail->Subject = 'Potwierdzenie dołączenia do Newslettera Handmaadetree';
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
                                                        .logo {
                                                            width: 150px;
                                                            margin-bottom: 20px;
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

                        if ($mail->send()) {
                            $response['message'] = "Email został wysłany na podany adres.";
                        } else {
                            $response['message'] = "Nie udało się wysłać e-maila.";
                        }
                    } catch (Exception $e) {
                        $response['error'] = "Błąd wysyłania maila: " . $mail->ErrorInfo;
                    }
                    $response['newsletter'] = "Użytkownik dodany do newslettera.";
                } else {
                    $response['newsletter'] = "Błąd podczas dodawania do newslettera.";
                }
            }
        }

        // Sprawdzenie, czy email już istnieje w bazie danych
        $sql2 = "SELECT email FROM users WHERE email = :email";
        $verify = $pdo->prepare($sql2);
        $verify->bindParam(':email', $email, PDO::PARAM_STR);
        $verify->execute();

        if ($verify->rowCount() > 0) {
            $response['error'] = "Dany email istnieje w bazie danych. Zaloguj się lub wybierz inny adres email.";
        } else {
            // Wstawianie nowych danych użytkownika
            $sql = "INSERT INTO users (email, password, goldenLiscie) VALUES (:email, :password, 10)";
            $stm = $pdo->prepare($sql);
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stm->bindParam(':email', $email, PDO::PARAM_STR);
            $stm->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
            $stm->execute();

            if ($stm->rowCount() > 0) {
                $response['redirect'] = "http://localhost/SerwisBeckendowyHandmadetree.pl/zaloguj.php";
            } else {
                $response['message'] = "Rejestracja zakończona niepowodzeniem.";
            }
        }
    } catch (PDOException $e) {
        $response['error'] = "Błąd: " . $e->getMessage();
    }
} else {
    $response['error'] = "Brak wymaganych danych.";
}

echo json_encode($response);
?>
