"use strict";
const but = document.getElementById('button');
but === null || but === void 0 ? void 0 : but.addEventListener('click', () => {
    const Full_Name_object = document.getElementById('Full_Name');
    const Subdivision_object = document.getElementById('Subdivision');
    const Position_object = document.getElementById('Position');
    const People_Partner_object = document.getElementById('People_Partner');
    const Out_of_Balance_object = document.getElementById('Out_of_Balance');
    const Status_object = document.getElementById('Status');
    const Full_Name = Full_Name_object.value;
    const Subdivision = Subdivision_object.value;
    const Position = Position_object.value;
    const People_Partner = People_Partner_object.value;
    const Out_of_Balance = Out_of_Balance_object.value;
    const Status = Status_object.value;
    if (!Full_Name || !Subdivision || !Position || !People_Partner || !Out_of_Balance || !Status) {
        alert('Proszę wypełnić wszystkie pola formularza');
        return;
    }
    const formData = {
        Full_Name: Full_Name,
        Subdivision: Subdivision,
        Position: Position,
        People_Partner: People_Partner,
        Out_of_Balance: Out_of_Balance,
        Status: Status
    };
    // URL do endpointu PHP
    const url = "http://localhost/test_Praca/OutOfOffice/calculations/add.php";
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
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
});
