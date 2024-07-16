const ppt = document.getElementById('button') as HTMLButtonElement;

ppt?.addEventListener('click', () => {
    const Id_object = document.getElementById('Id') as HTMLInputElement;

    if (Id_object) {
        const Id = Id_object.value;
        

        if (Id) {
            const url = "http://localhost/test_Praca/OutOfOffice/calculations/deleteLeaveRequest.php";
            const formData = {
                Id: Id,
            };

            fetch(url, {
                method: 'POST',
                mode: 'cors', // Tryb CORS
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
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Błąd podczas fetchowania danych:', error);
                alert('Błąd podczas fetchowania danych: ' + error.message);
            });
        } else {
            alert('Proszę wypełnić wszystkie pola');
        }
    } else {
        alert('Nie można znaleźć elementów formularza');
    }
});
