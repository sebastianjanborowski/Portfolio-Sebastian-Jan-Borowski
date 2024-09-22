"use strict";
const bu = document.getElementById('button');
bu === null || bu === void 0 ? void 0 : bu.addEventListener('click', () => {
    const Employee_object = document.getElementById('Employee');
    const Absense_Reason_object = document.getElementById('Absense_Reason');
    const Start_Date_object = document.getElementById('Start_Date');
    const End_Date_object = document.getElementById('End_Date');
    const Comment_object = document.getElementById('Comment');
    const Status_object = document.getElementById('Status');
    const Employee = Employee_object.value;
    const Absense_Reason = Absense_Reason_object.value;
    const Start_Date = Start_Date_object.value;
    const End_Date = End_Date_object.value;
    const Comment = Comment_object.value;
    const Status = Status_object.value;
    const formData = {
        Employee: Employee,
        Absense_Reason: Absense_Reason,
        Start_Date: Start_Date,
        End_Date: End_Date,
        Comment: Comment,
        Status: Status
    };
    const jsonData = JSON.stringify(formData);
    // Logowanie danych do konsoli (do debugowania)
    console.log('Wysyłanie danych:', jsonData);
    // URL do endpointu PHP
    const url = "http://localhost/test_Praca/OutOfOffice/calculations/addLeaveRequest.php";
    fetch(url, {
        method: 'POST',
        body: jsonData,
        headers: {
            'Content-Type': 'application/json',
        },
    })
        .then(response => response.json())
        .then(data => {
        alert("Dodano wniosek o urlop");
    })
        .catch(error => {
        alert("Nie dodano wnisku o urlop ");
    });
});
