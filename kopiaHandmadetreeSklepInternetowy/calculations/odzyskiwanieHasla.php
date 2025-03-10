<?php
session_start();
if($_SESSION['PrzyznanyDostepResetPassword'] === "true")
{
    //echo "dostep przyznany";
    //echo $_SESSION['email'];
    //echo $_SESSION['idUser'];
}
else
{
    header('Location:../zaloguj.php');
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Handmadetree-Rejestracja</title>
    <meta name="description" content="Zapraszamy do Handmade Tree! Sklep z ręcznie robionymi Drzewkami Bonsai. Zapisz się na warsztaty z rękodzieła w Warszawie. Idealne dekoracje do wnętrz i wyjątkowe prezenty. Odkryj piękno rękodzieła i zainspiruj się naszymi unikalnymi produktami. Zobacz więcej!">
    <meta name="keywords" content="">
    <meta name="title" content="Handmadetree-Logowanie">
    <meta name="author" content="Michał">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap">
    <link rel="icon" alt="Logo icon" href="../img/logo_upgrade.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/rejestracja.css"/>
<body>
   
    
    



    <section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <h2 class="headerH2">Odzyskiwanie hasła w serwisie handmadetree</h2>
                <div class="form-group">
            <form method="POST" action="zmianaHasla.php">
                <div class="div">
                    <span class="pZmianaHasla">Kod weryfikacyjny</span><br/> <input class="inputEmail dwa" type="number" name="verfiCode" id="verfiCode"><br/>
                    <span class="pZmianaHasla">Nowe hasło</span> <br/><input class="inputEmail dwa" type="text" name="passwordOne" id="passwordOne"><br/>
                    <span class="pZmianaHasla">Powtórz hasło</span> <br/><input class="inputEmail dwa" type="text" name="passwordTwo" id="passwordTwo"><br/>
                    <button class="buttonHaslo buttonHasloKoreklt" type="submit">Wyślij</button>
                </div>
            </form>               
         </div>
                <div class="text-center">
                </div>
                <a href="../rejestracja.php" class="glownaLink">Powrót na strone główną</a>
                <?php
                    if(isset($_SESSION['wyslanyEmail']))
                    {
                        echo $_SESSION['wyslanyEmail'];
                        unset($_SESSION['wyslanyEmail']);
                    }
                    
                ?>
            </form>
        </div>
    </div>
</section>

   
</body>
</html>


