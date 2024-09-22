<?php
    session_start();
    if ($_SESSION['zalogowany'] == 'false')
    {
        header('Location:../public/index.php');
    }
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Dodaj urzytkownika</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Dodaj urzytkownika</h1>
        </div>
        <div id="main">
            <div id="form">
                name  <br/> <input class="input" id="name" type="text" name="name"><br/>
                lastName  <br/><input class="input" id="lastName"  type="text" name="lastName"><br/>
                email <br/> <input class="input" id="email" type="text" name="email"> <br/>
                password   <br/> <input class="input" id="password" type="text" name="password"><br/>
                <button id="button">Dodaj klienta</button>
            </div>
                

        </div>
        <div id="back_to_menu" class="backToMenu">Back</div>
        
    </div>
   
</body>
<script src="../js/navigation.js"></script>
<script src="../js/addUser.js"></script>
</html>