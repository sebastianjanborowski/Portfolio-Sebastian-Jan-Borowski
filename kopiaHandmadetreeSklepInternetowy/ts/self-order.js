const palmy_hawajskie = document.getElementById('PodsumowanieHawajskie');
var email = '';
var numer = 0;
var imie = '';


if (palmy_hawajskie) {
    palmy_hawajskie.addEventListener('click', () => {
        dataHawajskie();
    });
}

function dataHawajskie() {
    var id_wyzwalaczPodsumowanie2 = document.getElementById("wyzwalaczPodsumowanie");
    id_wyzwalaczPodsumowanie2.style.display = "block";

    let dataHawajskieObject = {
        options: [],
        description: "",
        provider: "hawajskiePalmy",
        email: email,
        numer: numer,
        imie: imie,
        photo: null
    };

    // Pobranie rozmiaru
    const selectedOption1 = document.querySelector('input[name="sizeOptions1"]:checked');
    const customInputOne = document.getElementById("customSize1");
    if (selectedOption1) {
        const size = selectedOption1.value;
        if (size === "custom" && customInputOne) {
            dataHawajskieObject.options.push(`Rozmiar: ${size} - ${customInputOne.value}`);
        } else {
            dataHawajskieObject.options.push(`Rozmiar: ${size}`);
        }
    }

    // Pobranie materiału
    const selectedOption2 = document.querySelector('input[name="sizeOptions2"]:checked');
    if (selectedOption2) {
        dataHawajskieObject.options.push(`Material: ${selectedOption2.value}`);
    }

    // Pobranie koloru liści
    const leafColorElement = document.getElementById("leafColor");
    if (leafColorElement && selectedOption2?.value === "aluminium") {
        dataHawajskieObject.options.push(`Kolor lisci: ${leafColorElement.value}`);
    }

    // Pobranie koloru pnia
    const trunkColorElement = document.getElementById("trunkColor");
    if (trunkColorElement && selectedOption2?.value === "aluminium") {
        const trunkColorValue = trunkColorElement.value;
        if (trunkColorValue === "custom") {
            const customTrunkColorInput = document.getElementById("customTrunkColor");
            const customColor = customTrunkColorInput?.value.trim() || "nie podano";
            dataHawajskieObject.options.push(`Niestandardowy kolor pnia: ${customColor}`);
        } else {
            dataHawajskieObject.options.push(`Kolor pnia: ${trunkColorValue}`);
        }
    }

    // Pobranie ilości palm
    const selectedOption3 = document.querySelector('input[name="sizeOptions3"]:checked');
    if (selectedOption3) {
        const iloscPalm = selectedOption3.value === "inna" ? 
            document.getElementById("customSizeLiczbaPalm")?.value : 
            selectedOption3.value;
        dataHawajskieObject.options.push(`Ilość palm: ${iloscPalm}`);
    }

    // Rodzaj doniczki
    const selectedOption4 = document.querySelector('input[name="sizeOptions4"]:checked');
    if (selectedOption4) {
        const rodzajDoniczki = selectedOption4.value === "Inna" ? 
            document.getElementById("customPodstawaHawajskie")?.value : 
            selectedOption4.value;
        dataHawajskieObject.options.push(`Rodzaj doniczki: ${rodzajDoniczki}`);
    }

    // Rodzaj ozdoby
    const selectedOption5 = document.querySelector('input[name="sizeOptions5"]:checked');
    if (selectedOption5) {
        const rodzajOzdoby = selectedOption5.value === "inna" ? 
            document.getElementById("customSizeOzdobyHawajskie")?.value : 
            selectedOption5.value;
        dataHawajskieObject.options.push(`Rodzaj ozdoby: ${rodzajOzdoby}`);
    }

    // Grawerowanie
    const selectedOption6 = document.querySelector('input[name="sizeOptions6"]:checked');
    if (selectedOption6) {
        const grawerowanie = selectedOption6.value === "grawerowanie" ? 
            document.getElementById("customGrawerowanieHawajskie")?.value : 
            "Bez";
        dataHawajskieObject.options.push(`Grawerowanie: ${grawerowanie}`);
    }

    // Pobranie opisu poglądowego
    const opisPogladowy = document.getElementById("opisPogladowy");
    dataHawajskieObject.description = opisPogladowy?.value || "Brak";

    // Obsługa zdjęcia
    const photoInput = document.getElementById("photo");
    let photoFileName = "Brak zdjęcia";
    if (photoInput?.files.length > 0) {
        const photoFile = photoInput.files[0];
        photoFileName = photoFile.name;
        dataHawajskieObject.photo = photoFile;
    }

    // Zbieranie danych z formularza
    const imie_id = document.getElementById("imie");
    const numer_id = document.getElementById("numer");
    const email_id = document.getElementById("email");
    imie = imie_id.value;
    numer = numer_id.value;
    email = email_id.value;
    dataHawajskieObject.email = email;
    dataHawajskieObject.imie = imie;
    dataHawajskieObject.numer = numer;

    const wynikiPojedyncze = document.getElementById("wynikiPojedyncze");

// Tworzenie nagłówków tabeli
let trescWynikiPojedyncze = `
    <table class="tabelaPodsumowanie">
        <thead>
            <tr>
                <th>Opcja</th>
                <th>Wartość</th>
            </tr>
        </thead>
        <tbody>
`;

// Dodawanie wierszy do tabeli z opcjami
dataHawajskieObject.options.forEach(option => {
    const [key, value] = option.split(":"); // Zakładając, że opcje są w formacie "Klucz:Wartość"
    trescWynikiPojedyncze += `
        <tr>
            <td>${key}</td>
            <td>${value}</td>
        </tr>
    `;
});

// Dodawanie dodatkowych danych do tabeli
trescWynikiPojedyncze += `
        <tr>
            <td>Zdjęcie</td>
            <td>${photoFileName}</td>
        </tr>
        <tr>
            <td>Imię</td>
            <td>${imie}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>${email}</td>
        </tr>
        <tr>
            <td>Numer telefonu</td>
            <td>${numer}</td>
        </tr>
    </tbody>
</table>
`;

// Wstawianie zawartości do elementu wynikiPojedyncze
wynikiPojedyncze.innerHTML = trescWynikiPojedyncze;


    wynikiPojedyncze.innerHTML = trescWynikiPojedyncze;

    const podsumowanieZamowienia = document.getElementById("podsumowanieZamowienia");
    podsumowanieZamowienia.style.display = "block";

    const cofnij = document.getElementById("cofnij");
    const wyzwalaczPodsumowanie = document.getElementById("wyzwalaczPodsumowanie");
    var ix = document.getElementById("ix");
    // Zabezpieczenie przed wielokrotnym dodaniem nasłuchiwania
    cofnij.replaceWith(cofnij.cloneNode(true));
    wyzwalaczPodsumowanie.replaceWith(wyzwalaczPodsumowanie.cloneNode(true));

    document.getElementById("cofnij").addEventListener('click', () => {
        podsumowanieZamowienia.style.display = "none";
    });

    document.getElementById("wyzwalaczPodsumowanie").addEventListener('click', () => {
        exportDataHawajskie(dataHawajskieObject);
        document.getElementById("cofnij").classList.add("classNoVisibility");
        ix.classList.remove("classNoVisibility");
    });
    
    cofnij.style.display = "block";
    ix.addEventListener("click",() => {
        podsumowanieZamowienia.style.display = "none";
        document.getElementById("cofnij").classList.remove("classNoVisibility");
        ix.classList.add("classNoVisibility");
    });
}

