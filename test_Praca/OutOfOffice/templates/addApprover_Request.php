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
    <title>Dodaj wniosek o urlop</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Dodaj wniosek o zatwierdzenie</h1>
        </div>
        <div id="main">
            <div id="form">
            Approver: <br/><input class="input" id="Approver" type="number" name="Approver"><br/>
            Leave_Request: <br/> <input class="input" id="Leave_Request" type="number" name="Leave_Request"> <br/>
            Status:  <br/> <input class="input" id="Status" type="text" name="Status"><br/>
            Comment:   <br/> <input class="input" id="Comment" type="text" name="Comment"><br/>
                <button id="button">Dodaj pracownika</button>
            </div>
                

        </div>
        <div id="back_to_menu" class="backToMenu">Back</div>
        
    </div>
   
</body>
<script src="../js/navigation.js"></script>
<script src="../js/addApprover_Request.js"></script>
</html>