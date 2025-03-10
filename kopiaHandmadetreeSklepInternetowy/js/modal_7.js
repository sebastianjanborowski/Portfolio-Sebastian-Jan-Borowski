$(document).ready(function() {
    
    var images2 = [
        'img_bizuteria/1.jpg', 'img_bizuteria/2.jpg', 'img_bizuteria/3.jpg', 'img_bizuteria/4.jpg',
        'img_bizuteria/5.jpg', 'img_bizuteria/6.jpg', 'img_bizuteria/7.jpg', 'img_bizuteria/8.jpg',
        'img_bizuteria/9.jpg', 'img_bizuteria/10.jpg', 'img_bizuteria/11.jpg', 'img_bizuteria/12.jpg',
        'img_bizuteria/13.jpg', 'img_bizuteria/14.jpg', 'img_bizuteria/15.jpg', 'img_bizuteria/16.jpg',
        'img_bizuteria/17.jpg', 'img_bizuteria/18.jpg', 'img_bizuteria/20.jpg', 'img_bizuteria/21.jpg',
        'img_bizuteria/22.jpg', 'img_bizuteria/23.jpg', 'img_bizuteria/24.jpg', 'img_bizuteria/25.jpg',
        'img_bizuteria/26.jpg', 'img_bizuteria/27.jpg'
    ];
    
 // Tablica obrazów dla main-image2
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