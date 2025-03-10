<?php
session_start();
require_once "../config/dbConfig.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

$response = [];

$imie = $_POST['imie'] ?? null;
$email = $_POST['email'] ?? null;
$numer = $_POST['numer'] ?? null;

$response['error'] = $imie . $email . $numer;

try {
    // Odbieranie danych z POST
    $options = isset($_POST['options']) ? json_decode($_POST['options'], true) : null;
    $description = $_POST['description'] ?? null;
    $provider = $_POST['provider'] ?? null;
    $photoName = null;

    // Sprawdzanie, czy wszystkie wymagane dane są obecne
    if (!$options || !$description || !$provider) {
        throw new Exception('Brak wymaganych danych wejściowych.');
    }

    // Obsługa zdjęcia (jeśli zostało wysłane)
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photoTmpName = $_FILES['photo']['tmp_name'];
        $photoName = uniqid() . "_" . basename($_FILES['photo']['name']);
        $uploadDir = '../uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $uploadPath = $uploadDir . $photoName;
        if (!move_uploaded_file($photoTmpName, $uploadPath)) {
            throw new Exception('Nie udało się przesłać pliku.');
        }
    }

    // Przygotowanie zapytania do bazy danych
    $stmt = $pdo->prepare("
        INSERT INTO hawajskie_palmy (options, description, provider, photo_name, email, imie, numer_telefonu) 
        VALUES (:options, :description, :provider, :photo_name, :email, :imie, :numer_telefonu)
    ");
    $stmt->execute([
        ':options' => json_encode($options),
        ':description' => $description,
        ':provider' => $provider,
        ':photo_name' => $photoName,
        ':email' => $email,
        ':imie' => $imie,
        ':numer_telefonu' => $numer
    ]);

    // Przygotowanie treści wiadomości e-mail
    $optionsTable = '';
    foreach ($options as $option) {
        $parts = explode(':', $option, 2);
        $firstValue = $parts[0] ?? '';
        $secondValue = $parts[1] ?? '';
        $optionsTable .= "<tr><td>{$firstValue}</td><td>{$secondValue}</td></tr>";
    }

    // Konfiguracja PHPMailer
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->Username = 'borowskisebastjan@gmail.com';
    $mail->Password = 'zstjhiefnhjfthkb';
    $mail->CharSet = 'UTF-8';
    $mail->setFrom('no-reply@handmadetree.pl', 'Potwierdzenie złożenia zamówienia');
    $mail->addAddress($email);
    $mail->addReplyTo('biuro@handmadetree.pl', 'Biuro');
    $mail->isHTML(true);
    $mail->Subject = 'HandmadeTree - specjalne zamówienie';

    // Dodanie osadzonego obrazu
    $mail->addEmbeddedImage('Handmadetree.png', 'logo_cid');

    // Treść wiadomości HTML z osadzonym obrazem
    $mail->Body = '
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Specjalne zamówienie - HandmadeTree</title>
<style>
body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
.email-container { background-color: #ffffff; padding: 20px; border-radius: 8px; max-width: 600px; margin: 0 auto; text-align: center; }
.email-container p { font-size: 2vh;text-align:center; color: #333333; line-height: 1.5; }
.email-container table { width: 100%; border-collapse: collapse; margin-top: 20px; }
.email-container th, .email-container td { padding: 8px; border: 1px solid #ddd; text-align: center;font-size:2vh }
.email-container th {text-align:center; background-color: #f2f2f2; }
</style>
</head>
<body>
<div class="email-container">
<img style="width:35%;" src="cid:logo_cid" alt="Logo HandmadeTree">
<h2>Dziękujemy za przesłanie specjalnego zamówienia!</h2>
<p>Otrzymaliśmy Twój projekt i przystępujemy do wyceny. 
Wkrótce skontaktujemy się z Tobą telefonicznie, aby przedstawić dalsze informacje dotyczące realizacji zamówienia.</p>
<h3 style="font-size:2vh">Podsumowanie zamówienia:</h3>
<table>
<tr><th>Opcja</th><th>Wartość</th></tr>
' . $optionsTable . '
</table>
<h2 style="text-align:center">Miłego dnia!</h2>
</div>
</body>
</html>
';

    if ($mail->send()) {
        $_SESSION['wyslanyEmail'] = '<p class="alert">Dziękujemy za przesłanie specjalnego zamówienia! Otrzymaliśmy Twój projekt i przystępujemy do wyceny. Wkrótce skontaktujemy się z Tobą telefonicznie, aby przedstawić dalsze informacje dotyczące realizacji zamówienia. Potwierdzenie złożonego zamówienia wysłaliśmy na Twojego maila. Miłego Dnia.</p>';
        header('Location: ../self-order.php');
    } else {
        throw new Exception('Nie udało się wysłać wiadomości e-mail.');
    }

    $response['success'] = true;
    $response['message'] = 'Dane zapisane pomyślnie.';
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>
