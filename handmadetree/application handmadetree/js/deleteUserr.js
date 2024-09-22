"use strict";
const id = 'id';
const przycisk_id = 'button';
const button = document.getElementById(przycisk_id);
button === null || button === void 0 ? void 0 : button.addEventListener('click', () => {
    const Id_object = document.getElementById(id);
    if (Id_object) {
        const id = Id_object.value;
        const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/application%20handmadetree/calculations/delete.php"; //localication
        const formData = {
            id: id
        };
        const jsonData = JSON.stringify(formData);
        fetch(url, {
            method: 'POST',
            body: jsonData,
            headers: {
                'Content-Type': 'application/json',
            },
        })
            .then(response => response.json())
            .then(data => {
            alert('Pracownik został usunięty'); // Wyświetla odpowiedź serwera
        })
            .catch(error => {
            console.error('Wystąpił błąd podczas wysyłania żądania:', error);
        });
    }
    else {
        console.log("xggbgfbd");
    }
});
