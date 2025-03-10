    // Funkcja do pokazywania odpowiedniej sekcji po kliknięciu przycisku
    function showSection(sectionId,open,toggleContent,pod,where) {
        document.querySelectorAll('.kolorMain').forEach(container => container.classList.add('hidden'));
        document.getElementById(sectionId).classList.remove('hidden');
        document.getElementById(open).style.maxHeight = "50000" + "px";
        document.getElementById(toggleContent).textContent = "-";
        document.getElementById(pod).style.maxHeight = "50000" + "px";
        document.getElementById(where).textContent = "-";

        document.getElementById(open).scrollIntoView({behavior:"smooth",block: "start"});
    }
    
    document.getElementById("buttonJeden").addEventListener('click', () => showSection("jeden","pierwszyContent","pierwszyToogle","content1","spanJedenContent"));
    document.getElementById("buttonDwa").addEventListener('click', () => showSection("dwa","drugiContent","drugiToogle","content2","spanDrugiContent"));
    document.getElementById("buttonTrzy").addEventListener('click', () => showSection("trzy","trzeciContent","trzeciToogle","content3","spanTrzeciContent"));
    document.getElementById("buttonCztery").addEventListener('click', () => showSection("cztery","czwartyContent","czwartyToogle","content4","spanCzwartyContent"));



    document.getElementById("OneNextOne").addEventListener('click', () => showSection2("jedenContentOne","OneDwaSpan"));
    document.getElementById("OneNextTwo").addEventListener('click', () => showSection2("jedenContentTwo","OneTrzySpan"));
    document.getElementById("OneNextThree").addEventListener('click', () => showSection2("jedenContentThree","OneCzterySpan"));

    document.getElementById("TwoNextOne").addEventListener('click', () => showSection2("dwaContentOne","TwoDwaSpan"));
    document.getElementById("TwoNextTwo").addEventListener('click', () => showSection2("dwaContentTwo","TwoTrzySpan"));

    document.getElementById("ThreeNextOne").addEventListener('click', () => showSection2("trzyContentOne","ThreeDwaSpan"));
    document.getElementById("ThreeNextTwo").addEventListener('click', () => showSection2("trzyContentTwo","ThreeTrzySpan"));
    document.getElementById("ThreeNextThree").addEventListener('click', () => showSection2("trzyContentThree","ThreeCzterySpan"));

    document.getElementById("FourNextOne").addEventListener('click', () => showSection2("czteryContentOne","FourDwaSpan"));
    document.getElementById("FourNextTwo").addEventListener('click', () => showSection2("czteryContentTwo","FourTrzySpan"));
    document.getElementById("FourNextThree").addEventListener('click', () => showSection2("czteryContentThree","FourCzterySpan"));

    function showSection2(wartosc,where){
        document.getElementById(wartosc).style.maxHeight = 50000 + "px";
        document.getElementById(where).textContent = "-";
        
        var element = document.getElementById(wartosc);
    
        // Pobieramy wysokość ekranu (widocznej części strony)
        var windowHeight = window.innerHeight;
    
        // Dodajemy 2% wysokości ekranu do pozycji elementu
        var additionalOffset = windowHeight * 0.1;
    
        // Obliczamy pozycję elementu względem dokumentu
        var elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
    
        // Przewijamy do tej pozycji plus dodatkowe 2% wysokości ekranu
        window.scrollTo({
            top: elementPosition - additionalOffset, // Pozycja elementu minus 2% wysokości ekranu
            behavior: "smooth" // Płynne przewijanie
        });
    
    }

    

    
    // Funkcja do rozwijania i zwijania wewnętrznych sekcji w akapitach
    function toggleContent(button) {
        const content = button.parentElement.nextElementSibling;
    
        if (content.style.maxHeight) {
            // Ukryj zawartość, ustawiając max-height na 0
            content.style.maxHeight = null;
            button.textContent = "+";
        } else {
            // Rozwiń zawartość, ustawiając max-height na scrollHeight
            content.style.maxHeight = content.scrollHeight+50000 + "px";
            button.textContent = "-";
        }
    }
    
    // Funkcja do rozwijania i zwijania kroków i podkroków
    function toggleSubsteps(button) {
        const content = button.nextElementSibling;
    
        if (content.style.maxHeight) {
            // Ukryj zawartość, ustawiając max-height na 0
            content.style.maxHeight = null;
            button.querySelector('.toggle-sign').textContent = "+"; // Zmiana znaku na plus
        } else {
            // Rozwiń zawartość, ustawiając max-height na scrollHeight
            content.style.maxHeight = content.scrollHeight + "px";
            button.querySelector('.toggle-sign').textContent = "-"; // Zmiana znaku na minus
        }
    }

    function toggleCustomInput(show) {
        const customInput = document.getElementById('customSizeInput');
        customInput.style.display = show ? 'block' : 'none';
      }
      

      function toggleCustomInput2(show) {
        const customInput2 = document.getElementById('customSizeInput2');
        const customInput3 = document.getElementById('customSizeInput3');
        const customInput4 = document.getElementById('customSizeInput4');
        const customInput5 = document.getElementById('customSizeInput5');
        const customInput6 = document.getElementById('customSizeInput6');
        const customInput7 = document.getElementById('customSizeInput7');

        // Pokazuj tylko ten, który odpowiada wartości 'show'
        if (show == 1) {
            customInput2.style.display = 'block';
            customInput3.style.display = 'none';
        } else if (show == 2) {
            customInput2.style.display = 'none';
            customInput3.style.display = 'block';
        } else if (show == 3) {
             customInput4.style.display = 'block';
        }else if (show == 4) {
             customInput5.style.display = 'block';
        } else if (show == 5) {
            customInput6.style.display = 'block';
        } else if (show == 7) {
            customInput7.style.display = 'block';
        }
        
        if(show == 'a'){
            customInput4.style.display = 'none';
        } 
        if(show == 'b'){
            customInput5.style.display = 'none';
        } 
        if(show == 'c'){
            customInput6.style.display = 'none';
        }   
        if(show == 'd'){
            customInput7.style.display = 'none';
        }         
    }
    
    function toggleCustomTrunkColorInput() {
        const trunkColorSelect = document.getElementById('trunkColor');
        const customTrunkColorInput = document.getElementById('customTrunkColorInput');

        // Sprawdź, czy wybrana opcja to "custom"
        if (trunkColorSelect.value === "custom") {
            customTrunkColorInput.style.display = 'block';
        } else {
            customTrunkColorInput.style.display = 'none';
        }
    }
    
        
      




  