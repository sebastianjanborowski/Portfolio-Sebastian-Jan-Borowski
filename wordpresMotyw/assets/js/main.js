//otwarcie mobile menu
function toggleMenu() {
    var x = document.getElementById("navbarNav");
    if (x.classList.contains("show")) {
        x.classList.remove("show");
    } else {
        x.classList.add("show");
    }
}
//zmiana zdjęcia w slider zdjęcie numer 1
function removePhotoOne() {
    var myImage = document.getElementById("myImage");
    myImage.src = themeUrl + '/assets/images/photo1.png';
}
//zmiana zdjęcia w slider zdjęcie numer 2
function removePhotoTwo() {
    var myImage = document.getElementById("myImage");
    myImage.src = themeUrl + '/assets/images/photo2.png';
}
//zmiana zdjęcia w slider zdjęcie numer 3
function removePhotoThree() {
    var myImage = document.getElementById("myImage");
    myImage.src = themeUrl + '/assets/images/photo3.png';
}
//zmiana zdjęcia w slider zdjęcie numer 4
function removePhotoFour() {
    var myImage = document.getElementById("myImage");
    myImage.src = themeUrl + '/assets/images/photo4.png';
}

//przesunięcie do sekcji DLACZEGO
function moveOne()
{
     const targetElement = document.getElementById('dlaczegoFinish');
     targetElement.scrollIntoView({ behavior: 'smooth' });
}
//przesunięcie do sekcji JAK SIĘ ZAPISAĆ
function moveTwo()
{
     const targetElement = document.getElementById('zapisacFinish');
     targetElement.scrollIntoView({ behavior: 'smooth' });
}
//przesunięcie do sekcji FAQ
function moveThree()
{
     const targetElement = document.getElementById('faqFinish');
     targetElement.scrollIntoView({ behavior: 'smooth' });
}
//przesunięcie do sekcji HOME
function moveFour()
{
     const targetElement = document.getElementById('homeFinish');
     targetElement.scrollIntoView({ behavior: 'smooth' });
}
//odpowiada za działanie przycisku w FAQ 
function toggleBlock(target, button) {
    
    const blocks = document.querySelectorAll('.block');
    const targetBlock = document.querySelector(`.${target}`);
    const isActive = targetBlock.classList.contains('show');

    
    blocks.forEach(block => {
        block.classList.remove('show');
    });
    document.querySelectorAll('.toggle-button').forEach(btn => {
        btn.classList.remove('rotated', 'minus');
    });

    if (!isActive) {
        targetBlock.classList.add('show');
        button.classList.add('rotated', 'minus');

        const movableElement = document.querySelector('.movable-element');
            movableElement.style.marginTop = '20%';  // Set the new margin-top position
            movableElement.style.marginBottom = '20%';  // Set the new margin-bottom position

    } else {
        const movableElement = document.querySelector('.movable-element');
            movableElement.style.marginTop = '0%';  // Set the new margin-top position
            movableElement.style.marginBottom = '0%';  // Set the new margin-bottom position
    }
}

const jestSerwerDoUzycia = false;// stała boolionowa odpowiedzialna za dopuszczanie danych do wysłania na serwer.

//walidacja danych oraz przyszykowanie ich do wysłąnia na serwer z użyciem fetch
    function formInputs()
    {
        var imie_nazwisko = document.getElementById("imieNazwisko").value;
        var email = document.getElementById("email").value;
        var trescWiadomosci = document.getElementById("trescWiadomosci").value;

        if(imie_nazwisko && email && trescWiadomosci)
        {
            alert(`Udana próba walidacji danych`);
            console.log(`${imie_nazwisko}  ${email}   ${trescWiadomosci}`);

            if(jestSerwerDoUzycia == true)
            {
                alert(`Przygotowywanie danych do konwerjsi na plik JSON`);
                const Data = {
                    imie_nazwisko:imie_nazwisko,
                    emial:email,
                    trescWiadomosci:trescWiadomosci
                };
                const jsonData = JSON.stringify(Data);
    
                const url = `#adres serwera`;//Wystarczy podać lokalizacje serwera(chodzi o url)
    
                fetch(url,{
                    method:'Post',
                    headers:{
                        'Content-Type':'application/json'
                    },
                    body:jsonData
                })
    
                .then(response => response.json())
                .then(data => {
                    alert(`Odpowiedz z serwera `,data);
                })
    
                .catch(error => {
                    console.error('Błąd:', error);
                });
            }
            else
            {
                alert(`Nie ma serwera który by obsłużył tan kod. Trzeba dostosowac kod`);
            }
            
        }
        else
        {
            console.log(`${imie_nazwisko}  ${email}   ${trescWiadomosci}`);

            alert(`Nie udana próba walidacji danych, króreś pole nie posiadało znaku`);
        }
    }
       

   
   
    




