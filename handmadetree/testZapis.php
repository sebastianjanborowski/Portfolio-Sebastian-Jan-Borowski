<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja z Google</title>
</head>
<body>
    <h1>Rejestracja z Google</h1>
    
    <button onclick="zalogujSiePrzezGoogle()">Zaloguj się przez Google</button>

    <script>
        function zalogujSiePrzezGoogle() {
            const clientId = '7458942220-s0f6bu5rrstt7eknv8arb51hm3ospqg2.apps.googleusercontent.com';
            const redirectUri = 'http://localhost/SerwisBeckendowyHandmadetree.pl/i.php'; // Upewnij się, że ten URL jest zgodny z tym w Google Developer Console
            const scope = 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email';
            const authUrl = `https://accounts.google.com/o/oauth2/v2/auth?response_type=code&client_id=${clientId}&redirect_uri=${redirectUri}&scope=${encodeURIComponent(scope)}`;

            window.location.href = authUrl;
        }

        function pobierzToken(code) {
            const url = 'https://oauth2.googleapis.com/token';
            const params = {
                code: code,
                client_id: '7458942220-s0f6bu5rrstt7eknv8arb51hm3ospqg2.apps.googleusercontent.com',
                client_secret: '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',
                redirect_uri: 'http://localhost/SerwisBeckendowyHandmadetree.pl/i.php', // Upewnij się, że ten URL jest zgodny z tym w Google Developer Console
                grant_type: 'authorization_code'
            };

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams(params)
            })
            .then(response => response.json())
            .then(data => {
                console.log('Access Token:', data.access_token);
                pobierzDaneZGoogle(data.access_token);
            })
            .catch(error => console.error('Error:', error));
        }

        function pobierzDaneZGoogle(token) {
            const url = 'https://www.googleapis.com/oauth2/v2/userinfo';

            fetch(url, {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                wyslijDaneDoPHP(data);
            })
            .catch(error => console.error('Błąd:', error));
        }

        function wyslijDaneDoPHP(dane) {
            const url = 'login_with_google.php';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(dane)
            })
            .then(response => response.json())
            .then(data => {
                console.log('Sukces:', data);
            })
            .catch(error => console.error('Błąd:', error));
        }

        // Funkcja do obsługi przekierowania z Google z kodem autoryzacyjnym
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const code = urlParams.get('code');
            if (code) {
                pobierzToken(code);
            }
        }
    </script>
</body>
</html>
