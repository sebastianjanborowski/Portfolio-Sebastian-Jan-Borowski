"use strict";
const id_button = document.getElementById("button");
id_button.addEventListener("click", () => {
    const Id_id = document.getElementById("Id");
    const Approver_id = document.getElementById("Approver");
    const Leave_Request_id = document.getElementById("Leave_Request");
    const Status_id = document.getElementById("Status");
    const Comment_id = document.getElementById("Comment");
    const Id = Id_id.value;
    const Approver = Approver_id.value;
    const Leave_Request = Leave_Request_id.value;
    const Status = Status_id.value;
    const Comment = Comment_id.value;
    if (Approver && Leave_Request && Status && Comment && Id) {
        const formData = {
            Id: Id,
            Approver: Approver,
            Leave_Request: Leave_Request,
            Status: Status,
            Comment: Comment
        };
        const url = "http://localhost/test_Praca/OutOfOffice/calculations/updateApprover_Request.php";
        const jsonData = JSON.stringify(formData);
        fetch(url, {
            method: 'POST',
            body: jsonData,
            headers: {
                'Content-Type': 'application/json',
            },
        })
            .then(response => response.json())
            .then(data => {
            alert("Dodano aktualizacje wnisku ");
        })
            .catch(error => {
            alert('Nie dodano aktualizacji wnisoku');
        });
    }
});
