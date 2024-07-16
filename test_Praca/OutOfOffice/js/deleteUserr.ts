const Id = 'Id';//xd
const Full_Name_id = 'Full_Name';
const przycisk_id = 'button';

const button = document.getElementById(przycisk_id) as HTMLButtonElement;

button?.addEventListener('click', () => {
    const Id_object = document.getElementById(Id) as HTMLInputElement;

    if (Id_object) 
    {
        const Id = Id_object.value;
        const url = "http://localhost/test_Praca/OutOfOffice/calculations/delete.php";//localication
            
        const formData = {
                Id: Id
            };
        const jsonData = JSON.stringify(formData);

            fetch(url,{
                method:'POST',
                body:jsonData,
                headers:{
                    'Content-Type':'application/json',
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
    else
    {
        console.log("xd");
    }
});
