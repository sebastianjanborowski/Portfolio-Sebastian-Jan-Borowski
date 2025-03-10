<?php
    session_start();
    $_SESSION['zalogowany'] = false;

    header('Location:../i.php');
?>

