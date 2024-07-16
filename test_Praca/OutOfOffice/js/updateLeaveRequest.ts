const b = document.getElementById('button');

b.addEventListener('click', () => {
    const Id_object = document.getElementById('Id');
    const Employee_object = document.getElementById('Employee');
    const Absense_Reason_object = document.getElementById('Absense_Reason');
    const Start_Date_object = document.getElementById('Start_Date');
    const End_Date_object = document.getElementById('End_Date');
    const Comment_object = document.getElementById('Comment');
    const Status_object = document.getElementById('Status');

    const Id = Id_object.value;
    const Employee_Type = Employee_object.value;
    const Absense_Reason = Absense_Reason_object.value;
    const Start_Date = Start_Date_object.value;
    const End_Date = End_Date_object.value;
    const Comment = Comment_object.value;
    const Status = Status_object.value;

    const formData = {
        Id: Id,
        Employee: Employee_Type,
        Absense_Reason: Absense_Reason,
        Start_Date: Start_Date,
        End_Date: End_Date,
        Comment: Comment,
        Status: Status
    };

    // URL do endpointu PHP
    const url = "http://localhost/test_Praca/OutOfOffice/calculations/updateLeaveRequest.php";

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
