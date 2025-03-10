$(document).ready(function() {
    
    var images2 = ['img-self/Drzewko_Bonsai/1. Niebieskie bonsai, rzeka, żywica epoksydowa, doniczka.jpg',
        'img-self/Drzewko_Bonsai/2. Drzewo Bonsai na Drewnie.jpg',
        'img-self/Drzewko_Bonsai/3. Drzewo słońca, słońce, żywica epoksydowa, cytryn.jpg',
        'img-self/Hawajskie_Palmy/(1) Wyspa, żywica epoksydowa, palma z drutu (1).jpg',
        'img-self/Hawajskie_Palmy/(2) Duża błękitna, niebieska, palma, morze z żywicy epoksydowej.jpg',
        'img-self/Hawajskie_Palmy/(3) Złota hawajska palma, błękitne morze z żywicy epoksydowej.jpg',
        'img-self/Obrazy/(1) red, czerwone drzewo, szkło, złoto.jpg',
        'img-self/Obrazy/(2) Jesienny obraz, żywica epoksydowa, szyszki, bonsai z drutu.jpg',
        'img-self/Obrazy/(3) czarne bonsai na żółtym tle, czarna rama.jpg',
        'img-self/Drzewko na ścianę/(1) fioletowy łapacz snów, bonsai z kryszyałami, pióra.jpg',
        'img-self/Drzewko na ścianę/(2) drzewko na bogactwo, feng shui, ósemna na peniądze.jpg',
        'img-self/Drzewko na ścianę/(3) fioletowe drzewko bonsai, srebrne, na ścianę, lubi słońce.jpg'

]; // Tablica obrazów dla main-image2
    var currentIndex = 0; // Indeks bieżącego obrazu

    // Funkcja otwierająca modal po kliknięciu zdjęcia w galerii lub na main-image
    $('.gallery img, #main-image').click(function() {
        var src = $(this).attr('src');
        $('#modal-image').attr('src', src);
        $('#imageModal').modal('show');
        
        // Aktualizacja currentIndex na podstawie indeksu obrazu w tablicy images2
        currentIndex = images2.indexOf(src);
    });

    // Funkcja obsługująca kliknięcie w przycisk poprzedniego obrazu w modalu
    $('#prev').click(function() {
        currentIndex = (currentIndex - 1 + images2.length) % images2.length;
        updateModalImage();
    });

    // Funkcja obsługująca kliknięcie w przycisk następnego obrazu w modalu
    $('#next').click(function() {
        currentIndex = (currentIndex + 1) % images2.length;
        updateModalImage();
    });

    // Funkcja aktualizująca obraz w modalu na podstawie currentIndex
    function updateModalImage() {
        $('#modal-image').attr('src', getCurrentImage());
    }

    // Funkcja pobierająca aktualny obraz na podstawie currentIndex
    function getCurrentImage() {
        return images2[currentIndex];
    }
});





// Licznik obrazków, przeniesiony poza funkcję, aby zachować jego stan między kliknięciami
var licznikHawajskiePalmy_k1 = 0;
var p = document.getElementById("opisK1PalmyHawajskie");

function krokSlider(where, strona) {
    var ktoryKrok = where;
    var ktoraStrona = strona;

    var imagesHawajskie_K1 = ['img_hawajskiePalmy/1.jpg', 'img_hawajskiePalmy/2.jpg', 'img_hawajskiePalmy/3.jpg'];
    var pHawajskie_K1 = ['Mała (10-12 cm)', 'Średnia (25-28 cm)', 'Duża (35-38 cm)'];
    var k1Slider = document.getElementById("k1Slider");

    // Blok dla przejścia w prawo
    if (ktoryKrok === 1 && ktoraStrona === 1) {
        licznikHawajskiePalmy_k1++;
        if (licznikHawajskiePalmy_k1 >= imagesHawajskie_K1.length) {
            licznikHawajskiePalmy_k1 = 0;
        }

        // Tworzenie i ładowanie obrazu
        let img = new Image();
        img.src = imagesHawajskie_K1[licznikHawajskiePalmy_k1];
        img.className = 'img-fluid imgAll';
        img.onload = () => {
            k1Slider.innerHTML = '';  // Czyści div po załadowaniu obrazu
            k1Slider.appendChild(img);
        };
        p.innerHTML = pHawajskie_K1[licznikHawajskiePalmy_k1];
    }else{
        licznikHawajskiePalmy_k1--;
        if (licznikHawajskiePalmy_k1 < 0) {
            licznikHawajskiePalmy_k1 = imagesHawajskie_K1.length - 1;
        }

        // Tworzenie i ładowanie obrazu
        let img = new Image();
        img.src = imagesHawajskie_K1[licznikHawajskiePalmy_k1];
        img.className = 'img-fluid imgAll';
        img.onload = () => {
            k1Slider.innerHTML = '';  // Czyści div po załadowaniu obrazu
            k1Slider.appendChild(img);
        };
        p.innerHTML = pHawajskie_K1[licznikHawajskiePalmy_k1];
    }


    // W przyszłości można dodać inne bloki na podstawie różnych warunków dla różnych tablic i kroków
}


