"use strict";

const idButton = document.getElementById("button");
const rozne_id = document.getElementById("rozne"); // Przenieś tutaj, aby było w zasięgu

idButton.addEventListener("click", () => {
    const email_id = document.getElementById("email");
    const email = email_id.value;
    let errorShow = ''; // Zainicjalizuj zmienną errorShow

    if (email) {
        if (email.length >= 3) {
            // Przygotowanie danych do wysłania
            const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/newsleter.php";
            const formData = {
                email: email,
            };

            // Wysłanie żądania do serwera
            fetch(url, {
                method: "POST",
                mode: 'cors',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
                .then(response => response.text())
                .then(text => {
                    console.log("Odpowiedź z serwera (tekst):", text);
                    try {
                        const data = JSON.parse(text);
                        console.log("Odpowiedź z serwera (JSON):", data);

                        // Obsługa błędów lub wiadomości
                        if (data.error) {
                            errorShow += '<span class="span">Dany email istnieje w bazie danych</span> <br/>';
                        } else if (data.message) {
                            errorShow += '<span class="span">' + data.message + '</span> <br/>';
                        }
                    } catch (error) {
                        console.error('Błąd podczas parsowania JSON:', error);
                        errorShow += '<span>Odpowiedź serwera nie jest poprawnym JSON-em</span> <br/>';
                    }
                    // Wyświetlanie komunikatów o błędach
                    rozne_id.innerHTML = errorShow;
                })
                .catch(error => {
                    console.error('Błąd:', error);
                    errorShow += '<span>Wystąpił błąd: ' + error.message + '</span> <br/>';
                    rozne_id.innerHTML = errorShow; // Wyświetlenie błędu
                });
        } else {
            errorShow += '<span>Dany email jest zbyt krótki</span> <br/>';
            rozne_id.innerHTML = errorShow; // Wyświetlanie komunikatu o błędzie
        }
    } else {
        //errorShow += '<span class="span">Wpisz email</span> <br/>';
        //rozne_id.innerHTML = errorShow; // Wyświetlanie komunikatu o błędzie
        email_id.classList.add("czerwonyTlo");
    }
});
