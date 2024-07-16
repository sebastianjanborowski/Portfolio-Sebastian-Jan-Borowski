const login_id = document.getElementById("login");
const password_id = document.getElementById("password");
const submit_id = document.getElementById("submit");
const formularz_id = document.getElementById("formularz");
const algabet_id = document.getElementById("alfabet");
const pojemnik_id = document.getElementById("pojemnik");
submit_id.addEventListener('click', () => {
    if (login_id.value === "nikita" && password_id.value === "promid") 
    {
        formularz_id.classList.add('fade-out');
        setTimeout(() => {
            formularz_id.style.display = 'none';
            algabet_id.style.display = "block";
            pojemnik_id.style.display = "block";
        }, 1000); // Czas trwania animacji (3 sekundy)
        
    }
});
