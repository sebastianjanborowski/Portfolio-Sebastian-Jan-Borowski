const buttonText = 'button';
const loginText = 'login';
const passwordText = 'password';

const button_id = document.getElementById(buttonText);

button_id?.addEventListener('click', () => {
    const login_object = document.getElementById(loginText) as HTMLInputElement;
    const password_object = document.getElementById(passwordText) as HTMLInputElement;

    const login = login_object.value;
    const password = password_object.value;

    if (login.length > 0 && password.length > 0) 
    {
        alert(`Udana walidacja ${login} ${password}`);
        
        const url = "http://localhost/SerwisBeckendowyHandmadetree.pl/application%20handmadetree/calculations/form.php";
        const formData = {
            login: login,
            password: password,
        };
        fetch(url, 
            {
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
            
    } else {
        alert('Brak danych wejściowych');
    }
});
