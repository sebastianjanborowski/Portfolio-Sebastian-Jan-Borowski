const but = document.getElementById('button');

but?.addEventListener('click', () => {
    const name_object = document.getElementById('name') as HTMLInputElement;
    const lastName_object = document.getElementById('lastName') as HTMLInputElement;
    const email_object = document.getElementById('email') as HTMLInputElement;
    const password_object = document.getElementById('password') as HTMLInputElement;

    const name = name_object.value;
    const lastName = lastName_object.value;
    const email = email_object.value;
    const password = password_object.value;

    if (!name || !lastName || !email || !password) {
        alert('Proszę wypełnić wszystkie pola formularza');
        return;
    }

    const formData = {
        name: name,
        lastName: lastName,
        email: email,
        password: password,
    };

    // URL do endpointu PHP
    const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/application%20handmadetree/calculations/add.php";

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
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Błąd podczas fetchowania danych:', error);
        alert('Błąd podczas fetchowania danych: ' + error.message);
    });
});
