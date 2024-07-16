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
            <h1>Aktualizuj projekt</h1>
        </div>
        <div id="main">
            <div id="form">

                Id User  <br/> <input class="input" id="Id" type="number" name="Id"><br/>

                Project_Type  <br/> <input class="input" id="Project_Type" type="text" name="Project_Type"><br/>
                Start_Date  <br/><input class="input" id="Start_Date"  type="date" name="Start_Date"><br/> 
                End_Date <br/> <input class="input" id="End_Date" type="date" name="End_Date"> <br/>
                Project_Manager  <br/> <input class="input" id="Project_Manager"  type="number" name="Project_Manager"><br/>
                Comment   <br/> <input class="input" id="Comment" type="text" name="Comment"><br/>
                Status   <br/> <input class="input" id="Status" type="text" name="Status"><br/>
                <button id="button">Dodaj projekt</button>
            </div>
                

        </div>
        <div id="back_to_menu" class="backToMenu">Back</div>
        
    </div>
   
</body>
<script src="../js/navigation.js"></script>
<script src="../js/updateProject.js"></script>
</html>