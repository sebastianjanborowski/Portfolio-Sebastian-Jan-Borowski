const id_button = document.getElementById("button") as HTMLInputElement;

    id_button.addEventListener("click",() => {
    const Approver_id = document.getElementById("Approver") as HTMLInputElement;
    const Leave_Request_id = document.getElementById("Leave_Request") as HTMLInputElement;
    const Status_id = document.getElementById("Status") as HTMLInputElement;
    const Comment_id = document.getElementById("Comment") as HTMLInputElement;
    
    const Approver = Approver_id.value;
    const Leave_Request = Leave_Request_id.value;
    const Status = Status_id.value;
    const Comment = Comment_id.value;

    if(Approver && Leave_Request && Status && Comment)
    {
        const formData = {
            Approver:Approver,
            Leave_Request:Leave_Request,
            Status:Status,
            Comment:Comment
        }
        const url = "http://localhost/test_Praca/OutOfOffice/calculations/addApprover_Request.php";
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
            alert("Dodano wnisek ");
        })
        .catch(error => {
            alert('Nie dodano wnisoku');
        })
    }
});