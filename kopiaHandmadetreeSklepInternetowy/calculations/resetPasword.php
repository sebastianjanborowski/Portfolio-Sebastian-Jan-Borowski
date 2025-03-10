<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if (isset($_POST['email'])) {
    // Walidacja adresu email
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if (!$email) { // Jeśli email nie jest poprawny
        $_SESSION['given_email'] = $_POST['email']; // Przechowaj w sesji podany email
        $_SESSION['wyslanyEmail'] = '<p class="alert">Podaj poprawny adres email</p>';
        header('Location: ../resetPassword.php'); // Przekierowanie na stronę formularza
        exit();
    } else {
        require_once "../config/dbConfig.php";

        $sql2 = "SELECT email, id_User FROM Users WHERE email = :email";
        $verify = $pdo->prepare($sql2);
        $verify->bindParam(':email', $email, PDO::PARAM_STR);
        $verify->execute();

        // Sprawdzenie, czy email istnieje w bazie danych
        if ($verify->rowCount() > 0) {
            $user = $verify->fetch(PDO::FETCH_ASSOC);
           
            // Przypisanie danych do zmiennych sesyjnych
            $_SESSION['idUser'] = $user['id_User'];       
            $_SESSION['email'] = $user['email'];     
            $_SESSION['PrzyznanyDostepResetPassword'] = "true";

            // Generowanie losowego ciągu 5 cyfr
            $randomCode = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
            
            // Zapis losowego kodu do zmiennej sesyjnej
            $_SESSION['reset_code'] = $randomCode;

            // Email istnieje w bazie danych
            try {
                $mail = new PHPMailer();

                $mail->isSMTP(); // Użycie SMTP
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Debugowanie (opcjonalnie, można odkomentować w celu debugowania)
                $mail->Host = 'smtp.gmail.com'; // Serwer SMTP
                $mail->Port = 465; // Używany port komunikacji (465 dla SSL)
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Użycie SSL
                $mail->SMTPAuth = true; // Włączona autoryzacja
                $mail->Username = 'borowskisebastjan@gmail.com'; // Twój adres email
                $mail->Password = 'zstjhiefnhjfthkb'; // Hasło aplikacji Google (upewnij się, że używasz hasła aplikacji)

                $mail->CharSet = 'UTF-8'; // Kodowanie UTF-8
                $mail->setFrom('no-reply@handmadetree.pl', 'Odzyskiwanie Hasła do serwisu'); // Nadawca wiadomości
                $mail->addAddress($email); // Odbiorca wiadomości
                $mail->addReplyTo('biuro@handmadetree.pl', 'Biuro'); // Adres zwrotny

                $mail->isHTML(true); // Wysyłanie wiadomości jako HTML
                $mail->Subject = 'Odzyskiwanie hasła Handmadetree.pl'; // Temat wiadomości

                // Treść wiadomości HTML z wygenerowanym kodem
                $mail->Body = '
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odzyskiwanie hasła - HandmadeTree</title>
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
            text-align: left;
        }
        .email-container p {
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
        }
        .reset-code {
            font-weight: bold;
            color: #d9534f;
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
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Resetowanie hasła</h2>
        <p>Twój kod resetowania hasła to: <strong class="reset-code">' . $randomCode . '</strong>. Pamiętaj, aby go skopiować.</p>
        <p>Możesz odzyskać hasło, klikając w poniższy link:</p>
        <p><a href="http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/odzyskiwanieHasla.php" class="btn">Kliknij tutaj, aby odzyskać hasło</a></p>
        <p>Jeśli nie prosiłeś o zresetowanie hasła, zignoruj tę wiadomość.</p>
    </div>
</body>
</html>
';

                // Próba wysyłki
                if ($mail->send()) {
                    $_SESSION['wyslanyEmail'] = '<p class="alert">Email zostal wysłany na podany adres</p>';
                    header('Location: ../resetPassword.php'); // Poprawione, dodany slash na początku
                } else {
                    $_SESSION['wyslanyEmail'] = '<p class="alert">Email nie zostal wysłany<p/>';
                    header('Location: ../resetPassword.php'); // Poprawione, dodany slash na początku
                }
            } catch (Exception $e) {
                echo "Błąd wysyłania maila: {$mail->ErrorInfo}";
            }
        } else {
            // Email nie istnieje w bazie danych
            $_SESSION['wyslanyEmail'] = '<p class="alert">Email nie istnieje w bazie danych</p>';
            header('Location: ../resetPassword.php'); // Poprawione, dodany slash na początku
        }
    }

} else {
    header('Location: ../resetPassword.php');
    exit();
}
