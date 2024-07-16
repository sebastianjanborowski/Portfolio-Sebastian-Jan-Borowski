<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Dodaj pracownika</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Formularz logowania</h1>
        </div>
        <div id="main">
            <div id="form">
                <input type="text" id="login" name="login" placeholder="Login">
                <input type="password" id="password" name="password" placeholder="Hasło">
                <button type="button" id="button">Zaloguj</button>
            </div>             
        </div>
        
        
    </div>
   
</body>
<script src="../js/form.js"></script>

</html>