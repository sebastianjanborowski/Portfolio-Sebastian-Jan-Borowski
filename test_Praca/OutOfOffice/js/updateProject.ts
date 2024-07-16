const p = document.getElementById('button') as HTMLButtonElement;

p?.addEventListener('click', () => {
    const Id_object = document.getElementById('Id') as HTMLInputElement;
    const Project_Type_object = document.getElementById('Project_Type') as HTMLInputElement;
    const Start_Date_object = document.getElementById('Start_Date') as HTMLInputElement;
    const End_Date_object = document.getElementById('End_Date') as HTMLInputElement;
    const Comment_object = document.getElementById('Comment') as HTMLInputElement;
    const Project_Manager_object = document.getElementById('Project_Manager') as HTMLInputElement;
    const Status_object = document.getElementById('Status') as HTMLInputElement;


    if (Project_Type_object && Start_Date_object && End_Date_object && Status_object && Comment_object && Project_Manager_object && Id_object) {
        const Id = Id_object.value;
        const Project_Type = Project_Type_object.value;
        const Start_Date = Start_Date_object.value;
        const End_Date = End_Date_object.value;
        const Project_Manager = Project_Manager_object.value;
        const Comment = Comment_object.value;
        const Status = Status_object.value;

        if (Project_Type.length > 0) 
        {
            const url = "http://localhost/test_Praca/OutOfOffice/calculations/updateProject.php";
            const formData = {
            Id:Id,
            Project_Type: Project_Type,
            Start_Date: Start_Date,
            End_Date:End_Date,
            Project_Manager:Project_Manager,
            Comment:Comment,
            Status:Status
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
            }
            else {
                alert(data.message);
            }
        });
    }
    else 
    {
        alert('Please fill in the fields');
    }
}});
