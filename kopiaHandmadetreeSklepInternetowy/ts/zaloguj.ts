"use strict";

// Pobierz elementy DOM
const id_button = document.getElementById("button") as HTMLInputElement;
const error_id = document.getElementById("error");  // Element do wyświetlania błędów
var newsletter = "false";

id_button.addEventListener("click", () => {
    // Pobierz dane wejściowe
    const email_id = document.getElementById("email") as HTMLInputElement;
    const passwordOne_id = document.getElementById("passwordOne") as HTMLInputElement;
    const id_checkbox2 = document.getElementById("checkbox2") as HTMLInputElement;

    // Zbierz wartości
    const email: string = email_id.value;
    const passwordOne: string = passwordOne_id.value;

    // Zmienna na komunikaty o błędach
    let error = "";

    // Walidacja e-maila
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        email_id.style.backgroundColor = "red";
    } else {
        email_id.style.backgroundColor = "green";
    }

    // Walidacja hasła
    if (passwordOne.length <= 9) {
        error += "Hasło musi składać się co najmniej z 10 znaków <br/>";
    }

    if (id_checkbox2.checked) {
        newsletter = "true";
    }

    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (passwordOne && email) {
        // Sprawdzenie długości hasła
        if (passwordOne.length >= 10 && email) {
            const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/logowanie.php";
            const formData = {
                email: email,
                password: passwordOne,
                newsletter: newsletter
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
                try {
                    const data = JSON.parse(text);
                    if (data.error) {
                        error += `${data.error} <br/>`;
                    } else if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        error += data.message || "Wystąpił nieznany błąd";
                    }
                } catch (e) {
                    error += 'Odpowiedź serwera nie jest poprawnym JSON-em <br/>';
                }
                // Wyświetlenie błędów po odpowiedzi serwera
                error_id!.innerHTML = error;
            })
            .catch(e => {
                error += 'Błąd połączenia z serwerem <br/>';
                error_id!.innerHTML = error;
            });
        } else {
            // Jeśli walidacja nie przeszła
            if (passwordOne.length <= 10) {
                passwordOne_id.style.backgroundColor = "red";
            } else {
                passwordOne_id.style.backgroundColor = "green";
            }
            // Wyświetlenie błędów po lokalnej walidacji
            error_id!.innerHTML = error;
        }
    } else {
        // Jeśli jakieś pole jest puste
        if (passwordOne.length <= 9) {
            passwordOne_id.style.backgroundColor = "red";
        }
        if (!email) {
            email_id.style.backgroundColor = "red";
        }
        // Wyświetlenie błędów po walidacji pustych pól
        error_id!.innerHTML = error;
    }
    error_id!.innerHTML = error;
});
