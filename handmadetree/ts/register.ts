"use strict";

// Pobierz elementy DOM
const id_Button = document.getElementById("button") as HTMLInputElement;
const error_id = document.getElementById("error");

id_Button.addEventListener("click", () => {
    // Pobierz dane wejściowe
    const email_id = document.getElementById("email") as HTMLInputElement;
    const passwordOne_id = document.getElementById("passwordOne") as HTMLInputElement;
    const passwordTwo_id = document.getElementById("passwordTwo") as HTMLInputElement;
    const regulamin_id = document.getElementById("checkbox0") as HTMLInputElement;
    const koniecRejestracji_id = document.getElementById("checkbox1") as HTMLInputElement;

    // Zbierz wartości
    const email: string = email_id.value;
    const passwordOne: string = passwordOne_id.value;
    const passwordTwo: string = passwordTwo_id.value;

    // Zmienna na komunikaty o błędach
    let error = "";

    // Walidacja e-maila
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        error += "Wprowadź poprawny adres e-mail <br/>";
    }

    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (passwordOne && passwordTwo && email && regulamin_id.checked && koniecRejestracji_id.checked) {
        // Walidacja długości pól i zgodności haseł
        if (passwordOne.length >= 8 && passwordOne === passwordTwo) {
            const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/rejestracja.php";
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
                console.log("Odpowiedź z serwera (tekst):", text);
                try {
                    const data = JSON.parse(text);
                    console.log("Odpowiedź z serwera (JSON):", data);
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
                    console.error('Błąd podczas parsowania JSON:', e);
                    error += 'Odpowiedź serwera nie jest poprawnym JSON-em <br/>';
                }
                error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
            })
            .catch(e => {
                console.error('Błąd:', e);
                error += 'Wystąpił błąd: ' + e.message + ' <br/>';
                error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
            });

        } else {
            // Walidacja lokalna
            if (passwordOne !== passwordTwo) {
                error += "Hasła są różne <br/>";
            }
            if (passwordOne.length < 8 || passwordTwo.length < 8) {
                error += "Hasło musi składać się co najmniej z 8 znaków <br/>";
            }
            if (!regulamin_id.checked) {
                error += "Należy przeczytać regulamin <br/>";
            }
            if (!koniecRejestracji_id.checked) {
                error += "Należy dokończyć rejestrację na podstronie moje konto <br/>";
            }
            error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
        }
    } else {
        // Walidacja, jeśli jakieś pola są puste lub checkboxy nie są zaznaczone
        if (passwordOne !== passwordTwo) {
            error += "Hasła są różne <br/>";
        }
        if (passwordOne.length < 8 || passwordTwo.length < 8) {
            error += "Hasło musi składać się co najmniej z 8 znaków <br/>";
        }
        if (!regulamin_id.checked) {
            error += "Należy przeczytać regulamin <br/>";
        }
        if (!koniecRejestracji_id.checked) {
            error += "Należy dokończyć rejestrację na podstronie moje konto <br/>";
        }
        error_id.innerHTML = error; // Wyświetlanie komunikatów o błędach
    }
});
