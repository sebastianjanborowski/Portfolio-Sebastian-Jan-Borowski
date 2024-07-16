$(document).ready(function() {
    
    var images2 = ['img/04.jpg', 'img/2.jpg', 'img/o6.jpg'
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