"use strict";

// Pobierz elementy DOM
const id_button= document.getElementById("button") as HTMLInputElement;
const error_id = document.getElementById("error");

id_button.addEventListener("click", () => {
    // Pobierz dane wejściowe
    const email_id = document.getElementById("email") as HTMLInputElement;
    const passwordOne_id = document.getElementById("passwordOne") as HTMLInputElement;

    // Zbierz wartości
    const email: string = email_id.value;
    const passwordOne: string = passwordOne_id.value;

    // Zmienna na komunikaty o błędach
    let error = "";

    // Walidacja e-maila
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        error += "Wprowadź poprawny adres e-mail <br/>";
    }
    if(passwordOne.length < 7)
    {
        error += "Hasło musi składać się co najmiej z 8 znaków <br/>";
    }

    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (passwordOne && email ) {
        // Walidacja długości pól i zgodności haseł
        if (passwordOne.length >= 8 && email) {
            const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/logowanie.php";
            const formData = {
                email: email,
                password: passwordOne
            };

            // Wysyłanie danych na serwer
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
                //console.log("Odpowiedź z serwera (tekst):", text);
                try {
                    const data = JSON.parse(text);
                    //console.log("Odpowiedź z serwera (JSON):", data);
                    if (data.error) {
                        // Obsługa błędów serwera
                        error += `${data.error} <br/>`;
                    } else if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        // Można dodać komunikat o sukcesie
                        error += data.message || "Wystąpił nieznany błąd";
                    }
                } catch (e) {
                    //console.error('Błąd podczas parsowania JSON:', e);
                    error += 'Odpowiedź serwera nie jest poprawnym JSON-em <br/>';
                }
                error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
            })
            .catch(e => {
                //console.error('Błąd:', e);
                error += 'Wystąpił błąd: ' + e.message + ' <br/>';
                error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
            });

        } else {   
            error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
        }
    } else {
        // Walidacja, jeśli jakieś pola są puste lub checkboxy nie są zaznaczone
        error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
    }
});
