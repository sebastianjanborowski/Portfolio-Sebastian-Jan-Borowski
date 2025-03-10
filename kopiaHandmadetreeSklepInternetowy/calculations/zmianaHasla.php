<?php
session_start();

require_once "../config/dbConfig.php";

if (isset($_POST['verfiCode']) && isset($_POST['passwordOne']) && isset($_POST['passwordTwo'])) {
    // Sprawdź, czy kod weryfikacyjny jest poprawny i hasła się zgadzają
    if ($_POST['verfiCode'] === $_SESSION['reset_code'] && $_POST['passwordOne'] === $_POST['passwordTwo']) {
        echo "Dostęp przyznany do zmiany hasła";
        unset($_SESSION['reset_code']);

        $idUser = $_SESSION['idUser'];
        $email = $_SESSION['email'];
        $password = $_POST['passwordOne'];
        unset($_SESSION['idUser']);
        unset($_SESSION['email']);

        // Użyj UPDATE do aktualizacji hasła
        $sql = "UPDATE Users SET password = :password WHERE id_User = :idUser AND email = :email";
        $stm = $pdo->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        
        // Wiązanie parametrów
        $stm->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $stm->bindParam(':idUser', $idUser, PDO::PARAM_INT);
        $stm->bindParam(':email', $email, PDO::PARAM_STR);
        
        // Wykonaj zapytanie
        $stm->execute();

        // Sprawdź, czy hasło zostało zmienione
        if ($stm->rowCount() > 0) {
            $_SESSION['wyslanyEmail'] = '<p class="alert">Hasło zostało zmienione</p>';
            header('Location: http://localhost/SerwisBeckendowyHandmadetree.pl/zaloguj.php');
            exit(); // Użycie exit() po header() dla bezpieczeństwa
        } else {
            $_SESSION['wyslanyEmail'] = '<p class="alert">Hasło nie zostało zmienione</p>';
        }
    } else {
        $_SESSION['wyslanyEmail'] = '<p class="alert">Nie prawidłowe dane</p>';
        header('Location: http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/odzyskiwanieHasla.php');
        exit(); // Użycie exit() po header() dla bezpieczeństwa
    }
} else {
    $_SESSION['wyslanyEmail'] = '<p class="alert">Należy podać dane</p>';
}
?>
