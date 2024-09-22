<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Handmadetree-Newsleter</title>
    <meta name="description" content="Zapraszamy do Handmade Tree! Sklep z ręcznie robionymi Drzewkami Bonsai. Zapisz się na warsztaty z rękodzieła w Warszawie. Idealne dekoracje do wnętrz i wyjątkowe prezenty. Odkryj piękno rękodzieła i zainspiruj się naszymi unikalnymi produktami. Zobacz więcej!">
    <meta name="keywords" content="">
    <meta name="title" content="Handmadetree-Newsleter">
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
@media (max-width: 992px) {
    .rozmiarIkon1
    {
        width: 8%;
        margin-left: -1%;
        margin-right: 2.5%;
    }
    .rozmiarIkon2
    {
        width: 13%;
        margin-left: -3%;
        margin-right: 0%;
    }
}
    </style>
</head>
<body>
  

    <div  style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 2%;margin-top: 8%;"></div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="form">
                    <form>
                            <input class="input" type="text" id="name" name="name" placeholder="Imię" minlength="3" required> <br/>
                            
                            <input class="input" type="text" id="lastName" name="lastName" placeholder="Nazwisko" minlength="2" required> <br/>

                            <input class="input" type="email" id="email" name="email" placeholder="Emial" required> <br/>

                            <button class="button" id="button">Wyślij</button>  
                        </form>
                </div>   

                <div class="error" id="rozne" >
                    <a href="zaloguj.php">Zaloguj sie</a>
                </div>    
                <div class="error" id="rozne">
                    <a href="rejestracja.php">Rejestracja</a>
                </div>
                <div class="error" id="rozne">
                    <a href="newsleter.php">Newsleter</a>
                </div>   
            </div>
            
            
                
        </div>
            <?php
                if(isset($_SESSION['email']))
                {
                    echo $_SESSION['email'];
                    session_destroy();
                }
            ?>
            <div class="error" id="rozne"></div>
    </section>
    
    <div  style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 3%;margin-top: 2%;"></div>
  
    <button onclick="scrollToTop()" id="scrollToTopBtn" alt="Przewiń do góry" title="Przewiń do góry"><img class="strzalka" src="img/strzalka_2.png"></button>
    <button title="Skontaktuj się z Handmade Tree" class="messenger-button" style="background-color: transparent;" alt="Skontaktuj się z Handmade Tree" title="Messenger-button"> <a target="_blank" alt="Skontaktuj się z Handmade Tree"  href="https://m.me/100000738468369"><i class="fab fa-facebook-messenger"></i></a>  </button>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


   <script src="js/przewijanie.js"></script>
   <script src="js/modal_4.js"></script>
   <script src="ts/newsleter.js"></script>
</body>
</html>
