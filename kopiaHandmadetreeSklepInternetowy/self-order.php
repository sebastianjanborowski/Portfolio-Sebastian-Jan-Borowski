<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Handmadetree-Self order</title>
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
    <link rel="stylesheet" href="css/zwroty_i_reklamacje.css"/>
    <link rel="stylesheet" href="css/self-order.css"/>
    <link rel="stylesheet" href="css/style_galeria.css"/>
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
</script>
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
    <header class="header_self-order">
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
                    <li class="nav-item dropdown wielkosc hover">
    <a alt="profil" class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mój profil <br/>
        <div class="wynikKolor">
        <?php 
            if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
                //echo '<span class="zalogowanoZielone">Zalogowano</span><br/>';
                echo htmlspecialchars($_SESSION['name']);
            } else {
               // echo '<span class="zalogowanoCzerwone">Nie zalogowano</span>';
            }
        ?>
        </div>
        
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a alt="Logowanie w handmadetree" class="nav-link text-dark alignCenterMenu" href="newsletter.php">Newsletter</a>
        <!--
        <form action="calculations/wyloguj.php" method="POST">
            <button type="submit" class="wylogujButton">Wyloguj</button>
        </form>
        -->
    </div>
</li>
                </ul>
            </div>
        </nav>
    </header> 
    <div  style="width: 100%; border-top:1px solid black; opacity: 0.2; margin-bottom: 3%;margin-top: 2%;"></div>
    
    <section class="container help">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2Content">Hej, Witaj!</h2>
                    <p class="unikatoweHeader">Zaprojektujmy razem Twoje Unikatowe Drzewko.</p>

                    <p class="mainContent">W kilku prostych krokach wybierz styl, rozmiar, kolor i inne detale by stworzyć własne Bonsai. Wypełnij formularz, a my wycenimy twój projekt i skontaktujemy się z tobą za pomocą poczty elektronicznej lub telefonu.</p>
                </div>
            </div>
    </section>

    <section class="container-fluid x">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                <button id="buttonJeden" class="titleKategoriaLink">Drzewka Bonsai</button>
                    <img src="img-self/Drzewko_Bonsai/1. Niebieskie bonsai, rzeka, żywica epoksydowa, doniczka.jpg" class="img-fluid wImages" id="main-image" onclick="openModal('main-image')">
                    <div class="row">
                        <img src="img-self/Drzewko_Bonsai/2. Drzewo Bonsai na Drewnie.jpg" class="img-fluid wImages2" id="main-image" onclick="openModal('main-image')">
                        <img src="img-self/Drzewko_Bonsai/3. Drzewo słońca, słońce, żywica epoksydowa, cytryn.jpg" class="img-fluid wImages2 wImages3" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12">
                <button id="buttonDwa" class="titleKategoriaLink2">Hawajskie Palmy</button>
                    <img src="img-self/Hawajskie_Palmy/1.jpg" class="img-fluid wImages" id="main-image" onclick="openModal('main-image')">
                    <div class="row">
                        <img src="img-self/Hawajskie_Palmy/2.jpg" class="img-fluid wImages2" id="main-image" onclick="openModal('main-image')">
                        <img src="img-self/Hawajskie_Palmy/3.jpg" class="img-fluid wImages2 wImages3" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12">
                <button id="buttonTrzy" class="titleKategoriaLink3">Obraz</button>
                    <img src="img-self/Obrazy/(1) red, czerwone drzewo, szkło, złoto.jpg" class="img-fluid wImages" id="main-image" onclick="openModal('main-image')">
                    <div class="row">
                        <img src="img-self/Obrazy/(2) Jesienny obraz, żywica epoksydowa, szyszki, bonsai z drutu.jpg" class="img-fluid wImages2" id="main-image" onclick="openModal('main-image')">
                        <img src="img-self/Obrazy/(3) czarne bonsai na żółtym tle, czarna rama.jpg" class="img-fluid wImages2 wImages3" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-12">
                <button id="buttonCztery" class="titleKategoriaLink4">Drzewko na Ściane</button>
                    <img src="img-self/Drzewko na ścianę/(1) fioletowy łapacz snów, bonsai z kryszyałami, pióra.jpg" class="img-fluid wImages" id="main-image" onclick="openModal('main-image')">
                    <div class="row">
                        <img src="img-self/Drzewko na ścianę/(2) drzewko na bogactwo, feng shui, ósemna na peniądze.jpg" class="img-fluid wImages2" id="main-image" onclick="openModal('main-image')">
                        <img src="img-self/Drzewko na ścianę/(3) fioletowe drzewko bonsai, srebrne, na ścianę, lubi słońce.jpg" class="img-fluid wImages2 wImages3" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>

                
            </div>
    </section>


    <div id="jeden" class="container-fluid hidden kolorMain">
    <p>
        <span class="spanTitles">Drzewka Bonsai</span>
        <span id="pierwszyToogle" class="toggle-button" onclick="toggleContent(this)">+</span>
    </p>
    <div id="pierwszyContent" class="content">
        <div id="spanJedenContent" class="step" onclick="toggleSubsteps(this)">Krok 1 <span class="toggle-sign">+</span></div>
        <div id="content1"  class="content">
            <div class="row">
                <input id="OneNextOne" type="submit"/>
            </div>
        </div>
        <div class="step" onclick="toggleSubsteps(this)">Krok 2 <span id="OneDwaSpan" class="toggle-sign">+</span></div>
        <div id="jedenContentOne" class="content">
            Opcja 2.1: <input type="text" placeholder="Opcja 2.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            <input id="OneNextTwo" type="submit"/>
        </div>
        <div class="step" onclick="toggleSubsteps(this)">Krok 3 <span id="OneTrzySpan" class="toggle-sign">+</span></div>
        <div id="jedenContentTwo" class="content">
            Opcja 3.1: <input type="text" placeholder="Opcja 3.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            <input id="OneNextThree" type="submit"/>
        </div>
        <div class="step" onclick="toggleSubsteps(this)">Krok 4 <span id="OneCzterySpan" class="toggle-sign">+</span></div>
        <div id="jedenContentThree" class="content">
            Opcja 4.1: <input type="text" placeholder="Opcja 4.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
        </div>
        <!-- Zamknięcie dla #jedenContentThree -->
    </div>
    <!-- Zamknięcie dla #pierwszyContent -->
