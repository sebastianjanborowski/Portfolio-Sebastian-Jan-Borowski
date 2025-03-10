<?php
session_start();

require_once 'vendor/autoload.php'; // Załaduj bibliotekę Facebook SDK

use Facebook\Facebook;

// Konfiguracja klienta Facebook
$fb = new Facebook([
    'app_id' => '510151161616837', // Zamień na swój app_id
    'app_secret' => '151b05b7bcf368ad961802ddbf1f2aa3', // Zamień na swój app_secret
    'default_graph_version' => 'v12.0',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Uprawnienia, które chcesz uzyskać

// Sprawdź, czy dane użytkownika są już w sesji
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    // Dane użytkownika są już dostępne, przejdź do dalszego przetwarzania
    header('Location: calculations/rejestracjaFacebook.php');
    exit();
}

// Sprawdź, czy mamy kod autoryzacyjny
if (isset($_GET['code'])) {
    try {
        $accessToken = $helper->getAccessToken();
        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit();
        }

        // Zapisz token dostępu do sesji
        $_SESSION['fb_access_token'] = (string) $accessToken;

        // Pobierz dane użytkownika
        $response = $fb->get('/me?fields=id,name,email', $accessToken);
        $user = $response->getGraphUser();

        // Zapisz dane użytkownika do zmiennych sesyjnych
        $_SESSION['username'] = $user['name'];
        $_SESSION['email'] = $user['email'];

        // Przekieruj użytkownika na stronę główną lub inną stronę
        header('Location: calculations/rejestracjaFacebook.php');
        exit();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // Błąd Graph API
        echo 'Graph returned an error: ' . $e->getMessage();
        exit();
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // Błąd SDK
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit();
    }
} else {
    // Przekieruj użytkownika do Facebook w celu autoryzacji
    $loginUrl = $helper->getLoginUrl('http://localhost/SerwisBeckendowyHandmadetree.pl/loginWithFacebook.php', $permissions);
    header('Location: ' . $loginUrl);
    exit();
}
?>