// Funkcja do wysyłania danych na serwer
function exportDataHawajskie(data) {
    const formData = new FormData();
    formData.append("options", JSON.stringify(data.options)); 
    formData.append("description", data.description); 
    formData.append("provider", data.provider); 
    formData.append("imie", data.imie); 
    formData.append("numer", data.numer); 
    formData.append("email", data.email); 

    if (data.photo) {
        formData.append("photo", data.photo);
    }

    const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/selfOrder.php"; 

    fetch(url, {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(result => {
            console.log("Dane wysłane pomyślnie:", result);
            if (result.success) {
                //alert(result.message);
               
            } else {
                //alert("Wystąpił problem: " + result.message);
            }
        })
        .catch(error => {
            //console.error("Błąd wysyłania danych:", error);
            //alert("Wystąpił błąd podczas wysyłania danych: " + error.message);
        });
        koniecZamowienia();
}

function koniecZamowienia(){
    trescWynikiPojedyncze = "";
    trescWynikiPojedyncze += "<h3 class='ph'>Dziękujemy za przesłanie specjalnego zamówienia! </h3>";
    trescWynikiPojedyncze += "<p class='pPp'>Otrzymaliśmy Twój projekt i przystępujemy do wyceny. </p>";
    trescWynikiPojedyncze += "<p class='pPp'>Wkrótce skontaktujemy się z Tobą telefonicznie, aby przedstawić dalsze informacje dotyczące realizacji zamówienia.</p>";
    trescWynikiPojedyncze += "<p class='pPp'>Potwierdzenie złożonego zamówienia wysłaliśmy na Twojego maila. </p>";
    trescWynikiPojedyncze += "<h4 class='ph'>Miłego Dnia.</h4>";

    wynikiPojedyncze.innerHTML = trescWynikiPojedyncze;

    var id_wyzwalaczPodsumowanie2 = document.getElementById("wyzwalaczPodsumowanie");
    id_wyzwalaczPodsumowanie2.style.display = "none";
   
}