</div>
<!-- Zamknięcie dla #jeden -->
<div id="dwa" class="container-fluid hidden kolorMain">
    <p>
        <span class="spanTitles">Hawajskie Palmy </span>
        <span id="drugiToogle" class="toggle-button" onclick="toggleContent(this)">+</span>
    </p>
    <div id="drugiContent" class="content">
        <div class="step" onclick="toggleSubsteps(this)">Krok 1 <span id="spanDrugiContent" class="toggle-sign">+</span></div>
        <div id="content2" class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2All">1.1 Wysokość rzeźby</h2>
                </div>
                <div class="col-lg-5 marg ods">
                    <div id="hawajskieJeden">
                       <img id="0" src="img-self/Hawajskie_Palmy/1.jpg" class="img-fluid wImages">
                        <div class="row">
                            <img id="1" src="img-self/Hawajskie_Palmy/2.jpg" class="img-fluid wImages23" id="main-image" onclick="openModal('main-image')">
                            <img id="2" src="img-self/Hawajskie_Palmy/3.jpg" class="img-fluid wImages23 wImages233" id="main-image" onclick="openModal('main-image')">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ods">
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" id="sizeSmall" name="sizeOptions1" value="małe" onchange="toggleCustomInput(false)"> Mała (10-12 cm)
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" id="sizeMedium" name="sizeOptions1" value="średnie" onchange="toggleCustomInput(false)"> Średnia (25-28 cm)
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" id="sizeLarge" name="sizeOptions1" value="duże" onchange="toggleCustomInput(false)"> Duża (35-38 cm)
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" id="sizeCustom" name="sizeOptions1" name="sizeOptions1" value="inny" onchange="toggleCustomInput(true)"> Niestandardowy
                    </label>
                    <div class="form-group mt-3" id="customSizeInput">
                        <label for="customSize1">Podaj własny rozmiar:</label>
                        <input class="clear" type="text" class="form-control" id="customSize1" placeholder="Wpisz rozmiar">
                    </div>
                </div>

                <div class="col-lg-12">
                    <h2 class="h2All">1.2 Wybór użytego drutu</h2>
                </div>

                <div class="col-lg-5 marg ods">
                    <div id="hawajskieJeden">
                       <img id="3" src="img-self/Hawajskie_Palmy/4.jpg" class="img-fluid wImages" id="main-image" onclick="openModal('main-image')">
                        <div class="row">
                            <img id="4" src="img-self/Hawajskie_Palmy/5.jpg" class="img-fluid wImages23" id="main-image" onclick="openModal('main-image')">
                            <img id="5" src="img-self/Hawajskie_Palmy/6.jpg" class="img-fluid wImages23 wImages233" id="main-image" onclick="openModal('main-image')">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ods">
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions2" value="aluminium" onchange="toggleCustomInput2(1)"> Aluminium
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions2" value="miedź" onchange="toggleCustomInput2(2)"> Miedź
                    </label>
                    
                    <div class="form-group mt-3" id="customSizeInput3">
                        <p class="paragrafyP">Wybierając miedź, aktualnie nie ma opcji zmiany koloru, gdyż pozostawiamy materiał w jego naturalnej formie</p>
                    </div>

                    <div class="form-group mt-3" id="customSizeInput2">
                        <h2 class="h2All">Kolor Liści</h2>
                        <select id="leafColor" class="form-control listy">
                            <option value="zielony">Zielony</option>
                            <option value="złoty">Złoty</option>
                            <option value="niebieski">Błękitny</option>
                            <option value="srebrny">Srebrny</option>
                            <option value="różowy">Różowy</option>
                            <option value="jasny fiolet">Jasny fiolet</option>
                        </select>

                        <div class="marginesGora">
                            <h2 class="h2All">Kolor Pnia</h2>
                            <label for="trunkColor">Wybierz kolor pnia:</label>
                            <select id="trunkColor" class="form-control listy" onchange="toggleCustomTrunkColorInput()">
                                <option value="jasny brązowy">Brązowy jasny</option>
                                <option value="ciemny brązowy">Brązowy ciemny</option>
                                <option value="czrany">Czarny</option>
                                <option value="inny">Inny kolor (wpisz)</option>
                            </select>
                        </div>

                        <div id="customTrunkColorInput" style="display: none; margin-top: 20px;">
                            <input class="clear form-control odstepMiedzyInput" type="text" id="customTrunkColor" placeholder="Wpisz kolor">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 odstepInputs">
                    <input class="nextInputK" value="Dalej" id="TwoNextOne" type="submit"/>
                </div>
            </div>
        </div>

        <div class="step" onclick="toggleSubsteps(this)">Krok 2 <span id="TwoDwaSpan" class="toggle-sign">+</span></div>
        <div id="dwaContentOne" class="content">
        <div class="row">
                <div class="col-lg-12 ods">
                <h2 class="h2All">2.1 Ilość palm</h2>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions3" value="jeden" onchange="toggleCustomInput2('a')"> Jedna
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions3" value="dwa" onchange="toggleCustomInput2('a')"> Dwie
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions3" value="trzy" onchange="toggleCustomInput2('a')"> Trzy
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions3" value="inna" onchange="toggleCustomInput2(3)"> Inna liczba
                    </label>

                    <div style="display: none; margin-top: 20px;" class="form-group mt-3" id="customSizeInput4">
                        <input class="clear" type="number" class="form-control" id="customSizeLiczbaPalm" placeholder="Wpisz Ilość">
                    </div>
                </div>
                <div class="col-lg-6 ods">
                    <div id="hawajskieJeden">
                    <img id="6" src="img-self/Hawajskie_Palmy/7.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="7" src="img-self/Hawajskie_Palmy/8.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="8" src="img-self/Hawajskie_Palmy/9.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="9" src="img-self/Hawajskie_Palmy/10.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>
                <div class="col-lg-6 ods">
                <h2 class="h2All">2.2 Podstawa Palmy</h2>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions4" value="Doniczka Ceramiczna" onchange="toggleCustomInput2('b')"> Doniczka Ceramiczna
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions4" value="Kamień Naturalny" onchange="toggleCustomInput2('b')"> Kamień Naturalny
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions4" value="Płyta Mdf" onchange="toggleCustomInput2('b')"> Płyta Mdf
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions4" value="Drewno" onchange="toggleCustomInput2('b')"> Drewno
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions4" value="Inna" onchange="toggleCustomInput2(4)"> Inna Podstawa
                    </label>

                    <div style="display: none; margin-top: 20px;" class="form-group mt-3" id="customSizeInput5">
                        <input class="clear" type="text" class="form-control" id="customPodstawaHawajskie" placeholder="Podaj podstawę">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 odstepInputs">
                    <input class="nextInputK" value="Dalej" id="TwoNextTwo" type="submit"/>
                </div>
        </div>

        <div class="step" onclick="toggleSubsteps(this)">Krok 3 <span id="TwoTrzySpan" class="toggle-sign">+</span></div>
        <div id="dwaContentTwo" class="content">
            <div class="row">
            <div class="col-lg-6 ods">
                    <div id="hawajskieJeden">
                    <img id="10" src="img-self/Hawajskie_Palmy/11.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="11" src="img-self/Hawajskie_Palmy/12.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="12" src="img-self/Hawajskie_Palmy/13.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="13" src="img-self/Hawajskie_Palmy/14.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>
            <div class="col-lg-6 ods">
                <h2 class="h2All">3.1 Dodatki</h2>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="muszle, piasek, kamienie" onchange="toggleCustomInput2('c')"> Muszle, piasek, kamienie
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="bursztyny" onchange="toggleCustomInput2('c')"> Bursztyny
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="rozgwiazda" onchange="toggleCustomInput2('c')"> Rozgwiazda
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="drewno" onchange="toggleCustomInput2('c')"> Drewno
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="morskie fale z żywicy epoksydowej" onchange="toggleCustomInput2('c')"> morskie fale z żywicy epoksydowej
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="perły" onchange="toggleCustomInput2('c')"> Perły
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions5" value="inne" onchange="toggleCustomInput2(5)"> Inne dodatki
                    </label>

                    <div style="display: none; margin-top: 20px;" class="form-group mt-3" id="customSizeInput6">
                        <input class="clear" type="text" class="form-control" id="customSizeOzdobyHawajskie" placeholder="Wpisz Ilość">
                    </div>
                </div>
                <div class="col-lg-6 ods">
                    <div id="hawajskieJeden">
                    <img id="14" src="img-self/Hawajskie_Palmy/15.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    <img id="15" src="img-self/Hawajskie_Palmy/\16.jpg" class="img-fluid wImages4" id="main-image" onclick="openModal('main-image')">
                    </div>
                </div>
                <div class="col-lg-6 ods">
                <h2 class="h2All">3.2 Personalizacja  (Opcja dodatkowa)</h2>
                    
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions6" value="Bez grawerowania" onchange="toggleCustomInput2('d')"> Bez grawerowania
                    </label>
                    <label class="btn btn-outline-primary clear">
                        <input type="radio" name="sizeOptions6" value="grawerowanie" onchange="toggleCustomInput2(7)"> Grawerowanie
                    </label>

                    <div style="display: none; margin-top: 20px;" class="form-group mt-3" id="customSizeInput7">
                        <input class="clear" type="text" class="form-control" id="customGrawerowanieHawajskie" placeholder="Podaj napis do grawerowania">
                    </div>
                </div>
                <div class="col-lg-12">
                <h2 class="h2All">3.3 Dodaj zdjęcie poglądowe  (Opcja dodatkowa)</h2>
                <label for="photo" class="form-label fw-bold">Wybierz plik</label>
                    <input type="file" class="form-control photoFile" id="photo" name="photo" accept="image/*">
                </div>
                
                <div class="col-lg-12">
                <h2 class="h2All">3.4 Pole tekstowe do opisania dodatkowych szczegółów  (Opcja dodatkowa)</h2>
                    <input type="text" class="text" placeholder="Podaj Opis" id="opisPogladowy">
                </div>
                
            </div>
            <div class="col-lg-12">
            <div class="containerPodsumowanie">
            <input type="text" class="inputPodsumowanie" id="imie" placeholder="podaj imie">
            <input type="number" class="inputPodsumowanie" id="numer" placeholder="podaj Telefon">
            <input type="text" class="inputPodsumowanie" id="email" placeholder="podaj emial">
            
        </div>
            </div>
            
            <div class="col-lg-12 odstepInputs">
                    <input class="nextInputK" value="Podsumowanie" id="PodsumowanieHawajskie" type="submit"/>
                </div>
            </div>
        </div>
        
    </div>
