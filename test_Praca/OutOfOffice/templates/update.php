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
    <title>Dodaj pracownika</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Aktualizuj pracownika</h1>
        </div>
        <div id="main">
            <div id="form">
                Id  <br/> <input class="input" id="Id" type="number" name="Id"><br/>
                Full_Name  <br/> <input class="input" id="Full_Name" type="text" name="Full_Name"><br/>
                Subdivision  <br/><input class="input" id="Subdivision"  type="text" name="Subdivision"><br/>
                Position <br/> <input class="input" id="Position" type="text" name="Position"> <br/>
                Status   <br/> <input class="input" id="Status" type="text" name="Status"><br/>
                People_Partner  <br/> <input class="input" id="People_Partner"  type="number" name="People_Partner"><br/>
                Out_of_Balance   <br/> <input class="input" id="Out_of_Balance" type="number"name="Out_of_Balance" step="0.01" min="0" max="999.99"><br/>
                <button id="button">aktualizuj pracownika</button>
            </div>
                

        </div>
        <div id="back_to_menu" class="backToMenu">Back</div>
        
    </div>
   
</body>
<script src="../js/updateUserr.js"></script>
<script src="../js/navigation.js"></script>

</html>