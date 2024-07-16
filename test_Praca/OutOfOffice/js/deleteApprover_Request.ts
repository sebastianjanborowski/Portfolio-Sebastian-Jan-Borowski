const id_button = document.getElementById("button") as HTMLInputElement;

    id_button.addEventListener("click",() => {
    const Id_id = document.getElementById("Id") as HTMLInputElement;
    
    const Id = Id_id.value;

    if(Id)
    {
        const formData = {
            Id:Id,
        }
        const url = "http://localhost/test_Praca/OutOfOffice/calculations/deleteApprover_Request.php";
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
            alert("Usunięto wnisek ");
        })
        .catch(error => {
            alert('Nie usunięto wnisoku');
        })
    }
});