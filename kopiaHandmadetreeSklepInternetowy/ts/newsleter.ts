const idButton = document.getElementById("button") as HTMLInputElement;

idButton.addEventListener("click", () => {
    const name_id = document.getElementById("name") as HTMLInputElement;
    const lastName_id = document.getElementById("lastName") as HTMLInputElement;
    const email_id = document.getElementById("email") as HTMLInputElement;
    
    const name: string = name_id.value;
    const lastName: string = lastName_id.value;
    const email: string = email_id.value;

    // Sprawdzenie, czy wszystkie pola są wypełnione
    if (name && lastName && email) {
        // Walidacja długości pól i zgodności haseł
        if (name.length >= 3 && lastName.length >= 3 && email.length >= 3) {
            alert("Udany proces walidacji danych");

            // Tworzenie obiektu z danymi do wysłania
            const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/calculations/newsleter.php";
            const formData = {
                name: name,
                lastName: lastName,
                email: email,
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
            .then(response => response.text()) // Odbieranie odpowiedzi jako tekst
            .then(text => {
                console.log("Odpowiedź z serwera (tekst):", text); // Sprawdź surową odpowiedź
                try {
                    const data = JSON.parse(text); // Próba parsowania tekstu jako JSON
                    console.log("Odpowiedź z serwera (JSON):", data); // Sprawdź sparsowany JSON
                    if (data.error) {
                        alert(data.error);
                    } else if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        alert(data.message || "Wystąpił nieznany błąd");
                    }
                } catch (error) {
                    console.error('Błąd podczas parsowania JSON:', error);
                    alert('Odpowiedź serwera nie jest poprawnym JSON-em');
                }
            })
            .catch(error => {
                console.error('Błąd:', error);
                alert('Wystąpił błąd: ' + error.message);
            });
            
        } else {
            // Informowanie użytkownika o błędach w formularzu
            if (name.length < 3) {
                alert("Za krótkie imię");
            }
            if (lastName.length < 3) {
                alert("Za krótkie nazwisko");
            }
        }
    } else {
        alert("Brakuje danych wyjściowych");
        
    }
});
