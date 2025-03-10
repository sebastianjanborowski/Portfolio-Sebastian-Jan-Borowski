"use strict";
const error_id = document.getElementById("error");  // Element do wyświetlania błędów

// Pobierz elementy DOM
const id_Button = document.getElementById("button") as HTMLInputElement;
var newsletter = "false";

id_Button.addEventListener("click", () => {
    // Pobierz dane wejściowe
    const email_id = document.getElementById("email") as HTMLInputElement;
    const passwordOne_id = document.getElementById("passwordOne") as HTMLInputElement;
    const passwordTwo_id = document.getElementById("passwordTwo") as HTMLInputElement;

    const regulamin_id = document.getElementById("checkbox0") as HTMLInputElement;
    const koniecRejestracji_id = document.getElementById("checkbox1") as HTMLInputElement;
    const id_checkbox2 = document.getElementById("checkbox2") as HTMLInputElement;

    let error = "";

    // Zbierz wartości
    const email: string = email_id.value;
    const passwordOne: string = passwordOne_id.value;
    const passwordTwo: string = passwordTwo_id.value;

    // Zmienna na komunikaty o błędach
   

    // Walidacja e-maila
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) 
    {
        email_id.style.backgroundColor = "red";
    }
    else
    {
        email_id.style.backgroundColor = "green";
    }

    if(id_checkbox2.checked)
    {
        newsletter = "true";
    }

    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (passwordOne && passwordTwo && email && regulamin_id.checked && koniecRejestracji_id.checked) {
        // Walidacja długości pól i zgodności haseł
        if (passwordOne.length >= 8 && passwordOne === passwordTwo) {
            const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/rejestracja.php";
            const formData = {
                email: email,
                password: passwordOne,
                newsletter:newsletter
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
                        error += `${data.error} <br/>`;
                        error_id!.innerHTML = error;

                        // Obsługa błędów serwera
                    } else if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        // Można dodać komunikat o sukcesie
                        error += data.message || "Wystąpił nieznany błąd";
                        error_id!.innerHTML = error;

                    }
                } catch (e) {
                   // console.error('Błąd podczas parsowania JSON:', e);
                    //error += 'Odpowiedź serwera nie jest poprawnym JSON-em <br/>';
                   // error_id!.innerHTML = error;

                }
            })
            .catch(e => {
                console.error('Błąd:', e);
               
            });

        } else {
            // Walidacja lokalna
            if (passwordOne.length < 8 || passwordTwo.length < 8 || passwordOne !== passwordTwo) 
            {
                passwordOne_id.style.backgroundColor = "red";
                passwordTwo_id.style.backgroundColor = "red";
            }
            else
            {
                passwordOne_id.style.backgroundColor = "green";
                passwordTwo_id.style.backgroundColor = "green";
            }
            if (!regulamin_id.checked) 
            {
                regulamin_id.style.backgroundColor = "red";
            }
            else
            {
                regulamin_id.style.backgroundColor = "green";
            }
            if (!koniecRejestracji_id.checked) 
            {
                koniecRejestracji_id.style.backgroundColor = "red";
            }
            else
            {
                koniecRejestracji_id.style.backgroundColor = "green";
            }
        }
    } else {
        // Walidacja, jeśli jakieś pola są puste lub checkboxy nie są zaznaczone
      
        if (passwordOne.length < 8 || passwordTwo.length < 8 || passwordOne !== passwordTwo) 
            {
                passwordOne_id.style.backgroundColor = "red";
                passwordTwo_id.style.backgroundColor = "red";
            }
            else
            {
                passwordOne_id.style.backgroundColor = "green";
                passwordTwo_id.style.backgroundColor = "green";
            }
            if (!regulamin_id.checked) 
            {
                regulamin_id.style.backgroundColor = "red";
            }
            else
            {
                regulamin_id.style.backgroundColor = "green";
            }
            if (!koniecRejestracji_id.checked) 
            {
                koniecRejestracji_id.style.backgroundColor = "red";
            }
            else
            {
                koniecRejestracji_id.style.backgroundColor = "green";
            }
    }
    error_id!.innerHTML = error;
});
