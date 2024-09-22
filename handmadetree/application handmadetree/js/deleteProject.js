"use strict";
const pp = document.getElementById('button');
pp === null || pp === void 0 ? void 0 : pp.addEventListener('click', () => {
    const Id_object = document.getElementById('Id');
    if (Id_object) {
        const Id = Id_object.value;
        if (Id) {
            const url = "http://localhost/test_Praca/OutOfOffice/calculations/deleteProject.php";
            const formData = {
                Id: Id,
            };
            const jsonData = JSON.stringify(formData);
            fetch(url, {
                method: 'POST',
                body: jsonData, // Tryb CORS
                headers: {
                    'Content-Type': 'application/json',
                },
            })
                .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
                .then(data => {
                console.log('Odpowiedź z serwera:', data);
                alert('Odpowiedź z serwera: ' + JSON.stringify(data));
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
                else {
                    alert(data.message);
                }
            })
                .catch(error => {
                console.error('Błąd podczas fetchowania danych:', error);
                alert('Błąd podczas fetchowania danych: ' + error.message);
            });
        }
        else {
            alert('Proszę wypełnić wszystkie pola');
        }
    }
    else {
        alert('Nie można znaleźć elementów formularza');
    }
});
