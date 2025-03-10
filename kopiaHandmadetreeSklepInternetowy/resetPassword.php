<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Handmadetree-Odzyskiwanie hasła</title>
    <meta name="description" content="Zapraszamy do Handmade Tree! Sklep z ręcznie robionymi Drzewkami Bonsai. Zapisz się na warsztaty z rękodzieła w Warszawie. Idealne dekoracje do wnętrz i wyjątkowe prezenty. Odkryj piękno rękodzieła i zainspiruj się naszymi unikalnymi produktami. Zobacz więcej!">
    <meta name="keywords" content="">
    <meta name="title" content="Handmadetree-Logowanie">
    <meta name="author" content="Michał">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap">
    <link rel="icon" alt="Logo icon" href="img/logo_upgrade.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/wspolpraca.css"/>
    <link rel="stylesheet" href="css/style_galeria.css"/>
    <link rel="stylesheet" href="css/zwroty_i_reklamacje.css"/>
    <link rel="stylesheet" href="css/rejestracja.css"/>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!-- Google tag (gtag.js) 
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MG1Z0N96TV"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-MG1Z0N96TV');
    </script>
    -->
    <style>
@media (max-width: 991.98px) {
.sticky 
{
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color:white; 
}
.b
{
    background-color:rgb(255, 255, 255);
    
}   

.mm
{
    margin-top: 25%;
}
     

}
    .sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background-color:white;
}
.b
{
   margin-right: 170px;
    
}    
.heart-icon
  {
    color: rgb(203, 32, 39); /* Kolor bordowej ikonki serca */
    font-size: 2rem; /* Rozmiar ikonki */
  }
  .handshake-icon 
  {
    color: rgb(203, 32, 39); /* Kolor bordowej ikonki "uścisk dłoni" */
    font-size: 2rem; /* Rozmiar ikonki */
  }
  .bubble-icon 
  {
    font-size: 2rem; /* Rozmiar ikonki */
  }

.bubble-icon-left 
  {
    color: rgb(203, 32, 39); /* Kolor bordowej ikonki dymka do rozmow￼ */
  }
  .iframe-container 
    {
      width: 100%; /* Ustaw szerokość iframe na 60% */
      margin: 0 auto; /* Wyśrodkuj iframe */
    }
    .visibility2
{
    display: none;
}

@media (max-width: 767px) {
        
        .visibility
        {
            display: none;
        }
        .visibility2
        {
            display: block;
        }
        .wyrownanie
        {
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            margin-left: 10%;
            white-space: nowrap;
        }
        .wyrownainie2
        {
           margin-left: auto;
           margin-right: auto;
        }
        .wyrownainie3
        {
            margin-left: auto;
            margin-right: auto;
        }
        .wyrownainie4
        {
            text-align: center;
            margin-top: -3%;
        }
        .wyrownainie5
        {
            text-align: center;
        }
        .marginesDolny
        {
            margin-bottom: 5%;
           
        }
}
.rozmiarIkon1
{
    width: 20%;
    margin-left: -10%;
}
.rozmiarIkon2
{
    width: 30%;
    margin-left: -14%;
    margin-right: -5%;
}
@media (max-width: 1240px) {
    .rozmiarIkon1
    {
        width: 2%;
        margin-left: 0%;
        margin-right: 0%;
    }
    .rozmiarIkon2
    {
        width: 3%;
        margin-left: -0.4%;
        margin-right: 0%;
    }
}
@media (max-width: 992px) {
    .rozmiarIkon1
    {
        width: 0.3%;
        margin-left: 0%;
        margin-right: 0%;
    }
    .rozmiarIkon2
    {
        width: 0.5%;
        margin-left: -0.06%;
        margin-right: 0%;
    }
}

    </style>
</head>
<body>

<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <form class="form" method="POST" action="calculations/resetPasword.php">
            <h2 class="headerH2">Odzyskiwanie hasła w serwisie handmadetree</h2>
                <div class="form-group">
                    <input class="inputEmail" id="email" name="email" type="email" required placeholder="Wpisz swój adres email">
                </div>
                <div class="text-center">
                    <button class="buttonHaslo" type="submit">Wyślij</button>
                </div>
                <a href="i.php" class="glownaLink">Powrót na strone główną</a>
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



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

   <script src="js/przewijanie.js"></script>
   <script src="js/modal_4.js"></script>
   <script src="ts/zaloguj.js"></script>
   
</body>
</html>
