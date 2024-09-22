<?php
    session_start();
    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == false)
    {
      header("Location:rejestracja.php");  
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Handmadetree-Strona Główna</title>
    <meta name="description" content="Zapraszamy do Handmade Tree! Sklep z ręcznie robionymi Drzewkami Bonsai. Zapisz się na warsztaty z rękodzieła w Warszawie. Idealne dekoracje do wnętrz i wyjątkowe prezenty. Odkryj piękno rękodzieła i zainspiruj się naszymi unikalnymi produktami. Zobacz więcej!">
    <meta name="keywords" content="Drzewka bonsai, Handmade Tree, Sklep z rękodziełem, Ręcznie robione Bonsai, Drzewo życia, Lampa Bonsai, prezent, drzewka z drutu, sklep z bonsai, dekoracje do ogrodu">
    <meta name="title" content="Handmadetree-Strona Główna">
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
    <header>
        <nav class="navbar navbar-dark bg-jumpers navbar-expand-lg sticky" >
            <a title="Przejdź na stronę główną" alt="Przejdź na stronę główną" class="navbar-brand" href="index.php"> <img class="logo" alt="Logo" src="img/logo_upgrade.png"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
                <img alt="Menu button" src="img/przycisk.avif" height="30px" width="40px">
            </button>
            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav wielkosc">
                    <li class="nav-item hover">
                        <a class="nav-link text-dark" alt="Sprawdź inspiracje w aranżacji wnętrz " href="aranzacja_wnetrz.php">  Aranżacja Wnętrz </a>
                    </li>
                    <li class="nav-item hover">
                        <a class="nav-link text-dark" alt="Zapisz się na warsztaty rękodzieła w Warszawie " href="warsztaty.php">  Warsztaty z rękodzieła</a>
                    </li>
                    <li class="nav-item hover">
                        <a class="nav-link text-dark" alt="Przeczytaj więcej o mnie" href="o_mnie.php">  O mnie </a>
                    </li>
                    <li class="nav-item dropdown wielkosc hover">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="Sprawdź ofertę specjalną na drzewka bonsai w Sklepie Etsy"> Sklep </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a alt="Sprawdź ofertę specjalną na drzewka bonsai w Sklepie Etsy" class="dropdown-item czcionka_p" href="http://handmadetreepl.etsy.com/" target="_blank"><i style="background-color:#F16521; color: white; padding:1% 2% 0.5% 2%;" class="fab fa-etsy"></i> Przenieś na Etsy</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown wielkosc hover">
                        <a alt="Zobacz Galerię Inspiracji" class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galerie Inspiracji</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a alt="Galeria biżuterii z duszą" class="dropdown-item czcionka_p" href="galeria-bizuteri.php" ><img alt="Galeria biżuterii z duszą zdjęcie naszyjnika" loading="lazy" class="rozmiarIkon1" alt="" src="img/naszyjnik.png"> Biżuteria z duszą</a>
                        <a alt="Galeria ręcznie robionych drzewek bonsai" class="dropdown-item czcionka_p" href="galeria.php" > <img alt="Galeria ręcznie robionych drzewek bonsai zdjęcie drzewka bonsai" loading="lazy" class="rozmiarIkon2" src="img/drzewo.png"> Drzewka Bonsai</a>
                        </div>
                        
                    </li>
                    
                    <li class="nav-item hover">
                        <a alt="Skontaktuj się z Handmade Tree" class="nav-link text-dark" href="kontakt.php">  Kontakt </a>
                    </li>
                    <li class="nav-item hover">
                        <a alt="Sprawdź naszą ofertę dla firm" class="nav-link text-dark" href="wspolpraca.php">  Współpraca </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container-fluid m">
        <div class="col-md-12 ">
            <img alt="banner etsy Handmadetree, michał matracki bonsai z drutu" src="img/baner_etsy.jpg" loading="lazy"  class="img-fluid baner-img baner-img-mobile rounded-img" alt="Baner">
        </div>
       
        </section>
        <div class="col-md-12 mm">
            <img alt="banner facebook Matracki Michał Handmadetreepl" src="img/baner_mobile.jpg" loading="lazy" class="img-fluid baner-img baner_mobile  rounded-img n" alt="Baner">
        </div>

        
    
        <section>
            <section class="container style">
                <div class="row">
                    <div class="col-lg-5 order-sm-1 order-md-1">    
                        <p class="czcionka_p wielkosc33 lece2"><b class="fontB">Sklep artystyczny z ręcznie robionymi Drzewkami Bonsai i biżuterią z miedźi.</b></p>

                        <p class="czcionka_h  lece2">
                            <a class="link2" alt="Sprawdź ofertę specjalną na drzewka bonsai w Sklepie Etsy " title="Sprawdź ofertę specjalną na drzewka bonsai w Sklepie Etsy" target="_blank" href="http://handmadetreepl.etsy.com/">Kup drzewko! Sklep na Etsy</a>
                       </p> 

                        <p class="czcionka_p wielkosc33 lece2"><b class="fontB"><span style="text-decoration: underline;">Zaprojektuj własne Drzewko</span> i nadaj swojemu wnętrzu oryginalny charakter.</b></p>
                        
                        <p class="czcionka_h lece">
                            <a alt="kontaktuj się z Handmade Tree" title="kontaktuj się z Handmade Tree" class="link" href="kontakt.php">Kontakt</a>
                        </p>

                        
                       
                        
                    </div>
                    <div class="col-lg-7 order-sm-2 order-md-2 fix10">
                        <h4 class="font-weight-bold mb-3 text-center wielkoscc">Best Bonsai Collection 2023/24</h4>
                        <p class="czcionka_h wielkosc text-center">
                           Sprawdz co czyni te drzewka wyjątkowymi.  
                        </p>
                        <iframe alt="Zobacz kolekcję najładniejszych bonsai na YouTube" title="Zobacz kolekcję najładniejszych bonsai na YouTube" class="embed-responsive-item" style="border-radius: 20px; margin-left: 5%; width: 90%; height: 35vh;" src="https://www.youtube.com/embed/BBZkgO7ndXo" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
          
            <section class="container-fluid kropki">
                <div class="row text-center fix2">
    
                    <div class="col-lg-2 fix">
                        
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <i class="fas fa-heart heart-icon fa-3x"></i><br/>
                            <h5 class="czcionka font-weight-bold mb-3"> Unikatowe rzeźby.</h5>
                        </div>
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <p class="czcionka text-muted wielkosc2 fix3">Jedyne w swoim rodzaju dzieła sztuki.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <i class="fas fa-handshake handshake-icon fa-3x"></i>
                            <h5 class="czcionka font-weight-bold mb-3"> Indywidualne projekty.</h5>
                        </div>
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <p class="czcionka text-muted wielkosc2 fix3">Już dziś zaprojektuj własne drzewko.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <i class="fas fa-comment bubble-icon bubble-icon-left fa-3x"></i>
                            <h5 class="czcionka font-weight-bold mb-3"> Masz pytania?</h5>
                        </div>
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <p class="czcionka text-muted wielkosc2 fix3">Pisz do mnie śmiało.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <i class="fas fa-plane bubble-icon bubble-icon-left fa-3x mr-2"></i>
                            <h5 class="czcionka font-weight-bold mb-3"> Wysyłka zagraniczna.</h5>
                        </div>
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <p class="czcionka text-muted wielkosc2 fix3">Wyślij unikatowy prezent do rodziny z zagranicy.</p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <i class="fas fa-hammer bubble-icon bubble-icon-left fa-3x mr-2"></i>
                            <h5 class="czcionka font-weight-bold "> Warsztaty z rękodzieła.</h5>
                        </div>
                        <div class=" justify-content-between align-items-center col-sm-12">
                            <p class="czcionka text-muted wielkosc2 fix4">Sprzawdz aktualne terminy warsztatów.</p>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            <div style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 1%; margin-top: 1%;"></div>
            
            
            
            
        
        </section>
        <section class="container">
            <div class="row">
                <h3 class="czcionka font-weight-bold mb-3 t visibility2 wyrownainie2">Jak zacząłem przygodę <br/>z Drzewkami Bonsai</h3>
                <div class="col-md-6 col-sm-12 order-sm-2 order-lg-1 order-md-1">  
                    <img alt="Michał Matracki rękodzieło HandmadeTree rękodzieło złote bonsai" loading="lazy" src="img/2_new.jpg" onclick="openModal('main-image2')" class="img-fluid rounded-img zdjecia main-image round">
                    </div>
    
                <div class="col-md-6 pad  order-sm-1 order-lg-2  order-md-2">
                    <h3 class="czcionka font-weight-bold mb-3 t visibility">Jak zacząłem przygodę <br/>z Drzewkami Bonsai</h3>
                    <p class="czcionka_p wielkosc">Hej, jestem Michał. Mam 35 lat i pochodzę z Piaseczna. Moja miłość do drzew i przyrody zaczęła się, gdy byłem jeszcze dzieckiem. Już wtedy bardzo lubiłem wspinać się na sam szczyt drzewa i oglądać piękne widoki. Później, gdy byłem starszy, malowałem je na ścianach, a teraz od 4 lat robię je w formie rzeźb, obrazów, lamp i makiet. Każde Bonsai jest wyrazem mojego zainteresowania naturą, sztuką, symboliką i energią. Kierując się intuicją, wplatam te subtelne przekazy i płynącą z niej mądrość w swoje prace...</p>
                    <a alt="Dowiedz się więcej o mojej historii" title="Dowiedz się więcej o mojej historii" href="o_mnie.php" class="btn btn-primary">Czytaj więcej </a>     
                <?php
                        if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true)
                            {
                                echo "<p class='error'>Witaj ".$_SESSION['email']."</p>";
                                echo "<p class='error'>Witaj ".$_SESSION['name']."</p>";
                            }
                ?>
                </div>
                
                
            </div>
            
           
        </section>
        <div style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 2%; margin-top: 2%;"></div>

        
        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img loading="lazy" id="modal-image" src="" class="img-fluid r" alt="Obraz">
                        <div class="tllo">
                            <button alt="prev" id="prev" class="nav-btn prev"><img alt="prevImg" class="strzalka2" src="img/strzalka_2.png"></button>
                            <button alt="next" id="next" class="nav-btn next"><img alt="nextImg" class="strzalka3"  src="img/strzalka_2.png"></button>
                            <button alt="close-btn" id="close-btn" class="close" data-dismiss="modal">x</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <section class="py-5 kreska3">
        <div class="container">
            <div class="row">
                <h3 class="czcionka font-weight-bold mb-3 t visibility2 wyrownainie5">Zajrzyj głębiej i zobacz duszę Bonsai</h3>

                <div class="col-md-6 marginesDolny order-lg-2 order-md-2 order-sm-2">
                    <img alt="dzieło sztuki dłonie z gipsu pięści drzewko bonsai z drutu, rzeźba bonsai" loading="lazy" src="img/3-4.jpg" onclick="openModal('main-image2')" class="img-fluid rounded-img zdjecia mar main-image round">
                </div>
                <div class="col-md-6 order-lg-1 order-md-1 order-sm-1">  
                    <h3 class="czcionka font-weight-bold mb-3 t2 visibility">Zajrzyj głębiej i zobacz duszę Bonsai</h3>
                    <p class="czcionka_p wielkosc">Historia Drzewek Bonsai narodziła się w starożytnych Chinach, gdzie początkowo praktykowano uprawianie roślin i drzew w pojemnikach. Nazywano je “penzai” lub “ penjing”. Następnie technika ta dotarła do Japonii, gdzie stała się znana jako "bonsai", co dosłownie oznacza "roślina w pojemniku". W Japonii sztuka hodowli drzewek rozwijała się na przestrzeni wieków, osiągając bardzo wysoki poziom i znaczenie kulturowe. Bonsai nie tylko było postrzegane jako sztuka dekoracyjna, ale również jako praktyka duchowa i filozoficzna. Lecz ja osobiście nie jestem za podcinaniem i naginaniem żywej rośliny pod swoją wolę. Drzewka z drutu aluminiowego i miedzianego otwierają znacznie większe możliwości kreacji i wyrażania swojego wnętrza poprzez sztukę. Hasłem przewodnim mojej twórczej działalności jest “Nowy Wymiar Drzewek Bonsai”. Stwierdzenie to oznacza...</p>
                    <a alt="Sprawdź inspiracje w aranżacji wnętrz" title="Sprawdź inspiracje w aranżacji wnętrz" href="o_mnie.php" class="btn btn-primary">Czytaj więcej</a>
                </div>
                
            </div>
        </div>
    </section>
            <div style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 0%; margin-top: 0%;"></div>

    <section class="container">
        <div class="row">
            
            <h3 class="czcionka font-weight-bold mb-3 t2 visibility2 wyrownainie4">Przemień Przestrzeń w Oazę Spokoju</h3>
            <div class="col-md-6 order-sm-2 order-md-1 marginesDolny">
                <img alt="fioletowe purpurowe bonsai wierzba z drutu, Trzecie oko, dekoracje do medytacji" loading="lazy" src="img/3.jpg" onclick="openModal('main-image2')" class="img-fluid rounded-img zdjecia main-image round">
            </div>
            <div class="col-md-6 order-sm-1 order-lg-2  order-md-2">
                <h3 class="czcionka font-weight-bold mb-3 t visibility">Przemień Przestrzeń w Oazę Spokoju</h3>
                    <p class="czcionka_p wielkosc">W gąszczu codziennych zadań i obowiązków poszukujemy miejsca, gdzie możemy odpocząć od hałasu i wyciszyć się w swoim domu.  Włączyć muzykę i wyciszyć komórkę. W czasach, gdy wszystko staje się coraz bardziej masowe i powtarzalne, tworzenie wyjątkowej przestrzeni staje się priorytetem. Drzewka Bonsai stają się niezastąpione w tworzeniu harmonijnych przestrzeni, gdzie energia płynie swobodnie, a serca biją w rytm natury...</p>
                <a alt="Czytaj więcej o historii bonsai" title="Czytaj więcej o historii bonsai" href="aranzacja_wnetrz.php" class="btn btn-primary">Czytaj więcej</a>
            </div>
        </div>
    </section>
    
    
    <div  style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 3%;margin-top: 2%;"></div>
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center fo">
                <div>
                <div class="row">
                        <div class="left col-lg-4 ">
                            <p class="align flo ma order-sm-1 line"><a alt="Ustawienia: Zarządzaj swoim kontem" class="footer_link" href="moje_konto.php">Moje Konto - Ustawiania</a></p>
                            <p class="align flo ma order-sm-2 line"><a alt="Przeczytaj regulamin sklepu HandmadeTree" class="footer_link" href="regulamin_sklepu.php">Regulamin Sklepu</a></p>
                            <p class="align flo ma order-sm-3 line"><a alt="Dowiedz się, jak zwrócić produkt" class="footer_link" href="zwroty_i_reklamacje.php"> Zwroty i Reklamacje </a></p>
                        </div>
                          
                        <div class="left col-lg-4">
                            <p class="align flo ma order-sm-4 line"><a alt="Zapoznaj się z naszą polityką prywatności" class="footer_link " href="polityka_prywatnosci.php">Polityka Prywatności </a></p>  
                            <p class="align flo ma order-sm-5 line"><a alt="Sprawdź dostępne metody płatności i raty" class="footer_link" href="formy_platnosci_i_raty.php">Formy Płatności i Raty</a></p>
                        </div>
                        
                        <div class="left col-lg-4">
                            <p class="align flo ma order-sm-6 line"><a alt="Zobacz czas i koszty wysyłki" class="footer_link" href="czas_i_koszt_dostawy.php"> Czas i Koszt Dostawy </a></p>
                            <p class="align flo ma order-sm-7 line"><a alt="Sprawdź, jak pakujemy Twoje zamówienie" class="footer_link" href="czas_realizacja_zamowienia_i_pakowania.php">    Czas Realizacji  i <br/><br/> Pakowanie Zamówienia</a></p> 
                            
    
                        </div>
                    </div>
                   
                    
                   </div>
                  
                
                </div>
        </div>
    </div>

    <section class="container final">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2 col-2 text-center">
                <a title="Sprawdź ofertę sklepu na Amazonie" alt="Sprawdź ofertę sklepu na Amazonie" target="_blank" href="amazon.php" class="social-media-link-amazon">
                    <i class="fab fa-amazon"></i>
                </a>
            </div>
            <div class="col-lg-2 col-2 text-center">
                <a title="Dołącz do naszej społeczności na Facebooku" alt="Dołącz do naszej społeczności na Facebooku" href="http://www.facebook.com/handmadetreepl" class="social-media-link-fb" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
            <div class="col-lg-2 col-2 text-center">
                <a title="Śledź nas na Instagramie" alt="Śledź nas na Instagramie" target="_blank" href="https://www.instagram.com/handmadetree_pl" class="social-media-link-in">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="col-lg-2 col-2 text-center">
                <a title="Dołącz do naszej społeczności na Pinterest" alt="Dołącz do naszej społeczności na Pinterest" target="_blank" href="https://pin.it/SjdLOuI" class="social-media-link-pi">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
            <div class="col-lg-2 col-2 text-center">
                <a title="Sprawdź ofertę specjalną na drzewka bonsai w Sklepie Etsy" alt="Sprawdź ofertę specjalną na drzewka bonsai w Sklepie Etsy" target="_blank" href="http://handmadetreepl.etsy.com/" class="social-media-link-et">
                    <i class="fab fa-etsy"></i>
                </a>
            </div>
            <div class="col-lg-2 col-2 text-center">
                <a title="Subskrybuj nasz kanał na YouTube" alt="Subskrybuj nasz kanał na YouTube" target="_blank" href="https://www.youtube.com/channel/UCBX-n3HWt_nKb3-vuD5anjQ" class="social-media-link-yt">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </section>
    
    
    <section class="container-fluid malo2 y">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p class="malo koniec">&copy; 2024 Wszelkie prawa zastrzeżone. </p>
                <p class="malo koniec"> Sklep artystyczny  z ręcznie robionymi Drzewkami  Bonsai.</p>
            </div>
        </div>
    </section>
    
    <button onclick="scrollToTop()" id="scrollToTopBtn" alt="Przewiń do góry" title="Przewiń do góry"><img class="strzalka" src="img/strzalka_2.png"></button>
    <button title="Skontaktuj się z Handmade Tree" class="messenger-button" style="background-color: transparent;" alt="Skontaktuj się z Handmade Tree" title="Messenger-button"> <a target="_blank" alt="Skontaktuj się z Handmade Tree"  href="https://m.me/100000738468369"><i class="fab fa-facebook-messenger"></i></a>  </button>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-BIvlEeX6C0RcS0zPClqJSh6Zl/CVQGX2v3rxHNE8rFwtokNrmnPEJ4WMWigz2tC8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-BIvlEeX6C0RcS0zPClqJSh6Zl/CVQGX2v3rxHNE8rFwtokNrmnPEJ4WMWigz2tC8" crossorigin="anonymous"></script>

   <script src="js/przewijanie.js"></script>
   <script src="js/modal_4.js"></script>
</body>
</html>
