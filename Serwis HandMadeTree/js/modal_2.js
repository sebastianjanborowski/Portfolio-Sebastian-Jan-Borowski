$(document).ready(function() {
    
    var images2 = ['img_warsztaty/1.jpg', 'img_warsztaty/2.jpg', 'img_warsztaty/3.jpg','img_warsztaty/4.jpg'
    ,'img_warsztaty/5.jpg','img_warsztaty/6.jpg','img_warsztaty/7.jpg','img_warsztaty/8.jpg','img_warsztaty/9.jpg'
    ,'img_warsztaty/10.jpg','img_warsztaty/11.jpg','img_warsztaty/12.jpg','img_warsztaty/13.jpg','img_warsztaty/14.jpg'
    ,'img_warsztaty/15.jpg','img_warsztaty/16.jpg'
]; // Tablica obrazów dla main-image2
    var currentIndex = 0; // Indeks bieżącego obrazu

    // Funkcja otwierająca modal po kliknięciu zdjęcia w galerii lub na main-image
    $('.gallery img, .main-image').click(function() {
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