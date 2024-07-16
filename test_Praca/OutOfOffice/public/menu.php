<?php
session_start(); // Rozpoczynanie sesji
   $dostep = 'dostep';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"/>
    <title>System Zarządania</title>
</head>
<body>
    <div id="container"> 
        <div id="header">
        <?php
           if($_SESSION['login'] == 'admin' && $_SESSION['password'] == 'admin')
           {
            echo " <h1>System zarządzania pracownikami ".$dostep.' '.$_SESSION['login']."</h1>" ;
           }
           else if($_SESSION['login'] == 'HR_Manager'  && $_SESSION['password'] == 'HR_Manager')
           {
            echo " <h1>System zarządzania pracownikami ".$dostep.' '.$_SESSION['login']."</h1>" ;
           }
           else if($_SESSION['login'] == 'Project_Manager'  && $_SESSION['password'] == 'Project_Manager')
           {
            echo " <h1>System zarządzania pracownikami ".$dostep.' '.$_SESSION['login']."</h1>" ;
           }
           else if($_SESSION['login'] == 'Employee'  && $_SESSION['password'] == 'Employee')
           {
            echo " <h1>System zarządzania pracownikami ".$dostep.' '.$_SESSION['login']."</h1>" ;
           }
          
        ?>

            
        </div>
        <div id="main">
        <?php
          if($_SESSION['login'] == 'admin' && $_SESSION['password'] == 'admin')
           {
            echo "<div id='show' class='opcja'>Lista pracowników</div>";
            echo "<div id='add' class='opcja'>Dodaj pracownika</div>";
            echo "<div id='update' class='opcja'>Aktualizuj pracownika</div>";
            echo "<div id='delete' class='opcja'>Usuń pracownika</div>";
            echo "<div id='showProject' class='opcja'>Lista projektów</div>";
            echo "<div id='project' class='opcja'>Dodaj projekt</div>";
            echo "<div id='updateProject' class='opcja'>Aktualizuj projekt</div>";           
            echo "<div id='deleteProject' class='opcja'>Usuń projekt</div>";
            echo "<div id='addLeaveRequest' class='opcja'>Dodaj wniosek o urlop</div>";
            echo "<div id='showLeaveRequest' class='opcja'>Pokaż wnoski o urlop</div>";
            echo "<div id='updateLeaveRequest' class='opcja'>Aktualizuj wnioski o urlop</div>";  
            echo "<div id='deleteLeaveRequest' class='opcja'>Usuń wniasek o urlop</div>";

            echo "<div id='addApprover_Request' class='opcja'>Dodaj wniosek o zatwierdzenie</div>";//poprawka
            echo "<div id='showApprover_Request' class='opcja'>Pokaż wnoski o zatwierdzenie</div>";                      
            echo "<div id='updateApprover_Request' class='opcja'>Aktualizuj wnioski o zatwierdzenie</div>";         
            echo "<div id='deleteApprover_Request' class='opcja'>Usuń wniasek o zatwierdzenie</div>";

            
           }
           else if($_SESSION['login'] == 'HR_Manager'  && $_SESSION['password'] == 'HR_Manager')
           {
            echo "<div id='show' class='opcja'>Lista pracowników</div>";
            echo "<div id='add' class='opcja'>Dodaj pracownika</div>";
            echo "<div id='update' class='opcja'>Aktualizuj pracownika</div>";
            echo "<div id='delete' class='opcja'>Usuń pracownika</div>";
            echo "<div id='showProject' class='opcja'>Lista projektów</div>";
            echo "<div id='addApprover_Request' class='opcja'>Dodaj wniosek o zatwierdzenie</div>";
            echo "<div id='deleteApprover_Request' class='opcja'>Usuń wniasek o zatwierdzenie</div>";
            
            }
           else if($_SESSION['login'] == 'Project_Manager'  && $_SESSION['password'] == 'Project_Manager')
           {
            echo "<div id='show' class='opcja'>Lista pracowników</div>";
            echo "<div id='showProject' class='opcja'>Lista projektów</div>";
            echo "<div id='project' class='opcja'>Dodaj projekt</div>";
            echo "<div id='updateProject' class='opcja'>Aktualizuj projekt</div>";           
            echo "<div id='deleteProject' class='opcja'>Usuń projekt</div>";
            echo "<div id='addApprover_Request' class='opcja'>Dodaj wniosek o zatwierdzenie</div>";
            echo "<div id='deleteApprover_Request' class='opcja'>Usuń wniasek o zatwierdzenie</div>";
            
            }
           else if($_SESSION['login'] == 'Employee'  && $_SESSION['password'] == 'Employee')
           {
            echo "<div id='addLeaveRequest' class='opcja'>Dodaj wniosek o urlop</div>";
            
           }
          
            echo "<div id='backToForm' style='float: left;;width:100%;font-size:3vh;text-align:center;height:auto;background-color:antiquewhite;border:solid 1px black;box-sizing:border-box;transition:background-color 0.3s, box-shadow 0.3s;cursor:pointer;' onmouseover=\"this.style.backgroundColor='rgb(204, 191, 175)'; this.style.boxShadow='0 8px 8px rgba(0, 0, 0, 0.1)'\" onmouseout=\"this.style.backgroundColor='antiquewhite'; this.style.boxShadow='none'\">Powrót do formularza logowania</div>";
            


           
           
        ?>   
        </div>      
    </div>
</body>
<script src="../js/navigation.js"></script>
</html>