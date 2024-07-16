// Deklaracja zmiennych dla ID elementów
const show = "show";
const add = "add";
const update = "update";
const deletee = "delete";
const back = "back_to_menu";
const addProject = "project";
const updateProject = "updateProject";
const showProject = "showProject";
const deleteProject = "deleteProject";
const addLeaveRequest = "addLeaveRequest";
const showLeaveRequest = "showLeaveRequest";
const updateLeaveRequest = "updateLeaveRequest";
const deleteLeaveRequest = "deleteLeaveRequest";

const addApprover_Request = "addApprover_Request";
const showApprover_Request = "showApprover_Request";
const deleteApprover_Request = "deleteApprover_Request";
const updateApprover_Request = "updateApprover_Request";

const backToForm = "backToForm";
// Pobranie referencji do elementów HTML
const show_id = document.getElementById(show);
const add_id = document.getElementById(add);
const update_id = document.getElementById(update);
const delete_id = document.getElementById(deletee);
const back_id = document.getElementById(back);
const addProject_id = document.getElementById(addProject);
const updateProject_id = document.getElementById(updateProject);
const showProject_id = document.getElementById(showProject);
const deleteProject_id = document.getElementById(deleteProject);
const addLeaveRequest_id = document.getElementById(addLeaveRequest);
const showLeaveRequest_id = document.getElementById(showLeaveRequest);
const updateLeaveRequest_id = document.getElementById(updateLeaveRequest);
const deleteLeaveRequest_id = document.getElementById(deleteLeaveRequest);
const deleteApprover_Request_id = document.getElementById(deleteApprover_Request);
const updateApprover_Request_id = document.getElementById(updateApprover_Request);
const addApprover_Request_id = document.getElementById(addApprover_Request);
const showApprover_Request_id = document.getElementById(showApprover_Request);
const backToForm_id = document.getElementById(backToForm);

// Źródła URL dla nawigacji
const source_show = "../templates/show.php";
const source_add = "../templates/add.php";
const source_update = "../templates/update.php";
const source_delete = "../templates/delete.php";
const source_back = "../public/menu.php";
const source_addProject = "../templates/project.php";
const source_updateProject = "../templates/updateProject.php";
const source_showProject = "../templates/showProject.php";
const source_deleteProject = "../templates/deleteProject.php";
const source_addLeaveRequest = "../templates/addLeaveRequest.php";
const source_showLeaveRequest = "../templates/showLeaveRequest.php";
const source_updateLeaveRequest = "../templates/updateLeaveRequest.php";
const source_deleteLeaveRequest = "../templates/deleteLeaveRequest.php";


const source_showApprover_Request = "../templates/showApprover_Request.php";
const source_deleteApprover_Request = "../templates/deleteApprover_Request.php";
const source_addApprover_Request = "../templates/addApprover_Request.php";
const source_updateApprover_Request = "../templates/updateApprover_Request.php";

const source_backToForm = "../public/index.php";

if(backToForm_id)
{
    backToForm_id.addEventListener("click",() =>{
        window.location.href = source_backToForm;
    })
}

if(deleteApprover_Request_id)
{
    deleteApprover_Request_id.addEventListener("click",() =>{
        window.location.href = source_deleteApprover_Request;
    })
}

if(updateApprover_Request_id)
{
    updateApprover_Request_id.addEventListener("click",() =>{
        window.location.href = source_updateApprover_Request;
    })
}

if(showApprover_Request_id)
{
    showApprover_Request_id.addEventListener("click",() =>{
        window.location.href = source_showApprover_Request;
    })
}

if (addApprover_Request_id) {
    addApprover_Request_id.addEventListener("click", () => {
        window.location.href = source_addApprover_Request;
    });
}

if (deleteLeaveRequest_id) {
    deleteLeaveRequest_id.addEventListener("click", () => {
        window.location.href = source_deleteLeaveRequest;
    });
    
}




if (updateLeaveRequest_id) {
    updateLeaveRequest_id.addEventListener("click", () => {
        window.location.href = source_updateLeaveRequest;
    });
}

if (showLeaveRequest_id) {
    showLeaveRequest_id.addEventListener("click", () => {
        window.location.href = source_showLeaveRequest;
    });
}

if (addLeaveRequest_id) {
    addLeaveRequest_id.addEventListener("click", () => {
        window.location.href = source_addLeaveRequest;
    });
} 

if (deleteProject_id) {
    deleteProject_id.addEventListener("click", () => {
        window.location.href = source_deleteProject;
    });
} 


// Dodanie obsługi zdarzeń dla przycisków
if (showProject_id) {
    showProject_id.addEventListener("click", () => {
        window.location.href = source_showProject;
    });
} 

if (back_id) {
    back_id.addEventListener("click", () => {
        window.location.href = source_back;
    });
} 

if (updateProject_id) {
    updateProject_id.addEventListener("click", () => {
        window.location.href = source_updateProject;
    });
} 

if (addProject_id) {
    addProject_id.addEventListener("click", () => {
        window.location.href = source_addProject;
    });
} 

if (show_id) {
    show_id.addEventListener("click", () => {
        window.location.href = source_show;
    });
} 

if (add_id) {
    add_id.addEventListener("click", () => {
        window.location.href = source_add;
    });
}

if (update_id) {
    update_id.addEventListener("click", () => {
        window.location.href = source_update;
    });
} 

if (delete_id) {
    delete_id.addEventListener("click", () => {
        window.location.href = source_delete;
    });
} 
