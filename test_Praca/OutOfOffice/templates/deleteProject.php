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
    <title>Dodaj projekt</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>usuń projekt</h1>
        </div>
        <div id="main">
            <div id="form">
                Id User  <br/> <input class="input" id="Id" type="number" name="Id"><br/>
                <button id="button">Skasuj projekt</button>
            </div>
                

        </div>
        <div id="back_to_menu" class="backToMenu">Back</div>
        
    </div>
   
</body>
<script src="../js/navigation.js"></script>
<script src="../js/deleteProject.js"></script>
</html>