</div>


    <div id="trzy" class="container-fluid hidden kolorMain">
    <p>
        <span class="spanTitles">Obraz </span>
            <span id="trzeciToogle" class="toggle-button" onclick="toggleContent(this)">+</span>
        </p>
        <div id="trzeciContent" class="content">
            <div id="spanTrzeciContent" class="step" onclick="toggleSubsteps(this)">Krok 1 <span class="toggle-sign">+</span></div>
            <div id="content3" class="content">
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" /> <br/>
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" /><br/>
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" /><br/>
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" /><br/>
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" /><br/>

            <input id="ThreeNextOne" type="submit"/>

            </div>
            <div class="step" onclick="toggleSubsteps(this)">Krok 2 <span id="ThreeDwaSpan" class="toggle-sign">+</span></div>
            <div id="trzyContentOne" class="content">
                Opcja 2.1: <input type="text" placeholder="Opcja 2.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                <input id="ThreeNextTwo" type="submit"/>
            </div>
            <div class="step" onclick="toggleSubsteps(this)">Krok 3 <span id="ThreeTrzySpan" class="toggle-sign">+</span></div>
            <div id="trzyContentTwo" class="content">
                Opcja 3.1: <input type="text" placeholder="Opcja 3.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                <input id="ThreeNextThree" type="submit"/>
            </div>
            <div class="step" onclick="toggleSubsteps(this)">Krok 4 <span id="ThreeCzterySpan" class="toggle-sign">+</span></div>
            <div id="trzyContentThree" class="content">
                Opcja 4.1: <input type="text" placeholder="Opcja 4.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            </div>
        </div>
    </div>

    <div id="cztery" class="container-fluid hidden kolorMain">
    <p>
        <span class="spanTitles">Drzewka na Ściane</span>
            <span id="czwartyToogle" class="toggle-button" onclick="toggleContent(this)">+</span>
        </p>
        <div id="czwartyContent" class="content">
            <div class="step" id="spanCzwartyContent" onclick="toggleSubsteps(this)">Krok 1 <span class="toggle-sign">+</span></div>
            <div id="content4" class="content">

                <div class="row">
                <input id="FourNextOne" type="submit"/>
                </div>    

            </div>
            <div class="step" onclick="toggleSubsteps(this)">Krok 2 <span id="FourDwaSpan" class="toggle-sign">+</span></div>
            <div id="czteryContentOne" class="content">
                Opcja 2.1: <input type="text" placeholder="Opcja 2.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                <input id="FourNextTwo" type="submit"/>
            </div>
            <div class="step" onclick="toggleSubsteps(this)">Krok 3 <span id="FourTrzySpan" class="toggle-sign">+</span></div>
            <div id="czteryContentTwo" class="content">
                Opcja 3.1: <input type="text" placeholder="Opcja 3.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                <input id="FourNextThree" type="submit"/>
            </div>
            <div class="step" onclick="toggleSubsteps(this)">Krok 4 <span id="FourCzterySpan" class="toggle-sign">+</span></div>
            <div id="czteryContentThree" class="content">
                Opcja 4.1: <input type="text" placeholder="Opcja 4.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
                Opcja 1.1: <input type="text" placeholder="Opcja 1.1.1" />
            </div>
        </div>
    </div>

    
    

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img id="modal-image" src="" class="img-fluid r" alt="Obraz">
                                    <div class="tllo">
                                        <button alt="prev" id="prev" class="nav-btn prev"><img alt="prevImg" class="strzalka2" loading="lazy" src="img/strzalka_2.png"></button>
                                        <button alt="next" id="next" class="nav-btn next"><img alt="nextImg" class="strzalka3" loading="lazy"  src="img/strzalka_2.png"></button>
                                        <button alt="close-btn" id="close-btn" class="close" data-dismiss="modal">x</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                
                    <div id="mainTablica" class="sliderHawajskie">
                        <div class="rightDiv">
                            <img id="rightFoto" class="strzalkaSlider s" src="img/strzalka_2.png">
                        </div>

                        <div id="visibilityFoto" class="fotoSlider">

                        </div>

                        <div class="leftDiv">
                            <img id="leftFoto" class="strzalkaSlider2" src="img/strzalka_2.png">
                        </div>


                            
                            <div id="input3" class="input3">x</div>
                            <div class="mobileNavigationSlider">                               
                            <img id="leftFoto1" class="strzalkaSlider2Mobile" src="img/strzalka_2.png">
                            <div id="input4" class="input4">x</div>
                            <img id="rightFoto1" class="strzalkaSliderMobile" src="img/strzalka_2.png">
                            
                        </div>

                    </div>
                    

                    
    
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

   <script src="js/przewijanie.js"></script>
   <script src="js/selfModal.js"></script>
   <script src="js/selfmodal2.js"></script>
   <script src="js/selfPalmy.js"></script>
   <script src="ts/self-order.js"></script>

    <div style="display: none;" class="podsumowanieZamowienia" id="podsumowanieZamowienia">
    
        <div class="wyniki">
            <h2 class="podsumowanieH1">Podsumownaie zamówienia</h2>
            <div id="ix" class="ix classNoVisibility">x</div>
            <div class="wynikiPojedyncze" id="wynikiPojedyncze">

            </div>
            <input type="submit" value="Wyślij" id="wyzwalaczPodsumowanie" class="InputPodsumowaieSubmit">
            <input type="submit" value="cofnij" id="cofnij" class="InputPodsumowaieSubmit2">
        </div>
             
    </div>

</body>
</html>
