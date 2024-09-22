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
            <h1>Dodaj wniosek o urlop</h1>
        </div>
        <div id="main">
            <div id="form">
            Employee: <br/><input class="input" id="Employee" type="number" name="Employee"><br/>
            Absense Reason: <br/> <input class="input" id="Absense_Reason" type="text" name="Absense_Reason"> <br/>
            Start Date:   <br/> <input class="input" id="Start_Date" type="date" name="Start_Date"><br/>
            End Date:  <br/> <input class="input" id="End_Date"  type="date" name="End_Date"><br/>
            Comment:   <br/> <input class="input" id="Comment" type="text" name="Comment"><br/>
            Status:  <br/> <input class="input" id="Status" type="text" name="Status"><br/>
                <button id="button">Dodaj pracownika</button>
            </div>
                

        </div>
        <div id="back_to_menu" class="backToMenu">Back</div>
        
    </div>
   
</body>
<script src="../js/navigation.js"></script>
<script src="../js/addLeaveRequest.js"></script>
</html>