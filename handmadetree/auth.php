<?php
require_once 'vendor/autoload.php'; // Załaduj bibliotekę Google API
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Konfiguracja klienta Google
$client = new Google_Client();
$client->setClientId('7458942220-s0f6bu5rrstt7eknv8arb51hm3ospqg2.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/SerwisBeckendowyHandmadetree.pl/auth.php');
$client->addScope('email');
$client->addScope('profile');

// Sprawdź, czy mamy kod autoryzacyjny
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Pobierz dane użytkownika
    $oauth2 = new Google_Service_Oauth2($client);
    $userInfo = $oauth2->userinfo->get();

    // Zapisz dane użytkownika do zmiennych sesyjnych
    $_SESSION['username'] = $userInfo->name;
    $_SESSION['email'] = $userInfo->email;

    // Przekieruj użytkownika na stronę główną lub inną stronę
    header('Location: pokaz.php');
    exit();
} else {
    // Przekieruj użytkownika do Google w celu autoryzacji
    $authUrl = $client->createAuthUrl();
    header('Location: ' . $authUrl);
    exit();
}
?>