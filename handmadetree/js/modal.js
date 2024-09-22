$(document).ready(function() {
    
    var images2 = ['img_galeria/1.jpg', 'img_galeria/2.jpg', 'img_galeria/3.jpg','img_galeria/4.jpg'
    ,'img_galeria/5.jpg','img_galeria/6.jpg','img_galeria/7.jpg','img_galeria/8.jpg','img_galeria/9.jpg'
    ,'img_galeria/10.jpg','img_galeria/11.jpg','img_galeria/12.jpg','img_galeria/13.jpg','img_galeria/14.jpg'
    ,'img_galeria/15.jpg','img_galeria/16.jpg','img_galeria/17.jpg','img_galeria/18.jpg'
    ,'img_galeria/20.jpg','img_galeria/21.jpg','img_galeria/22.jpg','img_galeria/23.jpg','img_galeria/24.jpg'
    ,'img_galeria/25.jpg','img_galeria/26.jpg','img_galeria/27.jpg','img_galeria/28.jpg','img_galeria/30.jpg'
    ,'img_galeria/31.jpg','img_galeria/32.jpg','img_galeria/33.jpg','img_galeria/34.jpg','img_galeria/35.jpg','img_galeria/36.jpg'
    ,'img_galeria/37.jpg','img_galeria/38.jpg','img_galeria/40.jpg','img_galeria/41.jpg','img_galeria/42.jpg'
    ,'img_galeria/43.jpg','img_galeria/44.jpg','img_galeria/45.jpg','img_galeria/46.jpg','img_galeria/47.jpg'
    ,'img_galeria/48.jpg','img_galeria/50.jpg','img_galeria/51.jpg','img_galeria/52red.jpg','img_galeria/53.jpg','img_galeria/54.jpg'
    ,'img_galeria/55.jpg','img_galeria/56.jpg','img_galeria/57.jpg','img_galeria/58.jpg','img_galeria/60.jpg'
    ,'img_galeria/61.jpg','img_galeria/62.jpg','img_galeria/63.jpg','img_galeria/64.jpg','img_galeria/65.jpg'
    ,'img_galeria/66.jpg','img_galeria/67.jpg','img_galeria/68.jpg','img/69. Łapacz snów bonsai i ja.jpg'
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